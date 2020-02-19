<div class="modal fade left" id="add-course" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
	<div class="modal-dialog modal-notify modal-ms modal-right modal-success" role="document">
			<div class="modal-content">
					<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel"><i class="fa fa-plus-circle" aria-hidden="true"> Course</i></h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
									<span aria-hidden="true">&times;</span>
							</button>
					</div>
					<div class="modal-body">


<!-- Course Name Field -->
<div class="form-group ">
    {!! Form::label('course_name', 'Course Name:') !!}
    {!! Form::text('course_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Code Field -->
<div class="form-group ">
    {!! Form::label('course_code', 'Course Code:') !!}
    {!! Form::text('course_code', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Description Field -->
<div class="form-group">
    {!! Form::label('course_description', 'Course Description:') !!}
    {!! Form::textarea('course_description', null, ['class' => 'form-control']) !!}
</div>

<!-- Course Status Field -->
<div class="form-group ">
    {!! Form::label('course_status', 'Course Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('course_status', 0) !!}
        {!! Form::checkbox('course_status', '1', null) !!}
    </label>
</div>


<!-- Submit Field -->
<div class="form-group">
    {!! Form::submit('Create Course', ['class' => 'btn btn-primary']) !!}
    <button type="button" class="btn btn-warning" data-dismiss="modal">Close</button>
</div>

</div>

</div>
</div>
</div>
