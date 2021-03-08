<div class="row ">
    <hr/>
    <?php
    $role_id = (isset($_SESSION['Auth']['User'])) ? $_SESSION['Auth']['User']['role_id']: 0;
    $is_superuser = (isset($_SESSION['Auth']['User'])) ? $_SESSION['Auth']['User']['is_superuser']: 0;

    $is_superuser = (isset($_SESSION['Auth']['User']))
    ? $_SESSION['Auth']['User']['is_superuser']
    : 0;

    if($is_superuser)
    {
        echo $this->element('Paper.xmf/monitor');
    }
    else
    {
        switch($role_id)
        {
            /*
            5197c80d-2d30-4225-a757-b31592c9e0f0 | Monitoreo  |
            80687266-6761-43a2-bd98-f42349a9bb63 | Captura    |
            e687cb91-4cdf-4ab2-992f-e76584199c2e | Validacion |
            */
            case '80687266-6761-43a2-bd98-f42349a9bb63':
                echo $this->element('Paper.xmf/home_captura');
            break;

            case 'e687cb91-4cdf-4ab2-992f-e76584199c2e':
                echo $this->element('Paper.xmf/monitor_rgl');
            break;
        }
    }
?>
</div>
