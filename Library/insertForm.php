<?php
  include "include/session.php";
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
    <link rel="stylesheet" href="css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css"> 

    <style> 
    body {  
        /* min-height: 100vh;  */
        } 
    .input-form {
         max-width: 680px; 
         /* padding: 32px;  */
         background: #fff; 
        } 

        .span1 {
            display: inline-block;
            /*background: yellow;*/
            width: 200px;
            height: 50px;
            margin: 20px;
            padding: 10px;
            }        
    </style>

    <script>
    function button1_click(s) {
        window.location.href='list.php';
    }
    </script>    
</head>

<body>        
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    
    <!-- Humberger End -->
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
                    <div>
                        <h3>도서등록</h3>
                        <hr>
                    </div>
                    <form action="insert.php" enctype="multipart/form-data" method="post" class="form form-signup">
                    <div class="container"> 
                        <div class="input-form-backgroud row"  > 
                            <div class="input-form col-md-12 mx-auto"> 
                                <form class="validation-form" novalidate> 
                                    <div class="row">
                                        <div class="col-md-9 mb-3"> 
                                            <label for="subject">도서명</label> 
                                            <input type="text" class="form-control" name="subject" placeholder="" value="" required> 
                                            <div class="invalid-feedback"> 도서명을 입력해주세요. </div> 
                                        </div>
                                    </div>
  
                                    <div class="row">
                                        <div class="col-md-9 mb-2"> 
                                            <label for="author">저자</label> 
                                            <input type="text" class="form-control" name="author" placeholder="" value="" required> 
                                            <div class="invalid-feedback"> 저자를 입력해주세요. </div> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9 mb-2"> 
                                            <label for="publisher">출판사</label> 
                                            <input type="text" class="form-control" name="publisher" placeholder="" value="" required> 
                                            <div class="invalid-feedback"> 출판사를 입력해주세요. </div> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9 mb-2"> 
                                            <label for="comment">책설명</label> 
                                            <input type="text" class="form-control" name="comment" placeholder="" value="" required> 
                                            <div class="invalid-feedback"> 책설명을 입력해주세요. </div> 
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-9 mb-2"> 
                                            <label for="image_file">이미지</label> 
                                            <input type="file" class="form-control" name="image_file" placeholder="" value="" required> 
                                            
                                        </div>
                                    </div>   
                                    
                                    <div class="row">
                                        <div class="col-md-9 mb-2"> 
                                            <label for="ebook">책내용</label> 
                                            <input style="    height: 300px;" type="text" class="form-control" name="ebook" placeholder="" value="" required> 
                                            <div class="invalid-feedback"> 책내용을 입력해주세요. </div> 
                                        </div>
                                    </div>

                                    <hr class="mb-4"> 
                                     <div class="mb-4" style="text-align: center;">
                                            <button class="btn btn-primary btn-lg btn-block span1" id="signup-button" style="margin:auto;width:12%;" type="submit">저장</button> 
                                            <button class="btn btn-primary btn-lg btn-block span1" id="signup-button" style="margin:auto;width:12%;" onclick="button1_click();">목록</button>
                                     </div>
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