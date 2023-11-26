<div class="checkout-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div  class="col-lg-6 mt-md-30px mt-lm-30px">
                <div class="your-order-area">
                    <h3>Đặt hàng thành công</h3>
                    <div class="your-order-wrap gray-bg-4 mt-2 mb-3">
                        <h4 class="mb-4">Thông tin vận chuyển</h4>
                        <p class="mb-2"> 
                            <span>Mã đơn hàng: </span><span>#1111</span> 
                        </p>
                        <p class="mb-2">
                            <span>Họ tên: </span><span>đặng quôcs trung </span>
                        </p>
                        <p class="mb-2">
                            <span>Số điện thoại: </span><span>đặng quôcs trung </span>
                        </p>
                        <p class="mb-2">
                            <span>Địa chỉ: </span><span>đặng quôcs trung </span>
                        </p>
                        <p class="mb-2">
                            <span>Phương thức thanh toán: </span><span>đặng quôcs trung </span>
                        </p>
                    </div>
                    <div class="d-flex justify-content-end">

                        <a href="#" style="padding: 12px 20px;  background-color: #FF7004;" class="text-center text-white ">Tiếp tục mua hàng</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 mt-md-30px mt-lm-30px ">
                <div class="your-order-area">
                    <h3>Đơn hàng của bạn</h3>
                    <form action="?act=checkout" method="post">
                        <div class="your-order-wrap gray-bg-4">
                            <div class="your-order-product-info">
                                <div class="your-order-top">
                                    <ul>
                                        <li>Sản phẩm</li>
                                        <li>Tổng cộng</li>
                                    </ul>
                                </div>
                                <div class="your-order-middle">
                                    <ul>
                                        <?php
                                        $tong = 0;
                                        $ship = 30000;
                                        foreach ($_SESSION['mycart'] as  $value) :
                                            $thanhtien = $value[3] * $value[4];
                                            $tong += $thanhtien;
                                        ?>
                                            <li><span class="order-middle-left"><?= $value[1] ?> (Màu: <?= $value[5] ?>, Size: <?= $value[6] ?>) X <?= $value[4] ?> </span> <span class="order-price"><?= number_format($thanhtien, '0', '.', '.') ?> vnd </span></li>
                                        <?php endforeach; ?>
                                    </ul>

                                </div>

                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Tổng phụ</li>
                                        <li><?= number_format($tong, '0', '.', '.') ?>vnd</li>
                                    </ul>
                                </div>

                                <div class="your-order-bottom">
                                    <ul>
                                        <li class="your-order-shipping">Phí vận chuyển</li>
                                        <li><?= number_format($ship, '0', '.', '.') ?>vnd</li>
                                    </ul>
                                </div>

                                <div class="your-order-total">
                                    <ul>
                                        <li class="order-total">Tổng chính</li>
                                        <li><?= number_format($ship + $tong, '0', '.', '.') ?>vnd</li>
                                    </ul>
                                </div>
                            </div>
                            <!-- <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div id="faq" class="panel-group">
                                        <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-3">Phương thức thanh toán</a></h4>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input style="width: 20px;" type="radio" name="checkout_delivery" />
                                                <label class="mb-0 mx-2">Thanh toán khi nhận hàng</label>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input style="width: 20px;" type="radio" name="redirect" />
                                                <span class="mb-0 mx-2">Thanh toán VNPay</span>
                                            </div>

                                            <div class="d-flex align-items-center">
                                                <input style="width: 20px;" type="radio" name="payUrl" />
                                                <span class="mb-0 mx-2">Thanh toán Momo</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> -->
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>