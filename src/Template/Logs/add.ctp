<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('メニュー') ?></li>
        <li><?= $this->Html->link(__('ログ一覧'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('書籍一覧'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('書籍追加'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('ユーザー一覧'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('ユーザー登録'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="logs form large-9 medium-8 columns content">
    <?= $this->Form->create($log) ?>
    <fieldset>
        <legend><?= __('Add Log') ?></legend>
        <?php
            echo $this->Form->input('book_id', ['options' => $books]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('start_date');
            echo $this->Form->input('finish_date', array('selected' => ' ', 'empty' => ' '));
            echo $this->Form->input('read_flag');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
