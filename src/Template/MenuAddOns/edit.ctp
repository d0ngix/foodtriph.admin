<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $menuAddOn->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $menuAddOn->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Menu Add Ons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Parent Menu Add Ons'), ['controller' => 'MenuAddOns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Menu Add On'), ['controller' => 'MenuAddOns', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="menuAddOns form large-9 medium-8 columns content">
    <?= $this->Form->create($menuAddOn) ?>
    <fieldset>
        <legend><?= __('Edit Menu Add On') ?></legend>
        <?php
            echo $this->Form->input('vendor_id', ['options' => $vendors, 'empty' => true]);
            echo $this->Form->input('parent_id', ['options' => $parentMenuAddOns, 'empty' => true]);
            echo $this->Form->input('add_on_name');
            echo $this->Form->input('price');
            echo $this->Form->input('description');
            echo $this->Form->input('created_by');
            echo $this->Form->input('modified_by');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
