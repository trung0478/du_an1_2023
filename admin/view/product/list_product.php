<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between my-md-2 my-2">
                    <h3 class="fs-1">Danh sách sản phẩm</h3>
                        <div class="row my-2">
                            <div class="col-md-20">
                                <form method="POST" action="index.php?act=search_product" style="display: inline-block;">
                                <input type="text" name="keyword" class="form-control" placeholder="Tìm kiếm sản phẩm" />
                            </div>
                            <input class="btn btn-primary my-md-0 my-1" style="height: 38px; margin-left: 10px" name="btn_search" type="submit" value="Tìm kiếm">
                        </div>
                        </form>
                    <a href="index.php?act=atribute" class="btn btn-primary my-md-2 my-1">Thuộc tính sản phẩm</a>
                    <a href="index.php?act=add_product" class="btn btn-primary my-md-2 my-1">Thêm mới</a>
                </div>
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">Mã sản phẩm</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Khuyến mãi</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                if (!isset($list_product) || $list_product == null) {
                                    echo '<tr>
                                            <td class="text-danger" colspan=8>Không tìm thấy sản phẩm!</td>
                                        </tr>';
                                } else {
                                foreach ($list_product as $product) {
                                    extract($product);
                                    $edit_product = "index.php?act=edit_product&id=$ma_sp";
                                    $del_product = "index.php?act=del_product&id=$ma_sp";
                                    $target_file = "../upload/" .$hinh_anh;
                                    if (is_file($target_file)) {
                                        $img = '<img src="'.$target_file.'" alt="No photo" height="50">';
                                    } else {
                                        $img = "No photo";
                                    }
                                    $status = ($trang_thai == 1) ? "Còn hàng" : "Hết hàng";
                                    echo '<tr>
                                            <td class="text-center">'.$ma_sp.'</td>
                                            <td class="text-center">'.$ten_sp.'</td>
                                            <td class="text-center">'.$img.'</td>
                                            <td class="text-center">'.$gia_sp.'</td>
                                            <td class="text-center">'.$so_luong.'</td>
                                            <td class="text-center">'.$ma_km.'</td>
                                            <td class="text-center">'.$status.'</td>
                                            <td class="text-center">
                                                <a href="'.$edit_product.'" class="btn btn-warning">Sửa</a>
                                                <a onclick="return confirm(\'Bạn có xoá không?\')" href="'.$del_product.'" class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>';
                                }
                            }
                            ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>