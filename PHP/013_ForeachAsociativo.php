<?php
$paises = array("Mexico","España",'Colombia','Peru','Argentina','Venesuela','Guatemala');
foreach ($paises as $spain ) {
    if ($spain=='Comlombia') {
        break;
    }
}
foreach ($paises as $spain ) {
    if ($spain=='España') {
        continue;
    }
}
?>
