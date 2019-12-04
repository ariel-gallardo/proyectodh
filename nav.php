  <div class = "d-flex">
        <a class = "NavLogo navbar-brand mr-0 nav-link mt-3" href="#">
          <h3>S.M.<img src="/integrador/img/nav/super.svg" width="40vw" alt="buy"></h3>
          <h6>Digital House</h6>
        </a>
      <ul class = "nav">
        <li class = "nav-item">
           <!-- <a class = "position-relative" href="#"> -->
           <div class = "modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class = "modal-dialog cascading-modal" role="document">
              <div class = "modal-content">
                <?php require_once "usuario/index.php"; ?>
              </div>
            </div>
           </div>
          <div class="text-center">
            <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalLoginForm">
              <img src="/integrador/img/nav/usuario.svg" alt="Perfil" width="40vw">
            </a>
          </div>
              <!-- <pre class = "position-absolute py-2 text-white">Bienvenido</pre> -->
        </li>
        <li class = "mr-3 nav-item rounded position-relative">
          <a href="#">
              <img src="/integrador/img/nav/carro.svg" alt="Carro" width="40vw">
              <span class = "badge badge-primary position-absolute mt-4">0</span>
          </a>
        </li>
        <li class = "nav-item rounded position-relative">
          <a href="#">
              <img src="/integrador/img/nav/notificacion.svg" alt="Carro" width="40vw">
              <span class = "badge badge-primary position-absolute mt-4">0</span>
          </a>
        </li>
      </ul>
      <!-- Boton Menu Acortable -->
      <button class="px-0 ml-4 mb-5 navbar-toggler border-0" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
    </div>
<!-- Lista Menu Acortable -->
<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto ml-lg-5">
  <li class="nav-item active">
    <a class="nav-link" href="#">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">F.A.Q.</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" href="#">Contacto</a>
  </li>
</ul>
</div>
<!-- Buscador -->
  <div class="NavBuscador container col-10 mt-3 pb-md-5 mt-md-0 col-md-5 col-lg-5 mr-lg-0 d-inline">
    <form class = "row border rounded  shadow-lg" action="index.html" method="get">
      <!--Menu Selector-->
      <div class="dropdown col-5 col-md-4 col-lg-3 px-md-0">
        <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categoria
        </a>
        <div class="dropdown-menu text-center my-3" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Indumentaria</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Ferreteria</a>
        </div>
      </div>
      <!--Buscador con botón-->
      <input class = "border col-5 col-md-6 col-lg-8 px-md-0 text-center" type="text" name="articulo" placeholder=" Articulo ID/Nombre">
      <button class = "btn col-1 py-0" type="submit"><img src="img/nav/buscar.svg" alt="Lupa" width="25vw"></button>
    </form>
  </div>
