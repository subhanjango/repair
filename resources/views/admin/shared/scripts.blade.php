   <!-- /.wrapper -->
      <!-- Start Core Plugins
         =====================================================================-->
      <!-- jQuery -->
      <script src="{{asset('assets/plugins/jQuery/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
      <!-- jquery-ui --> 
      <script src="{{asset('assets/plugins/jquery-ui-1.12.1/jquery-ui.min.js')}}" type="text/javascript"></script>
      <!-- Bootstrap -->
      <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
      <!-- lobipanel -->
      <script src="{{asset('assets/plugins/lobipanel/lobipanel.min.js')}}" type="text/javascript"></script>
      <!-- Pace js -->
      <script src="{{asset('assets/plugins/pace/pace.min.js')}}" type="text/javascript"></script>
      <!-- SlimScroll -->
      <script src="{{asset('assets/plugins/slimScroll/jquery.slimscroll.min.js')}}" type="text/javascript">    </script>
      <!-- FastClick -->
      <script src="{{asset('assets/plugins/fastclick/fastclick.min.js')}}" type="text/javascript"></script>
      <!-- CRMadmin frame -->
      <script src="{{asset('assets/dist/js/custom.js')}}" type="text/javascript"></script>
      <!-- End Core Plugins
         =====================================================================-->
      <!-- Start Page Lavel Plugins
         =====================================================================-->
      <!-- ChartJs JavaScript -->
      <script src="{{asset('assets/plugins/chartJs/Chart.min.js')}}" type="text/javascript"></script>
      <!-- Counter js -->
      <script src="{{asset('assets/plugins/counterup/waypoints.js')}}" type="text/javascript"></script>
      <script src="{{asset('assets/plugins/counterup/jquery.counterup.min.js')}}" type="text/javascript"></script>
      <!-- Monthly js -->
      <script src="{{asset('assets/plugins/monthly/monthly.js')}}" type="text/javascript"></script>
      <script src="//cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>
      <!-- End Page Lavel Plugins
         =====================================================================-->
      <!-- Start Theme label Script
         =====================================================================-->
      <!-- Dashboard js -->
      <script src="{{asset('assets/dist/js/dashboard.js')}}" type="text/javascript"></script>
      <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=l205jdv8rdd7tkeqybvvcokgd689kmu47jluztfeqxgp7a18"></script>
  <script>tinymce.init({
  selector: 'textarea',
  height: 300,
  theme: 'modern',
  plugins: [
    'advlist autolink lists link image charmap print preview hr anchor pagebreak',
    'searchreplace wordcount visualblocks visualchars code fullscreen',
    'insertdatetime media nonbreaking save table contextmenu directionality',
    'emoticons template paste textcolor colorpicker textpattern imagetools codesample toc help'
  ],
  toolbar1: 'undo redo | insert | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image',
  toolbar2: 'print preview media | forecolor backcolor emoticons | codesample help',
  image_advtab: true,
  templates: [
    { title: 'Test template 1', content: 'Test 1' },
    { title: 'Test template 2', content: 'Test 2' }
  ],
  content_css: [
    '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
    '//www.tinymce.com/css/codepen.min.css'
  ]
 });

</script>
  <script>$(function(){

$('#dataTable').DataTable();
  });

  function offering(){
    
      $('#offering').append('<br><input placeholder="Enter Offerings"  type="text" class="form-control" name="package_offering[]">');
      }
  function package_code(){
    
      $('#package_code').append('<br><input placeholder="Enter Codes" type="text" class="form-control" name="package_code[]">');
      }

      function detailsPricing(id){
          $('.modal-body').html('');
          $.post("{{url('admin/pricingDetails')}}", { id: id, _token: "{!! csrf_token() !!}" })
            .done(function( data ) {
            $('.modal-title').text('Package Details');
            console.log('code',data[0].codes);
            $('.modal-body').append('<h1>Offerings</h1>');
            $.each(data[0].offering , function (index, value) {
               
               $('.modal-body').append('<li>'+value.offering+'</li>');
            });
             $('.modal-body').append('<h1>Promo Codes</h1>');
            $.each(data[0].codes , function (index, value) {
               
               $('.modal-body').append('<li>'+value.code+'</li>');
            });
            $('#myModal').modal();
        });
      }
      function moduleOptions(id){
          $('.modal-body').html('');
          $.post("{{url('admin/moduleOptions')}}", { id: id, _token: "{!! csrf_token() !!}" })
            .done(function( data ) {
            $('.modal-title').text('Module Options');
            $('.modal-body').append('<h1>Module Options</h1>');
            $.each(data , function (index, value) {
                if($.isEmptyObject(data[index].parent_id)){
                $('.modal-body').append('<ol><h3>'+value.title+'</h3></ol>');
                }else{
                 $('.modal-body').append('<li>'+value.title+'</li>');  
                }
            });
            $('#myModal').modal();
        });
      }
      
      $('#add_options').click(function(count=0){
         this_count=$('input#count_options').length;
          
        $('#options').append('<div id="'+this_count+'" class="form-group thumbnail btn-primary"><i class="fa fa-times pull-right" href="#" onClick="closeOptions('+this_count+')" aria-hidden="true"></i><h3 class="text-center">Module Options</h3><label>Title</label><input type="text" name="title[]" class="form-control" required><label>Image</label><input type="file" name="image[]" class="form-control" required><label>Cost</label><input type="number" name="cost[]" class="form-control" required><input type="hidden" value="'+this_count+'" id="count_options"><br><a onclick="add_sub_options('+this_count+')"><span class="btn btn-info">Add Sub Options</span></a><span id="sub_options_'+this_count+'"></span></div>');
       });

       function add_sub_options(id){
           this_count=$('#sub_options_'+id+' div').length == 0 ? 869000 :$('#sub_options_'+id+' div').length;

        $('#sub_options_'+id).append('<br><div id="'+this_count+id+'" class="form-group thumbnail btn-danger"><i class="fa fa-times pull-right" href="#" onClick="closesubOptions('+id+','+this_count+id+')" aria-hidden="true"></i><h3 class="text-center">Sub Module Options</h3><label>Title</label><input type="text" name="sub_title_'+id+'[]" class="form-control" required><label>Image</label><input type="file" name="sub_image_'+id+'[]" class="form-control" required><label>Cost</label><input type="number" name="sub_cost_'+id+'[]" class="form-control" required></div>');

       }

       function closesubOptions(id,subid){
           $('#sub_options_'+id+' div#'+subid).remove();
       }
       function closeOptions(id){
           console.log('here',id);
           $('#options div#'+id).remove();
       }
       function closeOptionsEdit(id){
           if(id != 0){

           console.log('here',id);
           $('div#'+id).remove();
           }else{
               alert('Can not be deleted.');
           }
       }

  </script>
      <!-- End Theme label Script
         =====================================================================-->
      <script>
         function dash() {
         // single bar chart
         var ctx = document.getElementById("singelBarChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["Sun", "Mon", "Tu", "Wed", "Th", "Fri", "Sat"],
         datasets: [
         {
         label: "My First dataset",
         data: [40, 55, 75, 81, 56, 55, 40],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
               //monthly calender
               $('#m_calendar').monthly({
                 mode: 'event',
                 //jsonUrl: 'events.json',
                 //dataType: 'json'
                 xmlUrl: 'events.xml'
             });

     
  

         
         //bar chart
         var ctx = document.getElementById("barChart");
         var myChart = new Chart(ctx, {
         type: 'bar',
         data: {
         labels: ["January", "February", "March", "April", "May", "June", "July", "august", "september","october", "Nobemver", "December"],
         datasets: [
         {
         label: "My First dataset",
         data: [65, 59, 80, 81, 56, 55, 40, 65, 59, 80, 81, 56],
         borderColor: "rgba(0, 150, 136, 0.8)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(0, 150, 136, 0.8)"
         },
         {
         label: "My Second dataset",
         data: [28, 48, 40, 19, 86, 27, 90, 28, 48, 40, 19, 86],
         borderColor: "rgba(51, 51, 51, 0.55)",
         width: "1",
         borderWidth: "0",
         backgroundColor: "rgba(51, 51, 51, 0.55)"
         }
         ]
         },
         options: {
         scales: {
         yAxes: [{
             ticks: {
                 beginAtZero: true
             }
         }]
         }
         }
         });
             //counter
             $('.count-number').counterUp({
                 delay: 10,
                 time: 5000
             });
         }
         dash();   
                 
      </script>