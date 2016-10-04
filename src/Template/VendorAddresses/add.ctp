<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
            <!-- /.box-header -->
            <!-- form start -->
           
           
		    <?= $this->Form->create($vendorAddress,array('class'=>"form-horizontal")) ?>
		    <?php 
		    	//Hidden Fields
		    	echo $this->Form->hidden('vendor_id',['value'=>$vendor->id])
		    	
		    ?>
					<div class="box-body">
					
						<div class="form-group">                	
							<label for="inputName1" class="col-sm-3 control-label">Branch Name</label>					
							<div class="col-sm-9">
	                    		<?=  $this->Form->input('address_name',array('label'=>false,'class'=>"form-control",'id'=>'inputAddressName','required'=>true));?>	                    		
	                  		</div>
                		</div>
                		
						<div class="form-group">                	
							<label for="inputAddress1" class="col-sm-3 control-label">Address 1</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('address1', ['label'=>false,'type'=>'text','class'=>'form-control']);?>
	                  		</div>
                		</div>
                		
						<div class="form-group">                	
							<label for="inputAddress2" class="col-sm-3 control-label">Address 2</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('address2', ['label'=>false,'type'=>'text','class'=>'form-control']);?>
	                  		</div>
                		</div>

						<div class="form-group">                	
							<label for="inputStreet" class="col-sm-3 control-label">Street</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('street', ['label'=>false,'type'=>'text','class'=>'form-control']);?>
	                  		</div>
                		</div>
                		
						<div class="form-group">                	
							<label for="inputCity" class="col-sm-3 control-label">City</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('city', ['label'=>false,'type'=>'text','class'=>'form-control']);?>
	                  		</div>
                		</div>                		

						<div class="form-group">                	
							<label for="inputState" class="col-sm-3 control-label">State</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('state', ['label'=>false,'type'=>'text','class'=>'form-control']);?>
	                  		</div>
                		</div>                		

						<div class="form-group">                	
							<label for="inputPostCode" class="col-sm-3 control-label">Postal Code</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('post_code', ['label'=>false, 'type'=>'text', 'class'=>'form-control']);?>
	                  		</div>
                		</div>                		
                		
						<div class="form-group">                	
							<label for="inputCountry" class="col-sm-3 control-label">Country</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('country', ['label'=>false, 'disabled'=>true, 'type'=>'text', 'class'=>'form-control', 'value'=>'PHILIPPINES']);?>
	                  		</div>
                		</div>                		

						<div class="form-group">                	
							<label for="inputCountry" class="col-sm-3 control-label">Landmark</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('landmarks', ['label'=>false, 'type'=>'text', 'class'=>'form-control']);?>
	                  		</div>
                		</div>
                		
						<div class="form-group">                	
							<label for="inputCountry" class="col-sm-3 control-label">Operating Hours</label>					
							<div class="col-sm-9">
	                    		<?= $this->Form->input('operating_hours', ['label'=>false, 'type'=>'text', 'class'=>'form-control']);?>
	                  		</div>
                		</div>                		                		
              		</div>
              		
	              <div class="box-footer">
	                <button type="reset" class="btn btn-default">Reset</button>
	                <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary pull-right']) ?>
	                <?= $this->Form->end() ?>
	              </div>
				<!-- /.box-footer -->
          </div>	
	</div>
</div>



<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vendor Addresses'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="vendorAddresses form large-9 medium-8 columns content">
    <fieldset>
    <?= $this->Form->create($vendorAddress) ?>
        <legend><?= __('Add Vendor Address') ?></legend> 
        <?php
            echo $this->Form->input('vendor_id', ['options' => $vendors]);
            
            echo $this->Form->input('latitude');
            echo $this->Form->input('longitude');
            
            
            
            
            
            
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
