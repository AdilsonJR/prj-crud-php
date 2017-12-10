<?php 
class VerificaSessao {

    static $raiz;

    public function __construct(){
        self::$raiz = $_SERVER['DOCUMENT_ROOT'];
    }

    static function isLogged(){
        if(!$_SESSION['email']){ 
            $_SESSION['logged_in'] = false;    
            unset ($_SESSION['id_usuario']);
            unset ($_SESSION['email']);
            session_destroy();
            header("location:".self::$raiz."../index.php" );
        }   
    }
    
}
