@extends('layouts.app')

@section('content')
    <section class="content-header">
        <h1>
            Class Sheduling
        </h1>
   </section>
   <div class="content">
       @include('adminlte-templates::common.errors')
       <div class="box box-primary">
           <div class="box-body">
               <div class="row">
                   {!! Form::model($classSheduling, ['route' => ['classShedulings.update', $classSheduling->id], 'method' => 'patch']) !!}

                        @include('class_shedulings.fields')

                   {!! Form::close() !!}
               </div>
           </div>
       </div>
   </div>
@endsection