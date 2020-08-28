  <!-- Main content -->
  
    <!-- /.content -->
  
  <!-- /.content-wrapper -->

<section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1">
                <a href="<?php echo site_url("backend/pegawai"); ?>" ><i class="fas fa-cog"></i></a></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Pegawai</span>
                <span class="info-box-number">    
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <?php
        //   if ($this->session->flashdata('level'))
        // {
        //   echo '<div class="alert alert-danger alert-dismissible">
        //           <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        //           <h5><i class="icon fas fa-ban"></i> Alert!</h5>                  
        //         ';
        //   echo $this->session->flashdata('level');
     
        //   echo '</div';

        // }
?>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <!-- <span class="info-box-icon bg-danger elevation-1"><a href="" title=""><i class="fas fa-thumbs-up"></i></a></span> -->
              <span class="info-box-icon bg-info elevation-1">
                <a href="<?php echo site_url("backend/mobil/guide"); ?>" ><i class="fas fa-cog"></i></a></span>
              <div class="info-box-content">
                <span class="info-box-text">Total Guide</span>
         
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>

          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>
              
              <div class="info-box-content">
              <a href="<?php echo site_url("backend/mobil/guide"); ?>" ></a></span>
                <span class="info-box-text">Total Mobil</span>

              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">New Members</span>
                <span class="info-box-number">2,000</span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        