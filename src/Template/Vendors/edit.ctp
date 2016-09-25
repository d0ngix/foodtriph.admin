<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vendor->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vendor->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vendors'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Menu Add Ons'), ['controller' => 'MenuAddOns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu Add On'), ['controller' => 'MenuAddOns', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Menu Categories'), ['controller' => 'MenuCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu Category'), ['controller' => 'MenuCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transaction Messages'), ['controller' => 'TransactionMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction Message'), ['controller' => 'TransactionMessages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transaction Promos'), ['controller' => 'TransactionPromos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction Promo'), ['controller' => 'TransactionPromos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vendor Addresses'), ['controller' => 'VendorAddresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vendor Address'), ['controller' => 'VendorAddresses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendors form large-9 medium-8 columns content">
    <?= $this->Form->create($vendor) ?>
    <fieldset>
        <legend><?= __('Edit Vendor') ?></legend>
        <?php
            echo $this->Form->input('uuid');
            echo $this->Form->input('name');
            echo $this->Form->input('email');
            echo $this->Form->input('contact_num');
            echo $this->Form->input('photo');
            echo $this->Form->input('type');
            echo $this->Form->input('cuisine');
            echo $this->Form->input('description');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
