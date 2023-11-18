<?php
include '../config/connectdb.php';
include 'model/catalog.php';
include 'model/comment.php';
include 'model/user.php';
include 'model/product.php';
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
                $list_product = get_all_product();
                include 'view/product/list_product.php';
                break;
            case 'search_product':
                if (isset($_POST['btn_search']) && $_POST['btn_search']) {
                    $keyword = $_POST['keyword'];
                    $list_product = search_product($keyword);
                }
                include 'view/product/list_product.php';
                break;
            case 'add_product':
                if (isset($_POST['add_new'])) {
                    $ma_lsp = $_POST['id_catalog'];
                    $ten_sp = $_POST['name'];
                    $gia_sp = $_POST['price'];
                    $so_luong = $_POST['quantity'];
                    $ma_km = $_POST['sale'];
                    $mo_ta = $_POST['desc'];
                    $hinh_anh = $_FILES['image']['name'];
                    $target_dir = "../upload/" .basename($hinh_anh);
                    move_uploaded_file($_FILES['image']['tmp_name'], $target_dir);
                    
                    add_product($ma_lsp, $ten_sp, $gia_sp, $so_luong, $hinh_anh, $ma_km, $mo_ta);
                    $message = "Thêm thành công!";
                    echo "<script> window.location.href='index.php?act=list_product';</script>";
                }
                $list_catalog = list_catalog();
                include 'view/product/add_product.php';
                break;
            
            

                // User
            case 'list_user':
                $userAll = loadAll_user();
                include '../admin/view/user/list_user.php';
                break;
            case 'add_user':
                if (isset($_POST['add_user'])) {
                    $name = $_POST['name'];
                    $gender = $_POST['gender'];
                    $phone = $_POST['phone'];
                    $email = $_POST['email'];
                    $address = $_POST['address'];
                    $name_acount = $_POST['name_acount'];
                    $password = $_POST['password'];
                    $permission = $_POST['permission'];
                    $status = $_POST['status'];
                    insert_User($name, $gender, $phone, $email, $address, $name_acount, $permission, $status);

                    $thongbao = "Thêm thành công";
                    
                }

                include '../admin/view/user/add_user.php';
                break;
            case 'look_acount':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $id = $_GET['id'];
                    look_Acout($id);
                }
                $userAll = loadAll_user($id);
                include '../admin/view/user/list_user.php';
                break;
            case 'open_acount':
                if(isset($_GET['id']) && ($_GET['id'] > 0)){
                    $id = $_GET['id'];
                    open_acount($id);

                }
                $userAll = loadAll_user($id);
                include '../admin/view/user/list_user.php';
                break;

            // Comment
            case 'list_cmt':
                $list_cmt = list_comment();
                include '../admin/view/comment/list_cmt.php';
                break;
            case 'detail_cmt':
                if(($_GET['id_cmt']) && ($_GET['id_cmt']>0)){
                    $id = $_GET['id_cmt'];
                    $list_cmt_detail = loadAll_comment($id);
                }
                include '../admin/view/comment/detail_cmt.php';
                break;
            case 'delete_cmt':
                if(($_GET['id_cmt']) && ($_GET['id_cmt']>0)){
                    $id = $_GET['id_cmt'];
                    delete_commet($id);
                }
                $list_cmt_detail = loadAll_comment($id);
                include '../admin/view/comment/detail_cmt.php';
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