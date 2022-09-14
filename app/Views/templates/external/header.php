<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?= base_url(); ?>">Nome do App</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link text-white" aria-current="page" href="<?= base_url('pricing'); ?>">Preços</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="<?= base_url('features'); ?>">Recursos</a>
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
    <div class="nav-item d-flex">
      <ul class="nav">
        <li class="nav-item"><a href="<?= base_url('auth/sigin'); ?>" class="nav-link text-white px-2">Entrar</a></li>
        <li class="nav-item"><a href="<?= base_url('auth/registration'); ?>" class="nav-link text-white px-2">Registrar</a></li>
      </ul>
      <ul class="navbar-nav d-none">
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