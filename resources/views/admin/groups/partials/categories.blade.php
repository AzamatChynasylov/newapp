@foreach ($categories as $category_list)
{{$category_list->id}}

  <option value="{{$category_list->id ?? ""}}"

    @isset($group->id)

      @if ($group->parent_id == $category_list->id)
        selected=""
      @endif

      @if ($group->id == $category_list->id)
        hidden=""
      @endif

    @endisset

    >
    {!! $delimiter ?? "" !!}{{$category_list->title ?? ""}}
  </option>

  @if (count($category_list->children) > 0)

    @include('admin.groups.partials.categories', [
      'categories' => $category_list->children,
      'delimiter'  => ' - ' . $delimiter
    ])

  @endif
@endforeach