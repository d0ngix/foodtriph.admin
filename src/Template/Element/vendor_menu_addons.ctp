<?php
use Cake\Utility\Hash;
/*
[
	{
		"add_on_name":"Toppings",
		"items":[
			{"ref":"", "name":"Toppings 1","price":"10.00","desc":"Some toppings description here"},
			{"ref":"", "name":"Toppings 2","price":"15.00","desc":"Some toppings description here"},
			{"ref":"", "name":"Toppings 3","price":"5.00","desc":"Some toppings description here"}
		]
	},
	
	{
		"add_on_name":"Drinks",
		"items":[
			{"ref":"", "name":"Coke","price":"10.00","desc":"Some description here"},
			{"ref":"", "name":"Sprite","price":"10.00","desc":"Some description here"},
			{"ref":"", "name":"Iced Tea","price":"15.00","desc":"Some description here"}
		]
	},
	
	{
		"add_on_name":"Add-Ons",
		"items":[
			{"ref":"", "name":"Rice","price":"10.00","desc":"Some description here"},
			{"ref":"", "name":"Shanghai Roll (3pcs)","price":"20.00","desc":"Some description here"},
			{"ref":"", "name":"Lumpia (Pork 3pcs)","price":"20.00","desc":"Some description here"}
		]
	}
]

id 
vendor_id
parent_id
ref
add_on_name
price
description
 */
?>
<?php if (!empty($arrMenuAddOns)):?>
<?php 
$counter = 0; 
$intDivGrid = 6;

if (empty($arrAction['showEdit'])) $arrAction['showEdit'] = false;
if (empty($arrAction['showDelete'])) $arrAction['showDelete'] = false;
if (empty($arrAction['showCheckBox'])) $arrAction['showCheckBox'] = false;
?>
<?php foreach ($arrMenuAddOns as $k=>$v): $counter++;?>
<?php ob_start(); ?>
	<div class="col-md-<?=$intDivGrid?>">
		<div class="box box-primary">
			<div class="box-header with-border">
            	<h3 class="box-title pull-left" for>
           		<?php if ($arrAction['showCheckBox']):?>
           			<?php
           				$arrAddOn = [
           					'add_on_name'=> $v['category_name'],
							'items' => @$v['items']
						]; 
           				echo $this->Form->hidden('add_ons[]',['value'=>json_encode($arrAddOn)])
           			?>
           				<input type="checkbox" name="menu_add_on_id[]" id="<?=$k?>" value="<?=$k?>" />
           		<?php endif;?>            	
           			            	
            		<label for="<?=$k?>">
						&nbsp;<?= h($v['category_name']) ?>
            		</label>
            	</h3>

				<div class="pull-right">
                    <?//= $this->Html->link(__('Edit'), '#',['menu-id'=>$menus->id, 'vendor-uuid'=>$vendor->uuid, 'class'=>'label label-warning btnEditMenu', 'data-toggle'=>"modal", 'data-target'=>"#modalEditMenu"] ) ?> 
                    <?//= $this->Form->postLink(__('Delete'), ['controller'=>'menus', 'action' => 'delete', $menus->id,$vendor->uuid], ['class'=>'label label-danger','confirm' => __('Are you sure you want to delete {0}?', $menus->name)]) ?>
				</div>			            	
            	
            </div>
            		
			<div class="box-body border-between">
				<?php if (!empty($v['items'])):?>
				<?php foreach($v['items'] as $v1):?>
				<div class="row">
					<div class="col-md-4">
						<span class="text-muted"><?=$v1->add_on_name?> </span>					
					</div>
					<div class="col-md-4">
						<span class="text-muted">@ <strong><?=$defaultCurrencySymbol . ' ' . number_format($v1->price,2)?></strong></span>
					</div>
					
					<div class="col-md-4">
						<div class="pull-right">
							<?php if ($arrAction['showEdit']):?>
		                    	<?= $this->Html->link(__('Edit'), '#',['menu-addon-id'=>$v1->id, 'class'=>'label label-warning btnEditMenuAddOn', 'data-toggle'=>"modal", 'data-target'=>"#modalEditMenuAddOn"] ) ?>
		                    <?php endif;?>
							<?php if ($arrAction['showDelete']):?>
        		            	<?= $this->Form->postLink(__('Delete'), ['controller'=>'menuAddOns', 'action' => 'delete', $v1->id], ['class'=>'label label-danger','confirm' => __('Are you sure you want to delete {0}?', $v1->add_on_name)]) ?>
        		            <?php endif;?>						
						</div>					
					</div>									
				</div>
				<?php endforeach;?>
				<?php endif;?>
			</div>
		</div>
	</div>
<?php $strHtml = ob_get_clean()?>
<?php
	if($counter === 1) echo '<div class="row">';
	echo $strHtml;
	if (!($counter % (12/$intDivGrid) )) echo '</div><div class="row">';
?>
<?php endforeach;?>
<?='</div>';?>
<?php endif;?>
<?= $this->element('modals',  ['id'=>'modalEditMenuAddOn','modalTitle'=>'Edit AddOns Details','size'=>'modal-lg'])?>
