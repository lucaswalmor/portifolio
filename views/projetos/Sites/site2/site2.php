<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="\views\projetos\Sites\site2\css\main.css">
    <title>Segundo projeto HTML E CSS</title>
</head>

<body>
    <nav>
        <div class="button">
            <a href="\views\projetos\sites.php"><button type="submit">Voltar</button></a>
        </div>
        <a href="#">Projeto para Portifólio</a>
        <ul>
            <li><a href="#">Sobre</a></li>
            <li><a href="#serviços">Serviços</a></li>
            <li><a href="#fotos">Fotos</a></li>
            <li><a href="#contato">Contato</a></li>
        </ul>
    </nav>

    <header id="topo">
        <h1>Fotógrafo Profissional</h1>
        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam debitis ullam dolorum! Necessitatibus harum
            doloribus minima inventore adipisci eaque quisquam.
        </p>
        <a href="#serviços" class="botao">Ver Mais</a>
    </header>

    <section id="sobre">
        <h2>Sobre</h2>
        <p>
            Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit, commodi.
        </p>
        <a href="#contato" class="botao">Contrate Agora</a>
    </section>

    <section id="servicos">
        <div>
            <img src="\views\projetos\Sites\site2\img\p1.png" alt="Camera">
            <h3>Fotografias</h3>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div>
            <img src="\views\projetos\Sites\site2\img\p2.png" alt="Filme">
            <h3>Edição de Video</h3>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
        <div>
            <img src="\views\projetos\Sites\site2\img\p3.png" alt="Video Player">
            <h3>Captação de imagem</h3>
            <p>Lorem ipsum dolor sit amet.</p>
        </div>
    </section>

    <section id="fotos">
        <h2>Fotos</h2>
        <img src="\views\projetos\Sites\site2\img\ceu.jpg" alt="ceu">
        <img src="\views\projetos\Sites\site2\img\grama.jpg" alt="grama">
        <img src="\views\projetos\Sites\site2\img\montanha.jpg" alt="montanha">
        <img src="\views\projetos\Sites\site2\img\mar.jpg" alt="mar">
        <img src="\views\projetos\Sites\site2\img\arvores.jpg" alt="arvores">
        <img src="\views\projetos\Sites\site2\img\ponte.jpg" alt="ponte">
    </section>

    <section id="contato">
        <h2>Contato</h2>
        <p>Fale Conosco</p>
        <div>
            <img src="\views\projetos\Sites\site2\img\tel.png" alt="telefone">
            <p><a href="tel:34992021394">
                    (34) 99202-1394
                </a></p>
        </div>
        <div>
            <img src="\views\projetos\Sites\site2\img\mail.png" alt="mail">
            <p><a href="mailto:lucaswsb52@gmail.com">
                    lucaswsb52@gmail.com
                </a></p>
        </div>
    </section>

    <footer>
        <a href="#topo">Voltar</a>
        <p>Desenvolvido por Lucas Steinbach</p>
    </footer>
</body>

</html>