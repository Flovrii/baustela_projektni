<h1>Login</h1>

<?php if (isset($validation)): ?>
    <div class="alert alert-danger"><?= $validation->listErrors() ?></div>
<?php endif; ?>

<?= form_open('Auth/login') ?>
<div class="form-group">
    <label for="username">Username</label>
    <input type="text" name="username" id="username" class="form-control" value="<?= set_value('username') ?>">
</div>
<div class="form-group">
    <label for="password">Password</label>
    <input type="password" name="password" id="password" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Login</button>
<?= form_close() ?>