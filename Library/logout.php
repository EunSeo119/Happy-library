<?php 
  include "include/session.php";
    
?>
<!doctype html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <title>PHP</title>
  </head>
  <body>
    <?php
      if ( $_SESSION['ses_userid']) {
        session_destroy();
        echo("<script>location.replace('index.php');</script>"); 
      } else {
        echo '<h1>로그인 상태가 아닙니다.</h1>';
      }
    ?>
  </body>
</html>