<!-- checkout area start -->
<div class="checkout-area pt-100px pb-100px">
    <div class="container">
        <div class="row">
            <div class="col-lg-7">
                <div class="billing-info-wrap">
                    <h3>Chi tiết thanh toán</h3>
                    <?php
                    if (isset($one_account) && is_array($one_account)) {
                        extract($one_account);
                    }
                    ?>
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Họ tên</label>
                                    <input type="text" name="account_name" value="<?php echo (isset($ho_ten) && $ho_ten != "") ? $ho_ten : ""; ?>" placeholder="Nhập Họ tên*" />
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="billing-info mb-20px">
                                    <label>Địa chỉ</label>
                                    <input type="text" name="account_address" value="<?php echo (isset($dia_chi) && $dia_chi != "") ? $dia_chi : ""; ?>" placeholder="Nhập Địa Chỉ*" />
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Điện thoại</label>
                                    <input id="myInput" type="text" name="account_sdt" value="<?php echo (isset($sdt) && $sdt != "") ? $sdt : ""; ?>" placeholder="Nhập Số Điện Thoại*" />
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="billing-info mb-20px">
                                    <label>Email</label>
                                    <input type="text" name="account_email" value="<?php echo (isset($email) && $email != "") ? $email : ""; ?>" placeholder="Nhập Email" />
                                </div>
                            </div>
                        </div>
                        <!-- <div class="checkout-account mb-30px">
                            <input class="checkout-toggle2 w-auto h-auto" type="checkbox" />
                            <label>Tạo tài khoản?</label>
                        </div>
                        <div class="checkout-account-toggle open-toggle2 mb-30">
                            <input placeholder="Email address" type="email" />
                            <input placeholder="Password" type="password" />
                            <button class="btn-hover checkout-btn" type="submit">register</button>
                        </div> -->
                        <div class="additional-info-wrap">
                            <h4>Thông tin thêm</h4>
                            <div class="additional-info">
                                <label>Ghi chú </label>
                                <textarea placeholder="Ghi chú về đơn đặt hàng của bạn, ví dụ ghi chú đặc biệt khi giao hàng. " name="message"></textarea>
                            </div>
                        </div>
                        <input style="width: 26%; background-color: #FF7004;" name="save_info" type="button" class="btn-hover text-center text-white border-0" value="Lưa thông tin" onclick="toggleValue()">
                    </form>
                    <!-- <div class="checkout-account mt-25">
                            <input class="checkout-toggle w-auto h-auto" type="checkbox" />
                            <label>Gửi đến một người khác?</label>
                        </div>
                        <div class="different-address open-toggle mt-30px">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Tên</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Họ</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-select mb-20px">
                                        <label>Quốc gia</label>
                                        <select>
                                            <option>Chọn một quốc gia</option>
                                            <option>Việt Nam</option>
                                            <option>Bahamas</option>
                                            <option>Bahrain</option>
                                            <option>Bangladesh</option>
                                            <option>Barbados</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Địa chỉ nhà</label>
                                        <input class="billing-address" placeholder="Số nhà, Tên đường" type="text" />
                                        <input placeholder="Một phòng phù hợp..." type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="billing-info mb-20px">
                                        <label>Quận / Huyện</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Thị trấn / Thành phố</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Điện thoại</label>
                                        <input type="text" />
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="billing-info mb-20px">
                                        <label>Email </label>
                                        <input type="text" />
                                    </div>
                                </div>
                            </div>
                        </div> -->
                </div>
            </div>
            <div class="col-lg-5 mt-md-30px mt-lm-30px ">
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
                            <div class="payment-method">
                                <div class="payment-accordion element-mrg">
                                    <div id="faq" class="panel-group">
                                        <!-- <div class="panel panel-default single-my-account m-0">
                                        <div class="panel-heading my-account-title">
                                            <h4 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-1" class="collapsed" aria-expanded="true">Phương thức thanh toán</a>
                                            </h4>
                                        </div>
                                        <div id="my-account-1" class="panel-collapse collapse show" data-bs-parent="#faq">

                                            <div class="panel-body">
                                              
                                            </div>
                                        </div>
                                    </div> -->
                                        <!-- <div class="panel panel-default single-my-account m-0">
                                            <div class="panel-heading my-account-title">
                                                <h4 class="panel-title"><a data-bs-toggle="collapse" href="#my-account-2" aria-expanded="false" class="collapsed">Kiểm tra thanh toán</a></h4>
                                            </div>
                                            <div id="my-account-2" class="panel-collapse collapse" data-bs-parent="#faq">

                                                <div class="panel-body">
                                                    <p>Vui lòng gửi séc đến Tên cửa hàng, Đường cửa hàng, Thị trấn cửa hàng, Tiểu bang / Quận của cửa hàng, Mã bưu điện của cửa hàng.</p>
                                                </div>
                                            </div>
                                        </div> -->
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
                            </div>
                        </div>
                        <div class="Place-order mt-25">
                            <input style="background-color: #FF7004;" name="checkout" type="submit" class="btn-hover text-center text-white border-0" value="Đặt hàng">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- checkout area end -->
<script>
    const checkboxes = document.querySelectorAll('input[type="radio"]');
    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('change', function() {
            if (this.checked) {
                checkboxes.forEach(function(otherCheckbox) {
                    if (otherCheckbox !== checkbox) {
                        otherCheckbox.checked = false;
                    }
                });
            }
        });
    });

    function toggleValue() {
        var button = document.querySelector('[name="save_info"]');
        
        var input = document.getElementById('myInput');
        
        // Chuyển đổi giá trị giữa "Lưu" và "Sửa"
        button.value = (button.value === "Lưu") ? "Sửa" : "Lưu";

        // Nếu giá trị là "Sửa", disable trường nhập liệu; ngược lại, bật lại trường nhập liệu
        input.disabled = (button.value === "Sửa");
    }
</script>