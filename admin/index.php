<?php
include '../config/connectdb.php';
include 'model/catalog.php';
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
                    $status_catalog = $_POST['status_catalog'];
                    add_catalog($name_catalog, $status_catalog);
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
                    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
                        $name_catalog = $_POST['name_catalog'];
                        $list_catalog=search_catalog($name_catalog);
                    }
                    include '../admin/view/catalog/list_catalog.php';
                    break;

                // Product
            case 'list_product':
                include '../admin/view/product/list_product.php';
                break;
            case 'add_product':
                include '../admin/view/product/add_product.php';
                break;
            case 'update_product':
                include '../admin/view/product/update_product.php';
                break;

                // User
            case 'list_user':
                include '../admin/view/user/list_user.php';
                break;
            case 'add_user':
                include '../admin/view/user/add_user.php';
                break;
            case 'update_user':
                include '../admin/view/user/update_user.php';
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
                include '../admin/view/comment/list_cmt.php';
                break;
            case 'detail_cmt':
                include '../admin/view/comment/detail_cmt.php';
                break;

                // Order
            case 'list_order':
                include '../admin/view/order/list_order.php';
                break;

                // Discount
            case 'list_sale':
                include '../admin/view/sale/list_sale.php';
                break;
            case 'add_sale':
                include '../admin/view/sale/add_sale.php';
                break;
            case 'update_sale':
                include '../admin/view/sale/update_sale.php';
                break;
        }
    } else {
        include 'view/home.php';
    }
    ?>
    
<?php
include 'view/footer.php';
?>