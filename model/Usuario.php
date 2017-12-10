<?

class Usuario {
    
    private $id_usuario;
    private $nome_completo;
    private $idade;
    private $rg;
    private $cpf;
    private $estado_civil;
    private $email;
    private $senha;

    public function __construct($id_usuario = null, $nome_completo  = null, $idade  = null, 
    $rg  = null, $cpf  = null, $estado_civil  = null, $email  = null, $senha  = null){
      $this->id_usuario = $id_usuario;
      $this->nome_completo = $nome_completo;
      $this->idade = $idade;
      $this->rg = $rg;
      $this->cpf = $cpf;
      $this->estado_civil = $estado_civil;
      $this->email = $email;
      $this->senha = $senha;    
    }


    public function getId_usuario(){
        return $this->id_usuario;
      }
     
    public function setId_usuario($id_usuario){
        $this->id_usuario = $id_usuario;
    }

    public function setNome_completo($nome){
        $this->Nome_completo = $nome;
    }

    public function getNome_completo(){
        return $this->nome_completo;
    }

    public function setIdade($idade){
        $this->idade = $idade;
    }

    public function getIdade(){
        return $this->idade;
    }

    public function setRg($rg){
        $this->rg = $rg;
    }

    public function getRg(){
        return $this->rg;
    }

    public function setCpf($cpf){
        $this->cpf = $cpf;
    }

    public function getCpf(){
        return $this->cpf;
    }

    public function setEstado_civil($estado_civil){
        $this->estado_civil = $estado_civil;
    }

    public function getEstado_civil(){
        return $this->estado_civil;
    }

    public function setEmail($email){
        $this->email = $email;
    }

    public function getEmail(){
        return $this->email;
    }

    public function setSenha($senha){
        $this->senha = $senha;
    }

    public function getSenha(){
        return $this->senha;
    }

}