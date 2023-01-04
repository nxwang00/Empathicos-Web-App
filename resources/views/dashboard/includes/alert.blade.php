@if (Session::has('status') && (Session::get('status') == 'info'))
<div class="alert alert-info alert-dismissible fade show" role="alert">
	<strong>Info!</strong> {{Session::get('text')}}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">×</span>
	</button>
</div>
@endif
@if (Session::has('status') && (Session::get('status') == 'message'))
<div class="alert alert-primary alert-dismissible fade show" role="alert">
	<strong>Note!</strong> {{Session::get('text')}}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">×</span>
	</button>
</div>
@endif
@if (Session::has('status') && (Session::get('status') == 'success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
	<strong>Success!</strong> {{Session::get('text')}}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">×</span>
	</button>
</div>
@endif
@if (Session::has('status') && (Session::get('status') == 'error'))
<div class="alert alert-danger alert-dismissible fade show" role="alert">
	<strong>Error!</strong> {{Session::get('text')}}
	<button type="button" class="close" data-dismiss="alert" aria-label="Close">
	<span aria-hidden="true">×</span>
	</button>
</div>
@endif