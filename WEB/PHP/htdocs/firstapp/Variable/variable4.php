<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <p>변수에 담긴 데이터 형을 검사하고 변경</p>
    <?php
      $a = 100;
      echo gettype($a);
      settype($a, 'double');
      echo '<br />';
      echo gettype($a);
      /*
      is_ array
      is_ bool
      is_ callable
      is_ double
      is_ float
      is_ int
      is_ integer
      is_ long
      is_ null
      is_ numeric
      is_ object
      is_ real
      is_ resource
      is_ scalar
      is_ string
      */
    ?>
  </body>
</html>
