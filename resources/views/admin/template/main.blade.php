<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
	<title>@yield('title','default')| Panel de Administación</title>
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.css')}}">
	<link rel="stylesheet" href="{{asset('assets/chosen/chosen.css')}}">

</head>
<body class="admin-body">
@include('admin.template.partials.nav')
<section class="section-admin">
<div class="panel panel-default">
<div class="panel-heading">
<h3 class="panel-title">@yield('title')</h3>
</div>
<div class="panel-body">
	
    @include('flash::message')
  @if(count($errors)>0)
    @include('admin.template.partials.errors')
    @endif
	@yield('content')
	</div>
	
	<script src="{{asset('assets/js/jquery-2.2.4.js')}}"></script>
	<script src="{{asset('assets/js/bootstrap.js')}}"></script>
	<script src="{{asset('assets/chosen/chosen.jquery.js')}}"></script>
	

</section>
@yield('js')
</body>
</html>