<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
           
		    <?= $this->Form->create($vendorAddress,array('class'=>"form-horizontal")) ?>
					<div class="box-body">
						<div class="form-group">                	
							<label for="inputName1" class="col-sm-3 control-label">Name</label>					
							<div class="col-sm-9">
	                    		<?=  $this->Form->input('name',array('label'=>false,'class'=>"form-control",'id'=>'inputName1','required'=>true));?>
	                  		</div>
                		</div>
						<div class="form-group">                	
							<label for="inputName1" class="col-sm-3 control-label">Description</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('description', ['label'=>false,'type'=>'textarea','class'=>'form-control']);?>
	                  		</div>
                		</div>                		
                		
                		<div class="form-group">
                  			<label for="inputEmail1" class="col-sm-3 control-label">Email</label>
                  			<div class="col-sm-9">                    		
                    			<?=  $this->Form->input('email',array('type'=>'email', 'label'=>false,'class'=>"form-control",'id'=>'inputEmail1','required'=>true));?>
                  			</div>
                		</div>
                		<div class="form-group">
                  			<label for="inputContactNum1" class="col-sm-3 control-label">Contact #</label>
                  			<div class="col-sm-9">                    		
                    			<?=  $this->Form->input('contact_num',array('type'=>'phone', 'label'=>false,'class'=>"form-control",'id'=>'inputContactNum1','required'=>true));?>
                  			</div>
                		</div>
                		
                		<div class="form-group">
                  			<label for="inputContactNum1" class="col-sm-3 control-label">Website</label>
                  			<div class="col-sm-9">                    		
                    			<?=  $this->Form->input('url',array('type'=>'url', 'label'=>false,'class'=>"form-control",'id'=>'inputUrl1'));?>
                  			</div>
                		</div>                		
    
						<div class="form-group">
							<label for="inputType1" class="col-sm-3 control-label">Type</label>
							<div class="col-sm-9">
								<?php 
								
									echo $this->Form->input('type', [
											'type'=>'select',
											'label'=>false,
											'class'=>'form-control select2',
											'id'=>'inputType1',
											'style'=>"width: 100%;",
											'empty' => 'Select type of food business',
											'default' => '',
											'options'=> [1=>'Restaurant', 2=>'Street Food', 3=>'Carenderia', 4=>'Home Base Chef', 5=>'Fast Food'],
											'required'=>true
										]
									);
								?>
							</div>
						</div>
                		<div class="form-group">
                  			<label for="inputCuisine1" class="col-sm-3 control-label">Cuisine</label>
                  			<div class="col-sm-9">
                  				<?= $this->Form->input('cuisine', ['id'=>'inputCuisine1','label'=>false,'class'=>'form-control']);?>
                  			</div>
                		</div>
 
                		<div class="form-group">
                  			<label for="inputPhoto1" class="col-sm-3 control-label">Photo</label>
                  			<div class="col-sm-9">
                  				<?= $this->Form->file('photo',['id'=>'inputPhoto1'])?>
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