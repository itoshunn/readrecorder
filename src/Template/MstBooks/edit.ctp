<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mstBook->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mstBook->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mst Books'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mstBooks form large-9 medium-8 columns content">
    <?= $this->Form->create($mstBook) ?>
    <fieldset>
        <legend><?= __('Edit Mst Book') ?></legend>
        <?php
            echo $this->Form->input('title');
            echo $this->Form->input('auther_name');
            echo $this->Form->input('isbn');
            echo $this->Form->input('buy_date', ['empty' => true]);
            echo $this->Form->input('buy_user');
            echo $this->Form->input('sort_order');
            echo $this->Form->input('created_user');
            echo $this->Form->input('modified_user');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
