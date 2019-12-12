<?php
include '../core/eventC.PHP';
$eventC=new eventC();
$eventC->tri();

echo "<script type='text/javascript'> document.location = '../View/AfficherEvent.PHP'; </script>"
?>