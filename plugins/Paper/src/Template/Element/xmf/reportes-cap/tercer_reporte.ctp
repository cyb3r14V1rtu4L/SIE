<?= $this->Form->create('ThirdReport',array('id'=>'ThirdReport'));?>
<h5 class="info-text">FLUJO DE VOTACIÓN 11:30 - 15:00 HRS</h5>
<div class="row">
    <div class="col-sm-6 text-center">
            <div class="form-group">
                <label>VOTANTES</label>
                <input id="votantes_tercero" name="votantes_tercer"
                  value="<?=(isset($casillas_tercero_reporte['votantes_tercero'])) ? $casillas_tercero_reporte['votantes_tercero']: ''?>"
                class="form-control valid"  aria-invalid="false" type="text">
                <input type="hidden" name="casilla_id" id="casilla_id" class="form-control" value="<?= (isset($id)) ? $id : $_SESSION['Casilla']['id'];?>">
            </div>
        </div>
        <div class="col-sm-6 text-center ">
            <div class="form-group">
                <label>PROMOVIDOS</label>
                <input id="promovidos_tercero" name="promovidos_tercero"
                  value="<?=(isset($casillas_tercero_reporte['promovidos_tercero'])) ? $casillas_tercero_reporte['promovidos_tercero']: ''?>"
                 class="form-control valid"  aria-invalid="false" type="text">
            </div>
        </div>
    </div>
<div class="row">
    <button type="button" id="btn_reporte_3" class="btn btn-fill btn-success" onclick="addThirdReport();">Enviar Reporte</button>
    <p>

    </p>
</div>
<?= $this->Form->end();?>

<script>
 function addThirdReport()
{
    $.ajax({
        url: '/Xmf/addThirdReport',
        type: "POST",
        dataType: "json",
        data: {
            casilla_id:$('#casilla_id').val(),
            votantes_tercero:$('#votantes_tercero').val(),
            promovidos_tercero:$('#promovidos_tercero').val(),

        }
        ,
        success: function (json) {

            $.notify ({
                 icon: 'ti-package',
                 message: "<b>Segundo Reporte</b> Enviado."

               },{
                   type: 'danger',
                   timer: 2000
               });
               $('#btn_reporte_3').attr('disabled','disabled');
        },
        error: function (xhr, textStatus, errorThrown) {
            console.log(xhr);
        }
    });
}
</script>
