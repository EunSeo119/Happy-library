<?php

include "include/session.php";
include "include/dbConnect.php";

$bookNum = $_GET['bookNum'];
$sql="SELECT ExtendOrNot From loan WHERE loanNum = $bookNum";

$result = $dbConnect->query($sql);
$row = mysqli_fetch_assoc($result);

if( $row['ExtendOrNot'] =='Y')
{
    echo("<script>alert('더이상 연장이 불가능합니다.');</script>");
    echo("<script>location.replace('mypage.php');</script>");
}
else{
    $sql2="UPDATE loan SET dueDate =  date_add(duedate, interval 7 day),ExtendOrNot= 'Y'   WHERE loanNum = $bookNum";
    if($dbConnect->query($sql2)){     
                                                            
        echo("<script>location.replace('mypage.php');</script>");                              
       }else{                                                                                //아니면
        echo 'fail to insert sql' .$dbConnect->error;                                                               //fail to insert sql로 표시
       }
    }

mysqli_close($dbConnect);


?>