@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$questionnare->title}}</div>

                    <div class="card-body">
                        <p>{{$questionnare->purpose}}</p>

                        <a href="{{route('questionnare.question.create',[$questionnare])}}" class="btn btn-primary mb-5">Create Questions</a>

                        @forelse($questionnare->questions as $question)
                            <div class="card mb-5" >

                                <div class="card-body">
                                    <h5 class="card-title">{{$question->question}}</h5>

                                </div>
                            </div>
                        @empty
                            <p>No Questions</p>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
