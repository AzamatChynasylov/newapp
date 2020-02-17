@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <a href="{{route('questionnares.index')}}" class="btn btn-primary">Questionnares</a>
                </div>
            </div>
        </div>
        <div class="col-md-8 mt-4">
            <div class="card">
                <div class="card-header">Vue to Blade</div>
                <div class="card-body">
                    <prop-component :url="{{$url}}"></prop-component>
                </div>

            </div>
        </div>
        <div class="col-md-8 mt-4">
            <div class="card">
                <div class="card-header">Ajax Vue</div>
                <div class="card-body">
                    <ajax-component></ajax-component>
                </div>

            </div>
        </div>
        <div class="col-md-8 mt-4">
            <div class="card">
                <div class="card-header">Vue Chart 1</div>
                <div class="card-body">
                    <linechart-component></linechart-component>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
