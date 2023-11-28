<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="justify-content-between my-md-2 my-2">
                    <h3 class="fs-1">Thống kê đơn hàng theo thời gian </h3>
                    <h6>Chọn thời gian: </h6>
                    <input type="date" value="<?php echo date('Y-m-d')?>">
                    <input type="week" >
                    <input type="month" >
                    <select >
                        <?php
                        for ($i=2020; $i <= date('Y') ; $i++) { 
                            echo '<option value="">'.$i.'</option>';
                        }
                
                        ?>
                        
                    </select>
                </div>
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 6%;" scope="col">ID Nhân viên</th>
                            <th style="width: 18%;" scope="col">Họ Tên</th>
                            <th style="width: 8%;" scope="col">Ảnh</th>
                            <th style="width: 6%;" scope="col">Giới tính</th>
                            <th style="width: 10%;" scope="col">Ngày sinh</th>
                            <th style="width: 18%;" scope="col">Địa chỉ</th>
                            <th style="width: 10%;" scope="col">Số điện thoại</th>
                            <th style="width: 12%;" scope="col">Chức vụ</th>
                            <th style="width: 12%;" scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                1
                            </td>
                            <td class="text-center">
                                1
                            </td>
                            <td class="text-center">
                                <img width="100%" src="" alt="">
                            </td>
                            <td class="text-center">
                                1
                            </td>
                            <td class="text-center">
                                1
                            </td>
                            <td class="text-center">
                                1
                            </td>
                            <td class="text-center">
                                1
                            </td>
                            <td class="text-center">
                                1
                            </td>
                          
                            
                            <td class="text-center">
                                <a href="?act=update_staff" class="btn btn-warning">Sửa</a>
                                <a onclick="return confirm('Bạn có xoá không?')" href="" class="btn btn-danger">
                                    Xóa
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">
                                1
                            </td>
                            <td class="text-center">
                                1
                            </td>
                            <td class="text-center">
                                <img width="100%" src="assets/images/bg1.png" alt="">
                            </td>
                            <td class="text-center">
                                1
                            </td>
                            <td class="text-center">
                                1
                            </td>
                            <td class="text-center">
                                1
                            </td>
                            <td class="text-center">
                                1
                            </td>
                            <td class="text-center">
                                1
                            </td>
                          
                            
                            <td class="text-center">
                                <a href="?act=update_nv" class="btn btn-warning">Sửa</a>
                                <a onclick="return confirm('Bạn có xoá không?')" href="" class="btn btn-danger">
                                    Xóa
                                </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>