<div id ="divMonitorCasillas">
    <div class="container-fluid">
    <!-- <div class="alert alert-danger">Resultados Preliminares</div>
    <div class="alert alert-warning">Resultados Validados</div> -->
    <div class="row">
        <div class="col-md-12">
        <?= $this->element('Paper.xmf/graficas/acumulado_barras'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
        <?= $this->element('Paper.xmf/graficas/votaciones_8_12'); ?>
        </div>
        <div class="col-md-6">
        <?= $this->element('Paper.xmf/counter_head_vertical'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">PRIMER REPORTE - VOTACIONES 08:00 - 11:30 HRS.</h4>
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
                        foreach ($tabular as $tabata):
                            ?>
                            <tr >
                                <td align="left"><?= h($tabata['name']) ?></td>
                                <td align="right"><?= h(number_format($tabata['votantes_segundo'])); ?></td>

                            </tr>
                        <?php
                            $x++;
                        endforeach;
                        ?>
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

	<!-- 
    <div class="row">
        <div class="col-lg-6 col-sm-6">
            <div class="text-center">
                <button type="submit" class="btn btn-info btn-fill btn-wd">Exportar PDF</button>
            </div>
        </div>
        <div class="col-lg-6 col-sm-6">
            <div class="text-center">
                <button type="submit" class="btn btn-info btn-fill btn-wd">Exportar XLS</button>
            </div>
        </div>
    </div>
    -->


</div>   <!-- container-fluid -->
</div>