<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h3>Thêm mới sản phẩm </h3>
                <form action="index.php?act=add_product" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <div class="d-flex justify-content-between">
                            <div>
                                <label for="name" class="form-label mt-3">Loại sản phẩm</label>
                                <select class="form-select" name="id_catalog" aria-label="Default select example">
                                    <option value="0" selected>Chọn loại</option>
                                    <?php
                                        foreach ($list_catalog as $catalog) {
                                            extract($catalog);
                                            echo '<option value="'.$ma_lsp.'">'.$ten_lsp.'</option>';
                                        }
                                    ?>
                                </select>
                            </div>
                        </div>
                    
                        <label for="name" class="form-label mt-3">Tên sản phẩm</label>
                        <input type="text" name="name" class="form-control" placeholder="Nhập tên sản phẩm" />

                        <label for="name" class="form-label mt-3">Giá sản phẩm</label>
                        <input type="text" name="price" class="form-control" placeholder="Nhập giá sản phẩm" />

                        <label for="name" class="form-label mt-3">Hình ảnh</label>
                        <input type="file" name="image" class="form-control" />

                        <label for="name" class="form-label mt-3">Số lượng sản phẩm</label>
                        <input type="text" name="quantity" class="form-control" />

                        <label for="name" class="form-label mt-3">Khuyến mãi</label>
                        <input type="text" name="sale" class="form-control" />

                        <label for="name" class="form-label mt-3">Mô tả</label>
                        <input type="text" name="desc" class="form-control" />
                        <br>
                         <button type="submit" name="add_new" class="btn btn-primary">Thêm mới</button>
                        <?php
                            if (isset($message) && $message != "") echo $message;
                        ?>  
                    </div>
                </form>
            </div>
            
        </div>
    </div>
</div>