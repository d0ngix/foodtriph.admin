<?php 
debug(count($arrOrders));
debug($arrOrders);
?>
<div class="box">
	<div class="box-header">
    	<h3 class="box-title">There are <strong><?=count($arrOrders)?></strong> <?=$title?></h3>
	</div>
	<!-- /.box-header -->
	<div class="box-body">
		
		<?php if (count($arrOrders)):?>	
		<table id="<?=$tableId?>" class="table table-bordered table-striped">
			<thead>
				<tr>
					<th>User Details</th>
					<th>Order Details</th>
					<th>Order Items</th>
					<th>Status</th>
					<th>Actions</th>
				</tr>
			</thead>
			<tbody>
				                
				<tr>
					<td>Trident</td>
					<td>Internet
                    Explorer 4.0
					</td>
					<td>Win 95+</td>
					<td> 4</td>
					<td>X</td>
				</tr>
                
              </table>
              <?php endif;?>
              
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
          
<script>
  $(function () {
    $('#<?=$tableId?>').DataTable();
  });
</script>          