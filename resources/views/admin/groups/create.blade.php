@extends('layouts.app')

@section('content')

<div class="container">
	@component('admin.components.breadcrumb')
		@slot('title') Создание Группы @endslot
		@slot('parent') Главная @endslot
		@slot('active') Группы @endslot
			
	@endcomponent

	<form action="{{ route('admin.group.store') }}" method='POST' >
		@csrf
		 {{-- Form include --}}
		 @include('admin.groups.partials.form')

	</form>
</div>
		
@endsection