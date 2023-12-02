
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


// function statistical_sale($start_date, $end_date, $choose_time){
//     $sql = "SELECT 
//         YEAR(CAST(dh.ngay_dat AS DATE)) AS nam,
//         MONTH(CAST(dh.ngay_dat AS DATE)) AS thang, 
//         WEEK(CAST(dh.ngay_dat AS DATE)) AS tuan, 
//         DATE(CAST(dh.ngay_dat AS DATE)) AS ngay,
//         COUNT(DISTINCT dh.ma_dh) AS so_luong_don_hang, 
//         SUM(gh.so_luong) AS so_luong_ban_ra, 
//         SUM(dh.tong_dh) AS doanh_thu 
//     FROM donhang dh 
//     JOIN giohang gh ON dh.ma = gh.ma_dh 
//     WHERE CAST(dh.ngay_dat AS DATE) BETWEEN '".$start_date."' AND '".$end_date."'
//     GROUP BY ngay, tuan, thang,nam";

//     $statistical_sale = pdo_query($sql);
//     return $statistical_sale;
// }
function statistical_sale($date_start = 0,$end_date = 0,$choose_time='date'){
    $sql="WITH RECURSIVE dates AS (
      SELECT DATE('$date_start') AS date
      UNION ALL
      SELECT DATE_ADD(date, INTERVAL 1 DAY)
      FROM dates
      WHERE DATE_ADD(date, INTERVAL 1 DAY) <= '$end_date'
    )
    ";
    $sql.=" SELECT ".($choose_time == 'MONTH' ? "DATE_FORMAT(dates.date, '%Y-%m')" : "$choose_time(dates.date)")." AS date, COUNT(DISTINCT donhang.ma) AS so_luong_don_hang, SUM(giohang.so_luong) AS so_luong_ban_ra, SUM((donhang.tong_dh)) AS doanh_thu
    FROM dates
    LEFT JOIN donhang ON DATE(donhang.ngay_dat) = DATE(dates.date) and donhang.trang_thai = 4
    LEFT JOIN giohang ON giohang.ma_dh=donhang.ma
    GROUP BY $choose_time(dates.date)";
    $statistical_sale = pdo_query($sql);
    return $statistical_sale;
}



?>