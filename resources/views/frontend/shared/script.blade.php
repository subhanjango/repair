<script src="{{asset('frontend/js/compressed.js')}}"></script>
<script src="{{asset('frontend/js/main.js')}}"></script>
<script src="{{asset('/js/form.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.4/js/select2.min.js"></script>
<script>
$(window).on('load', function(){
  localStorage.clear();
});
function costOption(id){
if(localStorage.getItem(id) > parseInt($('#amount').text()) ){

now= localStorage.getItem(id)-parseInt($('#amount').text());
}else{
  now= parseInt($('#amount').text())-localStorage.getItem(id);  
}

$('#amount').text(now);
selected=$('#option'+id).val();
value=$('#'+selected).val();
amount=parseInt(value)+parseInt($('#amount').text());
$('#amount').text(amount);
localStorage.setItem(id, value);
}

function moduleDetail(id){
    $.post("{{url('/moduleDetail')}}", { id: id, _token: "{!! csrf_token() !!}" })
            .done(function( data ) {
                $('.modal-body').html(data.module_description);
              
                $('#moduleDetail').modal();
        });
}
function placeOrder(id){
    $.post("{{url('/packageOrder')}}", { id: id, _token: "{!! csrf_token() !!}" })
            .done(function( data ) {
                console.log(data);
                $('#message-package').val(data.package_name);
                $('#package-price').val('$'+data.package_price);
                $('#package').val(data.id);
                $('#orderModal').modal();
        });
}
function orderSend(){
    id=$('#package').val();
    error=0;
    promo=$('#promo-code').val();
    if(promo!=''){
      $.post("{{url('/verifyPromo')}}", { id: id, promo: promo, _token: "{!! csrf_token() !!}" })
          .done(function( data ) {
            if(data == 'fail'){
                alert('Promo code does not exist.');
            }else{
                error=1;
            }  
        });
    }else if(error=0 || promo == ''){
    email=$('#recipient-name').val();
    text=$('#message-text').val();
    discount=promo !='' ? '1' : '0';
    if(email == ''){
        alert('Email is requred.');
    }else if(!isEmail(email)){
        alert('Please enter valid email address.');
    }else if(text == ''){
        alert('Message is requred.');
    }else{
        $.post("{{url('/orderSend')}}", { id: id,email: email ,text: text , discount: discount , _token: "{!! csrf_token() !!}" })
            .done(function( data ) {
               
                alert('Check your email please. Thankyou !');
                $('#message-package').val('');
                $('#package-price').val('');
                $('#package').val('');
                $('#orderModal').modal('toggle');
        });
        }
    }else{
        alert('Error occured, Try Again.');
    }
    
}

function isEmail(email) {
  var regex = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
  return regex.test(email);
}

  function glowMe(id){

if(localStorage.getItem(id) > parseInt($('#amount').text()) ){

now= localStorage.getItem(id)-parseInt($('#amount').text());
}else{
  now= parseInt($('#amount').text())-localStorage.getItem(id);  
}

$('#amount').text(now);
selected=$('#cost'+id).val();
amount=parseInt(selected);
$('#amount').text(amount);
localStorage.setItem(id, selected);

      @php if(isset($Module->select_type) && $Module->select_type == 'single'){ @endphp
         
        if("lastDiv" in localStorage){
           $('div#'+ localStorage.getItem("lastDiv")).css('border','' ,'box-shadow' , ''); 
        }
            localStorage.setItem("lastDiv", id);
      @php } @endphp
           $('div#'+id).css('border',' 5px solid #07c');

      $.post("{{url('/childModule')}}", { id: id, _token: "{!! csrf_token() !!}" })
            .done(function( data ) {
              if(!$.isEmptyObject(data)){
                  $('html, body').animate({
        scrollTop: $(".children").offset().top
    }, 2000);
                  $('.children').html('');
               $.each(data , function (index, value) {
               $('.children').append('<div class="col-md-4 child thumbnail with_shadow bottom-color-border"><img style="width: 50%;height: 190px;" src="{{ asset("images/") }}/'+data[index].image+'" alt=""><div class="caption"><h3><a href="">'+data[index].title+'</a></h3></div></div>');
            });
            
               }else{
                   @php if(isset($This_Service->service_name)){ $module_name = str_replace(' ','-',$This_Service->service_name); @endphp
                   window.location.href = "{{ url($module_name) }}/"+$('#this_module').val();
                    @php } @endphp
               }
        });

       }
</script>