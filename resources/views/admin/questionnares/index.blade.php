@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Questionnare Page</div>

                    <div class="card-body">
                        <a href="{{route('questionnares.create')}}" class="btn btn-primary mb-5">Create Questionnare</a>

                        @forelse($questionnares as $questionnare)
                            <div class="card" >
                                <div class="card-header">
                                    <h5 class="card-title">{{$questionnare->title}}</h5>
                                </div>

                                <div class="card-body">

                                    <p class="card-text">{{$questionnare->purpose}}</p>
                                    <a href="{{route('questionnares.show', $questionnare)}}" class="btn btn-primary">Go to Questionnnare</a>
                                </div>
                            </div>
                        @empty
                            <p>No Quewsstionnares</p>
                        @endforelse

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
