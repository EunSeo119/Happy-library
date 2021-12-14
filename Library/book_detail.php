<?php
$book_id = isset($_GET["id"]) ? (int)$_GET["id"] : 0;

include "include/session.php";
include_once 'bookreg/dbconfig.php';
include "include/dbConnect.php";

//book detail 정보 저장용 빈 배열 생성
$book_detail = array("book_id"=>0,"subject"=>"","author"=>"","publisher"=>"","comment"=>"","status"=>"","image_file"=>"", "reg_date"=>"", "ebook"=>"", "userId"=>"");
//book_id 참조하여 book detail 추출
if( $book_id ) {
    $sql = "SELECT * FROM book where id={$book_id}";
    //if( $result = mysqli_query($dbConnect, $sql) ) {
        $result = mysqli_query($dbConnect, $sql);
        $book_detail = mysqli_fetch_assoc($result);
    //}
}
$book_detail['userId'] = isset($_SESSION['ses_userid']) ? $_SESSION['ses_userid'] : 0;




// Select a database
 $dbname = "library";
 mysqli_select_db($conn, $dbname) or die('DB selection failed');

//파라미터 검사
//review 작업 시 아래 주석 해제 필요

if(!isset($_GET["keyword"])) {
    $keyword = "";
}else{
    $keyword = $_GET["keyword"];
}
$sql = "SELECT * FROM review Where book_id = '$book_id' ";
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
    <title>Ogani | Template</title>

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


    <!-- 은서추가 -->
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="./assets/css/tailwind.output.css" />
    <script
      src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js"
      defer
    ></script>
    <script src="./assets/js/init-alpine.js"></script>
    
    <script>
    function button1_click() {
        document.frm.action = "insertReview.php?book_id="+ <?php echo($book_id) ?>;
        document.frm.submit();
    }
    </script>       
    
    <!-- 은서추가끝 -->
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

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
    <section class="breadcrumb-section set-bg" data-setbg="img/books-g562a90b60_1920.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Book Detail</h2>
                        <div class="breadcrumb__option">
                            <a href="./index.php">Home</a>
                            <a href="./index.php">Books</a>
                            <span>Book Detail</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="product__details__pic">
                        <div class="product__details__pic__item">
                            <img class="product__details__pic__item--large"
                                src="<?=$book_detail['image_file']?>" alt="">
                        </div>
                        <!-- <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="https://image.aladin.co.kr/product/28328/90/cover500/8925579170_1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="https://image.aladin.co.kr/product/28273/37/cover150/k852835990_1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="https://image.aladin.co.kr/product/28182/0/cover150/k502835770_1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="https://image.aladin.co.kr/product/28328/68/cover150/8936455737_1.jpg" alt="">
                        </div> -->
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="product__details__text">
                        <h3><?=$book_detail['subject']?></h3>
                        <div class="product__details__rating">
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star"></i>
                            <i class="fa fa-star-half-o"></i>
                            <span>(18 reviews)</span>
                        </div>
                        <!-- <div class="product__details__price">$50.00</div> -->
                        <p>information</p>
                        <!-- <div class="product__details__quantity">
                            <div class="quantity">
                                <div class="pro-qty">
                                    <input type="text" value="1">
                                </div>
                            </div>
                        </div> -->
                        <a href="#!" class="primary-btn" id="btn-loan" data-booknum="<?=$book_detail['id']?>" data-userid="<?=$book_detail['userId']?>">LOAN</a>
                        <a href="#" style="display:none;background-color: #0093FF;" class="primary-btn" id="btn-view-ebook">View Ebook</a>
                        <a href="#!" class="heart-icon" id="icon-heart-on-book"><span class="icon_heart_alt"></span></a>
                        <p style="display:none;" id="loan-result" class="text-success">대출이 완료되었습니다.</p>
                        <ul>
                            <li><b>Author</b> <span><?=$book_detail['author']?></span></li>
                            <li><b>Publisher</b> <span><?=$book_detail['publisher']?></span></li>
                            <!-- <li><b>Publication Year</b> <span>2021</span></li> -->
                            <!-- <li><b>Availability</b> <span><?=$book_detail['author']?></span></li> -->
                                <!-- <div class="share">
                                    <a href="#"><i class="fa fa-facebook"></i></a>
                                    <a href="#"><i class="fa fa-twitter"></i></a>
                                    <a href="#"><i class="fa fa-instagram"></i></a>
                                    <a href="#"><i class="fa fa-pinterest"></i></a>
                                </div> -->
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <!-- <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true">Description</a>
                            </li> -->
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">Instruction</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">Reviews <span>(1)</span></a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <!-- <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Book Instruction</h6>
                                    <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                        Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus
                                        suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam
                                        vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada.
                                        Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat,
                                        accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a
                                        pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula
                                        elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus
                                        et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam
                                        vel, ullamcorper sit amet ligula. Proin eget tortor risus.</p>
                                        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                        ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                        elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                        porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                        nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                                        Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed
                                        porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum
                                        sed sit amet dui. Proin eget tortor risus.</p>
                                </div> -->
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <h6>Book Instruction</h6>
                                    <p><?=$book_detail['comment']?></p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                  <!-- 은서추가2 -->
                                  
                                 
                                  <div class="col-lg-9 col-md-7">
                                  <div  style="float: left;">
                            <h3>리뷰</h3>
                                            
                        </div>
                        <br/><br/>
                        <hr/>
  </div>
  <br/><br/>

<form  name="frm" method="post" class="form form-signup">
  <div>
  <div style="border: 0px solid; float: left; width: 60%;">
    <input type="text" class="form-control" name="comment" placeholder="" value="" required> 
  </div>
  <div style="border: 0px solid; float: left; width: ;">
    <select id="star_point" name="star_point" >
        <option value="5">5</option>
        <option value="4">4</option>
        <option value="3">3</option>
        <option value="2">2</option>
        <option value="1">1</option>

    </select>
  </div>
  <div style="border: 0px solid; float: left; width: ;">
    <button class="btn btn-primary btn-lg btn-block span1" id="signup-button" style="margin:auto;width:100px;" onclick="button1_click();">저장</button> 
  </div>
  </div>
</form>


                                  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                                    <div class="w-full overflow-x-auto">
                                      <table class="w-full whitespace-no-wrap">
                                        <thead>
                                          <tr
                                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                                          >
                                            <th class="px-4 py-3">user name</th>
                                            <th class="px-4 py-3" style="    width: 45%;">content</th>
                                            <th class="px-4 py-3">star point</th>
                                            <th class="px-4 py-3">date</th>
                                          </tr>
                                        </thead>
                                        <tbody
                                          class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                                        >




                                <?php
                                if($result->num_rows > 0){
                                    // Output data of each row
                                    while($row = $result->fetch_assoc()){
                                        $date = date_create($row["reg_date"]);


                                        echo(
                                           " <tr class='text-gray-700 dark:text-gray-400'>			   "
                                          ."   <td class='px-4 py-3'>						   "
                                          ."     <div class='flex items-center text-sm'>				   "
                                          ."       <div class='relative hidden w-8 h-8 mr-3 rounded-full md:block'> "
                                          ."         <div							   "
                                          ."           class='absolute inset-0 rounded-full shadow-inner'	   "
                                          ."           aria-hidden='true'					   "
                                          ."         ></div>							   "
                                          ."       </div>							   "
                                          ."       <div>								   "
                                          ."         <p class='font-semibold'>" . $row["user_name"]. "</p>			   "
                                          ."       </div>							   "
                                          ."     </div>								   "
                                          ."   </td>								   "
                                          ."   <td class='px-4 py-3 text-sm'>					   "
                                          ."     " . $row["comment"]. "							   "
                                          ."   </td>								   "
                                          ."   <td class='px-4 py-3 text-xs'>					   "
                                          ."     <div class='product__details__rating'>				   "
                                          ."         <i class='fa fa-star'></i>					   "
                                          ."         <i class='fa fa-star'></i>					   "
                                          ."         <i class='fa fa-star'></i>					   "
                                          ."         <i class='fa fa-star'></i>					   "
                                          ."         <i class='fa fa-star-half-o'>" . $row["star_point"]. "</i>				   "
                                          ."     </div>								   "
                                          ."   </td>								   "
                                          ."   <td class='px-4 py-3 text-sm'>					   "
                                          ."     " . $row["reg_date"]. "							   "
                                          ."   </td>								   "
                                          ." </tr>								   "
                                          );

                                    }
                                }else{
                                    echo "0 results";
                                }

                                ?>







                                        </tbody>
                                      </table>
                                    </div>
                                    <div
                                      class="grid px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase border-t dark:border-gray-700 bg-gray-50 sm:grid-cols-9 dark:text-gray-400 dark:bg-gray-800"
                                    >
                                      <span class="flex items-center col-span-3">
                                        Showing 21-30 of 100
                                      </span>
                                      <span class="col-span-2"></span>
                                      <!-- Pagination -->
                                      <span class="flex col-span-4 mt-2 sm:mt-auto sm:justify-end">
                                        <nav aria-label="Table navigation">
                                          <ul class="inline-flex items-center">
                                            <li>
                                              <button
                                                class="px-3 py-1 rounded-md rounded-l-lg focus:outline-none focus:shadow-outline-purple"
                                                aria-label="Previous"
                                              >
                                                <svg
                                                  aria-hidden="true"
                                                  class="w-4 h-4 fill-current"
                                                  viewBox="0 0 20 20"
                                                >
                                                  <path
                                                    d="M12.707 5.293a1 1 0 010 1.414L9.414 10l3.293 3.293a1 1 0 01-1.414 1.414l-4-4a1 1 0 010-1.414l4-4a1 1 0 011.414 0z"
                                                    clip-rule="evenodd"
                                                    fill-rule="evenodd"
                                                  ></path>
                                                </svg>
                                              </button>
                                            </li>
                                            <li>
                                              <button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                              >
                                                1
                                              </button>
                                            </li>
                                            <li>
                                              <button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                              >
                                                2
                                              </button>
                                            </li>
                                            <li>
                                              <button
                                                class="px-3 py-1 text-white transition-colors duration-150 bg-purple-600 border border-r-0 border-purple-600 rounded-md focus:outline-none focus:shadow-outline-purple"
                                              >
                                                3
                                              </button>
                                            </li>
                                            <li>
                                              <button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                              >
                                                4
                                              </button>
                                            </li>
                                            <li>
                                              <span class="px-3 py-1">...</span>
                                            </li>
                                            <li>
                                              <button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                              >
                                                8
                                              </button>
                                            </li>
                                            <li>
                                              <button
                                                class="px-3 py-1 rounded-md focus:outline-none focus:shadow-outline-purple"
                                              >
                                                9
                                              </button>
                                            </li>
                                            <li>
                                              <button
                                                class="px-3 py-1 rounded-md rounded-r-lg focus:outline-none focus:shadow-outline-purple"
                                                aria-label="Next"
                                              >
                                                <svg
                                                  class="w-4 h-4 fill-current"
                                                  aria-hidden="true"
                                                  viewBox="0 0 20 20"
                                                >
                                                  <path
                                                    d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z"
                                                    clip-rule="evenodd"
                                                    fill-rule="evenodd"
                                                  ></path>
                                                </svg>
                                              </button>
                                            </li>
                                          </ul>
                                        </nav>
                                      </span>
                                    </div>
                                  </div>

            <!-- 은서추가끝2 -->
                                   
    <!-- Related Product Section End -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

    

    <!-- Footer Section Begin -->
    <footer class="footer spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="footer__about">
                        <div class="footer__about__logo">
                            <a href="./index.php"><img src="img/logo.png" alt=""></a>
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

    <!-- 유지현 추가 시작 -->
    <div id="view-ebook-pop">
        <button class="close-ebook-view"><i class="fa fa-close"></i></button>
        <h1 style="font-size: 30px;"><?=$book_detail['subject']?></h1>
        <hr>
        <p><?=$book_detail['ebook']?></p>
    </div>
    <!-- 유지현 추가 끝 -->

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