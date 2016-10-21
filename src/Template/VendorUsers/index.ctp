<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vendor User'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendorUsers index large-9 medium-8 columns content">
    <h3><?= __('Vendor Users') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('uuid') ?></th>
                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
                <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hash') ?></th>
                <th scope="col"><?= $this->Paginator->sort('first_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('last_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('birth_date') ?></th>
                <th scope="col"><?= $this->Paginator->sort('mobile') ?></th>
                <th scope="col"><?= $this->Paginator->sort('photo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('verification_details') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($vendorUsers as $vendorUser): ?>
            <tr>
                <td><?= $this->Number->format($vendorUser->id) ?></td>
                <td><?= h($vendorUser->uuid) ?></td>
                <td><?= h($vendorUser->email) ?></td>
                <td><?= h($vendorUser->password) ?></td>
                <td><?= h($vendorUser->hash) ?></td>
                <td><?= h($vendorUser->first_name) ?></td>
                <td><?= h($vendorUser->last_name) ?></td>
                <td><?= h($vendorUser->birth_date) ?></td>
                <td><?= h($vendorUser->mobile) ?></td>
                <td><?= h($vendorUser->photo) ?></td>
                <td><?= h($vendorUser->verification_details) ?></td>
                <td><?= h($vendorUser->created) ?></td>
                <td><?= h($vendorUser->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $vendorUser->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $vendorUser->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vendorUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendorUser->id)]) ?>
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
