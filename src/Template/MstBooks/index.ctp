<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mst Book'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mstBooks index large-9 medium-8 columns content">
    <h3><?= __('Mst Books') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('title') ?></th>
                <th scope="col"><?= $this->Paginator->sort('auther_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('isbn') ?></th>
                <th scope="col"><?= $this->Paginator->sort('buy_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('buy_user') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sort_order') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_user') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_user') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mstBooks as $mstBook): ?>
            <tr>
                <td><?= $this->Number->format($mstBook->id) ?></td>
                <td><?= h($mstBook->title) ?></td>
                <td><?= h($mstBook->auther_name) ?></td>
                <td><?= h($mstBook->isbn) ?></td>
                <td><?= h($mstBook->buy_date) ?></td>
                <td><?= $this->Number->format($mstBook->buy_user) ?></td>
                <td><?= $this->Number->format($mstBook->sort_order) ?></td>
                <td><?= h($mstBook->created) ?></td>
                <td><?= $this->Number->format($mstBook->created_user) ?></td>
                <td><?= h($mstBook->modified) ?></td>
                <td><?= $this->Number->format($mstBook->modified_user) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mstBook->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mstBook->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mstBook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mstBook->id)]) ?>
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
