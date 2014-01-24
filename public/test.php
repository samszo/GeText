<?php
	require_once( "../application/configs/config.php" );

    $uri = "http://generator.digitalartimag.org/services/api.php?oeu=37&cpt=158393&nb=1";
	$http = new Zend_Http_Client($uri);
	$html = $http->request();
	$texte = $html->getBody();
	echo $texte;    	
?>