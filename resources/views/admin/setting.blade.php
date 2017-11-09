@include('admin.shared.head')
   <body class="hold-transition sidebar-mini">
      <!--preloader-->
      <div id="preloader">
         <div id="status"></div>
      </div>
      <!-- Site wrapper -->
      <div class="wrapper">
        @include('admin.shared.header')
         <!-- =============================================== -->
       @include('admin.shared.sidebar')
            <!-- Content Header (Page header) -->
              <!-- Content Wrapper. Contains page content -->
         <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
               <div class="header-icon">
                  <i class="fa fa-gears"></i>
               </div>
               <div class="header-title">
                  <h1>{{ $Module }}</h1>
                  <small>{{ $Title }}</small>
               </div>
            </section>
            <!-- Main content -->
            <section class="content">
               <div class="row">
                  <!-- Form controls -->
                  <div class="col-sm-12">
                     <div class="panel panel-bd lobidrag">
                        <div class="panel-heading">
                           <div class="btn-group" id="buttonexport">
                              <a href="#">
                                 <h4>{{ $Title }}</h4>
                              </a>
                           </div>
                        </div>
                        <div class="panel-body">
                        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
                        @if (\Session::has('success'))
    <div class="alert alert-success">
     
                <li>{{ \Session::get('success') }}</li>
            
    </div>
@endif
                           <form class="col-sm-6" method="{{$Method}}" action="{{$Action}}" enctype="multipart/form-data">
                           {{csrf_field()}}
                              <div class="form-group">
                                 <label>Application Name/ Company Name</label>
                                 <input type="text" name="company_name" class="form-control" placeholder="Enter Name" value="{{ $data->company_name }}" required>
                              </div>
                              <div class="form-group">
                                 <label>Company Address</label>
                                 <textarea class="form-control" name="company_address"  rows="3"  required>{{ $data->company_address }}</textarea>
                              </div>
                               <div class="form-group">
                                 <label>Google Map URL</label>
                                 <input type="text" value="{{ $data->map_url }}" name="map_url"  class="form-control" placeholder="Enter URL" required>
                              </div>
                               <div class="form-group">
                                 <label>Company Email</label>
                                 <input type="email" name="company_email"  class="form-control" placeholder="Enter Email" value="{{ $data->company_email }}" required>
                              </div>
                              <div class="form-group">
                                 <label>Company Mobile</label>
                                 <input type="number" name="company_mobile"  class="form-control" placeholder="Enter Mobile" value="{{ $data->company_mobile }}" required>
                              </div>
                              <div class="form-group">
                                 <label>Facebook Link</label>
                                 <input type="text" name="facebook"  class="form-control" placeholder="Enter domain" value="{{ $data->facebook }}" required>
                              </div>
                              <div class="form-group">
                                 <label>Twitter Link</label>
                                 <input type="text" name="twitter"  class="form-control" placeholder="Enter domain" value="{{ $data->twitter }}" required>
                              </div>
                              <div class="form-group">
                                 <label>Google Link</label>
                                 <input type="text" name="google"  class="form-control" placeholder="Enter domain" value="{{ $data->google }}" required>
                              </div>
                              <div class="form-group">
                                 <label>Company Logo</label>
                                 <input type="file" name="logo"  class="form-control" placeholder="Enter domain">
                              </div>
                              <img style="width:50%" src="{{ url('images\\'.$data->logo.'') }}">
                              <div class="reset-button">
                                <input type="reset" class="btn btn-warning" value="Reset">
                                 <input type="submit" class="btn btn-add" value="Save">
                              </div>
                           </form>
                        </div>
                     </div>
                  </div>
               </div>
            </section>
            <!-- /.content -->
         </div>
         <!-- /.content-wrapper -->
        @include('admin.shared.footer')
      </div>
   @include('admin.shared.scripts')
   </body>

<!-- Mirrored from crm.thememinister.com/crmAdmin/ by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 19 Oct 2017 19:45:38 GMT -->
</html>

