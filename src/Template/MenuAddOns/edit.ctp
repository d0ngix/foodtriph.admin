<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
           
		    <?= $this->Form->create($menuAddOn, ['class'=>"form-horizontal"]) ?>
		    <?= $this->Form->hidden('vendor_uuid',['value'=>$vendorUuid])?>
		    		<?php if(!$menuAddOn->parent_id):?>
		    		<div class="box-body">
						<div class="form-group">                	
							<label for="inputName1" class="col-sm-3 control-label">Addon Category Name</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('add_on_name',['label'=>false,'class'=>"form-control",'required'=>true]);?>
	                  		</div>
                		</div>
						<div class="form-group">                	
							<label for="inputName1" class="col-sm-3 control-label">Description</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('desc', ['label'=>false,'type'=>'text','class'=>'form-control']);?>
	                  		</div>
                		</div>		    		
		    		</div>
		    		<?php else:?>
					<div class="box-body">
						<div class="form-group">
							<label for="inputType1" class="col-sm-3 control-label">Addon Category</label>
							<div class="col-sm-9">
								<?php 
								
									echo $this->Form->input('parent_id', [
											'type'=>'select',
											'label'=>false,
											'class'=>'form-control select2',
											'style'=>"width: 100%;",
											'empty' => 'Select addon category',
											'default' => '',
											'options'=> $parentMenuAddOns
										]
									);
								?>
							</div>
						</div>					
					
						<div class="form-group">                	
							<label for="inputName1" class="col-sm-3 control-label">Ref.</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('ref',['label'=>false,'class'=>"form-control",'required'=>false]);?>
	                  		</div>
                		</div>					
						<div class="form-group">                	
							<label for="inputName1" class="col-sm-3 control-label">Name</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('add_on_name',['label'=>false,'class'=>"form-control",'required'=>true]);?>
	                  		</div>
                		</div>
						<div class="form-group">                	
							<label for="inputName1" class="col-sm-3 control-label">Description</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('desc', ['label'=>false,'type'=>'text','class'=>'form-control']);?>
	                  		</div>
                		</div>                		
						<div class="form-group">                	
							<label for="inputName1" class="col-sm-3 control-label">Price</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('price', ['label'=>false,'type'=>'number','class'=>'form-control']);?>
	                  		</div>
                		</div>                		
   
                		
              		</div>
              		<?php endif;?>
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