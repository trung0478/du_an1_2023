<?php
    function get_all_product() {
        $sql = "SELECT * FROM sanpham ORDER BY ma_sp DESC";
        $products = pdo_query($sql);
        return $products;
    }

    function search_product($ten_sp) {
        $sql = "SELECT * FROM sanpham WHERE ten_sp LIKE '%".$ten_sp."%'";
        $search = pdo_query($sql);
        return $search;
    }

    function add_product($ma_lsp, $ten_sp, $gia_sp, $so_luong, $hinh_anh, $ma_km, $mo_ta) {
        $sql = "INSERT INTO sanpham(ma_lsp, ten_sp, gia_sp, so_luong, hinh_anh, ma_km, mo_ta) VALUES ('$ma_lsp', '$ten_sp', '$gia_sp', '$so_luong', '$hinh_anh', '$ma_km', '$mo_ta')";
        pdo_execute($sql);
    }
    function get_all_product_variant() {
        $sql = "SELECT * FROM bienthe ORDER BY ma_bien_the DESC";
        $products = pdo_query($sql);
        return $products;
    }
    function add_product_variant($ma_sp, $mau_sac, $kick_co, $gia_sp, $so_luong, $mo_ta) {
        $sql = "INSERT INTO bienthe (ma_sp, mau_sac, kick_co,gia_sp, so_luong, mo_ta) VALUES ('$ma_sp', '$mau_sac','$kick_co', '$gia_sp', '$so_luong', '$mo_ta')";
        pdo_execute($sql);
    }
?>