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
