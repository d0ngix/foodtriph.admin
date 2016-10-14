<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $transactionItem->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $transactionItem->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Transaction Items'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transactionItems form large-9 medium-8 columns content">
    <?= $this->Form->create($transactionItem) ?>
    <fieldset>
        <legend><?= __('Edit Transaction Item') ?></legend>
        <?php
            echo $this->Form->input('ref');
            echo $this->Form->input('transaction_id', ['options' => $transactions, 'empty' => true]);
            echo $this->Form->input('menu_id', ['options' => $menus, 'empty' => true]);
            echo $this->Form->input('menu_name');
            echo $this->Form->input('qty');
            echo $this->Form->input('price');
            echo $this->Form->input('discount');
            echo $this->Form->input('total_amount');
            echo $this->Form->input('add_ons');
            echo $this->Form->input('remarks');
            echo $this->Form->input('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
