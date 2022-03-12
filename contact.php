<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="desccription" content="Venta de comida venezolana en Argentina">
    <meta name="keywords" content="comida, venezolana, venezolano, venezuela, arepa, tequeño, empanada, reina pepiada, merida, sabores">
    <title>Contacto</title>
    <link rel="stylesheet" href="CSS/estilos.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body class="cuerpo">
    <div class="div__principal">
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
        <main class="principal">
            <div class="principal__contact container-fluid">
                    <div class="contact__left">
                        <h1 class="section__title">Contáctanos</h1>
                        <form action="">
                            <div class="mb-3">
                                <label for="name" class="form-label"></label>
                                <input type="fname" class="form-control" id="exampleFormControlInput1" placeholder="Nombre y Apellido" required>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label"></label>
                                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="email@example.com" required>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea1" class="form-label"></label>
                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Danos tu opinión"></textarea>
                                <input type="submit" class="contact__button btn btn-warning">
                            </div>
                        </form>
                    </div>
                    <div class="contact__right">
                        <div class="contactos container-fluid">
                            <div>
                                <span class="iconify-inline" data-icon="fxemoji:cellphone" data-width="40" data-height="40"></span>
                                <p class="contacto__contenido">22 5555 5555</p>
                            </div>
                            <div>
                                <span class="iconify-inline" data-icon="emojione-v1:e-mail" data-width="40" data-height="40"></span>
                                <p class="contacto__contenido">sabores@merida.com</p>
                            </div>
                            <div>
                                <span class="iconify-inline" data-icon="emojione:world-map" data-width="40" data-height="40"></span>
                                <p class="contacto__contenido">Avenida Sabor 16 Tokyo Japón</p>
                            </div>
                        </div>
                        <div class="contact__imagen">
                            <iframe class="contact__imagen--size" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1662980.6524248242!2d138.64862155777902!3d35.50405354021067!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x605d1b87f02e57e7%3A0x2e01618b22571b89!2zVG9raW8sIEphcMOzbg!5e0!3m2!1ses-419!2sar!4v1646871937726!5m2!1ses-419!2sar" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
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
    <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>