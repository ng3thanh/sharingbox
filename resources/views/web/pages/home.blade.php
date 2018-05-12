@extends('admin.layout') @section('title', 'Dashboard')

@section('content')

<!-- Main content -->
<section class="content">
	<!-- Small boxes (Stat box) -->
	<div class="row">
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-aqua">
				<div class="inner">
					<h3>{{ $totalCoins }}</h3>
					@if(true)
					<p>Tổng số coin</p>
					<p>Giá bitcoin tại thời điểm mới nhất</p>
					@else
					<p>Coins Down</p>
					@endif
				</div>
				<div class="icon">
					<i class="ion @if(true) ion-happy-outline @else ion-sad-outline @endif"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-green">
				<div class="inner">
					<h3>
						53<sup style="font-size: 20px">%</sup>
					</h3>

					<p>% công việc đã hoàn thành</p>
				</div>
				<div class="icon">
					<i class="ion ion-stats-bars"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-yellow">
				<div class="inner">
					<h3>44</h3>

					<p>Số tiền dương</p>
				</div>
				<div class="icon">
					<i class="ion ion-person-add"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
		<div class="col-lg-3 col-xs-6">
			<!-- small box -->
			<div class="small-box bg-red">
				<div class="inner">
					<h3>65</h3>

					<p>Số ngày còn lại đến mục tiêu gần nhất</p>
				</div>
				<div class="icon">
					<i class="ion ion-pie-graph"></i>
				</div>
				<a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
			</div>
		</div>
		<!-- ./col -->
	</div>
	<!-- /.row -->
	<!-- Main row -->
	<div class="row">
		<div class="col-lg-12">
			<div class="box">
				<div class="box-header with-border">
					<h3 class="box-title">Danh mục task cần làm</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
						</button>
						<div class="btn-group">
							<button type="button" class="btn btn-box-tool dropdown-toggle" data-toggle="dropdown">
								<i class="fa fa-wrench"></i></button>
							<ul class="dropdown-menu" role="menu">
								<li><a href="#">Action</a></li>
								<li><a href="#">Another action</a></li>
								<li><a href="#">Something else here</a></li>
								<li class="divider"></li>
								<li><a href="#">Separated link</a></li>
							</ul>
						</div>
						<button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
					</div>
				</div>
				<!-- /.box-header -->

				<div class="box-body">
					+ Version 1:<br><br>

					-- Tạo giao diện đơn giản (OK)<br>
					-- Lấy thông tin Bitcoin trên Bittrex (Raw)<br><br>

					+ Version 2: 04/02/2018<br><br>

					-- Đăng nhập admin (Raw)<br><br>

					+ Version 3.0: Cá nhân<br><br>

					-- Ghi chú: Các note cá nhân (Inprogress) <br>
					-- Nhật ký cá nhân: Viết nhật ký hàng ngày (bằng tiếng anh)<br>
					-- User profile. <br><br>

					+ Version 3.1: Cá nhân<br><br>

					-- Tiền bạc: Thu + chi + cho vay + phân chia các khoản được phép tiêu<br>
					-- Định hướng: Mục tiêu dài hạn + mục tiêu ngắn hạn<br>
					-- Đầu tư: Các khoản đầu tư + theo dõi diễn biến đầu tư<br><br>

					+ Version 3.2: Cá nhân<br><br>

					-- Theo dõi sức khỏe: Theo dõi các thông số cá nhân (đính kèm ảnh: hàng tháng)<br>
					-- Chế độ ăn: 1. Tuyển tập thức ăn chứa calo + 2. Tính toán lượng calo cần thiết cho bản thân<br>
					-- Gym: Bài tập gym + theo dõi hàng ngày<br><br>

					+ Version 3.3: Cá nhân<br><br>

					-- Sách báo: Sách đã đọc + đã mua + Nhận xét về sách (comment = tiếng anh)<br>
					-- Học tập: Kế hoạch học tập + theo dõi hàng ngày<br><br>

					+ Version 4:<br><br>

					-- Theo dõi từng Coin: <br>
					-- Dự đoán Coin<br><br>

					+ Version 5:<br><br>

					-- Quản lý tài khoản: Đối với admin<br>
					-- Quản lý quyền: Đối với Admin<br><br>

					+ Version 6:<br><br>

					--Quản lý lý lịch: - Cho phép hiển thị và không hiển thị gì trên màn hình bên ngoài<br>
					--Theo dõi ai đó: Thông báo ngày sinh + facebook của ai đó để chúc mừng.<br><br>

					+ Version 7:<br><br>

					-- Setting website: Setting website<br>
					-- Theo dõi website: Theo dõi những ai truy cập<br><br>

					+ Version 8:<br><br>

					-- Phân quyền: 3 mốc Amin (All) + Mod (Block user) + User<br><br>

					+ Version 9: <br><br>

					-- Tạo lịch<br>
					-- Chat<br>
					-- Thông tin người dùng<br>
					-- Thông báo<br><br>

				</div>
			</div>
			<!-- /.box -->
		</div>
		<!-- /.col -->

		<!-- Left col -->
		<section class="col-lg-7 connectedSortable">
		
			<!-- Custom tabs (Charts with tabs)-->
			<div class="nav-tabs-custom">

				<!-- Tabs within a box -->
				<ul class="nav nav-tabs pull-right">
					@foreach($lowestCoins as $key => $coin)
					<li class="@if(array_search(head($lowestCoins), $lowestCoins) == $key) active @endif">
						<a href="#lowest-chart-{{ $key }}" data-toggle="tab">{{ $key }}</a>
					</li>
					@endforeach
					<li class="pull-left header"><i class="fa fa-bitcoin"></i> Lowest Coin</li>
				</ul>
				<div class="tab-content no-padding">
					<!-- Morris chart - Sales -->
					@foreach($lowestCoins as $key => $coin)
					<div class="chart tab-pane @if(array_search(head($lowestCoins), $lowestCoins) == $key) active @endif" id="lowest-chart-{{ $key }}" style="position: relative; height: 300px;"></div>
					@endforeach
				</div>
			</div>
			<!-- /.nav-tabs-custom -->

			<!-- Custom tabs (Charts with tabs)-->
			<div class="nav-tabs-custom">

				<!-- Tabs within a box -->
				<ul class="nav nav-tabs pull-right">
					@foreach($highestCoins as $key => $coin)
					<li class="@if(array_search(head($highestCoins), $highestCoins) == $key) active @endif">
						<a href="#highest-chart-{{ $key }}" data-toggle="tab">{{ $key }}</a>
					</li>
					@endforeach
					<li class="pull-left header"><i class="fa fa-bitcoin"></i> Highest Coin</li>
				</ul>
				<div class="tab-content no-padding">
					<!-- Morris chart - Sales -->
					@foreach($highestCoins as $key => $coin)
					<div class="chart tab-pane @if(array_search(head($highestCoins), $highestCoins) == $key) active @endif" id="highest-chart-{{ $key }}" style="position: relative; height: 300px;"></div>
					@endforeach
				</div>
			</div>
			<!-- /.nav-tabs-custom -->
			
			<!-- Chat box -->
			<div class="box box-success">
				<div class="box-header">
					<i class="fa fa-comments-o"></i>

					<h3 class="box-title">Chat</h3>

					<div class="box-tools pull-right" data-toggle="tooltip"
						title="Status">
						<div class="btn-group" data-toggle="btn-toggle">
							<button type="button" class="btn btn-default btn-sm active">
								<i class="fa fa-square text-green"></i>
							</button>
							<button type="button" class="btn btn-default btn-sm">
								<i class="fa fa-square text-red"></i>
							</button>
						</div>
					</div>
				</div>
				<div class="box-body chat" id="chat-box">
					<!-- chat item -->
					<div class="item">
						<img src="dist/img/user4-128x128.jpg" alt="user image"
							class="online">

						<p class="message">
							<a href="#" class="name"> <small class="text-muted pull-right"><i
									class="fa fa-clock-o"></i> 2:15</small> Mike Doe
							</a> I would like to meet you to discuss the latest news about
							the arrival of the new theme. They say it is going to be one the
							best themes on the market
						</p>
						<div class="attachment">
							<h4>Attachments:</h4>

							<p class="filename">Theme-thumbnail-image.jpg</p>

							<div class="pull-right">
								<button type="button" class="btn btn-primary btn-sm btn-flat">Open</button>
							</div>
						</div>
						<!-- /.attachment -->
					</div>
					<!-- /.item -->
					<!-- chat item -->
					<div class="item">
						<img src="dist/img/user3-128x128.jpg" alt="user image"
							class="offline">

						<p class="message">
							<a href="#" class="name"> <small class="text-muted pull-right"><i
									class="fa fa-clock-o"></i> 5:15</small> Alexander Pierce
							</a> I would like to meet you to discuss the latest news about
							the arrival of the new theme. They say it is going to be one the
							best themes on the market
						</p>
					</div>
					<!-- /.item -->
					<!-- chat item -->
					<div class="item">
						<img src="dist/img/user2-160x160.jpg" alt="user image"
							class="offline">

						<p class="message">
							<a href="#" class="name"> <small class="text-muted pull-right"><i
									class="fa fa-clock-o"></i> 5:30</small> Susan Doe
							</a> I would like to meet you to discuss the latest news about
							the arrival of the new theme. They say it is going to be one the
							best themes on the market
						</p>
					</div>
					<!-- /.item -->
				</div>
				<!-- /.chat -->
				<div class="box-footer">
					<div class="input-group">
						<input class="form-control" placeholder="Type message...">

						<div class="input-group-btn">
							<button type="button" class="btn btn-success">
								<i class="fa fa-plus"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
			<!-- /.box (chat box) -->

			<!-- TO DO List -->
			<div class="box box-primary">
				<div class="box-header">
					<i class="ion ion-clipboard"></i>

					<h3 class="box-title">To Do List</h3>

					<div class="box-tools pull-right">
						<ul class="pagination pagination-sm inline">
							<li><a href="#">&laquo;</a></li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">&raquo;</a></li>
						</ul>
					</div>
				</div>
				<!-- /.box-header -->
				<div class="box-body">
					<!-- See dist/js/pages/dashboard.js to activate the todoList plugin -->
					<ul class="todo-list">
						<li>
							<!-- drag handle --> <span class="handle"> <i
								class="fa fa-ellipsis-v"></i> <i class="fa fa-ellipsis-v"></i>
						</span> <!-- checkbox --> <input type="checkbox" value=""> <!-- todo text -->
							<span class="text">Design a nice theme</span> <!-- Emphasis label -->
							<small class="label label-danger"><i class="fa fa-clock-o"></i> 2
								mins</small> <!-- General tools such as edit or delete-->
							<div class="tools">
								<i class="fa fa-edit"></i> <i class="fa fa-trash-o"></i>
							</div>
						</li>
						<li><span class="handle"> <i class="fa fa-ellipsis-v"></i> <i
								class="fa fa-ellipsis-v"></i>
						</span> <input type="checkbox" value=""> <span class="text">Make
								the theme responsive</span> <small class="label label-info"><i
								class="fa fa-clock-o"></i> 4 hours</small>
							<div class="tools">
								<i class="fa fa-edit"></i> <i class="fa fa-trash-o"></i>
							</div></li>
						<li><span class="handle"> <i class="fa fa-ellipsis-v"></i> <i
								class="fa fa-ellipsis-v"></i>
						</span> <input type="checkbox" value=""> <span class="text">Let
								theme shine like a star</span> <small
							class="label label-warning"><i class="fa fa-clock-o"></i> 1 day</small>
							<div class="tools">
								<i class="fa fa-edit"></i> <i class="fa fa-trash-o"></i>
							</div></li>
						<li><span class="handle"> <i class="fa fa-ellipsis-v"></i> <i
								class="fa fa-ellipsis-v"></i>
						</span> <input type="checkbox" value=""> <span class="text">Let
								theme shine like a star</span> <small
							class="label label-success"><i class="fa fa-clock-o"></i> 3 days</small>
							<div class="tools">
								<i class="fa fa-edit"></i> <i class="fa fa-trash-o"></i>
							</div></li>
						<li><span class="handle"> <i class="fa fa-ellipsis-v"></i> <i
								class="fa fa-ellipsis-v"></i>
						</span> <input type="checkbox" value=""> <span class="text">Check
								your messages and notifications</span> <small
							class="label label-primary"><i class="fa fa-clock-o"></i> 1 week</small>
							<div class="tools">
								<i class="fa fa-edit"></i> <i class="fa fa-trash-o"></i>
							</div></li>
						<li><span class="handle"> <i class="fa fa-ellipsis-v"></i> <i
								class="fa fa-ellipsis-v"></i>
						</span> <input type="checkbox" value=""> <span class="text">Let
								theme shine like a star</span> <small
							class="label label-default"><i class="fa fa-clock-o"></i> 1 month</small>
							<div class="tools">
								<i class="fa fa-edit"></i> <i class="fa fa-trash-o"></i>
							</div></li>
					</ul>
				</div>
				<!-- /.box-body -->
				<div class="box-footer clearfix no-border">
					<button type="button" class="btn btn-default pull-right">
						<i class="fa fa-plus"></i> Add item
					</button>
				</div>
			</div>
			<!-- /.box -->

			<!-- quick email widget -->
			<div class="box box-info">
				<div class="box-header">
					<i class="fa fa-envelope"></i>

					<h3 class="box-title">Quick Email</h3>
					<!-- tools box -->
					<div class="pull-right box-tools">
						<button type="button" class="btn btn-info btn-sm"
							data-widget="remove" data-toggle="tooltip" title="Remove">
							<i class="fa fa-times"></i>
						</button>
					</div>
					<!-- /. tools -->
				</div>
				<div class="box-body">
					<form action="#" method="post">
						<div class="form-group">
							<input type="email" class="form-control" name="emailto"
								placeholder="Email to:">
						</div>
						<div class="form-group">
							<input type="text" class="form-control" name="subject"
								placeholder="Subject">
						</div>
						<div>
							<textarea class="textarea" placeholder="Message"
								style="width: 100%; height: 125px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
						</div>
					</form>
				</div>
				<div class="box-footer clearfix">
					<button type="button" class="pull-right btn btn-default"
						id="sendEmail">
						Send <i class="fa fa-arrow-circle-right"></i>
					</button>
				</div>
			</div>

		</section>
		<!-- /.Left col -->
		<!-- right col (We are only adding the ID to make the widgets sortable)-->
		<section class="col-lg-5 connectedSortable">

			<!-- Map box -->
			<div class="box box-solid bg-light-blue-gradient">
				<div class="box-header">
					<!-- tools box -->
					<div class="pull-right box-tools">
						<button type="button"
							class="btn btn-primary btn-sm daterange pull-right"
							data-toggle="tooltip" title="Date range">
							<i class="fa fa-calendar"></i>
						</button>
						<button type="button" class="btn btn-primary btn-sm pull-right"
							data-widget="collapse" data-toggle="tooltip" title="Collapse"
							style="margin-right: 5px;">
							<i class="fa fa-minus"></i>
						</button>
					</div>
					<!-- /. tools -->

					<i class="fa fa-map-marker"></i>

					<h3 class="box-title">Visitors</h3>
				</div>
				<div class="box-body">
					<div id="world-map" style="height: 250px; width: 100%;"></div>
				</div>
				<!-- /.box-body-->
				<div class="box-footer no-border">
					<div class="row">
						<div class="col-xs-4 text-center"
							style="border-right: 1px solid #f4f4f4">
							<div id="sparkline-1"></div>
							<div class="knob-label">Visitors</div>
						</div>
						<!-- ./col -->
						<div class="col-xs-4 text-center"
							style="border-right: 1px solid #f4f4f4">
							<div id="sparkline-2"></div>
							<div class="knob-label">Online</div>
						</div>
						<!-- ./col -->
						<div class="col-xs-4 text-center">
							<div id="sparkline-3"></div>
							<div class="knob-label">Exists</div>
						</div>
						<!-- ./col -->
					</div>
					<!-- /.row -->
				</div>
			</div>
			<!-- /.box -->

			<!-- solid sales graph -->
			<div class="box box-solid bg-teal-gradient">
				<div class="box-header">
					<i class="fa fa-th"></i>

					<h3 class="box-title">Sales Graph</h3>

					<div class="box-tools pull-right">
						<button type="button" class="btn bg-teal btn-sm"
							data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn bg-teal btn-sm"
							data-widget="remove">
							<i class="fa fa-times"></i>
						</button>
					</div>
				</div>
				<div class="box-body border-radius-none">
					<div class="chart" id="line-chart" style="height: 250px;"></div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer no-border">
					<div class="row">
						<div class="col-xs-4 text-center"
							style="border-right: 1px solid #f4f4f4">
							<input type="text" class="knob" data-readonly="true" value="20"
								data-width="60" data-height="60" data-fgColor="#39CCCC">

							<div class="knob-label">Mail-Orders</div>
						</div>
						<!-- ./col -->
						<div class="col-xs-4 text-center"
							style="border-right: 1px solid #f4f4f4">
							<input type="text" class="knob" data-readonly="true" value="50"
								data-width="60" data-height="60" data-fgColor="#39CCCC">

							<div class="knob-label">Online</div>
						</div>
						<!-- ./col -->
						<div class="col-xs-4 text-center">
							<input type="text" class="knob" data-readonly="true" value="30"
								data-width="60" data-height="60" data-fgColor="#39CCCC">

							<div class="knob-label">In-Store</div>
						</div>
						<!-- ./col -->
					</div>
					<!-- /.row -->
				</div>
				<!-- /.box-footer -->
			</div>
			<!-- /.box -->

			<!-- Calendar -->
			<div class="box box-solid bg-green-gradient">
				<div class="box-header">
					<i class="fa fa-calendar"></i>

					<h3 class="box-title">Calendar</h3>
					<!-- tools box -->
					<div class="pull-right box-tools">
						<!-- button with a dropdown -->
						<div class="btn-group">
							<button type="button"
								class="btn btn-success btn-sm dropdown-toggle"
								data-toggle="dropdown">
								<i class="fa fa-bars"></i>
							</button>
							<ul class="dropdown-menu pull-right" role="menu">
								<li><a href="#">Add new event</a></li>
								<li><a href="#">Clear events</a></li>
								<li class="divider"></li>
								<li><a href="#">View calendar</a></li>
							</ul>
						</div>
						<button type="button" class="btn btn-success btn-sm"
							data-widget="collapse">
							<i class="fa fa-minus"></i>
						</button>
						<button type="button" class="btn btn-success btn-sm"
							data-widget="remove">
							<i class="fa fa-times"></i>
						</button>
					</div>
					<!-- /. tools -->
				</div>
				<!-- /.box-header -->
				<div class="box-body no-padding">
					<!--The calendar -->
					<div id="calendar" style="width: 100%"></div>
				</div>
				<!-- /.box-body -->
				<div class="box-footer text-black">
					<div class="row">
						<div class="col-sm-6">
							<!-- Progress bars -->
							<div class="clearfix">
								<span class="pull-left">Task #1</span> <small class="pull-right">90%</small>
							</div>
							<div class="progress xs">
								<div class="progress-bar progress-bar-green" style="width: 90%;"></div>
							</div>

							<div class="clearfix">
								<span class="pull-left">Task #2</span> <small class="pull-right">70%</small>
							</div>
							<div class="progress xs">
								<div class="progress-bar progress-bar-green" style="width: 70%;"></div>
							</div>
						</div>
						<!-- /.col -->
						<div class="col-sm-6">
							<div class="clearfix">
								<span class="pull-left">Task #3</span> <small class="pull-right">60%</small>
							</div>
							<div class="progress xs">
								<div class="progress-bar progress-bar-green" style="width: 60%;"></div>
							</div>

							<div class="clearfix">
								<span class="pull-left">Task #4</span> <small class="pull-right">40%</small>
							</div>
							<div class="progress xs">
								<div class="progress-bar progress-bar-green" style="width: 40%;"></div>
							</div>
						</div>
						<!-- /.col -->
					</div>
					<!-- /.row -->
				</div>
			</div>
			<!-- /.box -->

		</section>
		<!-- right col -->
	</div>
	<!-- /.row (main row) -->

</section>
<!-- /.content -->

@endsection @section('script')
<script type="text/javascript">
    @foreach($lowestCoins as $key => $coin)
    	var lowCoin{{ $key }} = new Morris.Area({
          element   : 'lowest-chart-{{ $key }}',
          resize    : true,
          data      : [
    		@foreach($coin as $k => $v)
          	{ time: '{{ $v['created_at'] }}', lowest: '{{ $v['lowest_price'] }}', highest: '{{ $v['highest_price'] }}' },
    		@endforeach
          ],
          xkey      : 'time',
          ykeys     : ['lowest', 'highest'],
          labels    : ['Lowest', 'Highest'],
          lineColors: ['#a0d0e0', '#3c8dbc'],
          hideHover : 'auto'
        });
    @endforeach

    @foreach($highestCoins as $key => $coin)
    	var highCoin{{ $key }} = new Morris.Area({
          element   : 'highest-chart-{{ $key }}',
          resize    : true,
          data      : [
    		@foreach($coin as $k => $v)
          	{ time: '{{ $v['created_at'] }}', lowest: '{{ $v['lowest_price'] }}', highest: '{{ $v['highest_price'] }}' },
    		@endforeach
          ],
          xkey      : 'time',
          ykeys     : ['lowest', 'highest'],
          labels    : ['Lowest', 'Highest'],
          lineColors: ['#a0d0e0', '#3c8dbc'],
          hideHover : 'auto'
        });
	@endforeach
	
    $('a[data-toggle="tab"]').on('shown.bs.tab', function(e) {
		var target = $(e.target).attr("href") // activated tab

		switch (target) {
			@foreach($lowestCoins as $key => $coin)
            case "#lowest-chart-{{ $key }}":
        		lowCoin{{ $key }}.redraw();
              	$(window).trigger('resize');
              	break;
          	@endforeach
          	@foreach($highestCoins as $key => $coin)
            case "#highest-chart-{{ $key }}":
        		highCoin{{ $key }}.redraw();
              	$(window).trigger('resize');
              	break;
          	@endforeach
      	}
    });

</script>

<script src="{{ asset('dist/js/pages/dashboard.js') }}"></script>
@endsection
