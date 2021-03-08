<?php
?>
<ul class="nav">
    <li class="active">
        <a href="<?php echo $this->Url->build('/Xmf/index'); ?>">
            <i class="ti-package"></i>
            <p>Mi Casilla</p>
        </a>
    </li>
    <li class="">
        <a href="<?php echo $this->Url->build('/XmfCasillas/CapturaResultados/'.$_SESSION['userCasillas']['id'].'/1'); ?>">
            <i class="ti-package"></i>
            <p>Captura</p>
        </a>
    </li>
</ul>
