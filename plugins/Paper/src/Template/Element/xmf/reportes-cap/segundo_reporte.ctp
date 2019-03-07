<?= $this->Form->create('SecondReport',array('id'=>'SecondReport'));?>

<h5 class="info-text">FLUJO DE VOTACIÓN 8:00 - 12:00 HRS</h5>
<div class="row">
    <div class="col-sm-6 text-center">
        <div class="form-group">
            <label>VOTANTES</label>
            <input id="votantes_segundo" name="votantes_segundo"
            class="form-control valid"  aria-invalid="false" type="text"
            value="<?=(isset($casillas_segundo_reporte['votantes_segundo'])) ? $casillas_segundo_reporte['votantes_segundo']: ''?>">
            <input type="hidden" name="casilla_id" id="casilla_id" class="form-control" value="<?= (isset($id)) ? $id : $_SESSION['Casilla']['id'];?>">
        </div>
    </div>
    <div class="col-sm-6 text-center ">
        <div class="form-group">
            <label>PROMOVIDOS</label>
            <input id="promovidos_segundo" name="promovidos_segundo"
            value="<?=(isset($casillas_segundo_reporte['promovidos_segundo'])) ? $casillas_segundo_reporte['promovidos_segundo']: ''?>"
            class="form-control valid"  aria-invalid="false" type="text">
        </div>
    </div>
</div>
<div class="row">
    <button type="button" id="btn_reporte_2" class="btn btn-fill btn-success" onclick="addSecondReport();">Enviar Reporte</button>
    <p>

    </p>
</div>

<?= $this->Form->end();?>

<script>
function addSecondReport()
{
    $.ajax({
        url: '/Xmf/addSecondReport',
        type: "POST",
        dataType: "json",
        data: {
            casilla_id:$('#casilla_id').val(),
            votantes_segundo:$('#votantes_segundo').val(),
            promovidos_segundo:$('#promovidos_segundo').val(),

        }
        ,
        success: function (json) {

            $.notify ({
                 icon: 'ti-package',
                 message: "<b>Primer Reporte</b> Enviado."

               },{
                   type: 'danger',
                   timer: 2000
               });
               $('#btn_reporte_2').attr('disabled','disabled');
        },
        error: function (xhr, textStatus, errorThrown) {
            console.log(xhr);
        }
    });
}
</script>
