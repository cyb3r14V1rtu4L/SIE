

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="header">
                <h4 class="title">CONCENTRADO FINAL COALICIONES</h4>
                <p class="category">Monitoreo en tiempo real</p>
            </div>
            <div class="content">
                <div id="chartResFinalesCOASCONCENTRADO" class="ct-chart"></div>
                <div class="footer">
                    <!--<div class="chart-legend">
                        <i class="fa fa-circle text-warning"></i> VOTANTES
                        <i class="fa fa-circle text-info"></i> PROMOVIDOS
                    </div>
                    -->
                    <hr>
                    <div class="stats">
                        <i class="ti-reload"></i> Informaci&oacute;n Actualizada
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="row">
  <?php foreach ($tabular as $tbl): ?>
    <div class="col-lg-4">
        <div class="card">
            <div class="header">
                <h4 class="title"></h4>
            </div>
            <div class="content">
                <ul class="list-unstyled team-members">
                    <li>
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="avatar">
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/<?= $tbl['nombre']?>.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <span class="text-danger"><h5><b><?= $tbl['votes']?></b></h5></span>

                            </div>
                            <div class="col-xs-5">
                                <span class="text-info"><small><?= $tbl['nombre']?></small></span>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
  <?php endforeach; ?>


</div>

<script type="text/javascript">

  $(document).ready(function(){
        // Create the chart chartHours
        Highcharts.chart('chartResFinalesCOASCONCENTRADO', {
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
              categories: <?= $categories?> ,
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
                  '<td style="padding:0"><b>{point.y} votos</b></td></tr>',
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
              name: 'Votos',
              data: <?= $votes?>
          }]
      });


});
</script>
