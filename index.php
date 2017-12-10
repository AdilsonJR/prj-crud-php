<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <link rel="stylesheet" href="./static/css/style.css">
</head>
<body>
    <div class="login-page">
        <div class="form">
            <form action="./autenticacao/verificaDadosUsuario.php" method="POST" class="login-form">
                <label for="idEmail" class="ajustar-label">Email</label> 
                    <input type="email" id="idEmail" required name="email" placeholder="Digite seu email" />
                
                <label for="idEmail" class="ajustar-label">Senha</label> 
                <input type="password" required name="senha" placeholder="Digite sua senha" />
                <button>login</button>
                
                <?php if (isset($_GET['erro'])) :?>
                    <p style="color: red;" >Senha ou email incorreto</p>
                <?php endif;?>
       
            </form>
        </div>
    </div>
</body>
</html>