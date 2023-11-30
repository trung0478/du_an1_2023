<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h3>Cập nhật đơn hàng </h3>
                <form method="post" action="?act=update_order" enctype="multipart/form-data">
                    <div class="d-flex justify-content-between mb-15px">
                        <div>
                            <label for="name" class="form-label mt-3">Trạng thái</label>
                            <?php
                                if (isset($get_one_order)) {
                                    extract($get_one_order);
                                }
                            ?>
                            <select class="form-control" name="status" aria-label="Default select example">
                                <option value="1" <?=($get_one_order['trang_thai'] == 1) ? "selected" : ""?>>Đang xử lý</option>
                                <option value="2" <?=($get_one_order['trang_thai'] == 2) ? "selected" : ""?>>Đã xác nhận</option>
                                <option value="3" <?=($get_one_order['trang_thai'] == 3) ? "selected" : ""?>>Đang giao hàng</option>
                                <option value="4" <?=($get_one_order['trang_thai'] == 4) ? "selected" : ""?>>Đã hoàn thành</option>
                            </select>
                        </div>
                    </div>
                    <input type="hidden" name="idorder" value="<?= $get_one_order['ma'] ?>">
                    <br>
                    <button type="submit" name="update" class="btn btn-primary">Lưu thay đổi</button>
                </form>
            </div>
        </div>
    </div>
</div>