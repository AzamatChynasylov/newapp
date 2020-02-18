@extends('layouts.app')

@section('content')
<div class="groups" id="groups">
	<div class="container">
		@component('admin.components.breadcrumb')
		@slot('title') Список Групп @endslot
		@slot('parent') Главная @endslot
		@slot('active') Группы @endslot
		@endcomponent
		<div class="row">
			<div class="col-md-12">
				<label for="">Группы</label>

				<select class="form-control" name="parent_id">
					<option value="0">-- Выберете Группу из списка --</option>
					@include('admin.groups.partials.categories', ['categories' => $groups])
				</select>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<br><br>
				<a class="btn btn-primary mt-5" href="{{ route('admin.group.create') }}"> Создать Группу </a>
			</div>
		</div>
	</div>
</div>
@endsection