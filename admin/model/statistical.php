
<?php
function statistical_category(){
    $sql = "SELECT dm.ma_lsp, dm.ten_lsp, MAX(bt.mo_ta) AS mo_ta, 
    COUNT(DISTINCT sp.ma_sp) AS so_luong, 
    MIN(bt.gia_sp) AS gia_min, 
    MAX(bt.gia_sp) AS gia_max, 
    AVG(bt.gia_sp) AS gia_avg
    FROM loaisanpham dm
    JOIN sanpham sp ON dm.ma_lsp = sp.ma_lsp
    JOIN bienthe bt ON sp.ma_sp = bt.ma_sp
    GROUP BY dm.ma_lsp, dm.ten_lsp
    ORDER BY so_luong DESC";
    $result = pdo_query($sql);
    return $result;
}
function statistical_Popular(){
    $sql = "SELECT sp.ten_sp, SUM(gh.so_luong) AS so_luong_ban FROM giohang gh 
    JOIN sanpham sp ON gh.ma_sp = sp.ma_sp 
    GROUP BY sp.ten_sp ORDER BY so_luong_ban DESC LIMIT 3";
    $result = pdo_query($sql);
    return $result;
}
function statistical_product_seling(){
    $sql = "SELECT sp.ma_sp, sp.ten_sp, 
    MAX(dh.ma) AS ma_don_hang, 
    COUNT(dh.ma) AS so_lan_ban, 
    SUM(gh.so_luong) AS so_luong_ban, 
    SUM(dh.tong_dh) AS thanh_tien 
    FROM sanpham sp 
    JOIN giohang gh ON sp.ma_sp = gh.ma_sp 
    JOIN donhang dh ON dh.ma = gh.ma_dh 
    GROUP BY sp.ma_sp, sp.ten_sp
    ORDER BY so_luong_ban DESC";
    $result = pdo_query($sql);
    return $result;
}
function statistical_sale(){
    //$formattedDay = date('Y-m-d', strtotime($day));
    $sql = "SELECT DATE(dh.ngay_dat) AS ngay, WEEK(dh.ngay_dat) 
    AS tuan, MONTH(dh.ngay_dat) 
    AS thang, COUNT(DISTINCT dh.ma_dh) 
    AS so_luong_don_hang, SUM(gh.so_luong) 
    AS so_luong_ban_ra, SUM(dh.tong_dh) AS doanh_thu FROM donhang dh 
    JOIN giohang gh ON dh.ma = gh.ma_dh WHERE dh.ngay_dat >= '2023-11-01' AND dh.ngay_dat <= CURDATE() GROUP BY ngay, tuan, thang;
    ";
    
    $statistical_sale = pdo_query($sql);
    return $statistical_sale;
}


?>