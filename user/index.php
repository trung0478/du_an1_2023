<?php
    session_start();
    include 'config/connectdb.php';
    include 'global/global.php';
    include "model/account.php";
    include "view/header.php";
    
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

            case 'cart':
                include "view/cart.php";
                break;

            case 'checkout':
                include "view/checkout.php";
                break;

            case 'contact':
                include "view/contact.php";
                break;
            
            // Begin-> Account
            case 'account':
                include "view/account.php";
                break;

            case 'register':
                if (isset($_POST['add_account'])) {
                    $email = $_POST['email'];
                    $username = $_POST['username'];
                    $pass = $_POST['pass'];
                    add_account($email, $username, $pass); 
                    echo "<script> window.location.href='index.php?act=login';</script>";
                    
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
                    $repass = $_POST['repass'];
                    $newpass = $_POST['newpass'];
                    
                    $check_account = check_account("", $pass);
                    if (is_array($check_account)) {
                        if ($pass === $repass) {
                            $_SESSION['account'] = $check_account;
                            update_password($id, $newpass);
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


            case 'product_detail':
                include "view/product_detail.php";
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
?>