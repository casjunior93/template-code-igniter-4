<section class="content-section-login col-12 vh-100 d-flex aligns-items-center justify-content-center">
    <div class="content-form-login col-md-4 p-3 border rounded-3 align-self-center">
        <h1>Entrar</h1>
        <form action="<?= base_url('auth/login'); ?>" method="POST">
            <?= csrf_field(); ?>
            <?php if (!empty(session()->getFlashdata('fail'))) : ?>
                <div class='alert alert-danger'><?= session()->getFlashdata('fail'); ?></div>
            <?php endif ?>
            <?php if (!empty(session()->getFlashdata('success'))) : ?>
                <div class='alert alert-success'><?= session()->getFlashdata('success'); ?></div>
            <?php endif ?>
            <label for="username-email">Email<span class="text-danger">*</span></label>
            <input value='' id="username-email" placeholder="E-mail" type="text" class="form-control" name="email" value="<?= set_value('email'); ?>" required />
            <?php
            if (isset($validation) && display_errors_forms($validation, 'email')) {
                echo '<div class="alert alert-danger">';
                echo display_errors_forms($validation, 'email');
                echo '</div>';
            }
            ?>
            <label for="password">Senha<span class="text-danger">*</span></label>
            <input id="password" value='' placeholder="Senha" type="password" class="form-control" name="senha" minlength="5" maxlength="12" required />
            <?php
            if (isset($validation) && display_errors_forms($validation, 'senha')) {
                echo '<div class="alert alert-danger">';
                echo display_errors_forms($validation, 'senha');
                echo '</div>';
            }
            ?>
            <label>
                <input id="login-remember" type="checkbox" name="remember" value="1"> Lembrar-me
            </label>
            <input type="submit" class="btn btn-primary" value="Login" />
            <a href="<?= base_url('auth/recover-password'); ?>" class="d-block text-center">Esqueci minha senha</a>
            <span class="text-center d-block">Ainda não tem conta?</span>
            <a href="<?= base_url('auth/registration'); ?>" class="d-block text-center">Criar uma conta</a>
        </form>
    </div>
</section>