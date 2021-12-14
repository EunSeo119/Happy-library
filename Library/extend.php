<?php

include "include/session.php";
include "include/dbConnect.php";

$bookNum = $_GET['bookNum'];
$dueDate = $_GET['dueDate'];

// $sql ="DELETE FROM loan WHERE bookNum=$bookNum";
//  $sql2="INSERT INTO  returnBook (returnNum, bookNum, bookName, bookAuthor, loanDate, dueDate)
//         SELECT loanNum, bookNum, bookName, bookAuthor, loanDate, dueDate FROM loan WHERE bookNum=$bookNum";

$date7 = strtotime("+7 day", strtotime($dueDate));
$new_dueDate = date('Y-m-d', $date7);

 $sql3="UPDATE loan SET dueDate = '{$new_dueDate}' WHERE bookNum=$bookNum";

 $dbConnect->query($sql3);
 echo("<script>location.replace('Mypage.php');</script>");

mysqli_close($dbConnect);


?>