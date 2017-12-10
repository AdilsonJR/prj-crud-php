<?php 
$raiz = $_SERVER['DOCUMENT_ROOT'];
require_once './template/header.php';
require_once $raiz.'/prj-crud-php/DAO/UsuarioDao.php'; 
require_once $raiz.'/prj-crud-php/controller/UsuarioController.php'; 
require_once $raiz.'/prj-crud-php/model/Usuario.php'; 
require_once $raiz.'/prj-crud-php/autenticacao/VerificaSessao.php'; 
   
    session_start();
    VerificaSessao::isLogged();

    if(isset($_POST['id_usuario'])){
        $id_usuario = (isset($_POST['id_usuario']))? $_POST['id_usuario'] : null;    
    } elseif(isset($_GET['id_usuario'])){
        $id_usuario = (isset($_GET['id_usuario']))? $_GET['id_usuario'] : null;            
    } else {
            $id_usuario = '';
    }
  
    $nome_completo = isset($_POST['nome_completo']) ? $_POST['nome_completo'] : null;
    $idade = isset($_POST['idade']) ? $_POST['idade'] : null;
    $rg = isset($_POST['rg']) ? $_POST['rg'] : null;
    $cpf = isset($_POST['cpf']) ? $_POST['cpf'] : null;
    $estado_civil = isset($_POST['estado_civil']) ? $_POST['estado_civil'] : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;
    $senha = isset($_POST['senha']) ? $_POST['senha'] : null;
        

    $usuario = new Usuario($id_usuario , $nome_completo, $idade, 
    $rg, $cpf, $estado_civil, $email, $senha);

    $usuarioDao = new UsuarioDao($usuario);

    $usuarioController = new UsuarioController($usuarioDao);
    
    $result = $usuarioController->listar();
?>
    <?php if(isset($_GET['op']) && $_GET['op'] == 'deletar') : ?>
        <div class="alert alert-danger text-center" role="alert">
            Registro deletado com sucesso!!
        </div>
    <?php endif; ?>

    <?php if(isset($_GET['op']) && $_GET['op'] == 'cadastrar') : ?>
        <div class="alert alert-primary text-center" role="alert">
            Usuario cadastrado com sucesso!!
        </div>
    <?php endif; ?>

    <?php if(isset($_GET['op']) && $_GET['op'] == 'editar') : ?>
        <div class="alert alert-success text-center" role="alert">
            Usuario Editado com sucesso!!
        </div>
    <?php endif; ?>


<h2 class="text-center mb-2 mt-2">Lista de usuarios cadastrados</h2>
<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Idade</th>
            <th scope="col">Rg</th>
            <th scope="col">Cpf</th>
            <th scope="col">Estado Civil</th>
            <th scope="col">Email</th>
            <th scope="col">Ações</th>

        </tr>
    </thead>
    <tbody>

        <?php foreach ($result as $rs) : ?>

        <tr>
            <th scope="row">
                <?php echo $rs['id_usuario']; ?> </th>
            <td>
                <?php echo $rs['nome_completo']; ?> </td>
            <td>
                <?php echo $rs['idade']; ?> </td>
            <td>
                <?php echo $rs['rg']; ?> </td>
            <td>
                <?php echo $rs['cpf']; ?> </td>
            <td>
                <?php echo $rs['estado_civil']; ?> </td>
            <td>
                <?php echo $rs['email']; ?> </td>
            <td>     
                    <a type="submit" href="./crud-usuario.php?id_usuario=<?php echo $rs['id_usuario']; ?>" class="btn btn-success" >
                    Editar
                </a>
                <a type="submit" href="./lista-usuario.php?id_usuario=<?php echo $rs['id_usuario']; ?>&op=deletar" class="btn btn-danger" >
                    Deletar
                    </a>   
            </td>
        </tr>

        <?php endforeach; ?>
        
    </tbody>
</table>

<?php require_once './template/footer.php' ?>