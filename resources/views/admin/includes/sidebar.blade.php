 <style>
      .active {
    background: linear-gradient(
87deg
, rgba(253, 142, 13, 1) 0%, rgb(247 181 86) 100%);
}
     .brand-link{
        background-color: revert;
     }

     ul ul a {
    font-size: 1em !important;
    padding-left: 30px !important;
    /*background: #6d7fcc;*/
}
</style>
 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4" style="position: fixed; background-color: #222;">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{ asset('public/assets/img/logo.png') }}" alt="Admin Logo" class=" " style="opacity: .8; width:150px;">
      <!-- <span class="brand-text font-weight-light" style="font-size: 18px;">Chiranjeevani FMCG</span> -->
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('dashboard') }}" class="nav-link {{ (Request::segment(2) == 'dashboard') ? 'active' : '' }}">
            <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('users') }}" class="nav-link  {{ (Request::segment(2) == 'users') ? 'active' : '' }}">
            <i class="nav-icon far fa-user" aria-hidden="true"></i>
              <p>
                Users
              </p>
            </a>
          </li>

          <li class="nav-item">
            <a href="{{ route('enquiries') }}" class="nav-link  {{ (Request::segment(2) == 'enquiries') ? 'active' : '' }}">
            <i class="nav-icon far fa-user" aria-hidden="true"></i>
              <p>
                Enquiries
              </p>
            </a>
          </li>
          
          <li class="nav-item">
            <a href="{{ route('blog_management') }}" class="nav-link  {{ (Request::segment(2) == 'blogManagement') ? 'active' : '' }}">
            <i class="nav-icon far fa-user" aria-hidden="true"></i>
              <p>
                Blog-Management
              </p>
            </a>
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
