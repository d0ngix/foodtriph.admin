<?php 
if(empty($gridCol)) $gridCol = 3;
if(empty($title)) $title = '{title}';
if(empty($count)) $count = '{count}';
if(empty($bgColor)) $bgColor = 'green';
?>
<div class="col-md-<?=$gridCol?>">
	<!-- small box -->
    <div class="small-box bg-<?=$bgColor?>">
    	<div class="inner">
        	<h3><?=$count?></h3>
			<p><?=$title?></p>
		</div>
		<div class="icon">
			<i class="ion ion-bag"></i>
		</div>
		<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
	</div>
</div>   
