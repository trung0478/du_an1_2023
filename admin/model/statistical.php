
<?php
function statistical_category(){
    $sql = "SELECT dm.ma_lsp, dm.ten_lsp,bt.mo_ta, COUNT(bt.ma_sp) AS so_luong, MIN(bt.gia_sp) AS gia_min, MAX(bt.gia_sp) AS gia_max, AVG(bt.gia_sp) AS gia_avg FROM loaisanpham dm JOIN sanpham sp ON dm.ma_lsp = sp.ma_lsp JOIN bienthe bt ON sp.ma_sp = bt.ma_sp GROUP BY dm.ma_lsp, dm.ten_lsp,bt.mo_ta ORDER BY so_luong DESC;";
    $result = pdo_query($sql);
    return $result;
}
function statistical_product_seling(){
    $sql = "SELECT sp.ma_sp, sp.ten_sp, COUNT(dh.ma_dh) AS so_lan_ban, SUM(dhct.so_luong) AS so_luong_ban ,SUM(dh.tong_dh) AS thanh_tien FROM sanpham sp JOIN chitietdonhang dhct ON sp.ma_sp = dhct.ma_sp JOIN donhang dh ON dh.ma_dh = dhct.ma_dh GROUP BY sp.ma_sp, sp.ten_sp ORDER BY so_luong_ban DESC;";
    $result = pdo_query($sql);
    return $result;
}

?>