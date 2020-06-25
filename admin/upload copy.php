<?php require_once('config/initialize.php'); 
if(!$session->is_logged_in()){
  redirect_to(url_for('login.php'));
}

HTML::head("Virtual Home","vr");
?>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
 
<?php 
 HTML::navbar('');
 HTML::sidebar('');
 
?>

  <!-- Content Wrapper. Contains page content -->
   
    <!-- /.content-header -->

      <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Virtual Reality Worlds</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Ribbons</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Ribbons</h3>
              </div>
          <?php $list = VRWorld::get_list(); ?>

              <!-- /.card-header -->
              <div class="card-body">
              <div class="row"><!-- OLD TOP-->
              
                <div class="col-sm-4">
                    <div class="position-relative  bg-gray" style="height: 180px">
                     <a href="vrworld.php"> 
                         <div class="ribbon-wrapper ribbon-lg">
                            <div class="ribbon bg-info">
                           TO VR WORLD
                            </div>
                        </div>
                        <figure class="cropped-image">
                            <img src="img/e006.JPG"  height="180" class="cover" />
                        </figure>
                     </a>
                    </div>
                  </div>
 
                </div><!-- OLD -->
                
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <?php 
  HTML::footer('');
  ?>
  
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE -->
<script src="js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="plugins/chart.js/Chart.min.js"></script>
<script src="js/demo.js"></script>
<script src="js/pages/dashboard3.js"></script>
</body>
</html>