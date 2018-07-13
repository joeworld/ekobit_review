<?php

class db {

   public $query = null;

   public function __construct(){

     $this->query = $this->_connect();

   }

   public function _insert($table, $data){

   ksort($data);

    $fieldNames = implode('`,  `', array_keys($data));
    $fieldValues = ':' . implode(', :', array_keys($data));

    $sth = $this->query->prepare("INSERT INTO $table (`$fieldNames`) VALUES ($fieldValues)");


    foreach($data as $key => $value){
      $sth->bindValue(":$key", $value);
    }

    return $sth->execute();

   }


      public function _select($table, $data, $where = null, $attr = null)
   {

    if($where != null){
    ksort($where);

    $fieldDetails = NULL;

    foreach ($where as $key => $value) {
      $fieldDetails .= "`$key` = :$key AND";
    }

    $fieldDetails = rtrim($fieldDetails, 'AND');

    if($attr == null){
    $sth = $this->query->prepare("SELECT $data FROM $table WHERE $fieldDetails");
    }else{
    $sth = $this->query->prepare("SELECT $data FROM $table WHERE $fieldDetails ".$attr);
    }

    foreach($where as $key => $value){
    $sth->bindValue(":$key", $value);
    }

    $sth->execute();
    return $sth->fetch(PDO::FETCH_ASSOC);

    }else{

    if($attr == null){
    $sth = $this->query->prepare("SELECT $data FROM $table");
    }else{
    $sth = $this->query->prepare("SELECT $data FROM $table ".$attr);
    }

    $sth->execute();
    return $sth->fetch(PDO::FETCH_ASSOC);

    }

   }



   public function _connect(){

      $mycon = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=utf8", DB_USERNAME, DB_PASSWORD); 
      $mycon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $mycon->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

      return $mycon;

   }

}