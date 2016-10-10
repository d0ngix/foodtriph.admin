<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Menu Add On'), ['action' => 'edit', $menuAddOn->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Menu Add On'), ['action' => 'delete', $menuAddOn->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menuAddOn->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Menu Add Ons'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu Add On'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Parent Menu Add Ons'), ['controller' => 'MenuAddOns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Parent Menu Add On'), ['controller' => 'MenuAddOns', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="menuAddOns view large-9 medium-8 columns content">
    <h3><?= h($menuAddOn->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Vendor') ?></th>
            <td><?= $menuAddOn->has('vendor') ? $this->Html->link($menuAddOn->vendor->name, ['controller' => 'Vendors', 'action' => 'view', $menuAddOn->vendor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Parent Menu Add On') ?></th>
            <td><?= $menuAddOn->has('parent_menu_add_on') ? $this->Html->link($menuAddOn->parent_menu_add_on->id, ['controller' => 'MenuAddOns', 'action' => 'view', $menuAddOn->parent_menu_add_on->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Add On Name') ?></th>
            <td><?= h($menuAddOn->add_on_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($menuAddOn->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($menuAddOn->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($menuAddOn->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created By') ?></th>
            <td><?= $this->Number->format($menuAddOn->created_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified By') ?></th>
            <td><?= $this->Number->format($menuAddOn->modified_by) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($menuAddOn->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($menuAddOn->modified) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Menu Add Ons') ?></h4>
        <?php if (!empty($menuAddOn->child_menu_add_ons)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Vendor Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Add On Name') ?></th>
                <th scope="col"><?= __('Price') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col"><?= __('Modified By') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($menuAddOn->child_menu_add_ons as $childMenuAddOns): ?>
            <tr>
                <td><?= h($childMenuAddOns->id) ?></td>
                <td><?= h($childMenuAddOns->vendor_id) ?></td>
                <td><?= h($childMenuAddOns->parent_id) ?></td>
                <td><?= h($childMenuAddOns->add_on_name) ?></td>
                <td><?= h($childMenuAddOns->price) ?></td>
                <td><?= h($childMenuAddOns->description) ?></td>
                <td><?= h($childMenuAddOns->created) ?></td>
                <td><?= h($childMenuAddOns->created_by) ?></td>
                <td><?= h($childMenuAddOns->modified) ?></td>
                <td><?= h($childMenuAddOns->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MenuAddOns', 'action' => 'view', $childMenuAddOns->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MenuAddOns', 'action' => 'edit', $childMenuAddOns->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MenuAddOns', 'action' => 'delete', $childMenuAddOns->id], ['confirm' => __('Are you sure you want to delete # {0}?', $childMenuAddOns->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
