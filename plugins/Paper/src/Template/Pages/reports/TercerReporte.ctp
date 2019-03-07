<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
        <?= $this->element('Paper.xmf/graficas/acumulado_barras'); ?>
        </div>
    </div>

    <div class="row">
        <div class="col-md-6">
            <?= $this->element('Paper.xmf/graficas/votaciones_8_16'); ?>
        </div>
        <div class="col-md-6">
            <?= $this->element('Paper.xmf/graficas/votaciones_8_12'); ?>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <?= $this->element('Paper.xmf/reportes/incidencias'); ?>
        </div>
    </div>
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
