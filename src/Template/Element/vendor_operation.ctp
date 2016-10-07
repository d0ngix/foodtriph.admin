<?php 
/*
[
	{"mon":{"start":"10:00 AM","end":"10:00 PM"}},
	{"tue":{"start":"10:00 AM","end":"10:00 PM"}},
	{"wed":{"start":"10:00 AM","end":"10:00 PM"}},
	{"thu":{"start":"10:00 AM","end":"10:00 PM"}},
	{"fri":{"start":"10:00 AM","end":"10:00 PM"}},
	{"sat":{"start":"10:00 AM","end":"10:00 PM"}},
	{"sun":{"start":"10:00 AM","end":"10:00 PM"}}
]
*/
?>    
<?php 
$arrOperation = [
	[
		'day'=>['label'=>'Monday','alias'=>'mon'],
	]
];
?>
<?php foreach ($arrOperation as $value):?>
<div class="row">
	<div class="col-sm-4">
		<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title">
					<label><input type="checkbox" class="minimal" name="op[<?=$value['day']['alias']?>][day]" value="<?=$value['day']['alias']?>"> <?= $value['day']['label']?></label>
				</h3>
			</div>
			<div class="box-body">
				
					<div class="col-xs-4"><span>Start</span></div>
					<div class="col-xs-8">
						<div class="bootstrap-timepicker">
							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control timepicker" name="op[<?=$value['day']['alias']?>][start]">
									<div class="input-group-addon">
			                      		<i class="fa fa-clock-o"></i>
			                    	</div>
			                  	</div>
							</div>
						</div>				
					</div>
						
				
					<div class="col-xs-4"><span>Close</span></div>
					<div class="col-xs-8">
						<div class="bootstrap-timepicker">
							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control timepicker" name="op[<?=$value['day']['alias']?>][end]">
									<div class="input-group-addon">
			                      		<i class="fa fa-clock-o"></i>
			                    	</div>
			                  	</div>
							</div>
						</div>				
					</div>
										
			</div>
		</div>
	</div>
<?php endforeach;?>
</div>
<script type="text/javascript">$(".timepicker").timepicker({showInputs: false});</script>