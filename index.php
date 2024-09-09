<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>
<!-- #####################################-->
 <!-- #####################################-->
    <nav class="navbar bg-dark navbar-dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#menuCursos"
                style="cursor:pointer" aria-expanded="true">
                <span class="navbar-toggler-icon"></span>
            </button> 
            <div class="navbar-collapse collapse" id="menuCursos">
                <ul class="navbar-nav">
                    <li class="nav-item"><a class="nav-link" href="#">Web 1</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Web 2</a></li>
                    <li class="nav-item"><a class="nav-link" href="#">Web 3</a></li>
                </ul>
            </div>
        </div>
    </nav>
<!-- #####################################-->
 <!-- #####################################-->

    <div id="banner" class="carousel slide" data-bs-ride="carousel">
        <!-- Galeria de imagens -->
        <div id="imagens" class="carousel-inner">
            <div class="carousel-item active">
                <img src="print1.jpg" class="d-block w-5">
                <!-- É possível inserir textos -->
                <div class="carousel-caption">
                    <h2>Lorem ipsum dolor sit amet consectetur adipisicing elit. Rem, nemo!</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/901/1100/350?grayscale" class="d-block w-100">
            </div>
            <div class="carousel-item">
                <img src="https://picsum.photos/id/902/1100/350?grayscale" class="d-block w-100">
            </div>
        </div>
        <!-- Botões de navegação rápida em bottom -->
        <div id="indicadores" class="carousel-indicators">
            <button type="button" data-bs-target="#banner" data-bs-slide-to="0" class="active"></button>
            <button type="button" data-bs-target="#banner" data-bs-slide-to="1"></button>
            <button type="button" data-bs-target="#banner" data-bs-slide-to="2"></button>
            <button type="button" data-bs-target="#banner" data-bs-slide-to="3"></button>
            <button type="button" data-bs-target="#banner" data-bs-slide-to="4"></button>
        </div>
        <!-- Botões de navegação left/right-->
        <button type="button" class="carousel-control-prev" data-bs-target="#banner" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button type="button" class="carousel-control-next" data-bs-target="#banner" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

<!-- #####################################-->
<!-- #####################################-->

 <!-- Card é uma estrutura semântica com header, body e footer -->
 <div id="div-1" class="card">
            <div class="card-header">
                <h1 class="card-title">Lorem, ipsum.</h1>
            </div>
            <div class="card-body">
                <img src="https://picsum.photos/id/1084/465/200">
                <p class="card-text m-3">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic, commodi dolore
                    incidunt iure itaque culpa ipsum cumque non sequi nulla dicta soluta amet beatae? Minima dicta ad
                    voluptatem unde commodi.</p>
                <a href="https://www.lojaepson.com.br" target="_blank" class="btn btn-primary">Acessar</a>
            </div>
            <div class="card-footer">https://www.lojaepson.com.br</div>
        </div>


        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
</body>

</html>