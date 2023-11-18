<?php
session_start();
include '../config/connectdb.php';
include 'model/catalog.php';
include "model/product.php";
include 'view/header.php';
?>
   <?php
    if (isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];
        switch ($act) {
                // Catalog
            case 'list_catalog':
                $list_catalog = list_catalog();
                include '../admin/view/catalog/list_catalog.php';
                break;
            case 'add_catalog':
                if (isset($_POST['add_catalog'])) {
                    $name_catalog = $_POST['name_catalog'];
                    add_catalog($name_catalog);
                    echo "<script> window.location.href='index.php?act=list_catalog';</script>";
                }
                include '../admin/view/catalog/add_catalog.php';
                break;
            case 'update_catalog':
                if (isset($_GET['id_catalog'])) {
                    $catalog = getone_catalog($_GET['id_catalog']);
                }

                if (isset($_POST['update_catalog'])) {
                    $id_catalog = $_POST['id_catalod'];
                    $name_catalog = $_POST['name_catalog'];
                    $status_catalog = $_POST['status_catalog'];
                    update_catalog($id_catalog, $name_catalog, $status_catalog);
                    echo "<script> window.location.href='index.php?act=list_catalog';</script>";
                }
                include '../admin/view/catalog/update_catalog.php';
                break;
            case 'delete_catalog':
                if (isset($_GET['id_catalog'])) {
                    delete_catalog($_GET['id_catalog']);
                    echo "<script> window.location.href='index.php?act=list_catalog';</script>";
                }
                break;

            case 'search_catalog':
                if ($_SERVER['REQUEST_METHOD'] === 'POST') {
                    $name_catalog = $_POST['name_catalog'];
                    $list_catalog = search_catalog($name_catalog);
                }
                include '../admin/view/catalog/list_catalog.php';
                break;

                // Product
            case 'list_product':
                if (isset($_POST['btn_search']) && $_POST['btn_search']) {
                    $keyword = $_POST['keyword'];
                } else {
                    $keyword = "";
                }
                $list_product = get_all_product($keyword);
                include 'view/product/list_product.php';
                break;
            case 'list_atribute':
                if (isset($_POST['btn_search']) && $_POST['btn_search']) {
                    $keyword = $_POST['keyword'];
                } else {
                    $keyword = "";
                }
                
                $list_product = get_product();
                include 'view/product/list_atribute.php';
                break;
            
            case 'add_product':
                if (isset($_POST['add_new'])) {
                    $ma_lsp = $_POST['id_catalog'];
                    $ten_sp = $_POST['name'];
                    
                    add_product($ma_lsp, $ten_sp);
                    $message = "Thêm thành công!";
                    echo "<script> window.location.href='index.php?act=list_atribute';</script>";
                }
                $list_catalog = list_catalog();
                include 'view/product/add_product.php';
                break;
            case 'add_atribute':
                $product_one = getone_product($_GET['id']);
                if (isset($_POST['add_variant'])) {
                        $ma_sp = $_POST['ma_sp'];
                        $product = getone_product($ma_sp);
                        $ma_mau = $_POST['ma_mau'];
                        $ma_kich_co = $_POST['ma_kich_co'];
                        $gia_sp = $_POST['gia_sp'];
                        $gia_km = $_POST['gia_km'];
                        $so_luong = $_POST['so_luong'];
                        $mo_ta = $_POST['mo_ta'];
                        $hinh_anh = $_FILES['hinh_anh']['name'];

                        $check_variant = check_query($ma_sp, $ma_mau, $ma_kich_co);
                        if ($check_variant) {
                            $message = "Thuộc tính sản phẩm đã tồn tại!"; 
                        } else {
                            $file_name = "../upload/" .time() .basename($hinh_anh);
                            move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $file_name);
                            add_atribute($ma_sp, $ma_mau, $ma_kich_co, $gia_sp, $gia_km, $file_name, $so_luong, $mo_ta);
                            echo "<script> window.location.href='index.php?act=list_product';</script>";
                        }
                }
                $list_product = get_product();
                $list_color = get_all_color();
                $list_size = get_all_size();
                include 'view/product/add_atribute.php';
                break;
            case 'del_atribute':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    del_atribute($_GET['id']);
                }
                $list_product = get_all_product();
                include 'view/product/list_product.php';
                break;
            case 'edit_atribute':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $atribute_one = getone_atribute($_GET['id']);
                }
                // $list_product = get_all_product($keyword);
                $list_color = get_all_color();
                $list_size = get_all_size();
                include 'view/product/update_atribute.php';
                break;
            case 'edit_product':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    $product_one = getone_product($_GET['id']);
                }
                $list_catalog = list_catalog();
                include 'view/product/update_product.php';
                break;
            case 'update_atribute':
                if (isset($_POST['update_atribute'])) {
                    $ma_bien_the = $_POST['ma_bien_the'];
                    $ma_mau = $_POST['ma_mau'];
                    $ma_kich_co = $_POST['ma_kich_co'];
                    $gia_sp = $_POST['gia_sp'];
                    $gia_km = $_POST['gia_km'];
                    $so_luong = $_POST['so_luong'];
                    $mo_ta = $_POST['mo_ta'];

                    $hinh_anh = $_FILES['hinh_anh']['name'];
                    $file_name = "../upload/" .time() .basename($hinh_anh);
                    move_uploaded_file($_FILES['hinh_anh']['tmp_name'], $file_name);

                    update_atribute($ma_bien_the, $ma_mau, $ma_kich_co, $gia_sp, $gia_km, $so_luong, $mo_ta, $file_name, $hinh_anh);
                }
                echo "<script> window.location.href='index.php?act=list_product';</script>";
                include 'view/product/update_atribute.php';
                break;
            case 'update_product':
                if (isset($_POST['update'])) {
                    $ma_sp = $_POST['id'];
                    $ma_lsp = $_POST['id_catalog'];
                    $ten_sp = $_POST['name'];

                    update_product($ma_sp, $ma_lsp, $ten_sp);
                }
                echo "<script> window.location.href='index.php?act=list_atribute';</script>";
                include 'view/product/update_product.php';
                break;
            case 'del_product':
                if (isset($_GET['id']) && $_GET['id'] > 0) {
                    del_product($_GET['id']);
                }
                $list_product = get_product();
                include 'view/product/list_atribute.php';
                break;
            

                // User
            case 'list_user':
                include 'view/user/list_user.php';
                break;
            case 'add_user':
                include 'view/user/add_user.php';
                break;
            case 'update_user':
                include 'view/user/update_user.php';
                break;

                // Staff
            case 'list_staff':
                include '../admin/view/staff/list_staff.php';
                break;
            case 'add_staff':
                include '../admin/view/staff/add_staff.php';
                break;
            case 'update_staff':
                include '../admin/view/staff/update_staff.php';
                break;

                // Comment
            case 'list_cmt':
                include 'view/comment/list_cmt.php';
                break;
            case 'detail_cmt':
                include 'view/comment/detail_cmt.php';
                break;

                // Order
            case 'list_order':
                include 'view/order/list_order.php';
                break;

                // Discount
            case 'list_sale':
                include 'view/sale/list_sale.php';
                break;
            case 'add_sale':
                include 'view/sale/add_sale.php';
                break;
            case 'update_sale':
                include 'view/sale/update_sale.php';
                break;
        }
    } else {
        include 'view/home.php';
    }
    ?>
    
<?php
include 'view/footer.php';
?>