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

    function list_his_detail($id_order) {
        $sql = "SELECT * FROM donhang
        WHERE ma = $id_order";
        $order = pdo_query($sql);
        return $order;
    }

    // function count_id_his() {
    //     $sql = "SELECT ma_dh, COUNT(*) AS count_id
    //     FROM giohang WHERE ma_dh=172";
    //     $count = pdo_query($sql);
    //     return $count;
    // }

?>