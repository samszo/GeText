<?php

class ApiController extends Zend_Controller_Action
{
	
	var $oeu = 37;
	var $cpt = 158393;
	//var $uri = "http://generator.digitalartimag.org/services/api.php";
	var $uri = "http://localhost/generateur/services/api.php";
	
    public function indexAction()
    {
    	
    }

    public function gettextAction()
    {
    	$this->view->params = $this->_request->getQuery();
    	
	    $uri = $this->uri."?oeu=".$this->oeu."&cpt=".$this->cpt."&nb=1&frt=frg";
	    $http = new Zend_Http_Client($uri);
		$html = $http->request();
		$this->view->params["texte"] = $html->getBody();
    }

    public function savetextAction()
    {
    	if ($this->_getParam('texte', 0)){
    		$dbP = new Model_DbTable_Gt_poemes();
    		$this->view->idP = $dbP->ajouter(array("texte"=>$this->_getParam('texte'),"params"=>$this->_getParam('params')));
    	}else{
    		$this->view->idP = false;
    	}
    	
    	
    }
    
}



