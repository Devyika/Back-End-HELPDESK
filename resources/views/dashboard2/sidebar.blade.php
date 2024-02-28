<aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Brand Logo -->
        <a href="index3.html" class="brand-link">
        <img src="{{ asset('image/logoweb.png') }}" style="width: 50%; height: 50%; margin-left: 50px" >
        <a href="#" class="nav-link">
              <i class="nav-icon fa fa-user mb-2 mt-2 p-2 "></i>
              <p>
                Admin
              </p>
            </a>
        <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon far fa-folder-open"></i>
              <p>
                Kelola Data
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin2.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-user-edit"></i>
                  <p>Data Admin</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('opd2.index') }}" class="nav-link">
                  <i class="nav-icon fas fa-user-edit"></i>
                  <p>Data OPD</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-header">DATA MONITORING</li>
          <li class="nav-item">
            <a href="{{ route('pendaftarans2.index') }}" class="nav-link">
              <i class="nav-icon far fa-edit"></i>
              <p>
                Website OPD
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('traffic2.index') }}" class="nav-link">
              <i class="nav-icon fas fa-chart-line"></i>
              <p>
                Traffic
              </p>
            </a>
          </li>
        </ul>
        
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>