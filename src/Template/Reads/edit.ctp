<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $read->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $read->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Reads'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Books'), ['controller' => 'Books', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Book'), ['controller' => 'Books', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="reads form large-9 medium-8 columns content">
    <?= $this->Form->create($read) ?>
    <fieldset>
        <legend><?= __('Edit Read') ?></legend>
        <?php
            echo $this->Form->input('book_id', ['options' => $books]);
            echo $this->Form->input('user_id', ['options' => $users]);
            echo $this->Form->input('start_date');
            echo $this->Form->input('finish_date');
            echo $this->Form->input('read_flag');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
