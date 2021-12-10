<?php

$host = 'localhost';
$user = 'root';
$pw = '1234';
$dbName = 'testdb';

$mysqli = new mysqli($host, $user, $pw, $dbName);

 $mysqli -> set_charset("utf8");

 $book_name=$_POST["book_name"];
 $user_name=($_POST["name"]);
 $EMAIL=$_POST['email'];
 $content=$_POST["content"];

 $sql = "insert into book (book_name, name, email, content)";             // (입력받음)insert into 테이블명 (column-list)
 $sql = $sql. "values('$book_name', '$name','$EMAIL','$content')";         // calues(column-list에 넣을 value-list)

 if($mysqli->query($sql)){                                                               //만약 sql로 잘 들어갔으면
   echo("<script>location.replace('list.php');</script>");                                // id님 안녕하세요.
 }else{                                                                                //아니면
  echo 'fail to insert sql' .$mysqli->error;                                                            //fail to insert sql로 표시
 }

mysqli_close($mysqli);


?>