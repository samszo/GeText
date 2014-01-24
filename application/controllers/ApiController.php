<?php

class ApiController extends Zend_Controller_Action
{
	
    public function indexAction()
    {
    	
    }

    public function gettextAction()
    {
    	$this->view->params = $this->_request->getQuery();
    	
	    $uri = "http://generator.digitalartimag.org/services/api.php?oeu=37&cpt=158393&nb=1&frt=frg";
		$http = new Zend_Http_Client($uri);
		$html = $http->request();
		$this->view->params["texte"] = $html->getBody();
    }

    public function savetextAction()
    {
    	
    }
    
}



