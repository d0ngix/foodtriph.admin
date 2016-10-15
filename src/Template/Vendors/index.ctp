<div class="row">
	<div class="col-md-12">
    	<div class="box">
            <div class="box-header">
              <h3 class="box-title"><?= __('Vendors List') ?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
				<table id="example2" class="table table-bordered table-hover">
			        <thead>
			            <tr>
			                <th width="5%" scope="col">S/N</th>			                
			                <th width="40%" scope="col"><?= $this->Paginator->sort('Vendor Details') ?></th>
			                <!-- 
			                <th scope="col"><?= $this->Paginator->sort('email') ?></th>
			                <th scope="col"><?= $this->Paginator->sort('contact_num') ?></th>
			                <th scope="col"><?= $this->Paginator->sort('cuisine') ?></th>
			                 -->
			                <th width="25%" scope="col"><?= $this->Paginator->sort('description') ?></th>
			                <!--
			                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
			                <th scope="col"><?= $this->Paginator->sort('modified') ?></th>
			                -->
			                <th width="15%" scope="col" class="actions"><?= __('Actions') ?></th>
			            </tr>
			        </thead>
			        <tbody>
			        	<?php $i=0;?>
			            <?php foreach ($vendors as $vendor): ?>
						<?php
						$arrPhoto = json_decode($vendor['photo'],true);
						$imgPathVendor = $default_img;
						if ( !empty($arrPhoto) ) $imgPathVendor = $arrPhoto['path']. DS .$arrPhoto['name'];
						 
						?>			            
			            <tr>
			                <td><?= ++$i; ?></td>
			                <td>			
								<div class="row">
									<div class="col-md-4">
										<a href="#" data-toggle="modal" data-target="#modalEditVendorPhoto" class="vendor-image" id="btnEditVendorPhoto_<?=$i?>" uuid="<?=$vendor->uuid?>">
											<img alt="Vendor Image" src="<?=$imgPathVendor?>" class='img-responsive'>
										</a>									
									</div>
									<div class="col-md-8">
				                		<h3 style="margin-top: 5px;">
											<?= $this->Html->link(__($vendor->name), ['action' => 'view', $vendor->uuid]) ?>				                			
				                		</h3>
				                		<?= h($vendor->email) ?><br>
				                		<?= h($vendor->contact_num) ?><br>
				                		<?= h('Branches (4)') ?>
				                											
									</div>	
								</div>	


			                </td>
			                <!-- 
			                <td><?= h($vendor->email) ?></td>
			                <td><?= h($vendor->contact_num) ?></td>
			                <td><?= h($vendor->cuisine) ?></td>
			                 -->
			                <td><?= h($vendor->description) ?></td>
			                <!-- 
			                <td><?= h($vendor->created) ?></td>
			                <td><?= h($vendor->modified) ?></td>
			                 -->
			                <td class="actions">
			                    <?= $this->Html->link(__('View'), ['action' => 'view', $vendor->uuid],['class'=>'label label-info']) ?>
			                    <?= $this->Html->link(__('Edit'), ['action' => 'edit',$vendor->uuid],['class'=>'label label-warning', 'data-toggle'=>"modal", 'data-target'=>"#modalEditVendor", 'id'=>"btnEditVendor",'uuid'=>$vendor->uuid] ) ?>			                    
			                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $vendor->uuid], ['class'=>'label label-danger','confirm' => __('Are you sure you want to delete {0}?', $vendor->name)]) ?>
			                </td>
			            </tr>
			            <?php endforeach; ?>
			        </tbody>
				</table>
				<!-- 
				<tfoot>
					<tr>
						<th>Rendering engine</th>
						<th>Browser</th>
						<th>Platform(s)</th>
						<th>Engine version</th>
						<th>CSS grade</th>
					</tr>
				</tfoot>
				 -->
			</div>
		</div>
	</div>
</div>

<?= $this->element('modals',  ['id'=>'modalEditVendor','modalTitle'=>'Edit Vendor'])?>
<?= $this->element('modals',  ['id'=>'modalEditVendorPhoto','modalTitle'=>'Update Photo'])?>
<!-- 
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Vendor'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Menu Add Ons'), ['controller' => 'MenuAddOns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu Add On'), ['controller' => 'MenuAddOns', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Menu Categories'), ['controller' => 'MenuCategories', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu Category'), ['controller' => 'MenuCategories', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Menus'), ['controller' => 'Menus', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Menu'), ['controller' => 'Menus', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transaction Messages'), ['controller' => 'TransactionMessages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction Message'), ['controller' => 'TransactionMessages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transaction Promos'), ['controller' => 'TransactionPromos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction Promo'), ['controller' => 'TransactionPromos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Transactions'), ['controller' => 'Transactions', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Transaction'), ['controller' => 'Transactions', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Vendor Addresses'), ['controller' => 'VendorAddresses', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vendor Address'), ['controller' => 'VendorAddresses', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendors index large-9 medium-8 columns content">
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
 -->