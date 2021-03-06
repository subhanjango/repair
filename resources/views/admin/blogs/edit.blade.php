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
								<form class="col-sm-12" method="{{$Method}}" action="{{$Action}}" enctype="multipart/form-data">
									{{csrf_field()}}
									<div class="form-group">
										<label>Blog Name</label>
										<input type="text" name="blog_name" class="form-control" value="{{$data->blog_name}}" placeholder="Enter Name" required>
									</div>
									<div class="form-group">
										<label>Blog Content</label>
										<textarea name="blog_content"style="width:100%" rows="10">{{$data->blog_content}}</textarea>
									</div>
									<div class="form-group">

										<input type="hidden" name="do_post" value="1">
										<input type="hidden" name="current" value="{{ $data->id }}">
										<label>Featured Image</label>
										<input type="file" name="blog_image" class="form-control" placeholder="Enter domain">
                                        <img style="width:50%" src="{{ url('images\\'.$data->blog_image.'') }}">
									</div>
									<div class="reset-button">
										<input type="reset" class="btn btn-warning" value="Reset">
										<input type="submit" class="btn btn-add" value="Save">
									</div>
								</form>
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