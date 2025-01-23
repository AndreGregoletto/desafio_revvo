<?php

class AccessDatabase {
    public $aD;

    public function __construct()
    {
        $this->aD = new PDO("mysql:host=localhost;dbname=db_desafio_revvo", "root", "");
    }
}

?>