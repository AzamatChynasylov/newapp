<label for="">Статус</label>
<select class="form-control form-control-lg" name="published">
	@if (isset($groups->id))
	<option value="0" @if ($groups->published == 0) selected="" @endif>Не Активна</option>
	<option value="1" @if ($groups->published == 1) selected="" @endif>Активна</option>
	@else
	<option value="0">Не Активна</option>
	<option value="1">Активна</option>
	@endif
</select>

	<div class="form-group mt-4">
    <label for="title">Название</label>
		<input type="text" class="form-control" name="title" id="title" placeholder="Название Группы" required autocomplete="off">
		@error('title')
			<small class="text-danger"> {{ $message }} </small>
		@enderror
  </div>

	<label for="">Родительская Группа</label>
	<select class="form-control" name="parent_id">
		<option value="0">-- без родительской Группы --</option>
		@include('admin.groups.partials.categories', ['categories' => $groups])
	</select>

	<div class="form-group mt-4">
		<label for="Level">Уровень группы</label>
		<input type="text" class="form-control" id="Level" placeholder="Уровень группы" autocomplete="off">
	</div>
<hr />

<input class="btn btn-primary" type="submit" value="Сохранить">