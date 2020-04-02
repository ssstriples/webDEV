<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>가변 변수</p>
    <?php
      $title = 'subject';
      $$title = 'PHP tutorial';  # $title -> subject : $subject
      echo $subject;
    ?>
  </body>
</html>
