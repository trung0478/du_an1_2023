<?php
ob_start();
session_start();
$_SESSION['user'] = 'Trung';
include "config/connectdb.php";
include "user/model/product.php";
include "model/product_catalog.php";
include "user/model/comment.php";
include "model/account.php";
include "view/header.php";
include "global/global.php";
// Load product - Our product

if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
$list_product = load_product(0);

// Load product discount
$list_product_discount = load_product(1);

if (isset($_GET['act']) && $_GET['act'] != "") {
    switch ($_GET['act']) {
        case 'home':
            if (isset($_GET['id_pro'])) {
                // load product_detail by id_pro
                $productone = getone_product($_GET['id_pro']);
                $productOne = load_detail_product($_GET['id_pro']);
            }
            include "view/home.php";
            break;

        case 'about':
            include "view/about.php";
            break;

        case 'blog':
            include "view/blog.php";
            break;

        case 'contact':
            include "view/contact.php";
            break;
            // Giỏ hàng
            case 'addtocart':
                if(isset($_POST['addtocart'])){
                    if (!isset($_POST['namecolor']) && !isset($_POST['namesize'])) {
                        $message = '<p class="alert alert-danger">Vui lòng chọn màu sắc và kích thước để thêm vào giỏ hàng!</p>';
                    } else {
                        if (!isset($_POST['namecolor'])) {
                            $message = '<p class="alert alert-danger">Vui lòng chọn màu sắc để thêm vào giỏ hàng!</p>';
                        } else {
                            if (!isset($_POST['namesize'])) {
                                $message = '<p class="alert alert-danger">Vui lòng chọn kích cỡ để thêm vào giỏ hàng!</p>';
                            } else {
                                $idpro = $_POST['idpro'];
                                $name = $_POST['name'];
                                $image = $_POST['image'];
                                $price = $_POST['price'];
                                $quantity = $_POST['quantity'];
                                $name_color = $_POST['namecolor'];
                                $name_size = $_POST['namesize'];
                                $total = $price * $quantity;
                                $product_exists = false;
                                $i = 0;
                                foreach ($_SESSION['mycart'] as $item) {
                                    if ($item[5] == $name_color && $item[6] == $name_size) {
                                        $_SESSION['mycart'][$i][4] += $quantity;
                                        $product_exists = true;
                                        break;
                                    }
                                    $i++;
                                }
                                if ($product_exists == false) {
                                    $add_product = [$idpro, $name, $image, $price, $quantity, $name_color, $name_size, $total];
                                    // array_push($_SESSION['mycart'], $add_product);
                                    $_SESSION['mycart'][] = $add_product;
                                }
                                echo '<script>window.location.href = window.location.href;</script>';
                            }
                        }
                    }
                    
                }
                include "view/cart/cart.php";
                break;
                case 'del_cart':
                    if(isset($_GET['idcart'])){
                        array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
                    }else{
                        $_SESSION['mycart'] = [];
                    }
                    if (count($_SESSION['mycart']) > 0) {
                        header('location: index.php?act=viewcart');
                    }else {
                        header('location: index.php?act=empty_cart');
                    }
                    // header('Location: index.php?act=viewcart');
                    break;
                case 'pockup':
                    if (isset($_GET['idpro']) && $_GET['idpro'] > 0) {
                        // load product_detail by id_pro
                        $one_product = get_one_product($_GET['idpro']);
                        $one_color_size = load_color_size($_GET['idpro']);
                        $img_product = load_img_by_idpro(($_GET['idpro']));
                    }
                    include 'view/pockup.php';
                    break;
                case 'viewcart':
                    include 'view/cart/cart.php';
                    break;
                case 'checkout':
                    if (isset($_POST['update'])) {
                        $full_name = $_POST['full_name'];
                        $gender = $_POST['gender'];
                        $email = $_POST['email'];
                        $address = $_POST['address'];
                        $telephone = $_POST['telephone'];
                        $id = $_POST['id'];
        
                        update_account($id, $full_name, $gender, $email, $address, $telephone);
                        $getOne_account = getOne_account($id);
                        $_SESSION['account'] = $getOne_account;
                        $message = "Đã cập nhật thành công!";
                    }
                    include 'view/cart/checkout.php';
                    break;
                case 'empty_cart':
                    include 'view/cart/empty_cart.php';
                    break;
            
        // Begin-> Account
        case 'account':
            include "view/account.php";
            break;
            
        case 'register':
            if (isset($_POST['add_account'])) {
                $email = $_POST['email'];
                $username = $_POST['username'];
                $full_name = $username;
                $pass = $_POST['pass'];
                add_account($full_name, $email, $username, $pass); 
                $message = "Đăng ký thành công!";
            }
            include "view/account/register.php";
            break;

        case 'login':
            if (isset($_POST['login'])) {
                $username = $_POST['username'];
                $pass = $_POST['pass'];
                $check_account = check_account($username, $pass);
                if (is_array($check_account)) {
                    if ($check_account['trang_thai'] == 1) {
                        if ($check_account['vai_tro'] == 1) {
                            $_SESSION['account'] = $check_account;
                            echo "<script> window.location.href='./admin/index.php';</script>";
                        } else {
                            echo "<script> window.location.href='index.php?act=home';</script>";
                            $_SESSION['account'] = $check_account;
                            $_SESSION['id_account'] = $check_account['ma_nd'];
                        }
                    } else {
                        $message = "Tài khoản đã bị khóa";
                    }
                } else {
                    $message = "Sai tài khoản hoặc mật khẩu";
                }
            }
            include "view/account/login.php";
            break;

        case 'edit_account':
            if (isset($_POST['update'])) {
                $full_name = $_POST['full_name'];
                $gender = $_POST['gender'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $telephone = $_POST['telephone'];
                $id = $_POST['id'];

                update_account($id, $full_name, $gender, $email, $address, $telephone);
                $getOne_account = getOne_account($id);
                $_SESSION['account'] = $getOne_account;
                $message = "Đã cập nhật thành công!";
            }
            include "view/account/edit_account.php";
            break;

        case 'forgot_pass':
            if(isset($_POST['send_email'])){
                $email = $_POST['email'];
                $check_email = check_email($email);
                if(is_array($check_email)){
                    $message = "Mật khẩu của bạn là: " .$check_email['mat_khau'];
                }else{
                    $message = "Email không tồn tại!";
                }
            }
            include "view/account/forgot_pass.php";
            break;

        case 'logout':
            session_unset();
            echo "<script> window.location.href='index.php?act=login';</script>";
            break;
        
        case 'change_pass':
            if (isset($_POST['update'])) {
                $id = $_POST['id'];
                $pass = $_POST['pass'];
                $newPass = $_POST['newpass'];
                $newRepass = $_POST['newrepass'];
                
                $check_account = check_account("", $pass);
                if ($check_account) {
                    if ($newPass === $newRepass) {
                        $_SESSION['account'] = $check_account;
                        update_password($id, $newPass);
                        $message = '<p class="alert alert-success">Đổi mật khẩu thành công</p>';
                    } else {
                        $message = '<p class="alert alert-danger">Mật khẩu không trùng khớp!</p>';
                    }
                } else {
                    $message = '<p class="alert alert-danger">Mật khẩu không chính xác!</p>';
                }
            }
            include "view/account/edit_account.php";
            break;
        // End-> Account        

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
                if (isset($_SESSION['account'])) {
                    insert_comment($_GET['id_pro'],  $_SESSION['id_account'], $noi_dung);
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
                $one_color_size = load_color_size($_GET['id_pro']);

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
                $product_catalog = getAll_product_catalog();
                $product = getAll_product();
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
