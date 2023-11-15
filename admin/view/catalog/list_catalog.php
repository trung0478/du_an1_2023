<div class="wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                <div class="my-md-2 my-2">
                    <h3 class="fs-1">Danh sách danh mục</h3>
                    <div class="row my-3">
                        <div class="col-md-5">
                            <form method="POST" action="index.php?act=search_catalog">
                                <input type="text" name="name_catalog" class="form-control" placeholder="Tìm kiếm tên danh mục" />
                            </form>
                        </div>
                        <div class="col-md-2 offset-md-5 d-flex justify-content-end">
                            <a href="?act=add_catalog" class="btn btn-primary ">Thêm mới</a>
                        </div>
                    </div>
                </div>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">STT</th>
                            <th scope="col">Tên danh mục</th>
                            <th scope="col">Trạng thái</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        
                        <?php
                        if ($list_catalog==null) {
                            echo '<tr>
                                    <td class="text-danger" colspan="4">Không có danh mục bạn vừa tìm !!</td>
                                  </tr>';
                        }
                        $stt = 0;
                        foreach ($list_catalog as $value) :
                            $stt += 1;
                            extract($value);
                        ?>
                            <tr>
                                <th scope="row"><?= $stt ?></th>
                                <td><?= $ten_lsp ?></td>
                                <td><?= ($trang_thai) == 1 ? 'Hiện' : 'Ẩn'; ?></td>
                                <td>
                                    <a href="?act=update_catalog&id_catalog=<?= $ma_lsp ?>" class="btn btn-warning">Sửa</a>
                                    <a href="?act=delete_catalog&id_catalog=<?= $ma_lsp ?>" onclick="return confirm('Bạn có xoá không?')" href="#" class="btn btn-danger">Xóa </a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            <div class="col-md-4"></div>
        </div>
    </div>
</div>