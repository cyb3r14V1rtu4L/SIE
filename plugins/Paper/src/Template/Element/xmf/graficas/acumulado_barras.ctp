<div class="card">
                <div class="header">
                    <!-- <h4 class="title">FLUJO DE VOTACIONES</h4>
                    <p class="category">Monitoreo en tiempo real</p> -->
                </div>
                <div class="content">
                    <div id="chartHours" class="ct-chart"></div>
                    <div class="footer">
                        <!-- <div class="chart-legend">
                            <i class="fa fa-circle text-warning"></i> VOTANTES
                            <i class="fa fa-circle text-info"></i> PROMOVIDOS
                        </div> -->
                        <hr>
                        <div class="stats">
                            <i class="ti-reload"></i> Información Actualizada
                        </div>
                    </div>
                </div>
            </div>


<script type="text/javascript">
  $(document).ready(function(){

        // Create the chart chartHours
        Highcharts.chart('chartHours', {
          chart: {
              type: 'column'
          },
          title: {
              text: '<h4 class="title">ACUMULADO DE VOTACIONES</h4>'
          },
          credits:{enabled:false},
          colors:['#F3BB45','#68B3C8','#3398d6','#b4c973','#6c99bb'],
          subtitle: {
              text: '<p class="category">Monitoreo en tiempo real</p>'
          },
          xAxis: {
              categories: [<?=$categories?>] ,
              crosshair: true
          },
          yAxis: {
              min: 0,
              title: {
                  text: 'Votos'
              }
          },
          tooltip: {
              headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
              pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                  '<td style="padding:0"><b>{point.y:.2f} Votos</b></td></tr>',
              footerFormat: '</table>',
              shared: true,
              useHTML: true
          },
          plotOptions: {
              column: {
                  pointPadding: 0.2,
                  borderWidth: 0
              }
          },
          series: [{
              name: 'Votantes',
              data: <?= $votantes?>

          }, {
              name: 'Promovidos',
              data: <?= $promovidos?>

          }]
      });


});
</script>
