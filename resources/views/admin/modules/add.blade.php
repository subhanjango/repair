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
<label>Select Your Service</label>
<select name="service_id" class="form-control">
<option value="">Select Service</option>
</select>
</div>
<div class="form-group">
<label>Module Title</label>
<input type="text" name="module_title" class="form-control">
</div>
<div class="form-group">
<label>Module Description</label>
<input type="text" name="module_description" class="form-control">
</div>
<div class="form-group thumbnail btn-primary">
<h3 class="text-center">Module Options</h3>
<label>Title</label>
<input type="text" name="title[]" class="form-control">
<label>Image</label>
<input type="file" name="image[]" class="form-control">
<label>Cost</label>
<input type="number" name="cost[]" class="form-control">
<br>
<a id="add_sub_options"><span class="btn btn-info">Add Sub Options</span></a>
<span id="sub_options"></span>
</div>

<div class="reset-button">
<a id="add_options"><span class="btn btn-success">Add Options</span></a>
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