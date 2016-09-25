<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $menu->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $menu->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Menus'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Menu Images'), ['controller' => 'MenuImages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu Image'), ['controller' => 'MenuImages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Menu Ratings'), ['controller' => 'MenuRatings', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu Rating'), ['controller' => 'MenuRatings', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transaction Items'), ['controller' => 'TransactionItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction Item'), ['controller' => 'TransactionItems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transaction Promos'), ['controller' => 'TransactionPromos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction Promo'), ['controller' => 'TransactionPromos', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="menus form large-9 medium-8 columns content">
    <?= $this->Form->create($menu) ?>
    <fieldset>
        <legend><?= __('Edit Menu') ?></legend>
        <?php
            echo $this->Form->input('ref');
            echo $this->Form->input('vendor_id', ['options' => $vendors, 'empty' => true]);
            echo $this->Form->input('name');
            echo $this->Form->input('description_long');
            echo $this->Form->input('description_short');
            echo $this->Form->input('price');
            echo $this->Form->input('discount');
            echo $this->Form->input('add_ons');
            echo $this->Form->input('pax_min');
            echo $this->Form->input('pax_max');
            echo $this->Form->input('active');
            echo $this->Form->input('deleted');
            echo $this->Form->input('likes');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
