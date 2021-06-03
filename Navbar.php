      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
        <!-- Left navbar links -->
        <ul class="navbar-nav">
          
          <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>

        </ul>

        <ul class="navbar-nav ml-auto">
          
        <li class="dropdown user user-menu">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <img src="dist/img/avatar5.png" class="user-image" alt="User Image">Admin
           
            </a>
            <ul class="dropdown-menu">
              <!-- User image -->
              <li class="user-header">
                  <img src="dist/img/avatar5.png" class="img-circle" alt="User Image">
              <div>    Elbert murrio
              </div>
              </li>
              
              <!-- Menu Footer-->
              <li class="user-footer">
                <div class="float-left">
                  <a href="profile.php" class="btn btn-default ">Profile</a>
                </div>
                <div class="flaot-right">
                  <a href="logout.php" class="btn btn-default float-right">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
       
      </nav>
      <!-- /.navbar -->
    
      <!-- Main Sidebar Container -->
      <aside class="main-sidebar skin-blue sidebar-dark-primary elevation-7">
        <!-- Brand Logo -->
        <a href="home.php" class="brand-link">
        <img src="./images/logo.png" alt="GK Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
          <span class="brand-text font-weight-light"><b>GK in Gujarati</b></span>
        </a>
    
        <!-- Sidebar -->
        <div class="sidebar">
          <!-- Sidebar user (optional) -->
         
          <?php $page=basename($_SERVER['PHP_SELF'])?>
       
    
          <!-- Sidebar Menu -->
          <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
              <!-- Add icons to the links using the .nav-icon class
                   with font-awesome or any other icon font library -->

              <li class="nav-item">
                  <a href="home.php" class="nav-link <?php if($page == 'home.php'): echo 'active'; endif; ?>">
                      <i class="fa fa-home"></i>
                      <h10>&nbsp;Dashboard</h10>
                  </a>
              </li>

              
              
              <li class="nav-item <?php if($page == 'list_othercategory.php' OR $page == 'add_othercategory.php'): echo 'menu-open active'; endif; ?>">
              <a href="#" class="nav-link"> 
                    <i class="fa fa-certificate"></i>
                    <span>&nbsp;Other Category</span>
                    <i class="fa fa-angle-left right"></i>
              </a>
              <ul class="nav nav-treeview"> 
                  <li class="nav-item">
                    <a href="list_othercategory.php" class="<?php if($page == 'list_othercategory.php'): echo 'nav-link active'; endif; ?> nav-link"> 
                     
                      <p>List category</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="add_othercategory.php" class="<?php if($page == 'add_othercategory.php'): echo 'nav-link active'; endif; ?> nav-link"> 
                    
                      <p>Add category</p>
                  </a>
                  </li>
               </ul>
              </li>

              <li class="nav-item <?php if($page == 'listcategory.php' OR $page == 'addcategory.php'): echo 'menu-open'; endif; ?>">
                <a href="#" class="nav-link"> 
                    <i class="fas fa-list"></i>
                    <span>&nbsp;Category</span>
                    <i class="fa fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview">
                    <li class=" nav-item">
                      <a href="listcategory.php" class="<?php if($page == 'listcategory.php'): echo 'nav-link active'; endif; ?> nav-link"> 
                      
                        <p>Category list</p>
                      </a>
                    </li>
                    <li class=" nav-item">
                      <a href="addcategory.php" class="<?php if($page == 'addcategory.php'): echo 'nav-link active'; endif; ?> nav-link">
                  
                        <p>Add category</p>
                      </a>
                  </li>
                 </ul>
              </li>
    
              <li class="nav-item <?php if($page == 'Listquestion.php' OR $page == 'Addquestion.php'): echo 'menu-open'; endif; ?>">
                  <a href="#" class="nav-link">
                    <i class="fa fa-question"></i>
                    <span>&nbsp;Question</span>
                    <i class="fa fa-angle-left right"></i>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="Listquestion.php" class="<?php if($page == 'Listquestion.php'): echo 'nav-link active'; endif; ?> nav-link">
                        
                        <p>Question list</p>
                      </a>
                    <li class="nav-item">
                      <a href="Addquestion.php"  class="<?php if($page == 'Addquestion.php'): echo 'nav-link active'; endif; ?> nav-link">
                        
                        <p>Add Question</p>
                      </a>
                    </li>
                  </ul>
              </li>

              <li class="nav-item <?php if($page == 'list_current_affair.php' OR $page == 'add_current_affair.php'): echo 'menu-open'; endif; ?>">
                <a href="#" class="nav-link"> 
                <i class="fas fa-calendar"></i>
                    <span>&nbsp;Current Affair</span>
                    <i class="fa fa-angle-left right"></i>
                </a>
                <ul class="nav nav-treeview"> 
                  <li class=" nav-item">
                    <a href="list_current_affair.php" class="<?php if($page == 'list_current_affair.php'): echo 'nav-link active'; endif; ?> nav-link"> 
                      
                      <h10>List Current Affairs</h10>
                    </a>
                  </li>
                  <li class=" nav-item">
                    <a href="add_current_affair.php" class="<?php if($page == 'add_current_affair.php'): echo 'nav-link active'; endif; ?> nav-link"> 
                      <h10>Add Current Affairs</h10>
                    </a>
                  </li>
                </ul>
              </li> 

                <li class="nav-item <?php if($page == 'list_general_knowledge.php' OR $page == 'add_general_knowledge.php'): echo 'menu-open'; endif; ?>">
                  <a href="#" class="nav-link">
                  <i class="fas fa-book"></i>
                    <h10>&nbsp;General Knowledge</h10>
                    <i class="fa fa-angle-left right"></i>
                  </a>
                  <ul class="nav nav-treeview">
                    <li class="nav-item">
                      <a href="list_general_knowledge.php" class="<?php if($page == 'list_general_knowledge.php'): echo 'nav-link active'; endif; ?> nav-link">
                        <h10>list GK</h10>
                      </a>
                    </li>
                      <li class="nav-item">
                      <a href="add_general_knowledge.php"  class="<?php if($page == 'add_general_knowledge.php'): echo 'nav-link active'; endif; ?> nav-link">
                        <p>Add GK</p>
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

