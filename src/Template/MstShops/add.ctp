<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Mst Shops'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mstShops form large-9 medium-8 columns content">
    <?= $this->Form->create($mstShop) ?>
    <fieldset>
        <legend><?= __('Add Mst Shop') ?></legend>
        <?php
            echo $this->Form->input('shop_name');
            echo $this->Form->input('store_name');
            echo $this->Form->input('sort_order');
            echo $this->Form->input('created_user');
            echo $this->Form->input('modified_user');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
