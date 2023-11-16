<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="d-flex justify-content-between my-md-2 my-2">
                    <h3 class="fs-1">Danh sách sản phẩm</h3>
                    <a href="index.php?act=add_product" class="btn btn-primary my-md-2 my-1">Thêm mới</a>
                </div>
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="">Mã sản phẩm</th>
                            <th scope="col">Tên</th>
                            <th scope="col">Ảnh</th>
                            <th scope="col">Giá</th>
                            <th scope="col">Số lượng</th>
                            <th scope="col">Khuyến mãi</th>
                            <th scope="col">Mô tả</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                            <?php
                                foreach ($list_product as $product) {
                                    extract($product);
                                    $edit_product = "index.php?act=edit_product&id=$ma_sp";
                                    $del_product = "index.php?act=del_product&id=$ma_sp";
                                    $add_atribute = "index.php?act=add_atribute&id=$ma_sp";
                                    $hinhpath = "../upload/".$hinh_anh;
                                    if(is_file($hinhpath)){
                                        $hinh= "<img src='".$hinhpath."' height='80'>";
                                    }else{
                                        $hinh = "Khoong co";
                                    }
                                    echo '<tr>
                                            <td class="text-center">'.$ma_sp.'</td>
                                            <td class="text-center">'.$ten_sp.'</td>
                                            <td class="text-center">'.$hinh.'</td>
                                            <td class="text-center">'.$gia_sp.'</td>
                                            <td class="text-center">'.$so_luong.'</td>
                                            <td class="text-center">'.$ma_km.'</td>
                                            <td class="text-center">'.$mo_ta.'</td>
                                            <td class="text-center">'.$trang_thai.'</td>
                                            <td class="text-center">
                                                <a href="'.$add_atribute.'" class="btn btn-warning">Thêm thuộc tính</a>
                                                <a href="'.$edit_product.'" class="btn btn-warning">Sửa</a>
                                                <a onclick="return confirm(\'Bạn có xoá không?\')" href="'.$del_product.'" class="btn btn-danger">Xóa</a>
                                            </td>
                                        </tr>';
                                }
                            ?>
                            
                            
                            
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>