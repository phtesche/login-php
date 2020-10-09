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

<section class="hero  is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <div class="box">
                        <label class="label">Pesquisar</label>
                        <form action="busca.php" method="POST">
                            <div class="select">
  <select>
    <option>Select dropdown</option>
    <option>With options</option>
  </select>
</div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Pesquisar</button>
                        </form>
                    </div>
                    <button  class="button is-block is-link is-large is-fullwidth"><a href="painel.php">Voltar</a></button>
                </div>
            </div>
        </div>
    </section>
<body>
</body>
</html>
<form name="frmBusca" method="post" action="<?php echo $_SERVER['PHP_SELF'] ?>?a=buscar" >
    <input type="text" name="palavra" />
    <input type="submit"  value="Buscar" />
</form>