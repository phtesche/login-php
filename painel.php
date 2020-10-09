<?php
include('verifica_login.php');
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PHP + MySQL - Canal TI</title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
</head>

<body>
<section class="hero is-info is-large">
  <!-- Hero head: will stick at the top -->
  <div class="hero-head">
    <nav class="navbar">
      <div class="container">
        <div class="navbar-brand">
          <a class="navbar-item">
          </a>
          <span class="navbar-burger burger" data-target="navbarMenuHeroA">
            <span></span>
            <span></span>
            <span></span>
          </span>
        </div>
        <div id="navbarMenuHeroA" class="navbar-menu">
           </span>
          </div>
        </div>
      </div>
    </nav>
  </div>
<div class="hero-foot">
<nav class="tabs is-boxed is-fullwidth">
<div class="container">
<ul id="menuver">
<li class="is-active">
<a href="#" title="Entrada no site">Home</a>
</li>
<li>
<a href="cadastro.php" title="local"
>Cadastrar Local</a>
</li>
<li>
<a href="usuario.php" title="cadastro_usuario"
>Cadastrar usuario</a>
</li>
<li>
<a href="pequisar.php" title="Pesquisar"
>Pesquisar</a>
</li>
<li>
<a href="#" title="confg"
>Configurações</a>
</li>
<li>
<h2><a href="logout.php">Sair</a></h2>
</li>
</ul>
</div>
</nav>
</div>
</body>
  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
          Olá, <?php echo $_SESSION['usuario'];?>
      </h1>
      <h2 class="subtitle">
        teste
      </h2>
    </div>
  </div>
</html>



