<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $mstUser->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $mstUser->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Mst Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mstUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($mstUser) ?>
    <fieldset>
        <legend><?= __('Edit Mst User') ?></legend>
        <?php
            echo $this->Form->input('user_name');
            echo $this->Form->input('password');
            echo $this->Form->input('sort_order');
            echo $this->Form->input('created_user');
            echo $this->Form->input('modified_user');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
