<!-- Cart Area Start -->
<div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Lịch sử mua hàng</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Sản phẩm</th>
                                        <th>Kích cỡ, Màu sắc</th>
                                        <th>Số lượng</th>
                                        <th>Đơn giá</th>
                                        <th>Mã hóa đơn</th>
                                        <th>Tình trạng</th>
                                        <th>Hoạt động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                
                                    <?php
                                        if (isset($list_his_order)) {
                                            foreach ($list_his_order as $history) :
                                                extract($history);
                                                $image = $link_img .$hinh_anh;
                                                $status = status($trang_thai);
                                    ?>
                                        
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img class="img-responsive ml-15px" src="<?= $image ?>" alt="" /></a>
                                        </td>
                                        <td><?php echo $mau_sac .', ' .$kich_co?></td>
                                        <td class="product-name"><a href="#"><?= $so_luong ?></a></td>
                                        <td><?=number_format($don_gia, 0, '.', '.')?> đ</td>
                                        <td><?=$ma_dh?></td>
                                        <td><?=$status?></td>
                                       
                                        <td class="product-remove">
                                            <a href="index.php?act=del_his_order&id_order=<?= $ma ?>"><i class="icon-close"></i></a>
                                        </td>
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