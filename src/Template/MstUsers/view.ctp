<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Mst User'), ['action' => 'edit', $mstUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Mst User'), ['action' => 'delete', $mstUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mstUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Mst Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Mst User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="mstUsers view large-9 medium-8 columns content">
    <h3><?= h($mstUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User Name') ?></th>
            <td><?= h($mstUser->user_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($mstUser->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mstUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sort Order') ?></th>
            <td><?= $this->Number->format($mstUser->sort_order) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created User') ?></th>
            <td><?= $this->Number->format($mstUser->created_user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified User') ?></th>
            <td><?= $this->Number->format($mstUser->modified_user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($mstUser->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($mstUser->modified) ?></td>
        </tr>
    </table>
</div>
