<?= $this->Form->create('IncidenceReport',array('id'=>'IncidenceReport'));?>
<div class="col-lg-6">
    <div class="card">
        <div class="header">
            <h5 class="title"><small>INCIDENCIAS POR PARTIDO</small></h5>
        </div>
        <div class="content">
            <ul class="list-unstyled team-members">
                <li>
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="avatar">
                                <!-- <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PT.png" alt="Circle Image" class="img-circle img-no-padding img-responsive"> -->
                                <?= $this->Html->image('Paper.partidos_png/PT.png',['alt'=>'Circle Image ','class'=>'img-circle img-no-padding img-responsive']);?>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            Incidencias
                            <br>
                            <span class="text-success"><small>1</small></span>
                        </div>

                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="avatar">
                                <!-- <img src="<?php echo $this->request->webroot?>paper/img/partidos_png/PAN.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">> -->

                                <?= $this->Html->image('partidos_png/PAN.png',['alt'=>'Circle Image ','class'=>'img-circle img-no-padding img-responsive']);?>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            Incidencias
                            <br>
                            <span class="text-success"><small>3</small></span>
                        </div>

                    </div>
                </li>
                <li>
                    <div class="row">
                        <div class="col-xs-3">
                            <div class="avatar">
                                <!-- <img src="<?php echo $this->request->webroot?>paper/img/partidos/VER.png" alt="Circle Image" class="img-circle img-no-padding img-responsive">> -->
                                <?= $this->Html->image('partidos/VER.png',['alt'=>'Circle Image ','class'=>'img-circle img-no-padding img-responsive']);?>
                            </div>
                        </div>
                        <div class="col-xs-4">
                            Incidencias
                            <br>
                            <span class="text-success"><small>1</small></span>
                        </div>

                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="col-lg-6">
        <h5 class="info-text"><small>REPORTAR INCIDENCIA</small> </h5>
        <div class="col-sm-10 col-sm-offset-1">
        <div class="form-group">
            <select id="xmf_partidos_id" class="form-control">
                <option selected="">- Seleccionar Partido -</option>
                <option value="1">PAN</option>
                <option value="2">PRI</option>
                <option value="3">PRD</option>
                <option value="4">PVE</option>
                <option value="5">PT</option>
                <option value="6">MOV</option>
                <option value="7">NA</option>
                <option value="8">MOR</option>
                <option value="9">PES</option>
            </select>
            </div>
        </div>
        <div class="col-sm-10 col-sm-offset-1">
        <div class="form-group">
          <?php
          echo $this->Form->select('xmf_incidencias_id', $Incidencias,array('id'=>'xmf_incidencias_id','class' => 'form-control','empty'=>'--Seleccionar Incidencia--'));
          ?>
            </div>
        </div>

        <div class="col-sm-10 col-sm-offset-1">
            <div class="form-group">
                <label>OTRA INCIDENCIA</label>
                <textarea id="otra" class="form-control" placeholder="" rows="2"></textarea>
            </div>
        </div>
        <div class="col-sm-12 ">
            <button type="button" onclick="addIncidenceReport();" class="btn btn-info btn-fill btn-xs pull-right">Agregar Incidencia</button>
        </div>

</div>

<?= $this->Form->end();?>

<script>
 function addIncidenceReport()
{
    $.ajax({
        url: '/Xmf/addIncidenceReport',
        type: "POST",
        dataType: "json",
        data: {
            xmf_casillas_id:$('#casilla_id').val(),
            xmf_partidos_id:$('#xmf_partidos_id').val(),
            xmf_incidencias_id:$('#xmf_incidencias_id').val(),
            otra:$('#otra').val(),
        }
        ,
        success: function (json) {

            $.notify ({
                 icon: 'ti-package',
                 message: "<b>Incidencia</b> Agregada."

               },{
                   type: 'danger',
                   timer: 2000
               });
        },
        error: function (xhr, textStatus, errorThrown) {
            console.log(xhr);
        }
    });
}
</script>
