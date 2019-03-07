<?= $this->element('Paper.xmf/resultados_finales_tab'); ?>

    <div class="container-fluid">

        <?= $this->element('Paper.xmf/graficas/acumulado_res_finales_coas_concentrado'); ?>
        <hr/>
        <?= $this->element('Paper.xmf/graficas/acumulado_res_finales_coas'); ?>
        <hr/>
        <?= $this->element('Paper.xmf/graficas/acumulado_res_finales'); ?>
        <hr/>

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
    </div>   <!-- container-fluid -->
