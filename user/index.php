<?php
session_start();
$_SESSION['user'] = 'Trung';
include "config/connectdb.php";
include "user/model/product.php";
include "user/model/comment.php";
include "view/header.php";
include "global/global.php";
// Load product - Our product
$list_product = load_product(0);

// Load product discount
$list_product_discount = load_product(1);

if (isset($_GET['act']) && $_GET['act'] != "") {
    switch ($_GET['act']) {
        case 'home':
            if (isset($_GET['id_pro'])) {
                // load product_detail by id_pro
                $product_detail = load_detail_product($_GET['id_pro']);
            }
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
            // add comment
            if (isset($_POST['add_comment'])) {
                $noi_dung = $_POST['comment'];
                $id_nguoidung = 1;
                if (isset($_SESSION['user'])) {
                    insert_comment($_GET['id_pro'], $id_nguoidung, $noi_dung);
                } else {
                    $message_noLogin = "Bạn chưa đăng nhập - Vui lòng đăng nhập để thực hiện bình luận";
                }
            }

            if (isset($_GET['id_pro'])) {
                // load product_detail by id_pro
                $product_detail = load_detail_product($_GET['id_pro']);

                // load img
                $list_img_pro = load_img_by_idpro(($_GET['id_pro']));

                // load color size
                $load_color_size = load_color_size($_GET['id_pro']);

                // load comments by id_pro
                $product_comment = load_comment($_GET['id_pro']);

                // load product in the same catalog
                $product_thesame_catalog = products_in_the_same_catalog($_GET['id_pro'], $product_detail['ma_lsp']);

                // load 10 prouct most view
                $product_most_view = product_most_view();

                //count comment
                $count_comment = count_comment_by_idpro($_GET['id_pro']);

                include "view/product_detail.php";
            }
            break;

        case 'product_catalog':
            include "view/product_catalog.php";
            break;

        case 'login':
            include "view/login.php";
            break;

        case 'test':
            include "view/test.php";
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/home.php";
}
include "view/footer.php";
