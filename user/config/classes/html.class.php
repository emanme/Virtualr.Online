<?php

class HTML {
    public $errors = [];
    public static $current_tab="home";

    static public function head($title="VirtualR.Online",$page="") { 
     
        ?><!DOCTYPE html>
        <html lang="en">
          <head>
        
            <!-- Required meta tags -->
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        
            <!-- Twitter -->
            <meta name="twitter:site" content="@themepixels">
            <meta name="twitter:creator" content="@themepixels">
            <meta name="twitter:card" content="summary_large_image">
            <meta name="twitter:title" content="DashForge">
            <meta name="twitter:description" content="Responsive Bootstrap 4 Dashboard Template">
            <meta name="twitter:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
        
            <!-- Facebook -->
            <meta property="og:url" content="http://themepixels.me/dashforge">
            <meta property="og:title" content="DashForge">
            <meta property="og:description" content="Responsive Bootstrap 4 Dashboard Template">
        
            <meta property="og:image" content="http://themepixels.me/dashforge/img/dashforge-social.png">
            <meta property="og:image:secure_url" content="http://themepixels.me/dashforge/img/dashforge-social.png">
            <meta property="og:image:type" content="image/png">
            <meta property="og:image:width" content="1200">
            <meta property="og:image:height" content="600">
        
            <!-- Meta -->
            <meta name="description" content="Responsive Bootstrap 4 Dashboard Template">
            <meta name="author" content="ThemePixels">
        
            <!-- Favicon -->
            <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
        
            <title><?php echo $title; ?></title>
        
            <!-- vendor css -->
            <link href="lib/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
            <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
        
            <!-- DashForge CSS -->
            <link rel="stylesheet" href="assets/css/dashforge.css">
            <link rel="stylesheet" href="assets/css/dashforge.profile.css">
            
          </head>
        <?php

    }
    static public function header($active="") {
      ?>
  
  <header class="navbar navbar-header navbar-header-fixed" >
        <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
        <div class="navbar-brand">
          <a href="index.php" class="df-logo">Virtual<span>R.online</span></a>
        </div><!-- navbar-brand -->
        <div id="navbarMenu" class="navbar-menu-wrapper">
          <div class="navbar-menu-header">
            <a href="index.html" class="df-logo">dash<span>forge</span></a>
            <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
          </div><!-- navbar-menu-header -->
          <ul class="nav navbar-menu">
            <li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Main Navigation</li>
            <li class="nav-item <?php if($active=='home') { echo "active"; } ?>"><a href="<?php echo url_for('index.php') ?>" class="nav-link"><i data-feather="archive"></i> Home</a></li>
            <li class="nav-item <?php if($active=='vrworld') { echo "active"; } ?>"><a href="<?php echo url_for('vrimages.php') ?>" class="nav-link"><i data-feather="archive"></i> VR Words</a></li>
            <li class="nav-item <?php if($active=='messages') { echo "active"; } ?>"><a href="<?php echo url_for('messages.php') ?>" class="nav-link"><i data-feather="archive"></i> Messages</a></li>
            <li class="nav-item <?php if($active=='settings') { echo "active"; } ?>"><a href="<?php echo url_for('settings.php') ?>" class="nav-link"><i data-feather="archive"></i> Settings</a></li>
            
         </ul>
        </div><!-- navbar-menu-wrapper -->
        <div class="navbar-right">
          <a id="navbarSearch" href="" class="search-link"><i data-feather="search"></i></a>
          <div class="dropdown dropdown-message">
            <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
              <i data-feather="message-square"></i>
              <span>5</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-header">New Messages</div>
              <a href="" class="dropdown-item">
                <div class="media">
                  <div class="avatar avatar-sm avatar-online"><img src="http://localhost/VR-v3/user/img/users/8.jpg" class="rounded-circle" alt=""></div>
                  <div class="media-body mg-l-15">
                    <strong>Socrates Itumay</strong>
                    <p>nam libero tempore cum so...</p>
                    <span>Mar 15 12:32pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </a>
              <a href="" class="dropdown-item">
                <div class="media">
                  <div class="avatar avatar-sm avatar-online"><img src="http://localhost/VR-v3/user/img/users/6.jpg" class="rounded-circle" alt=""></div>
                  <div class="media-body mg-l-15">
                    <strong>Joyce Chua</strong>
                    <p>on the other hand we denounce...</p>
                    <span>Mar 13 04:16am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </a>
              <a href="" class="dropdown-item">
                <div class="media">
                  <div class="avatar avatar-sm avatar-online"><img src="http://localhost/VR-v3/user/img/users/5.jpg" class="rounded-circle" alt=""></div>
                  <div class="media-body mg-l-15">
                    <strong>Althea Cabardo</strong>
                    <p>is there anyone who loves...</p>
                    <span>Mar 13 02:56am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </a>
              <a href="" class="dropdown-item">
                <div class="media">
                  <div class="avatar avatar-sm avatar-online"><img src="http://localhost/VR-v3/user/img/users/4.jpg" class="rounded-circle" alt=""></div>
                  <div class="media-body mg-l-15">
                    <strong>Adrian Monino</strong>
                    <p>duis aute irure dolor in repre...</p>
                    <span>Mar 12 10:40pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </a>
              <div class="dropdown-footer"><a href="">View all Messages</a></div>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown dropdown-notification">
            <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
              <i data-feather="bell"></i>
              <span>2</span>
            </a>
            <div class="dropdown-menu dropdown-menu-right">
              <div class="dropdown-header">Notifications</div>
              <a href="" class="dropdown-item">
                <div class="media">
                  <div class="avatar avatar-sm avatar-online"><img src="http://localhost/VR-v3/user/img/users/3.jpg" class="rounded-circle" alt=""></div>
                  <div class="media-body mg-l-15">
                    <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                    <span>Mar 15 12:32pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </a>
              <a href="" class="dropdown-item">
                <div class="media">
                  <div class="avatar avatar-sm avatar-online"><img src="http://localhost/VR-v3/user/img/users/6.jpg" class="rounded-circle" alt=""></div>
                  <div class="media-body mg-l-15">
                    <p><strong>Joyce Chua</strong> just created a new VR World</p>
                    <span>Mar 13 04:16am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </a>
              <a href="" class="dropdown-item">
                <div class="media">
                  <div class="avatar avatar-sm avatar-online"><img src="http://localhost/VR-v3/user/img/users/7.jpg" class="rounded-circle" alt=""></div>
                  <div class="media-body mg-l-15">
                    <p><strong>Althea Cabardo</strong> just created a new post</p>
                    <span>Mar 13 02:56am</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </a>
              <a href="" class="dropdown-item">
                <div class="media">
                  <div class="avatar avatar-sm avatar-online"><img src="http://localhost/VR-v3/user/img/users/8.jpg" class="rounded-circle" alt=""></div>
                  <div class="media-body mg-l-15">
                    <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                    <span>Mar 12 10:40pm</span>
                  </div><!-- media-body -->
                </div><!-- media -->
              </a>
              <div class="dropdown-footer"><a href="">View all Notifications</a></div>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
          <div class="dropdown dropdown-profile">
            <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
              <div class="avatar avatar-sm"><img src="http://localhost/VR-v3/user/img/users/user4.jpg" class="rounded-circle" alt=""></div>
            </a><!-- dropdown-link -->
            <div class="dropdown-menu dropdown-menu-right tx-13">
              <div class="avatar avatar-lg mg-b-15"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
              <h6 class="tx-semibold mg-b-5">Katherine Pechon</h6>
              <p class="mg-b-25 tx-12 tx-color-03">Administrator</p>
  
              <a href="" class="dropdown-item"><i data-feather="edit-3"></i> Edit Profile</a>
              <a href="page-profile-view.html" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
              <div class="dropdown-divider"></div>
              <a href="page-help-center.html" class="dropdown-item"><i data-feather="help-circle"></i> Help Center</a>
              <a href="" class="dropdown-item"><i data-feather="life-buoy"></i> Forum</a>
              <a href="" class="dropdown-item"><i data-feather="settings"></i>Account Settings</a>
              <a href="" class="dropdown-item"><i data-feather="settings"></i>Privacy Settings</a>
              <a href="<?php echo url_for('logout.php') ?>" class="dropdown-item"><i data-feather="log-out"></i>Sign Out</a>
            </div><!-- dropdown-menu -->
          </div><!-- dropdown -->
        </div><!-- navbar-right -->
        <div class="navbar-search">
          <div class="navbar-search-header">
            <input type="search" class="form-control" placeholder="Type and hit enter to search...">
            <button class="btn"><i data-feather="search"></i></button>
            <a id="navbarSearchClose" href="" class="link-03 mg-l-5 mg-lg-l-10"><i data-feather="x"></i></a>
          </div><!-- navbar-search-header -->
          <div class="navbar-search-body">
            <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Recent Searches</label>
            <ul class="list-unstyled">
              <li><a href="dashboard-one.html">modern dashboard</a></li>
              <li><a href="app-calendar.html">calendar app</a></li>
              <li><a href="collections/modal.html">modal examples</a></li>
              <li><a href="components/el-avatar.html">avatar</a></li>
            </ul>
  
            <hr class="mg-y-30 bd-0">
  
            <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Search Suggestions</label>
  
            <ul class="list-unstyled">
              <li><a href="dashboard-one.html">cryptocurrency</a></li>
              <li><a href="app-calendar.html">button groups</a></li>
              <li><a href="collections/modal.html">form elements</a></li>
              <li><a href="components/el-avatar.html">contact app</a></li>
            </ul>
          </div><!-- navbar-search-body -->
        </div><!-- navbar-search -->
      </header><!-- navbar -->
      <?php
      }
      static public function header2() {
        ?>
    
    <header class="navbar navbar-header navbar-header-fixed" >
          <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
          <div class="navbar-brand">
            <a href="index.php" class="df-logo">Virtual<span>R.online</span></a>
          </div><!-- navbar-brand -->
         
          <div class="navbar-search">
            <div class="navbar-search-header">
              <input type="search" class="form-control" placeholder="Type and hit enter to search...">
              <button class="btn"><i data-feather="search"></i></button>
              <a id="navbarSearchClose" href="" class="link-03 mg-l-5 mg-lg-l-10"><i data-feather="x"></i></a>
            </div><!-- navbar-search-header -->
            <div class="navbar-search-body">
              <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Recent Searches</label>
              <ul class="list-unstyled">
                <li><a href="dashboard-one.html">modern dashboard</a></li>
                <li><a href="app-calendar.html">calendar app</a></li>
                <li><a href="collections/modal.html">modal examples</a></li>
                <li><a href="components/el-avatar.html">avatar</a></li>
              </ul>
    
              <hr class="mg-y-30 bd-0">
    
              <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Search Suggestions</label>
    
              <ul class="list-unstyled">
                <li><a href="dashboard-one.html">cryptocurrency</a></li>
                <li><a href="app-calendar.html">button groups</a></li>
                <li><a href="collections/modal.html">form elements</a></li>
                <li><a href="components/el-avatar.html">contact app</a></li>
              </ul>
            </div><!-- navbar-search-body -->
          </div><!-- navbar-search -->
        </header><!-- navbar -->
        <?php
        }
      static public function vr_header() {
        ?>
    
    <header class="navbar navbar-header navbar-header-fixed" style="z-index: 1000">
          <a href="" id="mainMenuOpen" class="burger-menu"><i data-feather="menu"></i></a>
          <div class="navbar-brand">
            <a href="index.php" class="df-logo">Virtual<span>R.online</span></a>
          </div><!-- navbar-brand -->
          <div id="navbarMenu" class="navbar-menu-wrapper">
            <div class="navbar-menu-header">
              <a href="index.html" class="df-logo">dash<span>forge</span></a>
              <a id="mainMenuClose" href=""><i data-feather="x"></i></a>
            </div><!-- navbar-menu-header -->
           
               <?php  
              //  $id=isset($_GET['worldid'])?$_GET['worldid']:'1';
              $worldid=isset($_GET['worldid'])?$_GET['worldid']:'1';
              $current_id=isset($_GET['id'])?$_GET['id']:'1';
               $vrimages = VRWorld::get_vw_images($worldid);  
          
         // echo "<pre>";
         // print_r($vrimages);
         // echo "</pre>";
          $pages= array();
          $prev="";
          $next="";

          foreach ($vrimages as $key => $item) { 
            array_push($pages,$item->id);
          
          }
          foreach ($pages as $data) { 
            $counts=count($pages);
            if($data==$current_id){
              if($data==$pages[0]){
                $prev= $pages[$counts-1];
                $next=$pages[array_search($current_id, $pages)+1];
              }
              elseif($data==$pages[$counts-1]){
                $p=array_search($current_id, $pages)-($counts-1);
                $prev= $pages[array_search($current_id, $pages)-1];
                $next=$pages[0];
              }
              else{
                
                $prev= $pages[array_search($current_id, $pages)-1];
                $next=$pages[array_search($current_id, $pages)+1];
              }
              array_search($current_id, $pages);
             // $prev=$pages[array_search($current_id, $pages)+1];
           // $next=$pages[array_search($current_id, $pages)-1];
             }
           
          }
          
       //   echo "<pre>";
       //   print_r($pages);
       //   echo "</pre>";
           


            ?>
             
             <ul class="nav navbar-menu">
              <li class="nav-label pd-l-20 pd-lg-l-25 d-lg-none">Main Navigation</li>
              
            <li class="nav-item"><a href="index.php?ref=vrviewer" class="nav-link"><i data-feather="box"></i> Home</a></li>
               <li class="nav-item"><a href="vrworld.php?id=<?php echo $worldid; ?>&ref=vrviewer" class="nav-link"><i data-feather="box"></i> Back</a></li>
               <li class="nav-item"><a href="vrviewer.php?id=<?php echo $prev; ?>&worldid=<?php echo $worldid; ?>&ref=vrviewer" class="nav-link"><i data-feather="box"></i> Prev</a></li> 
               <li class="nav-item"><a href="vrviewer.php?id=<?php echo $next; ?>&worldid=<?php echo $worldid; ?>&ref=vrviewer" class="nav-link"><i data-feather="box"></i> Next</a></li> 
            </ul>
            
          </div><!-- navbar-menu-wrapper -->
          <div class="navbar-right">
            <a id="navbarSearch" href="" class="search-link"><i data-feather="search"></i></a>
            <div class="dropdown dropdown-message">
              <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
                <i data-feather="message-square"></i>
                <span>5</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">New Messages</div>
                <a href="" class="dropdown-item">
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
                    <div class="media-body mg-l-15">
                      <strong>Socrates Itumay</strong>
                      <p>nam libero tempore cum so...</p>
                      <span>Mar 15 12:32pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </a>
                <a href="" class="dropdown-item">
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                    <div class="media-body mg-l-15">
                      <strong>Joyce Chua</strong>
                      <p>on the other hand we denounce...</p>
                      <span>Mar 13 04:16am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </a>
                <a href="" class="dropdown-item">
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
                    <div class="media-body mg-l-15">
                      <strong>Althea Cabardo</strong>
                      <p>is there anyone who loves...</p>
                      <span>Mar 13 02:56am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </a>
                <a href="" class="dropdown-item">
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                    <div class="media-body mg-l-15">
                      <strong>Adrian Monino</strong>
                      <p>duis aute irure dolor in repre...</p>
                      <span>Mar 12 10:40pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </a>
                <div class="dropdown-footer"><a href="">View all Messages</a></div>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown dropdown-notification">
              <a href="" class="dropdown-link new-indicator" data-toggle="dropdown">
                <i data-feather="bell"></i>
                <span>2</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right">
                <div class="dropdown-header">Notifications</div>
                <a href="" class="dropdown-item">
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><img src="https://via.placeholder.com/350" class="rounded-circle" alt=""></div>
                    <div class="media-body mg-l-15">
                      <p>Congratulate <strong>Socrates Itumay</strong> for work anniversaries</p>
                      <span>Mar 15 12:32pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </a>
                <a href="" class="dropdown-item">
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                    <div class="media-body mg-l-15">
                      <p><strong>Joyce Chua</strong> just created a new blog post</p>
                      <span>Mar 13 04:16am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </a>
                <a href="" class="dropdown-item">
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/600" class="rounded-circle" alt=""></div>
                    <div class="media-body mg-l-15">
                      <p><strong>Althea Cabardo</strong> just created a new blog post</p>
                      <span>Mar 13 02:56am</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </a>
                <a href="" class="dropdown-item">
                  <div class="media">
                    <div class="avatar avatar-sm avatar-online"><img src="../https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                    <div class="media-body mg-l-15">
                      <p><strong>Adrian Monino</strong> added new comment on your photo</p>
                      <span>Mar 12 10:40pm</span>
                    </div><!-- media-body -->
                  </div><!-- media -->
                </a>
                <div class="dropdown-footer"><a href="">View all Notifications</a></div>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
            <div class="dropdown dropdown-profile">
              <a href="" class="dropdown-link" data-toggle="dropdown" data-display="static">
                <div class="avatar avatar-sm"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
              </a><!-- dropdown-link -->
              <div class="dropdown-menu dropdown-menu-right tx-13">
                <div class="avatar avatar-lg mg-b-15"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div>
                <h6 class="tx-semibold mg-b-5">Katherine Pechon</h6>
                <p class="mg-b-25 tx-12 tx-color-03">Administrator</p>
    
                <a href="" class="dropdown-item"><i data-feather="edit-3"></i> Edit Profile</a>
                <a href="page-profile-view.html" class="dropdown-item"><i data-feather="user"></i> View Profile</a>
                <div class="dropdown-divider"></div>
                <a href="page-help-center.html" class="dropdown-item"><i data-feather="help-circle"></i> Help Center</a>
                <a href="" class="dropdown-item"><i data-feather="life-buoy"></i> Forum</a>
                <a href="" class="dropdown-item"><i data-feather="settings"></i>Account Settings</a>
                <a href="" class="dropdown-item"><i data-feather="settings"></i>Privacy Settings</a>
                <a href="<?php echo url_for('logout.php') ?>" class="dropdown-item"><i data-feather="log-out"></i>Sign Out</a>
              </div><!-- dropdown-menu -->
            </div><!-- dropdown -->
          </div><!-- navbar-right -->
          <div class="navbar-search">
            <div class="navbar-search-header">
              <input type="search" class="form-control" placeholder="Type and hit enter to search...">
              <button class="btn"><i data-feather="search"></i></button>
              <a id="navbarSearchClose" href="" class="link-03 mg-l-5 mg-lg-l-10"><i data-feather="x"></i></a>
            </div><!-- navbar-search-header -->
            <div class="navbar-search-body">
              <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Recent Searches</label>
              <ul class="list-unstyled">
                <li><a href="dashboard-one.html">modern dashboard</a></li>
                <li><a href="app-calendar.html">calendar app</a></li>
                <li><a href="collections/modal.html">modal examples</a></li>
                <li><a href="components/el-avatar.html">avatar</a></li>
              </ul>
    
              <hr class="mg-y-30 bd-0">
    
              <label class="tx-10 tx-medium tx-uppercase tx-spacing-1 tx-color-03 mg-b-10 d-flex align-items-center">Search Suggestions</label>
    
              <ul class="list-unstyled">
                <li><a href="dashboard-one.html">cryptocurrency</a></li>
                <li><a href="app-calendar.html">button groups</a></li>
                <li><a href="collections/modal.html">form elements</a></li>
                <li><a href="components/el-avatar.html">contact app</a></li>
              </ul>
            </div><!-- navbar-search-body -->
          </div><!-- navbar-search -->
        </header><!-- navbar -->
        <?php
        }
        
    static public function profile_sidebar($current_user) {
      //    echo "<pre>";
        //  print_r($current_user);
         //echo "</pre>";
         ?>
          <div class="profile-sidebar pd-lg-r-25">
             <div class="row">
               <div class="col-sm-3 col-md-2 col-lg">
                 <div class="avatar avatar-xxl avatar-online"><img src="<?php echo $current_user->profile_pic; ?>" class="rounded-circle" alt=""></div>
               </div><!-- col -->
               <div class="col-sm-8 col-md-7 col-lg mg-t-20 mg-sm-t-0 mg-lg-t-25">
                 <h5 class="mg-b-2 tx-spacing--1"><?php echo $current_user->full_name(); ?></h5>
                 <p class="tx-color-03 mg-b-25"><?php echo "@".$current_user->username; ?></p>
                 <div class="d-flex mg-b-25">
                   <button class="btn btn-xs btn-white flex-fill">Message</button>
                   <button class="btn btn-xs btn-primary flex-fill mg-l-10">Follow</button>
                 </div>
 
                 <p class="tx-13 tx-color-02 mg-b-25"><?php echo $current_user->motto; ?></p>
 
                 <div class="d-flex">
                   <div class="profile-skillset flex-fill">
                     <h4><a href="" class="link-01">1.4k</a></h4>
                     <label>Stars</label>
                   </div>
                   <div class="profile-skillset flex-fill">
                     <h4><a href="" class="link-01">2.8k</a></h4>
                     <label>Followers</label>
                   </div>
                   <div class="profile-skillset flex-fill">
                     <h4><a href="" class="link-01">437</a></h4>
                     <label>Following</label>
                   </div>
                 </div>
               </div><!-- col -->
               <div class="col-sm-6 col-md-5 col-lg mg-t-40">
                 <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Skills</label>
                 <ul class="list-inline list-inline-skills">
                   <li class="list-inline-item"><a href="">HTML5</a></li>
                   <li class="list-inline-item"><a href="">Sass</a></li>
                   <li class="list-inline-item"><a href="">CSS</a></li>
                   <li class="list-inline-item"><a href="">React</a></li>
                   <li class="list-inline-item"><a href="">jQuery</a></li>
                   <li class="list-inline-item"><a href="">Angular</a></li>
                   <li class="list-inline-item"><a href="">Wordpress</a></li>
                   <li class="list-inline-item"><a href="">Photoshop</a></li>
                   <li class="list-inline-item"><a href="">PHP</a></li>
                   <li class="list-inline-item"><a href="">Node</a></li>
                   <li class="list-inline-item"><a href="">Git</a></li>
                   <li class="list-inline-item"><a href="">Front-End Development</a></li>
                   <li class="list-inline-item"><a href="">Web Design</a></li>
                 </ul>
               </div><!-- col -->
               <div class="col-sm-6 col-md-5 col-lg mg-t-40">
                 <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Websites &amp; Social Channel</label>
                 <ul class="list-unstyled profile-info-list">
                   <li><i data-feather="globe"></i> <a href="">http://fenchiumao.me/</a></li>
                   <li><i data-feather="github"></i> <a href="">@fenchiumao</a></li>
                   <li><i data-feather="twitter"></i> <a href="">@fenmao</a></li>
                   <li><i data-feather="instagram"></i> <a href="">@fenchiumao</a></li>
                   <li><i data-feather="facebook"></i> <a href="">@fenchiumao</a></li>
                 </ul>
               </div><!-- col -->
               <div class="col-sm-6 col-md-5 col-lg mg-t-40">
                 <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Contact Information</label>
                 <ul class="list-unstyled profile-info-list">
                   <li><i data-feather="briefcase"></i> <span class="tx-color-03">Bay Area, San Francisco, CA</span></li>
                   <li><i data-feather="home"></i> <span class="tx-color-03">Westfield, Oakland, CA</span></li>
                   <li><i data-feather="smartphone"></i> <a href="">(+1) 012 345 6789</a></li>
                   <li><i data-feather="phone"></i> <a href="">(+1) 987 654 3201</a></li>
                   <li><i data-feather="mail"></i> <a href="">me@fenchiumao.me</a></li>
                 </ul>
               </div><!-- col -->
               <div class="col-sm-6 col-md-5 col-lg mg-t-40">
                 <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Explore</label>
                 <nav class="nav nav-classic tx-13">
                   <a href="<?php echo url_for('trends.php') ?>" class="nav-link"><i data-feather="users"></i> <span>Trends</span></a>
                   <a href="<?php echo url_for('friends.php') ?>" class="nav-link"><i data-feather="calendar"></i> <span>Friends</span></a>
                   <a href="<?php echo url_for('vrimages.php') ?>" class="nav-link"><i data-feather="briefcase"></i> <span>VR Images</span></a>
                   <a href="<?php echo url_for('people.php') ?>" class="nav-link"><i data-feather="globe"></i> <span>Discover People</span></a>
                   <a href="<?php echo url_for('location.php') ?>" class="nav-link"><i data-feather="globe"></i> <span>location</span></a>
                   <a href="<?php echo url_for('logout.php') ?>" class="nav-link"><i data-feather="log-out"></i> <span>Logout</span></a>

                  </nav>
               </div><!-- col -->
             </div><!-- row -->
 
           </div><!-- profile-sidebar -->
         <?php
     }
     static public function home_sidebar($current_user,$active="home") {
    //   echo "<pre>";
      //    print_r($current_user);
        // echo "</pre>";
         ?>
          <div class="profile-sidebar pd-lg-r-25">
             <div class="row">
            
               <div class="col-sm-6 col-md-5 col-lg mg-t-40">
               <li class="media align-items-center  mg-b-15">
                    <a href="">
                      <div class="avatar avatar-sm"><img src="img/users/user3.jpg" class="rounded-circle" alt=""></div>
                      </a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-0"><a href="profile.php?id=<?php echo $current_user->id; ?>" class="link-01"><?php echo $current_user->full_name();  ?></a></p>
                     
                    </div>
                  </li>

                 <label class="tx-sans tx-10 tx-semibold tx-uppercase tx-color-01 tx-spacing-1 mg-b-15">Explore</label>
                 <nav class="nav nav-classic tx-13">
  
                 <a href="<?php echo url_for('trends.php') ?>" class="nav-link <?php if($active=="trends") { echo "active"; }  ?>"><i data-feather="trending-up"></i> <span>Trends</span></a>
                   <a href="<?php echo url_for('friends.php') ?>" class="nav-link <?php if($active=="friends") { echo "active"; }  ?>"><i data-feather="user-check"></i> <span>Friends</span></a>
                   <a href="<?php echo url_for('vrimages.php') ?>" class="nav-link <?php if($active=="vrimages") { echo "active"; }  ?>"><i data-feather="image"></i> <span>VR Images</span></a>
                   <a href="<?php echo url_for('people.php') ?>" class="nav-link <?php if($active=="people") { echo "active"; }  ?>"><i data-feather="users"></i> <span>Discover People</span></a>
                   <a href="<?php echo url_for('location.php') ?>" class="nav-link <?php if($active=="location") { echo "active"; }  ?>"><i data-feather="map-pin"></i> <span>Location</span></a>
                   <a href="<?php echo url_for('logout.php') ?>" class="nav-link"><i data-feather="log-out"></i> <span>Logout</span></a>
                 </nav>
               </div><!-- col -->
             </div><!-- row -->
 
           </div><!-- profile-sidebar -->
         <?php
     }

     static  public function post_form($title="LATEST ACTIVITY")
     {
     ?>
     <div class="profile-update-option bg-white ht-50 bd d-flex justify-content-end mg-b-20 mg-lg-b-25 rounded">
            

            <div class="input-group  align-items-center">
             
            <form action="upload.php" method="post"><input type="text" class="form-control bd-t-0 bd-b-0 bd-r-0 bd-l-0" placeholder="Share an Update" aria-label="Share an Update" aria-describedby="button-addon2">
            </form > 
              <div class="input-group-append">
                
              </div>
            </div>

            <div class="wd-50 bd-l d-flex align-items-center justify-content-center">
              <a href="upload.php?ref=photo&for=photo" class="link-03" data-toggle="tooltip" title="Publish Photo"><i data-feather="image"></i></a>
            </div>
            <div class="wd-50 bd-l d-flex align-items-center justify-content-center">
              <a href="upload.php?ref=video&for=video" class="link-03" data-toggle="tooltip" title="Publish Video"><i data-feather="video"></i></a>
            </div>
            <div class="wd-50 bd-l d-flex align-items-center justify-content-center">
              <a href="upload.php?ref=text&for=text" class="link-03" data-toggle="tooltip" title="Write an Article"><i data-feather="file-text"></i></a>
            </div>
    
  </div>
        <div class="card mg-b-20 mg-lg-b-25">
            <div class="card-header pd-y-15 pd-x-20 d-flex align-items-center justify-content-between">
              <h6 class="tx-uppercase tx-semibold mg-b-0"><?php  echo $title; ?></h6>
               
            </div><!-- card-header -->
            
        </div><!-- card -->
     <?php
     }
static public function media_body($contents,$title="LATEST ACTIVITY"){
    $t=false;
 if($t){  echo "<pre>";
   print_r($contents);
    echo "</pre>";} 
    global $current_user;
    ?>
     <div class="media-body mg-t-40 mg-lg-t-0 pd-lg-x-10">
           
            <?php  
               HTML::post_form($title);
                if ($contents) {
                 //  echo "<pre/>";
                 // print_r($comment);
                  // echo "</pre>";

                $count=0;
               foreach ($contents as $key => $item) { 
              
                $item->primary_img=$item->path."/".$item->filename;
                $thumnails=$item->thumnails_path."/".$item->filename;
                $thumnails= img_check("/".$thumnails);

                              ?>
                         <div class="card mg-b-20 mg-lg-b-25">
              <div class="card-header pd-y-15 pd-x-20 d-flex align-items-center justify-content-between">
                <h6 class=" tx-semibold mg-b-0"><?php echo linkl("profile.php?id=$item->creator_id",$item->first_name." ". $item->last_name);  ?></h6>
                <nav class="nav nav-with-icon tx-13">
                          
                       
                        <div class="dropdown">
            <button class="ml-2 mb-1 close tx-normal  type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             ...
            </button>
            <div class="dropdown-menu tx-13" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
              <form class="wd-250 pd-15" action="el-dropdown.html">
                <h5 class="tx-inverse mg-b-20">Signin</h5>
                <div class="form-group">
                  <label for="exampleDropdownFormEmail1">Email address</label>
                  <input type="email" class="form-control tx-14" id="exampleDropdownFormEmail1" placeholder="email@example.com">
                </div>
                <div class="form-group">
                  <label for="exampleDropdownFormPassword1">Password</label>
                  <input type="password" class="form-control tx-14" id="exampleDropdownFormPassword1" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Sign in</button>

                <hr>
                <a class="d-block" href="#">New around here? Sign up</a>
                <a class="d-block mg-t-5" href="#">Forgot password?</a>
              </form>
            </div>
          </div>
                       
                </nav>
              </div><!-- card-header -->
              <div class="card-body pd-5">
                <div class="media">
                <div class="col-12 mg-t-2">
                    <a href="vrworld.php?id=<?php echo $item->id; ?>&ref=home" class="d-block "><img src="<?php echo $thumnails;  ?>" class="img-fit-cover" alt=""></a>
                  </div>
                  
                </div><!-- media -->
              </div>
              <div class="card-footer bg-transparent pd-y-15 pd-x-20">
                <nav class="nav nav-with-icon tx-13">
                  <a href="" class="nav-link">
                    Show More Education (2)
                    <i data-feather="chevron-down" class="mg-l-2 mg-r-0 mg-t-2"></i>
                  </a>
                </nav>
              </div><!-- card-footer -->
            </div><!-- card -->
                           
               <?php  }} ?>
            

            <div class="card mg-b-20 mg-lg-b-25">
              <div class="card-header pd-y-15 pd-x-20 d-flex align-items-center justify-content-between">
                <h6 class="tx-uppercase tx-semibold mg-b-0">Work Experience</h6>
                <nav class="nav nav-with-icon tx-13">
                  <a href="" class="nav-link"><i data-feather="plus"></i> Add New</a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body pd-25">
                <div class="media d-block d-sm-flex">
                  <div class="wd-80 ht-80 bg-ui-04 rounded d-flex align-items-center justify-content-center">
                    <i data-feather="briefcase" class="tx-white-7 wd-40 ht-40"></i>
                  </div>
                  <div class="media-body pd-t-25 pd-sm-t-0 pd-sm-l-25">
                    <h5 class="mg-b-5">Area Sales Manager</h5>
                    <p class="mg-b-3 tx-color-02"><span class="tx-medium tx-color-01">ThemePixels, Inc.</span>, Bay Area, San Francisco, CA</p>
                    <span class="d-block tx-13 tx-color-03">December 2016 - Present</span>

                    <ul class="pd-l-10 mg-0 mg-t-20 tx-13">
                      <li>Reaching the targets and goals set for my area.</li>
                      <li>Servicing the needs of my existing customers.</li>
                      <li>Maintaining the relationships with existing customers for repeat business.</li>
                      <li>Reporting to top managers.</li>
                      <li>Keeping up to date with the products.</li>
                    </ul>
                  </div>
                </div><!-- media -->
              </div>
              <div class="card-footer bg-transparent pd-y-15 pd-x-20">
                <nav class="nav nav-with-icon tx-13">
                  <a href="" class="nav-link">
                    Show More Experiences (4)
                    <i data-feather="chevron-down" class="mg-l-2 mg-r-0 mg-t-2"></i>
                  </a>
                </nav>
              </div><!-- card-footer -->
            </div><!-- card -->

            <div class="card mg-b-20 mg-lg-b-25">
              <div class="card-header pd-y-15 pd-x-20 d-flex align-items-center justify-content-between">
                <h6 class="tx-uppercase tx-semibold mg-b-0">Education</h6>
                <nav class="nav nav-with-icon tx-13">
                  <a href="" class="nav-link"><i data-feather="plus"></i> Add New</a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body pd-25">
                <div class="media">
                  <div class="wd-80 ht-80 bg-ui-04 rounded d-flex align-items-center justify-content-center">
                    <i data-feather="book-open" class="tx-white-7 wd-40 ht-40"></i>
                  </div>
                  <div class="media-body pd-l-25">
                    <h5 class="mg-b-5">BS in Computer Science</h5>
                    <p class="mg-b-3"><span class="tx-medium tx-color-02">Holy Name University</span>,  Tagbilaran City, Bohol</p>
                    <span class="d-block tx-13 tx-color-03">2002-2006</span>
                  </div>
                </div><!-- media -->
              </div>
              <div class="card-footer bg-transparent pd-y-15 pd-x-20">
                <nav class="nav nav-with-icon tx-13">
                  <a href="" class="nav-link">
                    Show More Education (2)
                    <i data-feather="chevron-down" class="mg-l-2 mg-r-0 mg-t-2"></i>
                  </a>
                </nav>
              </div><!-- card-footer -->
            </div><!-- card -->

            <div class="card card-profile-interest">
              <div class="card-header pd-y-15 pd-x-20 d-flex align-items-center justify-content-between">
                <h6 class="tx-uppercase tx-semibold mg-b-0">Interests</h6>
                <nav class="nav nav-with-icon tx-13">
                  <a href="" class="nav-link">Browse Interests <i data-feather="arrow-right" class="mg-l-5 mg-r-0"></i></a>
                </nav>
              </div><!-- card-header -->
              <div class="card-body pd-25">
                <div class="row">
                  <div class="col-sm col-lg-12 col-xl">
                    <div class="media">
                      <div class="wd-45 ht-45 bg-gray-900 rounded d-flex align-items-center justify-content-center">
                        <i data-feather="github" class="tx-white-7 wd-20 ht-20"></i>
                      </div>
                      <div class="media-body pd-l-25">
                        <h6 class="tx-color-01 mg-b-5">Github, Inc.</h6>
                        <p class="tx-12 mg-b-10">Web-based hosting service for version control using Git... <a href="">Learn more</a></p>
                        <span class="tx-12 tx-color-03">6,182,220 Followers</span>
                      </div>
                    </div><!-- media -->

                    <div class="media">
                      <div class="wd-45 ht-45 bg-warning rounded d-flex align-items-center justify-content-center">
                        <i data-feather="truck" class="tx-white-7 wd-20 ht-20"></i>
                      </div>
                      <div class="media-body pd-l-25">
                        <h6 class="tx-color-01 mg-b-5">DHL Express</h6>
                        <p class="tx-12 mg-b-10">Logistics company providing international courier service... <a href="">Learn more</a></p>
                        <span class="tx-12 tx-color-03">3,005,192 Followers</span>
                      </div>
                    </div><!-- media -->
                  </div><!-- col -->
                  <div class="col-sm col-lg-12 col-xl mg-t-25 mg-sm-t-0 mg-lg-t-25 mg-xl-t-0">
                    <div class="media">
                      <div class="wd-45 ht-45 bg-primary rounded d-flex align-items-center justify-content-center">
                        <i data-feather="facebook" class="tx-white-7 wd-20 ht-20"></i>
                      </div>
                      <div class="media-body pd-l-25">
                        <h6 class="tx-color-01 mg-b-5">Facebook, Inc.</h6>
                        <p class="tx-12 mg-b-10">Online social media and social networking service company... <a href="">Learn more</a></p>
                        <span class="tx-12 tx-color-03">12,182,220 Followers</span>
                      </div>
                    </div><!-- media -->

                    <div class="media">
                      <div class="wd-45 ht-45 bg-pink rounded d-flex align-items-center justify-content-center">
                        <i data-feather="instagram" class="tx-white-7 wd-20 ht-20"></i>
                      </div>
                      <div class="media-body pd-l-25">
                        <h6 class="tx-color-01 mg-b-5">Instagram</h6>
                        <p class="tx-12 mg-b-10">Photo and video-sharing social networking service by Facebook... <a href="">Learn more</a></p>
                        <span class="tx-12 tx-color-03">3,005,192 Followers</span>
                      </div>
                    </div><!-- media -->
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- card-body -->
            </div><!-- card -->

          </div><!-- media-body -->
    <?php
}
static public function vr_world_body($contents)
{
  $t=false;
if($t){  echo "<pre>";
 print_r($contents);
  echo "</pre>";} 
  global $current_user;
  ?>
   <div class="media-body mg-t-40 mg-lg-t-0 pd-lg-x-10">
          
          <?php  
           HTML::post_form();
              if ($contents) {
                // echo "<pre/>";
                //print_r($contents);
                // echo "</pre>";

                ?>
                 <div class="card mg-b-20 mg-lg-b-25">
<?php 
              $count=0;
             foreach ($contents as $key => $item) { 
            
              $item->primary_img=$item->path."/".$item->filename;
              $thumnails=$item->thumnails_path."/".$item->filename;
              $thumnails= img_check("/".$thumnails);
              $current_id=isset($_GET['id'])?$_GET['id']:'';
                            ?>
                      
            <div class="card-header pd-y-15 pd-x-20 d-flex align-items-center justify-content-between">
               <nav class="nav nav-with-icon tx-13">
               <?php  if($count==0){ ?>  
            <h6 class=" tx-semibold mg-b-0">
              <?php echo linkl("profile.php?id=$item->creator_id",$item->first_name." ". $item->last_name);  ?>
            </h6>
            <?php } ?>   
                    
                     
              </nav> 
            </div><!-- card-header -->
            <div class="card-body pd-5">
              <div class="media">
              <div class="col-12 mg-t-2">
                  <a href="vrviewer.php?id=<?php echo $item->id; ?>&worldid=<?php echo $current_id; ?>&ref=home" class="d-block "><img src="<?php echo $thumnails;  ?>" class="img-fit-cover" alt=""></a>
                </div>
                
              </div><!-- media -->
            </div>
            
         
              
             <?php  $count++;   }
            ?> </div><!-- card -->
            <?php } ?>
           

        </div><!-- media-body -->
  <?php
}
static public function vr_view_body($contents)
{
  $t=false;
if($t){  echo "<pre>";
 print_r($contents);
  echo "</pre>";} 
  global $current_user;
  ?>
   <div class="media-body mg-t-40 mg-lg-t-0 pd-lg-x-10">
          
          <?php  
           HTML::post_form();
              if ($contents) {
               //  echo "<pre/>";
               // print_r($comment);
                // echo "</pre>";

                ?>
                 <div class="card mg-b-20 mg-lg-b-25">
<?php 
             $item= $contents;
           
            
              $item->primary_img=$item->path."/".$item->filename;
              $thumnails=$item->thumnails_path."/".$item->filename;
              $thumnails= img_check("/".$thumnails);

                            ?>
                      
            <div class="card-header pd-y-15 pd-x-20 d-flex align-items-center justify-content-between">
               <nav class="nav nav-with-icon tx-13">
                        
                     
                    
                     
              </nav>
            </div><!-- card-header -->
            <div class="card-body pd-5">
              <div class="media">
              <div class="col-12 mg-t-2">
                  <a href="vrview.php?id=<?php echo $item->id; ?>&ref=home" class="d-block "><img src="<?php echo $thumnails;  ?>" class="img-fit-cover" alt=""></a>
                </div>
                
              </div><!-- media -->
            </div>
            
         
                         
             <?php  }
            ?> </div><!-- card -->
           
          
  

        </div><!-- media-body -->
  <?php
}
static public function right_sidebar()
{
  ?>
<div class="profile-sidebar mg-t-40 mg-lg-t-0 pd-lg-l-25">
            <div class="row">
              <div class="col-sm-6 col-md-5 col-lg">
                <div class="d-flex align-items-center justify-content-between mg-b-20">
                  <h6 class="tx-13 tx-spacng-1 tx-uppercase tx-semibold mg-b-0">Stories</h6>
                  <a href="" class="link-03">Watch All</a>
                </div>
                <ul class="list-unstyled media-list mg-b-15">
                  <li class="media align-items-center">
                    <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-dark">S</span></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-0"><a href="" class="link-01">Socrates Itumay</a></p>
                      <span class="tx-12 tx-color-03">2 hours ago</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                    <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-primary">I</span></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-0"><a href="" class="link-01">Isidore Dilao</a></p>
                      <span class="tx-12 tx-color-03">5 hours ago</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                    <a href=""><div class="avatar avatar-offline"><img src="../https://via.placeholder.com/500" class="rounded-circle" alt=""></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-0"><a href="" class="link-01">Angeline Mercado</a></p>
                      <span class="tx-12 tx-color-03">1 day ago</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                    <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-info">K</span></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-0"><a href="" class="link-01">Kirby Avendula</a></p>
                      <span class="tx-12 tx-color-03">2 days ago</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                    <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-dark">S</span></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-0"><a href="" class="link-01">Socrates Itumay</a></p>
                      <span class="tx-12 tx-color-03">2 hours ago</span>
                    </div>
                  </li>
                </ul>
                <a href="" class="link-03 d-inline-flex align-items-center">See more stories <i class="icon ion-ios-arrow-down mg-l-5 mg-t-3 tx-12"></i></a>
              </div><!-- col -->
              <div class="col-sm-6 col-md-5 col-lg mg-t-40 mg-sm-t-0 mg-lg-t-40">
                <div class="d-flex align-items-center justify-content-between mg-b-20">
                  <h6 class="tx-13 tx-spacing-1 tx-uppercase tx-semibold mg-b-0">People Also Viewed</h6>
                </div>
                <ul class="list-unstyled media-list mg-b-15">
                  <li class="media align-items-center">
                  <a href="">
                          <div class="avatar avatar-lg"><img src="img/users/user3.jpg" class="rounded-circle" alt=""></div>
                        </a>
                          <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01">Roy Recamadas</a></p>
                      <span class="tx-12 tx-color-03">Bontoc So. Leyte</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                  <a href="">
                          <div class="avatar avatar-lg"><img src="img/users/profile.png" class="rounded-circle" alt=""></div>
                        </a> <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01">Raymart Serencio</a></p>
                      <span class="tx-12 tx-color-03">Bontoc So. Leyte</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                    <a href=""><div class="avatar avatar-offline"><span class="avatar-initial rounded-circle bg-teal">R</span></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01">Rolando Paloso Jr</a></p>
                      <span class="tx-12 tx-color-03">Bontoc So. Leyte</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                    <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-indigo">R</span></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01">Robert Restificar</a></p>
                      <span class="tx-12 tx-color-03">Bontoc So. Leyte</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                    <a href=""><div class="avatar avatar-online"><span class="avatar-initial rounded-circle bg-gray-600">A</span></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01">Archie Cantones</a></p>
                      <span class="tx-12 tx-color-03">Sogod So. Leyte</span>
                    </div>
                  </li>
                </ul>
              </div><!-- col -->
              <div class="col-sm-6 col-md-5 col-lg mg-t-40">
                <div class="d-flex align-items-center justify-content-between mg-b-20">
                  <h6 class="tx-13 tx-uppercase tx-semibold mg-b-0">People You May Know</h6>
                </div>
                <ul class="list-unstyled media-list mg-b-15">
                  <li class="media align-items-center">
                    <a href=""><div class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01">Allan Ray Palban</a></p>
                      <span class="tx-12 tx-color-03">Silago So. Leyte</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                    <a href=""><div class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01">Rhea Castanares</a></p>
                      <span class="tx-12 tx-color-03">Silago  So. Leyte</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                    <a href=""><div class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01">Philip Cesar Galban</a></p>
                      <span class="tx-12 tx-color-03">San Francisco So. Leyte</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                    <a href=""><div class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01">Randy Macapala</a></p>
                      <span class="tx-12 tx-color-03">Libagon</span>
                    </div>
                  </li>
                  <li class="media align-items-center">
                    <a href=""><div class="avatar"><img src="https://via.placeholder.com/500" class="rounded-circle" alt=""></div></a>
                    <div class="media-body pd-l-15">
                      <p class="tx-medium mg-b-2"><a href="" class="link-01">Abigail Johnson</a></p>
                      <span class="d-block tx-12 tx-color-03">Liloan So. Leyte</span>
                    </div>
                  </li>
                </ul>
              </div><!-- col -->
              <div class="col-sm-6 col-md-5 col-lg mg-t-40 order-sm-1">
                <div class="d-flex align-items-center justify-content-between mg-b-15">
                  <h6 class="tx-13 tx-uppercase tx-semibold mg-b-0">Mutual Connections</h6>
                </div>
                <div class="img-group img-group-mutual mg-b-20 justify-content-start">
                  <img src="../https://via.placeholder.com/500" class="img rounded-circle" alt="">
                  <img src="../https://via.placeholder.com/500" class="img rounded-circle" alt="">
                  <img src="../https://via.placeholder.com/500" class="img rounded-circle" alt="">
                  <img src="../https://via.placeholder.com/500" class="img rounded-circle" alt="">
                  <img src="../https://via.placeholder.com/500" class="img rounded-circle" alt="">
                </div>
                <h6>You have 18 mutual connection</h6>
                <p class="tx-color-03 mg-b-0">You and Fen both know Archie Cantones, Socrates Itumay, and 17 others</p>
              </div><!-- col -->
              <div class="col-sm-6 col-md-5 col-lg mg-t-40">
                <div class="d-flex align-items-center justify-content-between mg-b-15">
                  <h6 class="tx-13 tx-uppercase tx-semibold mg-b-0">Photos</h6>
                  <a href="" class="link-03">Add Photo</a>
                </div>

                <div class="row row-xxs">
                  <div class="col-4">
                    <a href="" class="d-block ht-60"><img src="../https://via.placeholder.com/640x426" class="img-fit-cover" alt=""></a>
                  </div><!-- col -->
                  <div class="col-4">
                    <a href="" class="d-block ht-60"><img src="../https://via.placeholder.com/500x281" class="img-fit-cover" alt=""></a>
                  </div><!-- col -->
                  <div class="col-4">
                    <a href="" class="d-block ht-60"><img src="../https://via.placeholder.com/500x281" class="img-fit-cover" alt=""></a>
                  </div><!-- col -->
                  <div class="col-4 mg-t-2">
                    <a href="" class="d-block ht-60"><img src="../https://via.placeholder.com/500x281" class="img-fit-cover" alt=""></a>
                  </div><!-- col -->
                  <div class="col-4 mg-t-2">
                    <a href="" class="d-block ht-60"><img src="../https://via.placeholder.com/350" class="img-fit-cover" alt=""></a>
                  </div><!-- col -->
                  <div class="col-4 mg-t-2">
                    <a href="" class="d-block ht-60"><img src="../https://via.placeholder.com/600" class="img-fit-cover" alt=""></a>
                  </div><!-- col -->
                  <div class="col-4 mg-t-2">
                    <a href="" class="d-block ht-60"><img src="https://via.placeholder.com/500" class="img-fit-cover" alt=""></a>
                  </div><!-- col -->
                  <div class="col-4 mg-t-2">
                    <a href="" class="d-block ht-60"><img src="https://via.placeholder.com/500" class="img-fit-cover" alt=""></a>
                  </div><!-- col -->
                  <div class="col-4 mg-t-2">
                    <a href="" class="d-block ht-60"><img src="https://via.placeholder.com/500" class="img-fit-cover" alt=""></a>
                  </div><!-- col -->
                </div><!-- row -->
              </div><!-- col -->
            </div><!-- row -->
          </div><!-- profile-sidebar -->
  <?php
}
    static public function topbar($current_tab) {
    ?>
       <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="<?php echo url_for('index.php') ?>">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="assets/images/logo-icon.png" alt="homepage" class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src="assets/images/logo-light-icon.png" alt="homepage" class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                         <!-- dark Logo text -->
                         <img src="assets/images/logo-text.png" alt="homepage" class="dark-logo" />
                         <!-- Light Logo text -->    
                         <img src="assets/images/logo-light-text.png" class="light-logo" alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav mr-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark" href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark" href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                        <!-- Search -->
                        <!-- ============================================================== -->
                        <li class="nav-item">
                            <form class="app-search d-none d-md-block d-lg-block">
                                <input type="text" class="form-control" placeholder="Search & enter">
                            </form>
                        </li>
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav my-lg-0">
                        <!-- ============================================================== -->
                        <!-- Comment -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="ti-email"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu dropdown-menu-right mailbox animated bounceInDown">
                                <ul>
                                    <li>
                                        <div class="drop-title">Notifications</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-danger btn-circle"><i class="fa fa-link"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Luanch Admin</h5> <span class="mail-desc">Just see the my new admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-success btn-circle"><i class="ti-calendar"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Event today</h5> <span class="mail-desc">Just a reminder that you have event</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-info btn-circle"><i class="ti-settings"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Settings</h5> <span class="mail-desc">You can customize this template as you want</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="btn btn-primary btn-circle"><i class="ti-user"></i></div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>Check all notifications</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Comment -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- Messages -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" id="2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="icon-note"></i>
                                <div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
                            </a>
                            <div class="dropdown-menu mailbox dropdown-menu-right animated bounceInDown" aria-labelledby="2">
                                <ul>
                                    <li>
                                        <div class="drop-title">You have 4 new messages</div>
                                    </li>
                                    <li>
                                        <div class="message-center">
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="assets/images/users/1.jpg" alt="user" class="img-circle"> <span class="profile-status online pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:30 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="assets/images/users/2.jpg" alt="user" class="img-circle"> <span class="profile-status busy pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Sonu Nigam</h5> <span class="mail-desc">I've sung a song! See you at</span> <span class="time">9:10 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="assets/images/users/3.jpg" alt="user" class="img-circle"> <span class="profile-status away pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Arijit Sinh</h5> <span class="mail-desc">I am a singer!</span> <span class="time">9:08 AM</span> </div>
                                            </a>
                                            <!-- Message -->
                                            <a href="javascript:void(0)">
                                                <div class="user-img"> <img src="assets/images/users/4.jpg" alt="user" class="img-circle"> <span class="profile-status offline pull-right"></span> </div>
                                                <div class="mail-contnet">
                                                    <h5>Pavan kumar</h5> <span class="mail-desc">Just see the my admin!</span> <span class="time">9:02 AM</span> </div>
                                            </a>
                                        </div>
                                    </li>
                                    <li>
                                        <a class="nav-link text-center link" href="javascript:void(0);"> <strong>See all e-Mails</strong> <i class="fa fa-angle-right"></i> </a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End Messages -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- mega menu -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown mega-dropdown"> <a class="nav-link dropdown-toggle waves-effect waves-dark" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="ti-layout-width-default"></i></a>
                            <div class="dropdown-menu animated bounceInDown">
                                <ul class="mega-dropdown-menu row">
                                    <li class="col-lg-3 col-xlg-2 m-b-30">
                                        <h4 class="m-b-20">CAROUSEL</h4>
                                        <!-- CAROUSEL -->
                                        <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                            <div class="carousel-inner" role="listbox">
                                                <div class="carousel-item active">
                                                    <div class="container"> <img class="d-block img-fluid" src="assets/images/big/img1.jpg" alt="First slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="assets/images/big/img2.jpg" alt="Second slide"></div>
                                                </div>
                                                <div class="carousel-item">
                                                    <div class="container"><img class="d-block img-fluid" src="assets/images/big/img3.jpg" alt="Third slide"></div>
                                                </div>
                                            </div>
                                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev"> <span class="carousel-control-prev-icon" aria-hidden="true"></span> <span class="sr-only">Previous</span> </a>
                                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next"> <span class="carousel-control-next-icon" aria-hidden="true"></span> <span class="sr-only">Next</span> </a>
                                        </div>
                                        <!-- End CAROUSEL -->
                                    </li>
                                    <li class="col-lg-3 m-b-30">
                                        <h4 class="m-b-20">ACCORDION</h4>
                                        <!-- Accordian -->
                                        <div class="accordion" id="accordionExample">
                                            <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingOne">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                            Collapsible Group Item #1
                                                        </button>
                                                    </h5>
                                                </div>

                                                <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingTwo">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false"
                                                            aria-controls="collapseTwo">
                                                            Collapsible Group Item #2
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="card m-b-0">
                                                <div class="card-header bg-white p-0" id="headingThree">
                                                    <h5 class="mb-0">
                                                        <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false"
                                                            aria-controls="collapseThree">
                                                            Collapsible Group Item #3
                                                        </button>
                                                    </h5>
                                                </div>
                                                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                                                    <div class="card-body">
                                                        Anim pariatur cliche reprehenderit, enim eiusmod high.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="col-lg-3  m-b-30">
                                        <h4 class="m-b-20">CONTACT US</h4>
                                        <!-- Contact -->
                                        <form>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="exampleInputname1" placeholder="Enter Name"> </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="Enter email"> </div>
                                            <div class="form-group">
                                                <textarea class="form-control" id="exampleTextarea" rows="3" placeholder="Message"></textarea>
                                            </div>
                                            <button type="submit" class="btn btn-info">Submit</button>
                                        </form>
                                    </li>
                                    <li class="col-lg-3 col-xlg-4 m-b-30">
                                        <h4 class="m-b-20">List style</h4>
                                        <!-- List style -->
                                        <ul class="list-style-none">
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> You can give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another Give link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Forth link</a></li>
                                            <li><a href="javascript:void(0)"><i class="fa fa-check text-success"></i> Another fifth link</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End mega menu -->
                        <!-- ============================================================== -->
                        <!-- ============================================================== -->
                        <!-- User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item dropdown u-pro">
                            <a class="nav-link dropdown-toggle waves-effect waves-dark profile-pic" href="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="assets/images/users/1.jpg" alt="user" class=""> <span class="hidden-md-down">Mark &nbsp;<i class="fa fa-angle-down"></i></span> </a>
                            <div class="dropdown-menu dropdown-menu-right animated flipInY">
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-user"></i> My Profile</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-wallet"></i> My Balance</a>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-email"></i> Inbox</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="javascript:void(0)" class="dropdown-item"><i class="ti-settings"></i> Account Setting</a>
                                <!-- text-->
                                <div class="dropdown-divider"></div>
                                <!-- text-->
                                <a href="<?php echo url_for('logout.php') ?>" class="dropdown-item"><i class="fa fa-power-off"></i> Logout</a>
                                <!-- text-->
                            </div>
                        </li>
                        <!-- ============================================================== -->
                        <!-- End User Profile -->
                        <!-- ============================================================== -->
                        <li class="nav-item right-side-toggle"> <a class="nav-link  waves-effect waves-light" href="javascript:void(0)"><i class="ti-settings"></i></a></li>
                    </ul>
                </div>
            </nav>
        </header>
            <?php
            }
    static public function footer() {
    ?>
    <footer class="footer">
      <div>
        <span>&copy; 2020 VirtualR.online v1.2.0. </span>
        <span>Created by <a href="https://www.facebook.com/emann.me">Emannuel Saligue</a></span>
      </div>
      <div>
        <nav class="nav">
          <a href="#" class="nav-link">Licenses</a>
          <a href="#" class="nav-link">Change Log</a>
          <a href="#" class="nav-link">Get Help</a>
        </nav>
      </div>
    </footer>

    <?php
    }
}
