<!-- Shop Category pages -->
<div class="shop-category-area pb-100px pt-70px">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 order-lg-last col-md-12 order-md-first">
                    <!-- Shop Top Area Start -->
                    <div class="shop-top-bar d-flex">
                        <!-- Left Side start -->
                        <p>Có 17 sản phẩm.</p>
                        <!-- Left Side End -->
                        <!-- Right Side Start -->
                        <div class="select-shoing-wrap d-flex align-items-center">
                            <div class="shot-product">
                                <p>Sắp xếp theo:</p>
                            </div>
                            <div class="shop-select">
                                <select class="shop-sort">
                                    <option data-display="Relevance">Mức độ liên quan</option>
                                    <option value="1"> Tên, A đến Z</option>
                                    <option value="2"> Tên, Z đến A</option>
                                    <option value="3"> Giá, từ thấp đến cao</option>
                                    <option value="4"> Giá, từ cao đến thấp</option>
                                </select>

                            </div>
                        </div>
                        <!-- Right Side End -->
                    </div>


                    <!-- Shop Bottom Area Start -->
                    <div class="shop-bottom-area">

                        <div class="row">
                        <?php
                    $i = 0;
                    foreach ($product as $load_product) {
                        extract($load_product);
                        $img = "upload/" . $hinh_anh;
                        ?>
                        <div class="col-lg-4 col-md-6 col-sm-6 col-xs-6" data-aos="fade-up" data-aos-delay="400">
                            <!-- Single Product -->
                            <div class="product mb-25px">
                                <div class="thumb">
                                    <a href="shop-left-sidebar.html" class="image">
                                         <?php 
                                    if ($i == 0 || $i == 2 || $i == 4 || $i == 8 || $i == 10) {
                                        echo '<span class="badges">
                                            <span class="new">Mới</span>
                                        </span>';
                                    } elseif($i == 3 || $i == 5 || $i == 7 || $i == 9){
                                        echo '<span class="badges">
                                        <span class="sale">-5%</span>
                                    <span class="new">New</span>
                                    </span>';
                                    } else{
                                        echo '<span class="badges">
                                            <span class="sale">-7%</span>
                                        </span>';
                                    }
                                    ?>
                                        <img src="<?php echo $img; ?>" alt="Product" />
                                        <img class="hover-image" src="<?php echo $img; ?>" alt="Product" />
                                    </a>
                                    <?php 
                                    if ($i == 0 || $i == 2 || $i == 4 || $i == 8 || $i == 10) {
                                        echo '<span class="badges">
                                            <span class="new">Mới</span>
                                        </span>';
                                    } elseif($i == 3 || $i == 5 || $i == 7 || $i == 9){
                                        echo '<span class="badges">
                                        <span class="sale">-5%</span>
                                    <span class="new">New</span>
                                    </span>';
                                    } else{
                                        echo '<span class="badges">
                                            <span class="sale">-7%</span>
                                        </span>';
                                    }
                                    ?>
                                    <div class="actions">
                                        <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                        <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                        <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                    </div>
                                    <form action="index.php?act=addtocart" method="post">
                                                <input type="hidden" name="ma_sp" value="<?=$ma_sp?>">
                                                <input type="hidden" name="ten_sp" value="<?=$ten_sp?>">
                                                <input type="hidden" name="hinh_anh" value="<?=$hinh_anh?>">
                                                <input type="hidden" name="gia_sp" value="<?=$gia_sp?>">
                                                <input type="hidden" name="so_luong" value="<?=$so_luong?>">
                                                <input type="hidden" name="ten_mau" value="<?=$ten_mau?>">
                                                <input type="hidden" name="ten_kich_co" value="<?=$ten_kich_co?>">
                                                <button title="Add To Cart" class=" add-to-cart" name="addtocart">Add
                                                To Cart</button>
                                            </form>
                                
                                </div>
                                <div class="content">
                                    <h5 class="title"><a href="shop-left-sidebar.html"><?php echo $ten_sp; ?></a></h5>
                                    <span class="price">
                                        <span class="new"><?php echo $gia_sp; ?></span>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <?php
                        $i++;
                    }
                    ?>
                      
                          
                        </div>
                        <!--  Pagination Area Start -->
                        <div class="pro-pagination-style text-center mb-md-30px mb-lm-30px mt-30px" data-aos="fade-up">
                            <ul>
                                <li>
                                    <a class="prev" href="#"><i class="ion-ios-arrow-left"></i></a>
                                </li>
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li>
                                    <a class="next" href="#"><i class="ion-ios-arrow-right"></i></a>
                                </li>
                            </ul>
                        </div>
                        <!--  Pagination Area End -->
                    </div>
                    <!-- Shop Bottom Area End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="col-lg-3 order-lg-first col-md-12 order-md-last mb-md-60px mb-lm-60px">
                    <div class="shop-sidebar-wrap">
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget">
                            <div class="main-heading">
                                <h3 class="sidebar-title">Tất cả danh mục</h3>
                            </div>
                            
                            <div class="sidebar-widget-category">
                                
                                <ul>
                                    <li><a href="#" class="selected">Tất cả <span>(4)</span> </a></li>
                                    <?php
                                    foreach ($product_catalog as $catalog) {
                                        extract($catalog);
                                    
                                    echo '
                                    <li><a href="#" class="">'.$ten_lsp.' <span>(3)</span> </a></li>
                                    ';
                                    }
                                    ?>
                                   
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar single item -->
                        <div class="sidebar-widget-group">
                            <h3 class="sidebar-title">Lọc giá</h3>
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title">Giá</h4>
                                <div class="price-filter">
                                    <div class="price-slider-amount">
                                        <input type="text" id="amount" class="p-0 h-auto lh-1" name="price" placeholder="Add Your Price" />
                                    </div>
                                    <div id="slider-range"></div>
                                </div>
                            </div>
                            <!-- Sidebar single item -->
                            <div class="sidebar-widget">
                                <h4 class="pro-sidebar-title mt-5">Kích thước </h4>
                                <div class="sidebar-widget-list">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" /> <a href="#">Lớn <span>(4)</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value="" /> <a href="#">Trung bình 
                                                    <span>(4)</span></a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value="" /> <a href="#">Nhỏ <span>(4)</span>
                                                </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value="" /> <a href="#">Cực lớn
                                                    <span>(4)</span> </a>
                                                <span class="checkmark"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar single item -->
                            <div class="sidebar-widget no-cba">
                                <h4 class="pro-sidebar-title">Màu sắc</h4>
                                <div class="sidebar-widget-list">
                                    <ul>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" /> <a href="#">Màu xám<span>(2)</span> </a>
                                                <span class="checkmark grey"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value="" /> <a href="#">Màu trắng<span>(4)</span></a>
                                                <span class="checkmark white"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value="" /> <a href="#">Màu đen<span>(4)</span>
                                                </a>
                                                <span class="checkmark black"></span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="sidebar-widget-list-left">
                                                <input type="checkbox" value="" /> <a href="#">Màu nêu<span>(4)</span>
                                                </a>
                                                <span class="checkmark camel"></span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                           
                        </div>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>