<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['action' => 'add']) ?></li>
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
<div class="transactions index large-9 medium-8 columns content">
    <h3><?= __('Transactions') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uuid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vendor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('promo_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('sub_total') ?></th>
                <th scope="col"><?= $this->Paginator->sort('discount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delivery_cost') ?></th>
                <th scope="col"><?= $this->Paginator->sort('total_amount') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('delivery_man_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('remarks') ?></th>
                <th scope="col"><?= $this->Paginator->sort('payment_ref') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transactions as $transaction): ?>
            <tr>
                <td><?= $this->Number->format($transaction->id) ?></td>
                <td><?= h($transaction->uuid) ?></td>
                <td><?= $transaction->has('vendor') ? $this->Html->link($transaction->vendor->name, ['controller' => 'Vendors', 'action' => 'view', $transaction->vendor->id]) : '' ?></td>
                <td><?= $transaction->has('user') ? $this->Html->link($transaction->user->id, ['controller' => 'Users', 'action' => 'view', $transaction->user->id]) : '' ?></td>
                <td><?= h($transaction->promo_code) ?></td>
                <td><?= $this->Number->format($transaction->sub_total) ?></td>
                <td><?= $this->Number->format($transaction->discount) ?></td>
                <td><?= $this->Number->format($transaction->delivery_cost) ?></td>
                <td><?= $this->Number->format($transaction->total_amount) ?></td>
                <td><?= $transaction->has('address') ? $this->Html->link($transaction->address->id, ['controller' => 'Addresses', 'action' => 'view', $transaction->address->id]) : '' ?></td>
                <td><?= $this->Number->format($transaction->delivery_man_id) ?></td>
                <td><?= h($transaction->remarks) ?></td>
                <td><?= h($transaction->payment_ref) ?></td>
                <td><?= h($transaction->created) ?></td>
                <td><?= h($transaction->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $transaction->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $transaction->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $transaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id)]) ?>
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
