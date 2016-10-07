<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $vendorAddress->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $vendorAddress->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Vendor Addresses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendorAddresses form large-9 medium-8 columns content">
    <?= $this->Form->create($vendorAddress) ?>
    <fieldset>
        <legend><?= __('Edit Vendor Address') ?></legend>
        <?php
            echo $this->Form->input('vendor_id', ['options' => $vendors]);
            echo $this->Form->input('address_name');
            echo $this->Form->input('latitude');
            echo $this->Form->input('longitude');
            echo $this->Form->input('address1');
            echo $this->Form->input('address2');
            echo $this->Form->input('street');
            echo $this->Form->input('city');
            echo $this->Form->input('state');
            echo $this->Form->input('country');
            echo $this->Form->input('post_code');
            echo $this->Form->input('landmarks');
            echo $this->Form->input('operating_hours');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>