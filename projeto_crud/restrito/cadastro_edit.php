<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Alteração de Cadastro</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

    <?php

    include "conexao.php";

    $id = $_GET["id"] ?? "";
    $sql = "SELECT * FROM pessoas WHERE cod_pessoa = $id";

    $dados = mysqli_query($conn, $sql);
    $linha = mysqli_fetch_assoc($dados);
    ?>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Cadastro</h1>
                <form action="edit_script.php" method="post">
                    <div class="mb-3">
                        <label for="nome" class="form-label">Nome completo</label>
                        <input type="text" class="form-control" name="nome" required
                            value=" <?php echo $linha["nome"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="endereco" class="form-label">Endereço</label>
                        <input type="text" class="form-control" name="endereco"
                            value="<?php echo $linha["endereco"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Telefone</label>
                        <input type="text" class="form-control" name="telefone"
                            value="<?php echo $linha["telefone"]; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" name="email" value="<?php echo $linha['email']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="nome" class="form-label">Data de Nascimento</label>
                        <input type="date" class="form-control" name="data_nascimento"
                            value="<?php echo $linha['data_nascimento']?>;">
                    </div>
                    <div class="mb-3">
                        <input type="submit" class="btn btn-success" value="Salvar alterações">
                        <input type="hidden" name="id" value="<?php echo $linha['cod_pessoa'] ?>">
                    </div>
                </form>
                <a href="index.php" class="btn btn-info">Voltar para o início</a>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
        crossorigin="anonymous"></script>
</body>

</html>