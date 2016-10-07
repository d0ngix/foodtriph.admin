<?php if (!empty($vendor->menus)): $counter = 0; $intCol=3; $intDivGrid = 4;?>
<?php foreach ($vendor->menus as $menus): $counter++; ?>
<?php ob_start(); ?>	
	<div class="col-md-<?=$intDivGrid?>">
		<div class="box box-primary">
			<div class="box-header with-border">
            	<h3 class="box-title pull-left"><?= h($menus->name) ?></h3>

				<div class="pull-right">
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit',$menus->id],['class'=>'label label-warning', 'data-toggle'=>"modal", 'data-target'=>"#modalEditVendor", 'id'=>"btnEditVendor"] ) ?> 
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $menus->id], ['class'=>'label label-danger','confirm' => __('Are you sure you want to delete {0}?', $menus->name)]) ?>
				</div>			            	
            	
            </div>
            <!-- /.box-header -->
            		
			<div class="box-body row border-between">
				<div class="col-md-12">
					<?php 
						$strImgSrc = "http://placehold.it/600x400";
						if(!empty($menus->photo)) {
							$arrPhoto = json_decode($menus->photo,  true);
							$strImgSrc = DS. $arrPhoto['path'] . DS . $arrPhoto['name'];
						}
					?>
					<img class="img-responsive center-block" alt="Menu Image" src="<?= $strImgSrc?>">
				</div>
				<div class="col-md-12">
				
					<h3 class="profile-username text-center">
						<strong><?= $defaultCurrencySymbol . ' ' . number_format($menus->price, 2) ;?></strong>
						<?php if ($menus->pax_max):?>
						<small>for <?= $menus->pax_max ?> pax</small> 
						<?php endif;?>
					</h3>

				</div>				
				<div class="col-md-12">

	          		<div class="box box-solid">
	
	              		<div class="box-group" id="accordion_<?=$counter?>">

	                		<div class="panel box box-primary">
	                  			<div class="box-header with-border">
				                    <h4 class="box-title">
	            						<a data-toggle="collapse" data-parent="#accordion_<?=$counter?>" href="#collapseOne_<?=$counter?>" class="collapsed" aria-expanded="false">
	                        				Statistics
	                      				</a>
	                    			</h4>
	                  			</div>
	                  			<div id="collapseOne_<?=$counter?>" class="panel-collapse collapse in" aria-expanded="false" style="">
	                    			<div class="box-body">
										<div class="">
											<a class="btn btn-app">
                								<span class="badge bg-teal">67</span>
                								<i class="fa fa-inbox"></i> Orders
              								</a>										
											<a class="btn btn-app">
					                			<span class="badge bg-teal">531</span>
					                			<i class="fa fa-heart-o"></i> Likes
					              			</a>	
					              			<a class="btn btn-app">
					                			<span class="badge bg-teal">531</span>
					                			<i class="fa fa-comments-o"></i> Comments
					              			</a>					              			
					              			
										</div>
	                    			</div>
	                  			</div>
	                		</div>		              		
	              		
	                		<div class="panel box box-primary">
	                  			<div class="box-header with-border">
				                    <h4 class="box-title">
	            						<a data-toggle="collapse" data-parent="#accordion_<?=$counter?>" href="#collapseTwo_<?=$counter?>" class="collapsed" aria-expanded="false">
	                        				Menu Add-Ons
	                      				</a>
	                    			</h4>
	                  			</div>
	                  			<div id="collapseTwo_<?=$counter?>" class="panel-collapse collapse" aria-expanded="false" style="">
									<?php 
										$arrAddOns = json_decode($menus->add_ons, true);
										//debug($arrAddOns);
									?>	    
									<?php foreach ($arrAddOns as $k => $v):?>
	                  				<div class="box-header with-border">
              							<i class="fa fa-th-large"></i>
              							<h3 class="box-title"><?=$v['add_on_name']?></h3>
            						</div>
            						<div class="box-body">
            							<ul>
											<?php foreach ($v['items'] as $item):?>
												<li>
													<div>
														<?=$item['name'] . " @ <strong>$defaultCurrencySymbol " . number_format($item['price'], 2) . "</strong>"?><br>
													</div>
													<div class="pull-right">Ref: <?=@$item['ref']?></div>
													<div>
														<?=$item['desc']?>
													</div>
												</li>
											<?php endforeach;?>																	            								
            							</ul>
            						</div>    
	                    			<?php endforeach;?>									
	                  			</div>
	                		</div>	              		
			                
			                <div class="panel box box-primary">
								<div class="box-header with-border">
	                    			<h4 class="box-title">
	                      				<a data-toggle="collapse" data-parent="#accordion_<?=$counter?>" href="#collapseThree_<?=$counter?>" aria-expanded="false" class="collapsed">
	                        				Descriptions
	                      				</a>
	                    			</h4>
	                  			</div>                  
	                  			<div id="collapseThree_<?=$counter?>" class="panel-collapse collapse" aria-expanded="false" >
	                    			<div class="box-body">
										<p><strong>Long Description: </strong> <br><?=$menus->description_long?></p>
										<hr>
										<p><strong>Short Description: </strong> <br><?=$menus->description_short?></p>
	                    			</div>
	                  			</div>
	                		</div>
	                		
	              		</div>
	            	</div>
				</div>
			</div>
<!-- 			
			<div class="box-footer">

			</div>
 -->
		</div>
	</div>
	<?php //if( !($counter % $intCol) || $counter == 1) echo '</div>' //create new div row - end?>
<?php $strHtml = ob_get_clean()?>
<?php
	if($counter === 1) echo '<div class="row">';
		
	
	echo $strHtml;
		
	if (!($counter % 3)) echo '</div><div class="row">';

?>
<?php endforeach;?>
<?php endif;?>