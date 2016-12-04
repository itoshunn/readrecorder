<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('メニュー') ?></li>
        <li><?= $this->Html->link(__('記録追加'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('記録一覧'), ['controller' => 'ReadLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('書籍一覧'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('書籍登録'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('ユーザー一覧'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('ユーザー追加'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="readLogs view large-9 medium-8 columns content">
    <h3><?= h($readLog->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Book') ?></th>
            <td><?= $readLog->has('book') ? $this->Html->link($readLog->book->title, ['controller' => 'Books', 'action' => 'view', $readLog->book->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $readLog->has('user') ? $this->Html->link($readLog->user->id, ['controller' => 'Users', 'action' => 'view', $readLog->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($readLog->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($readLog->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Finish Date') ?></th>
            <td><?= h($readLog->finish_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($readLog->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($readLog->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Read Flag') ?></th>
            <td><?= $readLog->read_flag ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
