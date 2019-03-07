<div class="row">
    <div class="col-md-12">
        <div class="card">
            <!-- <div class="header">
                <h4 class="title">CONCENTRADO TOTAL COALICIONES</h4>
                <p class="category">Monitoreo en tiempo real</p>
            </div> -->
            <div class="content">
                <div id="chartResFinalesCOAS" class="ct-chart"></div>
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
  <?php foreach ($tabular_two as $tlvalue): ?>

    <div class="col-lg-3">
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
                                    <?php $img = str_replace(" ","-",$tlvalue['name']);?>
                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/<?=$img;?>.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                </div>
                            </div>
                            <div class="col-xs-4">
                                <span class="text-success"><h5><b><?= $tlvalue['data']?></b></h5></span>
                            </div>
                            <div class="col-xs-5">
                                <span class="text-info"><small><?= $tlvalue['name']?></small></span>
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
    $(document).ready(function () {

      Highcharts.chart('chartResFinalesCOAS', {
          chart: {
              type: 'column'
          },
          title: {
              text: 'CONCENTRADO TOTAL COALICIONES'
          },
          credits:{enabled:false},
          colors:['#F3BB45','#68B3C8','#3398d6','#b4c973','#6c99bb'],
          subtitle: {
              text: 'Monitoreo en tiempo real'
          },
          xAxis: {
              categories: <?= $categories_two ?>,
              crosshair: true
          },
          yAxis: {
              min: 0,
              title: {
                  text: 'VOTOS'
              }
          },
          tooltip: {
              headerFormat: '<span style="font-size:10px">{point.key}</span><table>',
              pointFormat: '<tr><td style="color:{series.color};padding:0">{series.name}: </td>' +
                  '<td style="padding:0"><b>{point.y}</b></td></tr>',
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
              data: <?= $votes_two?>
          }]
      });

    });
</script>
