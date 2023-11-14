<?php
include '../admin/view/header.php';
?>
   
   <?php
    if (isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];
        switch ($act) {
            // Catalog
            case 'list_catalog':
                include '../admin/view/catalog/list_catalog.php';
                break;
            case 'add_catalog':
                include '../admin/view/catalog/add_catalog.php';
                break;
            case 'update_catalog':
                include '../admin/view/catalog/update_catalog.php';
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
        include '../admin/view/home.php';
    }
    ?>
    
<?php
    include '../admin/view/footer.php';
?>