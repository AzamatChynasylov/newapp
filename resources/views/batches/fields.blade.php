<div class="modal fade left" id="batch-add-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
			<div class="modal-content">
					<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-registered" aria-hidden="true"> Batches</i></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
							</button>
					</div>
					<div class="modal-body">



<!-- Batch Field -->
<div class="form-group ">
    {!! Form::label('batch', 'Batch:') !!}
    {!! Form::number('batch', null, ['class' => 'form-control']) !!}
</div>



</div>
<div class="modal-footer">
		<button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
		{!! Form::submit('Create Batch', ['class' => 'btn btn-success']) !!}
</div>
</div>
</div>
</div>
