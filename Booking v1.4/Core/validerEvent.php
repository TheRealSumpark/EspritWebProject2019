<?php
include '../core/eventC.PHP';
$eventC=new eventC();
$eventC->validerEvent($_POST['id']);

echo "<script type='text/javascript'> document.location = '../View/AfficherEvent.PHP'; </script>"
?>