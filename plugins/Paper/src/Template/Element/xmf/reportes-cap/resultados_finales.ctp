<?= $this->Form->create('LastReport',array('id'=>'LastReport'));?>

<div class="row">
    <h5 class="info-text"> CAPTURAR RESULTADO DE LAS ELECCIONES. </h5>
<?php

    $display = ($_SESSION['Auth']['User']['role_id'] == '80687266-6761-43a2-bd98-f42349a9bb63') ? 'none' : 'block';
    $reset = ($_SESSION['Auth']['User']['role_id'] == '80687266-6761-43a2-bd98-f42349a9bb63') ? '0' : '1';
?>
      <div class="col-md-12 text-center" style="display:<?=$display;?>">
        <div class="btn-group">
          <button type="button" id="typo_voto_1" data-id="1" onclick="setTypoVote(this)" class="btn btn-danger">PRESIDENTE</button>
          <button type="button" id="typo_voto_2" data-id="2" onclick="setTypoVote(this)" class="btn btn-danger">SENADOR</button>
          <button type="button" id="typo_voto_3" data-id="3" onclick="setTypoVote(this)" class="btn btn-danger">DIPUTADO</button>
          <button type="button" id="typo_voto_4" data-id="4" onclick="setTypoVote(this)" class="btn btn-danger">AYUNTAMIENTO</button>
        </div>
        <input type="hidden" name="xmf_tipo_votaciones_id" id="xmf_tipo_votaciones_id"/>
        <input type="hidden" name="xmf_tipo_voto" id="xmf_tipo_voto"/>
        <input type="hidden" name="xmf_reset" id="xmf_reset" valule="<?= $reset;?>"  />
        <input type="hidden" name="casilla_id" id="casilla_id" value="<?= (isset($id)) ? $id : $_SESSION['Casilla']['id'];?>">
      </div>
<?php
if($display === 'none')
{
?>
  <small><h5 class="info-text btn-warning active">AYUNTAMIENTO</h5></small>
<?php
}
?>
</div>

<div class="row">
    <div id="bloquesPartidosP">
    <?php
    if(count($data_resFinalesP['partidos'])>0)
    {
        foreach($data_resFinalesP['partidos'] as $bloques=>$partidos)
        {
        ?>
            <div class="col-lg-4">
                <div class="card">
                    <div class="content">
                        <ul class="list-unstyled team-members">
                            <?php
                            foreach($partidos as $p)
                            {
                                $img_name =  "partidos_png/".$p['name'];
                                ?>
                                <li>
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="avatar">
                                                <img src="<?php echo $this->request->webroot?>paper/img/<?=$img_name;?>.png" alt="PAN" class="img-circle img-no-padding img-responsive">
                                            </div>
                                        </div>
                                        <div class="col-xs-4">
                                        <span class="text-info"><small>
                                          <input class="input-resultados voto" id="xmf_presidente_<?=$p['id'];?>" data-id="<?=$p['id'];?>" type="text" size="8" value="<?=$p['data'];?>"/></small></span>
                                        </div>

                                    </div>
                                </li>
                                <?php
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        <?php
        }
    }else{?>

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
                                        <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN.png" alt="PAN" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_presidente_1" data-id="1" type="text" size="8"/></small></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="avatar">
                                        <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI.png" alt="PRI" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_2" data-id="2"  type="text"  size="8"/></small></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="avatar">
                                        <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRD.png" alt="PRD" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_presidente_3" data-id="3" type="text"  size="8"/></small></span>
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
                                        <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PVE.png" alt="PVE" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_presidente_4" data-id="4"  type="text"  size="8"/></small></span>
                                </div>

                            </div>
                        </li>

                        <li>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="avatar">
                                        <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOV.png" alt="MC" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_presidente_6" data-id="6" type="text"  size="8"/></small></span>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="avatar">
                                        <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PT.png" alt="PT" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_presidente_5" data-id="5"  type="text"  size="8"/></small></span>
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
                                        <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/NA.png" alt="PANAL" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_presidente_7" data-id="7"  type="text"  size="8"/></small></span>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="avatar">
                                        <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOR.png" alt="MORENA" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_presidente_8" data-id="8"  type="text"  size="8"/></small></span>
                                </div>

                            </div>
                        </li>
                        <li>
                            <div class="row">
                                <div class="col-xs-4">
                                    <div class="avatar">
                                        <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/SOL.png" alt="PES" class="img-circle img-no-padding img-responsive">
                                    </div>
                                </div>
                                <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_presidente_9" data-id="9"  type="text"  size="8"/></small></span>
                                </div>

                            </div>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
        <?php
        }
        ?>
    </div>
    <div id="bloquesPartidosS">
        <?php
        if(count($data_resFinalesS['partidos'])>0)
        {
            foreach($data_resFinalesS['partidos'] as $bloques=>$partidos)
            {
                ?>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="content">
                            <ul class="list-unstyled team-members">
                                <?php
                                foreach($partidos as $p)
                                {
                                    $img_name =  "partidos_png/".$p['name'];
                                    ?>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="avatar">
                                                    <img src="<?php echo $this->request->webroot?>paper/img/<?=$img_name;?>.png" alt="PAN" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                        <span class="text-info"><small>
                                          <input class="input-resultados voto" id="xmf_senador_<?=$p['id'];?>" data-id="<?=$p['id'];?>" type="text" size="8" value="<?=$p['data'];?>"/></small></span>
                                            </div>

                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
            }
        }else{?>

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
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN.png" alt="PAN" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_senador_1" data-id="1" type="text" size="8"/></small></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI.png" alt="PRI" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_2" data-id="2"  type="text"  size="8"/></small></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRD.png" alt="PRD" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_senador_3" data-id="3" type="text"  size="8"/></small></span>
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
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PVE.png" alt="PVE" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_senador_4" data-id="4"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOV.png" alt="MC" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_senador_6" data-id="6" type="text"  size="8"/></small></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PT.png" alt="PT" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_senador_5" data-id="5"  type="text"  size="8"/></small></span>
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
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/NA.png" alt="PANAL" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_senador_7" data-id="7"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOR.png" alt="MORENA" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_senador_8" data-id="8"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/SOL.png" alt="PES" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_senador_9" data-id="9"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <div id="bloquesPartidosD">
        <?php
        if(count($data_resFinalesD['partidos'])>0)
        {
            foreach($data_resFinalesD['partidos'] as $bloques=>$partidos)
            {
                ?>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="content">
                            <ul class="list-unstyled team-members">
                                <?php
                                foreach($partidos as $p)
                                {
                                    $img_name =  "partidos_png/".$p['name'];
                                    ?>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="avatar">
                                                    <img src="<?php echo $this->request->webroot?>paper/img/<?=$img_name;?>.png" alt="PAN" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                        <span class="text-info"><small>
                                          <input class="input-resultados voto" id="xmf_diputado_<?=$p['id'];?>" data-id="<?=$p['id'];?>" type="text" size="8" value="<?=$p['data'];?>"/></small></span>
                                            </div>

                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
            }
        }else{?>

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
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN.png" alt="PAN" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_diputado_1" data-id="1" type="text" size="8"/></small></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI.png" alt="PRI" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_diputado_2" data-id="2"  type="text"  size="8"/></small></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRD.png" alt="PRD" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_diputado_3" data-id="3" type="text"  size="8"/></small></span>
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
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PVE.png" alt="PVE" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_diputado_4" data-id="4"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOV.png" alt="MC" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_diputado_6" data-id="6" type="text"  size="8"/></small></span>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PT.png" alt="PT" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_diputado_5" data-id="5"  type="text"  size="8"/></small></span>
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
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/NA.png" alt="PANAL" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_diputado_7" data-id="7"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOR.png" alt="MORENA" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_diputado_8" data-id="8"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/SOL.png" alt="PES" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_diputado_9" data-id="9"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
    <div id="bloquesPartidosA">
        <?php
        if(count($data_resFinalesA['partidos'])>0)
        {
            foreach($data_resFinalesA['partidos'] as $bloques=>$partidos)
            {
                ?>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="content">
                            <ul class="list-unstyled team-members">
                                <?php
                                foreach($partidos as $p)
                                {
                                    $img_name =  "partidos_png/".$p['name'];
                                    ?>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="avatar">
                                                    <img src="<?php echo $this->request->webroot?>paper/img/<?=$img_name;?>.png" alt="PAN" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-4">
                                        <span class="text-info"><small>
                                          <input class="input-resultados voto" id="xmf_ayuntamiento_<?=$p['id'];?>" data-id="<?=$p['id'];?>" type="text" size="8" value="<?=$p['data'];?>"/></small></span>
                                            </div>

                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php
            }
        }else{?>

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
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN.png" alt="PAN" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_ayuntamiento_1" data-id="1" type="text" size="8"/></small></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI.png" alt="PRI" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_2" data-id="2"  type="text"  size="8"/></small></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRD.png" alt="PRD" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_ayuntamiento_3" data-id="3" type="text"  size="8"/></small></span>
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
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PVE.png" alt="PVE" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_ayuntamiento_4" data-id="4"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOV.png" alt="MC" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_ayuntamiento_6" data-id="6" type="text"  size="8"/></small></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PT.png" alt="PT" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_ayuntamiento_5" data-id="5"  type="text"  size="8"/></small></span>
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
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/NA.png" alt="PANAL" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_ayuntamiento_7" data-id="7"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOR.png" alt="MORENA" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_ayuntamiento_8" data-id="8"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/SOL.png" alt="PES" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-4">
                                    <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_ayuntamiento_9" data-id="9"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>
    </div>
</div>
<div class="row">
    <div id="bloquesCoalicionesP">
         <?php
         if(count($data_resFinalesP['coaliciones'])>0) {
             foreach ($data_resFinalesP['coaliciones'] as $bloques => $partidos)
             {
                 $display = ($bloques == 3) ? 'none' : 'block';
                 $id_col  = ($bloques == 2) ? 'pt-mor-pes_presidente' : '';
                 $id_col_lg  = ($bloques == 3) ? 'pt-mor_presidente' : '';
                 ?>
                 <div class="col-lg-4  <?=$id_col_lg;?>  <?=$id_col;?>" >
                     <div class="card">
                         <div class="header">
                             <h4 class="title">
                                 <small class="text-info <?=$id_col;?>">COALICIÓN <?=$partidos[0]['name'];?></small>
                             </h4>
                         </div>
                         <div class="content">
                             <?php

                             ?>
                             <ul class="list-unstyled team-members <?=$id_col;?>" style="display: <?=$display;?>">
                                 <?php
                                 foreach($partidos as $p)
                                 {
                                 ?>
                                 <li>
                                     <div class="row">
                                         <div class="col-xs-4">
                                             <div class="avatar">
                                                 <img src="<?=$this->request->webroot;?>paper/img/partidos_png/<?=str_replace(" ","-",$p['name']);?>.png"
                                                      alt="PAN-PRD-MC" class="img-circle img-no-padding img-responsive">
                                             </div>
                                         </div>
                                         <div class="col-xs-7">
                                             <?=$p['name'];?>
                                             <br>
                                             <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_presidente_<?=$p['id'];?>" value="<?=$p['data'];?>" data-id="<?=$p['id'];?>" type="text"
                                             size="8"/></small></span>
                                         </div>

                                     </div>
                                 </li>
                                <?php
                                }
                                ?>

                             </ul>
                             <?php
                             /*if($bloques == 3)
                             {
                                 ?>
                                 <ul class="list-unstyled team-members pt-mor_presidente" >
                                     <li>
                                         <div class="row">
                                             <div class="col-xs-4">
                                                 <div class="avatar">
                                                     <img src="<?php echo $this->request->webroot ?>paper/img/partidos_png/MORENA-PT.png"
                                                          alt="Circle Image"
                                                          class="img-circle img-no-padding img-responsive">
                                                 </div>
                                             </div>
                                             <div class="col-xs-7">
                                                 MORENA - PT
                                                 <br>
                                                 <span class="text-info"><small>
                                            <input class="input-resultados voto" id="xmf_presidente_<?= $p['id']; ?>"
                                             data-id="<?= $p['id']; ?>" value="<?= $p['data']; ?>" type="text"
                                             size="8"/></small></span>
                                                 </div>

                                         </div>
                                     </li>
                                 </ul>
                             <?php
                             }*/
                             ?>

                         </div>
                     </div>
                 </div>
             <?php
             }
         }else{
         ?>
             <div class="col-lg-4">
                 <div class="card">
                     <div class="header">
                         <h4 class="title"><small class="text-info">COALICIÓN PAN-PRD-MC</small></h4>
                     </div>
                     <div class="content">
                         <ul class="list-unstyled team-members">
                             <li>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <div class="avatar">
                                             <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN-PRD-MC.png" alt="PAN-PRD-MC" class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         PAN - PRD - MC
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_10" data-id="10" type="text"  size="8"/></small></span>
                                     </div>

                                 </div>
                             </li>
                             <li>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <div class="avatar">
                                             <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN-PRD.png" alt="PAN-PRD" class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         PAN - PRD
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_11" data-id="11"  type="text"  size="8"/></small></span>
                                     </div>

                                 </div>
                             </li>
                             <li>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <div class="avatar">
                                             <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN-MC.png" alt="PAN-MC" class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         PAN - MC
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_12" data-id="12" type="text"  size="8"/></small></span>
                                     </div>

                                 </div>
                             </li>
                             <li>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <div class="avatar">
                                             <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRD-MC.png" alt="PRD-MC" class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         PRD - MC
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_13" data-id="13"  type="text"  size="8"/></small></span>
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
                         <h4 class="title"><small class="text-info">COALICIÓN PRI-PVE-PANAL</small></h4>
                     </div>
                     <div class="content">
                         <ul class="list-unstyled team-members">
                             <li>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <div class="avatar">
                                             <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI-PVE-PANAL.png" alt="PRI-PVE-PANAL" class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         PRI - PVE - PANAL
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_14" data-id="14"  type="text"  size="8"/></small></span>
                                     </div>

                                 </div>
                             </li>
                             <li>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <div class="avatar">
                                             <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI-PVE.png" alt="PRI-PVE" class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         PRI - PVE
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_15" data-id="15" type="text"  size="8"/></small></span>
                                     </div>

                                 </div>
                             </li>
                             <li>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <div class="avatar">
                                             <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI-PANAL.png" alt="PRI-PANAL" class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         PRI - PANAL
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_16" data-id="16"  type="text"  size="8"/></small></span>
                                     </div>

                                 </div>
                             </li>
                             <li>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <div class="avatar">
                                             <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PVE-PANAL.png" alt="PVE-PANAL" class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         PVE - PANAL
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_17" data-id="17"  type="text"  size="8"/></small></span>
                                     </div>

                                 </div>
                             </li>

                         </ul>
                     </div>
                 </div>
             </div>
             <div class="col-lg-4 pt-mor-pes_presidente">
                 <div class="card">
                     <div class="header">
                         <h4 class="title " id="coalicion_title"><small class="text-info pt-mor-pes_presidente">COALICIÓN MORENA-PT-PES</small></h4>
                     </div>
                     <div class="content">
                         <ul class="list-unstyled team-members pt-mor-pes_presidente" >
                             <li>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <div class="avatar">
                                             <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MORENA-PT-PES.png" alt="PT-MOR-PES" class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         MORENA - PT - PES
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_18" data-id="27"  type="text"  size="8"/></small></span>
                                     </div>

                                 </div>
                             </li>
                             <li>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <div class="avatar">
                                             <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MORENA-PT.png" alt="MORENA-PT" class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         MORENA - PT
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_19" data-id="29"  type="text"  size="8"/></small></span>
                                     </div>

                                 </div>
                             </li>
                             <li>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <div class="avatar">
                                             <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PT-PES.png" alt="PT-PES" class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         PT - PES
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_20" data-id="30" type="text"  size="8"/></small></span>
                                     </div>

                                 </div>
                             </li>
                             <li>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <div class="avatar">
                                             <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOR-SOL.png" alt="MORENA-PES" class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         MORENA - PES
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_21" data-id="28" type="text"  size="8"/></small></span>
                                     </div>

                                 </div>
                             </li>

                         </ul>
                         <ul class="list-unstyled team-members pt-mor_presidente" id="" >
                             <li>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <div class="avatar">
                                             <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MORENA-PT.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         MORENA - PT
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_26" data-id="29"  type="text"  size="8"/></small></span>
                                     </div>

                                 </div>
                             </li>

                         </ul>
                     </div>
                 </div>
             </div>

             <div class="col-lg-4" id="partidos_independientes_presidente">
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
                                             <img src="<?php echo $this->request->webroot?>paper/img//partidos_png/Bronco.png" alt="Bronco" class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         Bronco
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_23" data-id="32"  type="text"  size="8"/></small></span>
                                     </div>

                                 </div>
                             </li>
                             <li>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <div class="avatar">
                                             <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/Margarita Zavala.png" alt="Margarita Z." class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         Margarita Zavala
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_22" data-id="31" type="text"  size="8"/></small></span>
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
                                             <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         No Registrados
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_24" data-id="34"  type="text"  size="8"/></small></span>
                                     </div>

                                 </div>
                             </li>
                             <li>
                                 <div class="row">
                                     <div class="col-xs-4">
                                         <div class="avatar">
                                             <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                         </div>
                                     </div>
                                     <div class="col-xs-7">
                                         Votos Nulos
                                         <br>
                                         <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_presidente_25" data-id="33"  type="text"  size="8"/></small></span>
                                     </div>

                                 </div>
                             </li>

                         </ul>
                     </div>
                 </div>
             </div>
        <?php
         }
         ?>


    <?php
    if(count($data_resFinalesP['noreg_nulos'])>0)
    {
        foreach ($data_resFinalesP['noreg_nulos'] as $bloques => $partidos)
        {
            $id_pi = ($bloques == 0) ? 'partidos_independientes_presidente' : '';
            ?>
            <div class="col-lg-4" id="<?=$id_pi;?>">
                <div class="card">
                    <div class="header">
                        <h4 class="title"></h4>
                    </div>
                    <div class="content">
                        <ul class="list-unstyled team-members">
                            <?php
                            foreach($partidos as $p) {
                                ?>
                                <li>
                                    <div class="row">
                                        <div class="col-xs-4">
                                            <div class="avatar">
                                                <img src="<?php echo $this->request->webroot ?>paper/img/partidos_png/<?=$p['nombre'].'.png';?>"
                                                     alt="<?=$p['nombre'];?>" class="img-circle img-no-padding img-responsive">
                                            </div>
                                        </div>
                                        <div class="col-xs-7">
                                            <?=$p['nombre'];?>
                                            <br>
                                            <span class="text-info"><small>
                                            <input class="input-resultados voto" id="xmf_presidente_<?=$p['id'];?>" data-id="<?=$p['id'];?>" value="<?=$p['votes'];?>" type="text"
                                         size="8"/></small></span>
                                        </div>

                                    </div>
                                </li>
                            <?php
                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </div>
            <?php
        }
    }
    ?>
    </div>
    <div id="bloquesCoalicionesS">
        <?php
        if(count($data_resFinalesS['coaliciones'])>0) {
            foreach ($data_resFinalesS['coaliciones'] as $bloques => $partidos)
            {
                $display = ($bloques == 3) ? 'none' : 'block';
                $id_col  = ($bloques == 2) ? 'pt-mor-pes_senador' : '';
                $id_col_lg  = ($bloques == 3) ? 'pt-mor_senador' : '';
                ?>
                <div class="col-lg-4  <?=$id_col_lg;?>  <?=$id_col;?>" >
                    <div class="card">
                        <div class="header">
                            <h4 class="title">
                                <small class="text-info <?=$id_col;?>">COALICIÓN <?=$partidos[0]['name'];?></small>
                            </h4>
                        </div>
                        <div class="content">
                            <?php

                            ?>
                            <ul class="list-unstyled team-members <?=$id_col;?>" style="display: <?=$display;?>">
                                <?php
                                foreach($partidos as $p)
                                {
                                    ?>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="avatar">
                                                    <img src="<?=$this->request->webroot;?>paper/img/partidos_png/<?=str_replace(" ","-",$p['name']);?>.png"
                                                         alt="PAN-PRD-MC" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <?=$p['name'];?>
                                                <br>
                                                <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_senador_<?=$p['id'];?>" value="<?=$p['data'];?>" data-id="<?=$p['id'];?>" type="text"
                                             size="8"/></small></span>
                                            </div>

                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>

                            </ul>
                            <?php
                            /*if($bloques == 3)
                            {
                                ?>
                                <ul class="list-unstyled team-members pt-mor_senador">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="avatar">
                                                    <img src="<?php echo $this->request->webroot ?>paper/img/partidos_png/MORENA-PT.png"
                                                         alt="Circle Image"
                                                         class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                MORENA - PT
                                                <br>
                                                <span class="text-info"><small>
                                            <input class="input-resultados voto" id="xmf_senador_<?= $p['id']; ?>"
                                                   data-id="<?= $p['id']; ?>" value="<?= $p['data']; ?>" type="text"
                                                   size="8"/></small></span>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                                <?php
                            }*/
                            ?>

                        </div>
                    </div>
                </div>
                <?php
            }
        }else{
            ?>
            <div class="col-lg-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title"><small class="text-info">COALICIÓN PAN-PRD-MC</small></h4>
                    </div>
                    <div class="content">
                        <ul class="list-unstyled team-members">
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN-PRD-MC.png" alt="PAN-PRD-MC" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PAN - PRD - MC
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_10" data-id="10" type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN-PRD.png" alt="PAN-PRD" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PAN - PRD
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_11" data-id="11"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN-MC.png" alt="PAN-MC" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PAN - MC
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_12" data-id="12" type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRD-MC.png" alt="PRD-MC" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PRD - MC
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_13" data-id="13"  type="text"  size="8"/></small></span>
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
                        <h4 class="title"><small class="text-info">COALICIÓN PRI-PVE-PANAL</small></h4>
                    </div>
                    <div class="content">
                        <ul class="list-unstyled team-members">
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI-PVE-PANAL.png" alt="PRI-PVE-PANAL" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PRI - PVE - PANAL
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_14" data-id="14"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI-PVE.png" alt="PRI-PVE" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PRI - PVE
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_15" data-id="15" type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI-PANAL.png" alt="PRI-PANAL" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PRI - PANAL
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_16" data-id="16"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PVE-PANAL.png" alt="PVE-PANAL" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PVE - PANAL
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_17" data-id="17"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-mor-pes_senador">
                <div class="card">
                    <div class="header">
                        <h4 class="title " id="coalicion_title"><small class="text-info pt-mor-pes_senador">COALICIÓN MORENA-PT-PES</small></h4>
                    </div>
                    <div class="content">
                        <ul class="list-unstyled team-members pt-mor-pes_senador" >
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MORENA-PT-PES.png" alt="PT-MOR-PES" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        MORENA - PT - PES
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_18" data-id="27"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MORENA-PT.png" alt="MORENA-PT" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        MORENA - PT
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_19" data-id="29"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PT-PES.png" alt="PT-PES" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PT - PES
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_20" data-id="30" type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOR-SOL.png" alt="MORENA-PES" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        MORENA - PES
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_21" data-id="28" type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-lg-4" id="partidos_independientes_senador">
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
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/Bronco.png" alt="Bronco" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        Bronco
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_23" data-id="32"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/Margarita Zavala.png" alt="Margarita Z." class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        Margarita Zavala
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_22" data-id="31" type="text"  size="8"/></small></span>
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
                                            <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        No Registrados
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_24" data-id="34"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        Votos Nulos
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_senador_25" data-id="33"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>


        <?php
        if(count($data_resFinalesS['noreg_nulos'])>0)
        {
            foreach ($data_resFinalesS['noreg_nulos'] as $bloques => $partidos) {
                ?>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title"></h4>
                        </div>
                        <div class="content">
                            <ul class="list-unstyled team-members">
                                <?php
                                foreach($partidos as $p) {
                                    ?>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="avatar">
                                                    <img src="<?php echo $this->request->webroot ?>paper/img/partidos_png/<?=$p['nombre'].'.png';?>"
                                                         alt="<?=$p['nombre'];?>" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <?=$p['nombre'];?>
                                                <br>
                                                <span class="text-info"><small>
                                            <input class="input-resultados voto" id="xmf_senador_<?=$p['id'];?>" data-id="<?=$p['id'];?>" value="<?=$p['votes'];?>" type="text"
                                                   size="8"/></small></span>
                                            </div>

                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <div id="bloquesCoalicionesD">
        <?php
        if(count($data_resFinalesD['coaliciones'])>0) {
            foreach ($data_resFinalesD['coaliciones'] as $bloques => $partidos)
            {
                $display = ($bloques == 3) ? 'none' : 'block';
                $id_col  = ($bloques == 2) ? 'pt-mor-pes_diputado' : '';
                $id_col_lg  = ($bloques == 3) ? 'pt-mor_diputado' : '';
                ?>
                <div class="col-lg-4  <?=$id_col_lg;?>  <?=$id_col;?>" >
                    <div class="card">
                        <div class="header">
                            <h4 class="title">
                                <small class="text-info <?=$id_col;?>">COALICIÓN <?=$partidos[0]['name'];?></small>
                            </h4>
                        </div>
                        <div class="content">
                            <?php

                            ?>
                            <ul class="list-unstyled team-members <?=$id_col;?>" style="display: <?=$display;?>">
                                <?php
                                foreach($partidos as $p)
                                {
                                    ?>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="avatar">
                                                    <img src="<?=$this->request->webroot;?>paper/img/partidos_png/<?=str_replace(" ","-",$p['name']);?>.png"
                                                         alt="PAN-PRD-MC" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <?=$p['name'];?>
                                                <br>
                                                <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_diputado_<?=$p['id'];?>" value="<?=$p['data'];?>" data-id="<?=$p['id'];?>" type="text"
                                             size="8"/></small></span>
                                            </div>

                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>

                            </ul>
                            <?php
                            /*if($bloques == 3)
                            {
                                ?>
                                <ul class="list-unstyled team-members pt-mor_diputado">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="avatar">
                                                    <img src="<?php echo $this->request->webroot ?>paper/img/partidos_png/MORENA-PT.png"
                                                         alt="Circle Image"
                                                         class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                MORENA - PT
                                                <br>
                                                <span class="text-info"><small>
                                            <input class="input-resultados voto" id="xmf_diputado_<?= $p['id']; ?>"
                                                   data-id="<?= $p['id']; ?>" value="<?= $p['data']; ?>" type="text"
                                                   size="8"/></small></span>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                                <?php
                            }*/
                            ?>

                        </div>
                    </div>
                </div>
                <?php
            }
        }else{
            ?>
            <div class="col-lg-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title"><small class="text-info">COALICIÓN PAN-PRD-MC</small></h4>
                    </div>
                    <div class="content">
                        <ul class="list-unstyled team-members">
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN-PRD-MC.png" alt="PAN-PRD-MC" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PAN - PRD - MC
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_diputado_10" data-id="10" type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN-PRD.png" alt="PAN-PRD" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PAN - PRD
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_diputado_11" data-id="11"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN-MC.png" alt="PAN-MC" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PAN - MC
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_diputado_12" data-id="12" type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRD-MC.png" alt="PRD-MC" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PRD - MC
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_diputado_13" data-id="13"  type="text"  size="8"/></small></span>
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
                        <h4 class="title"><small class="text-info">COALICIÓN PRI-PVE-PANAL</small></h4>
                    </div>
                    <div class="content">
                        <ul class="list-unstyled team-members">
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI-PVE-PANAL.png" alt="PRI-PVE-PANAL" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PRI - PVE - PANAL
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_diputado_14" data-id="14"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI-PVE.png" alt="PRI-PVE" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PRI - PVE
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_diputado_15" data-id="15" type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI-PANAL.png" alt="PRI-PANAL" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PRI - PANAL
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_diputado_16" data-id="16"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PVE-PANAL.png" alt="PVE-PANAL" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PVE - PANAL
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_diputado_17" data-id="17"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-mor-pes_diputado">
                <div class="card">
                    <div class="header">
                        <h4 class="title " id="coalicion_title"><small class="text-info pt-mor-pes_diputado">COALICIÓN MORENA-PT-PES</small></h4>
                    </div>
                    <div class="content">
                        <ul class="list-unstyled team-members pt-mor-pes_diputado" id="">
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MORENA-PT-PES.png" alt="PT-MOR-PES" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        MORENA - PT - PES
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_diputado_18" data-id="27"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MORENA-PT.png" alt="MORENA-PT" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        MORENA - PT
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_diputado_19" data-id="29"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PT-PES.png" alt="PT-PES" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PT - PES
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_diputado_20" data-id="30" type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOR-SOL.png" alt="MORENA-PES" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        MORENA - PES
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_diputado_21" data-id="28" type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                        </ul>

                    </div>
                </div>
            </div>

            <div class="col-lg-4" id="partidos_independientes_diputado">

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
                                            <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        No Registrados
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_diputado_24" data-id="34"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        Votos Nulos
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_diputado_25" data-id="33"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>


        <?php
        if(count($data_resFinalesD['noreg_nulos'])>0)
        {
            foreach ($data_resFinalesD['noreg_nulos'] as $bloques => $partidos) {
                ?>
                <div class="col-lg-4">
                    <div class="card">
                        <div class="header">
                            <h4 class="title"></h4>
                        </div>
                        <div class="content">
                            <ul class="list-unstyled team-members">
                                <?php
                                foreach($partidos as $p)
                                {
                                    ?>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="avatar">
                                                    <img src="<?php echo $this->request->webroot ?>paper/img/partidos_png/<?=$p['nombre'].'.png';?>"
                                                         alt="<?=$p['nombre'];?>" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <?=$p['nombre'];?>
                                                <br>
                                                <span class="text-info"><small>
                                            <input class="input-resultados voto" id="xmf_diputado_<?=$p['id'];?>" data-id="<?=$p['id'];?>" value="<?=$p['votes'];?>" type="text"
                                                   size="8"/></small></span>
                                            </div>

                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>
    <div id="bloquesCoalicionesA">
        <?php
        if(count($data_resFinalesA['coaliciones'])>0) {
            foreach ($data_resFinalesA['coaliciones'] as $bloques => $partidos)
            {
                $display = ($bloques == 3) ? 'none' : 'block';
                $id_col  = ($bloques == 2) ? 'pt-mor-pes_ayuntamiento' : '';
                $id_col_lg  = ($bloques == 3) ? 'pt-mor_ayuntamiento' : '';
                ?>
                <div class="col-lg-4  <?=$id_col_lg;?>  <?=$id_col;?>" >
                    <div class="card">
                        <div class="header">
                            <h4 class="title">
                                <small class="text-info <?=$id_col;?>">COALICIÓN <?=$partidos[0]['name'];?></small>
                            </h4>
                        </div>
                        <div class="content">
                            <?php

                            ?>
                            <ul class="list-unstyled team-members <?=$id_col;?>" style="display: <?=$display;?>">
                                <?php
                                foreach($partidos as $p)
                                {
                                    ?>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="avatar">
                                                    <img src="<?=$this->request->webroot;?>paper/img/partidos_png/<?=str_replace(" ","-",$p['name']);?>.png"
                                                         alt="PAN-PRD-MC" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <?=$p['name'];?>
                                                <br>
                                                <span class="text-info"><small>
                                      <input class="input-resultados voto" id="xmf_ayuntamiento_<?=$p['id'];?>" value="<?=$p['data'];?>" data-id="<?=$p['id'];?>" type="text"
                                             size="8"/></small></span>
                                            </div>

                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>

                            </ul>
                            <?php
                            if($bloques == 3)
                            {
                                ?>
                                <ul class="list-unstyled team-members" id="">
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="avatar">
                                                    <img src="<?php echo $this->request->webroot ?>paper/img/partidos_png/MORENA-PT.png"
                                                         alt="Circle Image"
                                                         class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                MORENA - PT
                                                <br>
                                                <span class="text-info"><small>
                                            <input class="input-resultados voto" id="xmf_ayuntamiento_39"
                                                   data-id="<?= $p['id']; ?>" value="<?= $p['data']; ?>" type="text"
                                                   size="8"/></small></span>
                                            </div>

                                        </div>
                                    </li>
                                </ul>
                                <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
                <?php
            }
        }else{
            ?>
            <div class="col-lg-4">
                <div class="card">
                    <div class="header">
                        <h4 class="title"><small class="text-info">COALICIÓN PAN-PRD-MC</small></h4>
                    </div>
                    <div class="content">
                        <ul class="list-unstyled team-members">
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN-PRD-MC.png" alt="PAN-PRD-MC" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PAN - PRD - MC
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_10" data-id="10" type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN-PRD.png" alt="PAN-PRD" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PAN - PRD
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_11" data-id="11"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN-MC.png" alt="PAN-MC" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PAN - MC
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_12" data-id="12" type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRD-MC.png" alt="PRD-MC" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PRD - MC
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_13" data-id="13"  type="text"  size="8"/></small></span>
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
                        <h4 class="title"><small class="text-info">COALICIÓN PRI-PVE-PANAL</small></h4>
                    </div>
                    <div class="content">
                        <ul class="list-unstyled team-members">
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI-PVE-PANAL.png" alt="PRI-PVE-PANAL" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PRI - PVE - PANAL
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_14" data-id="14"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI-PVE.png" alt="PRI-PVE" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PRI - PVE
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_15" data-id="15" type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PRI-PANAL.png" alt="PRI-PANAL" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PRI - PANAL
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_16" data-id="16"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PVE-PANAL.png" alt="PVE-PANAL" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PVE - PANAL
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_17" data-id="17"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 pt-mor-pes_ayuntamiento ">
                <div class="card">
                    <div class="header">
                        <h4 class="title " id="coalicion_title"><small class="text-info pt-mor-pes_ayuntamiento">COALICIÓN MORENA-PT-PES</small></h4>
                    </div>
                    <div class="content">
                        <ul class="list-unstyled team-members" id="">
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MORENA-PT-PES.png" alt="PT-MOR-PES" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        MORENA - PT - PES
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_18" data-id="27"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MORENA-PT.png" alt="MORENA-PT" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        MORENA - PT
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_19" data-id="29"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PT-PES.png" alt="PT-PES" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        PT - PES
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_20" data-id="30" type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MOR-SOL.png" alt="MORENA-PES" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        MORENA - PES
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_21" data-id="28" type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                        </ul>
                        <ul class="list-unstyled team-members pt-mor_ayuntamiento" id="">
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MORENA-PT.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        MORENA - PT
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_37" data-id="29"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4  pt-mor_ayuntamiento "  >
                <div class="card">
                    <div class="header">
                        <h4 class="title " id="coalicion_title"><small class="text-info">COALICIÓN MORENA-PT</small></h4>
                    </div>
                    <div class="content">

                        <ul class="list-unstyled team-members" >
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/MORENA-PT.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        MORENA - PT
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_36" data-id="36"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-4" id="partidos_independientes_ayuntamiento">

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
                                            <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        No Registrados
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_24" data-id="34"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>
                            <li>
                                <div class="row">
                                    <div class="col-xs-4">
                                        <div class="avatar">
                                            <img src="<?php echo $this->request->webroot?>paper/img/user.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">
                                        </div>
                                    </div>
                                    <div class="col-xs-7">
                                        Votos Nulos
                                        <br>
                                        <span class="text-info"><small>
                                  <input class="input-resultados voto" id="xmf_ayuntamiento_25" data-id="33"  type="text"  size="8"/></small></span>
                                    </div>

                                </div>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
            <?php
        }
        ?>


        <?php
        if(count($data_resFinalesA['noreg_nulos'])>0)
        {
            foreach ($data_resFinalesA['noreg_nulos'] as $bloques => $partidos) {
                ?>
                <div class="col-lg-4" >
                    <div class="card">
                        <div class="header">
                            <h4 class="title"></h4>
                        </div>
                        <div class="content">
                            <ul class="list-unstyled team-members">
                                <?php
                                foreach($partidos as $p) {
                                    ?>
                                    <li>
                                        <div class="row">
                                            <div class="col-xs-4">
                                                <div class="avatar">
                                                    <img src="<?php echo $this->request->webroot ?>paper/img/partidos_png/<?=$p['nombre'].'.png';?>"
                                                         alt="<?=$p['nombre'];?>" class="img-circle img-no-padding img-responsive">
                                                </div>
                                            </div>
                                            <div class="col-xs-7">
                                                <?=$p['nombre'];?>
                                                <br>
                                                <span class="text-info"><small>
                                            <input class="input-resultados voto" id="xmf_ayuntamiento_<?=$p['id'];?>" data-id="<?=$p['id'];?>" value="<?=$p['votes'];?>" type="text"
                                                   size="8"/></small></span>
                                            </div>

                                        </div>
                                    </li>
                                    <?php
                                }
                                ?>

                            </ul>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>

</div>
<div class="row">
<button type="button" id="btn_reporte_ff" class="btn btn-fill btn-success" onclick="addLastReport();">Enviar Reporte</button>
<p>

</p>
</div>

</div>
<?= $this->Form->end();?>

<script>
function setTypoVote(obj)
{
    for(x=1;x<=4;x++)
    {
        $("#typo_voto_"+x).removeClass('active');
    }

    $(obj).addClass('active');
    $('#xmf_tipo_votaciones_id').val($(obj).attr('data-id'));

    switch ($('#xmf_tipo_votaciones_id').val()){
        case '1':
            var tipo_voto = 'presidente';
            $('#bloquesPartidosP').show();
            $('#bloquesPartidosS').hide();
            $('#bloquesPartidosD').hide();
            $('#bloquesPartidosA').hide();

            $('#bloquesCoalicionesP').show();
            $('#bloquesCoalicionesS').hide();
            $('#bloquesCoalicionesD').hide();
            $('#bloquesCoalicionesA').hide();
            break;
        case '2':
            var tipo_voto = 'senador';
            $('#bloquesPartidosP').hide();
            $('#bloquesPartidosS').show();
            $('#bloquesPartidosD').hide();
            $('#bloquesPartidosA').hide();

            $('#bloquesCoalicionesP').hide();
            $('#bloquesCoalicionesS').show();
            $('#bloquesCoalicionesD').hide();
            $('#bloquesCoalicionesA').hide();
            break;
        case '3':
            var tipo_voto = 'diputado';
            $('#bloquesPartidosP').hide();
            $('#bloquesPartidosS').hide();
            $('#bloquesPartidosD').show();
            $('#bloquesPartidosA').hide();

            $('#bloquesCoalicionesP').hide();
            $('#bloquesCoalicionesS').hide();
            $('#bloquesCoalicionesD').show();
            $('#bloquesCoalicionesA').hide();
            break;
        case '4':
            var tipo_voto = 'ayuntamiento';
            $('#bloquesPartidosP').hide();
            $('#bloquesPartidosS').hide();
            $('#bloquesPartidosD').hide();
            $('#bloquesPartidosA').show();

            $('#bloquesCoalicionesP').hide();
            $('#bloquesCoalicionesS').hide();
            $('#bloquesCoalicionesD').hide();
            $('#bloquesCoalicionesA').show();
            break;
    }

    $('#xmf_tipo_voto').val(tipo_voto);

    $('.voto').each(function(i, obj) {
        $(obj).prop('disabled', false);
    });

    if($('#xmf_tipo_votaciones_id').val() == 4){


        $('.pt-mor-pes_'+tipo_voto).hide();
        //('#pt-mor_'+tipo_voto).show();
        $('.pt-mor_'+tipo_voto).show();
        $('#coalicion_title').html('<small class="text-info">COALICIÓN MORENA-PT</small>');
        $('#xmf_'+tipo_voto+'_18').val('0');
        $('#xmf_'+tipo_voto+'_18').attr('disabled',true);

        $('#xmf_'+tipo_voto+'_8').attr("data-id","37");
        $('#xmf_'+tipo_voto+'_5').attr("data-id","38");

        $('#xmf_'+tipo_voto+'_19').val('0');
        $('#xmf_'+tipo_voto+'_19').attr('disabled',true);

        $('#xmf_'+tipo_voto+'_20').val('0');
        $('#xmf_'+tipo_voto+'_20').attr('disabled',true);

        $('#xmf_'+tipo_voto+'_21').val('0');
        $('#xmf_'+tipo_voto+'_21').attr('disabled',true);

        $('#xmf_'+tipo_voto+'_22').val('0');
        $('#xmf_'+tipo_voto+'_22').attr('disabled',true);

        $('#xmf_'+tipo_voto+'_23').val('0');
        $('#xmf_'+tipo_voto+'_23').attr('disabled',true);
        $('#xmf_'+tipo_voto+'_26').val('0');

    }else{
        $('.pt-mor-pes_'+tipo_voto).show();
        $('.pt-mor_'+tipo_voto).hide();
        $('#coalicion_title').html('<small class="text-info">COALICIÓN MORENA-PT-PES</small>');
        $('#xmf_'+tipo_voto+'_8').attr("data-id","8");
        $('#xmf_'+tipo_voto+'_5').attr("data-id","5");
    }

    if($('#xmf_tipo_votaciones_id').val() == 2 || $('#xmf_tipo_votaciones_id').val() == 3)
    {
      $('#xmf_'+tipo_voto+'_22').val('0');
      $('#xmf_'+tipo_voto+'_22').attr('disabled',true);
      $('#xmf_'+tipo_voto+'_23').val('0');
      $('#xmf_'+tipo_voto+'_23').attr('disabled',true);
    }

    if(tipo_voto == 'presidente'){
        $('#partidos_independientes_presidente').show();

    }else{
        $('#partidos_independientes_presidente').hide();
        $('#partidos_independientes_senador').hide();
        $('#partidos_independientes_diputado').hide();
        $('#partidos_independientes_ayuntamiento').hide();
    }
}


function addLastReport()
{

  if($('#xmf_tipo_votaciones_id').val()=='')
  {
    $.notify ({
         icon: 'ti-package',
         message: "<b>Seleccionar Tipo de Repoprte</b>."

       },{
           type: 'warning',
           timer: 2000
       });
    return false;
  }
  var insertData = 1;
  /*$('.voto').each(function(i, obj) {
      if($(obj).val() == ''){
        insertData --;
      }
  });*/

    $('.voto').each(function(i, obj) {
        if($(obj).val() == '')
        {
            $(obj).val('0');
        }
    });
  var tipo_voto = $('#xmf_tipo_voto').val();

    if(insertData==1){
   $.ajax({
       url: '/Xmf/addLastReport',
       type: "POST",
       dataType: "json",
       data: {
           casilla_id:$('#casilla_id').val(),
           xmf_tipo_votaciones_id:$('#xmf_tipo_votaciones_id').val(),

           xmf_partido_1:$('#xmf_'+tipo_voto+'_1').val(),
           xmf_partido_id_1:$('#xmf_'+tipo_voto+'_1').attr('data-id'),

           xmf_partido_2:$('#xmf_'+tipo_voto+'_2').val(),
           xmf_partido_id_2:$('#xmf_'+tipo_voto+'_2').attr('data-id'),

           xmf_partido_3:$('#xmf_'+tipo_voto+'_3').val(),
           xmf_partido_id_3:$('#xmf_'+tipo_voto+'_3').attr('data-id'),

           xmf_partido_4:$('#xmf_'+tipo_voto+'_4').val(),
           xmf_partido_id_4:$('#xmf_'+tipo_voto+'_4').attr('data-id'),

           xmf_partido_5:$('#xmf_'+tipo_voto+'_5').val(),
           xmf_partido_id_5:$('#xmf_'+tipo_voto+'_5').attr('data-id'),

           xmf_partido_6:$('#xmf_'+tipo_voto+'_6').val(),
           xmf_partido_id_6:$('#xmf_'+tipo_voto+'_6').attr('data-id'),

           xmf_partido_7:$('#xmf_'+tipo_voto+'_7').val(),
           xmf_partido_id_7:$('#xmf_'+tipo_voto+'_7').attr('data-id'),

           xmf_partido_8:$('#xmf_'+tipo_voto+'_8').val(),
           xmf_partido_id_8:$('#xmf_'+tipo_voto+'_8').attr('data-id'),

           xmf_partido_9:$('#xmf_'+tipo_voto+'_9').val(),
           xmf_partido_id_9:$('#xmf_'+tipo_voto+'_9').attr('data-id'),

           xmf_partido_10:$('#xmf_'+tipo_voto+'_10').val(),
           xmf_partido_id_10:$('#xmf_'+tipo_voto+'_10').attr('data-id'),

           xmf_partido_11:$('#xmf_'+tipo_voto+'_11').val(),
           xmf_partido_id_11:$('#xmf_'+tipo_voto+'_11').attr('data-id'),

           xmf_partido_12:$('#xmf_'+tipo_voto+'_12').val(),
           xmf_partido_id_12:$('#xmf_'+tipo_voto+'_12').attr('data-id'),

           xmf_partido_13:$('#xmf_'+tipo_voto+'_13').val(),
           xmf_partido_id_13:$('#xmf_'+tipo_voto+'_13').attr('data-id'),

           xmf_partido_14:$('#xmf_'+tipo_voto+'_14').val(),
           xmf_partido_id_14:$('#xmf_'+tipo_voto+'_14').attr('data-id'),

           xmf_partido_15:$('#xmf_'+tipo_voto+'_15').val(),
           xmf_partido_id_15:$('#xmf_'+tipo_voto+'_15').attr('data-id'),

           xmf_partido_16:$('#xmf_'+tipo_voto+'_16').val(),
           xmf_partido_id_16:$('#xmf_'+tipo_voto+'_16').attr('data-id'),

           xmf_partido_17:$('#xmf_'+tipo_voto+'_17').val(),
           xmf_partido_id_17:$('#xmf_'+tipo_voto+'_17').attr('data-id'),

           xmf_partido_18:$('#xmf_'+tipo_voto+'_18').val(),
           xmf_partido_id_18:$('#xmf_'+tipo_voto+'_18').attr('data-id'),

           xmf_partido_19:$('#xmf_'+tipo_voto+'_19').val(),
           xmf_partido_id_19:$('#xmf_'+tipo_voto+'_19').attr('data-id'),

           xmf_partido_20:$('#xmf_'+tipo_voto+'_20').val(),
           xmf_partido_id_20:$('#xmf_'+tipo_voto+'_20').attr('data-id'),

           xmf_partido_21:$('#xmf_'+tipo_voto+'_21').val(),
           xmf_partido_id_21:$('#xmf_'+tipo_voto+'_21').attr('data-id'),

           xmf_partido_22:$('#xmf_'+tipo_voto+'_22').val(),
           xmf_partido_id_22:$('#xmf_'+tipo_voto+'_22').attr('data-id'),

           xmf_partido_23:$('#xmf_'+tipo_voto+'_23').val(),
           xmf_partido_id_23:$('#xmf_'+tipo_voto+'_23').attr('data-id'),

           xmf_partido_24:$('#xmf_'+tipo_voto+'_24').val(),
           xmf_partido_id_24:$('#xmf_'+tipo_voto+'_24').attr('data-id'),

           xmf_partido_25:$('#xmf_'+tipo_voto+'_25').val(),
           xmf_partido_id_25:$('#xmf_'+tipo_voto+'_25').attr('data-id'),

           xmf_partido_26:$('#xmf_'+tipo_voto+'_26').val(),
           xmf_partido_id_26:$('#xmf_'+tipo_voto+'_26').attr('data-id'),

           xmf_partido_27:$('#xmf_'+tipo_voto+'_27').val(),
           xmf_partido_id_27:$('#xmf_'+tipo_voto+'_27').attr('data-id'),

           xmf_partido_28:$('#xmf_'+tipo_voto+'_28').val(),
           xmf_partido_id_28:$('#xmf_'+tipo_voto+'_28').attr('data-id'),

           xmf_partido_29:$('#xmf_'+tipo_voto+'_29').val(),
           xmf_partido_id_29:$('#xmf_'+tipo_voto+'_29').attr('data-id'),

           xmf_partido_30:$('#xmf_'+tipo_voto+'_30').val(),
           xmf_partido_id_30:$('#xmf_'+tipo_voto+'_30').attr('data-id'),

           xmf_partido_31:$('#xmf_'+tipo_voto+'_31').val(),
           xmf_partido_id_31:$('#xmf_'+tipo_voto+'_31').attr('data-id'),

           xmf_partido_32:$('#xmf_'+tipo_voto+'_32').val(),
           xmf_partido_id_32:$('#xmf_'+tipo_voto+'_32').attr('data-id'),

           xmf_partido_33:$('#xmf_'+tipo_voto+'_33').val(),
           xmf_partido_id_33:$('#xmf_'+tipo_voto+'_33').attr('data-id'),

           xmf_partido_34:$('#xmf_'+tipo_voto+'_34').val(),
           xmf_partido_id_34:$('#xmf_'+tipo_voto+'_34').attr('data-id'),

           xmf_partido_35:$('#xmf_'+tipo_voto+'_35').val(),
           xmf_partido_id_35:$('#xmf_'+tipo_voto+'_35').attr('data-id'),

           xmf_partido_36:$('#xmf_'+tipo_voto+'_36').val(),
           xmf_partido_id_36:$('#xmf_'+tipo_voto+'_36').attr('data-id'),

           xmf_partido_37:$('#xmf_'+tipo_voto+'_37').val(),
           xmf_partido_id_37:$('#xmf_'+tipo_voto+'_37').attr('data-id'),

           xmf_partido_38:$('#xmf_'+tipo_voto+'_38').val(),
           xmf_partido_id_38:$('#xmf_'+tipo_voto+'_38').attr('data-id'),

           xmf_partido_39:$('#xmf_'+tipo_voto+'_39').val(),
           xmf_partido_id_39:$('#xmf_'+tipo_voto+'_39').attr('data-id')
       }
       ,
       success: function (json) {

           $.notify ({
                icon: 'ti-package',
                message: "<b>Resultados Finales</b> Enviados."

              },{
                  type: 'danger',
                  timer: 2000
              });
              //$('#btn_reporte_f').attr('disabled','disabled');
              if($('#xmf_reset').val() == '1')
              {
                $('.voto').each(function(i, obj) {
                    $(obj).val('');
                    $(obj).attr('disabled',true);
                });
              }else{
                $('.voto').each(function(i, obj) {
                    $(obj).attr('disabled',true);
                });
              }
              $('.btn-finish').css('display','none');
              $('#btn_reporte_f').attr('disabled','disabled');
       },
       error: function (xhr, textStatus, errorThrown) {
           console.log(xhr);
       }
   });
 }else{
   $.notify ({
        icon: 'ti-package',
        message: "<b>Todos los Partidos deben tener Resultados</b>."

      },{
          type: 'danger',
          timer: 2000
      });
 }
}

$('.voto').each(function(i, obj) {
    $(obj).prop('disabled', true);
});

$( document ).ready(function() {
    setTypoVote($('#typo_voto_4'));
    $('input').on('click focusin', function() {
        this.value = '';
    });
});
</script>
