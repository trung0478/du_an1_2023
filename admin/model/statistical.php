
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

?>