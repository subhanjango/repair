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
<input type="hidden" name="do_post" value="1">
<div class="form-group">
<label>Select Your Service</label>
<select name="service_id" class="form-control">
<option value="">Select Service</option>
@foreach($Services as $Services)
<option {{$Data[0]->service_id == $Services->id ? 'Selected' : ''}} value="{{$Services->id}}">{!! $Services->service_name !!}</option>
@endforeach
</select>
</div>
<div class="form-group">
<label>Module Title</label>
<input type="text" value="{{$Data[0]->module_title}}" name="module_title" class="form-control" required>
</div>
<div class="form-group">
<label>Module Description</label>
<input type="text" value="{{$Data[0]->module_description}}" name="module_description" class="form-control" required>
</div>
<div class="form-group">
<label>Sort Number</label>
<input type="number" value="{{$Data[0]->sort_id}}" name="sort_id" min=1  class="form-control" required>
</div>
<div class="form-group">
<label>Select Type</label>
<select name="select_type" class="form-control" required>
<option {{$Data[0]->select_type == 'single' ? 'Selected' : ''}} value="single">Single</option>
<option {{$Data[0]->select_type == 'multiple' ? 'Selected' : ''}} value="multiple">Multiple</option>
</select>
</div>

@foreach($Data[0]->option as $key => $option)

@if(is_null($option->parent_id))
<div id="{{$key}}" class="form-group thumbnail btn-primary"><i class="fa fa-times pull-right" href="#" onClick="closeOptionsEdit({{$key}})" aria-hidden="true"></i>
<h3 class="text-center">Module Options</h3>
<label>Title</label>
<input type="text" name="title[]" value="{{$option->title}}" class="form-control" required>
<label>Image</label>
<input type="file" name="image[]" value="{{$option->image}}" class="form-control" required>
<label>Cost</label>
<input type="number" name="cost[]" value="{{$option->cost}}" class="form-control" required>
<input type="hidden" value="{{$key}}" id="count_options">
<br>
<span onClick="add_sub_options({{$key}})" class="btn btn-info">Add Sub Options</span>
<span id="sub_options_{{$key}}"></span>
@else
<br><div id="{{rand(1,$key)}}" class="form-group thumbnail btn-danger"><i class="fa fa-times pull-right" href="#" onClick="closesubOptions({{$key}},{$key++})" aria-hidden="true"></i>
<h3 class="text-center">Sub Module Options</h3>
<label>Title</label>
<input type="text" name="sub_title_{{$key}}[]" class="form-control" required>
<label>Image</label>
<input type="file" name="sub_image_{{$key}}[]" class="form-control" required>
<label>Cost</label>
<input type="number" name="sub_cost_{{$key}}[]" class="form-control" required></div>

</div>
@endif
@endforeach
<span id="options"></span>
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