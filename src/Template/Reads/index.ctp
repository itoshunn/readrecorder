<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Read'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reads index large-9 medium-8 columns content">
    <h3><?= __('Reads') ?></h3>
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
            <?php foreach ($reads as $read): ?>
            <tr>
                <td><?= $this->Number->format($read->id) ?></td>
                <td><?= $read->has('book') ? $this->Html->link($read->book->title, ['controller' => 'Books', 'action' => 'view', $read->book->id]) : '' ?></td>
                <td><?= $read->has('user') ? $this->Html->link($read->user->id, ['controller' => 'Users', 'action' => 'view', $read->user->id]) : '' ?></td>
                <td><?= h($read->start_date) ?></td>
                <td><?= h($read->finish_date) ?></td>
                <td><?= h($read->read_flag) ?></td>
                <td><?= h($read->created) ?></td>
                <td><?= h($read->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $read->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $read->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $read->id], ['confirm' => __('Are you sure you want to delete # {0}?', $read->id)]) ?>
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
