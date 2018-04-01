@if (Auth::guard('web')->check())
	<p>
		You are log in as <strong>User</strong>
	</p>
{{-- @else
	<p>
		You are log out as <strong>User</strong>
	</p> --}}
@endif
@if (Auth::guard('admin')->check())
	<p>
		 <strong>Admin Components</strong>
	</p>
{{-- @else
	<p>
		You are log out as <strong>Admin</strong>
	</p> --}}
@endif