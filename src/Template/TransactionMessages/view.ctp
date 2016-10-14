<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Transaction Message'), ['action' => 'edit', $transactionMessage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transaction Message'), ['action' => 'delete', $transactionMessage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionMessage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Transaction Messages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction Message'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="transactionMessages view large-9 medium-8 columns content">
    <h3><?= h($transactionMessage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Transaction') ?></th>
            <td><?= $transactionMessage->has('transaction') ? $this->Html->link($transactionMessage->transaction->id, ['controller' => 'Transactions', 'action' => 'view', $transactionMessage->transaction->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vendor') ?></th>
            <td><?= $transactionMessage->has('vendor') ? $this->Html->link($transactionMessage->vendor->name, ['controller' => 'Vendors', 'action' => 'view', $transactionMessage->vendor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $transactionMessage->has('user') ? $this->Html->link($transactionMessage->user->id, ['controller' => 'Users', 'action' => 'view', $transactionMessage->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Messages') ?></th>
            <td><?= h($transactionMessage->messages) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($transactionMessage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($transactionMessage->created) ?></td>
        </tr>
    </table>
</div>
