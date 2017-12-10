<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Menu</title>
  <link rel="stylesheet" href="./../node_modules/bootstrap/dist/css/bootstrap.css">
  <!-- CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb"
    crossorigin="anonymous">
</head>
<body>
  <div class="row">
  <nav class="navbar navbar-expand-sm  navbar-dark bg-dark col-lg-12">
    <a class="navbar-brand ml-4" href="#">Inicio</a>
    <div class="d-flex justify-content-end col-lg-11" id="navbarText">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="./crud-usuario.php">Criar Usuario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./lista-usuario.php?op=lista">Lista de Usuarios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./lista-usuario.php?op=logoff">Sair</a>
        </li>
      </ul>
    </div>
  </nav>
  </div>