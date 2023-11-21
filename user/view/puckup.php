

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">x</span></button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12 mb-lm-30px mb-sm-30px">
                            <!-- Swiper -->
                            <div class="swiper-container gallery-top mb-20px">
                                <div class="swiper-wrapper">
                                    
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="./user/public/assets/images/product-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="./user/public/assets/images/product-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="./user/public/assets/images/product-image/4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="./user/public/assets/images/product-image/5.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-container gallery-thumbs slider-nav-style-1 small-nav">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="./user/public/assets/images/product-image/1.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="./user/public/assets/images/product-image/2.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="./user/public/assets/images/product-image/3.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="./user/public/assets/images/product-image/4.jpg" alt="">
                                    </div>
                                    <div class="swiper-slide">
                                        <img class="img-responsive m-auto" src="./user/public/assets/images/product-image/5.jpg" alt="">
                                    </div>
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
                                <h2><?=$ten_sp?></h2>
                                <p class="reference">Số lượng:<span> <?$so_luong?></span></p>
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
                                        <li class="old-price not-cut">$18.90</li>
                                    </ul>
                                </div>
                                <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                
                    <div class="pro-details-size-color d-flex">
                        <div class="pro-details-color-wrap">
                            <span>Màu</span>
                            <select class="form-control">
                                <option disabled selected>Chọn màu</option>
                                <?php foreach ($load_color_size as $value) : ?>
                                    <option value="<?= $value['ma_mau'] ?>"><?= $value['ten_mau'] ?></option>
                                <?php endforeach; ?>
                            </select>
                            <!-- <div class="pro-details-color-content">
                                <ul>
                                    <li class="blue"></li>
                                    <li class="maroon active"></li>
                                </ul>
                            </div> -->
                        </div>
                        <div class="product-size">
                            <span>Kích thước</span>
                            <select class="form-control">
                                <option disabled selected>Chọn kích thước</option>
                                <?php foreach ($load_color_size  as $value) : ?>
                                    <option value="<?= $value['ten_mau'] ?>"><?= $value['ten_kich_co'] ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        </div>
                                <div class="pro-details-quality">
                                     <div class="cart-plus-minus" style="margin-right: 15px;">
                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="<?=$so_luong?>" />
                            </div>
                                    <div class="pro-details-cart btn-hover">
                                <form action="index.php?act=addtocart" method="post">
                                    <input type="hidden" name="ma_sp" value="<?=$ma_sp?>">
                                    <input type="hidden" name="ten_sp" value="<?=$ten_sp?>">
                                    <input type="hidden" name="hinh_anh" value="<?=$hinh_anh?>">
                                    <input type="hidden" name="gia_sp" value="<?=$gia_sp?>">
                                    <input type="hidden" name="so_luong" value="<?=$so_luong?>">
                                    <input type="hidden" name="ten_mau" value="<?= $value ?>">
                                    <input type="hidden" name="ten_kich_co" value="<?= $value ?>">
                                    <button title="Add To Cart" class="add-cart btn btn-primary btn-hover-primary ml-4" name="addtocart">Thêm vào giỏ hàng</button>
                                </form>
                                    </div>
                                </div>
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