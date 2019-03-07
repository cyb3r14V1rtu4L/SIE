<div class="card">
    <div class="header">
        <h4 class="title">REPORTE GENRAL DE INCIDENCIAS</h4>
        <p class="category">Relación general de Incidencias de casillas</p>
    </div>
    <div class="content table-responsive table-full-width">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th class="text-center"><i class="ti-package"></i>  CASILLA</th>
                    <th class="text-center"><i class="ti-pulse"></i>  TOTAL INCIDENCIAS</th>
                </tr>

            </thead>
            <tbody>

              <?php
              $total_incidencias = 0;
              foreach($CasillasIncidencias as $c_i)
              {
              ?>
                <tr>
                    <td><?=$c_i['CasillaDatos']['name'];?></td>
                    <td><?=$c_i['xmf_total_incidencias'];?></td>
                </tr>
              <?php
                $total_incidencias += $c_i['xmf_total_incidencias'] ;
              }
              ?>
              <tr>
                <td class="text-center" >TOTAL</div>
                <td class="text-center btn btn-danger"><?=$total_incidencias;?> Incidencia(s)  <i class="ti-pulse"></i></div>
              </tr>
            </tbody>
        </table>
    </div>
</div>
