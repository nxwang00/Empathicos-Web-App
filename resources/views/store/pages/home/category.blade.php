@extends('store.layouts.master')
@section('title', '| Home')
@section('page-css-link')
@endsection
@section('page-css') @endsection
@section('main-content')
<!-- Page Container -->
<div class="pagecnt-in">
	<div class="container">
		
		<div class="imgntab-wrap">
       		@if (!empty($template))
				@switch($template->field)
				    @case('2')
		        			@include('store.pages.home.templates.template-second')
				        @break
				    @case('3')
		        			@include('store.pages.home.templates.template-third')
				        @break
				    @case('4')
		        			@include('store.pages.home.templates.template-fourth')
				        @break
				    @case('5')
		        			@include('store.pages.home.templates.template-fifth')
				        @break
				    @case('6')
		        			@include('store.pages.home.templates.template-sixth')
				        @break
				    @default
		    			@include('store.pages.home.templates.template-first')
				@endswitch
			@endif
		</div>
	</div>
</div>
<!-- Page Container -->
@endsection
@section('page-js-link')
@endsection
@section('page-js')
@endsection