
<div class="col-lg-6">
<?= $this->element('Paper.xmf/graficas/votaciones_8_18'); ?>
</div>
<div class="col-lg-6">
    <div class="card">
        <div class="header">
            <h4 class="title">FLUJO DE VOTACIÓN</h4>
        </div>
        <div class="content">
            <ul class="list-unstyled team-members">
                <li>
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="avatar">
                                <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            VOTANTES
                            <br>
                            <span class="text-warning"><h3><?=number_format($votantes_s);?></h3></span>
                        </div>

                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="avatar">
                                <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">>
                            </div>
                        </div>
                        <div class="col-xs-6">
                            PROMOVIDOS
                            <br>
                            <span class="text-warning"><h3><?=number_format($promovidos_s);?></h3></span>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
