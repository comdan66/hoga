<form id='fm' action='<?php echo base_url (array ('admin', $uri_1, $press->id));?>' method='post' enctype='multipart/form-data'>
  <input type='hidden' name='_method' value='put' />
  <input type='hidden' name='user_id' value='<?php echo User::current ()->id;?>'>

  <table class='table-form'>
    <tbody>

      <tr>
        <th>標 題：</th>
        <td>
          <input type='text' name='title' value='<?php echo isset ($posts['title']) ? $posts['title'] : $press->title;?>' placeholder='請輸入標題..' maxlength='200' pattern='.{1,200}' required title='輸入標題!' autofocus />
        </td>
      </tr>

      <tr>
        <th>年 份：</th>
        <td>
          <select name='year'>
      <?php for ($i = date ('Y'); $i > 2011; $i--) { ?>
              <option value='<?php echo $i;?>'<?php echo (isset ($posts['year']) ? $posts['year'] : $press->year) == $i ? ' selected': '';?>><?php echo $i;?>年</option>
      <?php }?>
          </select>
        </td>
      </tr>

      <tr>
        <th>小 圖：</th>
        <td>
          <?php echo (string)$press->small ? img ($press->small->url ('100x100c'), false, 'class="name"') : '';?>
          <input type='file' name='small' value='' />
        </td>
      </tr>

      <tr>
        <th>大 圖：</th>
        <td>
          <?php echo (string)$press->big ? img ($press->big->url ('100x100c'), false, 'class="name"') : '';?>
          <input type='file' name='big' value='' />
        </td>
      </tr>

      <tr>
        <th>是否啟用：</th>
        <td>
          <select name='is_enabled'>
      <?php if ($isIsEnabledNames = KawashimaPress::$isIsEnabledNames) {
              foreach ($isIsEnabledNames as $key => $name) { ?>
                <option value='<?php echo $key;?>'<?php echo (isset ($posts['is_enabled']) ? $posts['is_enabled'] : $press->is_enabled) == $key ? ' selected': '';?>><?php echo $name;?></option>
        <?php }
            }?>
          </select>
        </td>
      </tr>

      <tr>
        <td colspan='2'>
          <a href='<?php echo base_url ('admin', $uri_1);?>'>回列表</a>
          <button type='reset' class='button'>重填</button>
          <button type='submit' class='button'>確定</button>
        </td>
      </tr>
    </tbody>
  </table>
</form>
