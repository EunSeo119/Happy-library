<?php


//파일 업로드
$uploaddir = '/xampp/htdocs/upload/';

if (count($_FILES)) {
  $uploadfile = $uploaddir . basename($_FILES['image_file']['name']);
  echo "uploadfile";

  echo '<pre>';
  if (move_uploaded_file($_FILES['image_file']['tmp_name'], $uploadfile)) {
      echo "File is valid, and was successfully uploaded.\n";
  } else {
      echo "Possible file upload attack!\n";
  }

  //echo 'Here is some more debugging info:';
  //print_r($_FILES);

  print "</pre>";
}



$host = 'localhost';
$user = 'root';
$pw = '1234';
$dbName = 'testdb';

$mysqli = new mysqli($host, $user, $pw, $dbName);

 $mysqli -> set_charset("utf8");

 $subject=$_POST["subject"];
 $author=($_POST["author"]);
 $publisher=$_POST['publisher'];
 $comment=$_POST["comment"];
 $image_file=$_FILES['image_file']['name'];

 $sql = "insert into book (subject, author, publisher, comment, image_file)";             // (입력받음)insert into 테이블명 (column-list)
 $sql = $sql. "values('$subject', '$author','$publisher','$comment','$image_file')";         // calues(column-list에 넣을 value-list)

 if($mysqli->query($sql)){                                                               //만약 sql로 잘 들어갔으면
   echo("<script>location.replace('list.php');</script>");                                // id님 안녕하세요.
 }else{                                                                                //아니면
   echo 'fail to insert sql' .$mysqli->error;                                                            //fail to insert sql로 표시
 }

mysqli_close($mysqli);



?>