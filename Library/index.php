<?php
  include "include/session.php";
  include "include/dbConnect.php";
  include_once 'bookreg/dbconfig.php';

// Select a database
$dbname = "library";
mysqli_select_db($conn, $dbname) or die('DB selection failed');
$sql = "SELECT * FROM book ORDER BY reg_date ASC";
$result = $conn->query($sql);
$sql2 = "SELECT * FROM book ORDER BY reg_date DESC" ;
$result2 = $conn->query($sql2);
$sql3 = "SELECT * FROM v_review ORDER BY avg DESC" ;
$result3 = $conn->query($sql3);

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

    <style type="text/css">
 #pop{
  width:396px; height:588px; background-color:white;
  position:absolute; top:50px; left:200px; text-align:center;
  border:2px solid darkgray;
   }

</style>
<script src="http://code.jquery.com/jquery-latest.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
      $('#close').click(function() {
        $('#pop').hide();
      });
    });
 </script>
     <script>
    function button1_click() {
        keyword = document.getElementById('keyword').value;
        document.frm.action = "search.php?keyword="+keyword;
        document.frm.submit();
    }
    </script>    
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

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

    <!-- Hero Section Begin -->
    <section class="hero">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="hero__search">
                        <div class="hero__search__form__main" >
                            <form action="" name="frm">
                                <input type="text" id="keyword" name="keyword" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn" onclick="button1_click();">SEARCH</button>
                            </form>
                        </div>
                    </div>
                    <div class="hero__item set-bg" data-setbg="https://cdn.pixabay.com/photo/2021/01/21/16/49/books-5937823_960_720.jpg">
                        <div class="hero__text">
                            <span>E-BOOK</span>
                            <h2>HAPPY <br />LIBRARY</h2>
                            <a href="./search.php" class="primary-btn">책 둘러보기</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                    <div class="categories__item"  style="text-align : center;"><a href="./book_application.php">
                        <img src="https://cdn-icons.flaticon.com/png/512/2702/premium/2702162.png?token=exp=1639514772~hmac=f52aae387e2372d38643b682598f9f44" style="height:100px; width:100px;display: block; margin: auto;">

                            <h5>희망 도서 신청</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    <div class="categories__item"  style="text-align : center;"><a href="./search.php">
                    <img src="https://cdn-icons-png.flaticon.com/512/751/751463.png" style="height:100px; width:100px;display: block; margin: auto;">

                            <h5>자료 검색</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    <div class="categories__item"  style="text-align : center;"><a href="./review_contest_list.php">
                    <img src="https://cdn-icons-png.flaticon.com/512/5517/5517593.png" style="height:100px; width:100px;display: block; margin: auto;">

                            <h5>감상문 공모전</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    <div class="categories__item"  style="text-align : center;"><a href="./notice.php">
                    <img src="https://cdn-icons-png.flaticon.com/512/3893/3893612.png" style="height:100px; width:100px;display: block; margin: auto;">

                            <h5>공지사항</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                    <div class="categories__item"  style="text-align : center;"><a href="./Mypage.php">
                    <img src="https://cdn-icons.flaticon.com/png/512/2102/premium/2102647.png?token=exp=1639514830~hmac=c62aa1becac0372644d6e2ac7601b956" style="height:100px; width:100px;display: block; margin: auto;">

                            <h5>마이페이지</a></h5>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

        <!-- Latest Product Section Begin -->
        <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>대출 많은 도서</h4>
                        <div class="latest-product__slider owl-carousel">

                        <?php
                                if($result->num_rows > 0){
                                    // Output data of each row
                                    $count = 0;
                                    echo("<div class='latest-prdouct__slider__item'>");

                                    while($row = $result->fetch_assoc()){
                                        $star = "SELECT avg FROM v_review WHERE id=".$row["id"]."" ;
                                        $star_result = $conn->query($star);
                                        $starpoint = 0;
                                        if($star_row = $star_result->fetch_assoc()
                                        ) {
                                            $starpoint = $star_row["avg"];
                                        }
            
                                        $count +=1;
                                        echo(
                                            "<a href='./book_detail.php?id=".$row["id"]."' class='latest-product__item'>"
                                           ."<div class='latest-product__item__pic'>"
                                           ."   <img src='/upload/".$row["image_file"]."' alt=''>"
                                           ."</div>"
                                           ."<div class='latest-product__item__text'>"
                                               ."<span>".$row["subject"]."</span>"
                                               ."<h6>" . $row["author"]. "</h6>"
                                               ."<div class='product__details__text'>"
                                               ."<div class='product__details__rating'>"
                                               ."<i class='fa fa-star'></i>"
                                               ."<h6 style='display:inline;'>".$starpoint."<h6>"
                                           ."</div>"
                                           ."</div>"

                                           ."</div>"
                                       ."</a>" 
                                    );
                                        if($count%3==0){
                                            break;
                                        };
                                    }
                                    echo("</div>");
                                    echo("<div class='latest-prdouct__slider__item'>");

                                    while($row = $result->fetch_assoc()){
                                        $star = "SELECT avg FROM v_review WHERE id=".$row["id"]."" ;
                                        $star_result = $conn->query($star);
                                        $starpoint = 0;
                                        if($star_row = $star_result->fetch_assoc()
                                        ) {
                                            $starpoint = $star_row["avg"];
                                        }
            
                                        $count +=1;
                                        echo(
                                            "<a href='./book_detail.php?id=".$row["id"]."' class='latest-product__item'>"
                                           ."<div class='latest-product__item__pic'>"
                                           ."   <img src='/upload/".$row["image_file"]."' alt=''>"
                                           ."</div>"
                                           ."<div class='latest-product__item__text'>"
                                           ."<span>".$row["subject"]."</span>"
                                           ."<h6>" . $row["author"]. "</h6>"
                                           ."<div class='product__details__text'>"
                                           ."<div class='product__details__rating'>"
                                           ."<i class='fa fa-star'></i>"
                                           ."<h6 style='display:inline;'>".$starpoint."<h6>"
                                       ."</div>"
                                       ."</div>"

                                       ."</div>"
                                       ."</a>" 
                                    );
                                        if($count%3==0){
                                            break;
                                        };
                                    }
                                    echo("</div>");
                                    echo("<div class='latest-prdouct__slider__item'>");

                                    while($row = $result->fetch_assoc()){
                                        $star = "SELECT avg FROM v_review WHERE id=".$row["id"]."" ;
                                        $star_result = $conn->query($star);
                                        $starpoint = 0;
                                        if($star_row = $star_result->fetch_assoc()
                                        ) {
                                            $starpoint = $star_row["avg"];
                                        }
            
                                        $count +=1;
                                        echo(
                                            "<a href='./book_detail.php?id=".$row["id"]."' class='latest-product__item'>"
                                           ."<div class='latest-product__item__pic'>"
                                           ."   <img src='/upload/".$row["image_file"]."' alt=''>"
                                           ."</div>"
                                           ."<div class='latest-product__item__text'>"
                                           ."<span>".$row["subject"]."</span>"
                                           ."<h6>" . $row["author"]. "</h6>"
                                           ."<div class='product__details__text'>"
                                           ."<div class='product__details__rating'>"
                                           ."<i class='fa fa-star'></i>"
                                           ."<h6 style='display:inline;'>".$starpoint."<h6>"
                                       ."</div>"
                                       ."</div>"

                                       ."</div>"
                                       ."</a>" 
                                    );
                                        if($count%3==0){
                                            break;
                                        };
                                    }
                                    echo("</div>");
                                }else{
                                    echo "0 results";
                                }

                                ?>

                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>신규 도서</h4>
                        <div class="latest-product__slider owl-carousel">
                        <?php
                                if($result2->num_rows > 0){
                                    // Output data of each row
                                    $count = 0;
                                    echo("<div class='latest-prdouct__slider__item'>");

                                    while($row = $result2->fetch_assoc()){
                                        $star = "SELECT avg FROM v_review WHERE id=".$row["id"]."" ;
                                        $star_result = $conn->query($star);
                                        $starpoint = 0;
                                        if($star_row = $star_result->fetch_assoc()
                                        ) {
                                            $starpoint = $star_row["avg"];
                                        }
            
                                        $count +=1;
                                        echo(
                                            "<a href='./book_detail.php?id=".$row["id"]."' class='latest-product__item'>"
                                           ."<div class='latest-product__item__pic'>"
                                           ."   <img src='/upload/".$row["image_file"]."' alt=''>"
                                           ."</div>"
                                           ."<div class='latest-product__item__text'>"
                                               ."<span>".$row["subject"]."</span>"
                                               ."<h6>" . $row["author"]. "</h6>"
                                               ."<div class='product__details__text'>"
                                               ."<div class='product__details__rating'>"
                                               ."<i class='fa fa-star'></i>"
                                               ."<h6 style='display:inline;'>".$starpoint."<h6>"
                                           ."</div>"
                                           ."</div>"

                                           ."</div>"
                                       ."</a>" 
                                    );
                                        if($count%3==0){
                                            break;
                                        };
                                    }
                                    echo("</div>");
                                    echo("<div class='latest-prdouct__slider__item'>");

                                    while($row = $result2->fetch_assoc()){
                                        $star = "SELECT avg FROM v_review WHERE id=".$row["id"]."" ;
                                        $star_result = $conn->query($star);
                                        $starpoint = 0;
                                        if($star_row = $star_result->fetch_assoc()
                                        ) {
                                            $starpoint = $star_row["avg"];
                                        }
            
                                        $count +=1;
                                        echo(
                                            "<a href='./book_detail.php?id=".$row["id"]."' class='latest-product__item'>"
                                           ."<div class='latest-product__item__pic'>"
                                           ."   <img src='/upload/".$row["image_file"]."' alt=''>"
                                           ."</div>"
                                           ."<div class='latest-product__item__text'>"
                                           ."<span>".$row["subject"]."</span>"
                                           ."<h6>" . $row["author"]. "</h6>"
                                           ."<div class='product__details__text'>"
                                           ."<div class='product__details__rating'>"
                                           ."<i class='fa fa-star'></i>"
                                           ."<h6 style='display:inline;'>".$starpoint."<h6>"
                                       ."</div>"
                                       ."</div>"

                                       ."</div>"
                                       ."</a>" 
                                    );
                                        if($count%3==0){
                                            break;
                                        };
                                    }
                                    echo("</div>");
                                    echo("<div class='latest-prdouct__slider__item'>");

                                    while($row = $result2->fetch_assoc()){
                                        $star = "SELECT avg FROM v_review WHERE id=".$row["id"]."" ;
                                        $star_result = $conn->query($star);
                                        $starpoint = 0;
                                        if($star_row = $star_result->fetch_assoc()
                                        ) {
                                            $starpoint = $star_row["avg"];
                                        }
        
                                        $count +=1;
                                        echo(
                                            "<a href='./book_detail.php?id=".$row["id"]."' class='latest-product__item'>"
                                           ."<div class='latest-product__item__pic'>"
                                           ."   <img src='/upload/".$row["image_file"]."' alt=''>"
                                           ."</div>"
                                           ."<div class='latest-product__item__text'>"
                                           ."<span>".$row["subject"]."</span>"
                                           ."<h6>" . $row["author"]. "</h6>"
                                           ."<div class='product__details__text'>"
                                           ."<div class='product__details__rating'>"
                                           ."<i class='fa fa-star'></i>"
                                           ."<h6 style='display:inline;'>".$starpoint."<h6>"
                                       ."</div>"
                                       ."</div>"

                                       ."</div>"
                                       ."</a>" 
                                    );
                                        if($count%3==0){
                                            break;
                                        };
                                    }
                                    echo("</div>");
                                }else{
                                    echo "0 results";
                                }

                                ?>


                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>별점 높은 도서</h4>
                        <div class="latest-product__slider owl-carousel">
                        <?php
                                if($result3->num_rows > 0){
        
                                    // Output data of each row
                                    $count = 0;
                                    echo("<div class='latest-prdouct__slider__item'>");

                                    while($row = $result3->fetch_assoc()){
                                        $count +=1;
                                        $starpoint = 0;
                                        if($row["avg"]
                                        ) {
                                            $starpoint = $row["avg"];
                                        }

                                        echo(
                                           "<a href='./book_detail.php?id=".$row["id"]."' class='latest-product__item'>"
                                           ."<div class='latest-product__item__pic'>"
                                            ."   <img src='/upload/".$row["image_file"]."' alt=''>"
                                           ."</div>"
                                           ."<div class='latest-product__item__text'>"
                                               ."<span>".$row["subject"]."</span>"
                                               ."<h6>" . $row["author"]. "</h6>"
                                               ."<div class='product__details__text'>"
                                               ."<div class='product__details__rating'>"
                                               ."<i class='fa fa-star'></i>"
                                               ."<h6 style='display:inline;'>".$starpoint."<h6>"
                                           ."</div>"
                                           ."</div>"

                                           ."</div>"
                                       ."</a>" 
                                    );
                                        if($count%3==0){
                                            break;
                                        };
                                    }
                                    echo("</div>");
                                    echo("<div class='latest-prdouct__slider__item'>");

                                    while($row = $result3->fetch_assoc()){
                                        
                                        $count +=1;
                                        echo(
                                            "<a href='./book_detail.php?id=".$row["id"]."' class='latest-product__item'>"
                                            ."<div class='latest-product__item__pic'>"
                                            ."   <img src='/upload/".$row["image_file"]."' alt=''>"
                                           ."</div>"
                                           ."<div class='latest-product__item__text'>"
                                           ."<span>".$row["subject"]."</span>"
                                           ."<h6>" . $row["author"]. "</h6>"
                                           ."<div class='product__details__text'>"
                                           ."<div class='product__details__rating'>"
                                           ."<i class='fa fa-star'></i>"
                                           ."<h6 style='display:inline;'>".$starpoint."<h6>"
                                       ."</div>"
                                       ."</div>"

                                       ."</div>"
                                       ."</a>" 
                                    );
                                        if($count%3==0){
                                            break;
                                        };
                                    }
                                    echo("</div>");
                                    echo("<div class='latest-prdouct__slider__item'>");

                                    while($row = $result3->fetch_assoc()){
                                        $count +=1;
                                        echo(
                                            "<a href='./book_detail.php?id=".$row["id"]."' class='latest-product__item'>"
                                            ."<div class='latest-product__item__pic'>"
                                            ."   <img src='/upload/".$row["image_file"]."' alt=''>"
                                           ."</div>"
                                           ."<div class='latest-product__item__text'>"
                                           ."<span>".$row["subject"]."</span>"
                                           ."<h6>" . $row["author"]. "</h6>"
                                           ."<div class='product__details__text'>"
                                           ."<div class='product__details__rating'>"
                                           ."<i class='fa fa-star'></i>"
                                           ."<h6 style='display:inline;'>".$starpoint."<h6>"
                                       ."</div>"
                                       ."</div>"

                                       ."</div>"
                                       ."</a>" 
                                    );
                                        if($count%3==0){
                                            break;
                                        };
                                    }
                                    echo("</div>");
                                }else{
                                    echo "0 results";
                                }

                                ?>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->



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

    <div id="pop">
  <img src="./img/popup.jpg">
  <div style="float:right;">
    <button id="close" style="width:50px; margin:auto;">닫기</button>
  </div>
    </div>


</body>

</html>