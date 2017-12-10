<?php
$raiz = $_SERVER['DOCUMENT_ROOT'];
require_once $raiz.'/prj-crud-php/DAO/UsuarioDao.php'; 
require_once $raiz.'/prj-crud-php/controller/UsuarioController.php'; 
require_once $raiz.'/prj-crud-php/model/Usuario.php'; 

$email = isset($_POST['email']) ? $_POST['email'] : null;
$senha = isset($_POST['senha']) ? $_POST['senha'] : null;
    
$usuario = new Usuario(null ,null , null, null, null, null, $email, $senha);

$usuarioDao = new UsuarioDao($usuario);

$usuarioController = new UsuarioController($usuarioDao);

$dadosUsuario = $usuarioController->login();

if($dadosUsuario){
   
    session_start();    
    $_SESSION['logged_in'] = true;
    $_SESSION['id_usuario'] = $dadosUsuario['id_usuario'];
    $_SESSION['email'] = $dadosUsuario['email']; 
    header("location: ./../views/lista-usuario.php"); 

} else {

    $_SESSION['logged_in'] = false;    
    unset ($_SESSION['id_usuario']);
	unset ($_SESSION['email']);
    session_destroy();
    header("location: ./../index.php?erro=true");    

}
