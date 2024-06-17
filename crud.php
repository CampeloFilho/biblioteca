<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/crud.css">
</head>
<body>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Cadastro</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="crud.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=novo">Novo Livro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?page=listar">Listar Livro</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    <div class="container">
        <div class="row">
            <div class="col mt-5">
                <?php
                include ("conexao.php");
                    switch(@$_REQUEST["page"]){
                        case "novo":
                            include("novo-livro.php");
                        break;
                        case "listar":
                            include("listar-livro.php");
                        break;
                        case "salvar":
                            include("salvar-livro.php");
                        break;
                        case "editar":
                            include("editar-livro.php");
                        break;
                        default:
                            printf("Boas vindas!");
                    }
                ?>
            </div>
        </div>
    </div>
<script src="js/js/bootstrap.bundle.min.js"></script>
</body>
</html>
