<?php

$host = 'localhost';
$user = 'root';
$pw = 'qwer1234!';
$dbName = 'library';

$mysqli = new mysqli($host, $user, $pw, $dbName);

 $mysqli -> set_charset("utf8");

 $user_ID=$_POST["user_ID"];
 $password=($_POST["password"]);
 $user_name=($_POST["user_name"]);
 $EMAIL=$_POST['email'];

 $sql = "insert into user (user_id, password , user_name, email)";             // (입력받음)insert into 테이블명 (column-list)
 $sql = $sql. "values('$user_ID', '$password', '$user_name','$EMAIL')";         // calues(column-list에 넣을 value-list)

 if($mysqli->query($sql)){                                                               //만약 sql로 잘 들어갔으면
   echo("<script>location.replace('./index.php');</script>");                                // id님 안녕하세요.
 }else{                                                                                //아니면
  echo 'fail to insert sql' .$mysqli->error;                                                            //fail to insert sql로 표시
 }

mysqli_close($mysqli);


?>