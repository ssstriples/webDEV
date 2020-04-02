<?php
	require("config/config.php");
  require("lib/db.php");
	$conn = db_init($config["host"],$config["duser"],$config["dpw"],$config["dname"]);
  $title = mysqli_real_escape_string($conn,$_POST['title']);
  $author = mysqli_real_escape_string($conn,$_POST['author']);
  $description = mysqli_real_escape_string($conn,$_POST['description']);

  $sql = "SELECT * FROM user WHERE name='".$author."'";
  $result = mysqli_query($conn,$sql);
  //var_dump($result);
  if($result->num_rows == 0){
    //사용자 추가
    $sql = "INSERT INTO user(name,password) VALUES('".$author."','111111')";
    mysqli_query($conn,$sql);
    $user_id = mysqli_insert_id($conn);    //현재 함수가 실행되기 직전의 행의 아이디값 확인

  }else{
    $row = mysqli_fetch_assoc($result);
    $user_id = $row['id'];
  }

  $sql = "INSERT INTO topic(title,description,author,created) VALUES('".$title."','".$description."','".$user_id."',now())";
  $result = mysqli_query($conn,$sql);

  header('Location: http://localhost/index.php'); //Redirection
	?>
