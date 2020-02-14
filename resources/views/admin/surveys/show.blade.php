@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{route('survey',[$questionnare, Str::slug($questionnare->title)])}}" method="POST">
                    @csrf
                    <div class="card">
                        <div class="card-header">{{$questionnare->title}}</div>

                        <div class="card-body">

                            @forelse($questionnare->questions as $key=>$question)
                                <div class="card mt-5" >
                                    <div class="card-header">
                                        <h5 class="card-title"><b class="pr-2">{{$key+1}}</b>{{$question->question}}</h5>
                                    </div>
                                    <div class="card-body">
                                        @error('responses.'.$key.'.answer_id')
                                        <small class="text-danger">{{$message}}</small>
                                        @enderror
                                        @foreach($question->answers as $answer)

                                            <ul class="list-group">
                                                <label for="answer{{$answer->id}}">
                                                    <li class="list-group-item">
                                                        <input type="radio" name="responses[{{$key}}][answer_id]" id="answer{{$answer->id}}" value="{{$answer->id}}" {{(old('responses.'.$key.'.answer_id') == $answer->id) ? 'checked' : ''}}>
                                                        {{$answer->answer}}

                                                    </li>
                                                </label>
                                            </ul>
                                        @endforeach
                                            <input type="hidden" name="responses[{{$key}}][question_id]" value="{{$question->id}}">
                                    </div>
                                </div>
                            @empty
                                <p>No Questions</p>
                            @endforelse

                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h3>Your information</h3>
                        </div>
                        <div class="card-body">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" name="survey[name]" class="form-control" id="name" aria-describedby="nameHelp" value="{{old('name')}}" placeholder="Enter Name">
                                <small id="nameHelp" class="form-text text-muted">Please Enter Your Name</small>
                                @error('survey.name')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="email">Emai</label>
                                <input type="email" name="survey[email]" class="form-control" id="email" aria-describedby="emailHelp" value="{{old('email')}}" placeholder="Enter Email">
                                <small id="emailHelp" class="form-text text-muted">Please Enter Your Email</small>
                                @error('survey.email')
                                <small class="text-danger">{{$message}}</small>
                                @enderror
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary">Survey</button>
                </form>

            </div>
        </div>
    </div>
@endsection
