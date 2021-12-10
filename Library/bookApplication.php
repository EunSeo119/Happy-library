<?php

$host = 'localhost';
$user = 'root';
$pw = '';
$dbName = 'library';

$mysqli = new mysqli($host, $user, $pw, $dbName);

 $mysqli -> set_charset("utf8");

 $book_name=$_POST["book_name"];
 $book_author=($_POST["book_author"]);
 $book_publisher=($_POST["book_publisher"]);
 $book_year=$_POST['book_year'];
 $book_ISBN=$_POST['book_ISBN'];
 $book_reason=$_POST['book_reason'];

 $sql = "insert into book_application (book_name, book_author , book_publisher, book_year, book_ISBN, book_reason)";             // (입력받음)insert into 테이블명 (column-list)
 $sql = $sql. "values('$book_name', '$book_author', '$book_publisher','$book_year','$book_ISBN','$book_reason')";         // calues(column-list에 넣을 value-list)

 if($mysqli->query($sql)){                                                               //만약 sql로 잘 들어갔으면
   echo("<script>location.replace('./index.php');</script>");                                // id님 안녕하세요.
 }else{                                                                                //아니면
  echo 'fail to insert sql' .$mysqli->error;                                                            //fail to insert sql로 표시
 }

mysqli_close($mysqli);


?>