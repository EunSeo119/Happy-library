<?php

include "include/session.php";
include "include/dbConnect.php";

$id = $_GET[$re];
$sql="DELETE FROM loan WHERE id=$id";             // (입력받음)insert into 테이블명 (column-list)

 if($dbConnect->query($sql)){                                                               //만약 sql로 잘 들어갔으면
  echo("<script>location.replace('mypage.php');</script>");                                // id님 안녕하세요.
 }else{                                                                                //아니면
  echo 'fail to insert sql' .$dbConnect->error;                                                            //fail to insert sql로 표시
 }

mysqli_close($dbConnect);


?>