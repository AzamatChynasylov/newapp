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

{{--                        @forelse($questionnares as $questionnare)--}}
{{--                            <div class="card" >--}}

{{--                                <div class="card-body">--}}
{{--                                    <h5 class="card-title">{{$questionnare->title}}</h5>--}}
{{--                                    <p class="card-text">{{$questionnare->purpose}}</p>--}}
{{--                                    <a href="{{route('questionnares.show', $questionnare)}}" class="btn btn-primary">Go to Questions</a>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                        @empty--}}
{{--                            <p>No Quewsstionnares</p>--}}
{{--                        @endforelse--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
