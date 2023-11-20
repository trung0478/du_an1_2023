<?php
    ob_start();
    session_start();
    include "model/connectdb.php";
    include "model/product_catalog.php";
    include "model/product.php";
    include "view/header.php";
    
    if(!isset($_SESSION['mycart'])) $_SESSION['mycart'] = [];
    $list_product = load_product();
    if(isset($_GET['act'])) {
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
            // Gio hang
            case 'addtocart':
                if(isset($_POST['addtocart'])){
                    $ma_sp = $_POST['ma_sp'];
                    $ten_sp = $_POST['ten_sp'];
                    $hinh_anh = $_POST['hinh_anh'];
                    $gia_sp = $_POST['gia_sp'];
                    $so_luong = $_POST['so_luong'];
                    $ten_mau = $_POST['ten_mau'];
                    $ten_kich_co = $_POST['ten_kich_co'];
                    $thanhtien = $so_luong * $gia_sp;
                    $product_array = [$ma_sp, $ten_sp, $hinh_anh, $gia_sp, $so_luong, $ten_mau, $ten_kich_co, $thanhtien];

                    array_push( $_SESSION['mycart'], $product_array);
                   
                }
                include "view/cart/cart.php";
                break;
                case 'del_cart':
                    if(isset($_GET['idcart'])){
                        array_splice($_SESSION['mycart'], $_GET['idcart'], 1);
                    }else{
                        $_SESSION['mycart'] = [];
                    }
                    header('location: index.php?act=viewcart');
                    // header('Location: index.php?act=viewcart');
                    break;
                case 'viewcart':
                    include 'view/cart/cart.php';
                    break;
                case 'cart_pay':
                    include 'view/cart/checkout.php';
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
                include "view/product_detail.php";
                break;

            case 'product_catalog':
                $product_catalog = getAll_product_catalog();
                $product = getAll_product();
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
?>