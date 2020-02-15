@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{$questionnare->title}}</div>

                    <div class="card-body">
                        <p>{{$questionnare->purpose}}</p>

                        <a href="{{route('questionnare.question.create',[$questionnare])}}" class="btn btn-primary ">Create Questions</a>
                        <a href="{{route('survey',[$questionnare,Str::slug($questionnare->title)])}}" class="btn btn-primary">Take Survey</a>

                        @forelse($questionnare->questions as $question)
                            <div class="card mt-5 p-4" >
                                <div class="card-head">
                                    <h5 class="card-title">{{$question->question}}</h5>
                                </div>
                                <div class="card-body">
                                    <ul class="list-group">
                                        @foreach ($question->answers as $answer)
                                            <li class="list-group-item d-flex justify-content-between" >
                                                <div class="">{{$answer->answer}}</div>
                                                @if ($answer->responses->count()>0)
                                                <div class="">{{intval(($answer->responses->count()*100/$question->responses->count()))}}%</div>

                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                                <div class="card-food">
                                <form onsubmit="if(confirm('Are you sure?')){return true}else{return false}" action="{{route('questionnare.question.delete',[$questionnare,$question])}}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">Delete Question</button>
                                </form>
                                    
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
