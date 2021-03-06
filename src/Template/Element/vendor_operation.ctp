<?php 
use Cake\Utility\Hash;

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
//Setup default time for start/end on each day if NO defined time 
if (empty($arrOperatingHours)) {
	for ( $x = 1; $x <= 7; $x++ ) 
		$arrOperatingHours[] = [ strtolower(date("D",mktime(0,0,0,3,28,2009)+$x * (3600*24))) => ["start"=>"10:00 AM","end"=>"10:00 PM"] ];  
}

//setup the start/end time for each day
foreach ( $arrOperatingHours as $v ) extract($v);

$arrOperation = [
	['label'=>'Monday','alias'=>'mon'],
	['label'=>'Tuesday','alias'=>'tue'],
	['label'=>'Wednesday','alias'=>'wed'],
	['label'=>'Thursday','alias'=>'thu'],
	['label'=>'Friday','alias'=>'fri'],
	['label'=>'Staturday','alias'=>'sat'],
	['label'=>'Sunday','alias'=>'sun'],
];
$counter = 0;
?>
<?php
$arrDays =  (array)json_decode($vendorAddress->operating_hours,true);
$arrDays = Hash::combine($arrDays, '{n}', '{n}.{s}');
debug($arrDays );
// foreach (json_decode($vendorAddress->operating_hours,true) as $v ) {
// 	$arrDays[]
// }
	debug(json_decode($vendorAddress->operating_hours));
	
?>
<?php foreach ($arrOperation as $value):$counter++;?>
<?php ob_start(); ?>

	<div class="col-sm-4">
		<div class="box box-info">
			<div class="box-header">
				<h3 class="box-title">
					<label><input type="hidden" class="minimal" name="op[<?=$value['alias']?>]" value="<?=$value['alias']?>"> <?= $value['label']?></label>
				</h3>
			</div>
			<div class="box-body">
				
					<div class="col-xs-4"><span>Start</span></div>
					<div class="col-xs-8">
						<div class="bootstrap-timepicker">
							<div class="form-group">
								<div class="input-group">
									<input type="text" class="form-control timepicker" name="op[<?=$value['alias']?>][start]" value="<?=${$value['alias']}['start'] ?>">
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
									<input type="text" class="form-control timepicker" name="op[<?=$value['alias']?>][end]" value="<?=${$value['alias']}['end'] ?>">
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
<?php $strHtml = ob_get_clean()?>
<?php
	if($counter === 1) echo '<div class="row">';
		
	
	echo $strHtml;
		
	if (!($counter % 3)) echo '</div><div class="row">';

?>	
<?php endforeach;echo '</div>';?>
<script type="text/javascript">$(".timepicker").timepicker({showInputs: false,time: 10:30 pm});</script>