<?php //echo $this->element('Paper.xmf/resultados_finales_tab'); ?>
<div id="divMonitorFinales">
    <div class="container-fluid">

        <?= $this->element('Paper.xmf/graficas/acumulado_res_finales_coas_concentrado'); ?>
        <hr/>
        <?= $this->element('Paper.xmf/graficas/acumulado_res_finales_coas'); ?>
        <hr/>
        <?= $this->element('Paper.xmf/graficas/acumulado_res_finales'); ?>
        <hr/>


    </div>
    <div class="container-fluid">

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="header">
                        <h4 class="title">RESULTADOS FINALES - FLUJO FINAL DE VOTACIONES</h4>
                        <p class="category">

                        </p>
                    </div>
                    <div class="content table-responsive table-full-width">
                        <table class="table table-striped">
                            <thead>
                            <tr>
                                <th><i class="ti-package"></i> CASILLA</th>
                                <th><i class="ti-user"></i> VOTOS</th>
                            </tr>
                            </thead>
                            <tbody>

                            <?php
                            $x=0;
                            foreach ($formulaMunicipios as $tabata):
                                ?>
                                <tr >
                                    <td align="left"><?= h($tabata['name']) ?></td>
                                    <td align="right"><?= h(number_format($tabata['votes'])); ?></td>

                                </tr>
                            <?php
                            $x++;
                            endforeach; ?>
                            <tr>
                                <td align="right">TOTAL CASILLAS <B><?=$x;?></B></td>
                                <td align="right"></td>
                            </tr>

                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>   <!-- container-fluid -->
</div>