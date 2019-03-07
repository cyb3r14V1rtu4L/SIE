<?php
$url = explode("/",$this->request->url);
$method = $url[1];
switch ($method)
{
  case 'monitor-casillas':
  case 'monitorCasillas':$active_1 = 'active';$active_2 = '';$active_3 = '';$active_4 = '';$active_5 = '';$active_6 = ''; break;
  case 'PrimerReporte':$active_1 = '';$active_2 = 'active';$active_3 = '';$active_4 = '';$active_5 = '';$active_6 = '';break;
  case 'SegundoReporte':$active_1 = '';$active_2 = '';$active_3 = 'active';$active_4 = '';$active_5 = '';$active_6 = '';break;
  case 'TercerReporte': $active_1 = ''; $active_2 = ''; $active_3 = ''; $active_4 = 'active'; $active_5 = '';$active_6 = ''; break;
  case 'CuartoReporte':$active_1 = '';$active_2 = '';$active_3 = ''; $active_4 = ''; $active_5 = 'active';$active_6 = '';break;
  case 'lastReport': $active_1 = '';$active_2 = ''; $active_3 = ''; $active_4 = '';$active_5 = ''; $active_6 = 'active';break;
  default: $active_1 = 'active'; $active_2 = ''; $active_3 = ''; $active_4 = ''; $active_5 = ''; $active_6 = ''; break;
}
?>
<ul class="nav">
    <li class="<?=$active_1;?>">
      <a href="<?php echo

      $this->Url->build('XmfCasillas/MonitorCasillas');
      ?>">
            <i class="ti-package"></i>
            <p>MONITOR CASILLAS</p>
        </a>
    </li>
    <li class="<?=$active_2;?>">
        <a href="<?php echo $this->Url->build('/XmfReportsSegundoTercero/PrimerReporte'); ?>">
            <i class="ti-bar-chart"></i>
            <p>PRIMER REPORTE</p>
        </a>
    </li>

    <li class="<?=$active_3;?>">
        <!-- <a href="index2.html"> -->
        <a href="<?php echo // $this->Url->build('/pages/reports/SegundoReporte');

        $this->Url->build('/XmfReportsSegundoTercero/SegundoReporte');
        ?>">
            <i class="ti-bar-chart"></i>
            <p>SEGUNDO REPORTE</p>
        </a>
    </li>

    <li class="<?=$active_4;?>">
        <a href="<?php echo $this->Url->build('/XmfReportsSegundoTercero/TercerReporte');?>">
            <i class="ti-bar-chart"></i>
            <p>TERCER REPORTE</p>
        </a>
    <li class="<?=$active_5;?>">
        <a href="<?php echo $this->Url->build('/XmfReportsSegundoTercero/CuartoReporte');?>">
            <i class="ti-bar-chart"></i>
            <p>CUARTO REPORTE</p>
        </a>
    </li>

    <li class="<?=$active_6;?>">
        <a href="<?php echo $this->Url->build('/XmfViewReporteSegundosTerceros/lastReport'); ?>">
            <i class="ti-user"></i>
            <p>RESULTADOS FINALES</p>
        </a>
    </li>
</ul>
