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
$vrimage = VRWorld::get_vr_image($id);  
HTML::head("Virtualr.Online Home","vr");
?>
   <script src="js/aframe.js"></script>
   <script src="js/aframe-button-controls.js"></script> 
    
     
  <body class="page-profile">

 
   
 
         
          <a-scene>
        
          <a-entity oculus-touch-controls="hand: left"></a-entity>
<a-entity oculus-touch-controls="hand: right"></a-entity>
<?php 
  if($vrimage) {

     // echo "<pre/>";
     //   print_r($vrimage);
     //  echo "</pre>";

    foreach ($vrimage as $key => $item) { 
      $item->primary_img=$item->path."/".$item->filename;
      $thumnails=$item->thumnails_path."/".$item->filename;
      $thumnails= img_check("/".$thumnails);
      ?>
       <a-sky src="<?php echo $item->primary_img; ?>"></a-sky>
         
  <?php } 
  } ?>
        <!-- "button" -->
    


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
