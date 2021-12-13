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
    <!-- 은서추가끝 -->
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
                <li class="active"><a href="./index.php">Home</a></li>
                <li><a href="./shop-grid.php">Shop</a></li>
                <li><a href="#">Pages</a>
                    <ul class="header__menu__dropdown">
                        <li><a href="./shop-details.php">Shop Details</a></li>
                        <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                        <li><a href="./checkout.php">Check Out</a></li>
                        <li><a href="./blog-details.php">Blog Details</a></li>
                    </ul>
                </li>
                <li><a href="./blog.php">Blog</a></li>
                <li><a href="./contact.php">Contact</a></li>
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
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                                <li>Free Shipping for all Order of $99</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
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
                        <a href="./index.php"><img src="img/logo.png" alt=""></a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <nav class="header__menu">
                        <ul>
                            <li><a href="./index.php">Home</a></li>
                            <li class="active"><a href="./shop-grid.php">Shop</a></li>
                            <li><a href="#">Pages</a>
                                <ul class="header__menu__dropdown">
                                    <li><a href="./shop-details.php">Shop Details</a></li>
                                    <li><a href="./shoping-cart.php">Shoping Cart</a></li>
                                    <li><a href="./checkout.php">Check Out</a></li>
                                    <li><a href="./blog-details.php">Blog Details</a></li>
                                </ul>
                            </li>
                            <li><a href="./blog.php">Blog</a></li>
                            <li><a href="./contact.php">Contact</a></li>
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
    <section class="hero hero-normal">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="hero__categories">
                        <div class="hero__categories__all">
                            <i class="fa fa-bars"></i>
                            <span>All departments</span>
                        </div>
                        <ul>
                            <li><a href="#">Fresh Meat</a></li>
                            <li><a href="#">Vegetables</a></li>
                            <li><a href="#">Fruit & Nut Gifts</a></li>
                            <li><a href="#">Fresh Berries</a></li>
                            <li><a href="#">Ocean Foods</a></li>
                            <li><a href="#">Butter & Eggs</a></li>
                            <li><a href="#">Fastfood</a></li>
                            <li><a href="#">Fresh Onion</a></li>
                            <li><a href="#">Papayaya & Crisps</a></li>
                            <li><a href="#">Oatmeal</a></li>
                            <li><a href="#">Fresh Bananas</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="hero__search">
                        <div class="hero__search__form">
                            <form action="#">
                                <div class="hero__search__categories">
                                    All Categories
                                    <span class="arrow_carrot-down"></span>
                                </div>
                                <input type="text" placeholder="What do yo u need?">
                                <button type="submit" class="site-btn">SEARCH</button>
                            </form>
                        </div>
                        <div class="hero__search__phone">
                            <div class="hero__search__phone__icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="hero__search__phone__text">
                                <h5>+65 11.188.888</h5>
                                <span>support 24/7 time</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

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
                                src="https://image.aladin.co.kr/product/28271/42/cover500/k742835998_1.jpg" alt="">
                        </div>
                        <div class="product__details__pic__slider owl-carousel">
                            <img data-imgbigurl="img/product/details/product-details-2.jpg"
                                src="https://image.aladin.co.kr/product/28328/90/cover500/8925579170_1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-3.jpg"
                                src="https://image.aladin.co.kr/product/28273/37/cover150/k852835990_1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-5.jpg"
                                src="https://image.aladin.co.kr/product/28182/0/cover150/k502835770_1.jpg" alt="">
                            <img data-imgbigurl="img/product/details/product-details-4.jpg"
                                src="https://image.aladin.co.kr/product/28328/68/cover150/8936455737_1.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-8">
                    <div class="product__details__text">
                        <h3>Book Name</h3>
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
                        <a href="#" class="primary-btn" id="btn-loan">LOAN</a>
                        <a href="#" style="display:none;background-color: #0093FF;" class="primary-btn" id="btn-view-ebook">View Ebook</a>
                        <a href="#" class="heart-icon" id="icon-heart-on-book"><span class="icon_heart_alt"></span></a>
                        <p style="display:none;" id="loan-result" class="text-success">대출이 완료되었습니다.</p>
                        <ul>
                            <li><b>Author</b> <span>조던 B. 피터슨</span></li>
                            <li><b>Translator</b> <span>김진주 <samp></li>
                            <li><b>Publisher</b> <span>앵글북스</span></li>
                            <li><b>Publication Year</b> <span>2021</span></li>
                            <li><b>Availability</b> <span>Available</span></li>
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
                                    <p>문화에는 저마다 문화의 중심을 이루고, 모든 부차적 신념의 토대가 되는 핵심 전제가 있다. </p>
                                        이 전제를 포기하면 우리가 ‘믿고 있던 모든 것’이 허물어지고, 혼돈을 불러오는 미지가 다시 세상을 지배하기에 우리는 이것을 쉽게 포기할 수 없다.<br><br></p>
                                        
                                        <p>이 책은 신화와 문학, 현대 신경과학 등의 연구를 토대로, 인간이 위험천만한 ‘미탐험 영토’에서 살아가는 방법을 어떻게 배우는지, 
                                        그리고 그 미지의 위협을 어떻게 기회로 뒤바꾸는지를 보여주며 우리 삶을 지배하고 바꾸는 ‘신념의 구조와 의미’를 재발견하도록 이끈다.</p>
                                         이와 더불어 법과 정의, 옳고 그름의 모든 기준이 흔들리고 있는 이 시대에 과연 우리가 지키며 살아가야 하는 것이 무엇인지, 
                                         왜 그것이 중요한지를 다시금 깨닫게 만드는 계기가 되어줄 것이다.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                  <!-- 은서추가2 -->
                                  
                                  <div class="col-lg-9">
                                    <div class="hero__search">
                                        <div class="hero__search__form">
                                            <form action="#">
                                                <div class="hero__search__categories">
                                                    All Categories
                                                    <span class="arrow_carrot-down"></span>
                                                </div>
                                                <input type="text" placeholder="What do yo u need?">
                                                <button type="submit" class="site-btn">SEARCH</button>
                                            </form>
                                        </div>
                                        
                                    </div>
                                    <div class="col-lg-3">
                                      <div class="hero__categories">
                                          <div class="hero__categories__all">
                                              <i class="fa fa-bars"></i>
                                              <span>star</span>
                                          </div>
                                          <ul>
                                              <li><a href="#">5</a></li>
                                              <li><a href="#">4</a></li>
                                              <li><a href="#">3</a></li>
                                              <li><a href="#">2</a></li>
                                              <li><a href="#">1</a></li>
                                          </ul>
                                      </div>
                                  </div>
                                </div>
                                                <!-- With avatar -->
                                  <h4
                                    class="mb-4 text-lg font-semibold text-gray-600 dark:text-gray-300"
                                  >
                                    Table with avatars
                                  </h4>
                                  <div class="w-full mb-8 overflow-hidden rounded-lg shadow-xs">
                                    <div class="w-full overflow-x-auto">
                                      <table class="w-full whitespace-no-wrap">
                                        <thead>
                                          <tr
                                            class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase border-b dark:border-gray-700 bg-gray-50 dark:text-gray-400 dark:bg-gray-800"
                                          >
                                            <th class="px-4 py-3">Client</th>
                                            <th class="px-4 py-3">Amount</th>
                                            <th class="px-4 py-3">Status</th>
                                            <th class="px-4 py-3">Date</th>
                                          </tr>
                                        </thead>
                                        <tbody
                                          class="bg-white divide-y dark:divide-gray-700 dark:bg-gray-800"
                                        >
                                          <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                              <div class="flex items-center text-sm">
                                                <!-- Avatar with inset shadow -->
                                                <div
                                                  class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                                >
                                                  <img
                                                    class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                    alt=""
                                                    loading="lazy"
                                                  />
                                                  <div
                                                    class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"
                                                  ></div>
                                                </div>
                                                <div>
                                                  <p class="font-semibold">Hans Burger</p>
                                                  <p class="text-xs text-gray-600 dark:text-gray-400">
                                                    10x Developer
                                                  </p>
                                                </div>
                                              </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              $ 863.45
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                              <div class="product__details__rating">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star-half-o"></i>
                                              </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              6/10/2020
                                            </td>
                                          </tr>

                                          <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                              <div class="flex items-center text-sm">
                                                <!-- Avatar with inset shadow -->
                                                <div
                                                  class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                                >
                                                  <img
                                                    class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&facepad=3&fit=facearea&s=707b9c33066bf8808c934c8ab394dff6"
                                                    alt=""
                                                    loading="lazy"
                                                  />
                                                  <div
                                                    class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"
                                                  ></div>
                                                </div>
                                                <div>
                                                  <p class="font-semibold">Jolina Angelie</p>
                                                  <p class="text-xs text-gray-600 dark:text-gray-400">
                                                    Unemployed
                                                  </p>
                                                </div>
                                              </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              $ 369.95
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                              <span
                                                class="px-2 py-1 font-semibold leading-tight text-orange-700 bg-orange-100 rounded-full dark:text-white dark:bg-orange-600"
                                              >
                                                Pending
                                              </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              6/10/2020
                                            </td>
                                          </tr>

                                          <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                              <div class="flex items-center text-sm">
                                                <!-- Avatar with inset shadow -->
                                                <div
                                                  class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                                >
                                                  <img
                                                    class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/photo-1551069613-1904dbdcda11?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                    alt=""
                                                    loading="lazy"
                                                  />
                                                  <div
                                                    class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"
                                                  ></div>
                                                </div>
                                                <div>
                                                  <p class="font-semibold">Sarah Curry</p>
                                                  <p class="text-xs text-gray-600 dark:text-gray-400">
                                                    Designer
                                                  </p>
                                                </div>
                                              </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              $ 86.00
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                              <span
                                                class="px-2 py-1 font-semibold leading-tight text-red-700 bg-red-100 rounded-full dark:text-red-100 dark:bg-red-700"
                                              >
                                                Denied
                                              </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              6/10/2020
                                            </td>
                                          </tr>

                                          <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                              <div class="flex items-center text-sm">
                                                <!-- Avatar with inset shadow -->
                                                <div
                                                  class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                                >
                                                  <img
                                                    class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/photo-1551006917-3b4c078c47c9?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                    alt=""
                                                    loading="lazy"
                                                  />
                                                  <div
                                                    class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"
                                                  ></div>
                                                </div>
                                                <div>
                                                  <p class="font-semibold">Rulia Joberts</p>
                                                  <p class="text-xs text-gray-600 dark:text-gray-400">
                                                    Actress
                                                  </p>
                                                </div>
                                              </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              $ 1276.45
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                              <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                              >
                                                Approved
                                              </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              6/10/2020
                                            </td>
                                          </tr>

                                          <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                              <div class="flex items-center text-sm">
                                                <!-- Avatar with inset shadow -->
                                                <div
                                                  class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                                >
                                                  <img
                                                    class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/photo-1546456073-6712f79251bb?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                    alt=""
                                                    loading="lazy"
                                                  />
                                                  <div
                                                    class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"
                                                  ></div>
                                                </div>
                                                <div>
                                                  <p class="font-semibold">Wenzel Dashington</p>
                                                  <p class="text-xs text-gray-600 dark:text-gray-400">
                                                    Actor
                                                  </p>
                                                </div>
                                              </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              $ 863.45
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                              <span
                                                class="px-2 py-1 font-semibold leading-tight text-gray-700 bg-gray-100 rounded-full dark:text-gray-100 dark:bg-gray-700"
                                              >
                                                Expired
                                              </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              6/10/2020
                                            </td>
                                          </tr>

                                          <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                              <div class="flex items-center text-sm">
                                                <!-- Avatar with inset shadow -->
                                                <div
                                                  class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                                >
                                                  <img
                                                    class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/photo-1502720705749-871143f0e671?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=b8377ca9f985d80264279f277f3a67f5"
                                                    alt=""
                                                    loading="lazy"
                                                  />
                                                  <div
                                                    class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"
                                                  ></div>
                                                </div>
                                                <div>
                                                  <p class="font-semibold">Dave Li</p>
                                                  <p class="text-xs text-gray-600 dark:text-gray-400">
                                                    Influencer
                                                  </p>
                                                </div>
                                              </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              $ 863.45
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                              <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                              >
                                                Approved
                                              </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              6/10/2020
                                            </td>
                                          </tr>

                                          <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                              <div class="flex items-center text-sm">
                                                <!-- Avatar with inset shadow -->
                                                <div
                                                  class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                                >
                                                  <img
                                                    class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/photo-1531746020798-e6953c6e8e04?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                    alt=""
                                                    loading="lazy"
                                                  />
                                                  <div
                                                    class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"
                                                  ></div>
                                                </div>
                                                <div>
                                                  <p class="font-semibold">Maria Ramovic</p>
                                                  <p class="text-xs text-gray-600 dark:text-gray-400">
                                                    Runner
                                                  </p>
                                                </div>
                                              </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              $ 863.45
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                              <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                              >
                                                Approved
                                              </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              6/10/2020
                                            </td>
                                          </tr>

                                          <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                              <div class="flex items-center text-sm">
                                                <!-- Avatar with inset shadow -->
                                                <div
                                                  class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                                >
                                                  <img
                                                    class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/photo-1566411520896-01e7ca4726af?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                    alt=""
                                                    loading="lazy"
                                                  />
                                                  <div
                                                    class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"
                                                  ></div>
                                                </div>
                                                <div>
                                                  <p class="font-semibold">Hitney Wouston</p>
                                                  <p class="text-xs text-gray-600 dark:text-gray-400">
                                                    Singer
                                                  </p>
                                                </div>
                                              </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              $ 863.45
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                              <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                              >
                                                Approved
                                              </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              6/10/2020
                                            </td>
                                          </tr>

                                          <tr class="text-gray-700 dark:text-gray-400">
                                            <td class="px-4 py-3">
                                              <div class="flex items-center text-sm">
                                                <!-- Avatar with inset shadow -->
                                                <div
                                                  class="relative hidden w-8 h-8 mr-3 rounded-full md:block"
                                                >
                                                  <img
                                                    class="object-cover w-full h-full rounded-full"
                                                    src="https://images.unsplash.com/flagged/photo-1570612861542-284f4c12e75f?ixlib=rb-1.2.1&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&ixid=eyJhcHBfaWQiOjE3Nzg0fQ"
                                                    alt=""
                                                    loading="lazy"
                                                  />
                                                  <div
                                                    class="absolute inset-0 rounded-full shadow-inner"
                                                    aria-hidden="true"
                                                  ></div>
                                                </div>
                                                <div>
                                                  <p class="font-semibold">Hans Burger</p>
                                                  <p class="text-xs text-gray-600 dark:text-gray-400">
                                                    10x Developer
                                                  </p>
                                                </div>
                                              </div>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              $ 863.45
                                            </td>
                                            <td class="px-4 py-3 text-xs">
                                              <span
                                                class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-full dark:bg-green-700 dark:text-green-100"
                                              >
                                                Approved
                                              </span>
                                            </td>
                                            <td class="px-4 py-3 text-sm">
                                              6/10/2020
                                            </td>
                                          </tr>
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
        <h1>Book Name</h1>
        <hr>
        <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dolore voluptatem odit, vitae nam architecto corrupti sequi accusamus. Placeat adipisci consequuntur tempore reiciendis, ab debitis possimus vitae, numquam sunt quae vel?</p>
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