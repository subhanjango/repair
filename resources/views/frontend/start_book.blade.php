<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


@include('frontend.shared.head')

<body>
<!--[if lt IE 9]>
<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="highlight">upgrade your browser</a> to improve your experience.</div>
<![endif]-->

<div class="preloader">
<div class="preloader_image"></div>
</div>


<!-- wrappers for visual page editor and boxed version of template -->
<div id="canvas">
<div id="box_wrapper">

<!-- template sections -->
@include('frontend.shared.header')

<section class="page_breadcrumbs ds black parallax section_padding_50 columns_margin_0">
<div class="container">
<div class="row">
<div class="col-sm-12 text-center">
<h1>{{ strtoupper($Module->module_title) }}</h1>
<input type="hidden" id="this_module" value="{{ $Module->id }}">

</div>
</div>
</div>

<section class="ls page_portfolio section_padding_top_100 section_padding_bottom_75">
<div class="container">
<div class="row">
<div class="col-sm-12">
<h1>{{ $Module->module_description }}</h1>
<div class="isotope_container isotope row masonry-layout" data-filters=".isotope_filters">
@foreach($ModuleOptions as $ModuleOptions)

<div onclick="glowMe({{$ModuleOptions->id}})" id="{{$ModuleOptions->id}}" class="isotope-item col-lg-3">
<div class="thumbnail with_shadow bottom-color-border">
<img style="width:50%;" src="{{ asset('images/'.$ModuleOptions->image) }}" alt="">
<div class="caption">
<h3>
<a href="">{{ $ModuleOptions->title }}</a>
</h3>
</div>
</div>
</div>
<input type="hidden" id="cost{{$ModuleOptions->id}}" value="{{$ModuleOptions->cost}}">
@endforeach
</div>
<div class="container thumbnail"></div>
<span class="children"></span>
<!-- eof .isotope_container.row -->
</div>
<br>
 </div>

<div class=" d-flex align-items-center pull-left">
<a  href="{{ url()->previous() }}"><button  style="width:100%;display: block; margin: 0 auto;" type="submit" class="theme_button"><b>Go Back</b></button></a> </div>
<div class="d-flex align-items-center pull-right thumbnail"><h3 >Total Amount : $<span id="amount">0</span></h3></div>

</div>
</section>





@include('frontend.shared.footer')



</div>
<!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->
@include('frontend.shared.script')

</body>


<!-- Mirrored from webdesign-finder.com/html/repairme/about.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 06 Nov 2017 22:25:07 GMT -->

</html>