<?php
require_once( "application/configs/config.php" );
$application->bootstrap();

$dbP = new Model_DbTable_Gt_poemes();

$dbP->ajouter(array("texte"=>"kjdfh qjdhf fdmlq djooiu'' 'lkn' &ààçè§"));

$arr = $dbP->getAll();

print_r($arr);

