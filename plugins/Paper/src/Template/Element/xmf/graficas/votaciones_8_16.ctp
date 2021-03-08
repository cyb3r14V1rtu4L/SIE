<?php
$votantes_data = (isset($votantes_s15)) ? $votantes_s15:$votantes_s;
$promovidos_data = (isset($promovidos_s15)) ? $promovidos_s15:$promovidos_s;

?>
<div class="card">
        <div class="header">
            <h4 class="title">GR&Aacute;FICA VOTANTES</h4>
            <p class="category">VOTACIONES 11:30HRS A 15:OOHRS</p>
        </div>
        <div class="content">
            <div id="chart8-16" class="ct-chart ct-perfect-fourth"></div>

            <div class="footer">
                <div class="chart-legend">
                    <i class="fa fa-circle text-warning"></i> VOTANTES
                    <i class="fa fa-circle text-info"></i> PROMOVIDOS

                </div>
                <hr>
                <div class="stats">
                    <i class="ti-timer"></i> Información Actualizada
                </div>
            </div>
        </div>
    </div>


    <script type="text/javascript">
      $(document).ready(function(){

    // 'chart8-12

        // Create the chart
        Highcharts.chart('chart8-16', {
          chart: {
            type: 'pie'
          },
          title: {
            text: 'Flujo de Votaciones'
          },
          credits:{enabled:false},
          colors:['#D84500','#990000','#3398d6','#b4c973','#6c99bb'],
          subtitle: {
            text: 'Monitoreo de votos'
          },
          plotOptions: {
            series: {
              dataLabels: {
                enabled: true,
                format: '{point.name}: {point.y:.1f}'
              }
            }
          },

          tooltip: {
            headerFormat: '<span style="font-size:11px">{series.name}</span><br>',
            pointFormat: '<span style="color:{point.color}">{point.name}</span>: <b>{point.y:.2f}</b><br/>'
          },

          "series": [
            {
              "name": "Votantes",
              "colorByPoint": true,
              "data": [
                {
                  "name": "VOTANTES",
                  "y": <?=$votantes_data;?>
                },
                {
                  "name": "PROMOVIDOS",
                  "y":<?=$promovidos_data;?>
                }
              ]
            }
          ]
        });
    });
    </script>
