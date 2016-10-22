<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
           
		    <?= $this->Form->create($vendorUser, ['class'=>"form-horizontal", 'type' => 'file']) ?>
		    <?= $this->Form->hidden('vendor_uuid', ['value'=>''])?>
		    <?= $this->Form->hidden('uuid', ['value'=>uniqid('VU_')])?>
					<div class="box-body">
						<div class="form-group">                	
							<label for="inputEmail" class="col-sm-3 control-label">Email</label>					
							<div class="col-sm-9">
	                    		<?=  $this->Form->input('email',array('label'=>false,'class'=>"form-control",'id'=>'inputEmail','required'=>true));?>
	                  		</div>
                		</div>
						<div class="form-group">                	
							<label for="inputEmail" class="col-sm-3 control-label">Password</label>					
							<div class="col-sm-9">
	                    		<?=  $this->Form->input('password',array('type'=>'password', 'label'=>false,'class'=>"form-control",'id'=>'inputPassword','required'=>true));?>
	                  		</div>
                		</div>
						<div class="form-group">                	
							<label for="inputFName" class="col-sm-3 control-label">Firs Name</label>					
							<div class="col-sm-9">
	                    		<?=  $this->Form->input('first_name',array('label'=>false,'class'=>"form-control",'id'=>'inputFName','required'=>true));?>
	                  		</div>
                		</div>                	
						<div class="form-group">                	
							<label for="inputLName" class="col-sm-3 control-label">Last Name</label>					
							<div class="col-sm-9">
	                    		<?=  $this->Form->input('last_name',array('label'=>false,'class'=>"form-control",'id'=>'inputLName','required'=>true));?>
	                  		</div>
                		</div>    
						<div class="form-group">                	
							<label for="inputMobile" class="col-sm-3 control-label">Mobile Number</label>					
							<div class="col-sm-9">
	                    		<?=  $this->Form->input('mobile',array('type'=>'phone', 'label'=>false,'class'=>"form-control",'id'=>'inputMobile','required'=>false));?>
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