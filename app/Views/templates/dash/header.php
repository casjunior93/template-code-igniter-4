<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Nome do App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="<?= base_url('dashboard'); ?>">Dashboard</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="#">Recursos</a>
        </li>
      </ul>
      <ul class="navbar-nav">
        <li class="nav-item dropdown d-block d-sm-none">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Minha conta
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item text-white" href="<?= base_url('dashboard/profile'); ?>">Perfil</a></li>
            <li><a class="dropdown-item text-white" href="<?= base_url('dashboard/payment'); ?>">Assinatura</a></li>
          </ul>
        </li>
      </ul>
    </div>
    <div class="nav-item">
      <ul class="navbar-nav d-none d-sm-block">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Minha conta
          </a>
          <ul class="dropdown-menu dropdown-menu-end dropdown-menu-dark" aria-labelledby="navbarDropdownMenuLink">
            <li><a class="dropdown-item" href="<?= base_url('dashboard/profile'); ?>">Perfil</a></li>
            <li><a class="dropdown-item" href="<?= base_url('dashboard/payment'); ?>">Assinatura</a></li>
            <li><a class="dropdown-item" href="<?= base_url('auth/logout'); ?>">Sair</a></li>
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="py-3 mb-4 border-bottom">
  <div class="container-fluid">
    <div class="container d-flex flex-wrap justify-content-center">
      <div class="d-flex align-items-center mb-3 mb-lg-0 me-lg-auto text-dark text-decoration-none">
        <span class="fs-4"><?= $title; ?></span>
      </div>
      <form class="col-12 col-lg-auto mb-3 mb-lg-0">
        <input type="search" class="form-control" placeholder="Buscar" aria-label="Buscar">
      </form>
    </div>
  </div>
</div>