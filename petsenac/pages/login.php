<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <title>Faça o login</title>
    <meta charset="UTF-8" />
    <meta name="description"
        content="A PetSenac é o maior Pet Shop do Brasil onde você encontra produtos com preço promocional para seu animal. Entre e aproveite!" />
    <meta name="viewport"
        content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="theme-color" content="#029082" />
    <link rel="stylesheet" type="text/css" href="../bootstrap/css/lite-grid-min.css" />
    <link rel="stylesheet" type="text/css" href="../assets/css/style.css" />
</head>

<body>
    <?php
session_start();
?>

    <?php  include ('../includes/subheader.php'); ?>

    <div class="container container-login">

        <div class="row">
            <div class="col-md-6">
                <div class="box-form-login">
                    <h1>Já possuo conta</h1>
                    <form name="formlogin" method="post" action="actionLogin.php">
                        <input type="email" placeholder="Digite seu e-mail" name="email">
                        <input type="password" placeholder="Digite sua senha" name="password">
                        <button type="submit">ENTRAR</button>
                    </form>
                </div>
            </div>

            <div class="col-md-6">
                <div class="box-form-login">
                    <h1>Fazer cadastro</h1>
                    <form name="formlogin" method="post" action="admc/fazlogin.php">
                        <input type="email" placeholder="Digite seu e-mail" name="email">
                        <input type="password" placeholder="Digite sua senha" name="senha">
                        <button type="submit">CADASTRAR</button>
                    </form>
                </div>
            </div>
        </div>


</body>

</html>