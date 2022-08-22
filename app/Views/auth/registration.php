<section class="content-section-registration">
    <div class="content-form-registration">
        <h1>Registro</h1>
        <form class="" action="<?= base_url('auth/save-registration'); ?>" method="POST">
            <?= csrf_field(); ?>
            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                <div class='alert alert-danger'><?= session()->getFlashdata('fail'); ?></div>
            <?php endif ?>

            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class='alert alert-success'><?= session()->getFlashdata('success'); ?></div>
            <?php endif ?>
            <label for="inputName">Nome<span class="text-danger">*</span></label>
            <input type="text" id="inputName" name="name" class="form-control" value="<?= set_value('name'); ?>" required>
            <?php
            if (isset($validation) && display_errors_forms($validation, 'name') != '') {
                echo '<div class="alert alert-danger">';
                echo display_errors_forms($validation, 'nome');
                echo '</div>';
            }
            ?>
            <label for="inputPhone">Telefone:<span class="text-danger">*</span></label>
            <input type="text" class="form-control" id="inputPhone" name="phone" value="<?= set_value('phone'); ?>" required>
            <?php
            if (isset($validation) && display_errors_forms($validation, 'phone') != '') {
                echo '<div class="alert alert-danger">';
                echo display_errors_forms($validation, 'phone');
                echo '</div>';
            }
            ?>
            <label for="inputEmail">Email<span class="text-danger">*</span></label>
            <input type="email" value="<?= set_value('email'); ?>" class="form-control" id="inputEmail" name="email" required>
            <?php
            if (isset($validation) && display_errors_forms($validation, 'email') != '') {
                echo '<div class="alert alert-danger">';
                echo display_errors_forms($validation, 'email');
                echo '</div>';
            }
            ?>
            <label for="inputPassword">Senha<span class="text-danger">*</span></label>
            <input type="password" class="form-control" id="inputPassword" name="password" required minlength="5" maxlength="12">
            <?php
            if (isset($validation) && display_errors_forms($validation, 'password') != '') {
                echo '<div class="alert alert-danger">';
                echo display_errors_forms($validation, 'password');
                echo '</div>';
            }
            ?>
            <label for="inputPassword4">Repetir senha<span class="text-danger">*</span></label>
            <input type="password" class="form-control" id="inputPassword4" name="password2" required minlength="5" maxlength="12">
            <?php
            if (isset($validation) && display_errors_forms($validation, 'password2') != '') {
                echo '<div class="alert alert-danger">';
                echo display_errors_forms($validation, 'password2');
                echo '</div>';
            }
            ?>
            <button type="submit" class="btn btn-primary">Enviar</button>
        </form>
    </div>
</section>