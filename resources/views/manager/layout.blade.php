<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Quản lý | @yield('title')</title>
		<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
		<link rel="shortcut icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon">
		<link rel="icon" href="{{ asset('image/favicon.ico') }}" type="image/x-icon">
		@include('manager.assets.css')
		@yield('css')
	</head>

    <body class="hold-transition skin-blue sidebar-mini">
    	<div class="wrapper">
    		@include('manager.partials.header')

			@if($user->inRole(config('constant.roles.admin')))
    			@include('manager.partials.sidebar.admin')
			@elseif($user->inRole(config('constant.roles.mod')))
				@include('manager.partials.sidebar.mod')
			@elseif($user->inRole(config('constant.roles.staff')))
				@include('manager.partials.sidebar.staff')
			@else
				@include('manager.partials.sidebar.shop')
			@endif
    		<div class="content-wrapper">
    			@include('manager.partials.breadcrumb')
				@include('manager.partials.notification')
    			@yield('content')
    		</div>
    
    		@include('manager.partials.footer')
    		@include('manager.partials.control_sidebar')
    	</div>
    	
    	@include('manager.assets.js')
    	@yield('script')
    </body>
</html>
