<footer class="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">© 2023 Furns Made With By LTH Furniture.</div>
        </div>
    </div>
</footer>
<!-- End Footer -->
<!-- jQuery  -->
<!-- <script src="../admin/public/assets_admin/js/jquery.min.js"></script> -->

<!-- <script src="../admin/public/assets_admin/js/popper.min.js"></script>
    <script src="../admin/public/assets_admin/js/bootstrap.min.js"></script>
    <script src="../admin/public/assets_admin/js/modernizr.min.js"></script>
    <script src="../admin/public/assets_admin/js/waves.js"></script>
    <script src="../admin/public/assets_admin/js/jquery.slimscroll.js"></script>
    <script src="../admin/public/assets_admin/js/jquery.nicescroll.js"></script>
    <script src="../admin/public/assets_admin/js/jquery.scrollTo.min.js"></script> -->
<!-- KNOB JS -->
<!-- <script src="../admin/public/assets_admin/plugins/jquery-knob/excanvas.js"></script>
    <script src="../admin/public/assets_admin/plugins/jquery-knob/jquery.knob.js"></script>-->
<!-- <script src="../admin/public/assets_admin/plugins/chart.js/chart.min.js"></script>  -->
<!-- <script src="../admin/public/assets_admin/pages/dashboard.js"></script> -->
<!-- App js -->
<!-- <script src="../admin/public/assets_admin/js/app.js"></script> -->

<!-- validate form -->
<script>
    $(document).ready(function() {
        $("#myForm").validate({
            rules: {
                id_catalog: "required",
                name_catalog: "required",
                name: "required",
                name_voucher: "required",
                discount: {
                    required: true,
                    number: true,
                    min: 1
                },
                quantity: {
                    required: true,
                    number: true,
                    min: 1
                },
            },
            messages: {
                id_catalog: "Vui lòng chọn loại sản phẩm.",
                name_catalog: "Vui lòng nhập tên danh mục.",
                name: "Vui lòng nhập tên sản phẩm.",
                name_voucher: "Vui lòng nhập tên giảm giá.",
                discount: {
                    required: "Vui lòng nhập giá giảm.",
                    number: "Vui lòng nhập số hợp lệ.",
                    min: "Vui lòng nhập số dương."
                },
                quantity:  {
                    required: "Vui lòng nhập số lượng.",
                    number: "Vui lòng nhập số hợp lệ.",
                    min: "Vui lòng nhập số dương."
                },
            },
            errorPlacement: function(error, element) {
                error.insertAfter(element); // Hiển thị thông báo lỗi dưới ô input
            }
        });
    });
</script>
<script>
    Highcharts.chart('container', {

title: {
    text: 'Thống kê doanh thu theo năm',
    align: 'left'
},


yAxis: {
    title: {
        text: 'Số lượng nhân viên'
    }
},

xAxis: {
    categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun','Jul', 'Aug', 'Sep','Oct','Nov', 'Dec']
},

legend: {
    layout: 'vertical',
    align: 'right',
    verticalAlign: 'middle'
},

plotOptions: {
    series: {
        label: {
            connectorAllowed: false
        },
        pointStart: 2010
    }
},

series: [{
    name: 'Installation & Developers',
    data: [43934, 48656, 65165, 81827, 112143, 142383,
        171533, 165174, 155157, 161454, 154610]
}, {
    name: 'Manufacturing',
    data: [24916, 37941, 29742, 29851, 32490, 30282,
        38121, 36885, 33726, 34243, 31050]
}, {
    name: 'Sales & Distribution',
    data: [11744, 30000, 16005, 19771, 20185, 24377,
        32147, 30912, 29243, 29213, 25663]
}, {
    name: 'Operations & Maintenance',
    data: [null, null, null, null, null, null, null,
        null, 11164, 11218, 10077]
}, {
    name: 'Other',
    data: [21908, 5548, 8105, 11248, 8989, 11816, 18274,
        17300, 13053, 11906, 10073]
}],

responsive: {
    rules: [{
        condition: {
            maxWidth: 500
        },
        chartOptions: {
            legend: {
                layout: 'horizontal',
                align: 'center',
                verticalAlign: 'bottom'
            }
        }
    }]
}

});
</script>
</body>
<!-- Mirrored from mannatthemes.com/zoogler/horizontal/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 12 Nov 2023 04:35:37 GMT -->

</html>