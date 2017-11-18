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
<h1>{{ $This_Service->service_name }}</h1>

</div>
</div>
</div>
</section>

<section class="ls section_padding_top_100 section_padding_bottom_90 columns_margin_0">
<div class="container">
<div class="row columns_padding_25">
<div class="col-md-6">
<h2 class="section_header">{{ $This_Service->service_name }}</h2>
<hr class="divider_2_30 left main_bg_color">
<p>
{!! $This_Service->service_about !!}
</p>
</div>
<div class="col-md-6">
<img src="{{asset('images/'.$This_Service->service_image)}}" alt="">
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