<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Read'), ['action' => 'edit', $read->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Read'), ['action' => 'delete', $read->id], ['confirm' => __('Are you sure you want to delete # {0}?', $read->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Reads'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Read'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="reads view large-9 medium-8 columns content">
    <h3><?= h($read->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Book') ?></th>
            <td><?= $read->has('book') ? $this->Html->link($read->book->title, ['controller' => 'Books', 'action' => 'view', $read->book->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $read->has('user') ? $this->Html->link($read->user->id, ['controller' => 'Users', 'action' => 'view', $read->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($read->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($read->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Finish Date') ?></th>
            <td><?= h($read->finish_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($read->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($read->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Read Flag') ?></th>
            <td><?= $read->read_flag ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
</div>
