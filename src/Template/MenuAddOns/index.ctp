<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Menu Add On'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="menuAddOns index large-9 medium-8 columns content">
    <h3><?= __('Menu Add Ons') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('vendor_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('parent_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('add_on_name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('price') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created_by') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
                <th scope="col"><?= $this->Paginator->sort('modified_by') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($menuAddOns as $menuAddOn): ?>
            <tr>
                <td><?= $this->Number->format($menuAddOn->id) ?></td>
                <td><?= $menuAddOn->has('vendor') ? $this->Html->link($menuAddOn->vendor->name, ['controller' => 'Vendors', 'action' => 'view', $menuAddOn->vendor->id]) : '' ?></td>
                <td><?= $menuAddOn->has('parent_menu_add_on') ? $this->Html->link($menuAddOn->parent_menu_add_on->id, ['controller' => 'MenuAddOns', 'action' => 'view', $menuAddOn->parent_menu_add_on->id]) : '' ?></td>
                <td><?= h($menuAddOn->add_on_name) ?></td>
                <td><?= $this->Number->format($menuAddOn->price) ?></td>
                <td><?= h($menuAddOn->description) ?></td>
                <td><?= h($menuAddOn->created) ?></td>
                <td><?= $this->Number->format($menuAddOn->created_by) ?></td>
                <td><?= h($menuAddOn->modified) ?></td>
                <td><?= $this->Number->format($menuAddOn->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $menuAddOn->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $menuAddOn->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $menuAddOn->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menuAddOn->id)]) ?>
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
