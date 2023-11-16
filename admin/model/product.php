<?php
    function get_all_product() {
        $sql = "SELECT * FROM sanpham ORDER BY ma_sp DESC";
        $products = pdo_query($sql);
        return $products;
    }

    function search_product($keyword) {
        $sql = "SELECT * FROM sanpham WHERE ten_sp LIKE '%".$keyword."%' ORDER BY ma_sp DESC";
        $search = pdo_query($sql);
        return $search;
    }

    function add_product($ma_lsp, $ten_sp, $gia_sp, $so_luong, $hinh_anh, $ma_km, $mo_ta) {
        $sql = "INSERT INTO sanpham(ma_lsp, ten_sp, gia_sp, so_luong, hinh_anh, ma_km, mo_ta) VALUES(?, ?, ?, ?, ?, ?, ?)";
        pdo_execute($sql, $ma_lsp, $ten_sp, $gia_sp, $so_luong, $hinh_anh, $ma_km, $mo_ta);
    }

    function del_product($ma_sp) {
        $sql = "DELETE FROM sanpham WHERE ma_sp = $ma_sp";
        pdo_query($sql);
    }

    function getone_product($ma_sp) {
        $sql = "SELECT * FROM sanpham WHERE ma_sp = ?";
        $product = pdo_query_one($sql, $ma_sp);
        return $product;
    }

    function update_product($ma_sp, $ma_lsp, $ten_sp, $gia_sp, $so_luong, $ma_km, $mo_ta ,$hinh_anh) {
        if ($hinh_anh != "") {
            $sql = "UPDATE sanpham SET ma_sp = '".$ma_sp."', ma_lsp = '".$ma_lsp."', ten_sp = '".$ten_sp."', gia_sp = '".$gia_sp."', so_luong = '".$so_luong."', ma_km = '".$ma_km."', mo_ta = '".$mo_ta."', hinh_anh = '".$hinh_anh."' WHERE ma_sp = ?";
        } else {
            $sql = "UPDATE sanpham SET ma_sp = '".$ma_sp."', ma_lsp = '".$ma_lsp."', ten_sp = '".$ten_sp."', gia_sp = '".$gia_sp."', so_luong = '".$so_luong."', ma_km = '".$ma_km."', mo_ta = '".$mo_ta."' WHERE ma_sp = ?";
        }
        pdo_execute($sql, $ma_sp);
    }
?>