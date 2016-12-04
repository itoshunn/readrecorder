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
<div class="books view large-9 medium-8 columns content">
    <h3><?= h($book->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($book->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Author') ?></th>
            <td><?= h($book->author) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $book->has('user') ? $this->Html->link($book->user->id, ['controller' => 'Users', 'action' => 'view', $book->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($book->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($book->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($book->modified) ?></td>
        </tr>
    </table>
</div>
