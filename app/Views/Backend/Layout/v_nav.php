 <!-- Sidebar -->
 <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
    

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview ">
            <a href="<?=base_url('backend/Home')?>" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
            Home
              </p>
            </a>
            
          </li>
          
        <li class="nav-header"><h4>Data Master</h4></li>
          <li class="nav-item has-treeview">
            <a id="but_nav" href="#" class="nav-link">
              <i class="nav-icon fas fa-car"></i>
              <p>
                Mobil 
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="<?=base_url('backend/mobil/type')?>" class="nav-link">
                  <i class="fas fa-i-cursor"> </i>
                  <p>Type</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="<?=base_url('backend/mobil/guide')?>" class="nav-link">
                 <i class="fas fa-users"></i>
                  <p>Guide/Drivers</p>
                </a>
              </li>
                 <li class="nav-item">
                <a href="<?=base_url('backend/mobil/mobil')?>" class="nav-link">
                 <i class="fas fa-car"></i>
                  <p>Data Mobil</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
            <a href="<?=base_url('backend/pegawai')?>" class="nav-link">
              <i class="fas fa-users nav-icon"></i>
              <p>Pegawai</p>
            </a>
          </li>
         </li>

          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>