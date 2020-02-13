@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Question</div>

                    <div class="card-body">
                        <form action="{{route('questionnare.question.store',[$questionnare])}}" method="post">
                            @csrf
                            @include('admin.questions.partials.form')

                            <button type="submit" class="btn btn-primary">Create Question</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
