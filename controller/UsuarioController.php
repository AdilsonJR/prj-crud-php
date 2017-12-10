<?php

class UsuarioController {

    public $opcao;
    private $usuarioDao;

    public function __construct($usuarioDao){
        $this->usuarioDao = $usuarioDao;
        
        if(isset($_GET['op'])){
            $this->opcao = $_GET['op'];
        }
        if($this->opcao == 'lista'){
            return  $this->listar();
        }     
        if($this->opcao == 'cadastrar') {  
            return $this->cadastrar();
        }
        if($this->opcao == 'editar') {  
            return $this->editar();
        }
        if($this->opcao == 'deletar') {  
            return $this->deletar();
        }
        if($this->opcao == 'logoff') {  
            return $this->logoff();
        }
     }

    function obterPorId(){
        return $this->usuarioDao->get();
    }

    function listar(){
        $result = $this->usuarioDao->getAll();
       return $result;
    }

    function cadastrar(){
      return $this->usuarioDao->cadastrar();
    }

    function editar(){
        return $this->usuarioDao->update();
    }

    function deletar(){
        return $this->usuarioDao->delete();
    }

    function login(){
        return $this->usuarioDao->login();
    }

    function logoff(){
        $_SESSION['logged_in'] = false;    
        unset ($_SESSION['id_usuario']);
        unset ($_SESSION['email']);
        session_destroy();
        header("location: ../index.php");
    }
}