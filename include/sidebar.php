
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

      <!-- Sidebar - Brand -->
      <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
        
        <div class="sidebar-brand-text mx-3">LUV MATRIMONY</div>
      </a>

      <!-- Divider -->
      <hr class="sidebar-divider my-0">

      <!-- Nav Item - Dashboard -->
      <li class="nav-item active">
        <a class="nav-link" href="/home.php">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span></a>
      </li>
      
      <!-- Divider -->
      <hr class="sidebar-divider">
      <li class="nav-item">
        <a class="nav-link" href="/profile/editprofile.php">
        <i class="fas fa-plus "></i>
          <span>Register Profile</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/searchprofile.php">
        <i class="fas fa-search "></i>
          <span>Search Profile</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/profile/listproposal.php">
        <i class="fas fa-search "></i>
          <span>Proposals</span></a>
      </li>

      <?php if(isAdmin()){ ?>
      <li class="nav-item">
        <a class="nav-link" href="/reports.php">
        <i class="fas fa-database "></i>
          <span>Reports</span></a>
      </li>
      <?php  } ?>
      

      
     

      <!-- Divider -->
      <hr class="sidebar-divider d-none d-md-block">

      <!-- Sidebar Toggler (Sidebar) -->
      <div class="text-center d-none d-md-inline">
        <button class="rounded-circle border-0" id="sidebarToggle"></button>
      </div>

    </ul>