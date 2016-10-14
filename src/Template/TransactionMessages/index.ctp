<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Transaction Message'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="transactionMessages index large-9 medium-8 columns content">
    <h3><?= __('Transaction Messages') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('transaction_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vendor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('messages') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactionMessages as $transactionMessage): ?>
            <tr>
                <td><?= $this->Number->format($transactionMessage->id) ?></td>
                <td><?= $transactionMessage->has('transaction') ? $this->Html->link($transactionMessage->transaction->id, ['controller' => 'Transactions', 'action' => 'view', $transactionMessage->transaction->id]) : '' ?></td>
                <td><?= $transactionMessage->has('vendor') ? $this->Html->link($transactionMessage->vendor->name, ['controller' => 'Vendors', 'action' => 'view', $transactionMessage->vendor->id]) : '' ?></td>
                <td><?= $transactionMessage->has('user') ? $this->Html->link($transactionMessage->user->id, ['controller' => 'Users', 'action' => 'view', $transactionMessage->user->id]) : '' ?></td>
                <td><?= h($transactionMessage->messages) ?></td>
                <td><?= h($transactionMessage->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $transactionMessage->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transactionMessage->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transactionMessage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionMessage->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
