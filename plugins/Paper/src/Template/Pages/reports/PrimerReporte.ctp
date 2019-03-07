<div class="container-fluid">


    <div class="row">
        <div class="col-md-8 col-sm-offset-2 text-center">
            <?= $this->element('Paper.xmf/graficas/abierta_cerrada_pastel'); ?>
        </div>

    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="header">
                    <h4 class="title">PRIMER REPORTE - INSTALACI&Oacute;N DE CASILLAS</h4>
                    <p class="category">

                    </p>
                </div>
                <div class="content table-responsive table-full-width">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th><i class="ti-package"></i> CASILLA</th>
                                <th><i class="ti-time"></i> INSTALACI&Oacute;N</th>
                                <th><i class="ti-time"></i> INICIO VOTACI&Oacute;N</th>
                                <th><i class="ti-user"></i> FUNCIONARIOS ELECTORALES DEL INE</th>
                            </tr>
                        </thead>
                        <tbody>

                        <?php foreach ($tabular as $tabata): ?>
                          <tr>
                            <td><?= h($tabata->name) ?></td>
                            <td><?= h($tabata->instalacion ? $tabata->instalacion->format('h:i A') : '') ?></td>
                            <td><?= h($tabata->inicio ? $tabata->inicio->format('h:i A'):'') ?></td>
                            <td>
                                <ul>
                                    <?php
                                    for($f=0;$f<=3;$f++)
                                    {
                                    ?>
                                    <li>
                                        NOMBRE FUNCIONARIO
                                    </li>
                                    <?php
                                    }
                                    ?>

                            </td>
                          </tr>
                        <?php endforeach; ?>
<!--
                            <?php
                            for($x=0;$x<=4;$x++){
                            ?>
                            <tr>
                                <td>CB206</td>
                                <td>7:03</td>
                                <td>7:33</td>
                                <td>
                                    <ul>
                                        <?php
                                        for($f=0;$f<=3;$f++)
                                        {
                                        ?>
                                        <li>
                                            NOMBRE FUNCIONARIO
                                        </li>
                                        <?php
                                        }
                                        ?>

                                </td>
                            </tr>


                            <?php
                            }
                            ?> -->

                        </tbody>
                    </table>

                </div>
            </div>
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
