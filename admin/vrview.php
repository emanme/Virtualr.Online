<?php require_once('config/initialize.php'); 
if(!$session->is_logged_in()){
  redirect_to(url_for('login.php'));
}
$id;
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
  $vrimage = VRWorld::get_vr_image($id);  
  $commentlist = $comment->comment_by_id($id,2); 
  $likelist = $likes->get_like($id,1); 
  $sharelist = $share->get_share($id,1); 
  $viewlist = $view->get_view($id,1); 
  if(!$vrimage){
    redirect_to(url_for('vr.php?ms=invalid_id&reff=vrview'));  
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
                        <h4 class="text-themecolor">Detailed Page</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-right">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">Home</a></li>
                                <li class="breadcrumb-item "><a href="vr.php">VR World</a></li>
                                <li class="breadcrumb-item active">VR View</li>
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
                
                    <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <?php  $thumnails=$vrimage->thumnails_path."/".$vrimage->filename;
               /* echo "<pre>";
                print_r($vrimage);
                echo "</pre>";
                */ ?>
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                       
                        <div class="card">
                            <div class="card-body">
                            <div class="map-box">
                           
                                <img src="<?php echo $thumnails; ?>" width="100%" alt="user"> 
                                </div> 
                                
                                <br/>
                                
                            <small class="text-muted p-t-30 db">Image ID</small>
                                <h6><?php echo isset_return($vrimage->id); ?></h6> 
                                <small class="text-muted p-t-30 db">Uploader</small>
                                <h6><?php echo isset_return($vrimage->uploader); ?></h6>
                                <small class="text-muted p-t-30 db">Viewed</small>
                                <h6><?php echo isset_return(count($viewlist)); ?></h6> 
                                <small class="text-muted p-t-30 db">Like</small>
                                <h6><?php echo isset_return(count($likelist)); ?></h6>
                                <small class="text-muted p-t-30 db">Shared</small>
                                <h6><?php echo isset_return(count($sharelist)); ?></h6> 
                                
                                
                                    </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Comments</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#view" role="tab">Viewed</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#like" role="tab">Liked</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#shared" role="tab">Shared</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#report" role="tab">Reported</a> </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div class="tab-pane active" id="home" role="tabpanel">
                                    <div class="card-body">
                                        <div class="profiletimeline">
                                           <?php 
                                          /* echo "<pre>";
                                           print_r($commentlist);
                                           echo "</pre>";*/
                                            if ($commentlist) {
                                                $count=0;
                                                foreach ($commentlist as $key => $item) { 
                                                    $count++;
                                                    if($count>1){ ?> <hr/><?php } ?>
                                                    <div class="sl-item">
                                                            <div class="sl-left"> <img src="<?php echo url_for($item->creator_profile_pic); ?>" alt="user" class="img-circle" /> </div>
                                                            <div class="sl-right">
                                                                <div><a href="profile.php?id=<?php echo $item->creator_id; ?>" class="link"><?php echo $item->creator_name; ?>  </a>
                                                                <span class="sl-date"><?php echo time_ago_in_php($item->updated_at); ?></span>
                                                               <?php 
                                                                if($item->media_type==1) { //for text comment
                                                                 ?> 
                                                                    <blockquote class="m-t-10">
                                                                <?php echo $item->content; ?>    
                                                                </blockquote>
                                                                <?php }
                                                                 elseif($item->media_type==2){ //for image comment 
                                                                   $src= ($item->url=='local') ? url_for($item->content): $item->url.$item->content ;
        
                                                                 ?>
                                                                    <div class="m-t-20 row">
                                                                        <div class="col-md-3 col-xs-12"><img src="<?php echo $src; ?>" alt="user" class="img-responsive radius" /></div>
                                                                    </div>
                                                                    
                                                                 <?php } 
                                                                  $reactlist = $react->get_react($item->id);
                                                                 /* echo "<hr/><pre>";
                                                                  print_r($reactlist);
                                                                  echo "</pre><hr/>";*/ 
                                                                 
                                                                  ?>
                                                                 <div class="like-comm m-t-20"> 
                                                                     <?php 
                                                                      $love=0; $like=0; $dislike=0;
                                                                      if ($reactlist) {
                                                                       
                                                                            foreach ($reactlist as $key => $item) {
                                                                            if($item->type==1){ $love=$item->count; }
                                                                            elseif($item->type==2){ $like=$item->count; }
                                                                            elseif($item->type==3){ $dislike=$item->count; }
                                                                        }  
                                                                    } ?>
                                                                         <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> <?php echo $love; ?> Love</a>
                                                                         <a href="javascript:void(0)" class="link m-r-10"><i class="fas fa-thumbs-up text-info"></i> <?php echo $like; ?> Like</a>
                                                                         <a href="javascript:void(0)" class="link m-r-10"><i class="fas fa-thumbs-down text-info"></i> <?php echo $dislike; ?> Dislike</a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        
                                                <?php 
                                                  }
                                                } else{
                                                    ?><div class="alert alert-warning">No Comment yet. </div>
                                               <?php }  ?>
                                            
                                        </div>
                                    </div>
                                </div>
                                <!--second tab-->
                                <div class="tab-pane" id="view" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title">Users Who view this image</h4>
                                    <h6 class="card-subtitle">admin can identify the user's who viewed this photo</h6>
                                    <section>
                                        <div class="icon-list-demo row">
                                            <?php  
                                          /* echo "<pre>";
                                           print_r($commentlist);
                                           echo "</pre>";*/
                                            if ($viewlist) {
                                                foreach ($viewlist as $key => $item) { 
                                                ?>
                                                 <div class="profiletimeline"><div class="sl-left"><img src="<?php echo url_for($item->creator_profile_pic); ?>" alt="user" class="img-circle" /> <?php echo $item->fullname; ?></div> </div>
                                                <?php
                                                } 
                                             } else{
                                                ?><div class="alert alert-warning">Sorry. Nobody saw this.   </div>
                                           <?php }  ?>
                                        </div>
                                 </section>
                                 </div>
                                </div>
                                </div> 
                                </div>
                                 </div>
                                </div>
                                <div class="tab-pane" id="like" role="tabpanel">
                                <div class="card-body">
                                        <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title">Users Who Like and dislike this image</h4>
                                    <h6 class="card-subtitle">admin can identify the user's who Like and dislike this photo</h6>
                                    <section>
                                        <div class="icon-list-demo row">
                                            <?php  
                                          /* echo "<pre>";
                                           print_r($likelist);
                                           echo "</pre>";*/
                                            if ($likelist) {
                                                foreach ($likelist as $key => $item) { 
                                                ?>
                                                 <div class="profiletimeline"><div class="sl-left"><img src="<?php echo url_for($item->creator_profile_pic); ?>" alt="user" class="img-circle" /> <?php echo $item->fullname; ?></div> </div>
                                                <?php
                                                } 
                                             } else{
                                                ?><div class="alert alert-warning">No Like yet. </div>
                                           <?php } ?>
                                        </div>
                                 </section>
                                 </div>
                                </div>
                                </div> 
                                </div>
                                 </div>
                                </div>

                                <div class="tab-pane" id="shared" role="tabpanel">
                                <div class="card-body">
                                        <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title">Users Who shared this image</h4>
                                    <h6 class="card-subtitle">admin can identify the user's who shared this photo</h6>
                                    <section>
                                        <div class="icon-list-demo row">
                                            <?php 
                                          /* echo "<pre>";
                                           print_r($commentlist);
                                           echo "</pre>"; */
                                            if ($sharelist) {
                                                foreach ($sharelist as $key => $item) { 
                                                ?>
                                                 <div class="profiletimeline"><div class="sl-left"><img src="<?php echo url_for($item->creator_profile_pic); ?>" alt="user" class="img-circle" /> <?php echo $item->fullname; ?></div> </div>
                                                <?php
                                                } 
                                             } else{
                                                ?><div class="alert alert-warning">Empty</div>
                                           <?php } ?>
                                        </div>
                                 </section>
                                 </div>
                                </div>
                                </div> 
                                </div>
                                 </div>
                                </div>
                                <div class="tab-pane" id="report" role="tabpanel">
                                <div class="card-body">
                                        <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                    <div class="card-body">
                                    <h4 class="card-title">Users Who Like and dislike this image</h4>
                                    <h6 class="card-subtitle">admin can identify the user's who Like and dislike this photo</h6>
                                    <section>
                                        <div class="icon-list-demo row">
                                            <?php  $viewlist = $view->get_view($id,1); 
                                          /* echo "<pre>";
                                           print_r($commentlist);
                                           echo "</pre>";*/
                                            if ($viewlist) {
                                                foreach ($viewlist as $key => $item) { 
                                                ?>
                                                 <div class="profiletimeline"><div class="sl-left"><img src="<?php echo url_for($item->creator_profile_pic); ?>" alt="user" class="img-circle" /> <?php echo $item->fullname; ?></div> </div>
                                                <?php
                                                } 
                                             } else{
                                                ?><div class="alert alert-success">Not yet Reported</div>
                                           <?php } ?>
                                        </div>
                                 </section>
                                 </div>
                                </div>
                                </div> 
                                </div>
                                 </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                   
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
