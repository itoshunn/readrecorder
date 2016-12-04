<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('記録一覧'), ['controller' => 'ReadLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('書籍一覧'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('書籍登録'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('ユーザー一覧'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('ユーザー追加'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="users form large-9 medium-8 columns content">
    <?= $this->Form->create($user) ?>
    <fieldset>
        <legend><?= __('Add User') ?></legend>
        <?php
            echo $this->Form->input('user_name');
            echo $this->Form->input('password');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
