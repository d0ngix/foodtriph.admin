<?php
$arrPhoto = json_decode($vendor->photo,true);
$imgPathVendor = $default_img;
if ( !empty($arrPhoto) ) $imgPathVendor = $arrPhoto['path']. DS .$arrPhoto['name'];
?>
<?= $this->Form->create($vendor,['id'=>'frmEditPhoto', 'class'=>"form-horizontal",'type' => 'file']) ?>
<div class="box box-primary">
	<div class="box-body box-profile">
              
		<div class="row">
			<div class="col-md-4">
				<img class="img-responsive" alt="Vendor Image" src="<?=$imgPathVendor?>">								
			</div>
			<div class="col-md-8">
				<div class="form-group">
					<label for="inputPhoto1" class="col-sm-3 control-label">Photo</label>
					<div class="col-sm-9">
						<?= $this->Form->file('photo',['id'=>'inputPhoto1'])?>
						<p class="help-block">Image size within 600x300 and .JPG or .PNG only</p>
					</div>
				</div>
			</div>	
		</div>
		
	</div>
</div>
<div class="modal-footer">
	<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	<button type="submit" id="btnUpdatePhoto" class="btn btn-primary">Update</button>
</div>
<?= $this->Form->end() ?>