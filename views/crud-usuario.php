<?php require_once './template/header.php';

$raiz = $_SERVER['DOCUMENT_ROOT'];
require_once $raiz.'/prj-crud-php/DAO/UsuarioDao.php'; 
require_once $raiz.'/prj-crud-php/controller/UsuarioController.php'; 
require_once $raiz.'/prj-crud-php/model/Usuario.php'; 
require_once $raiz.'/prj-crud-php/autenticacao/VerificaSessao.php'; 

session_start();
VerificaSessao::isLogged();

$usuario = new Usuario();
if(isset($_GET['id_usuario'])){
    $usuario->setId_usuario($_GET['id_usuario']);
}

$usuarioDao = new UsuarioDao($usuario);

$usuarioController = new UsuarioController($usuarioDao);

$dadosUsuario = $usuarioController->obterPorId();

?>

<div class="container">
    <h1 class="text-center p-2"><?php echo (isset($_GET['id_usuario'])) ? 'Editar usuario' : 'Cadastrar usuario'; ?></h1>
    <form action="<?php echo (isset($_GET['id_usuario'])) ? './lista-usuario.php?op=editar' : './lista-usuario.php?op=cadastrar'; ?>"
        method="POST">
        <div class="form-row">

            <input type="text" hidden name="id_usuario" value="<?php echo $dadosUsuario['id_usuario']; ?>">
            
            <div class="form-group col-md-6">
                <label for="idEmail">Email</label>
                <input type="email" name="email"required value="<?php echo $dadosUsuario['email']; ?>" class="form-control" id="idEmail" placeholder="exemplo@ex.com">
            </div>
            <div class="form-group col-md-6">
                <label for="idSenha">Senha</label>
                <input type="password" name="senha" required class="form-control" id="idSenha" placeholder="<?php echo (isset($_GET['id_usuario'])) ? 'Digite sua nova senha' : 'Digite sua senha'; ?>">
            </div>
        </div>
        <div class="form-group">
            <label for="idNome">Nome Completo</label>
            <input type="text" name="nome_completo" required value="<?php echo $dadosUsuario['nome_completo']; ?>" class="form-control" id="idNome"
                placeholder="Digite seu nome completo">
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="idCpf">CPF</label>
                <input type="text" name="cpf" required value="<?php echo $dadosUsuario['cpf']; ?>" class="form-control" id="idCpf" placeholder="Seu cpf">
            </div>
            <div class="form-group col-md-6">
                <label for="idRg">RG</label>
                <input type="text" name="rg" required value="<?php echo $dadosUsuario['rg']; ?>" class="form-control" id="idRg" placeholder="Seu rg ">
            </div>
        </div>

        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="idIdade">Idade</label>
                <input type="number" required value="<?php echo $dadosUsuario['idade']; ?>" name="idade" placeholder="Sua idade" class="form-control" id="idIdade">
            </div>
            <div class="form-group col-md-6">
                <label for="inputState">Estado Civil</label>
                <select id="inputState" required name="estado_civil" class="form-control">
                    <option value="" selected disabled hidden>Selecione uma opção</option>
                    <option <?php echo ($dadosUsuario['estado_civil'] == "Casado(a)") ? 'selected' : ''; ?> >Casado(a)</option>
                    <option <?php echo ($dadosUsuario['estado_civil'] == "Solteiro(a)") ? 'selected' : ''; ?> >Solteiro(a)</option>
                </select>
            </div>

        </div>
        <div class="col-sm-12 d-flex justify-content-end">
            <button type="submit" class="btn btn-primary">

                <?php echo (isset($_GET['id_usuario'])) ? 'Editar usuario' : 'Cadastrar usuario'; ?>

            </button>
        </div>
        <br>
        <br>
    </form>
</div>


<?php require_once './template/footer.php' ?>