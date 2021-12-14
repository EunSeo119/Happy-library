<?php

include "include/session.php";
include "include/dbConnect.php";

$bookNum = $_GET['bookNum'];

 $sql3="UPDATE loan SET dueDate = now() WHERE bookNum=$bookNum";
 $sql4="UPDATE loan SET loanState = 0 WHERE bookNum=$bookNum";

 $dbConnect->query($sql3);      
 if($dbConnect->query($sql4)){                                                               //만약 sql로 잘 들어갔으면
  echo("<script>location.replace('Mypage.php');</script>");                                // id님 안녕하세요.
 }else{                                                                                //아니면
  echo 'fail to insert sql' .$dbConnect->error;                                                               //fail to insert sql로 표시
 }

mysqli_close($dbConnect);


?>