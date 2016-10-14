<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Transaction'), ['action' => 'edit', $transaction->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Transaction'), ['action' => 'delete', $transaction->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transaction->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Addresses'), ['controller' => 'Addresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Address'), ['controller' => 'Addresses', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transaction Items'), ['controller' => 'TransactionItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction Item'), ['controller' => 'TransactionItems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transaction Messages'), ['controller' => 'TransactionMessages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction Message'), ['controller' => 'TransactionMessages', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="transactions view large-9 medium-8 columns content">
    <h3><?= h($transaction->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uuid') ?></th>
            <td><?= h($transaction->uuid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vendor') ?></th>
            <td><?= $transaction->has('vendor') ? $this->Html->link($transaction->vendor->name, ['controller' => 'Vendors', 'action' => 'view', $transaction->vendor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $transaction->has('user') ? $this->Html->link($transaction->user->id, ['controller' => 'Users', 'action' => 'view', $transaction->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Promo Code') ?></th>
            <td><?= h($transaction->promo_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= $transaction->has('address') ? $this->Html->link($transaction->address->id, ['controller' => 'Addresses', 'action' => 'view', $transaction->address->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Remarks') ?></th>
            <td><?= h($transaction->remarks) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Payment Ref') ?></th>
            <td><?= h($transaction->payment_ref) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($transaction->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Sub Total') ?></th>
            <td><?= $this->Number->format($transaction->sub_total) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= $this->Number->format($transaction->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Cost') ?></th>
            <td><?= $this->Number->format($transaction->delivery_cost) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Total Amount') ?></th>
            <td><?= $this->Number->format($transaction->total_amount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Delivery Man Id') ?></th>
            <td><?= $this->Number->format($transaction->delivery_man_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($transaction->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($transaction->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Payment Method') ?></h4>
        <?= $this->Text->autoParagraph(h($transaction->payment_method)); ?>
    </div>
    <div class="row">
        <h4><?= __('Status') ?></h4>
        <?= $this->Text->autoParagraph(h($transaction->status)); ?>
    </div>
    <div class="row">
        <h4><?= __('Archived') ?></h4>
        <?= $this->Text->autoParagraph(h($transaction->archived)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Transaction Items') ?></h4>
        <?php if (!empty($transaction->transaction_items)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Ref') ?></th>
                <th scope="col"><?= __('Transaction Id') ?></th>
                <th scope="col"><?= __('Menu Id') ?></th>
                <th scope="col"><?= __('Menu Name') ?></th>
                <th scope="col"><?= __('Qty') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Discount') ?></th>
                <th scope="col"><?= __('Total Amount') ?></th>
                <th scope="col"><?= __('Add Ons') ?></th>
                <th scope="col"><?= __('Remarks') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($transaction->transaction_items as $transactionItems): ?>
            <tr>
                <td><?= h($transactionItems->id) ?></td>
                <td><?= h($transactionItems->ref) ?></td>
                <td><?= h($transactionItems->transaction_id) ?></td>
                <td><?= h($transactionItems->menu_id) ?></td>
                <td><?= h($transactionItems->menu_name) ?></td>
                <td><?= h($transactionItems->qty) ?></td>
                <td><?= h($transactionItems->price) ?></td>
                <td><?= h($transactionItems->discount) ?></td>
                <td><?= h($transactionItems->total_amount) ?></td>
                <td><?= h($transactionItems->add_ons) ?></td>
                <td><?= h($transactionItems->remarks) ?></td>
                <td><?= h($transactionItems->status) ?></td>
                <td><?= h($transactionItems->created) ?></td>
                <td><?= h($transactionItems->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TransactionItems', 'action' => 'view', $transactionItems->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TransactionItems', 'action' => 'edit', $transactionItems->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TransactionItems', 'action' => 'delete', $transactionItems->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionItems->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Transaction Messages') ?></h4>
        <?php if (!empty($transaction->transaction_messages)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Transaction Id') ?></th>
                <th scope="col"><?= __('Vendor Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Messages') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($transaction->transaction_messages as $transactionMessages): ?>
            <tr>
                <td><?= h($transactionMessages->id) ?></td>
                <td><?= h($transactionMessages->transaction_id) ?></td>
                <td><?= h($transactionMessages->vendor_id) ?></td>
                <td><?= h($transactionMessages->user_id) ?></td>
                <td><?= h($transactionMessages->messages) ?></td>
                <td><?= h($transactionMessages->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TransactionMessages', 'action' => 'view', $transactionMessages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TransactionMessages', 'action' => 'edit', $transactionMessages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TransactionMessages', 'action' => 'delete', $transactionMessages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionMessages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
