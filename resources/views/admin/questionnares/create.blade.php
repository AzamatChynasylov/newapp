@extends('admin.layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Questionnare</div>

                    <div class="card-body">
                        <form action="{{route('questionnares.store')}}" method="post">
                            @csrf
                            @include('admin.questionnares.partials.form')

                            <button type="submit" class="btn btn-primary">Create Questionnare</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
