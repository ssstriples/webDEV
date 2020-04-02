<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <?php
      echo (100+10).'<br/>';
      echo ((100+10)/10).'<br/>';
      echo (((100+10)/10)-10).'<br/>';
      echo ((((100+10)/10)-10)*10).'<br/>';
    ?>
    <br/>
    <?php
      $a = 100;
      $a = $a + 10;
      print $a.'<br />';
      $a = $a / 10;
      print $a.'<br />';
      $a = $a - 10;
      print $a.'<br />';
      $a = $a * 10;
      print $a.'<br />';
    ?>
  </body>
</html>
