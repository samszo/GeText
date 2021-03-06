<?php

class PropositionsController extends Zend_Controller_Action
{

    public function indexAction()
    {
		$this->view->title = "Propositions disponibles";
		$this->view->headTitle($this->view->title, 'PREPEND');
	    $this->view->data = array(
	    	array("niv"=>"Proposition Romane", "titre"=>"Dossier de conception","lien"=> WEB_ROOT."/recherches%20graphiques/GeText_Dossier de conception.pdf")
	    	,array("niv"=>"Proposition Sophie", "titre"=>"Dossier de conception","lien"=> WEB_ROOT."/recherches%20graphiques/appli_getext_sophie.pdf")
	    	,array("niv"=>"Proposition Adrien", "titre"=>"Dossier de conception","lien"=> WEB_ROOT."/recherches%20graphiques/Proposition3_Ge-text_Maquette1.0.pdf")
	    	/*
	    	array("niv"=>"Proposition Romane", "titre"=>"Ecran 1","lien"=> WEB_ROOT."/recherches%20graphiques/Color_GeText/GeTEXT_interface1.svg")
	    	, array("niv"=>"Proposition Romane", "titre"=>"Ecran 2","lien"=> WEB_ROOT."/recherches%20graphiques/Color_GeText/Visuel1_1.svg")
	    	, array("niv"=>"Proposition Romane", "titre"=>"Ecran 3","lien"=> WEB_ROOT."/recherches%20graphiques/Color_GeText/Visuel1_2.svg")
			, array("niv"=>"Proposition Romane", "titre"=>"Ecran 4","lien"=> WEB_ROOT."/recherches%20graphiques/Color_GeText/Visuel1_3.svg")
	    	, array("niv"=>"Proposition Romane", "titre"=>"Ecran 5","lien"=> WEB_ROOT."/recherches%20graphiques/Color_GeText/Visuel1_4.svg")
	    	, array("niv"=>"Proposition Romane", "titre"=>"Prototype","lien"=> WEB_ROOT_AJAX."/Propositions/romane")
	    	, array("niv"=>"Proposition Sophie", "titre"=>"Ecran fixe","lien"=> WEB_ROOT."/recherches%20graphiques/GeText_sophie.svg")
	    	, array("niv"=>"Proposition Sophie", "titre"=>"Test dégradé","lien"=> WEB_ROOT."/recherches%20graphiques/anim_svg_3.html")
	    	, array("niv"=>"Proposition Sophie", "titre"=>"Prototype","lien"=> WEB_ROOT_AJAX."/Propositions/sophie")
	    	*/
	    	);
    	
    }

    public function romaneAction()
    {
    	
    }
    
    public function sophieAction()
    {
    	$this->view->idPoeme = $this->_getParam('idPoeme', 0);
		if($this->view->idPoeme){
			//récupère le poème
			$dbP = new Model_DbTable_Gt_poemes();
			$this->view->poeme = $dbP->findById_poeme($this->view->idPoeme);
			$this->view->idPoeme = $this->_getParam('idPoeme', 0);
			
		}    	
    }
    
    
}



