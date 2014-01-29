<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap
{
	protected function _initAutoload()
	{
		$moduleLoader = new Zend_Application_Module_Autoloader(array(
			'namespace' => '',
			'basePath' => APPLICATION_PATH));
		
		//$loader = Zend_Loader_Autoloader::getInstance();
		//$loader->registerNamespace(array('Gen_', "Flux_", 'Auth_'));

	    //pour pouvoir charger les classe à la fois dans le serveur amf et avec l'autoloader
		$moduleLoader->addResourceType('dbgt', 'Model/DbTable', 'Model_DbTable');
		
		return $moduleLoader;
	}

}

