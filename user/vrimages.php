<?php require_once('config/initialize.php'); 
if(!$session->is_logged_in()){
  redirect_to(url_for('login.php'));
}
HTML::head("Virtualr.Online Home","vrimages");
?>

  <body class="page-profile">

<?php HTML::header(); ?>
    <div class="content content-fixed content-profile">
      <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="media d-block d-lg-flex">
          <!---------------------------->
        <?php 
         $commentlist = $comment->comment_by_id($current_user->id,3); 
         $list = VRWorld::get_list2(); 
        HTML::home_sidebar($current_user,"vrimages");
       ?>
   <div class="content-body">
        <div class="container pd-x-0 tx-13">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-5">
              <li class="breadcrumb-item"><a href="#">Your Profile</a></li>
              <li class="breadcrumb-item active" aria-current="page">Connections</li>
            </ol>
          </nav>
          <h4 class="mg-b-25">Virtual Reality</h4>

          <div class="row">
          <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <h5 class="card-title">Virtual World's List</h5>
                                <div class="row m-t-30">
                                    <!-- column -->
                                    <?php   
                if ($list) {
                    foreach ($list as $key => $item) { 
                        $item->primary_img=$item->path."/".$item->filename;
                        $thumnails=$item->thumnails_path."/".$item->filename;
                        $thumnails= img_check("/".$thumnails);
                       
                    ?>
               <div class="card mg-t-15 mg-r-15 mg-l-15  mg-b-20">
             <?php //echo print_r($item); ?>
 <a href="<?php echo url_for("vrviewer.php?id=".$item->imageid."&worldid=".$item->id."&ref=vrimages") ?>"> <img src="<?php echo $thumnails;  ?>" class="card-img-top" alt="..."> </a>
  <div class="card-body">
    <h6 class="card-title"><?php echo $item->title; ?></h6>
    <p class="card-text">by: <?php echo $item->first_name; ?> <?php echo $item->last_name; ?></p>
    <a href="<?php echo url_for("vrviewer.php?id=".$item->imageid."&worldid=".$item->id."&ref=vrimages") ?>" class="btn btn-primary">Launce</a>
  </div>
</div>
                                  
                    <?php } 
                  }?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
            
            
          </div><!-- row -->
        </div><!-- container -->
      </div><!-- content-body -->
       <?php
        HTML::right_sidebar(); ?>
         
          
        </div><!-- media -->
      </div><!-- container -->
    </div><!-- content -->

     <?php HTML::footer(); ?>
    <script src="lib/jquery/jquery.min.js"></script>
    <script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="lib/feather-icons/feather.min.js"></script>
    <script src="lib/perfect-scrollbar/perfect-scrollbar.min.js"></script>

    <script src="assets/js/dashforge.js"></script>

    <!-- append theme customizer -->
    <script src="lib/js-cookie/js.cookie.js"></script>
    <script src="assets/js/dashforge.settings.js"></script>

    <script>
      $(function(){
        'use strict'

        $('[data-toggle="tooltip"]').tooltip()
      })
    </script>
  </body>
</html>
