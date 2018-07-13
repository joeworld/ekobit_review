<?php

/**
 * PROJECT FOR EKOBITS ASSESSMENT {Ojo Oluwaseun Joseph}
 */

class router
{
	
	public function __construct()
	{
		if(isset($_GET['url'])){
			if(file_exists(CONTROLLERS.'/'.$_GET['url'].'.php')){
				$this->_given($url);
			}else{
				die('<br><h3><center>ERROR 404, PAGE NOT FOUND<br> <small><a href="'.BASEURL.'">Homepage</a></small></center></h3>');
			}
		}else{
			$this->_default();
		}

	}

	public function _default(){
       require_once CONTROLLERS.'/home.php';
       $home = new home();
	}

    public function _given($url){

        require_once CONTROLLERS.'/'.$url.'.php';
        if(class_exists($url)){
        $url = new $url();
        }else{
        	die('Please set a class for this controller');
        }
    }

}