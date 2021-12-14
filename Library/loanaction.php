<?php
include "include/session.php";
include "include/dbConnect.php";
$bookNum = isset($_POST["bookNum"]) ? (int)$_POST["bookNum"] : 0;
$userID = isset($_POST["userID"]) ? (int)$_POST["userID"] : 0;
//$ses_userid = isset($_SESSION['ses_userid']) ? $_SESSION['ses_userid'] : 0;
$result = array("success"=>false, "msg"=>"대출에 실패했습니다.");
if( $bookNum && $userID ) {
    $loanDate = date("Y-m-d");
    $date7 = strtotime("+7 day", time());
    $dueDate = date('Y-m-d', $date7);
    $sql = "INSERT INTO loan(userID, bookNum, loanDate, dueDate, ExtendOrNot, loanState) VALUES({$userID},{$bookNum},'{$loanDate}','{$dueDate}','N',1)";
    if( $sth = mysqli_query($dbConnect, $sql) ) {
        if( $dbConnect->affected_rows ) {
            $result = array("success"=>true, "msg"=>"대출에 성공했습니다.");
        }
    }
}
echo json_encode($result);