<?php
    session_start();

$host = 'localhost';
$user = 'root';
$pw = '';
$dbName = 'library';

$mysqli = new mysqli($host, $user, $pw, $dbName);

 $mysqli -> set_charset("utf8");

 $comment=$_POST["comment"];
 $star_point=$_POST["star_point"];
 $book_id=$_GET["book_id"];
 $user_name = $_SESSION['ses_username'];
//  $user_name = 'testname';


 $sql = "insert into review (comment, star_point, book_id, user_name)";             // (입력받음)insert into 테이블명 (column-list)
 $sql = $sql. "values('$comment', '$star_point','$book_id', '$user_name')";         // calues(column-list에 넣을 value-list)

 if($mysqli->query($sql)){                                                               //만약 sql로 잘 들어갔으면
   echo("<script>location.replace('book_detail.php?id=".$book_id."');</script>");                                // id님 안녕하세요.
 }else{                                                                                //아니면
   echo 'fail to insert sql' .$mysqli->error;                                                            //fail to insert sql로 표시
 }

mysqli_close($mysqli);



?>