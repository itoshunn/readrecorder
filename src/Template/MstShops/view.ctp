<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mst Shop'), ['action' => 'edit', $mstShop->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mst Shop'), ['action' => 'delete', $mstShop->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mstShop->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mst Shops'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mst Shop'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mstShops view large-9 medium-8 columns content">
    <h3><?= h($mstShop->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Shop Name') ?></th>
            <td><?= h($mstShop->shop_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Store Name') ?></th>
            <td><?= h($mstShop->store_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mstShop->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sort Order') ?></th>
            <td><?= $this->Number->format($mstShop->sort_order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created User') ?></th>
            <td><?= $this->Number->format($mstShop->created_user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified User') ?></th>
            <td><?= $this->Number->format($mstShop->modified_user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mstShop->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mstShop->modified) ?></td>
        </tr>
    </table>
</div>
