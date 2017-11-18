<div class="modal fade" id="orderModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Place Your Order</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form>
        <div class="form-group">
            <label for="message-text" class="col-form-label">Package</label>
            <input type="text" readonly class="form-control" id="message-package">
          </div>
        <div class="form-group">
            <label for="message-text" class="col-form-label">Price</label>
            <input type="text" readonly class="form-control" id="package-price">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Recipient Email:</label>
            <input type="email" class="form-control" id="recipient-name" required>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea required class="form-control" id="message-text"></textarea>
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Promo Code</label>
            <input required type="text"  class="form-control" id="promo-code">
            <input required type="hidden" readonly class="form-control" id="package">
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" onClick="orderSend()" class="btn btn-primary">Send message</button>
      </div>
    </div>
  </div>
</div>

<footer class="page_footer ds section_padding_top_65 section_padding_bottom_15 columns_margin_bottom_30">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6 to_animate" data-animation="scaleAppear">
<div class="widget widget_text">
<a href="index.html" class="logo bottommargin_10">
{{--  <img src="{{$logo}}"alt="">  --}}
<h1>
<strong>{{$Setting->company_name}}</strong></h1>
</a>
<p>
We fix all electronic devices such as phones, tablets, PCs and even your gaming consoles.
</p>
<div class="row grey columns_margin_0 columns_padding_5 darklinks">
<div class="col-xs-6">
<ul class="list2">
@if(\Request::path() != 'book-a-service')
@foreach($Service as $Service)
<li>
@php $ServiceName=str_replace(' ','-',$Service->service_name) @endphp
<a href="{{url('/service/'.$ServiceName)}}">{{$ServiceName}}</a>
@endforeach
@endif
</li>
</ul>
</div>
</div>
</div>
</div>
<div class="col-md-3 col-sm-6 to_animate" data-animation="scaleAppear">
<div class="widget widget_text greylinks topmargin_10">

<h3 class="widget-title">contact us</h3>
<div class="media">
<div class="media-left fontsize_18">
<i class="fa fa-map-marker highlight"></i>
</div>
<div class="media-body">
<a target="_blank" href="https://maps.google.com/?q={!!$Setting->company_address!!}">{!!$Setting->company_address!!}</a>
</div>
</div>
<div class="media">
<div class="media-left fontsize_18">
<i class="fa fa-envelope highlight"></i>
</div>
<div class="media-body">
<a target="_blank" href="mailto:{{$Setting->company_email}}">{{$Setting->company_email}}</a>
</div>
</div>
<div class="media">
<div class="media-left fontsize_18">
<i class="fa fa-phone highlight"></i>
</div>
<div class="media-body">
<a target="_blank" href="tel:{{$Setting->company_mobile}}">{{$Setting->company_mobile}}</a>
</div>
</div>
</div>

</div>
<div class="col-md-3 col-sm-6 to_animate" data-animation="scaleAppear">
<div class="widget widget_social greylinks topmargin_10">

<h3 class="widget-title">Social Networks</h3>
<a class="media social-link" href="{{ redirect()->away($Setting->facebook) }}">
<span class="media-left media-middle">
<span class="soc-facebook grey"></span>
</span>
<span class="media-body media-middle">
Facebook
</span>
</a>
<a class="media social-link" href="{{redirect()->away($Setting->twitter) }}">
<span class="media-left media-middle">
<span class="soc-twitter grey"></span>
</span>
<span class="media-body media-middle">
Twitter
</span>
</a>
<a class="media social-link" href="{{ redirect()->away($Setting->google) }}">
<span class="media-left media-middle">
<span class="soc-google grey"></span>
</span>
<span class="media-body media-middle">
Google+
</span>
</a>

</div>
</div>
<div class="col-md-3 col-sm-6 to_animate" data-animation="scaleAppear">
<div class="topmargin_10">
<div class="widget widget_recent_entries">
<h3 class="widget-title">Recent posts</h3>
<ul>
@foreach($Blog as $Blog)
<li>
<div class="categories-links small-text">
@php $blog=str_replace(' ','-',$Blog->blog_name) @endphp
<a href="{{url('/blog/'.$blog)}}">{{$Blog->blog_name}}</a>
</div>
</li>
@endforeach
</ul>
</div>
</div>
</div>
</div>
</div>
</footer>
<section class="page_copyright ds ms table_section section_padding_25">
<div class="container">
<div class="row">
<div class="col-sm-12 text-center">
<p class="darklinks">&copy; {{Date('Y')}} {{$Setting->company_name}} . Created with
<i class="fa fa-heart-o highlight"></i> by
<a target="_blank" href="http://conepoint.com">Conepoint</a>
</p>
</div>
</div>
</div>
</section>

<!-- Modal -->
<div id="moduleDetail" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      
      </div>
      <div class="modal-body">
       
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>