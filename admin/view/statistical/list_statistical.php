<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <div class="d-flex justify-content-between my-md-2 my-2 ">
                    <h3 class="fs-1">Thống kê sản phẩm bán chạy </h3>
                    
    
                </div>
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 10%;" scope="col">Mã sản phẩm</th>
                            <th style="width: 16%;" scope="col">Tên sản phẩm</th>
                            <th style="width: 8%;" scope="col">Số lần bán</th>
                            <th style="width: 10%;" scope="col">Số lượng bán</th>
                            <th style="width: 10%;" scope="col">Thành tiền</th>
                           
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($statistical_product_seling as $value) {
                      
                            extract($value);

                            echo '<tr>
                                    <td class="text-center">' . $ma_sp . '</td>
                                    <td class="text-center">' . $ten_sp . '</td>
                                    <td class="text-center">' . $so_lan_ban . '</td>
                                    <td class="text-center">' . $so_luong_ban . '</td>
                                    <td class="text-center">' . $thanh_tien . '</td>
                               
     
                                </tr>';
                                
                        } ?>
                        
                    </tbody>
                </table>
                <a href="?act=product_chart" class="btn btn-warning">Xem biểu đồ</a>
            </div>
            <div class="col-md-6">
                <div class="d-flex justify-content-between my-md-2 my-2 ">
                    <h3 class="fs-1">Thống kê sản phẩm theo danh mục </h3>
                    
    
                </div>
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th style="width: 10%;" scope="col">Mã loại</th>
                            <th style="width: 18%;" scope="col">Tên sản phẩm</th>
                            <th style="width: 12%;" scope="col">Số lượng</th>
                            <th style="width: 12%;" scope="col">Giá Min</th>
                            <th style="width: 12%;" scope="col">Giá Max</th>
                            <th style="width: 18%;" scope="col">Giá Trung bình</th>
                          
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($statistical_category as $value) {
                      
                            extract($value);

                            echo '<tr>
                                    <td class="text-center">' . $ma_lsp . '</td>
                                    <td class="text-center">' . $ten_lsp . '</td>
                                    <td class="text-center">' . $so_luong . '</td>
                                    <td class="text-center">' . $gia_min . '</td>
                                    <td class="text-center">' . $gia_max . '</td>
                                    <td class="text-center">' . $gia_avg . '</td>
     
                                </tr>';
                                
                        } ?>
                        
                    </tbody>
                </table>
                <a href="?act=statistical" class="btn btn-warning">Xem biểu đồ</a>
            </div>
        </div>
    </div>
</div>
