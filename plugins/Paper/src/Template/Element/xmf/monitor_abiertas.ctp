<!-- Set the notification -->
<?= $this->Html->script('xmf/notifications/notify.js', ['block' => true]); ?>
<?= $this->element('Paper.xmf/counter_head_vertical'); ?>

<div class="container-fluid">
    <div class="col-md-12">
        <div class="row" id="resMonitorCasillas">
            <div class="nav-tabs-navigation">
                <div class="nav-tabs-wrapper">
                    <ul id="tabs" class="nav nav-tabs" data-tabs="tabs">
                        <li class="active"><a href="#reporte_1" data-toggle="tab"  >APERTURA DE CASILLA</a></li>
                        <li><a href="#reporte_2" data-toggle="tab"  >REPORTE I</a></li>
                        <li><a href="#reporte_3" data-toggle="tab" >REPORTE II</a></li>
                        <li><a href="#reporte_4"  data-toggle="tab" >REPORTE III</a></li>
                        <li><a href="#reporte_5"  data-toggle="tab" >RESULTADOS FINALES</a></li>
                        <li><a href="#incidencias" data-toggle="tab" style="color:red" >INCIDENCIAS (<?=$casillas_incidencias?>)</a></li>
                    </ul>
                </div>
            </div>

            <div id="my-tab-content" class="tab-content text-center">
                <div class="tab-pane active" id="reporte_1">
                    <p>
                        <h4>DATOS CASILLAS REPORTE I</h4>
                        <hr/>
                        <?php
                        foreach($casillas_representantes as $cp)
                        {
                        ?>
                            <div class="col-lg-2 col-sm-12">
                                <div class="card ">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="">
                                                    <div class="text-center"><?=$cp['name']?></div>
                                                </div>
                                            </div>

                                        </div>
                                        <div class="footer">
                                            <hr />
                                                <div class="text-center">
                                                    <a href="tel:<?=$cp['rc_telefono']?>">
                                                        <span class="ti-mobile"></span>
                                                    </a>
                                                    &nbsp;
                                                    <a href="<?php echo $this->Url->build('/XmfCasillas/CapturaResultados/'.$cp['xmf_casillas_id'].'/1'); ?>">
                                                        <span class="ti-package"></span>
                                                    </a>
                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </p>
                </div>
                <div class="tab-pane" id="reporte_2">
                    <p>
                        <h4>DATOS CASILLAS REPORTE II</h4>
                        <hr/>
                        <?php


                        foreach($casillas_segundo_reporte as $cp)
                        {
                            $votantes = 0;
                            $promovidos = 0;
                        ?>
                            <div class="col-lg-2 col-sm-12">
                                <div class="card ">
                                    <div class="content">
                                        <div class="row">
                                            <div class="col-xs-12">
                                                <div class="">
                                                    <div class="text-center"><?=$cp['name']?></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="footer">
                                            <hr />
                                                <div class="text-center">
                                                    <a href="tel:<?=$cp['rc_telefono']?>">
                                                        <span class="ti-mobile"></span>
                                                    </a>
                                                    &nbsp;
                                                    <a href="<?php echo $this->Url->build('/XmfCasillas/CapturaResultados/'.$cp['id'].'/2'); ?>">
                                                        <span class="ti-package"></span>
                                                    </a>
                                                    &nbsp;
                                                    <?php
                                                    $votantes += $cp['votos']['votantes_segundo'];
                                                    $promovidos +=$cp['votos']['promovidos_segundo'];

                                                    ?>
                                                    <a href="#" rel="tooltip" style="white-space: nowrap;" title="<?='Votos: '.$votantes?> Prom: <?=$promovidos?>"><span class="pie"><?=$votantes?>/<?=$promovidos?></span></a>

                                                </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        }
                        ?>
                    </p>
                </div>
                <div class="tab-pane" id="reporte_3">
                    <p>
                        <h4>DATOS CASILLAS REPORTE III</h4>
                            <hr/>
                            <?php

                            foreach($casillas_tercer_reporte as $cp){
                                $votantes = 0;
                                $promovidos = 0;
                            ?>
                                <div class="col-lg-2 col-sm-12">
                                    <div class="card ">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="">
                                                        <div class="text-center"><?=$cp['name']?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <hr />
                                                    <div class="text-center">
                                                        <a href="tel:9841199385">
                                                            <span class="ti-mobile"></span>
                                                        </a>
                                                        &nbsp;
                                                        <a href="<?php echo $this->Url->build('/XmfCasillas/CapturaResultados/'.$cp['id'].'/3'); ?>">
                                                            <span class="ti-package"></span>
                                                        </a>
                                                        &nbsp;
                                                        <?php
                                                        $votantes += $cp['votos']['votantes_tercero'];
                                                        $promovidos +=$cp['votos']['promovidos_tercero'];

                                                        ?>
                                                        <a href="#" rel="tooltip" style="white-space: nowrap;" title="<?='Votos: '.$votantes?> Prom: <?=$promovidos?>"><span class="pie"><?=$votantes?>/<?=$promovidos?></span></a>

                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                    </p>
                </div>
                <div class="tab-pane" id="reporte_4">
                    <p>
                        <h4>DATOS CASILLAS REPORTE IV</h4>
                            <hr/>
                            <?php
                            $votantes = 0;
                            $promovidos = 0;
                            #pr($casillas_cuarto_reporte);
                            foreach($casillas_cuarto_reporte as $cp){
                            ?>
                                <div class="col-lg-2 col-sm-12">
                                    <div class="card ">
                                        <div class="content">
                                            <div class="row">
                                                <div class="col-xs-12">
                                                    <div class="">
                                                        <div class="text-center"><?=$cp['CasillaDatos']['name']?></div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="footer">
                                                <hr />
                                                    <div class="text-center">
                                                        <a href="tel:9999999999">
                                                            <span class="ti-mobile"></span>
                                                        </a>
                                                        &nbsp;
                                                        <a href="<?php echo $this->Url->build('/XmfCasillas/CapturaResultados/'.$cp['xmf_casillas_id'].'/4'); ?>">
                                                            <span class="ti-package"></span>
                                                        </a>
                                                        &nbsp;
                                                        <?php
                                                        $votantes = $cp['votantes'];
                                                        $promovidos = $cp['promovidos'];

                                                        ?>
                                                        <a href="#" rel="tooltip" style="white-space: nowrap;" title="<?='Votos: '.$votantes?> Prom: <?=$promovidos?>"><span class="pie"><?=$votantes?>/<?=$promovidos?></span></a>

                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                    </p>
                </div>
                <div class="tab-pane" id="reporte_5">
                    <p>
                        <h4>RESULTADOS FINALES</h4>
                    </p>
                    <hr/>
                </div>
                <div class="tab-pane" id="incidencias">
                    <?= $this->element('Paper.xmf/reportes/incidencias'); ?>
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
    </div>
</div>
