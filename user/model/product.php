<?php
function load_product()
{
    $sql = "select * from sanpham where 1 order by ma_sp desc limit 0,9";
    $result = pdo_query($sql);
    return $result;
}

function load_detail_product($id_product)
{
    $sql = "select * from sanpham where ma_sp=$id_product";
    $result = pdo_query_one($sql);
    $update_view = $result['luot_xem'];
    $sql_ = "update sanpham set luot_xem=$update_view where ma_sp=$id_product";
    pdo_execute($sql_);
    return $result;
}
