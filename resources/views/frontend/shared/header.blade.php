
<header class="page_header template_header header_darkgrey table_section black">
<div class="container">
<div class="row">
<div class="col-md-2 col-sm-5 col-xs-6">
<a href="index.html" class="logo">
<img src="{{$logo}}" alt="">
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
<a href="{{url('/Service/'.$ServiceName)}}">{{$ServiceName}}</a>
</li>
@endforeach
</ul>
</li>

<li>
<a href="about.html">Pages</a>
<ul>
<!-- features -->
<li>
<a href="shortcodes_teasers.html">Shortcodes&amp;Widgets</a>
<ul>

<li>
<a href="shortcodes_teasers.html">Teasers</a>
</li>
<li>
<a href="shortcodes_buttons.html">Buttons</a>
</li>
<li>
<a href="shortcodes_progress.html">Progress</a>
</li>
<li>
<a href="shortcodes_pricing.html">Pricing</a>
</li>
<li>
<a href="shortcodes_socialicons.html">Social Icons</a>
</li>
<li>
<a href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
</li>
<li>
<a href="shortcodes_bootstrap.html">Bootstrap Elements</a>
</li>
<li>
<a href="shortcodes_typography.html">Typography</a>
</li>
<li>
<a href="shortcodes_widgets.html">Widgets</a>
</li>
<li>
<a href="shortcodes_animation.html">Animation</a>
</li>
<li>
<a href="shortcodes_icons.html">Template Icons</a>
</li>
</ul>
</li>
<!-- eof features -->

<!-- header -->
<li>
<a href="header1.html">Headers</a>
<ul>
<li>
<a href="header1.html">Header 1</a>
</li>
<li>
<a href="header2.html">Header 2</a>
</li>
<li>
<a href="header3.html">Header 3</a>
</li>
<li>
<a href="header4.html">Header 4</a>
</li>
<li>
<a href="header5.html">Header 5</a>
</li>
<li>
<a href="header_side1.html">Side Headers</a>
<ul>
<li>
<a href="header_side1.html">Side Left Header</a>
</li>
<li>
<a href="header_side2.html">Side Right Header</a>
</li>
<li>
<a href="header_side3.html">Side Push Left Header</a>
</li>
<li>
<a href="header_side4.html">Side Push Right Header</a>
</li>
</ul>
</li>

</ul>
</li>
<!-- eof header -->

<!-- breadcrumbs -->
<li>
<a href="breadcrumbs1.html">Breadcrumbs</a>
<ul>
<li>
<a href="breadcrumbs1.html">Breadcrumbs 1</a>
</li>
<li>
<a href="breadcrumbs2.html">Breadcrumbs 2</a>
</li>
<li>
<a href="breadcrumbs3.html">Breadcrumbs 3</a>
</li>
<li>
<a href="breadcrumbs4.html">Breadcrumbs 4</a>
</li>
<li>
<a href="breadcrumbs5.html">Breadcrumbs 5</a>
</li>
<li>
<a href="breadcrumbs6.html">Breadcrumbs 6</a>
</li>
</ul>
</li>
<!-- eof breadcrumbs -->

<!-- footer -->
<li>
<a href="footer1.html">Footer</a>
<ul>
<li>
<a href="footer1.html">Footer 1</a>
</li>
<li>
<a href="footer2.html">Footer 2</a>
</li>
<li>
<a href="footer3.html">Footer 3</a>
</li>
<li>
<a href="footer4.html">Footer 4</a>
</li>
<li>
<a href="footer5.html">Footer 5</a>
</li>
<li>
<a href="footer6.html">Footer 6</a>
</li>
</ul>
</li>
<!-- eof footer -->

<!-- copyright -->
<li>
<a href="copyright1.html">Copyright</a>
<ul>
<li>
<a href="copyright1.html">Copyright 1</a>
</li>
<li>
<a href="copyright2.html">Copyright 2</a>
</li>
<li>
<a href="copyright3.html">Copyright 3</a>
</li>
<li>
<a href="copyright4.html">Copyright 4</a>
</li>
<li>
<a href="copyright5.html">Copyright 5</a>
</li>
<li>
<a href="copyright6.html">Copyright 6</a>
</li>
</ul>
</li>
<!-- eof copyright -->

<!-- events -->
<li>
<a href="events-left.html">Events</a>
<ul>
<li>
<a href="events-left.html">Left Sidebar</a>
</li>
<li>
<a href="events-right.html">Right Sidebar</a>
</li>
<li>
<a href="events-full.html">Full Width</a>
</li>
<li>
<a href="event-single-left.html">Single Event</a>
<ul>
<li>
<a href="event-single-left.html">Left Sidebar</a>
</li>
<li>
<a href="event-single-right.html">Right Sidebar</a>
</li>
<li>
<a href="event-single-full.html">Full Width</a>
</li>
</ul>
</li>
</ul>
</li>
<!-- eof events -->

<!-- gallery -->
<li>
<a href="gallery-regular.html">Gallery</a>
<ul>
<!-- Gallery regular -->
<li>
<a href="gallery-regular.html">Gallery Regular</a>
<ul>
<li>
<a href="gallery-regular.html">1 column</a>
</li>
<li>
<a href="gallery-regular-2-cols.html">2 columns</a>
</li>
<li>
<a href="gallery-regular-3-cols.html">3 columns</a>
</li>
<li>
<a href="gallery-regular-4-cols.html">4 columns</a>
</li>
</ul>
</li>
<!-- eof Gallery regular -->

<!-- Gallery full width -->
<li>
<a href="gallery-fullwidth.html">Gallery Full Width</a>
<ul>
<li>
<a href="gallery-fullwidth.html">2 column</a>
</li>
<li>
<a href="gallery-fullwidth-3-cols.html">3 columns</a>
</li>
<li>
<a href="gallery-fullwidth-4-cols.html">4 columns</a>
</li>
</ul>
</li>
<!-- eof Gallery full width -->

<!-- Gallery extended -->
<li>
<a href="gallery-extended.html">Gallery Extended</a>
<ul>
<li>
<a href="gallery-extended.html">1 column</a>
</li>
<li>
<a href="gallery-extended-2-cols.html">2 columns</a>
</li>
<li>
<a href="gallery-extended-3-cols.html">3 columns</a>
</li>
</ul>
</li>
<!-- eof Gallery extended -->

<!-- Gallery carousel -->
<li>
<a href="gallery-carousel.html">Gallery Carousel</a>
<ul>
<li>
<a href="gallery-carousel.html">1 column</a>
</li>
<li>
<a href="gallery-carousel-2-cols.html">2 columns</a>
</li>
<li>
<a href="gallery-carousel-3-cols.html">3 columns</a>
</li>
</ul>
</li>
<!-- eof Gallery carousel -->

<!-- Gallery tile -->
<li>
<a href="gallery-tile.html">Gallery Tile</a>
</li>
<!-- eof Gallery tile -->

<!-- Gallery left sidebar -->
<li>
<a href="gallery-left.html">Gallery Left Sidebar</a>
<ul>
<li>
<a href="gallery-left.html">1 column</a>
</li>
<li>
<a href="gallery-left-2-cols.html">2 columns</a>
</li>
</ul>
</li>
<!-- eof Gallery left sidebar -->

<!-- Gallery right sidebar -->
<li>
<a href="gallery-right.html">Gallery Right Sidebar</a>
<ul>
<li>
<a href="gallery-right.html">1 column</a>
</li>
<li>
<a href="gallery-right-2-cols.html">2 columns</a>
</li>
</ul>
</li>
<!-- eof Gallery right sidebar -->

<!-- Gallery item -->
<li>
<a href="gallery-single.html">Gallery Item</a>
<ul>
<li>
<a href="gallery-single.html">Style 1</a>
</li>
<li>
<a href="gallery-single2.html">Style 2</a>
</li>
<li>
<a href="gallery-single3.html">Style 3</a>
</li>
</ul>
</li>
<!-- eof Gallery item -->
</ul>
</li>
<!-- eof Gallery -->


<li>
<a href="about.html">About</a>
</li>

<li>
<a href="team.html">Team</a>
<ul>
<li>
<a href="team.html">Team</a>
</li>
<li>
<a href="team-single.html">Team member</a>
</li>
</ul>
</li>

<li>
<a href="comingsoon1.html">Comingsoon</a>
<ul>
<li>
<a href="comingsoon1.html">Comingsoon</a>
</li>
<li>
<a href="comingsoon2.html">Comingsoon 2</a>
</li>
</ul>
</li>

<li>
<a href="typography.html">Typography</a>
</li>

<li>
<a href="timetable.html">Timetable</a>
</li>

<li>
<a href="faq.html">FAQ</a>
<ul>
<li>
<a href="faq.html">FAQ</a>
</li>
<li>
<a href="faq2.html">FAQ 2</a>
</li>
</ul>
</li>
<li>
<a href="404.html">404</a>
</li>

</ul>
</li>
<!-- eof pages -->

<li>
<a href="#">Features</a>
<div class="mega-menu">
<ul class="mega-menu-row">
<li class="mega-menu-col">
<a href="#">Headers</a>
<ul>
<li>
<a href="header1.html">Header Type 1</a>
</li>
<li>
<a href="header2.html">Header Type 2</a>
</li>
<li>
<a href="header3.html">Header Type 3</a>
</li>
<li>
<a href="header4.html">Header Type 4</a>
</li>
<li>
<a href="header5.html">Header Type 5</a>
</li>
</ul>
</li>
<li class="mega-menu-col">
<a href="#">Side Menus</a>
<ul>
<li>
<a href="header_side1.html">Slide Left Light</a>
</li>
<li>
<a href="header_side2.html">Slide Right Light</a>
</li>
<li>
<a href="header_side3.html">Push Left Light</a>
</li>
<li>
<a href="header_side4.html">Push Right Light</a>
</li>
<li>
<a href="header_side5.html">Slide Left Dark</a>
</li>
<li>
<a href="header_side6.html">Slide Right Dark</a>
</li>
<li>
<a href="header_side7.html">Push Left Dark</a>
</li>
<li>
<a href="header_side8.html">Push Right Dark</a>
</li>
<li>
<a href="header_side_superfish.html">Superfish Menu</a>
</li>
</ul>
</li>
<li class="mega-menu-col">
<a href="breadcrumbs1.html">Breadcrumbs</a>
<ul>
<li>
<a href="breadcrumbs1.html">Breadcrumbs 1</a>
</li>
<li>
<a href="breadcrumbs2.html">Breadcrumbs 2</a>
</li>
<li>
<a href="breadcrumbs3.html">Breadcrumbs 3</a>
</li>
<li>
<a href="breadcrumbs4.html">Breadcrumbs 4</a>
</li>
<li>
<a href="breadcrumbs5.html">Breadcrumbs 5</a>
</li>
<li>
<a href="breadcrumbs6.html">Breadcrumbs 6</a>
</li>
</ul>
</li>
<li class="mega-menu-col">
<a href="footer1.html">Footers</a>
<ul>
<li>
<a href="footer1.html">Footer Type 1</a>
</li>
<li>
<a href="footer2.html">Footer Type 2</a>
</li>
<li>
<a href="footer3.html">Footer Type 3</a>
</li>
<li>
<a href="footer4.html">Footer Type 4</a>
</li>
<li>
<a href="footer5.html">Footer Type 5</a>
</li>
<li>
<a href="footer6.html">Footer Type 6</a>
</li>
</ul>
</li>
<li class="mega-menu-col">
<a href="copyright1.html">Copyrights</a>

<ul>
<li>
<a href="copyright1.html">Copyrights 1</a>
</li>
<li>
<a href="copyright2.html">Copyrights 2</a>
</li>
<li>
<a href="copyright3.html">Copyrights 3</a>
</li>
<li>
<a href="copyright4.html">Copyrights 4</a>
</li>
<li>
<a href="copyright5.html">Copyrights 5</a>
</li>
<li>
<a href="copyright6.html">Copyrights 6</a>
</li>
</ul>
</li>

</ul>
</div>
<!-- eof mega menu -->
</li>
<!-- eof features -->

<!-- blog -->
<li>
<a href="blog-right.html">Blog</a>
<ul>
<li>
<a href="blog-right.html">Right Sidebar</a>
</li>
<li>
<a href="blog-left.html">Left Sidebar</a>
</li>
<li>
<a href="blog-full.html">No Sidebar</a>
</li>
<li>
<a href="blog-mosaic.html">Blog Grid</a>
</li>

<li>
<a href="blog-single-right.html">Post</a>
<ul>
<li>
<a href="blog-single-right.html">Right Sidebar</a>
</li>
<li>
<a href="blog-single-left.html">Left Sidebar</a>
</li>
<li>
<a href="blog-single-full.html">No Sidebar</a>
</li>
</ul>
</li>

<li>
<a href="blog-single-video-right.html">Video Post</a>
<ul>
<li>
<a href="blog-single-video-right.html">Right Sidebar</a>
</li>
<li>
<a href="blog-single-video-left.html">Left Sidebar</a>
</li>
<li>
<a href="blog-single-video-full.html">No Sidebar</a>
</li>
</ul>
</li>

</ul>
</li>
<!-- eof blog -->

<!-- shop -->
<li>
<a href="shop-right.html">Shop</a>
<ul>
<li>
<a href="shop-right.html">Shop</a>
</li>
<li>
<a href="product-right.html">Single Product</a>
</li>
<li>
<a href="cart-right.html">Shopping Cart</a>
</li>
<li>
<a href="checkout-right.html">Checkout</a>
</li>
<li>
<a href="register.html">Registration</a>
</li>
</ul>
</li>
<!-- eof shop -->

<!-- contacts -->
<li>
<a href="contact.html">Contacts</a>
<ul>
<li>
<a href="contact.html">Contact 1</a>
</li>
<li>
<a href="contact2.html">Contact 2</a>
</li>
<li>
<a href="contact3.html">Contact 3</a>
</li>
</ul>
</li>
<!-- eof contacts -->
</ul>
</nav>
<!-- eof main nav -->
<span class="toggle_menu">
<span></span>
</span>
</div>
<div class="col-md-2 col-sm-5 hidden-xs text-right">
<div class="page_social_icons greylinks">
<a class="social-icon soc-facebook" href="#" title="Facebook"></a>
<a class="social-icon soc-twitter" href="#" title="Twitter"></a>
<a class="social-icon soc-google" href="#" title="Google"></a>
</div>
</div>
</div>
</div>
</header>
