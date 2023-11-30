<!-- Cart Area Start -->
<div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Lịch sử mua hàng chi tiết</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Người nhận</th>
                                        <th>Mã hóa đơn</th>
                                        <th>Ngày đặt</th>
                                        <th>Tổng đơn</th>
                                        <th>Địa chỉ</th>
                                        <th>PT thanh toán</th>
                                        <th>Tình trạng</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <?php
                                        if (isset($list_his_detail)) {
                                            foreach ($list_his_detail as $order) :
                                                extract($order);
                                                $payment = method_pay($pttt);
                                                $status = status($trang_thai);
                                    ?>
                                        
                                    <tr>
                                        <td><?=$ho_ten?></td>
                                        <td><?=$ma_dh?></td>
                                        <td><?=$ngay_dat?></td>
                                        <td><?=number_format($tong_dh, 0, '.', '.')?> đ</td>
                                        <td><?=$dia_chi .'</br>' .$sdt.'</br>' .$email?></td>
                                        <td><?=$payment?></td>
                                        <td><?=$status?></td>
                                    </tr>
                                    
                                    <?php endforeach; }?>
                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="index.php?act=home">Tiếp tục mua sắm</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Area End -->