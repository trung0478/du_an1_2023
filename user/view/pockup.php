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
                                    foreach ($check_variant as $variant) {
                                        extract($variant);
                                        $image = $link_img .$hinh_anh;
                                        echo '<div class="swiper-slide">
                                                <img class="img-responsive m-auto" src="' . $image . '" onclick="selectVariant(\''.$hinh_anh.'\', '.$gia_km.', '.$gia_sp.', '.$so_luong.')">
                                            </div>';
                                    }
                                ?>
                            </div>
                        </div>
                        <div class="swiper-container gallery-thumbs slider-nav-style-1 small-nav">
                            <div class="swiper-wrapper">
                            <?php
                                    foreach ($check_variant as $variant) {
                                        extract($variant);
                                        $image = $link_img .$hinh_anh;
                                        echo '<div class="swiper-slide">
                                                <img class="img-responsive m-auto" src="' . $image . '" onclick="selectVariant(\''.$hinh_anh.'\', '.$gia_km.', '.$gia_sp.', '.$so_luong.')">
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
                                <a onclick="nextVariant()" class="swiper-button-next"></a>
                                <a onclick="previousVariant()" class="swiper-button-prev"></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-7 col-sm-12 col-xs-12">
                        <div class="product-details-content quickview-content">
                            <h2><?= $ten_sp ?></h2>
                            <p class="reference" id="quantityDisplay">Tồn kho: <span><?=$so_luong?></span></p>
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
                                    <span class="old-price not-cut" id="priceDisplay"><?=number_format($check_variant[0]['gia_km'], 0, '.', '.')?></span>
                                    <span id="priceDisplaySub" style="text-decoration: line-through; opacity:.5; margin-left:10px; font-size:18px" class="new"><?= number_format($check_variant[0]['gia_sp'], 0, '.', '.') ?></span>
                                    <!-- <img src="" id="imageVariant" alt="no php"> -->
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
                                <input type="hidden" name="idpro" value="<?=$ma_sp?>">
                                <input type="hidden" name="name" value="<?=$ten_sp?>">
                                <input type="hidden" name="quantity_variant" id="quantityVariant">
                                <input type="hidden" name="imagedefault" value="<?=$check_variant[0]['hinh_anh']?>">
                                <input type="hidden" name="pricedefault" value="<?=$check_variant[0]['gia_km']?>">
                                <input type="hidden" name="price_variant_sub" id="priceVariantSub">
                                <input type="hidden" name="price_variant" id="priceVariant">
                                <input type="hidden" name="image_variant" id="imageVariant">
                                
                                <!-- <div class="cart-plus-minus" style="margin-right: 15px;">
                                </div> -->
                                <input class="cart-plus-minus" style="margin-right: 15px; text-align:center" type="number" name="quantity" value="1" id="quantity" onchange="limitQuantity()"/>
                                <div class="">
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
    document.getElementById('quantityDisplay').textContent = 'Tồn kho: ' +  quantityVariant;
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
