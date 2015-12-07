<div class="row">
  <div class="col-lg-2 col-md-3">
      <!-- Left column -->
     <strong><i class="glyphicon glyphicon-link"></i>  Employee Trending</strong>
       <hr>
    </div>
  <div class="col-md-9"> 
<div class="col-md-8 col-md-offset">
<a href="<?php echo $wr;?>dashboards" class="btn btn-default">Back to Dashboards</a>
</div><br><br>

          <div class="col-md-12">
           <div class="panel panel-default high" style="min-height:600px;">
                    <div class="panel-heading"><h4>Trending</h4></div>
                    <!--<div class="panel-body" id="chart_div" ></div>-->
              <script type="text/javascript">
               <style>
               {
                .text.element.style{
                  display:none;
                }
               }
               </style>     
               </script>
<div class="panel-body" id="container" style="min-width: 310px; height: 500px; margin: 0 auto"></div>

            </div>
          </div>
  </div>
</div>

 <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>

    <script type="text/javascript" src="https://www.google.com/jsapi?autoload={'modules':[{'name':'visualization','version':'1.1','packages':['line', 'corechart']}]}"></script>
     <!--<button id="change-chart">Change to Classic</button>-->
  <br><br>
  <div id=""></div>
   
    <!--<script>
    google.load('visualization', '1.1', {packages: ['line', 'corechart']});
    google.setOnLoadCallback(drawChart);

    function drawChart() {

      var button = document.getElementById('change-chart');
      var chartDiv = document.getElementById('chart_div');

      var data = new google.visualization.DataTable();
      data.addColumn('date', 'Month');
      data.addColumn('number', "Others");
      data.addColumn('number', "Health Aids");
     // data.addColumn('number', "Administration");
    //  data.addColumn('number', "Social Services");
    //  data.addColumn('number', "Nursing");
     // data.addColumn('number', "Drivers");

      data.addRows([
        [new Date(2015, 0),  -.5,  5.7],
        [new Date(2015, 1),   .4,  8.7],
        [new Date(2015, 2),   .5,   12],
        [new Date(2015, 3),  2.9, 15.3],
        [new Date(2015, 4),  6.3, 18.6],
        [new Date(2015, 5),    9, 20.9],
        [new Date(2015, 6), 10.6, 19.8],
        [new Date(2015, 7), 10.3, 16.6],
        [new Date(2015, 8),  7.4, 13.3],
        [new Date(2015, 9),  4.4,  9.9],
        [new Date(2015, 10), 1.1,  6.6],
        [new Date(2015, 11), -.2,  4.5]
      ]);

      var materialOptions = {
        chart: {
         // title: 'Average Temperatures and Daylight in Iceland Throughout the Year'
        },
        width: 800,
        height: 500,
        series: {
          // Gives each series an axis name that matches the Y-axis below.
          0: {axis: 'Temps'},
          1: {axis: 'Daylight'}
        },
        axes: {
          // Adds labels to each axis; they don't have to match the axis names.
          y: {
            Temps: {label: 'Staff '},
            //Daylight: {label: 'Daylight'}
          }
        }
      };

      var classicOptions = {
        title: 'Average Temperatures and Daylight in Iceland Throughout the Year',
        width: 900,
        height: 500,
        // Gives each series an axis that matches the vAxes number below.
        series: {
          0: {targetAxisIndex: 0},
          1: {targetAxisIndex: 1}
        },
        vAxes: {
          // Adds titles to each axis.
          0: {title: 'Temps (Celsius)'},
          1: {title: 'Daylight'}
        },
        hAxis: {
          ticks: [new Date(2015, 0), new Date(2015, 1), new Date(2015, 2), new Date(2015, 3),
                  new Date(2015, 4),  new Date(2015, 5), new Date(2015, 6), new Date(2015, 7),
                  new Date(2015, 8), new Date(2015, 9), new Date(2015, 10), new Date(2015, 11),

                 ]
        },
        vAxis: {
          viewWindow: {
            max: 30
          }
        }
      };

      function drawMaterialChart() {
        var materialChart = new google.charts.Line(chartDiv);
        materialChart.draw(data, materialOptions);
        button.innerText = 'Change to Classic';
        button.onclick = drawClassicChart;
      }

      drawMaterialChart();

    }
    </script>-->

<script>
$(function () {
    $('#container').highcharts({
        title: {
            text: 'Monthly Average Employee Trending',
            //x: -20 //center
        },
        subtitle: {
            text: 'Source: prodigysmartflow3.com',
           // x: -20
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun',
                'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
        },
        yAxis: {
            title: {
                text: '<b>Staff</b>'
            },
            plotLines: [{
                value: 0,
                width: 1,
                color: '#808080'
            }]
        },
        tooltip: {
            valueSuffix: ''
        },
        legend: {
            layout: 'vertical',
            align: 'right',
            verticalAlign: 'middle',
            borderWidth: 0
        },
        series: [{
            name: 'Drivers',
            data: [0, 5, 10, 15, 20, 25, 16, 4, 1, 3, 8, 10]
        }, {
            name: 'Nursing',
            data: [0, 25, 1, 15, 2, 5, 3, 25, 16, 4, 1, 3]
        }, {
            name: 'Social Services',
            data: [0, 5, 3, 15, 20, 25, 0, 25, 16, 4, 1, 3]
        },
         {
            name: 'Administration',
            data: [0, 5, 7, 9, 20, 25, 25, 16, 4, 1, 3, 30]
        },
                 {
            name: 'Health Aids',
            data: [0, 5, 6, 25, 16, 4, 1, 3, 15, 20, 25, 0]
        },
         {
            name: 'Others',
            data: [25, 16, 4, 1, 3, 0, 1, 10, 9, 20, 25, 10]
        }]
    });
});
</script>