<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between my-md-2 my-2">
                    <h3 class="fs-1">Danh sách đơn hàng</h3>
                </div>
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Mã đơn hàng</th>
                            <th scope="col">Tên khách hàng</th>
                            <th scope="col">Ngày đặt hàng</th>
                            <th scope="col">Tổng tiền</th>
                            <th scope="col">Số hóa đơn</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">PT thanh toán</th>
                            <th scope="col">Ghi chú</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Thao tác</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            foreach ($list_order as $order) :
                                extract($order);
                                $pttt = get_payment($pttt);
                                $del_order = "?act=delete_order&id=$ma";
                                $confirm_order = "?act=confirm_order&status=$trang_thai&id=$ma";
                                $trang_thai = get_status($trang_thai);
                        ?>
                        <tr>
                            <td class="text-center">
                                <?= $ma ?>
                            </td>
                            <td class="text-center">
                                <?= $ho_ten ?>
                            </td>
                            <td class="text-center">
                                <?= $ngay_dat ?>
                            </td>
                            <td class="text-center">
                                <?= number_format($tong_dh, 0, '.', '.') ?>
                            </td>
                            <td class="text-center">
                                <?= $ma_dh ?>
                            </td>
                            <td class="text-center">
                                <?= $dia_chi ?>
                            </td>
                            <td class="text-center">
                                <?= $pttt ?>
                            </td>
                            <td class="text-center">
                                <?= $ghi_chu ?>
                            </td>
                            <td class="text-center">
                                <?= $trang_thai ?>
                            </td>

                            <td class="text-center">
                                <!-- <a href="?act=update_order" class="btn btn-warning">Sửa</a> -->
                                <a href="<?= $confirm_order ?>" class="btn btn-warning">
                                    Xác nhận
                                </a>
                                <a onclick="return confirm('Bạn có xoá không?')" href="<?= $del_order ?>" class="btn btn-danger">
                                    Xóa
                                </a>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>