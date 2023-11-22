<!DOCTYPE html>
<html lang="zxx">


<!-- Mirrored from htmldemo.net/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 11 Nov 2023 07:28:23 GMT -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>LTH Furniture</title>
    <meta name="description" content="240+ Best Bootstrap Templates are available on this website. Find your template for your project compatible with the most popular HTML library in the world." />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <link rel="canonical" href="https://htmldemo.hasthemes.com/" />

    <!-- Open Graph (OG) meta tags are snippets of code that control how URLs are displayed when shared on social media  -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Furns - Responsive eCommerce HTML Template" />
    <meta property="og:url" content="PAGE_URL" />
    <meta property="og:site_name" content="Furns - Responsive eCommerce HTML Template" />
    <!-- For the og:image content, replace the # with a link of an image -->
    <meta property="og:image" content="#" />
    <meta property="og:description" content="Furns - Responsive eCommerce HTML Template" />
    <meta name="robots" content="noindex, follow" />
    <!-- Add site Favicon -->
    <!-- <link rel="icon" href="./user/public/assets/images/logo/logo.png" sizes="32x32" /> -->
    <link rel="icon" href="./user/public/assets/images/logo/logo.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="./user/public/assets/images/favicon/favicon.png" />
    <script src="https://kit.fontawesome.com/8e3c294816.js" crossorigin="anonymous"></script>
    <meta name="msapplication-TileImage" content="./user/public/assets/images/favicon/favicon.png" />
    <!-- Structured Data  -->
    <script type="application/ld+json">
        {
            "@context": "http://schema.org",
            "@type": "WebSite",
            "name": "Replace_with_your_site_title",
            "url": "Replace_with_your_site_URL"
        }
    </script>

    <!-- vendor css (Bootstrap & Icon Font) -->
    <!-- <link rel="stylesheet" href="./user/public/assets/css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="./user/public/assets/css/vendor/simple-line-icons.css" />
    <link rel="stylesheet" href="./user/public/assets/css/vendor/ionicons.min.css" /> -->

    <!-- plugins css (All Plugins Files) -->
    <!-- <link rel="stylesheet" href="./user/public/assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="./user/public/assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="./user/public/assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="./user/public/assets/css/plugins/jquery.lineProgressbar.css">
    <link rel="stylesheet" href="./user/public/assets/css/plugins/nice-select.css" />
    <link rel="stylesheet" href="./user/public/assets/css/plugins/venobox.css" />  -->

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="./user/public/assets/css/vendor/vendor.min.css" />
    <link rel="stylesheet" href="./user/public/assets/css/plugins/plugins.min.css" />
    <link rel="stylesheet" href="./user/public/assets/css/style.min.css">

    <!-- Main Style -->
    <!-- <link rel="stylesheet" href="./user/public/assets/css/style.css" /> -->

</head>

<body>
    <!-- Header Area start  -->
    <div class="header section">

        <!-- Header Bottom  Start -->
        <div class="header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row align-self-center">
                    <!-- Header Logo Start -->
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="index.php?act=home"><img class="site-logo" src="./user/public/assets/images/logo/logo.png" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Action Start -->
                    <div class="col align-self-center">
                        <div class="header-actions">
                            <div class="header_account_list">
                                <a href="javascript:void(0)" class="header-action-btn search-btn"><i class="icon-magnifier"></i></a>
                                <div class="dropdown_search">
                                    <form class="action-form" action="#">
                                        <input class="form-control" placeholder="Nhập sản phẩm tìm kiếm" type="text">
                                        <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- Single Wedge Start -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i class="icon-user"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <?php
                                        if(isset($_SESSION['account'])){
                                            extract($_SESSION['account']);
                                    ?>
                                        <li><a class="dropdown-item" href="index.php?act=edit_account">Tài khoản</a></li>
                                        <?php if($vai_tro == 2) {?>
                                            <li><a class="dropdown-item" href="./admin/index.php">Quản trị</a></li>
                                        <?php }?>
                                            <li><a class="dropdown-item" href="index.php?act=order">Đơn hàng</a></li>
                                            <li><a class="dropdown-item" href="index.php?act=logout">Đăng xuất</a></li>
                                    <?php } else {?>
                                        <li><a class="dropdown-item" href="index.php?act=login">Đăng nhập</a></li>
                                        <li><a class="dropdown-item" href="index.php?act=register">Đăng ký</a></li>
                                </ul>
                                    <?php }?>
                                
                            </div>
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="icon-handbag"></i>
                                <span class="header-action-num"><?php $count = count($_SESSION['mycart']); echo $count ?></span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="icon-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Header Action End -->
                </div>
            </div>
        </div>
        <!-- Header Bottom  End -->

        <!-- Header mobile Bottom  Start -->
        <div class="header-bottom d-lg-none sticky-nav bg-white">
            <div class="container position-relative">
                <div class="row align-self-center">
                    <!-- Header Logo Start -->
                    <div class="col-auto align-self-center">
                        <div class="header-logo">
                            <a href="index.html"><img width="60px" src="./user/public/assets/images/logo/logo.png" alt="Site Logo" /></a>
                        </div>
                    </div>
                    <!-- Header Logo End -->

                    <!-- Header Action Start -->
                    <div class="col align-self-center">
                        <div class="header-actions">
                            <div class="header_account_list">
                                <a href="javascript:void(0)" class="header-action-btn search-btn"><i class="icon-magnifier"></i></a>
                                <div class="dropdown_search">
                                    <form class="action-form" action="#">
                                        <input class="form-control" placeholder="Nhập sản phẩm tìm kiếm" type="text">
                                        <button class="submit" type="submit"><i class="icon-magnifier"></i></button>
                                    </form>
                                </div>
                            </div>
                            <!-- Single Wedge Start -->
                            <div class="header-bottom-set dropdown">
                                <button class="dropdown-toggle header-action-btn" data-bs-toggle="dropdown"><i class="icon-user"></i></button>
                                <ul class="dropdown-menu dropdown-menu-right">
                                    <li><a class="dropdown-item" href="index.php?act=account">Tài khoản </a></li>
                                    <li><a class="dropdown-item" href="index.php?act=checkout">Thanh toán</a></li>
                                    <li><a class="dropdown-item" href="index.php?act=login">Đăng nhập</a></li>
                                    <li><a class="dropdown-item" href="index.php?act=login">Đăng ký</a></li>
                                </ul>
                            </div>
                            <!-- Single Wedge End -->
                            <a href="#offcanvas-cart" class="header-action-btn header-action-btn-cart offcanvas-toggle pr-0">
                                <i class="icon-handbag"></i>
                                <span class="header-action-num"><?php count($_SESSION['mycart'])?></span>
                                <!-- <span class="cart-amount">€30.00</span> -->
                            </a>
                            <a href="#offcanvas-mobile-menu" class="header-action-btn header-action-btn-menu offcanvas-toggle d-lg-none">
                                <i class="icon-menu"></i>
                            </a>
                        </div>
                    </div>
                    <!-- Header Action End -->
                </div>
            </div>
        </div>
        <!-- Header mobile Bottom  End -->

        <!-- Main Menu Start -->
        <div class="bg-black d-none d-lg-block sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col-md-12 align-self-center">
                        <div class="main-menu">
                            <ul>
                                <li class="dropdown"><a href="index.php?act=home">Trang chủ</a></li>
                                <li><a href="index.php?act=about">Giới thiệu</a></li>
                                <li class="dropdown position-static"><a href="#">Cửa hàng
                                        <i class="ion-ios-arrow-down"></i></a>
                                    <ul class="mega-menu d-block" style="width: 80%; margin-left: 210px;">
                                        <li class="d-flex">
                                            <ul class="d-block">
                                                <li><a href="index.php?act=product_catalog">Danh mục sản phẩm</a></li>
                                                
                                            </ul>
                                            <ul class="d-block">
                                                <li><a href="index.php?act=product_catalog">Danh mục sản phẩm</a></li>
                                                
                                            </ul>
                                            <ul class="d-block">
                                                <li><a href="index.php?act=product_catalog">Danh mục sản phẩm</a></li>
                                                
                                            </ul>
                                            <ul class="d-block">
                                                <li><a href="index.php?act=cart">Giỏ hàng</a></li>
                                                
                                            </ul>
                                        </li>

                                    </ul>
                                </li>
                                <li class="dropdown "><a href="index.php?act=blog">Tin tức</a></li>
                                <li><a href="index.php?act=contact">Liên hệ</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Menu End -->

        <!-- OffCanvas Cart Start -->
    <div id="offcanvas-cart" class="offcanvas offcanvas-cart">
        <div class="inner">
            <div class="head">
                <span class="title">Giỏ hàng</span>
                <button class="offcanvas-close">×</button>
            </div>
            <?php
                $sum = 0;
                $i = 0;
                $total =0 ;
                $shippingFee = 30000; // Phí vận chuyển
                foreach ($_SESSION['mycart'] as $cart) {
                    $img = "upload/" . $cart[2];
                    $thanhtien = $cart[3] * $cart[4];
                    $sum += $thanhtien;
                    
                    $total = $sum + $shippingFee;
                    ?>
                    <div class="body customScroll">
                        <ul style="margin-bottom: 20px;" class="minicart-product-list">
                            <li>
                                <a href="single-product.html" class="image"><img src="<?= $img ?>" alt="Cart product Image"></a>
                                <div class="content">
                                    <a href="single-product.html" class="title"><?= $cart[1] ?></a>
                                    <span class="quantity-price"><?= $cart[4] ?> x <span class="amount"><?=number_format($cart[3], 0, '.', '.')?></span></span>
                                    <a href="index.php?act=del_cart&idcart=<?=$i?>" class="remove">×</a>
                                </div>
                            </li>
                        </ul>
                    </div>
                    
                <?php $i++;} ?>

            
            <div class="foot">
                <div class="sub-total">
                    <table class="table">
                        <tbody>
                            <tr>
                                <td class="text-start">Tổng phụ :</td>
                                <td class="text-end"><?=number_format($sum, 0, '.', '.')?></td>
                            </tr>
                            <tr>
                                <td class="text-start">Phí ship :</td>
                                <td class="text-end"><?=number_format($shippingFee, 0, '.', '.')?></td>
                            </tr>
                           
                            <tr>
                                <td class="text-start">Tổng tiền :</td>
                                <td class="text-end theme-color"><?=number_format($total, 0, '.', '.')?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="buttons">
                    <?php
                        if (isset($_SESSION['mycart']) && count($_SESSION['mycart']) > 0) {
                            echo '<a href="?act=viewcart" class="btn btn-dark btn-hover-primary mb-30px">Xem giỏ hàng</a>';
                        } else {
                            echo '<a href="?act=empty_cart" class="btn btn-dark btn-hover-primary mb-30px">Xem giỏ hàng</a>';
                        }
                    ?>
                    <a href="?act=cart_pay" class="btn btn-outline-dark current-btn">Tiến hành thanh toán</a>
                </div>
                <p class="minicart-message">Giao hàng miễn phí cho $100!</p>
            </div>
        </div>
        <!-- OffCanvas Cart End -->
    </div>
    <!-- Header Area End  -->