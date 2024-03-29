<?php
include('./includes/config.inc.php');
$keres=current($oldalak);
if(isset($_GET['oldal'])){
    if(isset($oldalak[$_GET['oldal']]) && file_exists("./tpl/pages/{$oldalak[$_GET['oldal']]['fajl']}.tpl.php")){
        $keres=$oldalak[$_GET['oldal']];
    }
}
include('./tpl/index.tpl.php');

?>