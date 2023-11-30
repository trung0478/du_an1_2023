<?php
    function list_order() {
        $sql = "SELECT * FROM donhang ORDER BY ma DESC";
        $order = pdo_query($sql);
        return $order;
    }

    function get_status($n) {
        switch ($n) {
            case '1':
                $status = "Chưa xử lý";
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
                $status = "Chưa xử lý";
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
    function get_one_order($id_order) {
        $sql = "SELECT * FROM donhang WHERE ma = ?";
        $order = pdo_query_one($sql, $id_order);
        return $order;
    }
    function delete_order($id){
        $sql = "DELETE FROM donhang WHERE ma = $id";
        pdo_execute($sql);
    }
    function update_order($id_order, $status) {
        $sql = "UPDATE donhang SET trang_thai = '".$status."' WHERE ma = $id_order";
        pdo_execute($sql);
    }
?>