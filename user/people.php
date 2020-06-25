<?php require_once('config/initialize.php'); 
if(!$session->is_logged_in()){
  redirect_to(url_for('login.php'));
}
HTML::head("Virtualr.Online Home","friends");
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
        HTML::home_sidebar($current_user,"people");
       ?>
   <div class="content-body">
        <div class="container pd-x-0 tx-13">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb breadcrumb-style1 mg-b-5">
              <li class="breadcrumb-item"><a href="#">Your Profile</a></li>
              <li class="breadcrumb-item active" aria-current="page">Connections</li>
            </ol>
          </nav>
          <h4 class="mg-b-25">Connections</h4>

          <div class="row">
            <div class="col-lg-12 col-xl-12">
              <ul class="nav nav-line nav-line-profile mg-b-30">
                <li class="nav-item">
                  <a href="" class="nav-link d-flex align-items-center active">Friends <span class="badge">40</span></a>
                </li> 
                <li class="nav-item d-none d-sm-block">
                  <a href="" class="nav-link">Request  <span class="badge">11</span></a>
                </li>
              </ul>

              <div class="row row-xs mg-b-25 profile-list">
                <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3">
                  <div class="card card-profile">
                    <img src="upload/FreeGreatPicture.com-9532-degree-seamless-panoramic.jpg" class="card-img-top" alt="">
                    <div class="card-body tx-13">
                      <div>
                        <a href="">
                          <div class="avatar avatar-lg"><img src="img/users/2.jpg" class="rounded-circle" alt=""></div>
                        </a>
                        <h5><a href="">Zhen Juan Chiu</a></h5>
                        <p>San Juan So. Leyte</p>
                        <button class="btn btn-block btn-primary">Unfriend</button>
                      </div>
                    </div>
                  </div><!-- card -->
                </div><!-- col -->
                <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10 mg-sm-t-0">
                  <div class="card card-profile">
                    <img src="upload/FreeGreatPicture.com-9425-degree-seamless-panoramic.jpg" class="card-img-top" alt="">
                    <div class="card-body tx-13">
                      <div>
                        <a href="">
                          <div class="avatar avatar-lg"><img src="img/users/3.jpg" class="rounded-circle" alt=""></div>
                        </a>
                        <h5><a href="">Barbara Marion</a></h5>
                        <p>Southern Leyte</p>
                        <button class="btn btn-block btn-primary">Unfriend</button>
                      </div>
                    </div>
                  </div><!-- card -->
                </div><!-- col -->
                <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10 mg-sm-t-0">
                  <div class="card card-profile">
                    <img src="upload/FreeGreatPicture.com-9318-degree-seamless-panoramic.jpg" class="card-img-top" alt="">
                    <div class="card-body tx-13">
                      <div>
                      <a href="">
                          <div class="avatar avatar-lg"><img src="img/users/4.jpg" class="rounded-circle" alt=""></div>
                        </a>
                        <h5><a href="">Christine Arnold</a></h5>
                        <p>Samar</p>
                        <button class="btn btn-block btn-primary">Unfriend</button>
                      </div>
                    </div>
                  </div><!-- card -->
                </div><!-- col -->
                <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10 mg-md-t-0 mg-lg-t-10 mg-xl-t-0">
                  <div class="card card-profile">
                    <img src="upload/FreeGreatPicture.com-5603-degree-seamless-panoramic.jpg" class="card-img-top" alt="">
                    <div class="card-body tx-13">
                      <div>
                      <a href="">
                          <div class="avatar avatar-lg"><img src="img/users/6.jpg" class="rounded-circle" alt=""></div>
                        </a>
                        <h5><a href="">Natalie Corwin</a></h5>
                        <p>Sogod So. Leyte</p>
                        <button class="btn btn-block btn-primary">Unfriend</button>
                      </div>
                    </div>
                  </div><!-- card -->
                </div><!-- col -->
                <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10">
                  <div class="card card-profile">
                    <img src="upload/FreeGreatPicture.com-5461-degree-seamless-panoramic.jpg" class="card-img-top" alt="">
                    <div class="card-body tx-13">
                      <div>
                      <a href="">
                          <div class="avatar avatar-lg"><img src="img/users/8.jpg" class="rounded-circle" alt=""></div>
                        </a>
                        <h5><a href="">Carolyn Park</a></h5>
                        <p>P Burgos So. Leyte</p>
                        <button class="btn btn-block btn-primary">Unfriend</button>
                      </div>
                    </div>
                  </div><!-- card -->
                </div><!-- col -->
                <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10">
                  <div class="card card-profile">
                    <img src="upload/FreeGreatPicture.com-5319-degree-seamless-panoramic.jpg" class="card-img-top" alt="">
                    <div class="card-body tx-13">
                      <div>
                        <a href="">
                          <div class="avatar avatar-lg"><span class="avatar-initial rounded-circle bg-gray-900">d</span></div>
                        </a>
                        <h5><a href="">Debbie Hite</a></h5>
                        <p>Liloan So. Leyte</p>
                        <button class="btn btn-block btn-primary">Unfriend</button>
                      </div>
                    </div><!-- card-body -->
                  </div><!-- card -->
                </div><!-- col -->
                <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10">
                  <div class="card card-profile">
                    <img src="upload/FreeGreatPicture.com-5034-degree-seamless-panoramic.jpg" class="card-img-top" alt="">
                    <div class="card-body tx-13">
                      <div>
                      <a href="">
                          <div class="avatar avatar-lg"><img src="img/users/5.jpg" class="rounded-circle" alt=""></div>
                        </a>
                        <h5><a href="">Sandra Valles</a></h5>
                        <p>Maasin So. Leyte</p>
                        <button class="btn btn-block btn-primary">Unfriend</button>
                      </div>
                    </div><!-- card-body -->
                  </div><!-- card -->
                </div><!-- col -->
                <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10">
                  <div class="card card-profile">
                    <img src="upload/FreeGreatPicture.com-4891-degree-seamless-panoramic.jpg" class="card-img-top" alt="">
                    <div class="card-body tx-13">
                      <div>
                      <a href="">
                          <div class="avatar avatar-lg"><img src="img/users/agent.jpg" class="rounded-circle" alt=""></div>
                        </a>
                        <h5><a href="">Patrick Miramon</a></h5>
                        <p>Biliran</p>
                        <button class="btn btn-block btn-primary">Unfriend</button>
                      </div>
                    </div><!-- card-body -->
                  </div><!-- card -->
                </div><!-- col -->
                <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10">
                  <div class="card card-profile">
                    <img src="upload/FreeGreatPicture.com-4601-degree-seamless-panoramic.jpg" class="card-img-top" alt="">
                    <div class="card-body tx-13">
                      <div>
                      <a href="">
                          <div class="avatar avatar-lg"><img src="img/users/user3.jpg" class="rounded-circle" alt=""></div>
                        </a>
                        <h5><a href="">Amalia Redfern</a></h5>
                        <p>Hinunangan So. Leyte</p>
                        <button class="btn btn-block btn-primary">Unfriend</button>
                      </div>
                    </div><!-- card-body -->
                  </div><!-- card -->
                </div><!-- col -->
                <div class="col-sm-4 col-md-3 col-lg-4 col-xl-3 mg-t-10">
                  <div class="card card-profile">
                    <img src="upload/FreeGreatPicture.com-4455-degree-seamless-panoramic.jpg" class="card-img-top" alt="">
                    <div class="card-body tx-13">
                      <div>
                      <a href="">
                          <div class="avatar avatar-lg"><img src="img/users/user4.jpg" class="rounded-circle" alt=""></div>
                        </a>
                        <h5><a href="">Carl Rossignol</a></h5>
                        <p>Anahawan  So. Leyte</p>
                        <button class="btn btn-block btn-primary">Unfriend</button>
                      </div>
                    </div><!-- card-body -->
                  </div><!-- card -->
                </div><!-- col -->
              </div><!-- row -->

              <button class="btn btn-block btn-sm btn-primary">Load more</button>
            </div><!-- col -->
            
            
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
