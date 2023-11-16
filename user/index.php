<?php
include "config/connectdb.php";
include "user/model/product.php";
include "view/header.php";
// Load product - Our product
$list_product = load_product();

if (isset($_GET['act']) && $_GET['act'] != "") {
    switch ($_GET['act']) {
        case 'home':
            include "view/home.php";
            break;

        case 'about':
            include "view/about.php";
            break;

        case 'blog':
            include "view/blog.php";
            break;

        case 'cart':
            include "view/cart.php";
            break;

        case 'checkout':
            include "view/checkout.php";
            break;

        case 'contact':
            include "view/contact.php";
            break;

        case 'login':
            include "view/login.php";
            break;

        case 'account':
            include "view/account.php";
            break;

        case 'product_detail':
            if (isset($_GET['id_pro'])) {
                $product_detail=load_detail_product($_GET['id_pro']);
                include "view/product_detail.php";
            }
            break;

        case 'product_catalog':
            include "view/product_catalog.php";
            break;

        case 'login':
            include "view/login.php";
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
