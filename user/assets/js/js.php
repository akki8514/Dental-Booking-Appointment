<?php

echo $sel1="select * from `patient` where date BETWEEN '2020-01-01 12:38:28' and '2020-01-31 12:39:02'";
$qry1=mysqli_query($con,$sel1);
$jan=mysqli_num_rows($qry1);
echo $jan;

echo $sel2="select * from `patient` where date BETWEEN '2020-02-01 12:38:28' and '2020-02-28 12:39:02'";
$qry2=mysqli_query($con,$sel2);
$feb=mysqli_num_rows($qry2);

$sel3="select * from `patient` where date BETWEEN '2020-03-01 12:38:28' and '2020-03-31 12:39:02'";
$qry3=mysqli_query($con,$sel3);
$mar=mysqli_num_rows($qry3);

$sel4="select * from `patient` where date BETWEEN '2020-04-01 12:38:28' and '2020-04-30 12:39:02'";
$qry4=mysqli_query($con,$sel4);
$apr=mysqli_num_rows($qry4);

$sel5="select * from `patient` where date BETWEEN '2020-04-01 12:38:28' and '2020-04-31 12:39:02'";
$qry5=mysqli_query($con,$sel5);
$may=mysqli_num_rows($qry5);

$sel6="select * from `patient` where date BETWEEN '2020-05-01 12:38:28' and '2020-05-30 12:39:02'";
$qry6=mysqli_query($con,$sel6);
$jun=mysqli_num_rows($qry6);

$sel7="select * from `patient` where date BETWEEN '2020-06-01 12:38:28' and '2020-06-31 12:39:02'";
$qry7=mysqli_query($con,$sel7);
$jul=mysqli_num_rows($qry7);

$sel8="select * from `patient` where date BETWEEN '2020-07-01 12:38:28' and '2020-07-31 12:39:02'";
$qry8=mysqli_query($con,$sel8);
$aug=mysqli_num_rows($qry8);



/*$sel11="select * from `history` where date BETWEEN '2020-01-01 12:38:28' and '2020-01-31 12:39:02'";
$qry11=mysqli_query($con,$sel11);
$jan1=mysqli_num_rows($qry11);

$sel12="select * from `history` where date BETWEEN '2020-02-01 12:38:28' and '2020-02-28 12:39:02'";
$qry12=mysqli_query($con,$sel12);
$feb1=mysqli_num_rows($qry12);

$sel13="select * from `history` where date BETWEEN '2020-03-01 12:38:28' and '2020-03-31 12:39:02'";
$qry13=mysqli_query($con,$sel13);
$mar1=mysqli_num_rows($qry13);

$sel14="select * from `history` where date BETWEEN '2020-04-01 12:38:28' and '2020-04-30 12:39:02'";
$qry14=mysqli_query($con,$sel14);
$apr1=mysqli_num_rows($qry14);

$sel15="select * from `history` where date BETWEEN '2020-04-01 12:38:28' and '2020-04-31 12:39:02'";
$qry15=mysqli_query($con,$sel15);
$may1=mysqli_num_rows($qry15);

$sel16="select * from `history` where date BETWEEN '2020-05-01 12:38:28' and '2020-05-30 12:39:02'";
$qry16=mysqli_query($con,$sel16);
$jun1=mysqli_num_rows($qry16);

$sel17="select * from `history` where date BETWEEN '2020-06-01 12:38:28' and '2020-06-31 12:39:02'";
$qry17=mysqli_query($con,$sel17);
$jul1=mysqli_num_rows($qry17);

$sel18="select * from `history` where date BETWEEN '2020-07-01 12:38:28' and '2020-07-31 12:39:02'";
$qry18=mysqli_query($con,$sel18);
$aug1=mysqli_num_rows($qry18);



$sel21="select * from `complaint` where date BETWEEN '2020-01-01 12:38:28' and '2020-01-31 12:39:02'";
$qry21=mysqli_query($con,$sel21);
$jan2=mysqli_num_rows($qry21);

$sel22="select * from `complaint` where date BETWEEN '2020-02-01 12:38:28' and '2020-02-28 12:39:02'";
$qry22=mysqli_query($con,$sel22);
$feb2=mysqli_num_rows($qry22);

$sel23="select * from `complaint` where date BETWEEN '2020-03-01 12:38:28' and '2020-03-31 12:39:02'";
$qry23=mysqli_query($con,$sel23);
$mar2=mysqli_num_rows($qry23);

$sel24="select * from `complaint` where date BETWEEN '2020-04-01 12:38:28' and '2020-04-30 12:39:02'";
$qry24=mysqli_query($con,$sel24);
$apr2=mysqli_num_rows($qry24);

$sel25="select * from `complaint` where date BETWEEN '2020-04-01 12:38:28' and '2020-04-31 12:39:02'";
$qry25=mysqli_query($con,$sel25);
$may2=mysqli_num_rows($qry25);

$sel26="select * from `complaint` where date BETWEEN '2020-05-01 12:38:28' and '2020-05-30 12:39:02'";
$qry26=mysqli_query($con,$sel26);
$jun2=mysqli_num_rows($qry26);

$sel27="select * from `complaint` where date BETWEEN '2020-06-01 12:38:28' and '2020-06-31 12:39:02'";
$qry27=mysqli_query($con,$sel27);
$jul2=mysqli_num_rows($qry27);

$sel28="select * from `complaint` where date BETWEEN '2020-07-01 12:38:28' and '2020-07-31 12:39:02'";
$qry28=mysqli_query($con,$sel28);
$aug2=mysqli_num_rows($qry28);  */
?>
<script type="text/javascript">
(function($) {
  'use strict';
  $(function() {

    if ($('#cash-deposits-chart').length) {
      var cashDepositsCanvas = $("#cash-deposits-chart").get(0).getContext("2d");
      var data = {
        labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug"],
        datasets: [
          {
            label: 'Patient',
            data: [<?php echo $jan?>,<?php echo $feb?>, <?php echo $mar?>, <?php echo $apr?>,<?php echo $may?>, <?php echo $jun?>, <?php echo $jul?>, <?php echo $aug?>],
            borderColor: [
              '#ff4747'
            ],
            borderWidth: 2,
            fill: false,
            pointBackgroundColor: "#fff"
          },
          {
            label: 'Women secured',
            /*data: [<?php echo $jan1?>,<?php echo $feb1?>, <?php echo $mar1?>, <?php echo $apr1?>,<?php echo $may1?>, <?php echo $jun1?>, <?php echo $jul1?>, <?php echo $aug1?>],
            borderColor: [
              '#4d83ff'
            ], */
            borderWidth: 2,
            fill: false,
            pointBackgroundColor: "#fff"
          },
          {
            label: 'Complaints',
           /* data: [<?php echo $jan2?>,<?php echo $feb2?>, <?php echo $mar2?>, <?php echo $apr2?>,<?php echo $may2?>, <?php echo $jun2?>, <?php echo $jul2?>, <?php echo $aug2?>],
            borderColor: [
              '#ffc100'
            ], */
            borderWidth: 2,
            fill: false,
            pointBackgroundColor: "#fff"
          }
        ]
      };
      var options = {
        scales: {
          yAxes: [{
            display: true,
            gridLines: {
              drawBorder: false,
              lineWidth: 1,
              color: "#e9e9e9",
              zeroLineColor: "#e9e9e9",
            },
            ticks: {
              min: 0,
              max: 100,
              stepSize: 20,
              fontColor: "#6c7383",
              fontSize: 16,
              fontStyle: 300,
              padding: 15
            }
          }],
          xAxes: [{
            display: true,
            gridLines: {
              drawBorder: false,
              lineWidth: 1,
              color: "#e9e9e9",
            },
            ticks : {
              fontColor: "#6c7383",
              fontSize: 16,
              fontStyle: 300,
              padding: 15
            }
          }]
        },
        legend: {
          display: false
        },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="dashboard-chart-legend">');
          for(var i=0; i < chart.data.datasets.length; i++) {
            text.push('<li><span style="background-color: ' + chart.data.datasets[i].borderColor[0] + ' "></span>');
            if (chart.data.datasets[i].label) {
              text.push(chart.data.datasets[i].label);
            }
          }
          text.push('</ul>');
          return text.join("");
        },
        elements: {
          point: {
            radius: 3
          },
          line :{
            tension: 0
          }
        },
        stepsize: 1,
        layout : {
          padding : {
            top: 0,
            bottom : -10,
            left : -10,
            right: 0
          }
        }
      };
      var cashDeposits = new Chart(cashDepositsCanvas, {
        type: 'line',
        data: data,
        options: options
      });
      document.getElementById('cash-deposits-chart-legend').innerHTML = cashDeposits.generateLegend();
    }

   /* if ($('#total-sales-chart').length) {
      var totalSalesChartCanvas = $("#total-sales-chart").get(0).getContext("2d");

      var data = {
        labels: ["0", "1", "2", "3", "4", "5", "6", "7", "8", "9",'10', '11','12', '13', '14', '15','16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26','27','28','29', '30','31', '32', '33', '34', '35', '36', '37','38', '39', '40'],
        datasets: [
          {
            label: '2019',
            data: [<?php echo $jan?>],
            borderColor: [
              'transparent'
            ],
            borderWidth: 2,
            fill: true,
            backgroundColor: "rgba(47,91,191,0.77)"
          },
          {
            label: '2018',
            data: [35, 28, 32, 42, 44, 46, 42, 50, 48, 30, 35, 48, 42, 40, 54, 58, 56, 55, 59, 58, 57, 60, 66, 54, 38, 40, 42, 44, 42, 43, 42, 38, 43, 41, 43, 50, 58 ,58, 68, 72, 72 ],
            borderColor: [
              'transparent'
            ],
            borderWidth: 2,
            fill: true,
            backgroundColor: "rgba(77,131,255,0.77)"
          },
          {
            label: 'Past years',
            data: [98, 88, 92, 90, 98, 98, 90, 92, 78, 88, 84, 76, 80, 72, 74, 74, 88, 80, 72, 62, 62, 72, 72, 78, 78, 72, 75, 78, 68, 68, 60, 68, 70, 75, 70, 80, 82, 78, 78, 84, 82 ],
            borderColor: [
              'transparent'
            ],
            borderWidth: 2,
            fill: true,
            backgroundColor: "rgba(77,131,255,0.43)"
          }
        ]
      };
      var options = {
        scales: {
          yAxes: [{
            display: false,
            gridLines: {
              drawBorder: false,
              lineWidth: 1,
              color: "#e9e9e9",
              zeroLineColor: "#e9e9e9",
            },
            ticks: {
              display : true,
              min: 0,
              max: 100,
              stepSize: 10,
              fontColor: "#6c7383",
              fontSize: 16,
              fontStyle: 300,
              padding: 15
            }
          }],
          xAxes: [{
            display: false,
            gridLines: {
              drawBorder: false,
              lineWidth: 1,
              color: "#e9e9e9",
            },
            ticks : {
              display: true,
              fontColor: "#6c7383",
              fontSize: 16,
              fontStyle: 300,
              padding: 15
            }
          }]
        },
        legend: {
          display: false
        },
        legendCallback: function(chart) {
          var text = [];
          text.push('<ul class="dashboard-chart-legend mb-0 mt-4">');
          for(var i=0; i < chart.data.datasets.length; i++) {
            text.push('<li><span style="background-color: ' + chart.data.datasets[i].backgroundColor + ' "></span>');
            if (chart.data.datasets[i].label) {
              text.push(chart.data.datasets[i].label);
            }
          }
          text.push('</ul>');
          return text.join("");
        },
        elements: {
          point: {
            radius: 0
          },
          line :{
            tension: 0
          }
        },
        stepsize: 1,
        layout : {
          padding : {
            top: 0,
            bottom : 0,
            left : 0,
            right: 0
          }
        }
      };
      var totalSalesChart = new Chart(totalSalesChartCanvas, {
        type: 'line',
        data: data,
        options: options
      });
      document.getElementById('total-sales-chart-legend').innerHTML = totalSalesChart.generateLegend();
    } */

    $('#recent-purchases-listing').DataTable({
      "aLengthMenu": [
        [5, 10, 15, -1],
        [5, 10, 15, "All"]
      ],
      "iDisplayLength": 10,
      "language": {
        search: ""
      },
      searching: false, paging: false, info: false
    });

  });
})(jQuery);

</script>