<?php
    define('APP_URL', 'http://localhost/adsi/ClaseLunes/CRUD');
?>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">CRUD</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo APP_URL;?>/insert/">Agregar</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" aria-current="page" href="<?php echo APP_URL;?>/listar/">Mostrar Datos</a>
        </li>
      </ul>
    </div>
  </div>
</nav>