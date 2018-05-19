<aside class="main-sidebar">
	<section class="sidebar">
		<div class="user-panel">
			<div class="pull-left image">
				<img src="{{ asset('manager/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
			</div>
			<div class="pull-left info">
				<p>{{ $user->first_name . ' ' . $user->last_name }}</p>
				<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
			</div>
		</div>
		
		<!-- search form -->
		<form action="#" method="get" class="sidebar-form">
			<div class="input-group">
				<input type="text" name="q" class="form-control" placeholder="Search..."> 
					<span class="input-group-btn">
					<button type="submit" name="search" id="search-btn" class="btn btn-flat">
						<i class="fa fa-search"></i>
					</button>
				</span>
			</div>
		</form>

		<ul class="sidebar-menu" data-widget="tree">

			<li class="header">MỤC LỤC</li>

			<li class="active treeview">
    			<a href="{{ URL::route('main') }}"> 
    				<i class="fa fa-dashboard"></i>
    				<span> Tổng quan</span>
    			</a>
			</li>

			<li class="treeview">
				<a href="#">
					<i class="fa fa-share"></i>
					<span>Quản lý sản phẩm</span>
					<span class="pull-right-container">
              			<i class="fa fa-angle-left pull-right"></i>
            		</span>
				</a>
				<ul class="treeview-menu">
					<li class="treeview">
						<a href="{{ route('') }}">
							<i class="fa fa-heartbeat"></i> Danh sách sản phẩm
							<span class="pull-right-container">
								<small class="label pull-right bg-blue">12</small>
							</span>
						</a>
					</li>

					<li class="treeview">
						<a href="#">
							<i class="fa fa-credit-card"></i> Thêm mới sản phẩm
						</a>
					</li>
				</ul>
			</li>

			<li class="treeview">
				<a href="#">
					<i class="fa fa-bitcoin"></i>
					<span> Quản lý kho</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
					</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="{{ URL::route('main') }}">
							<i class="fa fa-circle-o"></i> Nhập kho
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-credit-card"></i> Xuất kho
						</a>
					</li>
					<li>
						<a href="#">
							<i class="fa fa-credit-card"></i> Tồn kho
						</a>
					</li>
				</ul>
			</li>

			<li class="treeview">
				<a href="{{ URL::route('main') }}">
					<i class="fa fa-calendar"></i>
					<span> Quản lý khuyến mãi</span>
					<span class="pull-right-container">
						<i class="fa fa-angle-left pull-right"></i>
        			</span>
				</a>
				<ul class="treeview-menu">
					<li>
						<a href="pages/forms/general.html">
							<i class="fa fa-circle-o"></i> Danh sách khuyến mãi
						</a>
					</li>
					<li>
						<a href="pages/forms/general.html">
							<i class="fa fa-circle-o"></i> Thêm mới khuyến mãi
						</a>
					</li>
				</ul>
			</li>

			<li>
				<a href="#"> <i class="fa fa-usd"></i> 
					<span> Quản lý đơn hàng</span>
					<span class="pull-right-container">
						<small class="label pull-right bg-green">new</small>
					</span>
        		</a>
			</li>

			<li>
				<a href="#">
					<i class="fa fa-users"></i>
					<span> Tin nhắn</span>
					<span class="pull-right-container">
						<span class="label label-primary pull-right">4</span>
					</span>
				</a>
			</li>

			<li>
				<a href="#">
					<i class="fa fa-laptop"></i>
					<span> Thanh toán</span>
				</a>
			</li>

			<li>
				<a href="#"> 
					<i class="fa fa-object-group"></i> 
					<span> Liên hệ</span>
				</a>
			</li>
			
			<li>
				<a href="pages/calendar.html"> 
					<i class="fa fa-cubes"></i> 
					<span> Thông báo</span>
					<span class="pull-right-container"> 
						<small class="label pull-right bg-red">3</small> 
						<small class="label pull-right bg-blue">17</small>
					</span>
				</a>
			</li>
			
		</ul>
	</section>
</aside>