<body class="hold-transition sidebar-mini">

      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>

        </ul>

        <ul class="navbar-nav ml-auto">
          
          <li class="nav-item">
        
              <a href="logout.php" class="nav-link" role="button">Logout</a>
          <li>
        </ul>
       
      </nav>
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-dark-primary elevation-4">
        <!-- Brand Logo -->
        <a href="home.php" class="brand-link">
          <img src="dist/img/download.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light">Arkay Apps</span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
              <img src="dist/img/avatar5.png" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
              <a href="#" class="d-block">Alexander Pierce</a>
            </div>
          </div>

          <?php $page=basename($_SERVER['PHP_SELF'])?>
       
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->
              
                <li class="nav-item">
                      <a href="home.php" class="nav-link <?php if($page == 'home.php'): echo 'active'; endif; ?>">
                          <p>
                            Dashboard
                            <i class="fas fa-angle"></i>
                          </p>
                      </a>

                </li>
              

              <li class="nav-item <?php if($page == 'listcategory.php' OR $page == 'addcategory.php'): echo 'menu-open'; endif; ?>">
              
                <a href="#" class="nav-link"> 
                  <p>
                    Category
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                
                <ul class="nav nav-treeview">
                    
                    <li class=" nav-item">
                    
                    <a href="listcategory.php" class="<?php if($page == 'listcategory.php'): echo 'nav-link active'; endif; ?> nav-link"> 

                      <i class="far fa-circle nav-icon"></i>
                      <p>Category list</p>
                      </a>
                    </li>
                    
                    <li class=" nav-item">

                    <a href="addcategory.php" class="<?php if($page == 'addcategory.php'): echo 'nav-link active'; endif; ?> nav-link">

                      <i class="far fa-circle nav-icon"></i>
                      <p>Add category</p>
                    </a>
                  </li>
                  
                  
                </ul>
              </li>
    
              <li class="nav-item <?php if($page == 'Listquestion.php' OR $page == 'Addquestion.php'): echo 'menu-open'; endif; ?>">
                  <a href="#" class="nav-link">
                    
                    <p>
                      Question
                      <i class="fas fa-angle-left right"></i>
                    </p>
                  </a>
                  <ul class="nav nav-treeview">
                  
                    <li class="nav-item">

                      <a href="Listquestion.php" class="<?php if($page == 'Listquestion.php'): echo 'nav-link active'; endif; ?> nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Question list</p>
                      </a>
                    </li>

                    <li class="nav-item">
                      <a href="Addquestion.php"  class="<?php if($page == 'Addquestion.php'): echo 'nav-link active'; endif; ?> nav-link">
                        <i class="far fa-circle nav-icon"></i>
                        <p>Add Question</p>
                      </a>
                    </li>
                    
                    
                  </ul>
              </li>
            </ul>

          </nav>
    
          <!-- /.sidebar-menu -->
        </div>
        <!-- /.sidebar -->
      </aside>

