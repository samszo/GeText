<?php

class ApiController extends Zend_Controller_Action
{

    public function indexAction()
    {
    	
    }

    public function gettextAction()
    {
    	$this->view->triste = $this->_getParam('triste', 0);
    	$this->view->rock = $this->_getParam('rock');
    	
    }

    public function savetextAction()
    {
    	
    }
    
}



