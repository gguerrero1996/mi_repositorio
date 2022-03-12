<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="desccription" content="Venta de comida venezolana en Argentina">
    <meta name="keywords" content="comida, venezolana, venezolano, venezuela, arepa, tequeño, empanada, reina pepiada, merida, sabores">
    <title>Sobre Nosotros</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="cuerpo">
    <div class="div__principal">
        <header class="encabezado">
            <!---LOGOTIPO--->
            <img class="encabezado__logo" src="Assets/Logo/LogoMerida.png" alt="logo">
            <nav class="encabezado__nav navbar navbar-expand-lg navbar-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label class="about__label"="Toggle navigation">
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
        <main class="principal">
            <section id="aboutus__section" class="principal__section">
                <h2 class="section__title"> Conócenos </h2>
                <p class="index__text">Somos un Pyme que quiere llevar el sabor de nuestra tierra <span>Venezuela</span> a tu mesa con diversos y deliciosos platos que pueden hacer degustar a tu paladar de una experiencia gastronómica que te hará saborear el caribe a su máxima expresión. De la mano de nuestros cocineros te invitamos a no perderte esta oportunidad de viajar a través del gusto por nuestra nación.</p>
            </section>    
                <div class="aboutus__image">
                    <div class="container-3D">
                        <input type="radio" class="cube__input" id="swap-left-front" name="swapper" value="swap-left">
                        <input type="radio" class="cube__input" id="swap-right-front" name="swapper" value="swap-right">
                        <input type="radio" class="cube__input" id="swap-up-front" name="swapper" value="swap-up">
                        <input type="radio" class="cube__input" id="swap-down-front" name="swapper" value="swap-down">
                        <input type="radio" class="cube__input" id="swap-left-back" name="swapper" value="swap-left">
                        <input type="radio" class="cube__input" id="swap-right-back" name="swapper" value="swap-right">
                        <input type="radio" class="cube__input" id="swap-up-back" name="swapper" value="swap-up">
                        <input type="radio" class="cube__input" id="swap-down-back" name="swapper" value="swap-down">
                        <input type="radio" class="cube__input" id="swap-left-top" name="swapper" value="swap-left">
                        <input type="radio" class="cube__input" id="swap-right-top" name="swapper" value="swap-right">
                        <input type="radio" class="cube__input" id="swap-up-top" name="swapper" value="swap-up">
                        <input type="radio" class="cube__input" id="swap-down-top" name="swapper" value="swap-down">
                        <input type="radio" class="cube__input" id="swap-left-bottom" name="swapper" value="swap-left">
                        <input type="radio" class="cube__input" id="swap-right-bottom" name="swapper" value="swap-right">
                        <input type="radio" class="cube__input" id="swap-up-bottom" name="swapper" value="swap-up">
                        <input type="radio" class="cube__input" id="swap-down-bottom" name="swapper" value="swap-down">
                        <input type="radio" class="cube__input" id="swap-left-left" name="swapper" value="swap-left">
                        <input type="radio" class="cube__input" id="swap-right-left" name="swapper" value="swap-right">
                        <input type="radio" class="cube__input" id="swap-up-left" name="swapper" value="swap-up">
                        <input type="radio" class="cube__input" id="swap-down-left" name="swapper" value="swap-down">
                        <input type="radio" class="cube__input" id="swap-left-right" name="swapper" value="swap-left">
                        <input type="radio" class="cube__input" id="swap-right-right" name="swapper" value="swap-right">
                        <input type="radio" class="cube__input" id="swap-up-right" name="swapper" value="swap-up">
                        <input type="radio" class="cube__input" id="swap-down-right" name="swapper" value="swap-down">
                        <div class="flopper">
                            <figure class="back">
                                <label class="about__label" for="swap-left-back">&#8592;</label class="about__label">
                                <label class="about__label" for="swap-right-back">&#8594;</label class="about__label">
                                <label class="about__label" for="swap-up-back">&#8593;</label class="about__label">
                                <label class="about__label" for="swap-down-back">&#8595;</label class="about__label">
                                <div></div>
                            </figure>
                            <figure class="top">
                                <label class="about__label" for="swap-left-top">&#8592;</label class="about__label">
                                <label class="about__label" for="swap-right-top">&#8594;</label class="about__label">
                                <label class="about__label" for="swap-up-top">&#8593;</label class="about__label">
                                <label class="about__label" for="swap-down-top">&#8595;</label class="about__label">
                                <div></div>
                            </figure>
                            <figure class="bottom">
                                <label class="about__label" for="swap-left-bottom">&#8592;</label class="about__label">
                                <label class="about__label" for="swap-right-bottom">&#8594;</label class="about__label">
                                <label class="about__label" for="swap-up-bottom">&#8593;</label class="about__label">
                                <label class="about__label" for="swap-down-bottom">&#8595;</label class="about__label">
                                <div></div>
                            </figure>
                                <figure class="left">
                                <label class="about__label" for="swap-left-left">&#8592;</label class="about__label">
                                <label class="about__label" for="swap-right-left">&#8594;</label class="about__label">
                                <label class="about__label" for="swap-up-left">&#8593;</label class="about__label">
                                <label class="about__label" for="swap-down-left">&#8595;</label class="about__label">
                                <div></div>
                            </figure>
                                <figure class="right">
                                <label class="about__label" for="swap-left-right">&#8592;</label class="about__label">
                                <label class="about__label" for="swap-right-right">&#8594;</label class="about__label">
                                <label class="about__label" for="swap-up-right">&#8593;</label class="about__label">
                                <label class="about__label" for="swap-down-right">&#8595;</label class="about__label">
                                <div></div>
                            </figure>
                            <figure class="front">
                                <label class="about__label" for="swap-left-front">&#8592;</label class="about__label">
                                <label class="about__label" for="swap-right-front">&#8594;</label class="about__label">
                                <label class="about__label" for="swap-up-front">&#8593;</label class="about__label">
                                <label class="about__label" for="swap-down-front">&#8595;</label class="about__label">
                            </figure>
                        </div>
                    </div>
                </div>
        </main>
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