<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-commerce</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>

<body>
    <nav class="bg-dark navbar navbar-expand-md navbar-dark p-md-1">
                <a class="navbar-brand m-0 p-0 nav-link" href="#">
                    <h3>S.M.<img src="/img/nav/super.svg" width="40vw" alt="SuperMarket"></h3>
                    <h6>Digital House</h6>
                </a>
                <ul class="list-inline">
                    <li class="list-inline-item m-0">
                        <div class="modal fade" id="Usuario" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                            aria-hidden="true">
                            <div class="modal-dialog cascading-modal" role="document">
                                <div class="modal-content">
                                    <?php /* require_once "usuario/index.php"; */?>
                                </div>
                            </div>
                        </div>
                        <div class="text-center" class="btn btn-default btn-rounded" data-toggle="modal"
                            data-target="#Usuario">
                            <img src="/img/nav/usuario.svg" alt="Perfil" width="35vw">
                        </div>
                    </li>
                    <li class="list-inline-item position-relative btn btn-default btn-rounded m-0 p-0 pr-4" data-toggle="modal"
                        data-target="#Usuario">
                        <img src="/img/nav/carro.svg" alt="Carro" width="35vw">
                        <span class="badge badge-primary position-absolute mt-4">20</span>
                    </li>
                    <li class="list-inline-item position-relative btn btn-default btn-rounded m-0 p-0 pr-3" data-toggle="modal"
                        data-target="#Usuario">
                        <img src="/img/nav/notificacion.svg" alt="Carro" width="35vw">
                        <span class="badge badge-primary position-absolute mt-4">20</span>
                    </li>
                </ul>
                <!-- Boton Menu Acortable -->
                <button class="navbar-toggler border-0 margin-0 p-1" type="button" data-toggle="collapse"
                    data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            <!-- Lista Menu Acortable -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav text-center pl-md-1 mr-auto ml-lg-5 ml-md-2">
                    <li class="nav-item active">
                        <a class="nav-link m-md-0 p-md-1" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-md-0 p-md-1" href="#">F.A.Q.</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link m-md-0 p-md-1" href="#">Contacto</a>
                    </li>
                </ul>
            </div>
            <!-- Buscador -->
            <div class="container d-inline col-9 mt-1 pb-md-0 col-md-5 pb-lg-0  text-center">
                <form class="row border rounded  shadow-lg" action="index.html" method="get">
                    <!--Menu Selector-->
                    <div class="dropdown col-5 col-md-4 col-lg-3 px-md-0">
                        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            Categoria
                        </a>
                        <div class="dropdown-menu my-3" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Indumentaria</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Ferreteria</a>
                        </div>
                    </div>
                    <!--Buscador con botón-->
                    <input class="border col-5 col-md-6 col-lg-8 px-md-0 text-center" type="text" name="articulo"
                        placeholder=" Articulo ID/Nombre">
                    <button class="btn col-1 py-0" type="submit"><img src="/img/nav/buscar.svg" alt="Lupa"
                            width="20vw"></button>
                </form>
            </div>
    </nav>
    <header>
        <div id="carouselExampleControls" class="carousel slide carousel-fade" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active slide1">
                    <div class="a_text text-center rounded px-2">
                        <h2>Bienvenido</h2>
                        <h3>Super Mayorista</h3>
                        <p>Observa las siguientes ofertas de la semana.</p>
                    </div>
                </div>
                <div class="carousel-item slide2">
                    <div class="a_text text-center rounded px-3 pt-3">
                        <img src="/img/pago/ahora12.png" alt="ahora 12" width="100vw">
                        <img src="/img/pago/mastercard.png" alt="Mastercard" width="100vw">
                        <img src="/img/pago/visa.png" alt="Visa" width="100vw">
                        <p>Abona con los siguientes metodos de pago</p>
                    </div>
                </div>
                <div class="carousel-item slide3">
                    <div class="a_text text-center rounded">
                        <div class="container text-center pt-3">
                            <h2>ENVIOS A TODO EL PAIS</h2>
                            <p>Trabajamos con los siguientes distribuidores</p>
                        </div>
                        <img src="/img/carousel/envios/correoarg.png" alt="Correo Argentino" width="100vw">
                        <img src="/img/carousel/envios/correoand.png" alt="Correo Andreani" width="100vw">
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>
    <main class="container">
    </main>
    <footer>
        <section class="text-center">
            <h4>Sucursales</h4>
            <ul class="list-inline">
                <li class="list-inline-item mx-5 my-3 border rounded p-2">
                    <p><strong>Moreno 567</strong>, Mendoza</p>
                    <a class="btn" href="tel:2610001000"><img src="/img/footer/whatsapp.svg" alt="Telefono"
                            width="30vw"><b>261 010-1010</b></a>
                    <p><strong>Lunes a Jueves</strong><br>17 a 22h</p>
                </li>
                <li class="list-inline-item mx-5 my-3 border rounded p-2">
                    <p><strong>San Martin 342</strong>, Mendoza</p>
                    <a class="btn" href="tel:2610001000"><img src="/img/footer/whatsapp.svg" alt="Telefono"
                            width="30vw"><b>261 010-1010</b></a>
                    <p><strong>Viernes a Domingo</strong><br>17 a 23.30h</p>
                </li>
            </ul>
        </section>
        <section class="text-center">
            <small>© 2019 <strong>Super Mayorista</strong>. Todos los derechos reservados</small>
        </section>
    </footer>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
        integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous">
    </script>
</body>

</html>