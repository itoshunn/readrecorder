<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('メニュー') ?></li>
        <li><?= $this->Html->link(__('記録一覧'), ['controller' => 'ReadLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('記録追加'), ['controller' => 'ReadLogs', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('書籍一覧'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('書籍登録'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('ユーザー一覧'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('ユーザー追加'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="readLogs form large-9 medium-8 columns content">
    <?= $this->Form->create($readLog) ?>
    <fieldset>
        <legend><?= __('読書記録 作成') ?></legend>
        <?php
            echo $this->Form->input('book_id', ['options' => $books]);
//            echo $this->Form->input('book_tltle', ['type' => 'text']);
//            echo $this->Form->input('author', ['type' => 'text']);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('start_date');
            echo $this->Form->input('finish_date', array('selected' => ' ', 'empty' => ' '));
            echo $this->Form->input('read_flag');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
