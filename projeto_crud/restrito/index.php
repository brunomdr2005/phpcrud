<?php
include "../validar.php";
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Empresa</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background-color: rgba(0, 0, 255, 0.426)
        }
        a {
            background-color: aquamarine;
            color: white;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
               <div class="jumbotron">
                   
                    <hr class="my-4">
                    <p>Acesse as funções</p>
                    <a href="cadastro.php">CADASTRE-SE</a>
                    <a href="pesquisa.php">PESQUISAR</a>
                    <a href="../logout.php">SAIR DA SESSÃO</a>
               </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>