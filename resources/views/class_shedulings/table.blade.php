<div class="table-responsive">
    <table class="table" id="classShedulings-table">
        <thead>
            <tr>
                <th>Course Id</th>
        <th>Level Id</th>
        <th>Shift Id</th>
        <th>Classroom Id</th>
        <th>Batch Id</th>
        <th>Day Id</th>
        <th>Time Id</th>
        <th>Teacher Id</th>
        <th>Semester Id</th>
        <th>Start Time</th>
        <th>End Time</th>
        <th>Schedule Status</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classShedulings as $classSheduling)
            <tr>
                <td>{{ $classSheduling->course_id }}</td>
            <td>{{ $classSheduling->level_id }}</td>
            <td>{{ $classSheduling->shift_id }}</td>
            <td>{{ $classSheduling->classroom_id }}</td>
            <td>{{ $classSheduling->batch_id }}</td>
            <td>{{ $classSheduling->day_id }}</td>
            <td>{{ $classSheduling->time_id }}</td>
            <td>{{ $classSheduling->teacher_id }}</td>
            <td>{{ $classSheduling->semester_id }}</td>
            <td>{{ $classSheduling->start_time }}</td>
            <td>{{ $classSheduling->end_time }}</td>
            <td>{{ $classSheduling->schedule_status }}</td>
                <td>
                    {!! Form::open(['route' => ['classShedulings.destroy', $classSheduling->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classShedulings.show', [$classSheduling->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('classShedulings.edit', [$classSheduling->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
