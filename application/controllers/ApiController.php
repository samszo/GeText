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
	    //echo $uri;
	    $http = new Zend_Http_Client($uri);
		$html = $http->request();
		$this->view->params["texte"] = $html->getBody();
    }

    public function savetextAction()
    {
    	if ($this->_getParam('texte', 0) && $this->_getParam('params', 0)){
    		$dbP = new Model_DbTable_Gt_poemes();
    		$idP = $dbP->ajouter(array("texte"=>$this->_getParam('texte'),"params"=>json_encode($this->_getParam('params'))));
    		$params = $this->_getParam('params');
    		//calcule l'url courte
    		$g = new Flux_Gurl();
    		$url = 	WEB_ROOT_AJAX.$params["pro"]."?idPoeme=".$idP;
			$urlCourte = $g->getShortUrl($url);
			$this->view->result = array("idP"=>$idP, "urlCourte"=>$urlCourte);
    	}else{
    		$this->view->result = false;
    	}
    	
    	
    }
    
}



