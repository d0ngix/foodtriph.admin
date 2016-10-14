<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $transaction->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transaction Items'), ['controller' => 'TransactionItems', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction Item'), ['controller' => 'TransactionItems', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transaction Messages'), ['controller' => 'TransactionMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction Message'), ['controller' => 'TransactionMessages', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transactions form large-9 medium-8 columns content">
    <?= $this->Form->create($transaction) ?>
    <fieldset>
        <legend><?= __('Edit Transaction') ?></legend>
        <?php
            echo $this->Form->input('uuid');
            echo $this->Form->input('vendor_id', ['options' => $vendors, 'empty' => true]);
            echo $this->Form->input('user_id', ['options' => $users, 'empty' => true]);
            echo $this->Form->input('promo_code');
            echo $this->Form->input('sub_total');
            echo $this->Form->input('discount');
            echo $this->Form->input('delivery_cost');
            echo $this->Form->input('total_amount');
            echo $this->Form->input('address_id', ['options' => $addresses, 'empty' => true]);
            echo $this->Form->input('delivery_man_id');
            echo $this->Form->input('remarks');
            echo $this->Form->input('payment_method');
            echo $this->Form->input('payment_ref');
            echo $this->Form->input('status');
            echo $this->Form->input('archived');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
