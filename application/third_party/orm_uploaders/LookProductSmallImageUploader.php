<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/**
 * @author      OA Wu <comdan66@gmail.com>
 * @copyright   Copyright (c) 2016 OA Wu Design
 */

class LookProductSmallImageUploader extends OrmImageUploader {

  public function getVersions () {
    return array (
        '' => array ('adaptiveResizeQuadrant', 230, 150, 'c'),
        '100x100c' => array ('adaptiveResizeQuadrant', 100, 100, 'c'),
      );
  }
}