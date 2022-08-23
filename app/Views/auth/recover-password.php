<section class="content-section-login col-12 vh-100 d-flex aligns-items-center justify-content-center">
  <div class="content-form-login col-md-5 p-3 border rounded-3 align-self-center">
    <h1>Recuperação de senha</h1>
    <form action="<?= base_url('auth/reset-password'); ?>" method="POST">
      <?= csrf_field(); ?>
      <?php if (!empty(session()->getFlashdata('fail'))) : ?>
        <div class='alert alert-danger mt-1'><?= session()->getFlashdata('fail'); ?></div>
      <?php endif ?>
      <?php if (!empty(session()->getFlashdata('success'))) : ?>
        <div class='alert alert-success'><?= session()->getFlashdata('success'); ?></div>
      <?php endif ?>
      <div class="row mb-3">
        <label for="username-email" class="col-sm-3 col-form-label">Email<span class="text-danger">*</span></label>
        <div class="col-sm-9">
          <input value='' id="username-email" placeholder="E-mail" type="text" class="form-control" name="email" value="<?= set_value('email'); ?>" required />
          <?php
          if (isset($validation) && display_errors_forms($validation, 'email')) {
            echo '<div class="alert alert-danger mt-1">';
            echo display_errors_forms($validation, 'email');
            echo '</div>';
          }
          ?>
        </div>
      </div>
      <div class="row mb-3">
        <div class="col-sm-12 d-flex justify-content-center">
          <input type="submit" class="btn btn-primary" value="Recuperar senha" />
        </div>
      </div>
      <div class="row mb-3">
        <a href="<?= base_url('auth/registration'); ?>" class="d-block text-center">Criar uma conta</a>
      </div>
      <div class="row mb-3">
        <a href="<?= base_url('auth/sigin'); ?>" class="d-block text-center">Entrar</a>
      </div>
  </div>
  </form>
  </div>
</section>