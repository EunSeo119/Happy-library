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
    <title>Ogani | Template</title>

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

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="#"><img src="img/logo.png" alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
            </ul>
            <div class="header__cart__price">item: <span>$150.00</span></div>
        </div>
        <div class="humberger__menu__widget">
            <div class="header__top__right__language">
                <img src="img/language.png" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Spanis</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
            <div class="header__top__right__auth">
                <a href="#"><i class="fa fa-user"></i> Login</a>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="./index.html">BORROW</a></li>
                <li><a href="./shop-grid.html">RANKING</a></li>
                <li><a href="#">communication</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.html">Shop Details</a></li>
                        <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                        <li><a href="./checkout.html">Check Out</a></li>
                        <li><a href="./blog-details.html">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.html">Login</a></li>
            </ul>
        </nav>

        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
  <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>
                            <div class="header__top__right__language">
                                <img src="img/language.png" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Spanis</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="#"><i class="fa fa-user"></i> Login</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">

            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="./index.html">HAPPY LIBRARY</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="./index.html">Home</a></li>
                            <li><a href="./shop-grid.html">BORROW</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul></li>
                            <li><a href="#">RANKING</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.html">Shop Details</a></li>
                                    <li><a href="./shoping-cart.html">Shoping Cart</a></li>
                                    <li><a href="./checkout.html">Check Out</a></li>
                                    <li><a href="./blog-details.html">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.html">COMMUNITY</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-3">
                    <div class="header__cart">
                        <ul>
                            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                            <li><a href="#"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
                        </ul>
                        <div class="header__cart__price">item: <span>$150.00</span></div>
                    </div>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header> 
    <!-- Header Section End -->

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>My Page</span>
                        </div>
                        <ul>
                            <!-- <li><a href="#">회원정보</a></li> -->
                            <li><a href="#currnet-loan-list">대출내역</a></li>
                            <li><a href="#old-loan-list">반납내역</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="container">
                        <h3>마이페이지</h3>
                        <hr>

                        <?php
                        if(!empty($_SESSION['ses_username'])){
                        ?>
                        <h4 class="text-3xl font-bold pt-8 lg:pt-0"><?php echo $_SESSION['ses_username'] ?></h4>
                        <?php
                        }
                        ?>
                        
                        <div style="margin-top:20px;" id="currnet-loan-list"> 
                            <label>대출 내역</label>
                            <div>
                                <table class="table table-bordered table-sm text-center">
                                    <thead>
                                        <tr class='table-active'>
                                            <td scope="col">번호</td>
                                            <td scope="col">등록번호</td>
                                            <td scope="col">자료명</td>
                                            <td scope="col">저자</td>
                                            <td scope="col">대출일</td>
                                            <td scope="col">반납예정일</td>
                                            <td scope="col">연체일</td>
                                            <td scope="col">반납/연장</td>
                                        </tr>
                                    </thead>
                                    <!-- <script> 
                                        function returnbook(){ 
                                            $.ajax({
                                                type:'get', url:"return.php" ,data{}, success:function(result){ 
                                                    $("div").text(result);
                                                    } 
                                                }) 
                                            } 
                                    </script> -->
                                    <tbody>
                                    <?php
                                    $UID = $_SESSION['ses_userid'];
                                     $sql = "SELECT * FROM loan WHERE loanNum = $UID";
                                    
                                     $result = mysqli_query($dbConnect, $sql);
                                     $x= 0;

                                     function returnbook($e){
                                        $sql="DELETE FROM loan WHERE id=$e";
                                     }
                                
                                 if (mysqli_num_rows($result) > 0) {
                                    while($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>
                                        <td>";
                                        echo ++$x. "</td>";    
                                        echo "<td>" . $row["loanNum"]. "</td>";
                                        echo "<td>". $row["bookNum"]. "</td>";
                                        echo "<td>" . $row["bookName"]. "</td>";
                                        echo "<td>". $row["bookAuthor"]."</td>";
                                        echo "<td>". $row["loanDate"]."</td>";
                                        echo "<td>". $row["dueDate"]."</td>";
                                        $re = $row["bookNum"];
                                        echo "<td><button type='button' class='btn btn-success btn-sm' onClick='returnbook($re)'>반납</button> 
                                        <button class='btn btn-danger btn-sm'>연장</button></td>";
                                    }
                                }
                                else{
                                    echo "테이블에 데이터가 없습니다.";
                                    }
                                       ?>
                                        <script> function test(){ $.ajax({url:"loan.php", success:function(result){ $("div").text(result);} }) } </script>

<button type='button' class='btn btn-success btn-sm' onclick="location.href='return.php?<?$_GET[$re]?>';">반납</button>
<a href="#" class="primary-btn" id="book_id" onclick="returnbook()" type="submit" name="book_id">LOAN</a> 
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div style="margin-top:50px;" id="old-loan-list"> 
                            <label>반납 내역</label>
                            <div>
                                <table class="table table-bordered table-sm text-center">
                                    <thead>
                                        <tr class='table-active'>
                                            <td scope="col">번호</td>
                                            <td scope="col">등록번호</td>
                                            <td scope="col">자료명</td>
                                            <td scope="col">저자</td>
                                            <td scope="col">대출일</td>
                                            <td scope="col">반납일</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>B10100101</td>
                                            <td>정의는 무엇인가</td>
                                            <td>마이클 샌델</td>
                                            <td>2021-11-01</td>
                                            <td>2021-11-21</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>B989745445</td>
                                            <td>사피엔스</td>
                                            <td>유발 하라리</td>
                                            <td>2021-11-28</td>
                                            <td>2021-12-27</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>B087524215</td>
                                            <td>총균쇠</td>
                                            <td>재러드 다이아몬드</td>
                                            <td>2021-11-10</td>
                                            <td>2021-12-09</td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
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
                            <a href="./index.html"><img src="img/logo.png" alt=""></a>
                        </div>
                        <ul>
                            <li>Address: 60-49 Road 11378 New York</li>
                            <li>Phone: +65 11.188.888</li>
                            <li>Email: hello@colorlib.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6 offset-lg-1">
                    <div class="footer__widget">
                        <h6>Useful Links</h6>
                        <ul>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">About Our Shop</a></li>
                            <li><a href="#">Secure Shopping</a></li>
                            <li><a href="#">Delivery infomation</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Our Sitemap</a></li>
                        </ul>
                        <ul>
                            <li><a href="#">Who We Are</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Projects</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="#">Innovation</a></li>
                            <li><a href="#">Testimonials</a></li>
                        </ul>
                    </div>
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
                        <div class="footer__copyright__payment"><img src="img/payment-item.png" alt=""></div>
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