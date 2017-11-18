
<header class="page_header template_header header_darkgrey table_section black">
<div class="container">
<div class="row">
<div class="col-md-2 col-sm-5 col-xs-6">
<a href="{{url('/')}}" class="logo">
<img class="img-responsive" src="{{$logo}}" alt="">
</a>
</div>
<div class="col-md-8 col-sm-2 text-center">
<!-- main nav start -->
<nav class="mainmenu_wrapper">
<ul class="mainmenu nav sf-menu">
<li class="active">
<a href="{{url('/')}}">Home</a>
</li>

<li>
<a href="#">Services</a>
<ul>
@foreach($Service as $Service)
<li>
@php $ServiceName=str_replace(' ','-',$Service->service_name) @endphp
<a href="{{url('/service/'.$ServiceName)}}">{{$ServiceName}}</a>
</li>
@endforeach
</ul>
</li>

<li>
<a href="{{ url('/how-it-works')}}">How It Works</a>
</li>
<li>
<a href="{{ url('/about')}}">About Us</a>
</li>

<li>
<a href="#">Blogs</a>
<ul>
@foreach($All_Blog as $All_Blog)
<li>
@php $blog_name=str_replace(' ','-',$All_Blog->blog_name) @endphp
<a href="{{url('/blog/'.$blog_name)}}">{{$blog_name}}</a>
</li>
@endforeach
</ul>
</li>

<li><a href="{{url('/book-a-service')}}" class="theme_button inverse topmargin_30">Book A Service</a></li>
</ul>
</nav>
<!-- eof main nav -->
<span class="toggle_menu">
<span></span>
</span>
</div>
<div class="col-md-2 col-sm-5 hidden-xs text-right">
<div class="page_social_icons greylinks">
<a class="social-icon soc-facebook" href="{{ redirect()->away($Setting->facebook) }}" title="Facebook"></a>
<a class="social-icon soc-twitter" href="{{redirect()->away($Setting->twitter) }}" title="Twitter"></a>
<a class="social-icon soc-google" href="{{ redirect()->away($Setting->google) }}" title="Google"></a>
</div>
</div>
</div>
</div>
</header>
