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



<!-- Product tab Area Start -->
<div class="section product-tab-area pt-100px">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-center" data-aos="fade-up">
                <div class="section-title mb-0">
                    <h2 class="title">Sản phẩm phổ biến</h2>
                    <p class="sub-title mb-30px">Chuyên nghiệp, Sang trọng, Tiện nghi - Nơi hoàn hảo cho không gian sống của bạn.</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <div class="tab-content">
                    <!-- 1st tab start -->
                    <div class="tab-pane fade show active" id="tab-product-new-arrivals">
                        <div class="row">
                            <?php
                            foreach ($list_product as $value) :
                                extract($value)
                            ?>
                                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                    <!-- Single Product -->
                                    <div class="product">
                                        <div class="thumb">
                                            <a href="index.php?act=product_detail&id_pro=<?= $ma_sp ?>" class="image">
                                                <img src="<?= $link_img . $hinh_anh; ?>" alt="Product" />
                                                <img class="hover-image" src="<?= $link_img . $hinh_anh; ?>" alt="Product" />
                                            </a>

                                            <div class="actions">
                                                <a href="#" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                                <a href="index.php?act=home&id_pro=<?= $ma_sp ?>" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                                <a href="#" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                            </div>
                                            <a href="index.php?act=pockup&idpro=<?=$ma_sp?>" class="action quickview add-to-cart" data-link-action="quickview" title="Quick view" data-bs-target="#exampleModal">Thêm vào giỏ hàng</a>
                                        </div>
                                        <div class="content">
                                            <h5 class="title"><a href="index.php?act=product_detail&id_pro=<?= $ma_sp ?>"><?= $ten_sp; ?></a></h5>
                                            <span class="price">
                                                <?php
                                                if ($gia_km == 0) {   ?>
                                                    <span class="new fs-5"><?= number_format($gia_sp, 0, '.', '.') ?>vnd</span>
                                                <?php } else { ?>
                                                    <span class="new fs-5 mx-3"><?= number_format($gia_km, 0, '.', '.') ?>vnd</span>
                                                    <span style="text-decoration: line-through; opacity:.5;" class="new"><?= number_format($gia_sp, 0, '.', '.') ?>vnd</span>
                                                <?php } ?>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            <?php endforeach; ?>
                            
                        </div>
                    </div>
                    <!-- 1st tab end -->
                    <!-- 2nd tab start -->
                    <div class="tab-pane fade" id="tab-product-best-sellers">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/1.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/2.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Simple minimal Chair </a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/3.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/4.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Wooden decorations</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$48.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/5.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/6.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">High quality vase bottle</a></h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                            <span class="old">$38.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/7.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/8.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Living & Bedroom Chair</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/9.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/10.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Living & Bedroom Table</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$40.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/11.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/12.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Wooden decorations</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/13.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/14.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">High quality vase bottle</a></h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/15.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/16.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Living & Bedroom Chair</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                        </div>
                    </div>
                    <!-- 2nd tab end -->
                    <!-- 3rd tab start -->
                    <div class="tab-pane fade" id="tab-product-sale-item">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/1.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/2.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Simple minimal Chair </a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/3.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/4.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Wooden decorations</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$48.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/5.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/6.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">High quality vase bottle</a></h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                            <span class="old">$38.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/7.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/8.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Living & Bedroom Chair</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/9.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/10.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Living & Bedroom Table</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$40.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/11.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/12.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Wooden decorations</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/13.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/14.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">High quality vase bottle</a></h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/15.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/16.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Living & Bedroom Chair</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                        </div>
                    </div>
                    <!-- 3rd tab end -->
                    <!-- 4th tab start -->
                    <div class="tab-pane fade" id="tab-product-on-sales">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/1.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/2.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Simple minimal Chair </a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/3.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/4.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Wooden decorations</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$48.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/5.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/6.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">High quality vase bottle</a></h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                            <span class="old">$38.00</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-30px" data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/7.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/8.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Living & Bedroom Chair</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/9.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/10.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Living & Bedroom Table</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                            <span class="old">$40.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6  mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="400">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/11.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/12.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Wooden decorations</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 mb-es-30px" data-aos="fade-up" data-aos-delay="600">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/13.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/14.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">High quality vase bottle</a></h5>
                                        <span class="price">
                                            <span class="new">$30.50</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 " data-aos="fade-up" data-aos-delay="800">
                                <!-- Single Prodect -->
                                <div class="product">
                                    <div class="thumb">
                                        <a href="index.php?act=product_detail" class="image">
                                            <img src="./user/public/assets/images/product-image/15.jpg" alt="Product" />
                                            <img class="hover-image" src="./user/public/assets/images/product-image/16.jpg" alt="Product" />
                                        </a>

                                        <div class="actions">
                                            <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                            <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                            <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                        </div>
                                        <button title="Add To Cart" class=" add-to-cart">Add
                                            To Cart</button>
                                    </div>
                                    <div class="content">
                                        <h5 class="title"><a href="index.php?act=product_detail">Living & Bedroom Chair</a></h5>
                                        <span class="price">
                                            <span class="new">$38.50</span>
                                        </span>
                                    </div>
                                </div>
                                <!-- Single Prodect -->
                            </div>
                        </div>
                    </div>
                    <!-- 4th tab end -->
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Product tab Area End -->


<<<<<<< HEAD
<!-- Modal -->
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
                                <h2><?=$product_detail['ten_sp']?></h2>
                                <p class="reference">Reference:<span> demo_17</span></p>
                                <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">Read reviews (1)</a></span>
                                </div>
                                <div class="pricing-meta">
                                    <ul>
                                        <li class="old-price not-cut">$18.90</li>
                                    </ul>
                                </div>
                                <p class="quickview-para">Lorem ipsum dolor sit amet, consectetur adipisic elit eiusm tempor incidid ut labore et dolore magna aliqua. Ut enim ad minim venialo quis nostrud exercitation ullamco</p>
                                <div class="pro-details-size-color">
                                    <div class="pro-details-color-wrap">
                                        <span>Color</span>
                                        <div class="pro-details-color-content">
                                            <ul>
                                                <li class="blue"></li>
                                                <li class="maroon active"></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="pro-details-quality">
                                    <div class="cart-plus-minus">
                                        <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                    </div>
                                    <div class="pro-details-cart btn-hover">
                                        <button class="add-cart btn btn-primary btn-hover-primary ml-4"> Add To
                                            Cart</button>
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


=======
>>>>>>> main

<!-- Banner Section Start -->
<div class="section pb-100px pt-100px">
    <div class="container">
        <!-- Banners Start -->
        <div class="row">
            <!-- Banner Start -->
            <div class="col-lg-6 col-12 mb-md-30px mb-lm-30px" data-aos="fade-up" data-aos-delay="200">
                <a href="index.php?act=product_detail" class="banner">
                    <img src="./user/public/assets/images/banner/1.jpg" alt="" />
                    <div class="info justify-content-end">
                        <div class="content align-self-center">
                            <h3 class="title">
                                Sale Furniture <br /> For Summer
                            </h3>
                            <p>Great Discounts Here</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Banner End -->

            <!-- Banner Start -->
            <div class="col-lg-6 col-12" data-aos="fade-up" data-aos-delay="400">
                <a href="index.php?act=product_detail" class="banner">
                    <img src="./user/public/assets/images/banner/2.jpg" alt="" />
                    <div class="info justify-content-start">
                        <div class="content align-self-center">
                            <h3 class="title">
                                Office Chair <br /> For Best Offer</h3>
                            <p>Great Discounts Here</p>
                        </div>
                    </div>
                </a>
            </div>
            <!-- Banner End -->
        </div>
        <!-- Banners End -->
    </div>
</div>
<!-- Banner Section End -->

<!-- New Product Start -->
<div class="section pb-100px">
    <div class="container">
        <!-- section title start -->
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-center mb-11">
                    <h2 class="title">Sản phẩm khuyến mãi</h2>
                    <p class="sub-title">Tiết kiệm vô vàn, Trải nghiệm vô tận - Tạo nên không gian sống lý tưởng với Ưu đãi tuyệt vời.</p>
                </div>
            </div>
        </div>
        <!-- section title start -->
        <div class="new-product-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
            <div class="new-product-wrapper swiper-wrapper">
                <!-- Single Prodect -->
                <?php
                foreach ($list_product_discount as $value) :
                    extract($value)
                ?>
                    <div class="new-product-item swiper-slide">
                        <div class="product">
                            <div class="thumb">
                                <a href="index.php?act=product_detail&id_pro=<?=$ma_sp; ?>" class="image">
                                    <img src="<?= $link_img . $hinh_anh ?>" alt="Product" />
                                    <img class="hover-image" src="<?= $link_img . $hinh_anh ?>" alt="Product" />
                                </a>

                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                    <a href="?act=home&id_pro=<?=$ma_sp; ?>"><a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a></a> 
                                    <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                </div>
                                <button title="Add To Cart" class=" add-to-cart">Thêm vào giỏ hàng</button>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="index.php?act=product_detail&id_pro=<?= $ma_sp ?>"><?= $ten_sp ?></a></h5>
                                <span class="price">
                                    <?php
                                    if ($gia_km == 0) {   ?>
                                        <span class="new fs-5"><?= number_format($gia_sp, 0, '.', '.') ?>vnd</span>
                                    <?php } else { ?>
                                        <span class="new fs-5 mx-3"><?= number_format($gia_km, 0, '.', '.') ?>vnd</span>
                                        <span style="text-decoration: line-through; opacity:.5;" class="new"><?= number_format($gia_sp, 0, '.', '.') ?>vnd</span>
                                    <?php } ?>
                                </span>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
                <!-- Single Prodect -->
                <div class="new-product-item swiper-slide">
                    <div class="product">
                        <div class="thumb">
                            <a href="index.php?act=product_detail" class="image">
                                <img src="./user/public/assets/images/product-image/3.jpg" alt="Product" />
                                <img class="hover-image" src="./user/public/assets/images/product-image/4.jpg" alt="Product" />
                            </a>

                            <div class="actions">
                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                            </div>
                            <button title="Add To Cart" class=" add-to-cart">Add
                                To Cart</button>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="index.php?act=product_detail">Wooden decorations</a></h5>
                            <span class="price">
                                <span class="new">$38.50</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Single Prodect -->
                <div class="new-product-item swiper-slide">
                    <div class="product">
                        <div class="thumb">
                            <a href="index.php?act=product_detail" class="image">
                                <img src="./user/public/assets/images/product-image/5.jpg" alt="Product" />
                                <img class="hover-image" src="./user/public/assets/images/product-image/6.jpg" alt="Product" />
                            </a>

                            <div class="actions">
                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                            </div>
                            <button title="Add To Cart" class=" add-to-cart">Add
                                To Cart</button>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="index.php?act=product_detail">High quality vase bottle</a></h5>
                            <span class="price">
                                <span class="new">$38.50</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Single Prodect -->
                <div class="new-product-item swiper-slide">
                    <div class="product">
                        <div class="thumb">
                            <a href="index.php?act=product_detail" class="image">
                                <img src="./user/public/assets/images/product-image/7.jpg" alt="Product" />
                                <img class="hover-image" src="./user/public/assets/images/product-image/8.jpg" alt="Product" />
                            </a>

                            <div class="actions">
                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                            </div>
                            <button title="Add To Cart" class=" add-to-cart">Add
                                To Cart</button>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="index.php?act=product_detail">Living & Bedroom Chair</a></h5>
                            <span class="price">
                                <span class="new">$38.50</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Single Prodect -->
                <div class="new-product-item swiper-slide">
                    <div class="product">
                        <div class="thumb">
                            <a href="index.php?act=product_detail" class="image">
                                <img src="./user/public/assets/images/product-image/9.jpg" alt="Product" />
                                <img class="hover-image" src="./user/public/assets/images/product-image/10.jpg" alt="Product" />
                            </a>

                            <div class="actions">
                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                            </div>
                            <button title="Add To Cart" class=" add-to-cart">Add
                                To Cart</button>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="index.php?act=product_detail">Living & Bedroom Table</a></h5>
                            <span class="price">
                                <span class="new">$38.50</span>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- Single Prodect -->
            </div>
            <!-- Add Arrows -->
            <div class="swiper-buttons">
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
    </div>
</div>
<!-- New Product End -->
