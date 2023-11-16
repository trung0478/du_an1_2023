<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between my-md-2 my-2">
                    <h3 class="fs-1">Danh sách Thuộc tính</h3>
                    <a href="?act=add_atribute" class="btn btn-primary my-md-2 my-1">Thêm mới</a>
                </div>
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th  scope="col">Mã sản phẩm</th>
                            <th  scope="col">Màu sắc</th>
                            <th  scope="col">Kích thước</th>
                            <th  scope="col">Giá sản phẩm</th>
                            <th  scope="col">Số lượng</th>
                            <th  scope="col">Mô tả</th>
                            <th  scope="col">Trang thai</th>
                            <th  scope="col">Chức năng</th>
                        
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($product_variant as $variant):?>
                        <?php extract($variant);?>
                        <tr>
                            <td class="text-center">
                                <?=$ma_sp?>
                            </td>
                            <td class="text-center">
                            <?=$mau_sac?>
                                
                            </td>
                            <td class="text-center">
                            <?=$kick_co?>
                                
                            </td>
                            <td class="text-center">
                            <?=$gia_sp?>
                                
                            </td>
                            <td class="text-center">
                            <?=$so_luong?>
                                
                            </td>
                            <td class="text-center">
                            <?=$mo_ta?>
                                
                            </td>
                            <td class="text-center">
                            <?=$trang_thai?>
                                
                            </td>
                       
                            
                            <td class="text-center">
                                <a href="?act=update_atribute" class="btn btn-warning">Sửa</a>
                                <a onclick="return confirm('Bạn có xoá không?')" href="" class="btn btn-danger">
                                    Xóa
                                </a>
                            </td>
                        </tr>
                        <?php endforeach?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>