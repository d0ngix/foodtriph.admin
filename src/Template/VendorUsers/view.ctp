<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vendor User'), ['action' => 'edit', $vendorUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vendor User'), ['action' => 'delete', $vendorUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendorUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vendor Users'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendor User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vendorUsers view large-9 medium-8 columns content">
    <h3><?= h($vendorUser->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Uuid') ?></th>
            <td><?= h($vendorUser->uuid) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($vendorUser->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($vendorUser->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Hash') ?></th>
            <td><?= h($vendorUser->hash) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('First Name') ?></th>
            <td><?= h($vendorUser->first_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Last Name') ?></th>
            <td><?= h($vendorUser->last_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Mobile') ?></th>
            <td><?= h($vendorUser->mobile) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Photo') ?></th>
            <td><?= h($vendorUser->photo) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Verification Details') ?></th>
            <td><?= h($vendorUser->verification_details) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vendorUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Birth Date') ?></th>
            <td><?= h($vendorUser->birth_date) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($vendorUser->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($vendorUser->modified) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Gender') ?></h4>
        <?= $this->Text->autoParagraph(h($vendorUser->gender)); ?>
    </div>
    <div class="row">
        <h4><?= __('Social Media') ?></h4>
        <?= $this->Text->autoParagraph(h($vendorUser->social_media)); ?>
    </div>
    <div class="row">
        <h4><?= __('Device Details') ?></h4>
        <?= $this->Text->autoParagraph(h($vendorUser->device_details)); ?>
    </div>
    <div class="row">
        <h4><?= __('Verified') ?></h4>
        <?= $this->Text->autoParagraph(h($vendorUser->verified)); ?>
    </div>
    <div class="row">
        <h4><?= __('Active') ?></h4>
        <?= $this->Text->autoParagraph(h($vendorUser->active)); ?>
    </div>
</div>
