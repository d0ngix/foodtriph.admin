<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vendor Users'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="vendorUsers form large-9 medium-8 columns content">
    <?= $this->Form->create($vendorUser) ?>
    <fieldset>
        <legend><?= __('Add Vendor User') ?></legend>
        <?php
            echo $this->Form->input('uuid');
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('hash');
            echo $this->Form->input('first_name');
            echo $this->Form->input('last_name');
            echo $this->Form->input('gender');
            echo $this->Form->input('birth_date', ['empty' => true]);
            echo $this->Form->input('mobile');
            echo $this->Form->input('photo');
            echo $this->Form->input('social_media');
            echo $this->Form->input('device_details');
            echo $this->Form->input('verified');
            echo $this->Form->input('active');
            echo $this->Form->input('verification_details');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
