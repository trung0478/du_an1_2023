<style>
    .nextPay {
        background-color: #ff7004;
        border-radius: 0;
        color: #fff;
        display: block;
        font-size: 14px;
        font-weight: 700;
        line-height: 1;
        padding: 18px 10px 17px;
        text-align: center;
        text-transform: uppercase;
        text-transform: uppercase;
        -webkit-transition: all 0.3s ease 0s;
        transition: all 0.3s ease 0s;
    }
    .nextPay:hover {
        color: #fff;
        background: #212121;
    }
</style>
<!-- Cart Area Start -->
<form action="index.php?act=checkout_info" method="post" onsubmit="return validateForm();" id="cartSection">
<div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Giỏ hàng</h3>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Hình ảnh</th>
                                        <th>Tên SP</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Màu, kích cỡ</th>
                                        <th>Thành tiền</th>
                                        <th>Hoạt động</th>
                                        <th>Chọn</th>
                                    </tr>
                                </thead>
                                <tbody">
                                
                                    <?php
                                        $sum = 0;
                                        $i = 0;
                                        foreach($_SESSION['mycart'] as $key => $cart) :
                                            $img = $link_img . $cart[2];
                                            $thanhtien = $cart[3] * $cart[4];
                                            $sum += $thanhtien;
                                            
                                            
                                    ?>
                                        
                                        <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img class="img-responsive ml-15px" src="<?= $img ?>" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="#"><?= $cart[1] ?></a></td>
                                        <td class="product-price-cart"><span class="amount"><?= number_format($cart[3], 0, '.', '.') ?> đ</span></td>
                                        <td>
                                            <div style="margin-left: 12px;width: 140px;height:40px;display:flex; align-items:center;border:1px solid #ccc; border-radius: 5px;">
                                                <span style="cursor: pointer; padding-left: 15px; font-size:20px" onclick="decrease(this)">-</span>
                                                <input style="border: none; text-align: center; padding: 0" type="text" value="<?=$cart[4]?>" min="1" max="<?=$cart[8]?>" id="quantityInput_<?=$cart[0]?>" data-product-id="<?=$cart[0]?>" data-cart-index="<?=$key?>" onchange="updateQuantity(this.dataset.productId, this.dataset.cartIndex, this.value)" disabled>
                                                <span style="cursor: pointer; padding-right: 15px; font-size:18px" onclick="increase(this)">+</span>
                                            </div>
                                        </td>
                                       
                                        <td class="product-subtotal"><?= $cart[5] .', ' .$cart[6]?></td>
                                        <td class="product-subtotal"><?= number_format($thanhtien, 0, '.', '.') ?> đ</td>
                                        <td class="product-remove">
                                            <a href="index.php?act=del_cart&idcart=<?= $i ?>"><i class="icon-close"></i></a>
                                        </td>
                                        <td class="product-subtotal"><input style="width: 20px;" type="checkbox" name="select_product[]" value="<?=$key?>"></td>
                                    </tr>
                                    
                                    <?php $i++; endforeach ?>
                                    <tr>
                                        <td class="product-thumbnail " colspan = "6">Tổng Đơn hàng</td>
                                        
                                        <td class="product-subtotal"><?= number_format($sum, 0, '.', '.') ?> đ</td>
                                    </tr>

                                     <!-- <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img class="img-responsive ml-15px" src="./user/public/assets/images/product-image/2.jpg" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="#">Product Name</a></td>
                                        <td class="product-price-cart"><span class="amount">$50.00</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal">$80.00</td>
                                        <td class="product-subtotal">$80.00</td>
                                        <td class="product-subtotal">$80.00</td>
                                        
                                        <td class="product-remove">
                                            
                                            <a href="#"><i class="icon-close"></i></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img class="img-responsive ml-15px" src="./user/public/assets/images/product-image/3.jpg" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="#">Product Name</a></td>
                                        <td class="product-price-cart"><span class="amount">$70.00</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="1" />
                                            </div>
                                        </td>
                                        <td class="product-subtotal">$90.00</td>
                                        <td class="product-remove">
                                            
                                            <a href="#"><i class="icon-close"></i></a>
                                        </td>
                                    </tr>  -->
                                </tbody>
                            </table>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="cart-shiping-update-wrapper">
                                    <div class="cart-shiping-update">
                                        <a href="index.php?act=home">Tiếp tục mua sắm</a>
                                    </div>
                                    <div class="cart-clear">
                                        <!-- <a href="index.php?act=viewcart" style="margin-right:40px">Cập nhật giỏ hàng</a> -->
                                        <a href="index.php?act=del_cart">Xóa giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                    <div class="row">
                        
                        <div class="col-lg-4 col-md-6 mb-lm-30px" style="width: 50%;">
                            <div class="discount-code-wrapper">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Sử dụng phiếu giảm giá</h4>
                                </div>
                                <div class="discount-code">
                                    <p>Nhập mã phiếu của bạn nếu có.</p>
                                    <form>
                                        <input type="text" name="name" />
                                        <button class="cart-btn-2" type="submit" name="discount">Áp dụng giảm giá</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12 mt-md-30px" style="width: 50%;">
                            <div class="grand-totall">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gary-cart">Tổng số giỏ hàng</h4>
                                </div>
                                <?php
                                    $sum = 0;
                                    $i = 0;
                                    $total_quantity = 0;
                                    foreach ($_SESSION['mycart'] as $cart) {
                                        $thanhtien = $cart[3] * $cart[4];
                                        $sanpham = $cart[1];
                                        $total_quantity += $cart[4];
                                        $sum += $thanhtien;
                                        $i++;
                                    }

                                    $shippingFee = 30000; // Phí vận chuyển
                                    $total = $sum + $shippingFee; // Tổng tiền sau khi trừ phí vận chuyển
                                ?>
                                    <h5>Tổng số sản phẩm <span>.</span></h5>
                                    
                                    <div class="total-shipping">
                                        <h5>Tổng số vận chuyển</h5>
                                        <ul>
                                            <li>Tiêu chuẩn <span><?=number_format($sum, 0, '.', '.')?> đ</span></li>
                                            <li>Vận chuyển <span><?=number_format($shippingFee, 0, '.', '.')?> đ</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="grand-totall-title">Tổng cộng <span><?=number_format($total, 0, '.', '.')?> đ</span></h4>
                                    
                                        <button name="process_pay" class="nextPay">Tiến hành thanh toán</button>
                                        <p class="text-danger mt-15px" style="display: none" id="messageLogin"></p>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        
    </div>
    <!-- Cart Area End -->
<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    function updateQuantity(productId, cartIndex, newQuantity) {
        var newQuantity = parseInt(document.getElementById('quantityInput_' + productId).value);

        $.ajax({
            type: "POST",
            url: "user/view/cart/update_cart.php",
            data: {
                product_id: productId,
                cart_index: cartIndex,
                new_quantity: newQuantity,
            },
            success: function(response){
                console.log("Cập nhật thành công!");
                $.post('user/view/cart/show_update_cart.php', function(data) {
                    $('#cartSection').html(data);
                })
                // Có thể cập nhật thông tin giỏ hàng trên giao diện tại đây (nếu cần)
            },
            error: function(){
                console.log("Đã xảy ra lỗi khi cập nhật!");
            }
        });
    }

    
    function increase(element) {
        var inputElement = element.previousElementSibling;
        var currentValue = parseInt(inputElement.value);
        var maxQuantity = parseInt(inputElement.getAttribute('max')); // Lấy giá trị tối đa (tồn kho)

        if (currentValue < maxQuantity) {
            inputElement.value = currentValue + 1;
            updateQuantity(inputElement.dataset.productId, inputElement.dataset.cartIndex, currentValue + 1);
        } else {
            inputElement.value = 1;
            updateQuantity(inputElement.dataset.productId, inputElement.dataset.cartIndex);
            console.log("Số lượng vượt quá tồn kho!");
            // Hiển thị thông báo hoặc xử lý theo ý muốn của bạn khi số lượng vượt quá tồn kho
        }
    }

    function decrease(element) {
        var inputElement = element.nextElementSibling;
        var currentValue = parseInt(inputElement.value);
        var maxQuantity = parseInt(inputElement.getAttribute('max')); // Lấy giá trị tối đa (tồn kho)

        if (currentValue > 1) {
            inputElement.value = currentValue - 1;
            updateQuantity(inputElement.dataset.productId, inputElement.dataset.cartIndex, currentValue - 1);
        } else {
            inputElement.value = maxQuantity;
            updateQuantity(inputElement.dataset.productId, inputElement.dataset.cartIndex);
        }
    }

    // function increase(span) {
    //     var parentDiv = span.parentElement;
    //     var quantityInput = parentDiv.querySelector('.quantity');
    //     var currentValue = parseInt(quantityInput.value);
    //     var stock = parseInt(quantityInput.getAttribute('data-stock'));
        
    //     // Kiểm tra giới hạn tối đa là max kho
    //     if (currentValue < stock) {
    //         quantityInput.value = currentValue + 1;
    //     } else {
    //         quantityInput.value = 1;
    //     }
    // }

    // function decrease(span) {
    //     var parentDiv = span.parentElement;
    //     var quantityInput = parentDiv.querySelector('.quantity');
    //     var currentValue = parseInt(quantityInput.value);
    //     var stock = parseInt(quantityInput.getAttribute('data-stock'));

    //     // Kiểm tra giới hạn tối thiểu là 1
    //     if (currentValue > 1) {
    //         quantityInput.value = currentValue - 1;
    //     } else {
    //         quantityInput.value = stock;
    //     }
    // }

    function validateForm() {
        var checkboxes = document.getElementsByName('select_product[]');
        var checked = false;

        for (var i = 0; i < checkboxes.length; i++) {
            if (checkboxes[i].checked) {
                checked = true;
                break;
            }
        }

        if (!checked) {
            document.getElementById('messageLogin').style.display = 'block';
            document.getElementById('messageLogin').textContent = 'Vui lòng chọn ít nhất một sản phẩm để thanh toán';
            return false; // Ngăn chặn gửi form nếu không có checkbox nào được chọn
        }
        return true; // Gửi form nếu có ít nhất một checkbox được chọn
    }
    </script>