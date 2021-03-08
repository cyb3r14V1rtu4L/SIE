<div class="container-fluid">
    <div class="row">

        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <a href="<?php echo $this->Url->build('/xmfCasillas/monitorPresencias'); ?>">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="icon-big icon-info text-center">
                                    <i class="ti-package"></i>
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="numbers ">
                                    <p>PRESENCIAS</p>
                                    <?=$count_presentes;?>
                                </div>
                            </div>
                        </div>
                        <div class="footer">

                        </div>
                    </div>
                </a>
            </div>
        </div>




        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <a href="<?php echo $this->Url->build('/xmfCasillas/monitorAusentes'); ?>">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="icon-big icon-info text-center">
                                    <i class="ti-package"></i>
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="numbers ">
                                    <p>AUSENCIAS</p>
                                    <?=$count_ausentes;?>
                                </div>
                            </div>
                        </div>
                        <div class="footer">

                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <a href="<?php echo $this->Url->build('/xmfCasillas/monitorInstalando'); ?>">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="icon-big icon-warning text-center">
                                    <i class="ti-package"></i>
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="numbers ">
                                    <p>INSTALANDO</p>
                                    <?=$count_instalando?>
                                </div>
                            </div>
                        </div>
                        <div class="footer">

                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <a href="<?php echo $this->Url->build('/xmfCasillas/monitorIncidencias'); ?>">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="icon-big icon-danger text-center">
                                    <i class="ti-pulse"></i>
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="numbers">
                                    <p>INCIDENCIAS</p>
                                    <?=$casillas_incidencias;?>
                                </div>

                            </div>
                        </div>
                        <div class="footer">
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <a href="<?php echo $this->Url->build('/XmfCasillas/MonitorAbiertas'); ?>">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="icon-big icon-danger text-center">
                                    <i class="ti-package"></i>
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="numbers ">
                                    <p>ABIERTAS</p>
                                    <?=$count_abiertas;?>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                        </div>
                    </div>
                </a>
            </div>
        </div>
        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <a href="<?php echo $this->Url->build('/xmfCasillas/monitorCerradas'); ?>">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="icon-big icon-success text-center">
                                    <i class="ti-package"></i>
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="numbers">
                                    <p>CERRADAS</p>
                                    <?=$count_cerradas;?>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <div class="col-lg-6 col-sm-12">
            <div class="card">
                <a href="<?php echo $this->Url->build('/XmfCasillas/MonitorCasillasAbiertas'); ?>">
                    <div class="content">
                        <div class="row">
                            <div class="col-xs-3">
                                <div class="icon-big icon-warning text-center">
                                    <i class="ti-package"></i>
                                </div>
                            </div>
                            <div class="col-xs-9">
                                <div class="numbers ">
                                    <p>REPORTES</p>
                                </div>
                            </div>
                        </div>
                        <div class="footer">
                        </div>
                    </div>
                </a>
            </div>
        </div>

    </div>
</div>
