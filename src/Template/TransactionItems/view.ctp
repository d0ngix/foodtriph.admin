<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Transaction Item'), ['action' => 'edit', $transactionItem->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transaction Item'), ['action' => 'delete', $transactionItem->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionItem->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Transaction Items'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction Item'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="transactionItems view large-9 medium-8 columns content">
    <h3><?= h($transactionItem->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ref') ?></th>
            <td><?= h($transactionItem->ref) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Transaction') ?></th>
            <td><?= $transactionItem->has('transaction') ? $this->Html->link($transactionItem->transaction->id, ['controller' => 'Transactions', 'action' => 'view', $transactionItem->transaction->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Menu') ?></th>
            <td><?= $transactionItem->has('menu') ? $this->Html->link($transactionItem->menu->name, ['controller' => 'Menus', 'action' => 'view', $transactionItem->menu->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Menu Name') ?></th>
            <td><?= h($transactionItem->menu_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Remarks') ?></th>
            <td><?= h($transactionItem->remarks) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($transactionItem->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($transactionItem->modified) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($transactionItem->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Qty') ?></th>
            <td><?= $this->Number->format($transactionItem->qty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($transactionItem->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= $this->Number->format($transactionItem->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Amount') ?></th>
            <td><?= $this->Number->format($transactionItem->total_amount) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Add Ons') ?></h4>
        <?= $this->Text->autoParagraph(h($transactionItem->add_ons)); ?>
    </div>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($transactionItem->status)); ?>
    </div>
</div>
