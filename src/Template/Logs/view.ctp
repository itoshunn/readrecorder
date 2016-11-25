<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Log'), ['action' => 'edit', $log->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Log'), ['action' => 'delete', $log->id], ['confirm' => __('Are you sure you want to delete # {0}?', $log->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Logs'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Log'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="logs view large-9 medium-8 columns content">
    <h3>read log:<?= h($log->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($log->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Book') ?></th>
            <td><?= $log->has('book') ? $this->Html->link($log->book->title, ['controller' => 'Books', 'action' => 'view', $log->book->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $log->has('user') ? $this->Html->link($log->user->user_name, ['controller' => 'Users', 'action' => 'view', $log->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Start Date') ?></th>
            <td><?= h($log->start_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Finish Date') ?></th>
            <td><?= h($log->finish_date) ?></td>
        </tr>
    </table>
</div>
