<?php
  require_once("database/connection.php");
?>
<!DOCTYPE html>
<html lang='pt-br'>

<head>
    <title>PetSenac - A lojinha do seu pet</title>
    <meta charset="UTF-8" />
    <meta name="description"
        content="A PetSenac é o maior Pet Shop do Brasil onde você encontra produtos com preço promocional para seu animal. Entre e aproveite!" />
    <meta name="viewport"
        content="viewport-fit=cover, width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta name="format-detection" content="telephone=no" />
    <meta name="msapplication-tap-highlight" content="no" />
    <meta name="theme-color" content="#029082" />
    <link rel="stylesheet" type="text/css" href="bootstrap/css/lite-grid-min.css" />
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
</head>

<body>
    <?php
      require_once('./includes/header.php');
    ?>

    <div id="banner-main">
        <!-- <img src="assets/img/banner-petsenac.jpg" alt="Tudo para seu pet você encontra aqui" /> -->
    </div>

    <div class="container">
        <section id='productMain'>
            <h1>Produtos para seu petzinho 😻<b>❤</b></h1>
            <div class='row'>

                <div class="col-md-2">
                    <a href="#">
                        <div class="box-image">
                            <img src="uplouds/img/casinha.jpg" alt="Casinha do pet" width="221" height="221">
                        </div>
                        <div class="description">
                            <p class="title-product">Caixa de Transporte Atlas 10 Ferplast para Cães </p>
                            <p class="description-product">Indicada para cães e gatos;
                                Desenvolvida para que você possa levar seu amigo...</p>
                            <p class="price-product">R$ 150,70 🙀😻</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-2 more-product">
                    <a href="#">
                        Venha conferir
                        nossos produtos
                        <br />
                        👀
                        <br />
                        #SóVem
                    </a>
                </div>

            </div>
        </section>
    </div>

    <div id='box-promotion'>
        <div>
            <p class="title-promotion">Miaaauuuuu!!!</p>
            <p class="description-promotion">TODA LOJA COM <br /><b>50% DE DESCONTO</b></p>
        </div>
    </div>

    <div class="container">
        <section id='productMain'>
            <h1>Produtos com desconto 😻<b>❤</b></h1>
            <div class='row'>

                <?php
                  $sql = "SELECT * FROM product";
                    $result = mysqli_query($conn, $sql);      
                  while ( $dados = mysqli_fetch_assoc($result) ) 
                {  
                ?>

                <div class="col-md-2">
                    <a href="#">
                        <div class="box-image">
                            <img src="uplouds/img/<?php echo $dados['image'] ?>" alt="Casinha do pet" width="221"
                                height="221">
                        </div>
                        <div class="description">
                            <p class="title-product"><?php echo $dados['name_product'] ?></p>
                            <p class="description-product"><?php echo $dados['description'] ?></p>
                            <p class="price-product"><?php echo $dados['price'] ?> 🙀😻</p>
                        </div>
                    </a>
                </div>

                <?php } ?>






                <div class="col-md-2">
                    <a href="#">
                        <div class="box-image">
                            <img src="uplouds/img/casinha.jpg" alt="Casinha do pet" width="221" height="221">
                        </div>
                        <div class="description">
                            <p class="title-product">Caixa de Transporte Atlas 10 Ferplast para Cães </p>
                            <p class="description-product">Indicada para cães e gatos;
                                Desenvolvida para que você possa levar seu amigo...</p>
                            <p class="price-product">R$ 150,70 🙀😻</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-2 more-product more-product-offer ">
                    <a href="#">
                        Venha conferir
                        nossos produtos
                        <br />
                        👀
                        <br />
                        #SóVem
                    </a>
                </div>

            </div>
        </section>
    </div>


    <footer class="footer-main">

    </footer>

</body>

</html>