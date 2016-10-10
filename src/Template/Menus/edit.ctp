<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
            <!-- /.box-header -->
            <!-- form start -->
           
           
		    <?= $this->Form->create($menu,['class'=>"form-horizontal",'type' => 'file']) ?>
		    		<?php 
		    			$this->Form->hidden('vendor_id',['value'=>$vendor->id]);
		    			$this->Form->hidden('vendor_uuid',['value'=>$vendor->uuid]);
		    		?>
					<div class="box-body">
						
						<div class="form-group">                	
							<label for="inputRef" class="col-sm-3 control-label">Ref</label>					
							<div class="col-sm-9">
	                    		<?=  $this->Form->input('ref',array('label'=>false,'class'=>"form-control",'id'=>'inputRef'));?>	                    		
	                  		</div>
                		</div>
                		
						<div class="form-group">                	
							<label for=inputName class="col-sm-3 control-label">Name</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('name', ['label'=>false,'class'=>'form-control','id'=>'inputName','required'=>true]);?>
	                  		</div>
                		</div>                		

                		<div class="form-group">
                  			<label for="inputDescShort" class="col-sm-3 control-label">Short Description</label>
                  			<div class="col-sm-9">                    		
                    			<?=  $this->Form->input('description_short',array('type'=>'textarea', 'label'=>false,'class'=>"form-control",'id'=>'inputDescShort','required'=>true,'maxlength'=>'100'));?>
                    			<p class="help-block">Summarize whats with this menu in 100 characters</p>
                  			</div>
                		</div>                		
                		
                		<div class="form-group">
                  			<label for="inputDescLong" class="col-sm-3 control-label">Long Description</label>
                  			<div class="col-sm-9">                    		
                    			<?=  $this->Form->input('description_long',array('type'=>'textarea', 'label'=>false,'class'=>"form-control",'id'=>'inputDescLong','required'=>false,'maxlength'=>'500'));?>
                    			<p class="help-block">Tell us more about the menu in 500 characters</p>
                  			</div>
                		</div>
                		
                		<div class="form-group">
                  			<label for="inputPrice" class="col-sm-3 control-label">Price</label>
                  			<div class="col-sm-9">                    		
                    			<?=  $this->Form->input('price',array('type'=>'nubmer', 'label'=>false,'class'=>"form-control",'id'=>'inputPrice','required'=>true));?>
                  			</div>
                		</div>
                		
                		<div class="form-group">
                  			<label for="inputDiscount" class="col-sm-3 control-label">Discount</label>
                  			<div class="col-sm-9">                    		
                    			<?=  $this->Form->input('discount',array('type'=>'nubmer', 'label'=>false,'class'=>"form-control",'id'=>'inputDiscount','required'=>false));?>
                  			</div>
                		</div>
                		
                		<div class="form-group">
                  			<label for="inputPaxMin" class="col-sm-3 control-label">Min Pax</label>
                  			<div class="col-sm-9">                    		
                    			<?=  $this->Form->input('pax_min',array('type'=>'nubmer', 'label'=>false,'class'=>"form-control",'id'=>'inputPaxMin','required'=>false));?>
                  			</div>
                		</div>                		
                		<div class="form-group">
                  			<label for="inputPaxMax" class="col-sm-3 control-label">Max Pax</label>
                  			<div class="col-sm-9">                    		
                    			<?=  $this->Form->input('pax_max',array('type'=>'nubmer', 'label'=>false,'class'=>"form-control",'id'=>'inputPaxMax','required'=>false));?>
                  			</div>
                		</div>   
                		
						<div class="form-group">
							<label for="inputPhoto" class="col-sm-3 control-label">Photo</label>
							<div class="col-sm-9">
								<div class="row">
									<div class="col-sm-8">
										<?= $this->Form->file('photo',['id'=>'inputPhoto'])?>
										<p class="help-block">Image size within 600x300 and .JPG or .PNG only</p>									
									</div>
									<div class="col-sm-4">
										<?php $arrPhoto = json_decode($menu->photo,true);?>									
										<img class="img-responsive" alt="Menu Image" src="<?= DS. $arrPhoto['path'] . DS . $arrPhoto['name']?>">
									</div>
								</div>
							</div>
						</div>
						<div class="form-group">
							<hr>
							<label for="inputPhoto" class="col-sm-3 control-label">Menu Add-ons</label>
							<div class="col-sm-9">
								
							<?php 
								$arrAction = ['showEdit'=>false, 'showDelete'=>false, 'showCheckBox'=>true];
								echo $this->element('vendor_menu_addons',compact('arrMenuAddOns','arrAction'));
							?>
							
							</div>
						</div>						
						
						                		             		
              		</div>
              		
              		
              		<!-- /.box-body -->
	              <div class="box-footer">
	                <button type="reset" class="btn btn-default">Reset</button>
	                <?= $this->Form->button(__('Update'),['class'=>'btn btn-primary pull-right']) ?>
	                <?= $this->Form->end() ?>
	              </div>
				<!-- /.box-footer -->
          </div>	
	</div>
</div>