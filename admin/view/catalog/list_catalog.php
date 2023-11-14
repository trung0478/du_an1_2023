<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="d-flex justify-content-between my-md-2 my-2">
                    <h3 class="fs-1">Danh sách danh mục</h3>
                    <a href="?act=add_catalog" class="btn btn-primary my-md-2 my-1">Thêm mới</a>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên danh mục</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>name</td>
                            <td>
                                <a href="?act=update_catalog" class="btn btn-warning">Sửa</a>
                                <a onclick="return confirm('Bạn có xoá không?')" href="#" class="btn btn-danger">Xóa </a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>