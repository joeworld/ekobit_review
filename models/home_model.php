<?php

/**
 * PROJECT FOR EKOBITS ASSESSMENT {Ojo Oluwaseun Joseph}
 */

/**
 * HOMEPAGE MODEL
 */

class home_model extends db{

   public function __construct(){

       parent::__construct();

       if(empty($_POST['firstname']) || empty($_POST['lastname']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['address'])){
       	
       	die(json_encode(array('status' => '0', 'text' => 'Please fill all fields')));

       }else{

            $array = explode("-", $_POST['dob']);
            $month = $array[1];
            $year = $array[0];
            $day = $array[2];

            $birthdau = mktime(0,0,0,$month,$day,$year);
            $difference = time() - $birthdau;
            $age = floor($difference / 31556926);

            if($age < 14){
               die(json_encode(array('status' => '0', 'text' => 'You must be atleast 14 years of age!')));
            }

            if($age > 25){
               die(json_encode(array('status' => '0', 'text' => 'You must be lesser than 25 years of age!')));
            }

            if(filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false){
               die(json_encode(array('status' => '0', 'text' => 'Your e-mail is invalid!')));
            }

        $checkemail = $this->_select('ekobits_users', '*', array('email' => $_POST['email']));

        $checkphone = $this->_select('ekobits_users', '*', array('phone' => $_POST['phone']));

        if($checkemail != null){
            die(json_encode(array('status' => '0', 'text' => 'The email you entered is in database already!')));
        }

        if($checkphone != null){
            die(json_encode(array('status' => '0', 'text' => 'The phone you entered is in database already!')));
        }
            
        $this->_insert('ekobits_users', array('firstname' => strip_tags($_POST['firstname']), 'lastname' => strip_tags($_POST['lastname']), 'email' => $_POST['email'], 'dob' => $_POST['dob'], 'phone' => $_POST['phone'], 'address' => $_POST['address']));

        $_SESSION['email'] = $_POST['email'];

        die(json_encode(array('status' => '1', 'text' => 'Record added successfully')));

       }
   }

function timeago($date)
   {
    if(empty($date))
    {
        return "No date provided";
    }

    $periods = array("second", "minute", "hour", "day", "week", "month", "year", "decade");

    $lengths = array("60","60","24","7","4.35","12","10");

    $now = time();

    $unix_date = strtotime( $date );

    // check validity of date

    if( empty( $unix_date ) )
    {
        return "Bad date";
    }

    // is it future date or past date

    if( $now > $unix_date )
    {
        $difference = $now - $unix_date;
        $tense = "ago";
    }
    else
    {
        $difference = $unix_date - $now;
        $tense = "from now";
    }

    for( $j = 0; $difference >= $lengths[$j] && $j < count($lengths)-1; $j++ )
    {
        $difference /= $lengths[$j];
    }

    $difference = round( $difference );

    if( $difference != 1 )
    {
        $periods[$j].= "s";
    }

    return "$difference $periods[$j] {$tense}";

}


}