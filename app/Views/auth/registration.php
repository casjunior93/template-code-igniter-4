<section class="content-section-registration col-12 vh-100 d-flex aligns-items-center justify-content-center">
    <div class="content-form-registration col-md-5 p-3 border rounded-3 align-self-center">
        <h1>Registro</h1>
        <form class="" action="<?= base_url('auth/save-registration'); ?>" method="POST">
            <?= csrf_field(); ?>
            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                <div class='alert alert-danger'><?= session()->getFlashdata('fail'); ?></div>
            <?php endif ?>

            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class='alert alert-success'><?= session()->getFlashdata('success'); ?></div>
            <?php endif ?>
            <div class="row mb-3">
                <label for="inputName" class="col-sm-3 col-form-label">Nome<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="text" id="inputName" name="name" class="form-control" value="<?= set_value('name'); ?>" required>
                    <?php
                    if (isset($validation) && display_errors_forms($validation, 'name') != '') {
                        echo '<div class="alert alert-danger">';
                        echo display_errors_forms($validation, 'nome');
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPhone" class="col-sm-3 col-form-label">Telefone:<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="phone" class="form-control" id="inputPhone" name="phone" value="<?= set_value('phone'); ?>" required>
                    <?php
                    if (isset($validation) && display_errors_forms($validation, 'phone') != '') {
                        echo '<div class="alert alert-danger">';
                        echo display_errors_forms($validation, 'phone');
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputEmail" class="col-sm-3 col-form-label">Email<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="email" value="<?= set_value('email'); ?>" class="form-control" id="inputEmail" name="email" required>
                    <?php
                    if (isset($validation) && display_errors_forms($validation, 'email') != '') {
                        echo '<div class="alert alert-danger">';
                        echo display_errors_forms($validation, 'email');
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword" class="col-sm-3 col-form-label">Senha<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword" name="password" required minlength="5" maxlength="12">
                    <?php
                    if (isset($validation) && display_errors_forms($validation, 'password') != '') {
                        echo '<div class="alert alert-danger">';
                        echo display_errors_forms($validation, 'password');
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <div class="row mb-3">
                <label for="inputPassword4" class="col-sm-3 col-form-label">Repetir senha<span class="text-danger">*</span></label>
                <div class="col-sm-9">
                    <input type="password" class="form-control" id="inputPassword4" name="password2" required minlength="5" maxlength="12">
                    <?php
                    if (isset($validation) && display_errors_forms($validation, 'password2') != '') {
                        echo '<div class="alert alert-danger">';
                        echo display_errors_forms($validation, 'password2');
                        echo '</div>';
                    }
                    ?>
                </div>
            </div>
            <div class="row mb-3">
                <div class="col-sm-12 d-flex justify-content-center">
                    <input type="submit" class="btn btn-primary" value="Registrar" />
                </div>
            </div>
            <div class="row mb-3">
                <span class="text-center d-block">Já tenho conta</span>
                <a href="<?= base_url('auth/sigin'); ?>" class="d-block text-center">Entrar</a>
            </div>
        </form>
    </div>
</section>