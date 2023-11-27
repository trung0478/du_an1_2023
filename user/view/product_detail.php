<!-- breadcrumb-area start -->
<div class="breadcrumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="row breadcrumb_box  align-items-center">
                    <div class="col-lg-6 col-md-6 col-sm-12 text-center text-md-start">
                        <h2 class="breadcrumb-title">Sản phẩm</h2>
                    </div>
                    <div class="col-lg-6  col-md-6 col-sm-12">
                        <!-- breadcrumb-list start -->
                        <ul class="breadcrumb-list text-center text-md-end">
                            <li><a href="?act=home">Trang chủ/ </a></li>
                            <li class="active">Chi tiết sản phẩm</li>
                        </ul>
                        <!-- breadcrumb-list end -->
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Product Details Area Start -->
<div class="product-details-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-sm-12 col-xs-12 mb-lm-30px mb-md-30px mb-sm-30px">
                <!-- Swiper -->
                <div class="swiper-container zoom-top">
                    <div class="swiper-wrapper">
                        <?php
                            foreach ($check_variant as $variant) {
                                extract($variant);
                                $image = $link_img .$hinh_anh;
                                echo '<div class="swiper-slide"  >
                                        <img  class="img-responsive m-auto" src="' . $image . '" onclick="selectVariant(\''.$hinh_anh.'\', '.$gia_km.', '.$gia_sp.', '.$so_luong.')">
                                    </div>';
                            }
                        ?>
                    </div>
                </div>

                <!-- slide -->
                <div class="swiper-container zoom-thumbs slider-nav-style-1 small-nav mt-15px mb-15px">
                    <div class="swiper-wrapper">
                        <?php
                            foreach ($check_variant as $variant) {
                                extract($variant);
                                $image = $link_img .$hinh_anh;
                                echo '<div class="swiper-slide" style="margin-top: 20px;">
                                        <img class="img-responsive m-auto" src="' . $image . '" onclick="selectVariant(\''.$hinh_anh.'\', '.$gia_km.', '.$gia_sp.', '.$so_luong.')">
                                    </div>';
                            }
                        ?>
                    </div>
                    <!-- Add Arrows -->
                    <div class="swiper-buttons">
                        <a onclick="nextVariant()" class="swiper-button-next"></a>
                        <a onclick="previousVariant()" class="swiper-button-prev"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-sm-12 col-xs-12" data-aos="fade-up" data-aos-delay="200">
                
                <div class="product-details-content quickview-content">
                    <h2><?= $product_detail['ten_sp'] ?></h2>
                    <p class="reference" id="quantityDisplay">Tồn kho: <span><?=$so_luong?></span></p>
                    <div class="pro-details-rating-wrap">
                                    <div class="rating-product">
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                        <i class="ion-android-star"></i>
                                    </div>
                                    <span class="read-review"><a class="reviews" href="#">Lượt đánh giá: <span>0</a></span>
                                   

                                </div>
                   

                    <div class="pricing-meta">
                        <ul>
                            <span class="old-price not-cut" id="priceDisplay"><?=number_format($check_variant[0]['gia_km'], 0, '.', '.')?></span>
                            <span id="priceDisplaySub" style="text-decoration: line-through; opacity:.5; margin-left:10px; font-size:18px" class="new"><?= number_format($check_variant[0]['gia_sp'], 0, '.', '.') ?></span>
                            
                        </ul>
                    </div>
                    <p class="quickview-para"><?=$mo_ta?></p>
                    <form action="index.php?act=addtocart" method="post">
                    <div class="pro-details-size-color d-flex">
                        <div class="pro-details-color-wrap">
                            <span>Màu</span>
                            <select name="namecolor" id="colorSelect" class="form-control">
                                <option disabled selected>Chọn màu</option>
                                <?php
                                    foreach ($get_color_size as $color) {
                                        extract($color);
                                        echo '<option value="'.$ten_mau.'">'.$ten_mau.'</option>';
                                    }
                                ?>
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
                            <select name="namesize" id="sizeSelect" class="form-control">
                                <option disabled selected>Chọn kích thước</option>
                                <?php
                                    foreach ($get_color_size as $size) {
                                        extract($size);
                                        echo '<option value="'.$ten_kich_co.'">'.$ten_kich_co.'</option>';
                                    }
                                ?>
                            </select>
                        </div>
                        </div>
                    
                            <div class="pro-details-quality">
                                <input class="cart-plus-minus" style="margin-right: 15px; text-align:center" type="number" name="quantity" value="1" id="quantity" onchange="limitQuantity()"/>
                                <div class="pro-details-cart">
                                    <input type="hidden" name="idpro" value="<?=$ma_sp?>">
                                    <input type="hidden" name="name" value="<?=$ten_sp?>">
                                    <input type="hidden" name="imagedefault" value="<?=$check_variant[0]['hinh_anh']?>">
                                    <input type="hidden" name="pricedefault" value="<?=$check_variant[0]['gia_km']?>">
                                    <input type="hidden" name="price_variant_sub" id="priceVariantSub">
                                    <input type="hidden" name="price_variant" id="priceVariant">
                                    <input type="hidden" name="image_variant" id="imageVariant">
                                    <input type="hidden" name="quantity_variant" id="quantityVariant">
                                    
                                    <button title="Add To Cart" class="add-cart btn btn-primary btn-hover-primary ml-4" name="addtocart">Thêm vào giỏ hàng</button>
                                   
                                </div>
                            </div>
                    </form>
                    <div class="pro-details-wish-com">
                        <div class="pro-details-wishlist">
                            <a href="#"><i class="ion-android-favorite-outline"></i>Yêu thích</a>
                        </div>
                        <div class="pro-details-compare">
                            <a href="#"><i class="ion-ios-shuffle-strong"></i>Yêu thích</a>
                        </div>
                    </div>
                    <div class="pro-details-social-info">
                        <span>Chia sẻ</span>
                        <div class="social-info">
                            <ul class="d-flex">
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
                    <div class="pro-details-policy">
                        <ul>
                            <li><img src="./user/public/assets/images/icons/policy.png" alt="" /><span>Chính sách bảo mật</span></li>
                            <li><img src="./user/public/assets/images/icons/policy-2.png" alt="" /><span>Chính sách giao hàng</span></li>
                            <li><img src="./user/public/assets/images/icons/policy-3.png" alt="" /><span>Chính sách phân phối</span></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- product details description area start -->
<div class="description-review-area pb-100px" data-aos="fade-up" data-aos-delay="200">
    <div class="container">
        <div class="description-review-wrapper">
            <div class="description-review-topbar nav">
                <a class="active" data-bs-toggle="tab" href="#des-details2">Mô tả</a>
                <a  data-bs-toggle="tab" href="#des-details3">Bình luận (<?php echo $count_comment['comment_count'] ?>)</a>
            </div>
            <div class="tab-content description-review-bottom">
                <div id="des-details2" class="tab-pane ">
                    <div class="product-description-wrapper active">
                        <?php
                        
                        ?>
                        <p><?= $product_detail['mo_ta'] ?></p>

                    </div>
                </div>
                <div id="des-details3" class="tab-pane ">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="review-wrapper">
                                <?php
                                if (!$product_comment) {
                                    $message_noComment = "Chưa có bình luận nào!!!";
                                }
                                foreach ($product_comment as $value) :
                                    extract($value);
                                ?>
                                    <div class="single-review d-flex align-items-center">
                                        <div class="review-img">
                                            <img width="90px" src="./user/public/assets/images/review-image/1.png" alt="" />
                                        </div>
                                        <div class="review-content">
                                            <div class="review-top-wrap">
                                                <div class="review-left">
                                                    <div class="review-name">
                                                        <h4><?=(isset($ho_ten) && $ho_ten!="")?$ho_ten:$tai_khoan; ?></h4>
                                                    </div>
                                                    <div class="rating-product">
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                        <i class="ion-android-star"></i>
                                                    </div>
                                                </div>
                                                <div class="review-left">
                                                    <a href="#"></a>
                                                </div>
                                            </div><?= $ngay_bl ?>
                                            <div class="review-bottom">
                                                <p><?= $noi_dung ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <?php
                                if (isset($message_noComment) && $message_noComment != null) {
                                    echo '<span class="text-danger text-center">' . $message_noComment . '</span>';
                                }
                                ?>
                                <!-- <div class="single-review child-review">
                                    <div class="review-img">
                                        <img src="./user/public/assets/images/review-image/2.png" alt="" />
                                    </div>
                                    <div class="review-content">
                                        <div class="review-top-wrap">
                                            <div class="review-left">
                                                <div class="review-name">
                                                    <h4>White Lewis</h4>
                                                </div>
                                                <div class="rating-product">
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                    <i class="ion-android-star"></i>
                                                </div>
                                            </div>
                                            <div class="review-left">
                                                <a href="#">Reply</a>
                                            </div>
                                        </div>
                                        <div class="review-bottom">
                                            <p>Vestibulum ante ipsum primis aucibus orci luctustrices posuere cubilia Curae Sus pen disse viverra ed viverra. Mauris ullarper euismod vehicula.</p>
                                        </div>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ratting-form-wrapper pl-50">
                                <h3>Thêm bình luận</h3>
                                <div class="ratting-form">
                                    <form method="post" action="?act=product_detail&id_pro=<?= $product_detail['ma_sp'] ?>">
                                        <div class="row mt-3">
                                            <div class="col-md-12">
                                                <div class="rating-form-style form-submit">
                                                    <textarea name="comment" placeholder="Nội dung"></textarea>
                                                    <button class="btn btn-primary btn-hover-color-primary" name="add_comment" type="submit" value="Submit">Gửi bình luận</button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    <?php if (isset($message_noLogin) && $message_noLogin != null) {
                                        echo $message_noLogin . " " . "<a href='index.php?act=login'>Đăng nhập ngay!</a>";
                                    } ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product details description area end -->


<!-- sản phẩm cùng danh mục -->
<div class="section pb-100px">
    <div class="container">
        <!-- section title start -->
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-center mb-11">
                    <h2 class="title">Sản phẩm cùng loại</h2>
                    <p class="sub-title">Sự đồng đều trong chất lượng - Sản phẩm cùng loại làm nổi bật mọi không gian.
                    </p>
                </div>
            </div>
        </div>
        <!-- section title start -->
        <div class="new-product-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
            <div class="new-product-wrapper swiper-wrapper">
                <!-- Single Prodect -->
                <?php
                foreach ($product_thesame_catalog as $value) :
                    extract($value)
                ?>
                    <div class="new-product-item swiper-slide">
                        <div class="product">
                            <div class="thumb">
                                <a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>" class="image">
                                    <img src="<?= $link_img . $hinh_anh ?>" alt="Product" />
                                    <img class="hover-image" src="<?= $link_img . $hinh_anh ?>" alt="Product" />
                                </a>

                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                </div>
                                <a href="?act=addtocart" title="Add To Cart" name="addtocart" class=" add-to-cart">Thêm vào giỏ hàng</a>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>"><?= $ten_sp ?></a></h5>
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
                            <a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>" class="image">
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
                            <h5 class="title"><a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>">Wooden decorations</a></h5>
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
                            <a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>" class="image">
                                <img src="./user/public/assets/images/product-image/5.jpg" alt="Product" />
                                <img class="hover-image" src="./user/public/assets/images/product-image/5.jpg" alt="Product" />
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
                            <h5 class="title"><a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>">High quality vase bottle</a></h5>
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
                            <a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>" class="image">
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
                            <h5 class="title"><a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>">Living & Bedroom Chair</a></h5>
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
                            <a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>" class="image">
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
                            <h5 class="title"><a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>">Living & Bedroom Table</a></h5>
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


<!-- top 10 sản phẩm có lượt xem nhiều nhất -->
<div class="section pb-100px">
    <div class="container">
        <!-- section title start -->
        <div class="row">
            <div class="col-md-12" data-aos="fade-up">
                <div class="section-title text-center mb-11">
                    <h2 class="title">Sản phẩm được yêu thích</h2>
                    <p class="sub-title">Nguyên tắc đơn giản: Yêu thích của bạn là chúng tôi chọn lựa - Sản phẩm độc đáo, được yêu thích mọi lúc.
                    </p>
                </div>
            </div>
        </div>
        <!-- section title start -->
        <div class="new-product-slider swiper-container slider-nav-style-1" data-aos="fade-up" data-aos-delay="200">
            <div class="new-product-wrapper swiper-wrapper">
                <!-- Single Prodect -->
                <?php
                foreach ($product_most_view as $value) :
                    extract($value)
                ?>
                    <div class="new-product-item swiper-slide">
                        <div class="product">
                            <div class="thumb">
                                <a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>" class="image">
                                    <img src="<?= $link_img . $hinh_anh ?>" alt="Product" />
                                    <img class="hover-image" src="<?= $link_img . $hinh_anh ?>" alt="Product" />
                                </a>

                                <div class="actions">
                                    <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                    <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                    <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                                </div>
                                <button title="Add To Cart" name="addtocart" class=" add-to-cart">Thêm vào giỏ hàng</button>
                            </div>
                            <div class="content">
                                <h5 class="title"><a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>"><?= $ten_sp ?></a></h5>
                                <span class="price">
                                    <?php
                                    if ($gia_km == null) {   ?>
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
                            <a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>" class="image">
                                <img src="./user/public/assets/images/product-image/3.jpg" alt="Product" />
                                <img class="hover-image" src="./user/public/assets/images/product-image/4.jpg" alt="Product" />
                            </a>

                            <div class="actions">
                                <a href="wishlist.html" class="action wishlist" title="Wishlist"><i class="icon-heart"></i></a>
                                <a href="#" class="action quickview" data-link-action="quickview" title="Quick view" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="icon-size-fullscreen"></i></a>
                                <a href="compare.html" class="action compare" title="Compare"><i class="icon-refresh"></i></a>
                            </div>
                            <button title="Add To Cart" name="addtocart" class=" add-to-cart">Thêm vào giỏ hàng</button>
                        </div>
                        <div class="content">
                            <h5 class="title"><a href="index.php?act=product_detail=<?=$ma_sp?>">Wooden decorations</a></h5>
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
                            <a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>" class="image">
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
                            <h5 class="title"><a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>">High quality vase bottle</a></h5>
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
                            <a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>" class="image">
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
                            <h5 class="title"><a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>">Living & Bedroom Chair</a></h5>
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
                            <a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>" class="image">
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
                            <h5 class="title"><a href="index.php?act=product_detail&id_pro=<?=$ma_sp?>">Living & Bedroom Table</a></h5>
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
<script>
 function limitQuantity() {
    var maxQuantity = document.getElementById('quantityVariant').value;
    var quantityInput = document.getElementById("quantity");
    var checkNaN = parseInt(quantityInput.value);

    if (checkNaN >= maxQuantity) {
        quantityInput.value = maxQuantity; // Đặt lại giá trị nếu vượt quá ngưỡng
    }
}

    // Xử lý khi người dùng chọn biến thể
    function selectVariant(imageVariant, priceVariant, priceVariantSub, quantityVariant) {
    // var sizeSelect = document.getElementById('sizeSelect');
    // var colorSelect = document.getElementById('colorSelect');

    // sizeSelect.innerHTML = '';
    // colorSelect.innerHTML = '';
    // console.log(colors);
    // sizes.forEach(function(size) {
    //     var option = document.createElement('option');
    //     option.value = size;
    //     option.textContent = size;
    //     sizeSelect.appendChild(option);
    // });

    // colors.forEach(function(color) {
    //     var option = document.createElement('option');
    //     option.value = color;
    //     option.textContent = color;
    //     colorSelect.appendChild(option);
    // });

    document.getElementById('imageVariant').value = imageVariant;
    document.getElementById('priceVariant').value = priceVariant;
    document.getElementById('priceVariantSub').value = priceVariantSub;
    document.getElementById('quantityVariant').value = quantityVariant;
    const formatPrice = priceVariant.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
    const formatPriceSub = priceVariantSub.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });

    document.getElementById('priceDisplay').textContent = formatPrice;
    document.getElementById('priceDisplaySub').textContent = formatPriceSub;
    document.getElementById('quantityDisplay').textContent = 'Tồn kho: ' + quantityVariant;
}

var variants = <?php echo json_encode($check_variant); ?>;
// console.log(variants[0]['gia_km']);
let variantIndex = 0;
function displayVariant(index) {
    const currentVariant = variants[index];

    document.getElementById('priceVariant').value = currentVariant.gia_km;
    document.getElementById('quantityVariant').value = currentVariant.so_luong;
    document.getElementById('imageVariant').value = currentVariant.hinh_anh;

    const formatPrice = currentVariant.gia_km.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });
    const formatPriceSub = currentVariant.gia_sp.toLocaleString('vi-VN', { style: 'currency', currency: 'VND' });

    document.getElementById('priceDisplay').textContent = formatPrice;
    document.getElementById('priceDisplaySub').textContent = formatPriceSub;
    document.getElementById('quantityDisplay').textContent = 'Tồn kho: ' +  currentVariant.so_luong;
    document.getElementById('imageVariant').src = 'upload/' + currentVariant.hinh_anh;
}

function nextVariant() {
    variantIndex = (variantIndex === variants.length - 1) ? 0 : variantIndex + 1;
    // console.log(variantIndex);
    displayVariant(variantIndex);
}

function previousVariant() {
    variantIndex = (variantIndex <= 0) ? (variants.length - 1) : (variantIndex - 1);
    // console.log(variantIndex);
    displayVariant(variantIndex);
}

displayVariant(variantIndex);
</script>
