<h1>Login</h1>
<?= $this->Form->create() ?>
<?= $this->Form->input('user_name') ?>
<?= $this->Form->input('password') ?>
<?= $this->Form->button('Login') ?>
<?= $this->Form->end() ?>