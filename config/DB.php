<?php

class DB {

    const host     = "localhost";
    const login    = "root";
    const senha    = '';
    const dbNome   = "prj_crud";
    static $pdo;

    public function __construct(){ }
    
    static function conn(){
        self::$pdo = new PDO("mysql:host=".self::host.";dbname=".self::dbNome, self::login , self::senha);  
       
        return  self::$pdo;
    }
}