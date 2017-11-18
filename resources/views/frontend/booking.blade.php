<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->


@include('frontend.shared.head')
<style>
select {
    direction: rtl;
}

option {
    direction: ltr;
}
</style>
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
			<section style="background:transparent;" class="ls section_padding_top_100 section_padding_bottom_100">
				<div class="container">

					<div class="row">
                        @php $cost=array(); @endphp
						<form class="shop-register" method="POST" action="{{url('/order')}}" role="form">
                        {{csrf_field()}}
                        @foreach($Module as $Module)


                       
							<div class="col-sm-6">
								<div class="form-group validate-required">
                                <label for="billing_company" class="control-label">
										<span class="grey"><b>{{ strtoupper($Module->module_title)}}</b></span>&nbsp;&nbsp;&nbsp;<i onClick="moduleDetail({{$Module->id}})" class="fa fa-info-circle" aria-hidden="true"></i>
									</label>
                                    
                                 <select name="option[]" onChange="costOption({{$Module->id}})" dir="rtl" class="form-control" id="option{{$Module->id}}">
                                 
                                 @foreach($Module->option as $option)
                                @php $cost[$option->id]=$option->cost; @endphp
<option value="{{$option->id}}" class="text-center">{{ $option->title }}  </option>

@endforeach
</select>
								</div>

							


							</div>
                             @endforeach
                             
                             @foreach($cost as $key => $value)
                        <input type="hidden" id="{{$key}}" value="{{$value}}">
                             @endforeach

                             <div class="col-md-6">
                              <label  class="control-label">
										<span class="grey"><b>Your Name</b></span>
									</label>
                            <input required class="form-control" type="text" name="name">
                             </div>
                             <div class="col-md-6">
                              <label  class="control-label">
										<span class="grey"><b>Your Email</b></span>
									</label>
                            <input required class="form-control" type="email" name="email">
                             </div>
                             <div class="col-md-12">
                              <label  class="control-label">
										<span class="grey"><b>Your Message</b></span>
									</label>
                            <textarea required class="form-control"  name="msg"></textarea>
                             </div>
                             <div class="col-md-12">
                             <button style="width:100%" type="submit" class="theme_button"><h4><b>Place Order</b> $<span id="amount">0</span></h4></button>
                            </div>
							

						</form>


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