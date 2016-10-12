<?php 
$this->assign('title', h($vendorAddress->vendor->name));
$this->assign('sub_title', h($vendorAddress->vendor->uuid));
?>
<div class="row">
	<section class="content">
		<div class="row">
		
        	<div class="col-md-3">
				<?= $this->element('vendor_address_profile');?>
	        </div>
        
			<div class="col-md-9">
			</div>
			
		</div>
	</section>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vendor Address'), ['action' => 'edit', $vendorAddress->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vendor Address'), ['action' => 'delete', $vendorAddress->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendorAddress->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vendor Addresses'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendor Address'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="vendorAddresses view large-9 medium-8 columns content">
    <h3><?= h($vendorAddress->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Vendor') ?></th>
            <td><?= $vendorAddress->has('vendor') ? $this->Html->link($vendorAddress->vendor->name, ['controller' => 'Vendors', 'action' => 'view', $vendorAddress->vendor->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address Name') ?></th>
            <td><?= h($vendorAddress->address_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address1') ?></th>
            <td><?= h($vendorAddress->address1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address2') ?></th>
            <td><?= h($vendorAddress->address2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Street') ?></th>
            <td><?= h($vendorAddress->street) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('City') ?></th>
            <td><?= h($vendorAddress->city) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('State') ?></th>
            <td><?= h($vendorAddress->state) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($vendorAddress->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Post Code') ?></th>
            <td><?= h($vendorAddress->post_code) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Landmarks') ?></th>
            <td><?= h($vendorAddress->landmarks) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Operating Hours') ?></th>
            <td><?= h($vendorAddress->operating_hours) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($vendorAddress->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Latitude') ?></th>
            <td><?= $this->Number->format($vendorAddress->latitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Longitude') ?></th>
            <td><?= $this->Number->format($vendorAddress->longitude) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($vendorAddress->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($vendorAddress->modified) ?></td>
        </tr>
    </table>
</div>
