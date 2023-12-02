<?php
    function list_his_detail($id_order) {
        $sql = "SELECT giohang.*, donhang.* FROM giohang
        JOIN donhang ON giohang.ma_dh = donhang.ma
        WHERE giohang.ma_dh = $id_order";
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
            case 5:
                $status_message = "Đã hủy đơn";
                break;
            
            default:
                $status_message = "Chưa xử lý";
                break;
        }
        return $status_message;
    }

    function method_pay($n) {
        switch ($n) {
            case '1':
                $pay = "Thanh toán khi nhận";
                break;
            case '2':
                $pay = "Thanh toán VNPay";
                break;
            case '3':
                $pay = "Thanh toán Momo";
                break;
            
            default:
                $pay = "Thanh toán khi nhận";
                break;
        }
        return $pay;
    }

    function list_history_order($id_account) {
        $sql = "SELECT * FROM donhang
        WHERE ma_nd = $id_account
        ORDER BY ma DESC";
        $order = pdo_query($sql);
        return $order;
    }

    function cancel_order($id_order) {
        $sql = "UPDATE donhang SET trang_thai = 5 WHERE ma = $id_order";
        pdo_execute($sql);
    }

    // function count_id_his() {
    //     $sql = "SELECT ma_dh, COUNT(*) AS count_id
    //     FROM giohang WHERE ma_dh=172";
    //     $count = pdo_query($sql);
    //     return $count;
    // }

?>