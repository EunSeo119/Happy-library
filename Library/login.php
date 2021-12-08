<?php

include "include/session.php";
include "include/dbConnect.php";


$ID = $_POST['user_ID'];
$PW = $_POST['password'];

$sql = "SELECT * FROM User WHERE user_ID = '{$ID}' AND password = '{$PW}'";
$res = $dbConnect->query($sql);
$row = $res->fetch_array(MYSQLI_BOTH);

if ($row!=null) {
    $_SESSION['ses_userid'] = $row['user_ID'];
    $_SESSION['ses_username'] = $row['user_name'];
    echo("<script>location.replace('mypage.php');</script>"); 

}
if($row  == null){
    echo("<script> location.replace('sign_in.php');alert('로그인 실패! 아이디와 비밀번호가 맞는지 다시 확인해주세요');</script>"); 
}
?>
