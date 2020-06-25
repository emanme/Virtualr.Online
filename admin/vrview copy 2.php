<?php require_once('config/initialize.php'); 
if(!$session->is_logged_in()){
  redirect_to(url_for('login.php'));
}
$id;
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
  $vrword = VRWorld::get_obj_by_id($id); 
  $vrimages = VRWorld::get_vr_images($id); 
  
  if(!$vrword){
      redirect_to(url_for('vrworld.php?ms=invalid_id'));
  }
HTML::head("Virtual Home","vr");
?>
<body class="skin-megna fixed-layout">
    
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    
    <div id="main-wrapper">
 
<?php 
 HTML::topbar('');
 HTML::sidebar('');
?>
 <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Dashboard Page</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard Page</li>
                            </ol>
                            <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Bread crumb and right sidebar toggle -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <div class="row el-element-overlay">
                  
                    <!-- column -->
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">TRENDING ALBUMS</h5>
                                <div class="row m-t-30">
                                    <!-- column -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="el-card-item">
                                            <div class="el-card-avatar el-overlay-1"> <img src="assets/images/music//vd1.jpg" alt="user" />
                                                <span class="vd-time badge badge-info badge-pill">37</span>
                                                <div class="el-overlay">
                                                    <ul class="el-info">
                                                    <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-pencil-alt"></i></a></li>
                                                        <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="el-card-content text-left">
                                                <h5 class="card-title m-b-0">The Fallen</h5>
                                                <small class="text-muted">Sourcerer</small>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="el-card-item">
                                            <div class="el-card-avatar el-overlay-1"> <img src="assets/images/music//vd2.jpg" alt="user" />
                                                <span class="vd-time badge badge-info badge-pill">34</span>
                                                <div class="el-overlay">
                                                    <ul class="el-info">
                                                    <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-pencil-alt"></i></a></li>
                                                        <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="el-card-content text-left">
                                                <h5 class="card-title m-b-0">The Phobia</h5>
                                                <small class="text-muted">Sourcerer</small>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="el-card-item">
                                            <div class="el-card-avatar el-overlay-1"> <img src="thumb/i002.jpg" alt="user" />
                                                <span class="vd-time badge badge-info badge-pill">2</span>
                                                <div class="el-overlay">
                                                    <ul class="el-info">
                                                    <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-pencil-alt"></i></a></li>
                                                        <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="el-card-content text-left">
                                                <h5 class="card-title m-b-0">Area 51</h5>
                                                <small class="text-muted">Sourcerer</small>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="el-card-item">
                                            <div class="el-card-avatar el-overlay-1">
                                                <img src="assets/images/music//vd4.jpg" alt="user" />
                                                <span class="vd-time badge badge-info badge-pill">5</span>
                                                <div class="el-overlay">
                                                    <ul class="el-info">
                                                    <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-pencil-alt"></i></a></li>
                                                        <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="el-card-content text-left">
                                                <h5 class="card-title m-b-0">Pathetic</h5>
                                                <small class="text-muted">Sourcerer</small>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                    <!-- column -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="el-card-item">
                                            <div class="el-card-avatar el-overlay-1"> <img src="thumb/e006.jpg" alt="user" />
                                                <span class="vd-time badge badge-info badge-pill">6</span>
                                                <div class="el-overlay">
                                                    <ul class="el-info">
                                                    <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-pencil-alt"></i></a></li>
                                                        <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="el-card-content text-left">
                                                <h5 class="card-title m-b-0">The Fallen</h5>
                                                <small class="text-muted">Sourcerer</small>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="el-card-item">
                                            <div class="el-card-avatar el-overlay-1"> <img src="assets/images/music//vd6.jpg" alt="user" />
                                                <span class="vd-time badge badge-info badge-pill">7</span>
                                                <div class="el-overlay">
                                                    <ul class="el-info">
                                                    <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-pencil-alt"></i></a></li>
                                                        <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="el-card-content text-left">
                                                <h5 class="card-title m-b-0">The Phobia</h5>
                                                <small class="text-muted">Sourcerer</small>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="el-card-item">
                                            <div class="el-card-avatar el-overlay-1"> <img src="thumb/e003.jpg" alt="user" />
                                                <span class="vd-time badge badge-info badge-pill">2</span>
                                                <div class="el-overlay">
                                                    <ul class="el-info">
                                                    <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                        <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-pencil-alt"></i></a></li>
                                                        <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="el-card-content text-left">
                                                <h5 class="card-title m-b-0">Area 51</h5>
                                                <small class="text-muted">Sourcerer</small>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="el-card-item">
                                            <div class="el-card-avatar el-overlay-1">
                                                <img src="assets/images/music//vd8.jpg" alt="user" />
                                                <span class="vd-time badge badge-info badge-pill">1</span>
                                                <div class="el-overlay">
                                                    <ul class="el-info">
                                                    <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-control-play"></i></a></li>
                                                    <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-pencil-alt"></i></a></li>
                                                    <li><a class="img-circle font-20" href="music-geners.html"><i class="ti-trash"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="el-card-content text-left">
                                                <h5 class="card-title m-b-0">Pathetic</h5>
                                                <small class="text-muted">Sourcerer</small>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- column -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- column -->
                    
                </div>
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <div class="right-sidebar">
                    <div class="slimscrollright">
                        <div class="rpanel-title"> Service Panel <span><i class="ti-close right-side-toggle"></i></span> </div>
                        <div class="r-panel-body">
                            <ul id="themecolors" class="m-t-20">
                                <li><b>With Light sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default" class="default-theme">1</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green" class="green-theme">2</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red" class="red-theme">3</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue" class="blue-theme">4</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple" class="purple-theme">5</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna" class="megna-theme working">6</a></li>
                                <li class="d-block m-t-30"><b>With Dark sidebar</b></li>
                                <li><a href="javascript:void(0)" data-skin="skin-default-dark" class="default-dark-theme ">7</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-green-dark" class="green-dark-theme">8</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-red-dark" class="red-dark-theme">9</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-blue-dark" class="blue-dark-theme">10</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-purple-dark" class="purple-dark-theme">11</a></li>
                                <li><a href="javascript:void(0)" data-skin="skin-megna-dark" class="megna-dark-theme ">12</a></li>
                            </ul>
                            <ul class="m-t-20 chatonline">
                                <li><b>Chat option</b></li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/1.jpg" alt="user-img" class="img-circle"> <span>Varun Dhavan <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/2.jpg" alt="user-img" class="img-circle"> <span>Genelia Deshmukh <small class="text-warning">Away</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/3.jpg" alt="user-img" class="img-circle"> <span>Ritesh Deshmukh <small class="text-danger">Busy</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/4.jpg" alt="user-img" class="img-circle"> <span>Arijit Sinh <small class="text-muted">Offline</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/5.jpg" alt="user-img" class="img-circle"> <span>Govinda Star <small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/6.jpg" alt="user-img" class="img-circle"> <span>John Abraham<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/7.jpg" alt="user-img" class="img-circle"> <span>Hritik Roshan<small class="text-success">online</small></span></a>
                                </li>
                                <li>
                                    <a href="javascript:void(0)"><img src="assets/images/users/8.jpg" alt="user-img" class="img-circle"> <span>Pwandeep rajan <small class="text-success">online</small></span></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
           
        </div>
        <footer class="footer">
            © 2019 Eliteadmin by themedesigner.in
        </footer>
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="assets/node_modules/jquery/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="assets/node_modules/popper/popper.min.js"></script>
    <script src="assets/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="dist/js/perfect-scrollbar.jquery.min.js"></script>
     
    <!--Menu sidebar -->
    <script src="dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    
    <!--Custom JavaScript -->
    <script src="dist/js/custom.min.js"></script>
</body>

</html>
