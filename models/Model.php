<?php

class Model 
{
    protected $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;dbname=football_ligue", "root", "", array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    } 

}