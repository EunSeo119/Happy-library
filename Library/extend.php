<?php

include "include/session.php";
include "include/dbConnect.php";

$bookNum = $_GET['bookNum'];

$sql2="UPDATE loan SET dueDate =  date_add(duedate, interval 7 day) WHERE loanNum = $bookNum";

 if($dbConnect->query($sql2)){                                                               //만약 sql로 잘 들어갔으면
  echo("<script>location.replace('mypage.php');</script>");                                // id님 안녕하세요.
 }else{                                                                                //아니면
  echo 'fail to insert sql' .$dbConnect->error;                                                               //fail to insert sql로 표시
 }

mysqli_close($dbConnect);


?>