<!DOCTYPE html>
<html lang="zh">
  <head>
    <?php echo isset ($meta_list) ? $meta_list : ''; ?>

    <title><?php echo isset ($title) ? $title : ''; ?></title>

<?php echo isset ($css_list) ? $css_list : ''; ?>

<?php echo isset ($js_list) ? $js_list : ''; ?>

  </head>
  <body lang="zh-tw">
    <?php echo isset ($hidden_list) ? $hidden_list : ''; ?>
    <?php echo isset ($content) ? $content : ''; ?>


<?php if ($_flash_message = Session::getData ('_flash_message', true)) { ?><div class='_m'><?php echo $_flash_message;?></div><?php }?>
  </body>
</html>