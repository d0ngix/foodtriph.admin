<!-- Modal -->
<div class="modal fade" id="<?=$id?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog  <?=@$size?>" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel"><?=$modalTitle ?></h4>
      </div>
      <div class="modal-body">
			<div title="Ajax Request" class="row ajax " >
				<div class="col-md-12">
					<i class="fa fa-spin fa-refresh"></i>&nbsp; Loading please hold ...
				</div>
          	</div>
      </div>
<!--       <div class="modal-footer"> -->
<!--         <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
<!--         <button type="button" class="btn btn-primary">Save changes</button> -->
<!--       </div> -->
    </div>
  </div>
</div>
