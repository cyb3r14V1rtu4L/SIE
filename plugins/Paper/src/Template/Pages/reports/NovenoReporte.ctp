
<!-- CSS stylea -->
<?= $this->Html->css('paper-bootstrap-wizard.css') ?>

<!-- JS Plugin for the Wizard  -->
<?= $this->Html->script('jquery.bootstrap.wizard', ['block' => true]); ?>
<?= $this->Html->script('paper-bootstrap-wizard', ['block' => true]); ?>
<!-- More information about jquery.validate here: http://jqueryvalidation.org/ -->
<?= $this->Html->script('jquery.validate.min', ['block' => true]); ?>
<!-- UI Kit Plugins -->
<?= $this->Html->script('ct-paper-radio', ['block' => true]); ?>
<?= $this->Html->script('bootstrap-select', ['block' => true]); ?>



<div class="container-fluid">
<div class="row">
        <div class="row">
            <div class="col-sm-3">
                <div class="card">

                    <div class="content">
                        <h5>CB206</h5>
                        708 - URBANA - BÁSICA - IX
                        <h5><small>REPRESENTANTE</small></h5>
                        <a href="tel:9999999999">(999)999-9999</a>
                        <hr/>
                        <h5><small>NOMBRE ABOGADO</small></h5>
                        <a href="tel:9999999999">(999)999-9999</a>
                        <hr/>

                    </div>

                </div>
            </div>
            <div class="col-sm-9">
                <?= $this->element('Paper.xmf/reportes/agregar_incidencias'); ?>
            </div>
        </div>
        <div class=row>
            <div class="col-md-12 text-center">
                <button type="button" class="btn btn-info">PRESENCIA</button>
                <button type="button" class="btn btn-warning">INICIO VOTACIÓN</button>
            </div>
        </div>

        <div class="row">


                <div class="col-sm-12">

                    <!--      Wizard container        -->
                    <div class="wizard-container">
                        <!-- You can switch " data-color="green" "  with one of the next bright colors: "blue", "azure", "orange", "red" -->
                        <div class="card wizard-card" data-color="orange" id="wizard">
                        <form action="" method="">


                                <div class="wizard-header">
                                    <h3 class="wizard-title">ENVÍO DE REPORTES</h3>
                                    <p class="category">Solo podrán enviarse a la hora establecida.</p>
                                </div>
                                <div class="wizard-navigation">
                                    <div class="progress-with-circle">
                                        <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="4" style="width: 15%;"></div>
                                    </div>
                                    <ul>
                                        <li>
                                            <a href="#primer_reporte" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-package"></i>
                                                </div>
                                                PRIMER REPORTE
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#segundo_reporte" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-user"></i>
                                                </div>
                                                SEGUNDO REPORTE
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#tercer_reporte" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-user"></i>
                                                </div>
                                                TERCER REPORTE
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#cuarto_reporte" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-hand-stop"></i>
                                                </div>
                                                CUARTO REPORTE
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#resultados_finales" data-toggle="tab">
                                                <div class="icon-circle">
                                                    <i class="ti-stats-up"></i>
                                                </div>
                                                RESULTADOS FINALES
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-content">
                                    <div class="tab-pane" id="primer_reporte">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <h5 class="info-text">INSTALACIÓN DE LA CASILLA</h5>
                                            </div>
                                            <div class="col-sm-6 ">
                                                <div class="form-group">
                                                    <label>HORA INICIO DE INSTALACIÓN</label>
                                                    <input type="text" class="form-control" value="7:10" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="tim-title">
                                                    <h5><small>CASILLA SE INSTALÓ EN EL LUGAR INDICADO POR EL IEQROO?</small></h5>
                                                </div>

                                                  <label class="radio">
                                                    <input type="radio" name="optionsRadios" data-toggle="radio" id="optionsRadios2" value="option1" checked>
                                                    <i></i>SI
                                                  </label>
                                                  <label class="radio">
                                                    <input type="radio" name="optionsRadios" data-toggle="radio" id="optionsRadios1" value="option1">
                                                    <i></i>NO
                                                  </label>
                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-sm-6 ">
                                                <div class="form-group">
                                                    <label>HORA INICIO DE VOTACIÓN</label>
                                                    <input type="text" class="form-control" value="7:35" readonly>
                                                </div>
                                            </div>
                                            <div class="col-sm-6">
                                                <div class="tim-title">
                                                    <h5><small>SE TOMÓ GENTE DE LA FILA?</small></h5>
                                                </div>

                                                  <label class="radio">
                                                    <input type="radio" name="optionsRadios" data-toggle="radio" id="optionsRadios2" value="option1" checked>
                                                    <i></i>SI
                                                  </label>
                                                  <label class="radio">
                                                    <input type="radio" name="optionsRadios" data-toggle="radio" id="optionsRadios1" value="option1">
                                                    <i></i>NO
                                                  </label>
                                            </div>
                                        </div>
                                        <hr/>
                                        <div class="row">
                                                <h5 class="text-center">REPRESENTANTES PRESENTES:</h5>
                                                    <div class="col-lg-4">
                                                            <div class="card">
                                                                <div class="content">
                                                                    <ul class="list-unstyled team-members">
                                                                        <li>
                                                                            <div class="row">
                                                                                <div class="col-xs-3">
                                                                                    <div class="avatar">
                                                                                        <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xs-5">
                                                                                    Nombre Representante
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <label class="checkbox" for="checkbox1">
                                                                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input value="" id="checkbox1" data-toggle="checkbox" type="checkbox">
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="row">
                                                                                <div class="col-xs-3">
                                                                                    <div class="avatar">
                                                                                        <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xs-5">
                                                                                    Nombre Representante
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <label class="checkbox" for="checkbox2">
                                                                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input value="" id="checkbox2" data-toggle="checkbox" type="checkbox">
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                        <li>
                                                                            <div class="row">
                                                                                <div class="col-xs-3">
                                                                                    <div class="avatar">
                                                                                        <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRD.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                    </div>
                                                                                </div>
                                                                                <div class="col-xs-5">
                                                                                    Nombre Representante
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <label class="checkbox" for="checkbox1">
                                                                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input value="" id="checkbox1" data-toggle="checkbox" type="checkbox">
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                        </li>

                                                                    </ul>
                                                                </div>
                                                            </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card">
                                                            <div class="content">
                                                                <ul class="list-unstyled team-members">
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-xs-3">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PVE.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                    Nombre Representante
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <label class="checkbox" for="checkbox1">
                                                                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input value="" id="checkbox1" data-toggle="checkbox" type="checkbox">
                                                                                    </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-xs-3">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PT.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                    Nombre Representante
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <label class="checkbox" for="checkbox1">
                                                                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input value="" id="checkbox1" data-toggle="checkbox" type="checkbox">
                                                                                    </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-xs-3">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOV.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                    Nombre Representante
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <label class="checkbox" for="checkbox1">
                                                                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input value="" id="checkbox1" data-toggle="checkbox" type="checkbox">
                                                                                    </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card">
                                                            <div class="content">
                                                                <ul class="list-unstyled team-members">
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-xs-3">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/NA.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                    Nombre Representante
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <label class="checkbox" for="checkbox1">
                                                                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input value="" id="checkbox1" data-toggle="checkbox" type="checkbox">
                                                                                    </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-xs-3">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOR.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                    Nombre Representante
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <label class="checkbox" for="checkbox1">
                                                                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input value="" id="checkbox1" data-toggle="checkbox" type="checkbox">
                                                                                    </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-xs-3">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/SOL.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                    Nombre Representante
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <label class="checkbox" for="checkbox1">
                                                                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input value="" id="checkbox1" data-toggle="checkbox" type="checkbox">
                                                                                    </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card">
                                                            <div class="content">
                                                                <ul class="list-unstyled team-members">
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-xs-3">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                    Presidente
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <label class="checkbox" for="checkbox1">
                                                                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input value="" id="checkbox1" data-toggle="checkbox" type="checkbox">
                                                                                    </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-xs-3">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                    Secretario
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <label class="checkbox" for="checkbox1">
                                                                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input value="" id="checkbox1" data-toggle="checkbox" type="checkbox">
                                                                                    </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card">
                                                            <div class="content">
                                                                <ul class="list-unstyled team-members">
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-xs-3">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                    Escrutador I
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <label class="checkbox" for="checkbox1">
                                                                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input value="" id="checkbox1" data-toggle="checkbox" type="checkbox">
                                                                                    </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-xs-3">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                    Escrutador II
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <label class="checkbox" for="checkbox1">
                                                                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input value="" id="checkbox1" data-toggle="checkbox" type="checkbox">
                                                                                    </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>

                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4">
                                                        <div class="card">
                                                            <div class="content">
                                                                <ul class="list-unstyled team-members">
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-xs-3">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                    Suplente I
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <label class="checkbox" for="checkbox1">
                                                                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input value="" id="checkbox1" data-toggle="checkbox" type="checkbox">
                                                                                    </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-xs-3">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                    Suplente II
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <label class="checkbox" for="checkbox1">
                                                                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input value="" id="checkbox1" data-toggle="checkbox" type="checkbox">
                                                                                    </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <li>
                                                                        <div class="row">
                                                                            <div class="col-xs-3">
                                                                                <div class="avatar">
                                                                                    <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">&gt;
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-xs-5">
                                                                                    Suplente III
                                                                                </div>
                                                                                <div class="col-xs-2 text-right">
                                                                                    <label class="checkbox" for="checkbox1">
                                                                                        <span class="icons"><span class="first-icon fa fa-square fa-base"></span><span class="second-icon fa fa-check-square fa-base"></span></span><input value="" id="checkbox1" data-toggle="checkbox" type="checkbox">
                                                                                    </label>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>

                                            </div>
                                        <hr/>


                                    </div>
                                    <div class="tab-pane" id="segundo_reporte">
                                        <h5 class="info-text">FLUJO DE VOTACIÓN 9:00 - 12:00 HRS</h5>
                                        <div class="row">

                                                <div class="col-sm-6 text-center">
                                                    <div class="form-group">
                                                        <label>VOTANTES</label>
                                                        <input class="form-control valid"  aria-invalid="false" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-center ">
                                                        <div class="form-group">
                                                            <label>PROMOVIDOS</label>
                                                            <input class="form-control valid"  aria-invalid="false" type="text">
                                                        </div>
                                                    </div>


                                            </div>
                                    </div>
                                    <div class="tab-pane" id="tercer_reporte">
                                        <h5 class="info-text">FLUJO DE VOTACIÓN 8:00 - 16:00 HRS</h5>
                                        <div class="row">

                                                <div class="col-sm-6 text-center">
                                                    <div class="form-group">
                                                        <label>VOTANTES</label>
                                                        <input class="form-control valid"  aria-invalid="false" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-center ">
                                                        <div class="form-group">
                                                            <label>PROMOVIDOS</label>
                                                            <input class="form-control valid"  aria-invalid="false" type="text">
                                                        </div>
                                                    </div>


                                            </div>
                                    </div>
                                    <div class="tab-pane" id="cuarto_reporte">
                                        <h5 class="info-text">CIERRE DE LA CASILLA Y FLUJO DE VOTACIÓN FINAL. </h5>
                                        <div class="row">

                                                <div class="col-sm-6 ">
                                                    <div class="form-group">
                                                        <label>HORA DEL CIERRE</label>
                                                        <input class="form-control valid" value="19:10" readonly="" aria-invalid="false" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6">
                                                    <div class="tim-title">
                                                        <h5><small>HABÍA GENTE EN LA COLA?</small></h5>
                                                    </div>

                                                      <label class="radio">
                                                        <span class="icons"><span class="first-icon fa fa-circle-o fa-base"></span><span class="second-icon fa fa-dot-circle-o fa-base"></span></span><input name="optionsRadios" data-toggle="radio" id="optionsRadios2" value="option1" checked="" type="radio">
                                                        <i></i>SI
                                                      </label>
                                                      <label class="radio">
                                                        <span class="icons"><span class="first-icon fa fa-circle-o fa-base"></span><span class="second-icon fa fa-dot-circle-o fa-base"></span></span><input name="optionsRadios" data-toggle="radio" id="optionsRadios1" value="option1" type="radio">
                                                        <i></i>NO
                                                      </label>
                                                </div>

                                        </div>
                                        <div class="row">

                                                <div class="col-sm-6 text-center">
                                                    <div class="form-group">
                                                        <label>VOTANTES</label>
                                                        <input class="form-control valid"  aria-invalid="false" type="text">
                                                    </div>
                                                </div>
                                                <div class="col-sm-6 text-center ">
                                                        <div class="form-group">
                                                            <label>PROMOVIDOS</label>
                                                            <input class="form-control valid"  aria-invalid="false" type="text">
                                                        </div>
                                                    </div>


                                            </div>
                                    </div>
                                    <div class="tab-pane" id="resultados_finales">
                                        <div class="row">
                                            <h5 class="info-text"> CAPTURAR RESULTADO DE LAS ELECCIONES. </h5>
                                            <div class="col-md-12 text-center">
                                                <button type="button" class="btn btn-info">PRESIDENTE</button>
                                                <button type="button" class="btn btn-info">SENADOR</button>
                                                <button type="button" class="btn btn-info">DIPUTADO</button>
                                                <button type="button" class="btn btn-info">AYUNTAMIENTO</button>

                                            </div>

                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <div class="header">
                                                        <h4 class="title"></h4>
                                                    </div>
                                                    <div class="content">
                                                        <ul class="list-unstyled team-members">
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-4">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-4">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-4">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-4">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-4">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRD.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-4">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>

                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <div class="header">
                                                        <h4 class="title"></h4>
                                                    </div>
                                                    <div class="content">
                                                        <ul class="list-unstyled team-members">
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-4">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PVE.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-4">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-4">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PT.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-4">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-4">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOV.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-4">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>

                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="card">
                                                    <div class="header">
                                                        <h4 class="title"></h4>
                                                    </div>
                                                    <div class="content">
                                                        <ul class="list-unstyled team-members">
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-4">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/NA.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-4">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-4">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOR.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-4">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>

                                                                </div>
                                                            </li>
                                                            <li>
                                                                <div class="row">
                                                                    <div class="col-xs-4">
                                                                        <div class="avatar">
                                                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/SOL.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-xs-4">
                                                                        Resultados
                                                                        <br>
                                                                        <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                    </div>

                                                                </div>
                                                            </li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>


                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="card">
                                                <div class="header">
                                                    <h4 class="title"></h4>
                                                </div>
                                                <div class="content">
                                                    <ul class="list-unstyled team-members">
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <div class="avatar">
                                                                        <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    Margarita Zavala
                                                                    <br>
                                                                    <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                </div>

                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <div class="avatar">
                                                                        <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    Bronco
                                                                    <br>
                                                                    <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                </div>

                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <div class="avatar">
                                                                        <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    No Registrados
                                                                    <br>
                                                                    <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                </div>

                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="row">
                                                                <div class="col-xs-4">
                                                                    <div class="avatar">
                                                                        <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                                                                    </div>
                                                                </div>
                                                                <div class="col-xs-4">
                                                                    Votos Nulos
                                                                    <br>
                                                                    <span class="text-success"><small><input type="text" size="8"/></small></span>
                                                                </div>

                                                            </div>
                                                        </li>

                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8">
                                        <?= $this->element('Paper.xmf/reportes/agregar_incidencias'); ?>
                                        </div>

                                    </div>
                                </div>
                                <div class="wizard-footer">
                                    <hr/>
                                    <div class="pull-right">

                                        <input type='button' class='btn btn-next btn-fill btn-success btn-wd' name='next' value='Enviar' />
                                        <input type='button' class='btn btn-finish btn-fill btn-success btn-wd' name='finish' value='Enviar' />

                                    </div>

                                    <div class="pull-left">
                                        <input type='button' class='btn btn-previous btn-default btn-wd' name='previous' value='Anterior' />
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </form>
                        </div>
                    </div> <!-- wizard container -->
                </div>
            </div> <!-- row -->

    <div class="text-center">
    </div>
</div>
