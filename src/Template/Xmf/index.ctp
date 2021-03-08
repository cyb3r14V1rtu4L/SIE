<div class="col-md-2 col-lg-2"></div>
    <div class="col-md-7 col-lg-7 ">
        <div class="card card-user">
            <div class="content">
                <div class="author">
                    <img class="avatar border-white" src="<?php echo $this->request->webroot?>paper/img/partidos_png/morena.png" alt="...">
                    <hr/>

                </div>
                <div class="col-md-6 col-lg-6">
                    <h5 class="title"><small> </small></h5>
                    <h6 class="title"><small> </small></h6>
                    <p><a href="tel:9993519085"> </a></p>
                </div>
                    <div class="col-md-6 col-lg-6">
                        <h5 class="title"><small> </small></h5>
                        <h6 class="title"><small> </small></h6>
                        <p><a href="tel:9991277001"> </a></p>
                    </div>
                <br/>
                <hr/>
                <br/>
                <div class="text-center">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                          <hr/>
                          <h4><small>FUNCIONES PRINCIPALES - CASILLA</small></h5>
                        </div>
                        <h5><?=strtoupper($_SESSION['Auth']['User']['first_name'].'<br/>'.$_SESSION['Auth']['User']['last_name']);?></h5>
                        <h6><small>FUNCIONARIO DE CASILLA<small></h6>
                          <input type="hidden" id="xmf_casillas_id" value="<?=$_SESSION['Casilla']['id']?>">
                        <div class="row">
                            <div id="clocker" style="text-align:center;padding:1em 0;">
                                <iframe src="https://www.zeitverschiebung.net/clock-widget-iframe-v2?language=es&size=medium&timezone=America%2FMerida" width="100%" height="115" frameborder="0" seamless></iframe>
                            </div>
                            
                        </div>
                        <hr/>
                        <br/>

                        <div class="row">
                          	<div class="col-md-6 col-lg-6 col-sm-12">
                              <button class="btn btn-danger" type="button" 
                              	 data-status='P' data-type='presencia'
                              	 onclick="enviarEstatus(this)"><small>REPORTAR PRESENCIA <i class="ti-check"></i></small></button>
                              <br/>
                              <h5><small>07:00 HRS.</small></h5>
                        	</div>
                          	
                          	<div class="col-md-6 col-lg-6 col-sm-12">
                              <button class="btn btn-danger" type="button" 
                              	 data-status='I' data-type='instalacion'
                              	 onclick="enviarEstatus(this)"><small>INSTALACIÓN DE CASILLA <i class="ti-package"></i></small></button>
                              <br/>
                              <h5><small>09:00 HRS.</small></h5>
                        	</div>
                        	<div class="col-md-6 col-lg-6 col-sm-12">
                              <button type="button" class="btn btn-danger" 
                              	 data-status='V' data-type='inicio'
                              	 onclick="enviarEstatus(this)"><small>INICIO DE VOTACIÓN <i class="ti-user"></i></small></button>
                              <br/>
                              <h5><small>Iniciar Votación</small></h5>
                        	</div>
                            <div class="col-md-6 col-lg-3 col-sm-12"></div>
                          
                          	<div class="col-md-6 col-lg-6 col-sm-12">
                              <button type="button" class="btn btn-primary" onclick="enviarIncidencia()"><small>Enviar Incidencia <i class="ti-pulse"></i></small></button>
                              <br/>
                              <h5><small>Notificar Incidencia</small></h5>
                        	</div>
                        </div>
                        <hr/>
                        
                    </div>

                </div>
            </div>

            <div class="text-center">
                <div class="row">

                    <h5><?=$_SESSION['userCasillas']['name'];?></h5>
                    <div class="col-md-4 ">
                        <h5><small><?=$_SESSION['userCasillas']['clave_agrupamiento'];?></small></h5>
                    </div>
                    <div class="col-md-4">
                        <h5><small></small></h5>
                    </div>
                    <div class="col-md-4">
                        <h5><small><?=$_SESSION['userCasillas']['urbana'];?></small></h5>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div class="row"> </div>

<script>
    function showNotificationP(from, align){
        $(document).ready(function(){
            $.notify({
                icon: "ti-package",
                message: "<?=$message_p;?>"

            },{
                type: 'warning',
                timer: 4000,
                placement: {
                    from: from,
                    align: align
                }
            });
        });
    }

    function showNotificationI(from, align){
        $(document).ready(function(){
            $.notify({
                icon: "ti-package",
                message: "<?=$message_i;?>"

            },{
                type: 'warning',
                timer: 4000,
                placement: {
                    from: from,
                    align: align
                }
            });
        });
    }

    function showNotificationC(from, align){
        $(document).ready(function(){
            $.notify({
                icon: "ti-package",
                message: "<?=$message_c;?>"

            },{
                type: 'warning',
                timer: 4000,
                placement: {
                    from: from,
                    align: align
                }
            });
        });
    }

    function enviarEstatus(obj)
    {
        status = $(obj).attr('data-status');
        typo = $(obj).attr('data-type');
        
        $.ajax({
             url: '/XmfCasillas/enviarEstatus',
             type: "POST",
             dataType: "json",
             data: {
                 xmf_casillas_id : $('#xmf_casillas_id').val(),
                 status : status,
                 typo : typo
             }
             ,
             success: function (json) {
    			
                 $.notify ({
                      icon: 'ti-pulse',
                      message: json.message
    
                    },{
                        type: 'danger',
                        timer: 2000
                    });
                    $('#btn_reporte_2').attr('disabled','disabled');
             },
             error: function (xhr, textStatus, errorThrown) {
                 console.log(textStatus);
             }
         });
 	}

	function enviarIncidencia() {
       $.ajax({
           url: '/XmfCasillas/enviarIncidencia',
           type: "POST",
           dataType: "json",
           data: {
               xmf_casillas_id:$('#xmf_casillas_id').val(),
               xmf_total_incidencias:1
           }
           ,
           success: function (json) {

               $.notify ({
                    icon: 'ti-pulse',
                    message: "<b>Incidencia</b> Enviada."

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

  

   $(function(){
  var actualizarHora = function(){
    var fecha = new Date(),
        hora = fecha.getHours(),
        minutos = fecha.getMinutes(),
        segundos = fecha.getSeconds(),
        diaSemana = fecha.getDay(),
        dia = fecha.getDate(),
        mes = fecha.getMonth(),
        anio = fecha.getFullYear(),
        ampm;

    var $pHoras = $("#horas"),
        $pSegundos = $("#segundos"),
        $pMinutos = $("#minutos"),
        $pAMPM = $("#ampm"),
        $pDiaSemana = $("#diaSemana"),
        $pDia = $("#dia"),
        $pMes = $("#mes"),
        $pAnio = $("#anio");
    var semana = ['Domingo','Lunes','Martes','Miercoles','Jueves','Viernes','Sabado'];
    var meses = ['Enero','Febrero','Marzo','Abril','Mayo','Junio','Julio','Agosto','Septiembre','Octubre','Noviembre','Diciembre'];

    $pDiaSemana.text(semana[diaSemana]);
    $pDia.text(dia);
    $pMes.text(meses[mes]);
    $pAnio.text(anio);
    if(hora>=12){
      hora = hora - 12;
      ampm = "PM";
    }else{
      ampm = "AM";
    }
    if(hora == 0){
      hora = 12;
    }
    if(hora<10){$pHoras.text("0"+hora)}else{$pHoras.text(hora)};
    if(minutos<10){$pMinutos.text("0"+minutos)}else{$pMinutos.text(minutos)};
    if(segundos<10){$pSegundos.text("0"+segundos)}else{$pSegundos.text(segundos)};
    $pAMPM.text(ampm);

  };


  actualizarHora();
  var intervalo = setInterval(actualizarHora,1000);
});

    $('#clocker').click(function(){return false;});
    </script>
