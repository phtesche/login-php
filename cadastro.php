
<!DOCTYPE html>
<html>
    
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sistema de Cadastro - PHP + MySQL </title>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="css/bulma.min.css" />
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>

<body>
    <section class="hero is-success is-fullheight">
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <div class="box">
                        <label class="label">Cadastro de Local </label>
                        <form action="cadastrar.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input name="local" type="text" class="input is-large" placeholder="Local" autofocus>
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="desc" type="text" class="input is-large" placeholder="Descrição">
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input name="latitude" class="input is-large" type="number" placeholder="Latitude">
                                </div>
                            </div>
                             <div class="field">
                                <div class="control">
                                    <input name="longitude" class="input is-large" type="number" placeholder="Longitude">
                                </div>
                            </div>
                            <button type="submit" class="button is-block is-link is-large is-fullwidth">Cadastrar</button>
                        </form>
                    </div>
                    <button  class="button is-block is-link is-large is-fullwidth"><a href="painel.php">Voltar</a></button>
                </div>
            </div>
        </div>
    </section>
</body>

</html>