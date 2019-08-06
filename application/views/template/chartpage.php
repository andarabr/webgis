 <script type="text/javascript">
    // Load Charts and the corechart and Columnchart packages.
    google.charts.load('current', {'packages':['corechart']});

    // Draw the pie chart and Column chart when Charts is loaded.
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
         ['Tahun', 'lahan terbuka'],
          ['2014',  8788500  ],
          ['2015',  6069600  ],
          ['2016',  7090200  ],
          ['2017',  6757200  ],
          ['2018',  9983925  ],
        ]);

    var options = {title:'Lahan Terbuka',
                    width:550,
                    height:350,
                    legend: 'none',
                    hAxis: {title: 'Tahun', titleTextStyle: {color: 'black'}},
                    backgroundColor : '#f9f9f9',
                    colors: ['magenta'],
                    is3D:true 
                };
    var piechart = new google.visualization.ColumnChart(document.getElementById('ltbk_div'));
    piechart.draw(data, options);
    }
</script>

<script type="text/javascript">
    // Load Charts and the corechart and Columnchart packages.
    google.charts.load('current', {'packages':['corechart']});

    // Draw the pie chart and Column chart when Charts is loaded.
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
         ['Tahun', 'hutan'],
         ['2014',  118523700  ],
          ['2015',  107478900  ],
          ['2016',  109712700   ],
          ['2017',  99422100   ],
          ['2018',  101522700   ],
        ]);

    var options = {title:'Hutan',
                    width:550,
                    height:350,
                    legend: 'none',
                    hAxis: {title: 'Tahun', titleTextStyle: {color: 'black'}},
                    backgroundColor : '#f9f9f9',
                    colors: ['darkgreen'],
                    is3D:true };
    var piechart = new google.visualization.ColumnChart(document.getElementById('hutan_div'));
    piechart.draw(data, options);
    }
</script>

<script type="text/javascript">
    // Load Charts and the corechart and Columnchart packages.
    google.charts.load('current', {'packages':['corechart']});

    // Draw the pie chart and Column chart when Charts is loaded.
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
         ['Tahun', 'lahan terbangun'],
         ['2014',  1903500   ],
          ['2015',  1830600   ],
          ['2016',  2085500],
          ['2017',  2022300],
          ['2018',  2169675 ],
        ]);

    var options = {title:'Lahan Terbangun',
                    width:550,
                    height:350,
                    legend: 'none',
                    hAxis: {title: 'Tahun', titleTextStyle: {color: 'black'}},
                    backgroundColor : '#f9f9f9',
                    colors: ['red'],
                    is3D:true };
    var piechart = new google.visualization.ColumnChart(document.getElementById('ltbg_div'));
    piechart.draw(data, options);
    }
</script>

<script type="text/javascript">
    // Load Charts and the corechart and Columnchart packages.
    google.charts.load('current', {'packages':['corechart']});

    // Draw the pie chart and Column chart when Charts is loaded.
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
         ['Tahun', 'perkebunan'],
         ['2014',  50424300    ],
          ['2015',  60569100    ],
          ['2016',  54095200 ],
          ['2017',  60710400],
          ['2018',  62796825  ],
        ]);

    var options = {title:'Perkebunan',
                    width:550,
                    height:350,
                    legend: 'none',
                    hAxis: {title: 'Tahun', titleTextStyle: {color: 'black'}},
                    backgroundColor : '#f9f9f9',
                    colors: ['limegreen'],
                    is3D:true };
    var piechart = new google.visualization.ColumnChart(document.getElementById('pkb_div'));
    piechart.draw(data, options);
    }
</script>

<script type="text/javascript">
    // Load Charts and the corechart and Columnchart packages.
    google.charts.load('current', {'packages':['corechart']});

    // Draw the pie chart and Column chart when Charts is loaded.
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
         ['Tahun', 'badan air'],
         ['2014',  2558700     ],
          ['2015',  2781000    ],
          ['2016',  3186000 ],
          ['2017',  2483100 ],
          ['2018',  3415500   ],
        ]);

    var options = {title:'Badan Air',
                    width:550,
                    height:350,
                    legend: 'none',
                    hAxis: {title: 'Tahun', titleTextStyle: {color: 'black'}},
                    backgroundColor : '#f9f9f9',
                    colors: ['blue'],
                    is3D:true };
    var piechart = new google.visualization.ColumnChart(document.getElementById('bda_div'));
    piechart.draw(data, options);
    }
</script>

<script type="text/javascript">
    // Load Charts and the corechart and Columnchart packages.
    google.charts.load('current', {'packages':['corechart']});

    // Draw the pie chart and Column chart when Charts is loaded.
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
         ['Tahun', 'sawah'],
         ['2014',  2661300  ],
          ['2015',  3500100 ],
          ['2016',  6332400 ],
          ['2017',  5064300 ],
          ['2018',  4378500 ],
        ]);

    var options = {title:'Sawah',
                    width:550,
                    height:350,
                    legend: 'none',
                    hAxis: {title: 'Tahun', titleTextStyle: {color: 'black'}},
                    backgroundColor : '#f9f9f9',
                    colors: ['orange'],
                    is3D:true };
    var piechart = new google.visualization.ColumnChart(document.getElementById('sawah_div'));
    piechart.draw(data, options);
    }
</script>

<script type="text/javascript">
    // Load Charts and the corechart and Columnchart packages.
    google.charts.load('current', {'packages':['corechart']});

    // Draw the pie chart and Column chart when Charts is loaded.
    google.charts.setOnLoadCallback(drawChart);

    function drawChart() {
        var data = google.visualization.arrayToDataTable([
         ['Tahun', 'Awan'],
         ['2014',  166500   ],
          ['2015',  2797200  ],
          ['2016',  2524500 ],
          ['2017',  8567100  ],
          ['2018',  759375    ],
        ]);

    var options = {title:'Awan',
                    width:550,
                    height:350,
                    legend: 'none',
                    hAxis: {title: 'Tahun', titleTextStyle: {color: 'black'}},
                    backgroundColor : '#f9f9f9',
                    colors: ['gray'],
                    is3D:true };
    var piechart = new google.visualization.ColumnChart(document.getElementById('awan_div'));
    piechart.draw(data, options);
    }
</script>


<div class="col-md-9" style="padding-left:0px">
    <div class="row">
        <div class="col-md-6 graphcontainer" id="ltbk_div">
            <div class="" style="border: 0px solid #ccc"></div>
        </div>
        <div class="col-md-6 graphcontainer" id="hutan_div">
            <div class="" style="border: px solid #ccc"></div>
        </div>
        <div class="col-md-6 graphcontainer" id="ltbg_div">
            <div class="" style="border: px solid #ccc"></div>
        </div>
        <div class="col-md-6 graphcontainer" id="pkb_div">
            <div class="" style="border: px solid #ccc"></div>
        </div>
        <div class="col-md-6 graphcontainer" id="bda_div">
            <div class="" style="border: px solid #ccc"></div>
        </div>
        <div class="col-md-6 graphcontainer" id="sawah_div">
            <div class="" style="border: px solid #ccc"></div>
        </div>
        <div class="col-md-6 graphcontainer" id="awan_div">
            <div class="" style="border: px solid #ccc"></div>
        </div>
    </div>
</div>
<div class="col-md-3" style="border-left: 1px solid #EEEEEE; background-color:#fff; min-height:95vh">
        <br>
        <h5 align="center">GRAFIK TUTUPAN LAHAN</h5>
        <h5 align="center">SUB-DAS RINDU HATI</h5><hr>
        <!--<div class="bar"></div><p>DAS Air Bengkulu</p>-->
        <input type="checkbox" class="foo" id="hutancheck" checked><p>Hutan</p> 
        <input type="checkbox" class="foo" id="sawahcheck"  checked><p>Sawah</p> 
        <input type="checkbox" class="foo" id="pkbcheck"  checked><p>Perkebunan</p> 
        <input type="checkbox" class="foo" id="ltbgcheck"  checked><p>Lahan Terbangun</p> 
        <input type="checkbox" class="foo" id="ltbkcheck"  checked><p>Lahan Terbuka</p> 
        <input type="checkbox" class="foo" id="bdacheck"  checked><p>Badan Air</p> 
        <input type="checkbox" class="foo" id="awancheck"  checked><p>Awan</p> 
        <hr>     
    </div>



<script>
    $("#hutancheck").click(function(){
        $("#hutan_div").toggle();
    });
    $("#sawahcheck").click(function(){
        $("#sawah_div").toggle();
    });
    $("#pkbcheck").click(function(){
        $("#pkb_div").toggle();
    });
    $("#ltbgcheck").click(function(){
        $("#ltbg_div").toggle();
    });
    $("#ltbkcheck").click(function(){
        $("#ltbk_div").toggle();
    });
    $("#bdacheck").click(function(){
        $("#bda_div").toggle();
    });
    $("#awancheck").click(function(){
        $("#awan_div").toggle();
    });
</script>
