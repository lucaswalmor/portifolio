<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/views/projetos/Sites/Site1/css/main.css">
    <title>Hello, world!</title>
</head>

<body>

    <!-- CABECALHO -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="btn btn-dark">
            <a href="/views/projetos/sites.php"><button type="submit" class="button">Voltar</button></a>
        </div>
        <div class="container">
            <a href="#" class="navbar-brand h1 mb-0">Lucas Steinbach</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSite">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Perfil</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Serviços</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Depoimentos</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contatos</a>
                    </li>
                </ul>
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" id="navDrop">Social</a>
                        <div class="dropdown-menu">
                            <a href="#" class="dropdown-item">Facebook</a>
                            <a href="#" class="dropdown-item">Twitter</a>
                            <a href="#" class="dropdown-item">Instagram</a>
                        </div>
                    </li>
                </ul>
                <form action="" class="form-inline">
                    <input type="search" class="form-control ml-4 mr-2" placeholder="Buscar...">
                    <button class="btn btn-dark" type="submit">Ok</button>
                </form>
            </div>
        </div>
    </nav>


    <!-- CARROCEL  -->
    <div id="carrocelSite" class="carousel slide " data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carrocelSite" data-slide-to="0" class="active"></li>
            <li data-target="#carrocelSite" data-slide-to="1"></li>
            <li data-target="#carrocelSite" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="\views\projetos\Sites\Site1\img\arvores.jpg" class="img-fluid imagem" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, saepe.</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="\views\projetos\Sites\Site1\img\montanha.jpg" class="img-fluid imagem" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, saepe.</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="\views\projetos\Sites\Site1\img\ponte.jpg" class="img-fluid imagem" alt="">
                <div class="carousel-caption d-none d-md-block">
                    <h3>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, saepe.</h3>
                    <p>Lorem ipsum dolor sit amet.</p>
                </div>
            </div>
        </div>

        <a href="#corrocelSite" class="carousel-control-prev" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
            <span class="sr-only">Anterior</span>
        </a>

        <a href="#carrocelSite" class="carousel-control-next" role="button" data-slide="next">
            <span class="carousel-control-next-icon"></span>
            <span class="sr-only">Próximo</span>
        </a>
    </div>

    <!-- TEXTOS COM SCROLLS E LINKS -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-5">
                <h1 class="display-3"><i class="fas fa-cogs text-primary"></i>Lorem ipsum </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-sm-6 col-md-4 mb-3">
                <nav id="navbarVertical" class="navbar navbar-light bg-light">
                    <nav class="nav nav-pills flex-column">

                        <a href="#item1" class="nav-link">Link-1</a>

                        <nav class="nav nav-pills flex-column">
                            <a href="#item1-1" class="nav-link ml-3">Sub-Link-1-1</a>
                            <a href="#item1-2" class="nav-link ml-3">Sub-Link-1-2</a>
                        </nav>

                        <a href="#item2" class="nav-link mt-2">Link-2</a>

                        <a href="#item3" class="nav-link mt-2">Link-3</a>
                        <nav class="nav nav-pills flex-column">
                            <a href="#item3-1" class="nav-link ml-3">Sub-Link-3-1</a>
                            <a href="#item3-2" class="nav-link ml-3">Sub-Link-3-2</a>
                        </nav>
                    </nav>
                </nav>
            </div>
            <div class="col-sm-6 col-8">
                <div data-spy="scroll" data-target="#navbarVertical" data-offset="0" class="scrollSpySite">
                    <h4 id="item1">Lorem, ipsum.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi non, deserunt quidem ipsa nulla
                        necessitatibus, incidunt veniam rem quisquam tempore aliquid voluptatum quae, saepe sed
                        laboriosam molestias aliquam? Eius earum perspiciatis cupiditate nesciunt facere voluptates
                        reprehenderit sint itaque! Veritatis, dolorem?</p>

                    <h5 id="item-1">Lorem, ipsum.</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus reiciendis porro nesciunt
                        sequi earum ipsa illo at, tenetur non magni possimus error? Et quas nulla, repellat tenetur odit
                        illum porro ad corporis eveniet ipsam voluptas qui cum asperiores alias non!</p>

                    <h5 id="item-2">Lorem, ipsum.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore aperiam blanditiis aspernatur
                        fuga, totam dicta, nemo quo dolores repudiandae, eveniet fugiat et aliquam quae. Ducimus sunt
                        assumenda, porro, doloremque nisi asperiores ex beatae iste nulla eligendi illo facilis quo.
                        Delectus.</p>

                    <h5 id="item2">Lorem, ipsum.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore aperiam blanditiis aspernatur
                        fuga, totam dicta, nemo quo dolores repudiandae, eveniet fugiat et aliquam quae. Ducimus sunt
                        assumenda, porro, doloremque nisi asperiores ex beatae iste nulla eligendi illo facilis quo.
                        Delectus.</p>

                    <h4 id="item3">Lorem, ipsum.</h4>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi non, deserunt quidem ipsa nulla
                        necessitatibus, incidunt veniam rem quisquam tempore aliquid voluptatum quae, saepe sed
                        laboriosam molestias aliquam? Eius earum perspiciatis cupiditate nesciunt facere voluptates
                        reprehenderit sint itaque! Veritatis, dolorem?</p>

                    <h5 id="item3-1">Lorem, ipsum.</h5>
                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatibus reiciendis porro nesciunt
                        sequi earum ipsa illo at, tenetur non magni possimus error? Et quas nulla, repellat tenetur odit
                        illum porro ad corporis eveniet ipsam voluptas qui cum asperiores alias non!</p>

                    <h5 id="item3-2">Lorem, ipsum.</h5>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Labore aperiam blanditiis aspernatur
                        fuga, totam dicta, nemo quo dolores repudiandae, eveniet fugiat et aliquam quae. Ducimus sunt
                        assumenda, porro, doloremque nisi asperiores ex beatae iste nulla eligendi illo facilis quo.
                        Delectus.</p>
                </div>
            </div>
        </div>


        <!-- CARDS  -->
        <div class="row justify-content-sm-center">
            <div class="col-sm-6 col-md-4">
                <div class="card mb-5">
                    <img src="\views\projetos\Sites\Site1\img\natureza1.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">Lorem ipsum dolor sit amet.</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Lorem, ipsum dolor.</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, doloribus.
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Lorem, ipsum dolor.</li>
                        <li class="list-group-item">Lorem, ipsum dolor.</li>
                        <li class="list-group-item">Lorem, ipsum dolor.</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">LINK 1</a>
                        <a href="#" class="card-link">LINK 2</a>
                    </div>

                    <div class="card-footer text-muted">
                        Lorem, ipsum dolor.
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card mb-5">
                    <img src="\views\projetos\Sites\Site1\img\natureza4.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">Lorem ipsum dolor sit amet.</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Lorem, ipsum dolor.</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, doloribus.
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Lorem, ipsum dolor.</li>
                        <li class="list-group-item">Lorem, ipsum dolor.</li>
                        <li class="list-group-item">Lorem, ipsum dolor.</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link">LINK 1</a>
                        <a href="#" class="card-link">LINK 2</a>
                    </div>
                    <div class="card-footer text-muted">
                        Lorem, ipsum dolor.
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-md-4">
                <div class="card mb-5">
                    <img src="\views\projetos\Sites\Site1\img\natureza5.jpg" alt="" class="card-img-top">
                    <div class="card-body">
                        <h4 class="card-title">Lorem ipsum dolor sit amet.</h4>
                        <h6 class="card-subtitle mb-2 text-muted">Lorem, ipsum dolor.</h6>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, doloribus.
                        </p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Lorem, ipsum dolor.</li>
                        <li class="list-group-item">Lorem, ipsum dolor.</li>
                        <li class="list-group-item">Lorem, ipsum dolor.</li>
                    </ul>
                    <div class="card-body">
                        <a href="#" class="card-link" data-toggle="modal" data-target="#siteModal">LINK 1</a>
                        <a href="#" class="card-link">LINK 2</a>
                    </div>
                    <div class="card-footer text-muted">
                        Lorem, ipsum dolor.
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-12 text-center">
                    <h1 class="display-4"><i class="fas fa-video text-primary mr-3"></i>Lorem ipsum dolor sit.</h1>
                    <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Molestias quisquam maiores
                        reiciendis, fugit nulla amet dignissimos deserunt cum ab quos.</p>
                    <hr>

                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <ul class="nav nav-pills justify-content-center mb-3" id="pills-nav" role="tablist">
                        <li class="nav-item">
                            <a href="#nav-item-01" class="nav-link active" id="nav-pills-01" data-toggle="pill">link</a>
                        </li>
                        <li class="nav-item">
                            <a href="#nav-item-02" class="nav-link" id="nav-pills-02" data-toggle="pill">link 2</a>
                        </li>
                        <li class="nav-item">
                            <a href="#nav-item-03" class="nav-link" id="nav-pills-03" data-toggle="pill">link 3</a>
                        </li>
                    </ul>

                    <div class="tab-content" id="nav-pills-content">
                        <div class="tab-pane fade show active" id="nav-item-01" role="panel">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe src="https://www.youtube.com/embed/moHc1eRVshU" frameborder="0" class="embed-responsive-item"></iframe>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-8">
                                    <p>TESTE</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-item-02" role="panel">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe src="https://www.youtube.com/embed/6pmouy4GQXo" frameborder="0" class="embed-responsive-item"></iframe>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-8">
                                    <p>TESTE</p>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-item-03" role="panel">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="embed-responsive embed-responsive-16by9">
                                        <iframe src="https://www.youtube.com/embed/Q5zQaiQlwnc" frameborder="0" class="embed-responsive-item"></iframe>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-8">
                                    <p>TESTE</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12 text-center my-3">
                <h1 class="display-4"><i class="fas fa-paper-plane text-primary"></i>Lorem ipsum dolor sit.</h1>
            </div>
        </div>

        <div class="row justify-content-center mb-5">
            <div class="col-sm-12 col-md-10 col-lg-8">
                <form action="" autocomplete="off">
                    <div class="form-row">
                        <div class="form-group col-sm-6">
                            <label for="inputNome">Nome:</label>
                            <input type="text" class="form-control" id="inputNome" placeholder="Digite seu nome...">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="inputSobrenome">Sobrenome:</label>
                            <input type="text" class="form-control" id="inputSobrenome" placeholder="Digite seu sobrenome...">
                        </div>
                        <div class="form-group col-sm-12">
                            <label for="inputEndereco">Endereço</label>
                            <input type="text" class="form-control" id="inputEndereco" placeholder="Digite seu endereço...">
                        </div>
                        <div class="form-group col-sm-6">
                            <label for="inputcidade">Cidade</label>
                            <input type="text" class="form-control" id="inputcidade" placeholder="Digite sua cidade...">
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="inputEstado">Estado</label>
                            <select name="selectEstado" id="inputEstado" class="form-control">
                                <option value="" selected>Escolha</option>
                                <option value="">...</option>
                                <option value="">...</option>
                                <option value="">...</option>
                            </select>
                        </div>
                        <div class="form-group col-sm-2">
                            <label for="inputCep">Cep</label>
                            <input type="number" class="form-control" id="inputCep" placeholder="Cep...">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-12">
                            <div class="form-check">
                                <label for="inputCheck" class="form-check-label">
                                    <input type="checkbox" class="form-check-input" id="inputCheck">Desejo receber
                                    novidades por email
                                </label>
                            </div>
                        </div>
                        <button class="btn btn-primary" type="submit">Enviar</button>
                        <a class="btn btn-secondary ml-2" tabindex="0" role="button" data-toggle="popover" data-placement="right" data-trigger="focus" title="lorem7" data-content="lorem15">Ajuda</a>
                    </div>
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-12 mb-3">
                <hr>
            </div>

            <div class="col-sm-4 text-center">
                <h3>Curso</h3>
                <p>Curso de Bootstrap-4</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque, eius!</p>
            </div>
            <div class="col-sm-4 text-center">
                <h3>Menu</h3>
                <div class="list-group text-center">
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Perfil</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Serviços</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Depoimentos</a>
                    <a href="#" class="list-group-item list-group-item-action list-group-item-primary">Contatos</a>
                </div>
            </div>
            <div class="col-sm-4">
                <h3>Social</h3>

                <div class="btn-group-vertical btn-block btn-group-lg" role="group">
                    <a href="#" class="btn btn-outline-primary"><i class="fab fa-facebook-square"></i>Facebook</a>
                    <a href="#" class="btn btn-outline-info"><i class="fab fa-twitter-square"></i>Twitter</a>
                    <a href="#" class="btn btn-outline-warning"><i class="fab fa-instagram-square"></i>Instagram</a>
                </div>
            </div>

            <div class="col-12 mt-5">
                <blockquote class="blockquote text-center">
                    <p class="mb-0">O sucesso não é garantido, mas o fracasso é certo se você não estiver emocionalmente envolvido em seu trabalho</p>
                    <footer class="blockquote-footer">Biz Stone <cite title="Source Title">Fundador do Twitter</cite></footer>
                </blockquote>
            </div>
        </div>
    </div>

    <!-- MODAL -->

    <div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Lorem, ipsum dolor.</h5>
                    <button class="close" type="button" data-dismiss="modal">
                        <span>&times;</span>
                    </button>
                </div>

                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-6">
                                <h5>Lorem, ipsum.</h5>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, perspiciatis!
                                </p>
                            </div>
                            <div class="col-6">
                                <h5>Lorem, ipsum.</h5>
                                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum laborum repudiandae
                                    perspiciatis sit veniam illo!</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous">
    </script>
    <script>
        $(function() {
            $('[data-toggle=popover').popover();
        });
    </script>
</body>

</html>