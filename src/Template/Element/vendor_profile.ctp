<?php 
$arrPhoto = json_decode($vendor->photo,true);
$imgPathVendor = $default_img;
if ( !empty($arrPhoto) ) $imgPathVendor = $arrPhoto['path']. DS .$arrPhoto['name'];
?>
<!-- Profile Image -->
<div class="box box-primary">
	<div class="box-body box-profile">
		<img class="img-responsive" alt="Vendor Image" src="<?= DS. $imgPathVendor?>">

		<h3 class="profile-username text-center"><?= $arrFoodType[$vendor->type] .' / '. h($vendor->cuisine); ?></h3>

		<ul class="list-group list-group-unbordered">
        	<li class="list-group-item">
            	<strong><i class="fa fa fa-calendar  margin-r-5"></i> <b>Date Joined</b></strong> <a class="pull-right"><?= date('d-M-Y',strtotime($vendor->created)); ?></a>
			</li>
			<li class="list-group-item">
				<strong><i class="fa fa fa-envelope margin-r-5"></i> <b>Email</b></strong> <a class="pull-right " href="mailto:<?=$vendor->email;?>" ><?= h($vendor->email) ?></a>
			</li>
			<li class="list-group-item">
				<strong><i class="fa fa fa-phone margin-r-5"></i> <b>Phone</b></strong> <a class="pull-right"><?= h($vendor->contact_num) ?></a>
			</li>

			<li class="list-group-item">
				<strong><i class="fa fa fa-file-text margin-r-5"></i> <b>Desciption</b></strong> <p><?= h($vendor->description) ?></p>
			</li>
			<li class="list-group-item">
				<?= $this->Html->link(__('Edit'), ['action' => 'edit',$vendor->uuid],['class'=>'label label-warning', 'data-toggle'=>"modal", 'data-target'=>"#modalEditVendor", 'id'=>"btnEditVendor"] ) ?>
				<?= $this->Html->link(__('Add Menu'), ['controller'=>'menus', 'action' => 'add',$vendor->id],['class'=>'label label-success', 'data-toggle'=>"modal", 'data-target'=>"#modalAddMenu", 'id'=>"btnAddMenu"] ) ?>
				<?= $this->Html->link(__('Add Menu Add-ons'), ['controller'=>'menus', 'action' => 'add',$vendor->id],['class'=>'label label-success', 'data-toggle'=>"modal", 'data-target'=>"#modalAddMenu", 'id'=>"btnAddMenu"] ) ?>
				<?= $this->Html->link(__('Add User'), ['controller'=>'menus', 'action' => 'add',$vendor->id],['class'=>'label label-success', 'data-toggle'=>"modal", 'data-target'=>"#modalAddMenu", 'id'=>"btnAddMenu"] ) ?>				
			</li>
			                
		</ul>

		<a href="<?= empty($vendor->url) ? '':h($vendor->url) ?>" <?= empty($vendor->url) ? 'disabled':''?> target="_blank" class="btn btn-primary btn-block">
			<b>Website</b>
		</a>
	</div>
	<!-- /.box-body -->
</div>
<!-- /.box -->
<?= $this->element('modals',  ['id'=>'modalEditVendor','modalTitle'=>'Edit Vendor'])?>
<?= $this->element('modals',  ['id'=>'modalAddMenu','modalTitle'=>'Add Menu'])?>
