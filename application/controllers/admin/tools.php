<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

class Tools extends Admin_controller {

  public function ckeditors_upload_image () {
    $funcNum = $_GET['CKEditorFuncNum'];
    $upload = OAInput::file ('upload');
    
    $cke = null;
    $create = CkeditorPicture::transaction (function () use ($upload, &$cke) {
      if (!($upload && verifyCreateOrm ($cke = CkeditorPicture::create (array ('name' => '')))))
        return false;
      return $cke->name->put ($upload);
    });

    if (!($create && $cke))
      echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction ($funcNum, '', '上傳失敗！');</script>";
    else
      echo "<script type='text/javascript'>window.parent.CKEDITOR.tools.callFunction ($funcNum, '" . $cke->name->url ('400w') . "', '上傳成功！');</script>";
  }
}
