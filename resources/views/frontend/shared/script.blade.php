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
</script>