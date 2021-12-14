
<?php

include "include/session.php";
include "include/dbConnect.php";

/*echo "<pre>";
var_dump($_POST);*/

$ID = $_POST['user_id'];
$PW = $_POST['password'];
// $logout = $_POST['login'];   

$sql = "SELECT * FROM User WHERE user_id = '{$ID}' AND password = '{$PW}'";
$res = $dbConnect->query($sql);
$row = $res->fetch_array(MYSQLI_BOTH);

if ($row!=null) {
    $_SESSION['ses_userid'] = $row['id'];
    $_SESSION['ses_username'] = $row['user_name'];
    echo("<script>location.replace('mypage.php');</script>"); 
    }
    if($row  == null){
        echo("<script> location.replace('sign_in.php');alert('로그인 실패! 아이디와 비밀번호가 맞는지 다시 확인해주세요');</script>"); 
    }
?>
