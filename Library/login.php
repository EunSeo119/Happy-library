
<?php

$host = 'localhost';
$user = 'root';
$pw = 'qwer1234!';
$dbName = 'library';

$mysqli = new mysqli($host, $user, $pw, $dbName);

// session_start();

$mysqli -> set_charset("utf8");

/*echo "<pre>";
var_dump($_POST);*/

$ID = $_POST['user_ID'];
$PW = $_POST['password'];
// $logout = $_POST['login'];

$sql = "SELECT * FROM User WHERE user_ID = '{$ID}' AND password = '{$PW}'";
// $res = $dbConnect->query($sql);
    //  $row = $res->fetch_array(MYSQLI_BOTH);

    if ($mysqli->query($sql)!=null) {
        // $_SESSION['ses_userid'] = $row['User_ID'];
        // $_SESSION['ses_userdpm'] = $row['memberdpm'];
        echo("<script>location.replace('../php/index.html');</script>"); 
    // var_dump( $_SESSION );

    }
    if($sql  == null){
        echo("<script> location.replace('../php/Sign_in.php');alert('로그인 실패! 아이디와 비밀번호가 맞는지 다시 확인해주세요');</script>"); 
    }
?>
