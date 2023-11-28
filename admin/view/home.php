<div class="wrapper">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="float-right hide-phone">
                            <ul class="list-inline">
                                <li class="list-inline-item mr-3">
                                    <input class="knob" data-width="48" data-height="48" data-linecap="round"
                                        data-fgcolor="#605daf" value="80" data-skin="tron" data-angleoffset="180"
                                        data-readonly="true" data-thickness=".1">
                                </li>
                                <li class="list-inline-item">
                                    <span class="text-muted">Dung lượng sử dụng</span>
                                    <h6>400GB/524.84GB</h6>
                                </li>
                            </ul>
                        </div>
                        <h4 class="page-title">Bảng điều khiển</h4>
                        <div class="btn-group mt-2">
                            <ol class="breadcrumb hide-phone p-0 m-0">
                                <li class="breadcrumb-item">
                                    <a href="#">Trang chủ</a>
                                </li>
                                <li class="breadcrumb-item active">Bảng điều khiển</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end page title end breadcrumb -->
            <div class="row">
                <div class="col-lg-9">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-contain">
                                        <div class="row">
                                            <div class="col-2 align-self-center">
                                                <i class="fas fa-tasks text-gradient-success"></i>
                                            </div>
                                            <div class="col-10 text-right">
                                                <h5 class="mt-0 mb-1">190</h5>
                                                <p class="mb-0 font-12 text-muted">Nhiệm vụ hoạt dộng</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body justify-content-center">
                                    <div class="icon-contain">
                                        <div class="row">
                                            <div class="col-2 align-self-center">
                                                <i class="far fa-gem text-gradient-danger"></i>
                                            </div>
                                            <div class="col-10 text-right">
                                                <h5 class="mt-0 mb-1">1</h5>
                                                <p class="mb-0 font-12 text-muted">Dự án</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-contain">
                                        <div class="row">
                                            <div class="col-2 align-self-center">
                                                <i class="fas fa-users text-gradient-warning"></i>
                                            </div>
                                            <div class="col-10 text-right">
                                                <h5 class="mt-0 mb-1">14</h5>
                                                <p class="mb-0 font-12 text-muted">Nhóm</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="card">
                                <div class="card-body">
                                    <div class="icon-contain">
                                        <div class="row">
                                            <div class="col-2 align-self-center">
                                                <i class="fas fa-database text-gradient-primary"></i>
                                            </div>
                                            <div class="col-10 text-right">
                                                <h5 class="mt-0 mb-1">45 ngày</h5>
                                                <p class="mb-0 font-12 text-muted">Thời gian</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="btn-group btn-group-toggle float-right" data-toggle="buttons">
                                <label class="btn btn-primary btn-sm active">
                                    <input type="radio" name="options" id="option1" checked=""> This Week </label>
                                <label class="btn btn-primary btn-sm">
                                    <input type="radio" name="options" id="option2"> Last Month </label>
                            </div>
                            <h5 class="header-title mb-4 mt-0">Weekly Record</h5>
                            <canvas id="lineChart" height="80"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-right">
                                <a class="nav-link dropdown-toggle arrow-none" id="dLabel4" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel4">
                                    <a class="dropdown-item" href="#">Create Project</a>
                                    <a class="dropdown-item" href="#">Open Project</a>
                                    <a class="dropdown-item" href="#">Tasks Details</a>
                                </div>
                            </div>
                            <h5 class="header-title mb-4 mt-0">Hoạt động</h5>
                            <div>
                                <canvas id="dash-doughnut" height="200"></canvas>
                            </div>
                            <ul class="list-unstyled list-inline text-center mb-0 mt-3">
                                <li class="mb-2 list-inline-item text-muted font-13">
                                    <i class="mdi mdi-label text-success mr-2"></i>Tích cực
                                </li>
                                <li class="mb-2 list-inline-item text-muted font-13">
                                    <i class="mdi mdi-label text-danger mr-2"></i>Hoàn thành
                                </li>
                                <li class="mb-2 list-inline-item text-muted font-13">
                                    <i class="mdi mdi-label text-warning mr-2"></i>Đang chờ đợi
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="row mb-3">
                                <div class="col-sm-6">
                                    <p class="mb-0 text-muted font-13">
                                        <i class="mdi mdi-album mr-2 text-warning"></i>Khách hàng tiềm năng mới
                                    </p>
                                </div>
                                <div class="col-sm-6">
                                    <p class="mb-0 text-muted font-13">
                                        <i class="mdi mdi-album mr-2 text-danger"></i>Mục tiêu khách hàng tiềm năng mới
                                    </p>
                                </div>
                            </div>
                            <div class="progress bg-gradient1 mb-3" style="height:5px;">
                                <div class="progress-bar bg-gradient3" role="progressbar" style="width: 65%"
                                    aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <a class="btn btn-primary btn-sm btn-block text-white">Đọc thêm</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="dropdown d-inline-block float-right">
                                <a class="nav-link dropdown-toggle arrow-none" id="dLabel5" data-toggle="dropdown"
                                    href="#" role="button" aria-haspopup="false" aria-expanded="false">
                                    <i class="fas fa-ellipsis-v font-20 text-muted"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel5">
                                    <a class="dropdown-item" href="#">New Messages</a>
                                    <a class="dropdown-item" href="#">Open Messages</a>
                                </div>
                            </div>
                            <h5 class="header-title pb-3 mt-0">New Clients</h5>
                            <div class="table-responsive boxscroll" style="overflow: hidden; outline: none;">
                                <table class="table mb-0">
                                    <tbody>
                                        <tr>
                                            <td class="border-top-0">
                                                <div class="media">
                                                    <img src="../admin/public/assets_admin/images/users/avatar-2.jpg" alt=""
                                                        class="thumb-md rounded-circle">
                                                    <div class="media-body ml-2">
                                                        <p class="mb-0">Roy Saunders <span
                                                                class="badge badge-soft-danger">USA</span>
                                                        </p>
                                                        <span class="font-12 text-muted">CEO of facebook</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="border-top-0 text-right">
                                                <a href="#" class="btn btn-light btn-sm">
                                                    <i class="far fa-comments mr-2 text-success"></i>Chat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <img src="../admin/public/assets_admin/images/users/avatar-3.jpg" alt=""
                                                        class="thumb-md rounded-circle">
                                                    <div class="media-body ml-2">
                                                        <p class="mb-0">Tiger Nixon <span
                                                                class="badge badge-soft-info">UK</span>
                                                        </p>
                                                        <span class="font-12 text-muted">CEO of WhatsApp</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href="#" class="btn btn-light btn-sm">
                                                    <i class="far fa-comments mr-2 text-success"></i>Chat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <img src="../admin/public/assets_admin/images/users/avatar-4.jpg" alt=""
                                                        class="thumb-md rounded-circle">
                                                    <div class="media-body ml-2">
                                                        <p class="mb-0">Ashton Cox <span
                                                                class="badge badge-soft-pink">USA</span>
                                                        </p>
                                                        <span class="font-12 text-muted">founder of Google</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href="#" class="btn btn-light btn-sm">
                                                    <i class="far fa-comments mr-2 text-success"></i>Chat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <img src="../admin/public/assets_admin/images/users/avatar-5.jpg" alt=""
                                                        class="thumb-md rounded-circle">
                                                    <div class="media-body ml-2">
                                                        <p class="mb-0">Cedric Kelly <span
                                                                class="badge badge-soft-purple">Canada</span>
                                                        </p>
                                                        <span class="font-12 text-muted">CEO of Paypal</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href="#" class="btn btn-light btn-sm">
                                                    <i class="far fa-comments mr-2 text-success"></i>Chat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="">
                                                <div class="media">
                                                    <img src="../admin/public/assets_admin/images/users/avatar-2.jpg" alt=""
                                                        class="thumb-md rounded-circle">
                                                    <div class="media-body ml-2">
                                                        <p class="mb-0">Garry Pearson <span
                                                                class="badge badge-soft-info">India</span>
                                                        </p>
                                                        <span class="font-12 text-muted">CEO of facebook</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href="#" class="btn btn-light btn-sm">
                                                    <i class="far fa-comments mr-2 text-success"></i>Chat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <img src="../admin/public/assets_admin/images/users/avatar-4.jpg" alt=""
                                                        class="thumb-md rounded-circle">
                                                    <div class="media-body ml-2">
                                                        <p class="mb-0">Ashton Cox <span
                                                                class="badge badge-soft-pink">Africa</span>
                                                        </p>
                                                        <span class="font-12 text-muted">founder of Google</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href="#" class="btn btn-light btn-sm">
                                                    <i class="far fa-comments mr-2 text-success"></i>Chat </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="media">
                                                    <img src="../admin/public/assets_admin/images/users/avatar-1.jpg" alt=""
                                                        class="thumb-md rounded-circle">
                                                    <div class="media-body ml-2">
                                                        <p class="mb-0">Roy Saunders <span
                                                                class="badge badge-soft-success">USA</span>
                                                        </p>
                                                        <span class="font-12 text-muted">Manager of Bank</span>
                                                    </div>
                                                </div>
                                            </td>
                                            <td class="text-right">
                                                <a href="#" class="btn btn-light btn-sm">
                                                    <i class="far fa-comments mr-2 text-success"></i>Chat </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card">
                        <div class="card-body">
                            <a href="#" class="btn btn-outline-success float-right">Withdraw Monthly</a>
                            <h5 class="header-title mb-4 mt-0">Monthly Revenue</h5>
                            <h4 class="mb-4">$15,421.50</h4>
                            <p class="font-14 text-muted mb-3">
                                <i class="mdi mdi-message-reply text-danger mr-2 font-18"></i> $ 1500 when an unknown
                                printer took a galley.
                            </p>
                            <canvas id="bar-data" height="125"></canvas>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <div class="d-sm-flex align-self-center">
                                <img src="../admin/public/assets_admin/images/widgets/code.svg" alt="" class="" height="100">
                                <div class="media-body ml-3">
                                    <h6 class="mt-0">Code Confirmed</h6>
                                    <p class="text-muted font-13">Contrary to popular belief, generators on Lorem Ipsum
                                        is not simply random text.</p>
                                    <a href="#" class="btn btn-gradient-secondary">Confirm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-6">
                    <div class="card timeline-card">
                        <div class="card-body p-0">
                            <div class="bg-gradient2 text-white text-center py-3 mb-4">
                                <p class="mb-0 font-18">
                                    <i class="mdi mdi-clock-outline font-20"></i> This Week's Activity
                                </p>
                            </div>
                        </div>
                        <div class="card-body boxscroll">
                            <div class="timeline">
                                <div class="entry">
                                    <div class="title">
                                        <h6>10/ Oct</h6>
                                    </div>
                                    <div class="body">
                                        <p>There are many variations of passages of Lorem Ipsum available..... <a
                                                href="#" class="text-primary"> Read More</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="entry">
                                    <div class="title">
                                        <h6>9/ Oct</h6>
                                    </div>
                                    <div class="body">
                                        <p>All the Lorem Ipsum generators on the predefined chunks as necessary..... <a
                                                href="#" class="text-primary"> Read More</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="entry">
                                    <div class="title">
                                        <h6>8/ Oct</h6>
                                    </div>
                                    <div class="body">
                                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text..... <a
                                                href="#" class="text-primary"> Read More</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="entry">
                                    <div class="title">
                                        <h6>7/ Oct</h6>
                                    </div>
                                    <div class="body">
                                        <p class="pb-1">Many desktop publishing packages and web page editors now.....
                                            <a href="#" class="text-primary"> Read More</a>
                                        </p>
                                    </div>
                                </div>
                                <div class="entry">
                                    <div class="title">
                                        <h6>6/ Oct</h6>
                                    </div>
                                    <div class="body">
                                        <p class="pb-1 mb-0">All the Lorem Ipsum generators on the predefined chunks as
                                            necessary..... <a href="#" class="text-primary"> Read More</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
                                    <td class="text-center">' .number_format($thanh_tien, 0, '.', '.').  '</td>
                               
     
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
                                    <td class="text-center">' . number_format($gia_min, 0, '.', '.') . '</td>
                                    <td class="text-center">' . number_format($gia_max, 0, '.', '.') . '</td>
                                    <td class="text-center">' . number_format($thanh_tien, 0, '.', '.') . '</td>
     
                                </tr>';
                                
                        } ?>
                        
                    </tbody>
                </table>
                <a href="?act=statistical" class="btn btn-warning">Xem biểu đồ</a>
            </div>
        </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>