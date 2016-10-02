<?php
$this->assign('title', h($vendor->name));
$this->assign('sub_title', h($vendor->uuid));
?>

<div class="row">
	
    <!-- Content Header (Page header) -->
    
	    <!-- Main content -->
		<section class="content">
	
			<div class="row">
	        	<div class="col-md-3">
					<?= $this->element('vendor_profile');?>
		        </div>
	        
				<div class="col-md-9">
					<div class="row">
						<div class="col-md-12">
							<div class="box box-primary">
		        	    		<div class="box-body with-border">
									<?= $this->element('orders_new') ?>
									<?= $this->element('orders_pending') ?>
									<?= $this->element('orders_completed') ?>
									<?= $this->element('orders_total') ?>	            		
			            		</div>
			            	</div>									
						</div>	
					</div>

					<div class="row">
					
						<div class="col-md-12">
							<div class="nav-tabs-custom">
            					<ul class="nav nav-tabs">
              						<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Branch</a></li>
              						<li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Menu</a></li>
            					</ul>
            					<div class="tab-content">
              						<div class="tab-pane active" id="tab_1">
              							<div class="pull-right"><button type="button" class="btn bg-olive margin">Add Branch</button></div>
										<?= $this->element('vendor_addresses') ?>              
                					</div>
              
              						<div class="tab-pane" id="tab_2">
              							<div class="row">
              								<div class="pull-right"><button type="button" class="btn bg-olive margin">Add Menu</button></div>
              							</div>              							
										<?= $this->element('vendor_menus') ?>
									</div>
              
				
            					</div>
          					</div>						
						
						</div>
					</div>
				       
	        	</div>	        
	        
	      </div>
	      <!-- /.row -->
	
	    </section>
	    <!-- /.content -->
</div>


<div class="vendors view large-9 medium-8 columns content">
    
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($vendor->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($vendor->modified) ?></td>
        </tr>
    </table>
    
    <div class="related">
        <h4><?= __('Related Menu Add Ons') ?></h4>
        <?php if (!empty($vendor->menu_add_ons)): ?>
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
            <?php foreach ($vendor->menu_add_ons as $menuAddOns): ?>
            <tr>
                <td><?= h($menuAddOns->id) ?></td>
                <td><?= h($menuAddOns->vendor_id) ?></td>
                <td><?= h($menuAddOns->parent_id) ?></td>
                <td><?= h($menuAddOns->add_on_name) ?></td>
                <td><?= h($menuAddOns->price) ?></td>
                <td><?= h($menuAddOns->description) ?></td>
                <td><?= h($menuAddOns->created) ?></td>
                <td><?= h($menuAddOns->created_by) ?></td>
                <td><?= h($menuAddOns->modified) ?></td>
                <td><?= h($menuAddOns->modified_by) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MenuAddOns', 'action' => 'view', $menuAddOns->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MenuAddOns', 'action' => 'edit', $menuAddOns->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MenuAddOns', 'action' => 'delete', $menuAddOns->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menuAddOns->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Menu Categories') ?></h4>
        <?php if (!empty($vendor->menu_categories)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Parent Id') ?></th>
                <th scope="col"><?= __('Vendor Id') ?></th>
                <th scope="col"><?= __('Category Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('Image') ?></th>
                <th scope="col"><?= __('Is Active') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vendor->menu_categories as $menuCategories): ?>
            <tr>
                <td><?= h($menuCategories->id) ?></td>
                <td><?= h($menuCategories->parent_id) ?></td>
                <td><?= h($menuCategories->vendor_id) ?></td>
                <td><?= h($menuCategories->category_name) ?></td>
                <td><?= h($menuCategories->description) ?></td>
                <td><?= h($menuCategories->image) ?></td>
                <td><?= h($menuCategories->is_active) ?></td>
                <td><?= h($menuCategories->created) ?></td>
                <td><?= h($menuCategories->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'MenuCategories', 'action' => 'view', $menuCategories->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'MenuCategories', 'action' => 'edit', $menuCategories->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'MenuCategories', 'action' => 'delete', $menuCategories->id], ['confirm' => __('Are you sure you want to delete # {0}?', $menuCategories->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    
    <div class="related">
        <h4><?= __('Related Transaction Messages') ?></h4>
        <?php if (!empty($vendor->transaction_messages)): ?>
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
            <?php foreach ($vendor->transaction_messages as $transactionMessages): ?>
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
    <div class="related">
        <h4><?= __('Related Transaction Promos') ?></h4>
        <?php if (!empty($vendor->transaction_promos)): ?>
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
            <?php foreach ($vendor->transaction_promos as $transactionPromos): ?>
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
    <div class="related">
        <h4><?= __('Related Transactions') ?></h4>
        <?php if (!empty($vendor->transactions)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Uuid') ?></th>
                <th scope="col"><?= __('Vendor Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Promo Code') ?></th>
                <th scope="col"><?= __('Sub Total') ?></th>
                <th scope="col"><?= __('Discount') ?></th>
                <th scope="col"><?= __('Delivery Cost') ?></th>
                <th scope="col"><?= __('Total Amount') ?></th>
                <th scope="col"><?= __('Address Id') ?></th>
                <th scope="col"><?= __('Delivery Man Id') ?></th>
                <th scope="col"><?= __('Remarks') ?></th>
                <th scope="col"><?= __('Payment Method') ?></th>
                <th scope="col"><?= __('Payment Ref') ?></th>
                <th scope="col"><?= __('Status') ?></th>
                <th scope="col"><?= __('Archived') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vendor->transactions as $transactions): ?>
            <tr>
                <td><?= h($transactions->id) ?></td>
                <td><?= h($transactions->uuid) ?></td>
                <td><?= h($transactions->vendor_id) ?></td>
                <td><?= h($transactions->user_id) ?></td>
                <td><?= h($transactions->promo_code) ?></td>
                <td><?= h($transactions->sub_total) ?></td>
                <td><?= h($transactions->discount) ?></td>
                <td><?= h($transactions->delivery_cost) ?></td>
                <td><?= h($transactions->total_amount) ?></td>
                <td><?= h($transactions->address_id) ?></td>
                <td><?= h($transactions->delivery_man_id) ?></td>
                <td><?= h($transactions->remarks) ?></td>
                <td><?= h($transactions->payment_method) ?></td>
                <td><?= h($transactions->payment_ref) ?></td>
                <td><?= h($transactions->status) ?></td>
                <td><?= h($transactions->archived) ?></td>
                <td><?= h($transactions->created) ?></td>
                <td><?= h($transactions->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Transactions', 'action' => 'view', $transactions->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Transactions', 'action' => 'edit', $transactions->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Transactions', 'action' => 'delete', $transactions->id], ['confirm' => __('Are you sure you want to delete # {0}?', $transactions->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
    <div class="related">
        <h4><?= __('Related Vendor Addresses') ?></h4>
        <?php if (!empty($vendor->vendor_addresses)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Vendor Id') ?></th>
                <th scope="col"><?= __('Address Name') ?></th>
                <th scope="col"><?= __('Latitude') ?></th>
                <th scope="col"><?= __('Longitude') ?></th>
                <th scope="col"><?= __('Address1') ?></th>
                <th scope="col"><?= __('Address2') ?></th>
                <th scope="col"><?= __('Street') ?></th>
                <th scope="col"><?= __('City') ?></th>
                <th scope="col"><?= __('State') ?></th>
                <th scope="col"><?= __('Country') ?></th>
                <th scope="col"><?= __('Post Code') ?></th>
                <th scope="col"><?= __('Landmarks') ?></th>
                <th scope="col"><?= __('Operating Hours') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Modified') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($vendor->vendor_addresses as $vendorAddresses): ?>
            <tr>
                <td><?= h($vendorAddresses->id) ?></td>
                <td><?= h($vendorAddresses->vendor_id) ?></td>
                <td><?= h($vendorAddresses->address_name) ?></td>
                <td><?= h($vendorAddresses->latitude) ?></td>
                <td><?= h($vendorAddresses->longitude) ?></td>
                <td><?= h($vendorAddresses->address1) ?></td>
                <td><?= h($vendorAddresses->address2) ?></td>
                <td><?= h($vendorAddresses->street) ?></td>
                <td><?= h($vendorAddresses->city) ?></td>
                <td><?= h($vendorAddresses->state) ?></td>
                <td><?= h($vendorAddresses->country) ?></td>
                <td><?= h($vendorAddresses->post_code) ?></td>
                <td><?= h($vendorAddresses->landmarks) ?></td>
                <td><?= h($vendorAddresses->operating_hours) ?></td>
                <td><?= h($vendorAddresses->created) ?></td>
                <td><?= h($vendorAddresses->modified) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'VendorAddresses', 'action' => 'view', $vendorAddresses->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'VendorAddresses', 'action' => 'edit', $vendorAddresses->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'VendorAddresses', 'action' => 'delete', $vendorAddresses->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendorAddresses->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>


<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Vendor'), ['action' => 'edit', $vendor->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Vendor'), ['action' => 'delete', $vendor->id], ['confirm' => __('Are you sure you want to delete # {0}?', $vendor->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Vendors'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendor'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Menu Add Ons'), ['controller' => 'MenuAddOns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu Add On'), ['controller' => 'MenuAddOns', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Menu Categories'), ['controller' => 'MenuCategories', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu Category'), ['controller' => 'MenuCategories', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transaction Messages'), ['controller' => 'TransactionMessages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction Message'), ['controller' => 'TransactionMessages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transaction Promos'), ['controller' => 'TransactionPromos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction Promo'), ['controller' => 'TransactionPromos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Vendor Addresses'), ['controller' => 'VendorAddresses', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Vendor Address'), ['controller' => 'VendorAddresses', 'action' => 'add']) ?> </li>
    </ul>
</nav>
