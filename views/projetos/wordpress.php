<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="shortcut icon" type="image/x-icon" href="/img/favicon.ico">
    <link rel="stylesheet" href="\css\main.css">
    <title>Telas de Login</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a class="navbar-brand disable" href="/index.php">Lucas Steinbach</a>
            <a href="https://github.com/lucaswalmor" target="_blank" class="navbar-brand"><i class="fab fa-github"></i></a>
            <a href="https://www.linkedin.com/in/lucas-walmor-steinbach-borges-1a602915a/" target="_blank" class="navbar-brand"><i class="fab fa-linkedin-in"></i></a>
            <a href="http://api.whatsapp.com/send?phone=5534992021394" target="_blank" class="navbar-brand"><i class="fab fa-whatsapp"></i></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link" href="/index.php">Inicio</a>
                    </li>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Projetos
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="/views/projetos/logins.php">Telas de login</a>
                            <a class="dropdown-item" href="/views/projetos/sites.php">Telas de Sites</a>
                            <a class="dropdown-item" href="/views/projetos/estagio.php">Projeto Estagio</a>
                            <a class="dropdown-item" href="\views\projetos\wordpress.php">Projeto Wordpress</a>
                        </div>
                    </div>
                    <li class="nav-item">
                        <a class="nav-link" href="/views/curriculo.php">Currículo</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="\views\contato.php">Contato</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <main>
        <div class="container mt-3 mb-5 col-10 p-0">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
                <a class="navbar-brand" href="#">Seja Bem-Vindo</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="https://streamshopbrasil.com/" target="_blank">Projeto 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://tabacariauai.tk/" target="_blank">Projeto 2</a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div id="carrocelWordpress" class="carousel slide " data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carrocelWordpress" data-slide-to="0" class="active"></li>
                    <li data-target="#carrocelWordpress" data-slide-to="1"></li>
                    <li data-target="#carrocelWordpress" data-slide-to="2"></li>
                    <li data-target="#carrocelWordpress" data-slide-to="3"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="\img\Sites_html_css\wordpress\tabacaria.png" class="img-fluid imagem" alt="">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="\img\Sites_html_css\wordpress\webcam.png" class="img-fluid imagem" alt="">
                        <div class="carousel-caption d-none d-md-block">
                        </div>
                    </div>
                </div>

                <a href="#carrocelWordpress" class="carousel-control-prev" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                    <span class="sr-only">Anterior</span>
                </a>

                <a href="#carrocelWordpress" class="carousel-control-next" role="button" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                    <span class="sr-only">Próximo</span>
                </a>
            </div>
        </div>
    </main>


    <footer class="bg-light text-center text-lg-start">
        <div class="container p-4">
            <div class="row">
                <div class="col-lg-12 col-md-12 mb-4 mb-md-0">
                    <blockquote class="blockquote text-center">
                        <span class="mb-0">O sucesso não é garantido, mas o fracasso é certo se você não estiver
                            emocionalmente envolvido em seu trabalho</span>
                        <footer class="blockquote-footer">Biz Stone <cite title="Source Title">Fundador do
                                Twitter</cite></footer>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
            2021 ©
            <a class="text-dark" href="https://www.linkedin.com/in/lucas-walmor-steinbach-borges-1a602915a/" target="_blank">Lucas Steinbach</a>
        </div>
    </footer>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>

    <script>
        var entidade = document.getElementById('imagem');

        // Altere o número para a apliação/redução desejada
        var fator_lupa = 5;

        entidade.onmouseover = function() {
            this.style.width = (this.clientWidth * fator_lupa) + "px";
        };

        entidade.onmouseout = function() {
            this.style.width = (this.clientWidth / fator_lupa) + "px";
        };
    </script>

</body>

</html>