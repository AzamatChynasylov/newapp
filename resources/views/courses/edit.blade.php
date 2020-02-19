@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Course
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($course, ['route' => ['courses.update', $course->course_id], 'method' => 'patch']) !!}

                        
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
{!! Form::submit('Update Course', ['class' => 'btn btn-primary']) !!}

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection