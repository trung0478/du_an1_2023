<head>
    <style>
        .chart{
            margin: 50px 250px;
            
        }
        
    </style>
</head>
<div class="thongke">
    <h3 class="alert">
        THỐNG KÊ SẢN PHẨM THEO DANH MỤC
    </h3>
        <div class="chart">
            <div id="myChart" style="width:1000px; max-width:1000px; height:500px;">>
                </div>

                    <script>
                        google.charts.load('current', {
                            'packages': ['corechart']
                        });
                        google.charts.setOnLoadCallback(drawChart);
                        function drawChart() {
                            var data = google.visualization.arrayToDataTable([

                                ['Danh Mục', 'Số Lượng Sản Phẩm'],
                                <?php
                                $i=1;
                                    foreach ($statistical_category as $tk){
                                        extract($tk);
                                        echo "['".$tk['ten_lsp']."',".$tk['so_luong']."],";
                                        $i+=1;
                                    }
                                ?>
                                
                            ]);

                            var options = {
                                title: 'Thống kê sản phẩm theo danh mục',   
                                is3D: true
                            };

                            var chart = new google.visualization.PieChart(document.getElementById('myChart'));
                            chart.draw(data, options);
                        }
                    </script>

                </div>
            </div>
        </div>
</div>