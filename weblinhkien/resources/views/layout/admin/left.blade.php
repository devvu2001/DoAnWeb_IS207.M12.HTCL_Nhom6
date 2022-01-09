  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
     
      <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('public/backend/dist/img/AdminLogo.jpg') }}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Mr.Huy</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          
          <li class="nav-item ml-2   btn-primary active">
            <a href="{{ route('admin.index') }}" class="nav-link">
              <i class="fas fa-home"></i>
            
              <p class="ml-1">
                 Admin Homepage
                <span class="right badge badge-danger"></span>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Managed catalog
                <i class="fas fa-angle-left right"></i>
                <span class="badge badge-info right"></span>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('category.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Catalog management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('product.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product management</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('prodetail.index') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Product detail</p>
                </a>
              </li>
              
            </ul>
          </li>
          
          <li class="nav-item ml-2">
            <a href="{{ route('user.index') }}" class="nav-link">
              <i class="fas fa-user"></i>
              <p class="ml-2">
                User management
              
              </p>
            </a>
          
          </li>
        
      
            
          <li class="nav-item">
            <a href="{{ route('bill.index') }}" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Order management
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{ route('banner.index') }}" class="nav-link">
              <i class="nav-icon far fa-image"></i>
              <p>
                Banner management
              </p>
            </a>
          </li>
        
     
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>