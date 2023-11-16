<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h3>Thêm mới thuộc tính </h3>
                <form method="post" enctype="multipart/form-data">
                    <div class="mb-3">

                        <label for="name" class="form-label mt-3">Mã sản phẩm</label>
                        <input type="text" name="product_id" class="form-control" placeholder="Nhập giá sản phẩm" />
                         
                        <div class="d-flex justify-content-between">
                            <div>
                                <label for="name" class="form-label mt-3">Màu sắc</label>
                                <select class="form-select" name="product_color" aria-label="Default select example">
                                    <option selected>Chọn màu</option>
                                    <option value="0">Xanh</option>
                                    <option value="1">Đỏ</option>
                                    <option value="2">Tím</option>
                                    <option value="3">Vàng</option>
                                </select>
                            </div>
                            <div class="mx-5">
                                <label for="name" class="form-label mt-3">Kích thước</label>
                                <select class="form-select" name="product_size" aria-label="Default select example">
                                    <option selected>Chọn kích thước</option>
                                    <option value="0">M</option>
                                    <option value="1">L</option>
                                    <option value="2">XL</option>
                                    <option value="3">XXL</option>
                                </select>
                            </div>
                        </div>


                        <label for="name" class="form-label mt-3">Giá sản phẩm</label>
                        <input type="number" name="product_price" class="form-control" />

                        <label for="name" class="form-label mt-3">Số lượng </label>
                        <input type="number" name="product_quantity" class="form-control" />

                        <label for="name" class="form-label mt-3">Mô tả</label>
                        <input type="text" name="product_describe" class="form-control" />


                        <br>
                        <div class="d-flex justify-content-between">
                            <button type="submit" name="product_variant" class="btn btn-primary">Thêm mới</button>
                            <a href="?act=list_atribute" class="btn btn-primary">Danh sách</a>
                        </div>
                            
                </form>
                <h6>
                    <?php if(isset($message)) echo $message?>
                </h6>
            </div>
        </div>
    </div>
</div>