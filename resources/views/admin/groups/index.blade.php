@extends('admin.layouts.app')

@section('content')
	<div class="groups" id="groups">
		<div class="container">
			@component('admin.components.breadcrumb')
				@slot('title') Список Групп @endslot
				@slot('parent') Главная @endslot
				@slot('active') Группы @endslot
			@endcomponent
			<label for="">Родительская Группа</label>
			<select class="form-control" name="parent_id">
				<option value="0">-- без родительской Группы --</option>
				@include('admin.groups.partials.categories', ['categories' => $groups])
			</select>
			<div class="row">
				<div class="col">
				<a  class="btn btn-primary" href="{{ route('admin.group.create') }}"> Создать Группу </a>
				</div>
			</div>
		</div>
	</div>
@endsection