<?php require_once('config/initialize.php'); 
if(!$session->is_logged_in()){
  redirect_to(url_for('login.php'));
}
$id;
if(isset($_GET['id'])){
    $id=$_GET['id'];
}
  $vrimage = VRWorld::get_vr_image($id);  
if(!$vrimage){
  redirect_to(url_for('index.php?ms=invalid_id&reff=vrview'));  
}

HTML::head("Virtualr.Online Home","vr");
?>

  <body class="page-profile">

<?php HTML::header(); ?>
    <div class="content content-fixed content-profile">
      <div class="container pd-x-0 pd-lg-x-10 pd-xl-x-0">
        <div class="media d-block d-lg-flex">
          <!---------------------------->
        <?php 
         $commentlist = $comment->comment_by_id($current_user->id,3); 
         $list = VRWorld::get_list(); 
         
        HTML::home_sidebar($current_user);


            HTML::media_body($list);
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
