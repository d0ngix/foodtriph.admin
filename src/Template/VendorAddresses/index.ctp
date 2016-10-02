<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vendor Address'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendorAddresses index large-9 medium-8 columns content">
    <h3><?= __('Vendor Addresses') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vendor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('latitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('longitude') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address1') ?></th>
                <th scope="col"><?= $this->Paginator->sort('address2') ?></th>
                <th scope="col"><?= $this->Paginator->sort('street') ?></th>
                <th scope="col"><?= $this->Paginator->sort('city') ?></th>
                <th scope="col"><?= $this->Paginator->sort('state') ?></th>
                <th scope="col"><?= $this->Paginator->sort('country') ?></th>
                <th scope="col"><?= $this->Paginator->sort('post_code') ?></th>
                <th scope="col"><?= $this->Paginator->sort('landmarks') ?></th>
                <th scope="col"><?= $this->Paginator->sort('operating_hours') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendorAddresses as $vendorAddress): ?>
            <tr>
                <td><?= $this->Number->format($vendorAddress->id) ?></td>
                <td><?= $vendorAddress->has('vendor') ? $this->Html->link($vendorAddress->vendor->name, ['controller' => 'Vendors', 'action' => 'view', $vendorAddress->vendor->id]) : '' ?></td>
                <td><?= h($vendorAddress->address_name) ?></td>
                <td><?= $this->Number->format($vendorAddress->latitude) ?></td>
                <td><?= $this->Number->format($vendorAddress->longitude) ?></td>
                <td><?= h($vendorAddress->address1) ?></td>
                <td><?= h($vendorAddress->address2) ?></td>
                <td><?= h($vendorAddress->street) ?></td>
                <td><?= h($vendorAddress->city) ?></td>
                <td><?= h($vendorAddress->state) ?></td>
                <td><?= h($vendorAddress->country) ?></td>
                <td><?= h($vendorAddress->post_code) ?></td>
                <td><?= h($vendorAddress->landmarks) ?></td>
                <td><?= h($vendorAddress->operating_hours) ?></td>
                <td><?= h($vendorAddress->created) ?></td>
                <td><?= h($vendorAddress->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vendorAddress->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vendorAddress->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vendorAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendorAddress->id)]) ?>
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
