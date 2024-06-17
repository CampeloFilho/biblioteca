<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="css/template.css">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Biblioteca virtual</title>
</head>
<body>
    <i class="bi bi-list menu-mobile"></i>
    <!--/use esse template para todas as páginas ESSA É A NAVBAR-->
    <aside id="header">
        <section class="profile">
            <img src="img/logo.png" alt="Logo CENC">
            <h1>Colégio Neves Campelo</h1>
        </section>
        <!--Barra de navegação-->
        <nav id="navbar" class="nav-menu">
            <ul class="nav flex-column">
                <li class="nav-item"><a class="nav-link active" aria-current="page" href="crud.php"><i class="bi bi-person"></i>Perfil</a></li>
                <li class="nav-item"><a class="nav-link" href="index.php"><i class="bi bi-house"></i>Inicio</a></li>
                <li class="nav-item"><a class="nav-link active" href="acervo.php"><i class="bi bi-book"></i>Acervo</a></li>
            </ul>
        </nav>
    </aside>
    <main id="main">
        <section id="pesquisa" class="container mb-4">
                <nav class="navbar">
                    <form class="form-inline">
                        <input class="form-control mr-sm-2 outline-succes" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
                        <button class="btn btn-outline-secondary my-2 my-sm-0 " type="submit"><i class="bi bi-search"></i></button>
                    </form>
                    <a class="navbar-brand"></a>
                </nav> 
        </section>
        <section id="livros" class="container display-flex align-center">
            <div class="container text-center">
                <h1 class="mb-5">Acervo</h1>
                <!--Linha 01-->
                <div class="row align-items-start mb-4">
                    <!--Livro 01-->
                    <div class="col">
                        <div class="card">
                            <img src="img/livros/biblioteca-da-meia-noite.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Biblioteca da meia noite</h5>
                                <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit.</p>
                                <a href="biblioteca-da-meia-noite.html" class="btn btn-primary">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                    <!--Livro 02-->
                    <div class="col">
                        <div class="card">
                            <img src="img/livros/design-centrado-no-usuario.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Design Centrado no usuário</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="livro-01.html" class="btn btn-primary">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                    <!--Livro 03-->
                    <div class="col">
                        <div class="card">
                            <img src="img/livros/imperfeito.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Imperfeito</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="livro-01.html" class="btn btn-primary">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--Linha 02-->
                <div class="row align-items-start mb-4">
                    <!--Livro 04-->
                    <div class="col">
                        <div class="card">
                            <img src="img/livros/poder-do-habito.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Poder do Hábito</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="livro-01.html" class="btn btn-primary">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                    <!--Livro 05-->
                    <div class="col">
                        <div class="card">
                            <img src="img/livros/psicologia-das-cores.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Psicologia das cores</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="livro-01.html" class="btn btn-primary">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                    <!--Livro 06-->
                    <div class="col">
                        <div class="card">
                            <img src="img/livros/livro.webp" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title">Pequeno Príncipe</h5>
                                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                                <a href="livro-01.html" class="btn btn-primary">Saiba mais</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
       
    </main>
    <script src="bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="js/script.js"></script>
</body>
</html>