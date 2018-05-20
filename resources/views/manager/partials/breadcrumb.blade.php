<!-- Content Header (Page header) -->
<section class="content-header">
	<h1>
		@yield('title') 
		<small>@yield('page_content')</small>
	</h1>
	<ol class="breadcrumb">
		<li>
			<a href="{{ URL::route('main') }}">
				<i class="fa fa-dashboard"></i> Trang chủ
			</a>
		</li>
		<li class="active">@yield('title')</li>
	</ol>
</section>