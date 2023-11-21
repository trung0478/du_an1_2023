<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h3>Cập nhật tài khoản </h3>
                <form method="post" action="?act=update_account" enctype="multipart/form-data">
                        <div class="d-flex justify-content-between">
                            <div>
                                <label for="name" class="form-label mt-3">Vai trò</label>
                                <select class="form-control" name="role" aria-label="Default select example">
                                    <option value="0">Lựa chọn</option>
                                    <?php
                                        if (isset($getone_account)) {
                                            extract($getone_account);
                                        }
                                    ?>
                                   <option value="1" <?=($getone_account['vai_tro'] == 1) ? "selected" : ""?>>Admin</option>
                                   <option value="0" <?=($getone_account['vai_tro'] == 0) ? "selected" : ""?>>Người dùng</option>
                                </select>
                            </div>
                        </div>
                        <input type="hidden" name="id_user" value="<?=$ma_nd?>">
                        <div class="d-flex justify-content-between">
                            <div>
                                <label for="name" class="form-label mt-3">Trạng thái</label>
                                <select class="form-control" name="status" aria-label="Default select example">
                                    <option value="1" <?=($getone_account['trang_thai'] == 1) ? "selected" : ""?>>Kích hoạt</option>
                                    <option value="0" <?=($getone_account['trang_thai'] == 0) ? "selected" : ""?>>Khóa</option>
                                </select>
                            </div>
                        </div>

                        <br>
                        <button type="submit" name="update" class="btn btn-primary">Lưu thay đổi</button>
                </form>
            </div>
        </div>
    </div>
</div>