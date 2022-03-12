<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="desccription" content="Venta de comida venezolana en Argentina">
    <meta name="keywords" content="comida, venezolana, venezolano, venezuela, arepa, tequeño, empanada, reina pepiada, merida, sabores">
    <title>Sabores de Merida</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="cuerpo">
    <div id="div__principal--index" class="div__principal">
        <header class="encabezado">
            <!---LOGOTIPO--->
            <img class="encabezado__logo" src="Assets/Logo/LogoMerida.png" alt="logo">
            <nav class="encabezado__nav navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button> 
                        <div class="collapse navbar-collapse container-fluid" id="navbarSupportedContent">
                            <ul class="navegador navbar-nav me-auto mb-2 mb-lg-0">
                                <li class="bar__link nav-item"><a class="bar__link--name" href="index.php">Home</a></li>
                                <li class="bar__link nav-item"><a class="bar__link--name" href="menu.php">Menu</a></li>
                                <li class="bar__link nav-item"><a class="bar__link--name" href="aboutus.php">Sobre Nosotros</a></li>
                                <li class="bar__link nav-item"><a class="bar__link--name" href="review.php">Review</a></li>
                                <li class="bar__link nav-item"><a class="bar__link--name" href="contact.php">Contacto</a></li>
                            </ul>
                        </div>
                </div>
            </nav>
        </header>
        <main id="principal__index" class="principal">
            <div class="container-fluid">
                <div id="carouselExampleControls" class="carousel" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="10000">
                            <img src="Assets/contenido/arepas.png" class="d-block w-100 carousel__imagen opacity-25" alt="Arepas Venezolanas">
                            <div class="carousel-caption d-md-block">
                                <h1 class="section__title">Sabores de Mérida</h1>
                                <p>Esta es una experiecia de placer, sabor y cultura</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="Assets/contenido/pandejamon.png" class="d-block w-100 carousel__imagen opacity-25" alt="Pan de Jamon Navideño">
                        </div>
                        <div class="carousel-item">
                            <img src="Assets/contenido/empanadas.png" class="d-block w-100 carousel__imagen opacity-25" alt="Empanadas Venezolanas">
                        </div>
                        <div class="carousel-item">
                            <img src="Assets/contenido/hallaca.png" class="d-block w-100 carousel__imagen opacity-25" alt="Hallaca">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div>
                <h2 class="index__subtitle">
                    Nuestros Servicios
                </h2>
            </div>
            <div class="index__services container-fluid">
                <a href=""><img src="Assets/contenido/Delivery-01.png" alt="Link de Delivery" class="services__image"></a>
                <a href=""><img src="assets/contenido/Vianda-01.png" alt="Link de Viandas" class="services__image"></a>
                <a href=""><img src="assets/contenido/Catering-01.png" alt="Link de Catering" class="services__image"></a>
            </div>
        </main>
        <!-- En caso de necesitar agregar algo en ese espacio --> 
        
        <footer>
            <p class="footer__text">Todos los derechos reservados </p>
            <aside class="redes">
                <ul class="redes__search">
                    <li class="search__link"><a href="https://www.instagram.com/"><img class="search__link--logo" src="Assets/Logo/LogoInstagram.png"></a></li>
                    <li class="search__link"><a href="https://www.facebook.com/"><img class="search__link--logo" src="Assets/Logo/LogoFacebook.png"></a></li>
                    <li class="search__link"><a href="https://www.tiktok.com/es/k"><img class="search__link--logo" src="Assets/Logo/LogoTikTok.png"></a></li>
                </ul>
            </aside>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>