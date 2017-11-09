@include('admin.shared.head')

<body class="hold-transition sidebar-mini">
	<!--preloader-->
	<div id="preloader">
		<div id="status"></div>
	</div>
	<!-- Site wrapper -->
	<div class="wrapper">
		@include('admin.shared.header')
		<!-- =============================================== -->
		@include('admin.shared.sidebar')
		<!-- Content Header (Page header) -->
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<div class="header-icon">
					<i class="fa fa-gears"></i>
				</div>
				<div class="header-title">
					<h1>{{ $Module }}</h1>
					<small>{{ $Title }}</small>
				</div>
			</section>
			<!-- Main content -->
			<section class="content">
				<div class="row">
					<!-- Form controls -->
					<div class="col-sm-12">
						<div class="panel panel-bd lobidrag">
							<div class="panel-heading">
								<div class="btn-group" id="buttonexport">
									<a href="#">
										<h4>{{ $Title }}</h4>
									</a>
								</div>
							</div>
							<div class="panel-body">
								@if ($errors->any())
								<div class="alert alert-danger">
									<ul>
										@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
										@endforeach
									</ul>
								</div>
								@endif @if (\Session::has('success'))
								<div class="alert alert-success">

									<li>{{ \Session::get('success') }}</li>

								</div>
								@endif
								<div class="table-responsive">
									<table id="dataTable" class="table table-bordered table-striped table-hover">
										<thead>
											<tr class="info">
												<th>Service Name</th>
												<th>Service About</th>
												<th>Image</th>
												<th>Action</th>

											</tr>
										</thead>
										<tbody>
											@foreach($Data as $data)
											<tr>
												<td>{{ $data->service_name }}</td>
												<td>{!! substr($data->service_about, 0, 100) !!}</td>
												<td>
													<img style="width:50px" src="{{ url('images\\'.$data->service_image.'') }}">
												</td>
												<td>
													<a href="{{url('admin/'.strtolower($Title).'/edit/'.$data->id.'')}}">
														<button type="button" class="btn btn-primary btn-outline w-md m-b-5">Edit</button>
													</a>
													<a href="{{url('admin/'.strtolower($Title).'/delete/'.$data->id.'')}}">
														<button type="button" class="btn btn-danger btn-outline w-md m-b-5">Delete</button>
													</a>
												</td>

											</tr>
											@endforeach
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
		@include('admin.shared.footer')
	</div>
	@include('admin.shared.scripts')
</body>

<!-- Mirrored from crm.thememinister.com/crmAdmin/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Oct 2017 19:45:38 GMT -->

</html>