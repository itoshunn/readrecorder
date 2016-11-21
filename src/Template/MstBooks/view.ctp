<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mst Book'), ['action' => 'edit', $mstBook->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mst Book'), ['action' => 'delete', $mstBook->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mstBook->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mst Books'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mst Book'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mstBooks view large-9 medium-8 columns content">
    <h3><?= h($mstBook->title) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Title') ?></th>
            <td><?= h($mstBook->title) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Auther Name') ?></th>
            <td><?= h($mstBook->auther_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Isbn') ?></th>
            <td><?= h($mstBook->isbn) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mstBook->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Buy User') ?></th>
            <td><?= $this->Number->format($mstBook->buy_user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sort Order') ?></th>
            <td><?= $this->Number->format($mstBook->sort_order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created User') ?></th>
            <td><?= $this->Number->format($mstBook->created_user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified User') ?></th>
            <td><?= $this->Number->format($mstBook->modified_user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Buy Date') ?></th>
            <td><?= h($mstBook->buy_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mstBook->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mstBook->modified) ?></td>
        </tr>
    </table>
</div>
