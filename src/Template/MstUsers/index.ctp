<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mst User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mstUsers index large-9 medium-8 columns content">
    <h3><?= __('Mst Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mstUsers as $mstUser): ?>
            <tr>
                <td><?= $this->Number->format($mstUser->id) ?></td>
                <td><?= h($mstUser->user_name) ?></td>
                <td><?= h($mstUser->created) ?></td>
                <td><?= h($mstUser->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mstUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mstUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mstUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mstUser->id)]) ?>
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
