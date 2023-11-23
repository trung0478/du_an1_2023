<!-- Hero/Intro Slider Start -->
<div class="section ">
    <div class="hero-slider swiper-container slider-nav-style-1 slider-dot-style-1">
        <!-- Hero slider Active -->
        <div class="swiper-wrapper">
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height swiper-slide d-flex">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category">New Products</span>
                                <h2 class="title-1">Flexible Chair </h2>
                                <p>Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore et dolore magna</p>
                                <a href="#" class="btn btn-lg btn-primary btn-hover-dark mt-5">Shop Now</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5">
                            <div class="hero-slide-image">
                                <img src="./user/public/assets/images/slider-image/slider-1.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Single slider item -->
            <div class="hero-slide-item slider-height swiper-slide d-flex">
                <div class="container align-self-center">
                    <div class="row">
                        <div class="col-xl-6 col-lg-7 col-md-7 col-sm-7 align-self-center">
                            <div class="hero-slide-content slider-animated-1">
                                <span class="category">New Products</span>
                                <h2 class="title-1">Flexible Chair </h2>
                                <p>Torem ipsum dolor sit amet, consectetur adipisicing elitsed do eiusmo tempor incididunt ut labore et dolore magna</p>
                                <a href="#" class="btn btn-lg btn-primary btn-hover-dark mt-5">Shop Now</a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-5 col-md-5 col-sm-5">
                            <div class="hero-slide-image">
                                <img src="./user/public/assets/images/slider-image/slider-2.png" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Add Pagination -->
        <div class="swiper-pagination swiper-pagination-white"></div>
        <!-- Add Arrows -->
        <div class="swiper-buttons">
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>
</div>

<!-- Hero/Intro Slider End -->
<?php
    extract($one_product);
?>
<div class="modal fade show" id="exampleModal" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <a href="?act=home"><button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">x</span></button></a>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-xs-12 mb-lm-30px mb-sm-30px">
                        <!-- Swiper -->
                        <div class="swiper-container gallery-top mb-20px">
                            <div class="swiper-wrapper">
                                <?php
                                    foreach ($img_product as $img) {
                                        extract($img);
                                        $image = $link_img .$hinh_anh;
                                        echo '<div class="swiper-slide">
                                                <img class="img-responsive m-auto" src="'.$image.'" alt="">
                                            </div>';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="swiper-container gallery-thumbs slider-nav-style-1 small-nav">
                            <div class="swiper-wrapper">
                            <?php
                                    for ($i=0; $i < count($img_product); $i++) { 
                                        $image = $link_img .$img_product[$i]['hinh_anh'];
                                        echo '<div class="swiper-slide">
                                            <img class="img-responsive m-auto" src="'.$image.'" alt="">
                                        </div>';
                                    }
                                    // foreach ($img_product as $img) {
                                    //     extract($img);
                                    //     $image = $link_img .$hinh_anh;
                                    //     echo '<div class="swiper-slide">
                                    //         <img class="img-responsive m-auto" src="'.$image.'" alt="">
                                    //     </div>';
                                    // }
                                ?>
                            </div>
                            <!-- Add Arrows -->
                            <div class="swiper-buttons">
                                <div class="swiper-button-next"></div>
                                <div class="swiper-button-prev"></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-details-content quickview-content">
                            <h2><?= $ten_sp ?></h2>
                            <p class="reference">Số lượng:<span> <? $so_luong ?></span></p>
                            <div class="pro-details-rating-wrap">
                                <div class="rating-product">
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                    <i class="ion-android-star"></i>
                                </div>
                                <span class="read-review"><a class="reviews" href="#">Đọc đánh giá (1)</a></span>
                            </div>
                            <div class="pricing-meta">
                                <ul>
                                    <li class="old-price not-cut"><?=number_format($gia_km, 0, '.', '.')?><span style="text-decoration: line-through; opacity:.5; margin-left:10px; font-size:18px" class="new"><?= number_format($gia_sp, 0, '.', '.') ?>vnd</span></li>
                                    
                                </ul>
                            </div>
                            <p class="quickview-para"><?=$mo_ta?></p>
                        <form action="index.php?act=addtocart" method="post">
                            <div class="pro-details-size-color d-flex">
                                <div class="pro-details-color-wrap">
                                    <span>Màu</span>
                                    <select name="namecolor" class="form-control">
                                        <option disabled selected>Chọn màu</option>
                                        <?php
                                            foreach ($one_color_size as $color) {
                                                extract($color);
                                                echo '<option value="'.$ten_mau.'">'.$ten_mau.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                                <div class="product-size">
                                    <span>Kích thước</span>
                                    <select name="namesize" class="form-control">
                                        <option disabled selected>Chọn kích thước</option>
                                        <?php
                                            foreach ($one_color_size as $size) {
                                                extract($size);
                                                echo '<option value="'.$ten_kich_co.'">'.$ten_kich_co.'</option>';
                                            }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            
                            <div class="pro-details-quality">
                                <input type="hidden" name="idpro" value="<?=$ma_sp?>">
                                <input type="hidden" name="name" value="<?=$ten_sp?>">
                                <input type="hidden" name="image" value="<?=$hinh_anh?>">
                                <input type="hidden" name="price" value="<?=$gia_km?>">
                                <div class="cart-plus-minus" style="margin-right: 15px;">
                                    <input class="cart-plus-minus-box" type="text" name="quantity" value="1" />
                                </div>
                                <div class="pro-details-cart btn-hover">
                                    <button title="Add To Cart" class="add-cart btn btn-primary btn-hover-primary ml-4" name="addtocart">Thêm vào giỏ hàng</button>
                                </div>
                            </div>
                        </form>
                            <div class="pro-details-wish-com">
                                <div class="pro-details-wishlist">
                                    <a href="wishlist.html"><i class="ion-android-favorite-outline"></i>Add to
                                        wishlist</a>
                                </div>
                                <div class="pro-details-compare">
                                    <a href="compare.html"><i class="ion-ios-shuffle-strong"></i>Add to compare</a>
                                </div>
                            </div>
                            <div class="pro-details-social-info">
                                <span>Share</span>
                                <div class="social-info">
                                    <ul>
                                        <li>
                                            <a href="#"><i class="ion-social-facebook"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-twitter"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-google"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ion-social-instagram"></i></a>
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
<!-- Modal end -->