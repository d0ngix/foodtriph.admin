<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title"><?= __('Add Vendor') ?></h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
           
           
		    <?= $this->Form->create($vendor,array('class'=>"form-horizontal")) ?>
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
                  			<label for="inputContactNum1" class="col-sm-3 control-label">Phone Number</label>
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
											'options'=> [1=>'Restaurant', 2=>'Street Food', 3=>'Carenderia', 4=>'Home Base Chef', 5=>'Fast Food'],
											'empty' => 'Select type of food business',
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
<!--                 		
                		<div class="form-group">
                  			<label for="inputPhoto1" class="col-sm-3 control-label">Photo</label>
                  			<div class="col-sm-9">
                  				<?= $this->Form->file('photo',['id'=>'inputPhoto1'])?>
                  				<p class="help-block">Image size within 600x300 and .JPG or .PNG only</p>
                  			</div>
                		</div>
-->                		                		
              		</div>
              		<!-- /.box-body -->
	              <div class="box-footer">
	                <button type="reset" class="btn btn-default">Reset</button>
	                <?= $this->Form->button(__('Submit'),['class'=>'btn btn-info pull-right']) ?>
	                <?= $this->Form->end() ?>
	              </div>
				<!-- /.box-footer -->
          </div>	
	</div>
	

</div>

<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Vendors'), ['action' => 'index']) ?></li>
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
