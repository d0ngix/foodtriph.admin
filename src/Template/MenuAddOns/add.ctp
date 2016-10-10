<?php 
debug($parentMenuAddOns->all()->count());
?>
<div class="row">
	<div class="col-md-12">
		<div class="box box-info">
           
		    <?= $this->Form->create($menuAddOn, ['class'=>"form-horizontal"]) ?>
		    <?=$this->Form->hidden('vendor_id',['value'=>$vendor->id])?>
		    		<?php if(!$parentMenuAddOns->all()->count()):?>
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
	                    		<?= $this->Form->input('description', ['label'=>false,'type'=>'text','class'=>'form-control']);?>
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
	                    		<?= $this->Form->input('description', ['label'=>false,'type'=>'text','class'=>'form-control']);?>
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
        <li><?= $this->Html->link(__('List Menu Add Ons'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Vendors'), ['controller' => 'Vendors', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Vendor'), ['controller' => 'Vendors', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Parent Menu Add Ons'), ['controller' => 'MenuAddOns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Parent Menu Add On'), ['controller' => 'MenuAddOns', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="menuAddOns form large-9 medium-8 columns content">
    <?= $this->Form->create($menuAddOn) ?>
    <fieldset>
        <legend><?= __('Add Menu Add On') ?></legend>
        <?php
            
            echo $this->Form->input('parent_id', ['options' => $parentMenuAddOns, 'empty' => true]);

        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
