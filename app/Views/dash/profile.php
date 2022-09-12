<section class="col-12 p-3 bg-white">
  <div class="col-12 d-flex justify-content-center">
    <div class="col-6">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item" role="presentation">
          <button class="nav-link active" id="personal-tab" data-bs-toggle="tab" data-bs-target="#personal" type="button" role="tab" aria-controls="personal" aria-selected="true">Informações pessoais</button>
        </li>
        <li class="nav-item" role="presentation">
          <button class="nav-link" id="password-tab" data-bs-toggle="tab" data-bs-target="#password" type="button" role="tab" aria-controls="password" aria-selected="false">Senha</button>
        </li>
      </ul>
      <div class="spacing-30"></div>
      <?php if (!empty(session()->getFlashdata('fail'))) : ?>
        <div class='alert alert-danger mt-1'><?= session()->getFlashdata('fail'); ?></div>
      <?php endif ?>
      <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div class='alert alert-success'><?= session()->getFlashdata('success'); ?></div>
      <?php endif ?>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="personal" role="tabpanel" aria-labelledby="personal-tab">
          <div class="profile-form p-2">
            <form class="row g-3" action="<?= base_url('user/update'); ?>" method="POST">
              <div class="col-12">
                <label for="name" class="form-label">Nome</label>
                <input type="text" class="form-control" id="name" placeholder="Nome" name="name" value="<?= $user_info['name']; ?>">
                <?php
                if (isset($validation) && display_errors_forms($validation, 'name') != '') {
                  echo '<div class="alert alert-danger mt-1">';
                  echo display_errors_forms($validation, 'name');
                  echo '</div>';
                }
                ?>
              </div>
              <div class="col-md-6">
                <label for="inputPhone" class="form-label">Telefone</label>
                <input type="phone" name="phone" class="form-control" id="inputPhone" placeholder="Telefone" value="<?= $user_info['phone_number']; ?>">
                <?php
                if (isset($validation) && display_errors_forms($validation, 'phone') != '') {
                  echo '<div class="alert alert-danger mt-1">';
                  echo display_errors_forms($validation, 'phone');
                  echo '</div>';
                }
                ?>
              </div>
              <div class="col-md-6">
                <label for="inputEmail" class="form-label">Email</label>
                <input type="email" name="email" class="form-control" id="inputEmail" placeholder="Email" value="<?= $user_info['email']; ?>">
                <?php
                if (isset($validation) && display_errors_forms($validation, 'email') != '') {
                  echo '<div class="alert alert-danger mt-1">';
                  echo display_errors_forms($validation, 'email');
                  echo '</div>';
                }
                ?>
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </form>
          </div>
        </div>
        <div class="tab-pane fade" id="password" role="tabpanel" aria-labelledby="password-tab">
          <div class="profile-form p-2">
            <form class="row g-3">
              <div class="col-md-6">
                <label for="inputPassword" class="form-label">Senha</label>
                <input type="password" name="password" class="form-control" id="inputPassword" placeholder="Senha">
              </div>
              <div class="col-md-6">
                <label for="inputPassword2" class="form-label">Repetir senha</label>
                <input type="password" name="password2" class="form-control" id="inputPassword2" placeholder="Repetir senha">
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>