<?php
    function getAll_product_catalog(){
        $sql = "SELECT ma_lsp, COUNT(*) AS soluong, ten_lsp FROM loaisanpham GROUP BY ma_lsp ORDER BY ma_lsp DESC";
        $result = pdo_query($sql);
        return $result;
    }

    function getAll_product(){
        $sql = "SELECT s.ma_sp, s.ten_sp, b.gia_sp, b.gia_km, b.hinh_anh, b.so_luong, b.trang_thai, m.ten_mau, k.ten_kich_co, b.ma_bien_the
        FROM sanpham s
        JOIN bienthe b ON s.ma_sp = b.ma_sp
        JOIN mau_sac m ON b.ma_mau = m.ma_mau
        JOIN kich_co k ON b.ma_kich_co = k.ma_kich_co";
        $result = pdo_query($sql);
        return $result;
    }
?>
