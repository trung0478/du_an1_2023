<?php
    function list_order() {
        $sql = "SELECT * FROM donhang ORDER BY ma DESC";
        $order = pdo_query($sql);
        return $order;
    }

    function get_status($n) {
        switch ($n) {
            case '1':
                $status = "Chưa xác nhận";
                break;
            case '2':
                $status = "Đã xác nhận";
                break;
            case '3':
                $status = "Đang giao hàng";
                break;
            case '4':
                $status = "Đã hoàn thành";
                break;
            
            default:
                $status = "Chưa xác nhận";
                break;
        }
        return $status;
    }
    function get_payment($n) {
        switch ($n) {
            case '1':
                $pay = "Khi nhận hàng";
                break;
            case '2':
                $pay = "Thanh toán VNPay";
                break;
            case '3':
                $pay = "Thanh toán Momo";
                break;
            
            default:
                $pay = "Khi nhận hàng";
                break;
        }
        return $pay;
    }
    function confirm_order($n, $id) {
        if ($n == 1) {
            $sql = "UPDATE donhang SET trang_thai = 2 WHERE ma = $id";
        } else if ($n == 2) {
            $sql = "UPDATE donhang SET trang_thai = 3 WHERE ma = $id";
        } else if ($n == 3) {
            $sql = "UPDATE donhang SET trang_thai = 4 WHERE ma = $id";
        }else if ($n == 4) {
            $sql = "UPDATE donhang SET trang_thai = 1 WHERE ma = $id";
        }
        pdo_execute($sql);
    }
    function delete_order($id){
        $sql = "DELETE FROM donhang WHERE ma = $id";
        pdo_execute($sql);
    }
?>