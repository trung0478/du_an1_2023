<?php
include 'view/header.php';
?>
   
   <?php
    if (isset($_GET['act']) && $_GET['act'] != "") {
        $act = $_GET['act'];
        switch ($act) {
            // Catalog
            case 'list_catalog':
                include 'view/catalog/list_catalog.php';
                break;
            case 'add_catalog':
                include 'view/catalog/add_catalog.php';
                break;
            case 'update_catalog':
                include 'view/catalog/update_catalog.php';
                break;

            // Product
            case 'list_product':
                include 'view/product/list_product.php';
                break;
            case 'add_product':
                include 'view/product/add_product.php';
                break;
            case 'update_product':
                include 'view/product/update_product.php';
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