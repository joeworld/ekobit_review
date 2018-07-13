<?php

/**
 * PROJECT FOR EKOBITS ASSESSMENT {Ojo Oluwaseun Joseph}
 */

/**
 * HOMEPAGE CONTROLLER
 */

class home
{
	private $title;

	private $message;
	
	public function __construct()
	{
		$this->loadview();
	}

	public function loadview(){
		if(isset($_POST['formID'])){
        require_once MODELS.'/home_model.php';
        new home_model();
		}else{
		$this->title = 'Ekobits Technical Review - Ojo Oluwaseun Joseph';
        $this->message = 'Please Insert your record as specified';
		require_once VIEWS.'/home_view.php';
	    }
	}

}