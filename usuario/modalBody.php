<div class="modal-c-tabs">
  <ul class = "nav nav-tabs md-tabs tabs-2" role = "tablist">
    <li class = "nav-item">
      <a class = "nav-link text-center" data-toggle = "tab" role = "tab"  href="#login">
        Login
      </a>
    </li>
    <li class = "nav-item">
      <a class = "nav-link text-center" data-toggle = "tab" role = "tab"  href="#registro">
        Registro
      </a>
    </li>
  </ul>
  <div class = "tab-content">
    <div class="tab-pane fade in show active" id = "login" role = "tabpanel">
        <?php include_once "Login.php"; ?>
    </div>
    <div class="tab-pane fade in show" id = "registro" role = "tabpanel">
        <?php include_once "Registro.php"; ?>
    </div>
  </div>
</div>
