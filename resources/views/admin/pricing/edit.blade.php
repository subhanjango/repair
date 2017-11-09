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
<label>Package Name</label>
<input type="text" name="package_name" value="{{$Data[0]->package_name}}" class="form-control" placeholder="Enter Name" required>
</div>
<div class="form-group">
<label>Add Offerings</label>
@foreach($Data[0]->offering as $offering)
<input type="text" value="{{$offering->offering}}" placeholder="Enter Offerings" class="form-control" name="package_offering[]">
<br>
@endforeach
 <span id="offering"></span> <a href="javascript:void(0)" onClick="offering()"><span class="btn btn-danger">Add More</span></a>
</div>
<div class="form-group">
<label>Add Package Price</label>
<input type="number" placeholder="Enter Price" value="{{$Data[0]->package_price}}" class="form-control" name="package_price"> 
</div>
<div class="form-group">
<label>Add Package Discount</label>
<input type="number" value="{{$Data[0]->discount}}" placeholder="Leave empty if no discount" class="form-control" name="discount"> 
</div>
<div class="form-group">
<label>Add Promo Code</label>
@foreach($Data[0]->codes as $codes)
<input type="text" value="{{$codes->code}}" placeholder="Leave empty if no discount" class="form-control" name="package_code[]">
<br>
@endforeach
 <span id="package_code">
</span><a href="javascript:void(0)" onClick="package_code()"><span class="btn btn-danger">Add More</span></a>
</div>
<input name="do_post" value="1" type="hidden">
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