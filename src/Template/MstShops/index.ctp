<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Mst Shop'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="mstShops index large-9 medium-8 columns content">
    <h3><?= __('Mst Shops') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('shop_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('store_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sort_order') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_user') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_user') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mstShops as $mstShop): ?>
            <tr>
                <td><?= $this->Number->format($mstShop->id) ?></td>
                <td><?= h($mstShop->shop_name) ?></td>
                <td><?= h($mstShop->store_name) ?></td>
                <td><?= $this->Number->format($mstShop->sort_order) ?></td>
                <td><?= h($mstShop->created) ?></td>
                <td><?= $this->Number->format($mstShop->created_user) ?></td>
                <td><?= h($mstShop->modified) ?></td>
                <td><?= $this->Number->format($mstShop->modified_user) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $mstShop->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $mstShop->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $mstShop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mstShop->id)]) ?>
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
