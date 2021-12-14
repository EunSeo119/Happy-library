<?php
  include "include/session.php";

include_once 'bookreg/dbconfig.php';

// Select a database
$dbname = "library";
mysqli_select_db($conn, $dbname) or die('DB selection failed');

//파라미터 검사
if(!isset($_GET["keyword"])) {
    $keyword = '1';
    $sql_cond = "order by reg_date desc";

}
else{
    $keyword = $_GET["keyword"];

    if( $keyword == '1')
        $sql_cond = "order by reg_date desc";
    else if( $keyword == '2')
        $sql_cond = "order by avg desc";
    else 
        $sql_cond = "order by reg_date asc";

}

if( $keyword == '2')
    $sql = "SELECT * FROM v_review ".$sql_cond;
else
    $sql = "SELECT * FROM book ".$sql_cond;
    
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
    function button1_click(obj) {
        keyword = obj.value;
        document.frm.action = "hot.php?keyword="+keyword;
        document.frm.submit();
    }

    $(document).ready(function(){
        //$("#keyword option:eq(2)").prop("selected", true);
        $("#keyword").val("<?php echo($keyword); ?>").prop("selected", true);
    });



    </script>      
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Header Section Begin -->
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
                        <h2>Ranking</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <a href="./hot.php">Ranking</a>
                            <span>Ranking</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <div class="mb-4"></div>

    <!-- Hero Section Begin -->
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>Ranking</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                <div class="filter__item">
                        <div class="section-title product__discount__title">
                            <h2>순위</h2>
                        </div>
                        <div class="row">
                            <div class="col-lg-4 col-md-5">
                                <form action="" name="frm">
                                <div class="filter__sort">
                                    <span>분류방법</span>
                                    <select id="keyword" name="keyword" onchange="button1_click(this);">
                                        <option value="1">신규순</option>
                                        <option value="2">별점순</option>
                                        <option value="3">인기순</option>
                                    </select>
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="row">
               
                            

                    <?php
                    if($result->num_rows > 0){

                        // Output data of each row
                        while($row = $result->fetch_assoc()){
                            $date = date_create($row["reg_date"]);
                            $star = "SELECT avg FROM v_review WHERE id=".$row["id"]."" ;
                            $star_result = $conn->query($star);
                            $starpoint = 0;
                            if($star_row = $star_result->fetch_assoc()
                            ) {
                                $starpoint = $star_row["avg"];
                            }

                            echo(
                                " <div class='col-lg-4 col-md-6 col-sm-6'>												            "
                            ."     <div class='product__item'>														                "
                            ."         <div class='product__item__pic set-bg' data-setbg='" . "/upload/" . $row["image_file"]. "'>  "
                            ."         </div>																		  "
                            ."         <div class='product__item__text'>											  "
                            ."             <h5><a href='book_detail.php?id=" . $row["id"]. "'>"  . $row["subject"]. "</a></h5>				  "
                            ."             <h6>".$row["author"]."</h6>"
                            ."<div class='product__details__text'>"
                            ."<div class='product__details__rating'>"
                            ."<i class='fa fa-star'></i>"
                            ."<h6 style='display:inline;'>".$starpoint."<h6>"
                        ."</div>"
                        ."</div>"

                            ."         </div>																		  "
                            ."     </div>																			  "
                            ." </div>																				  ");
                            }
                    }else{
                        echo "0 results";
                    }

                    ?>  

                                           


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
