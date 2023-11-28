<?php
    function getAll_product_catalog(){
        $sql = "SELECT lsp.ma_lsp, COUNT(sp.ma_lsp) AS soluong, lsp.ten_lsp
        FROM loaisanpham lsp
        LEFT JOIN sanpham sp ON sp.ma_lsp = lsp.ma_lsp
        GROUP BY lsp.ma_lsp, lsp.ten_lsp;";
        $result = pdo_query($sql);
        return $result;
    }

    function getAll_product($id,$orderCondition){
        $sql = "SELECT sp.*, bt.* FROM sanpham sp JOIN bienthe bt ON sp.ma_sp = bt.ma_sp WHERE sp.ma_lsp = ".$id." ".$orderCondition." ";
        $result = pdo_query($sql);
        return $result;
    }
    function loadAll_product($item_per_page, $offset, $orderCondition, $kyw) {
        $sql = "SELECT sp.*, bt.* FROM sanpham sp JOIN bienthe bt ON sp.ma_sp = bt.ma_sp WHERE `ten_sp` LIKE '%".$kyw."%' ".$orderCondition." LIMIT ".$item_per_page." OFFSET ".$offset."";
        $result = pdo_query($sql);
        return $result;
    }
   
    function product_Count(){
        $sql = "SELECT COUNT(*) AS total_count FROM sanpham WHERE ma_lsp = ma_lsp";
        $product_count = pdo_query($sql);
        return $product_count;
    }
    function fetchAndSortProductsAZ($kytu) {
        $sql = "SELECT * FROM sanpham ORDER BY ". $kytu." ";
        $result = pdo_query($sql);
        return $result;
    }
 
?>
