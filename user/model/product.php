<?php
function load_product($sp_km)
{
    if ($sp_km == 1) {
        $sql = "SELECT sp.*, bt.* FROM sanpham sp JOIN bienthe bt ON sp.ma_sp = bt.ma_sp WHERE bt.gia_km != 0 GROUP BY sp.ten_sp";
    } else {
        $sql = "SELECT sp.*, bt.* FROM sanpham sp JOIN bienthe bt ON sp.ma_sp = bt.ma_sp GROUP BY sp.ten_sp";
    }
    $result = pdo_query($sql);
    return $result;
}

function load_detail_product($id_product)
{
    $sql = "SELECT sanpham.*, bienthe.*  FROM sanpham 
    JOIN bienthe ON sanpham.ma_sp = bienthe.ma_sp 
    WHERE bienthe.ma_sp=$id_product";
    $result = pdo_query_one($sql);

    // update view
    $update_view = $result['luot_xem'] + 1;
    $sql_ = "UPDATE sanpham sp SET sp.luot_xem=$update_view WHERE sp.ma_sp=$id_product";
    pdo_execute($sql_);

    return $result;
}

function load_img_by_idpro($id_product)  {
    $sql = "SELECT sanpham.*, bienthe.*  FROM sanpham 
    JOIN bienthe ON sanpham.ma_sp = bienthe.ma_sp 
    WHERE bienthe.ma_sp=$id_product";
    $result = pdo_query($sql);
    return $result;
}

function load_color_size($id_pro)
{
    $sql = "SELECT DISTINCT kich_co.*, mau_sac.* FROM kich_co
    JOIN bienthe ON bienthe.ma_kich_co = kich_co.ma_kich_co 
    JOIN mau_sac ON mau_sac.ma_mau= bienthe.ma_mau WHERE bienthe.ma_sp = $id_pro";
    $result = pdo_query($sql);
    return $result;
}

function products_in_the_same_catalog($id_pro, $id_catalod){
    $sql="SELECT * FROM sanpham sp JOIN bienthe bt ON bt.ma_sp=sp.ma_sp WHERE sp.ma_lsp = $id_catalod AND sp.ma_sp <> $id_pro";
    $result = pdo_query($sql);
    return $result;
}

function product_most_view(){
    $sql = "SELECT * FROM sanpham sp JOIN bienthe bt ON bt.ma_sp = sp.ma_sp WHERE 1 ORDER BY luot_xem DESC LIMIT 0,10";
    $result = pdo_query($sql);
    return $result;
}
