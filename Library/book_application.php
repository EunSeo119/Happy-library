<?php
 include "include/session.php";
 include "include/dbConnect.php";

if(empty($_SESSION['ses_userid'])){
        echo ("<script>alert('로그인이 필요합니다.');
        location.replace('sign_in.php');</script>");
}?>
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
     <link rel="stylesheet" href="./css/bootstrap.min.css" type="text/css">
     <link rel="stylesheet" href="./css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="./css/elegant-icons.css" type="text/css">
    <link rel="stylesheet" href="./css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="./css/jquery-ui.min.css" type="text/css">
    <link rel="stylesheet" href="./css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="./css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="./css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="./css/style.css" type="text/css"> 

    <style> 
    body {  
        /* min-height: 100vh;  */
        } 
    .input-form {
         max-width: 680px; 
         /* padding: 32px;  */
         background: #fff; 
        } 
         </style>
</head>

<body>        
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <header class="header">

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
                        <h2>Communication</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <a href="./book_application.php">희망 도서 신청</a>
                            <span>도서 신청</span>
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
                            <span>Communication</span>
                        </div>
                        <ul>
                            <li><a href="./book_application.php">희망 도서 신청</a></li>
                            <li><a href="./review_contest.php">감상문 공모전</a></li>
                            <li><a href="#">공지사항</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    
                    <div>
                        <h3>희망 도서 신청</h3>
                        <hr>
                    </div>
                    <div>
                        <h5>이용안내</h5>
                        <div class="mb-4"></div>
                        <h6>- 다음 도서는 구입 대상에서 제외되니, 이점 양지하시어 신청 바랍니다.</h6>
                        <div style="margin: 100px, 0px, 10px, 0px;">&nbsp;&nbsp;&nbsp;&nbsp;- 신간도서 주문 중이거나 정리중인 도서<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;- 참고서 및 수험서, 개인 학습용 문제집 등<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;- 개인적 신념에 의한 종교자료<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;- 출간된 지 3년이 지난 자료(소장 필요한 경우는 예외)<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;- 내용이 선정적이거나 폭력성이 짙은 도서<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;- 비회원이 신청한 도서 또는 상업적 판매를 위해 신청한 도서<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;- 오락성 만화물 및 전집류, 판타지 및 무협지, 로맨스 소설류 등<div>
                        <div class="mb-4"></div>

                    <form action="bookApplication.php" method="post" class="form form-book-application">
                    <div class="container"> 
                        <div class="input-form-backgroud row"  > 
                            <div class="input-form col-md-12 mx-auto"> 
                                <form class="validation-form" novalidate> 
                                    <div class="row">
                                        <div class="col-md-3 mb-3"> 
                                            <label for="userid">희망 도서명</label> 
                                        </div>
                                        <div class="col-md-9">
                                        <input type="text" class="form-control" name="book_name" placeholder="" value="" required> 
                                        </div>
                                    </div>
                                    <div class="mb-2"></div>

                                    <div class="row">
                                        <div class="col-md-3 mb-3"> 
                                            <label for="userid">저자명</label> 
                                        </div>
                                        <div class="col-md-9">
                                        <input type="text" class="form-control" name="book_author" placeholder="" value="" required> 
                                        </div>
                                    </div>
                                    <div class="mb-2"></div>

                                    <div class="row">
                                        <div class="col-md-3 mb-3"> 
                                            <label for="userid">출판사명</label> 
                                        </div>
                                        <div class="col-md-9">
                                        <input type="text" class="form-control" name="book_publisher" placeholder="" value="" required> 
                                        </div>
                                    </div>
                                    <div class="mb-2"></div>

                                    <div class="row">
                                        <div class="col-md-3 mb-3"> 
                                            <label for="userid">출판년도</label> 
                                        </div>
                                        <div class="col-md-9">
                                        <input type="text" class="form-control" name="book_year" placeholder="" value="" required> 
                                        </div>
                                    </div>
                                    <div class="mb-2"></div>

                                    <div class="row">
                                        <div class="col-md-3 mb-3"> 
                                            <label for="userid">ISBN</label> 
                                        </div>
                                        <div class="col-md-9">
                                        <input type="text" class="form-control" name="book_ISBN" placeholder="" value="" required> 
                                        </div>
                                    </div>
                                    <div class="mb-2"></div>

                                    <div class="row">
                                        <div class="col-md-3 mb-3"> 
                                            <label for="userid">희망 사유</label> 
                                        </div>
                                        <div class="col-md-9">
                                        <textarea style="height:300px;word-wrap:break-word" class="form-control" name="book_reason" placeholder="" value="" required></textarea>
                                        </div>
                                    </div>
                                    <div class="mb-4"></div>

                                      <button class="btn btn-primary btn-lg btn-block" id="signup-button" style="margin:auto;width:30%;" type="submit">신청하기</button> 
                                    </form> 
                                </div> 
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <script>


    </script>

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