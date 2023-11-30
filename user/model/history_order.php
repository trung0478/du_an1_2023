<?php
    function list_history_order($id_user) {
        $sql = "SELECT giohang.*, donhang.* FROM donhang
        JOIN giohang ON donhang.ma = giohang.ma_dh
        WHERE donhang.ma_nd = $id_user
        ORDER BY giohang.ma_dh DESC";
        $order = pdo_query($sql);
        return $order;
    }

    function count_history_order($id_order){
        $sql = "SELECT * FROM giohang WHERE ma_dh = $id_order";
        $order = pdo_query($sql);
        return sizeof($order);
    }

    function status($n) {
        switch ($n) {
            case 1:
                $status_message = "Chưa xử lý";
                break;
            case 2:
                $status_message = "Đã xác nhận";
                break;
            case 3:
                $status_message = "Đang giao hàng";
                break;
            case 4:
                $status_message = "Đã hoàn thành";
                break;
            
            default:
                $status_message = "Chưa xử lý";
                break;
        }
        return $status_message;
    }

    function del_his_order($id_order) {
        $sql = "DELETE donhang, giohang FROM donhang
        JOIN giohang ON donhang.ma = giohang.ma_dh WHERE donhang.ma = $id_order";
        pdo_execute($sql);
    }

    // function count_id_his() {
    //     $sql = "SELECT ma_dh, COUNT(*) AS count_id
    //     FROM giohang WHERE ma_dh=172";
    //     $count = pdo_query($sql);
    //     return $count;
    // }

?>