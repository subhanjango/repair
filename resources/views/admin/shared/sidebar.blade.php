  <!-- Left side column. contains the sidebar -->
         <aside class="main-sidebar">
            <!-- sidebar -->
            <div class="sidebar">
               <!-- sidebar menu -->
               <ul class="sidebar-menu">
                  <li class="active">
                     <a href="{{URL::to('admin/home')}}"><i class="fa fa-tachometer"></i><span>Dashboard</span>
                     <span class="pull-right-container">
                     </span>
                     </a>
                  </li>
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-wrench"></i><span>Services</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{URL::to('admin/service/add')}}">Add Service</a></li>
                        <li><a href="{{URL::to('admin/service/list')}}">List Services</a></li>
                     </ul>
                  </li> 
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-money"></i><span>Pricing</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{URL::to('admin/pricing/add')}}">Add Pricing</a></li>
                        <li><a href="{{URL::to('admin/pricing/list')}}">List Pricing</a></li>
                     </ul>
                  </li> 
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-code"></i><span>How It Works</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{URL::to('admin/works')}}">Add Content</a></li>
                     </ul>
                  </li> 
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-address-card"></i><span>About Us</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{URL::to('admin/about')}}">Add Content</a></li>
                     </ul>
                  </li> 
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-pencil-square-o"></i><span>Blog</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{URL::to('admin/blog/add')}}">Add Blog</a></li>
                        <li><a href="{{URL::to('admin/blog/list')}}">List Blogs</a></li>
                     </ul>
                  </li> 
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-rss"></i><span>Modules</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{URL::to('admin/modules/add')}}">Add Modules</a></li>
                        <li><a href="{{URL::to('admin/modules/list')}}">List Modules</a></li>
                     </ul>
                  </li> 
                  <li class="treeview">
                     <a href="#">
                     <i class="fa fa-commenting" aria-hidden="true"></i><span>Testimonials</span>
                     <span class="pull-right-container">
                     <i class="fa fa-angle-left pull-right"></i>
                     </span>
                     </a>
                     <ul class="treeview-menu">
                        <li><a href="{{URL::to('admin/testimonials/add')}}">Add Testimonials</a></li>
                        <li><a href="{{URL::to('admin/testimonials/list')}}">List Testimonials</a></li>
                     </ul>
                  </li> 
               </ul>
            </div>
            <!-- /.sidebar -->
         </aside>
         <!-- =============================================== -->
         <!-- Content Wrapper. Contains page content -->