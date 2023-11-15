<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <h3>Thêm mới danh mục </h3>
                <form method="post">
                    <div class="mb-3 row">
                        <div class="col-md-8">
                            <label for="name" class="form-label">Tên danh mục</label>
                            <input type="text" name="name_catalog" class="form-control" id="name" placeholder="Nhập tên danh mục" />
                        </div>
                        <div class="col-md-4">
                            <label for="name" class="form-label">Trạng thái</label>
                                <select class="form-control" name="status_catalog" aria-label="Default select example">
                                    <option selected>Chọn trạng thái</option>
                                    <option value="2">Ẩn</option>
                                    <option value="1">Hiện</option>
                                </select>
                        </div>
                    </div>
                    <button type="submit" name="add_catalog" class="btn btn-primary">Thêm mới</button>
                </form>
            </div>
        </div>
    </div>
</div>