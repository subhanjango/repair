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
<h1>About Us</h1>

</div>
</div>
</div>
</section>

<section class="ls section_padding_top_100 section_padding_bottom_90 columns_margin_0">
<div class="container">
<div class="row columns_padding_25">
<div class="col-md-6">
<h2 class="section_header">Who we are</h2>
<hr class="divider_2_30 left main_bg_color">
<p>
{!! $About->content !!}
</p>
</div>
<div class="col-md-6">
<img src="{{asset('frontend/images/gallery/04.jpg')}}" alt="">
</div>
</div>
<div class="row">
<div class="col-md-3 col-sm-6 text-center">
<div class="with_padding2">
<i class="gadget-desktop highlight size_normal"></i>
<h4 class="small-heading divider_20">
<a href="">Computer repair</a>
</h4>
<p>
Whether you are a business or an individual looking to fix your...
</p>
</div>
</div>
<div class="col-md-3 col-sm-6 text-center">
<div class="with_padding2">
<i class="gadget-laptop highlight size_normal"></i>
<h4 class="small-heading divider_20">
<a href="">Laptop repair</a>
</h4>
<p>
Laptops can come in all different shapes and sizes. From timid, but...
</p>
</div>
</div>
<div class="col-md-3 col-sm-6 text-center">
<div class="with_padding2">
<i class="gadget-tablet highlight size_normal"></i>
<h4 class="small-heading divider_20">
<a href="">Tablet repair</a>
</h4>
<p>
Tablets offer much more flexibility and convenience to people than phones...
</p>
</div>
</div>
<div class="col-md-3 col-sm-6 text-center">
<div class="with_padding2">
<i class="gadget-smartphone highlight size_normal"></i>
<h4 class="small-heading divider_20">
<a href="">Smartphone repair</a>
</h4>
<p>
If you own a smartphone, you probably depend on it daily. Your phone brings...
</p>
</div>
</div>
</div>
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