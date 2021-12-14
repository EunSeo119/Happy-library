<?php
  include "include/session.php";

include_once 'bookreg/dbconfig.php';

// Select a database
$dbname = "library";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

//파라미터 검사
if(!isset($_GET["keyword"])) {
    $keyword = "";
}else{
    $keyword = $_GET["keyword"];
}
$sql = "SELECT * FROM book where subject like '%".$keyword."%'  or  author like '%".$keyword."%'";
$result = $conn->query($sql);

?>

<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HAPPY LIBRARY</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">


    <script>
    function button1_click() {
        keyword = document.getElementById('keyword').value;
        document.frm.action = "search.php?keyword="+keyword;
        document.frm.submit();
    }
    </script>      
    <script>
function button2_click(s) {
	window.location.href='insertForm.php';
}
</script>
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

<header>
       <div class="container">
            <div class="row">
                <div class="col-lg-3">
                <div class="header__logo">
                        <a href="./index.php"><img src="./img/library_logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                        <li><a href="./search.php">Borrow</a></li>
                            <li><a href="./hot.php">Ranking</a></li>
                            <li><a href="#">Communication</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./book_application.php">희망 도서 신청</a></li>
                                    <li><a href="./review_contest_list.php">감상문 공모전</a></li>
                                    <li><a href="./notice.php">공지사항</a></li>
                                </ul>
                            </li>
                            <li><a href="./Mypage.php">My page</a></li>

                </ul>
                    </nav>
                </div>
                
                <nav class="col-lg-3">
                <div class="header__menu">
                    <ul>
                    <?php
                     if(empty($_SESSION['ses_userid'])){
                    ?>
                <li><a href="sign_in.php" id="signin" onclick="Login()">LOGIN</a></li>
                <li><a href="sign_up.php" id="signup" onclick="Signup()">Sign UP</a></li>
                <?php
                }else{
                ?>
                <li><a href="logout.php" id="signout">logout</a></li>
                <?php
                 }
                ?>
                </ul>
                </div>
                </nav>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->
                <!-- Breadcrumb Section Begin -->
                <section class="breadcrumb-section set-bg" data-setbg="img/books-g562a90b60_1920.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Borrow</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <a href="./search.php">Borrow</a>
                            <span>Borrow</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
    <div class="mb-4"></div>

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Borrow</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                <div  style="float: left;">
                            <h3>도서검색</h3>
                                            
                        </div>
                        <br/><br/>
                        <hr/>
                    <div class="hero__search__form" style = " height: 64px;  position: relative;  top: 30px; left: 89px;">
                            <form action="" name="frm">
                                <input type="text" id="keyword" name="keyword" placeholder="What do yo u need?">
                                <button style = "height: 64px;" type="submit" class="site-btn" onclick="button1_click();">SEARCH</button>
                            </form>
                    </div>
                    <!-- 많이 검색한거 -->
                    <div class="product__discount" style = "position: relative; top: 100px;">
                        <div class="section-title product__discount__title">
                        </div>
                        <div class="row" style="width: 850px;">
                            <!-- <div class="product__discount__slider owl-carousel"> -->


                                
<div>

                        

                    </div>
                    <br/>
                        <br><br>
                        <hr>
                        <div class="container"> 
                            <div class=""  > 
                                <div class="shoping__cart__table"> 

                                

                                    <table style="width: 100%;">
                                    <hr/>
                                        <thead>
                                        <tr>
                                            <th>번호</th>
                                            <th>도서명</th>
                                            <th>저자</th>
                                            <th>출판사</th>
                                            <th>등록일</th>
                                        </tr>
                                        </head>

                                        <?php
                                        if($result->num_rows > 0){
                                            // Output data of each row
                                            while($row = $result->fetch_assoc()){
                                                $date = date_create($row["reg_date"]);
                                                echo "<tr>";
                                                echo "<td>" . $row["id"]. "</td>" 
                                                . "<td>" . "<a href='book_detail.php?id=" . $row["id"]. "'>"  . $row["subject"]. "</a>" . "</td>" 
                                                . "<td>" . $row["author"]. "</td>" 
                                                . "<td>" . $row["publisher"]. "</td>" 
                                                . "<td>" . date_format($date, 'Y-m-d'). "</td>";
                                                echo "</tr>";


                                            }
                                        }else{
                                            echo "0 results";
                                        }
                                        ?>

                                        </tr>
                                    </table>
                                    <br>
                                    <?php
                        if(!empty($_SESSION['ses_username'])){
                            if($_SESSION['ses_username']=='admin'){
                                ?>
                                
                                <button class="btn btn-primary btn-lg btn-block" id="signup-button" style="margin:auto;width:11%;"  onclick="button2_click();">등록</button> 
                                <?php
                                }
                                }
                        ?>



                                </div> 
                            </div>
                        </div>

                        </div>
                    </div>
        </div>
    </section>
    <!-- Hero Section End -->


    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.php"><img src="./img/logo.png" alt=""></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                <ul>
                    
                            <li>Address: 충청북도 청주시 서원구 충대로 1</li>
                            <li>Phone: 043-261-2114</li>
                        </ul>

                </div>
                <div class="col-lg-4 col-md-12">
                    <div class="footer__widget">
                        <h6>Join Our Newsletter Now</h6>
                        <p>Get E-mail updates about our latest shop and special offers.</p>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                            <button type="submit" class="site-btn">Subscribe</button>
                        </form>
                        <div class="footer__widget__social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-pinterest"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="footer__copyright">
                        <div class="footer__copyright__text"><p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p></div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Section End -->


    <!-- Js Plugins -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.nice-select.min.js"></script>
    <script src="js/jquery-ui.min.js"></script>
    <script src="js/jquery.slicknav.js"></script>
    <script src="js/mixitup.min.js"></script>
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>



</body>

</html>


<?php
$conn->close();
?>
