
<footer class="footer">
      <div class="container-fluid">
          <nav class="pull-left">
          </nav>
          <div class="copyright pull-right">
              &copy; <script>document.write(new Date().getFullYear())</script>, por <a href="http://www.cyberiavirtual.net">Cyberia Virtual</a>
          </div>
      </div>
</footer>
<?php
$url = explode("/",$this->request->url);

if($url[0] != ''){
  $method = (isset($url[1])) ? $url[1] : null;
  echo $method;
  switch ($method)
  {
    case 'monitor-casillas':
    case 'MonitorCasillas':
    ?>
        <script>
        $(document).ready(function () {
          function getMonitorCasillas()
          {
              $.ajax({
                  url:'/XmfCasillas/monitorCasillas',
                  type: 'POST',
                  dataType: "html",
                  evalScripts:true,

                  success:function (data, textStatus) {
                      $("#divMonitorCasillas").html(data);
                  }
              });
          }
          setInterval(getMonitorCasillas, 10000);
        });
        </script>
    <?php
    break;
    case 'SegundoReporte':
    ?>
        <script>
        $(document).ready(function () {
          function getMonitorCasillas()
          {
              $.ajax({
                  url:'/XmfReportsSegundoTercero/SegundoReporte',
                  type: 'POST',
                  dataType: "html",
                  evalScripts:true,

                  success:function (data, textStatus) {
                      $("#divMonitorCasillas").html(data);
                  }
              });
          }
          setInterval(getMonitorCasillas, 10000);
        });
        </script>
    <?php
    break;
    case 'TercerReporte':
    ?>
        <script>
        $(document).ready(function () {
          function getMonitorCasillas()
          {
              $.ajax({
                  url:'/XmfReportsSegundoTercero/TercerReporte',
                  type: 'POST',
                  dataType: "html",
                  evalScripts:true,

                  success:function (data, textStatus) {
                      $("#divMonitorCasillas").html(data);
                  }
              });
          }
          setInterval(getMonitorCasillas, 10000);
        });
        </script>
    <?php
    break;
    case 'CuartoReporte':
    ?>
        <script>
        $(document).ready(function () {
          function getMonitorCasillas()
          {
              $.ajax({
                  url:'/XmfReportsSegundoTercero/CuartoReporte',
                  type: 'POST',
                  dataType: "html",
                  evalScripts:true,

                  success:function (data, textStatus) {
                      $("#divMonitorCasillas").html(data);
                  }
              });
          }
          setInterval(getMonitorCasillas, 10000);
        });
        </script>
    <?php
    break;

    case 'lastReport':
        ?>
        <script>
            $(document).ready(function () {
                function getMonitorCasillas()
                {
                    $.ajax({
                        url:'/XmfViewReporteSegundosTerceros/lastReport/ayuntamiento',
                        type: 'POST',
                        dataType: "html",
                        evalScripts:true,

                        success:function (data, textStatus) {
                            $("#divMonitorFinales").html(data);
                        }
                    });
                }
                setInterval(getMonitorCasillas, 10000);
            });
        </script>
        <?php
    break;
  }
}else {
  if(isset($_SESSION['Auth']['User']['role_id']))
  {
    if($_SESSION['Auth']['User']['role_id'] == '80687266-6761-43a2-bd98-f42349a9bb63')
    {
      ?>
      <script>
      $(document).ready(function () {
        window.location ='/xmf';
      });
      </script>
      <?php
    }else{
      ?>
      <script>
      $(document).ready(function () {
        window.location ='/xmf-casillas/monitor-casillas';
      });
      </script>
      <?php
    }
  }else{
    ?>
    <script>
    $(document).ready(function () {
      window.location ='/users/logout';
    });
    </script>
    <?php
  }
}
  ?>
