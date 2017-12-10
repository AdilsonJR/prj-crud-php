<?php
require_once '../config/DB.php'; 

class UsuarioDao {

  private $usuario;

  public function __construct($usuario = null){
    $this->usuario = $usuario;
  }
      
  function getAll(){
    try {
      $sql = "SELECT * FROM usuario";

      $stmt = DB::conn()->prepare($sql);
      $stmt->execute();
      $resultado = $stmt->fetchAll(PDO::FETCH_ASSOC);

      return $resultado;
    } catch(PDOException $e){
      echo 'Erro ao tentar buscar uma lista de usuarios: ' . $e->getMessage();
    }
  }

  function get(){
    try {  
      $sql = "SELECT * FROM usuario WHERE id_usuario = :id_usuario";

      $stmt = DB::conn()->prepare($sql);
      $stmt->bindValue(':id_usuario', $this->usuario->getId_usuario());
      $stmt->execute();
      $resultado = $stmt->fetch(PDO::FETCH_ASSOC);

      return $resultado;
    } catch(PDOException $e){
      echo 'Erro ao tentar buscar um usuario: ' . $e->getMessage();
    }
  }

  function cadastrar(){
    try{
      $sql = "INSERT INTO usuario(nome_completo, idade, rg, cpf, estado_civil, email, senha)
      VALUES(:nome_completo, :idade, :rg, :cpf, :estado_civil, :email, :senha)";
  
      $stmt = DB::conn()->prepare($sql);
      $stmt->bindValue(':nome_completo',$this->usuario->getNome_completo());
      $stmt->bindValue(':idade', $this->usuario->getIdade());
      $stmt->bindValue(':rg', $this->usuario->getRg());
      $stmt->bindValue(':cpf', $this->usuario->getCpf());
      $stmt->bindValue(':estado_civil', $this->usuario->getEstado_civil());
      $stmt->bindValue(':email', $this->usuario->getEmail());
      $stmt->bindValue(':senha', $this->usuario->getSenha());
      
      return $stmt->execute();
    } catch(PDOException $e){
      echo 'Erro ao tentar cadastrar um usuario: ' . $e->getMessage();
    }
  }

  function delete(){
    try{
      $sql = "DELETE FROM usuario WHERE id_usuario = :id_usuario";
    
      $stmt = DB::conn()->prepare($sql);
      $stmt->bindValue(':id_usuario', $this->usuario->getId_usuario());      
  
      return $stmt->execute();
    } catch (PDOException $e){
      echo 'Erro ao tentar deletar um usuario: ' . $e->getMessage();
    }
  }

  function update(){
    try {
      $sql = "UPDATE usuario SET nome_completo = :nome_completo, idade = :idade, rg = :rg, 
      cpf = :cpf, estado_civil = :estado_civil, email = :email, senha = :senha
      WHERE id_usuario = :id_usuario";

      $stmt = DB::conn()->prepare($sql);    
      $stmt->bindValue(':id_usuario', $this->usuario->getId_usuario());  
      $stmt->bindValue(':nome_completo',$this->usuario->getNome_completo());
      $stmt->bindValue(':idade', $this->usuario->getIdade());
      $stmt->bindValue(':rg', $this->usuario->getRg());
      $stmt->bindValue(':cpf', $this->usuario->getCpf());
      $stmt->bindValue(':estado_civil', $this->usuario->getEstado_civil());
      $stmt->bindValue(':email', $this->usuario->getEmail());
      $stmt->bindValue(':senha', $this->usuario->getSenha());

      return $stmt->execute();
    } catch(PDOException $e){
      echo 'Erro ao tentar editar um usuario: ' . $e->getMessage();
    }
  }

  function login(){
    try {
      $sql = "SELECT id_usuario, email,senha FROM usuario WHERE email = :email AND senha = :senha";
  
      $stmt = DB::conn()->prepare($sql);
      $stmt->bindValue(':email', $this->usuario->getEmail());
      $stmt->bindValue(':senha', $this->usuario->getSenha());        
      $stmt->execute();
      $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
  
      return $resultado;
    } catch(PDOException $e){
      echo 'Erro ao tentar logar: ' . $e->getMessage();
    }
  }
}

