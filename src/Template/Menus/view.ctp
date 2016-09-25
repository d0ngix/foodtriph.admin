<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Menu'), ['action' => 'edit', $menu->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Menu'), ['action' => 'delete', $menu->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menu->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Menus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Menu Images'), ['controller' => 'MenuImages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu Image'), ['controller' => 'MenuImages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Menu Ratings'), ['controller' => 'MenuRatings', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu Rating'), ['controller' => 'MenuRatings', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transaction Items'), ['controller' => 'TransactionItems', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction Item'), ['controller' => 'TransactionItems', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transaction Promos'), ['controller' => 'TransactionPromos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction Promo'), ['controller' => 'TransactionPromos', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="menus view large-9 medium-8 columns content">
    <h3><?= h($menu->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Ref') ?></th>
            <td><?= h($menu->ref) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Vendor') ?></th>
            <td><?= $menu->has('vendor') ? $this->Html->link($menu->vendor->name, ['controller' => 'Vendors', 'action' => 'view', $menu->vendor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($menu->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description Long') ?></th>
            <td><?= h($menu->description_long) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description Short') ?></th>
            <td><?= h($menu->description_short) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($menu->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Price') ?></th>
            <td><?= $this->Number->format($menu->price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Discount') ?></th>
            <td><?= $this->Number->format($menu->discount) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pax Min') ?></th>
            <td><?= $this->Number->format($menu->pax_min) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Pax Max') ?></th>
            <td><?= $this->Number->format($menu->pax_max) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($menu->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($menu->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Add Ons') ?></h4>
        <?= $this->Text->autoParagraph(h($menu->add_ons)); ?>
    </div>
    <div class="row">
        <h4><?= __('Active') ?></h4>
        <?= $this->Text->autoParagraph(h($menu->active)); ?>
    </div>
    <div class="row">
        <h4><?= __('Deleted') ?></h4>
        <?= $this->Text->autoParagraph(h($menu->deleted)); ?>
    </div>
    <div class="row">
        <h4><?= __('Likes') ?></h4>
        <?= $this->Text->autoParagraph(h($menu->likes)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Menu Images') ?></h4>
        <?php if (!empty($menu->menu_images)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Menu Id') ?></th>
                <th scope="col"><?= __('Path') ?></th>
                <th scope="col"><?= __('Is Primary') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Extension') ?></th>
                <th scope="col"><?= __('Mime') ?></th>
                <th scope="col"><?= __('Size') ?></th>
                <th scope="col"><?= __('Md5') ?></th>
                <th scope="col"><?= __('Dimensions') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($menu->menu_images as $menuImages): ?>
            <tr>
                <td><?= h($menuImages->id) ?></td>
                <td><?= h($menuImages->menu_id) ?></td>
                <td><?= h($menuImages->path) ?></td>
                <td><?= h($menuImages->is_primary) ?></td>
                <td><?= h($menuImages->name) ?></td>
                <td><?= h($menuImages->extension) ?></td>
                <td><?= h($menuImages->mime) ?></td>
                <td><?= h($menuImages->size) ?></td>
                <td><?= h($menuImages->md5) ?></td>
                <td><?= h($menuImages->dimensions) ?></td>
                <td><?= h($menuImages->created) ?></td>
                <td><?= h($menuImages->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MenuImages', 'action' => 'view', $menuImages->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MenuImages', 'action' => 'edit', $menuImages->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MenuImages', 'action' => 'delete', $menuImages->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menuImages->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Menu Ratings') ?></h4>
        <?php if (!empty($menu->menu_ratings)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Menu Id') ?></th>
                <th scope="col"><?= __('One') ?></th>
                <th scope="col"><?= __('Two') ?></th>
                <th scope="col"><?= __('Three') ?></th>
                <th scope="col"><?= __('Four') ?></th>
                <th scope="col"><?= __('Five') ?></th>
                <th scope="col"><?= __('Comment') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($menu->menu_ratings as $menuRatings): ?>
            <tr>
                <td><?= h($menuRatings->id) ?></td>
                <td><?= h($menuRatings->user_id) ?></td>
                <td><?= h($menuRatings->menu_id) ?></td>
                <td><?= h($menuRatings->one) ?></td>
                <td><?= h($menuRatings->two) ?></td>
                <td><?= h($menuRatings->three) ?></td>
                <td><?= h($menuRatings->four) ?></td>
                <td><?= h($menuRatings->five) ?></td>
                <td><?= h($menuRatings->comment) ?></td>
                <td><?= h($menuRatings->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MenuRatings', 'action' => 'view', $menuRatings->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MenuRatings', 'action' => 'edit', $menuRatings->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MenuRatings', 'action' => 'delete', $menuRatings->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menuRatings->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Transaction Items') ?></h4>
        <?php if (!empty($menu->transaction_items)): ?>
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
            <?php foreach ($menu->transaction_items as $transactionItems): ?>
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
        <h4><?= __('Related Transaction Promos') ?></h4>
        <?php if (!empty($menu->transaction_promos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Vendor Id') ?></th>
                <th scope="col"><?= __('Menu Id') ?></th>
                <th scope="col"><?= __('Code') ?></th>
                <th scope="col"><?= __('Discount') ?></th>
                <th scope="col"><?= __('Date Expire') ?></th>
                <th scope="col"><?= __('Is Active') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Created By') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($menu->transaction_promos as $transactionPromos): ?>
            <tr>
                <td><?= h($transactionPromos->id) ?></td>
                <td><?= h($transactionPromos->vendor_id) ?></td>
                <td><?= h($transactionPromos->menu_id) ?></td>
                <td><?= h($transactionPromos->code) ?></td>
                <td><?= h($transactionPromos->discount) ?></td>
                <td><?= h($transactionPromos->date_expire) ?></td>
                <td><?= h($transactionPromos->is_active) ?></td>
                <td><?= h($transactionPromos->created) ?></td>
                <td><?= h($transactionPromos->created_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'TransactionPromos', 'action' => 'view', $transactionPromos->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'TransactionPromos', 'action' => 'edit', $transactionPromos->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'TransactionPromos', 'action' => 'delete', $transactionPromos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactionPromos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
