<li class="treeview">
	<a href="#">
		<i class="fa fa-dashboard"></i>
		<span>General</span>
		<span class="pull-right-container">
			<i class="fa fa-angle-left pull-riht"></i>
		</span>
	</a>
	<ul class="treeview-menu">
		<li class="{{ Request::is('users*') ? 'active' : ''}}">
			<a href="{{ route('users.index') }}"><i class="fa fa-edit"></i><span>Users</span></a>
		</li>
</ul>
</li>

<li class="{{ Request::is('roles*') ? 'active' : ''}}">
    <a href="{{ route('roles.index') }}"><i class="fa fa-edit"></i><span>Roles</span></a>
</li>


<li class="{{ Request::is('courses*') ? 'active' : ''}}">
	<a href="{{ route('courses.index') }}"><i class="fa fa-edit"></i><span>Courses</span></a>
</li>


<li class="{{ Request::is('batches*') ? 'active' : ''}}">
	<a href="{{ route('batches.index') }}"><i class="fa fa-edit"></i><span>Batches</span></a>
</li>
