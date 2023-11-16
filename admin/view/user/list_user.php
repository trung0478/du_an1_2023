<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between my-md-2 my-2">
                    <h3 class="fs-1">Danh sách người dùng</h3>
                    <a href="?act=add_user" class="btn btn-primary my-md-2 my-1">Thêm mới</a>
                </div>
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">STT</th>
                            <th scope="col">Họ Tên</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Email</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Tài khoản</th>
                            <th scope="col">Quyền</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        foreach ($userAll as $user):?>
                        <?php extract($user)?>
                        <tr>
                            <td class="text-center">
                                <?= $ma_nd?>
                            </td>
                            <td class="text-center">
                                <?= $ho_ten?>
                            </td>
                            <td class="text-center">
                            <?= $gioi_tinh?>
                                
                            </td>
                            <td class="text-center">
                            <?= $sdt?>
                                
                            </td>
                            <td class="text-center">
                            <?= $email?>
                                
                            </td>
                            <td class="text-center">
                            <?= $dia_chi?>
                                
                            </td>
                            <td class="text-center">
                            <?= $tai_khoan?>
                                
                            </td>
                            <td class="text-center">
                            <?= $ma_quyen?>
                                
                            </td>
                            <td class="text-center">
                            <?= $trang_thai?>
                                
                            </td>
                            
                            <td class="text-center">
                                <a href="?act=open_acount&id=<?=$ma_nd?>" class="btn btn-warning">Mở Khóa</a>
                                <a onclick="return confirm('Bạn có Khóa tài khoản này không?')" href="?act=look_acount&id=<?=$ma_nd?>" class="btn btn-danger">
                                    Khóa TK
                                </a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>