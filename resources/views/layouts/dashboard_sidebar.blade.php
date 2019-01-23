<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      
     
      <li class="treeview">
          <a href="#">
              <i class="fa fa-file-excel-o" aria-hidden="true"></i>
              <span>About</span>
              <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
              </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('super-admin/excel/countries') }}"><i class="fa fa-globe" aria-hidden="true"></i> <span>Excel [Countries]</span></a></li>  
                 
          </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-file-excel-o" aria-hidden="true"></i>
          <span>Services</span>
          <span class="pull-right-container">
            <i class="fa fa-angle-left pull-right"></i>
          </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('/admin/service') }}"><i class="fa fa-link" aria-hidden="true"></i> <span>Manage Services</span></a></li>
          
        </ul>
      </li>

      <li class="treeview">
        <a href="#">
            <i class="fa fa-map-o" aria-hidden="true"></i>
            <span>Gallery</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
          <li><a href="{{ url('super-admin/country') }}"><i class="fa fa-globe" aria-hidden="true"></i> <span>Countries</span></a></li>
            
        </ul>
      </li>
     
    </ul>
    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>