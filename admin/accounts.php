<?php require_once('config/initialize.php'); 
if(!$session->is_logged_in()){
  redirect_to(url_for('login.php'));
}
 $list = VRWorld::get_list(); 
HTML::head("Virtual Home","users");
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
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item active">VR Worlds</li>
                               
                            </ol>
                            <a href="create.php"><button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button></a>
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
                <div class="col-12">
                        
                    </div>
                    <!-- column -->
                    <div class="card">
    <div class="card-body">
        <h4 class="card-title">User's list</h4>
        <h6 class="card-subtitle"></h6>
        <button type="button" class="btn btn-info btn-rounded m-t-10 float-right" data-toggle="modal" data-target="#add-contact">Add New User</button>
        <!-- Add Contact Popup Model -->
        <div id="add-contact" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    <h4 class="modal-title" id="myModalLabel">Add New User</h4> </div>
                    <div class="modal-body">
                        <from class="form-horizontal form-material">
                        <div class="form-group">
                        <div class="col-md-12 m-b-20">
                                <input type="text" class="form-control" placeholder="First name"> </div>
                        <div class="col-md-12 m-b-20">
                                <input type="text" class="form-control" placeholder="Last name"> </div>
                                <div class="col-md-12 m-b-20">
                                    <input type="text" class="form-control" placeholder="Email"> </div>
                                    <div class="col-md-12 m-b-20">
                                        <input type="text" class="form-control" placeholder="Phone"> </div>
                                        <div class="col-md-12 m-b-20">
                                            <input type="text" class="form-control" placeholder="Type"> </div>
                                            <div class="col-md-12 m-b-20">
                                                <input type="text" class="form-control" placeholder="Age"> </div>
                                                <div class="col-md-12 m-b-20">
                                                    <input type="date" class="form-control" placeholder="Date of joining"> </div>
                                                   
                                                         
                                                    </div>
                                                    </from>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-info waves-effect" data-dismiss="modal">Save</button>
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Cancel</button>
                                                </div>
                                            </div>
                                            <!-- /.modal-content -->
                                        </div>
                                        <!-- /.modal-dialog -->
                                    </div>
                                    <div class="table-responsive">
                                        <table id="demo-foo-addrow" class="table table-bordered m-t-30 table-hover contact-list footable footable-5 footable-paging footable-paging-center breakpoint-xs" data-paging="true" data-paging-size="7" style="">
                                            <thead>
                                                <tr class="footable-header">
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                <th class="footable-first-visible" style="display: table-cell;">No</th><th style="display: table-cell;">Name</th><th style="display: table-cell;">Email</th><th style="display: table-cell;">Phone</th><th style="display: table-cell;">Role</th><th style="display: table-cell;">Age</th><th style="display: table-cell;">Joining date</th><th class="footable-last-visible" style="display: table-cell;">VR Posted</th></tr>
                                            </thead>
                                            <tbody>
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                            <tr>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                <td class="footable-first-visible" style="display: table-cell;">8</td><td style="display: table-cell;">
                                                        <a href="javascript:void(0)"><img src="assets/images/users/2.jpg" alt="user" width="40" class="img-circle"> Salman Khan</a>
                                                    </td><td style="display: table-cell;">salman@gmail.com</td><td style="display: table-cell;">+234 456 789</td><td style="display: table-cell;"><span class="label label-success">Admin</span></td><td style="display: table-cell;">27</td><td style="display: table-cell;">11-10-2014</td><td class="footable-last-visible" style="display: table-cell;"><ccc title="$1800" class="ccc--converted" style="font-size: inherit; display: inline; color: inherit;">5</ccc></td></tr><tr>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                <td class="footable-first-visible" style="display: table-cell;">9</td><td style="display: table-cell;">
                                                        <a href="javascript:void(0)"><img src="assets/images/users/3.jpg" alt="user" width="40" class="img-circle"> Govinda jalan</a>
                                                    </td><td style="display: table-cell;">govinda@gmail.com</td><td style="display: table-cell;">+345 456 789</td><td style="display: table-cell;"><span class="label label-success">Admin</span></td><td style="display: table-cell;">18</td><td style="display: table-cell;">12-5-2017</td><td class="footable-last-visible" style="display: table-cell;"><ccc title="$100" class="ccc--converted" style="font-size: inherit; display: inline; color: inherit;">10</ccc></td></tr><tr>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                <td class="footable-first-visible" style="display: table-cell;">10</td><td style="display: table-cell;">
                                                        <a href="javascript:void(0)"><img src="assets/images/users/4.jpg" alt="user" width="40" class="img-circle"> Sonu Nigam</a>
                                                    </td><td style="display: table-cell;">sonu@gmail.com</td><td style="display: table-cell;">+456 456 789</td><td style="display: table-cell;"><span class="label label-info">User</span></td><td style="display: table-cell;">36</td><td style="display: table-cell;">18-5-2009</td><td class="footable-last-visible" style="display: table-cell;"><ccc title="$4200" class="ccc--converted" style="font-size: inherit; display: inline; color: inherit;">7</ccc></td></tr><tr>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                <td class="footable-first-visible" style="display: table-cell;">11</td><td style="display: table-cell;">
                                                        <a href="javascript:void(0)"><img src="assets/images/users/5.jpg" alt="user" width="40" class="img-circle"> Varun Dhawan</a>
                                                    </td><td style="display: table-cell;">varun@gmail.com</td><td style="display: table-cell;">+567 456 789</td><td style="display: table-cell;"><span class="label label-info">User</span></td><td style="display: table-cell;">43</td><td style="display: table-cell;">12-10-2010</td><td class="footable-last-visible" style="display: table-cell;"><ccc title="$5200" class="ccc--converted" style="font-size: inherit; display: inline; color: inherit;">23</ccc></td></tr><tr>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                <td class="footable-first-visible" style="display: table-cell;">12</td><td style="display: table-cell;">
                                                        <a href="javascript:void(0)"><img src="assets/images/users/6.jpg" alt="user" width="40" class="img-circle"> Genelia Deshmukh</a>
                                                    </td><td style="display: table-cell;">genelia@gmail.com</td><td style="display: table-cell;">+123 456 789</td><td style="display: table-cell;"><span class="label label-info">User</span> </td><td style="display: table-cell;">23</td><td style="display: table-cell;">12-10-2014</td><td class="footable-last-visible" style="display: table-cell;"><ccc title="$1200" class="ccc--converted" style="font-size: inherit; display: inline; color: inherit;">52</ccc></td></tr><tr>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                <td class="footable-first-visible" style="display: table-cell;">13</td><td style="display: table-cell;">
                                                        <a href="javascript:void(0)"><img src="assets/images/users/7.jpg" alt="user" width="40" class="img-circle"> Arijit Singh</a>
                                                    </td><td style="display: table-cell;">arijit@gmail.com</td><td style="display: table-cell;">+234 456 789</td><td style="display: table-cell;"><span class="label label-info">User</span> </td><td style="display: table-cell;">26</td><td style="display: table-cell;">10-09-2014</td><td class="footable-last-visible" style="display: table-cell;"><ccc title="$1800" class="ccc--converted" style="font-size: inherit; display: inline; color: inherit;">4</ccc></td></tr><tr>
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                    
                                                <td class="footable-first-visible" style="display: table-cell;">14</td><td style="display: table-cell;">
                                                        <a href="javascript:void(0)"><img src="assets/images/users/8.jpg" alt="user" width="40" class="img-circle"> Govinda jalan</a>
                                                    </td><td style="display: table-cell;">govinda@gmail.com</td><td style="display: table-cell;">+345 456 789</td><td style="display: table-cell;"><span class="label label-info">User</span></td><td style="display: table-cell;">28</td><td style="display: table-cell;">1-10-2013</td><td class="footable-last-visible" style="display: table-cell;"><ccc title="$2200" class="ccc--converted" style="font-size: inherit; display: inline; color: inherit;">6</ccc></td></tr></tbody>
                                        <tfoot><tr class="footable-paging"><td colspan="8"><div class="footable-pagination-wrapper"><ul class="pagination justify-content-center"><li class="footable-page-nav" data-page="first"><a class="footable-page-link" href="#">«</a></li><li class="footable-page-nav" data-page="prev"><a class="footable-page-link" href="#">‹</a></li><li class="footable-page visible" data-page="1"><a class="footable-page-link" href="#">1</a></li><li class="footable-page visible active" data-page="2"><a class="footable-page-link" href="#">2</a></li><li class="footable-page-nav disabled" data-page="next"><a class="footable-page-link" href="#">›</a></li><li class="footable-page-nav disabled" data-page="last"><a class="footable-page-link" href="#">»</a></li></ul><div class="divider"></div><span class="label label-primary">2 of 2</span></div></td></tr></tfoot></table>
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
        <?php 
        HTML::topbar('');
       ?>
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
