<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('メニュー') ?></li>
        <li><?= $this->Html->link(__('記録一覧'), ['controller' => 'ReadLogs', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('書籍一覧'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('書籍登録'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('ユーザー一覧'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('ユーザー追加'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="readLogs index large-9 medium-8 columns content">
    <h3><?= __('Read Logs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('book_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('start_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('finish_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('read_flag') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($readLogs as $readLog): ?>
            <tr>
                <td><?= $this->Number->format($readLog->id) ?></td>
                <td><?= $readLog->has('book') ? $this->Html->link($readLog->book->title, ['controller' => 'Books', 'action' => 'view', $readLog->book->id]) : '' ?></td>
                <td><?= $readLog->has('user') ? $this->Html->link($readLog->user->id, ['controller' => 'Users', 'action' => 'view', $readLog->user->id]) : '' ?></td>
                <td><?= h($readLog->start_date) ?></td>
                <td><?= h($readLog->finish_date) ?></td>
                <td><?= h($readLog->read_flag) ?></td>
                <td><?= h($readLog->created) ?></td>
                <td><?= h($readLog->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $readLog->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $readLog->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $readLog->id], ['confirm' => __('Are you sure you want to delete # {0}?', $readLog->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
