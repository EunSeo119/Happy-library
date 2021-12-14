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
    <!-- <div id="preloder">
        <div class="loader"></div>
    </div> -->

    <!-- Humberger End -->

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
                            <li><a href="./index.php">Borrow</a></li>
                            <li><a href="./hot.php">Ranking</a></li>
                            <li><a href="#">Communication</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./book_application.php">희망 도서 신청</a></li>
                                    <li><a href="./review_contest_list.php">감상문 공모전</a></li>
                                    <li><a href="./notice.php">공지사항</a></li>
                                    <li><a href="./checkout.php">이용안내</a></li>
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
                <li><a href="sign_in.php" id="signin" onclick="Login()">Login</a></li>
                <li><a href="sign_up.php" id="signup" onclick="Signup()">Sign UP</a></li>
                <?php
                }else{
                ?>
                <li><a href="logout.php" id="signout">Logout</a></li>
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
    <section class="breadcrumb-section set-bg" data-setbg="img/books-g562a90b60_1920.jpg" style="margin: 20px 0px 20px 0px;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>My Page</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                           <span>Mypage</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->
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
                                            <!-- <td scope="col">연체일</td> -->
                                            <td scope="col">반납/연장</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php
                                    $UID = $_SESSION['ses_userid'];
                                       //  $sql = "SELECT * FROM loan WHERE loanNum = $UID";
                                     $sql =                                                            
                                     "SELECT id, subject, author, loanDate, dueDate, loanNum from loan, book
                                        where id = bookNum and userID = $UID and loanState = 1";

                                     $result = mysqli_query($dbConnect, $sql);
                            
                                     $x= 0;
                                
                                     if (mysqli_num_rows($result) > 0) {
                                        while($row = mysqli_fetch_assoc($result)) {
                                        echo "<tr>
                                        <td>";
                                        echo ++$x. "</td>";    
                                        echo "<td>" . $row["id"]. "</td>";
                                        echo "<td>". $row["subject"]. "</td>";
                                        echo "<td>" . $row["author"]. "</td>";
                                        echo "<td>". $row["loanDate"]."</td>";
                                        echo "<td>". $row["dueDate"]."</td>";
                                        $re = $row['id']; 
                                        $rl = $row['loanNum'];
                                       ?>
                                        <?php
                                        echo "<td>";?>
                                        <a type="button" class='btn btn-success btn-sm' href="return.php?bookNum=<?php echo $re; ?>">반납</a>
                                        <a type="button" class='btn btn-danger btn-sm' href="extend.php?bookNum=<?php echo $rl; ?>">연장</a></td>
                                         <!-- <a type="button" class='btn btn-success btn-sm' href="return.php?bookNum=<?php echo $row['id']; ?>">반납</a> 
                                         <a type="button" class='btn btn-danger btn-sm' href="extend.php?bookNum=<?php echo $row['id']; ?>&dueDate=<?=$row["dueDate"]?>">연장</a> -->
                                        </td><?php
                                         
                                    }
                                }
                                       ?>
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
                                    <?php
                                     $UID = $_SESSION['ses_userid'];
                                   $sql =
                                    "SELECT id, subject, author, loanDate, dueDate from loan, book
                                    where id=bookNum and userID = $UID and loanState = 0";
                                                            
                                   $result = mysqli_query($dbConnect, $sql);
                              
                                   $x= 0;
                              
                                      while($row = mysqli_fetch_assoc($result)) {
                                      echo "<tr>
                                      <td>";
                                      echo ++$x. "</td>";    
                                      echo "<td>" . $row["id"]. "</td>";
                                      echo "<td>". $row["subject"]. "</td>";
                                      echo "<td>" . $row["author"]. "</td>";
                                      echo "<td>". $row["loanDate"]."</td>";
                                      echo "<td>". $row["dueDate"]."</td>";
                                     ?>
                                         <?php
                                    }
                                
                                       ?>
                                       

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