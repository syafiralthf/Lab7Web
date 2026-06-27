<?= $this->include('template/header'); ?>

<div class="login-container">

    <div class="login-box">
        <h2>Login Admin</h2>

        <?php if(session()->getFlashdata('error')): ?>
            <p class="error"><?= session()->getFlashdata('error'); ?></p>
        <?php endif; ?>

        <form method="post" action="/login">

            <input type="text" name="username" placeholder="Username" required>

            <input type="password" name="password" placeholder="Password" required>

            <button type="submit">Login</button>

        </form>
    </div>

</div>

<?= $this->include('template/footer'); ?>