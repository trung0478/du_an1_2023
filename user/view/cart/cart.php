<!-- Cart Area Start -->
<div class="cart-main-area pt-100px pb-100px">
        <div class="container">
            <h3 class="cart-page-title">Giỏ hàng</h3>
            <?php if (isset($message)) {
                    echo $message;
                }
            ?>
            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                    <form action="#">
                        <div class="table-content table-responsive cart-table-content">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Hình</th>
                                        <th>Tên sản phẩm</th>
                                        <th>Đơn giá</th>
                                        <th>Số lượng</th>
                                        <th>Màu sắc</th>
                                        <th>Kích thước</th>
                                        <th>Thành tiền</th>
                                        <th>Hoạt động</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $sum = 0;
                                    $i = 0;
                                    foreach($_SESSION['mycart'] as $cart){
                                        $img = $link_img . $cart[2];
                                        $thanhtien = $cart[3] * $cart[4];
                                        $sum += $thanhtien;
                                        
                                        echo'
                                        <tr>
                                        <td class="product-thumbnail">
                                            <a href="#"><img class="img-responsive ml-15px" src="'.$img.'" alt="" /></a>
                                        </td>
                                        <td class="product-name"><a href="#">'.$cart[1].'</a></td>
                                        <td class="product-price-cart"><span class="amount">'.number_format($cart[3], 0, '.', '.').' vnđ</span></td>
                                        <td class="product-quantity">
                                            <div class="cart-plus-minus">
                                                <input class="cart-plus-minus-box" type="text" name="qtybutton" value="'.$cart[4].'" />
                                            </div>
                                        </td>
                                       
                                        <td class="product-subtotal">'.$cart[5].'</td>
                                        <td class="product-subtotal">'.$cart[6].'</td>
                                        <td class="product-subtotal">'.number_format($thanhtien, 0, '.', '.').' vnđ</td>
                                        <td class="product-remove">
                                            <a href="index.php?act=del_cart&idcart='.$i.'"><i class="icon-close"></i></a>
                                        </td>
                                    </tr>';
                                    $i++;
                                    }
                                    echo '
                                    <tr>
                                        <td class="product-thumbnail " colspan = "6">Tổng Đơn hàng</td>
                                        
                                        <td class="product-subtotal">'.number_format($sum, 0, '.', '.').' vnđ</td>
                                    </tr>
                                    ';

                                    ?>
                                    
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
                                        <a href="index.php?act=viewcart" style="margin-right:40px">Cập nhật giỏ hàng</a>
                                        <a href="index.php?act=del_cart">Xóa giỏ hàng</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <div class="row">
                        
                        <div class="col-lg-4 col-md-6 mb-lm-30px" style="width: 50%;">
                            <div class="discount-code-wrapper">
                                <div class="title-wrap">
                                    <h4 class="cart-bottom-title section-bg-gray">Sử dụng phiếu giảm giá</h4>
                                </div>
                                <div class="discount-code">
                                    <p>Nhập mã phiếu của bạn nếu có.</p>
                                    <form action="index.php?act=discount">
                                        <input type="text" required="" name="name" />
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

                                    echo '<h5>Tổng số sản phẩm <span>' . $total_quantity . '</span></h5>';
                                    echo '
                                    <div class="total-shipping">
                                        <h5>Tổng số vận chuyển</h5>
                                        <ul>
                                            <li>Tiêu chuẩn <span>' . number_format($sum, 0, '.', '.') . ' vnđ</span></li>
                                            <li>Vận chuyển <span>' . number_format($shippingFee, 0, '.', '.') . ' vnđ</span></li>
                                        </ul>
                                    </div>
                                    <h4 class="grand-totall-title">Tổng cộng <span>' . number_format($total, 0, '.', '.') . ' vnđ</span></h4>
                                    <a href="index.php?act=checkout_info">Tiến hành thanh toán</a>';
                                    ?>
                                    
                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Cart Area End -->