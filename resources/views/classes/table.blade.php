<div class="table-responsive">
    <table class="table" id="classes-table">
        <thead>
            <tr>
                <th>Class Name</th>
        <th>Class Code</th>
                <th colspan="3">Action</th>
            </tr>
        </thead>
        <tbody>
        @foreach($classes as $class)
            <tr>
                <td>{{ $class->class_name }}</td>
            <td>{{ $class->class_code }}</td>
                <td>
                    {!! Form::open(['route' => ['classes.destroy', $class->id], 'method' => 'delete']) !!}
                    <div class='btn-group'>
                        <a href="{{ route('classes.show', [$class->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-eye-open"></i></a>
                        <a href="{{ route('classes.edit', [$class->id]) }}" class='btn btn-default btn-xs'><i class="glyphicon glyphicon-edit"></i></a>
                        {!! Form::button('<i class="glyphicon glyphicon-trash"></i>', ['type' => 'submit', 'class' => 'btn btn-danger btn-xs', 'onclick' => "return confirm('Are you sure?')"]) !!}
                    </div>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
