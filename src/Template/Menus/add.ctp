<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
            <!-- /.box-header -->
            <!-- form start -->
           
           
		    <?= $this->Form->create($menu,array('class'=>"form-horizontal")) ?>
		    		<?php 
		    			$this->Form->hidden('vendor_id',['value'=>$intVendorId]);
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
                    			<?=  $this->Form->input('description_short',array('type'=>'textarea', 'label'=>false,'class'=>"form-control",'id'=>'inputDescShort','required'=>true));?>
                    			<p class="help-block">Summarize whats with this menu in 100 characters</p>
                  			</div>
                		</div>                		
                		
                		<div class="form-group">
                  			<label for="inputDescLong" class="col-sm-3 control-label">Long Description</label>
                  			<div class="col-sm-9">                    		
                    			<?=  $this->Form->input('description_long',array('type'=>'textarea', 'label'=>false,'class'=>"form-control",'id'=>'inputDescLong','required'=>false));?>
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
                		
                		<!-- 
						<div class="form-group">
                  			<label for="inputAddOns" class="col-sm-3 control-label">Add-ons</label>
                  			<div class="col-sm-9">   
                  				<?php 
                  					$arrAddOns = ['toppings','drinks','shit'];
                  				?>   
								<?=  $this->Form->select('add_ons',$arrAddOns,['multiple'=>true,'label'=>false,'class'=>"form-control select2",'id'=>'inputAddOns','required'=>false]);?>                  			              		
			                		<select class="form-control select2" multiple="multiple" data-placeholder="Select a State" style="width: 100%;">
			                  			<option>Alabama</option>
			                  			<option>Alaska</option>
			                  			<option>California</option>
			                  			<option>Delaware</option>
			                  			<option>Tennessee</option>
			                  			<option>Texas</option>
			                  			<option>Washington</option>
			                		</select>			              		
                  			</div>
              			</div>
              			 -->                		
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
								<?= $this->Form->file('photo',['id'=>'inputPhoto'])?>
								<p class="help-block">Image size within 600x300 and .JPG or .PNG only</p>
							</div>
						</div>                		             		
                		
              		</div>
              		<!-- /.box-body -->
	              <div class="box-footer">
	                <button type="reset" class="btn btn-default">Reset</button>
	                <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary pull-right']) ?>
	                <?= $this->Form->end() ?>
	              </div>
				<!-- /.box-footer -->
          </div>	
	</div>
</div>