<!--Main Navigation-->
<header>
   <!-- Sidebar -->
   <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse background-color-primary">
      <div class="position-sticky">
         <div class="list-group list-group-flush mx-2 mt-2">
            <div id="header-content" class="pl-3 text-center">
               <img
                  src="http://<?php echo $_SERVER['HTTP_HOST']  ?>/cit8UcSpecial-master/images/logo/logowhite.png"
                  alt="avatar"
                  class="img-fluid mb-3"
                  style="max-width: 50px;"
                  />
               <h4 class="text-white">
                  <span style="white-space: nowrap;"><?=$_SESSION['name']?></span>
               </h4>
               <p class="text-white">test@gmail.com</p>
            </div>
            <hr class="mb-2 background-white" />
            <a
               href="#"
               class="list-group-item list-group-item-action py-3 ripple active bg-transparent"
               aria-current="true"
               >
            <img class="img-fluid" src="http://<?php echo $_SERVER['HTTP_HOST']  ?>/cit8UcSpecial-master/images/navbar-icons/dashboard.png" alt="" style="width:60px;"><span>Dashboard</span>
            </a>
            <!-- Management -->
            <a
               class="list-group-item list-group-item-action py-2 ripple bg-transparent text-white"
               aria-current="true"
               data-mdb-toggle="collapse"
               href="#management"
               aria-expanded="true"
               aria-controls="management"
               >
            <img class="img-fluid" src="http://<?php echo $_SERVER['HTTP_HOST']  ?>/cit8UcSpecial-master/images/navbar-icons/plant.png" alt="" style="width:60px;"><span>Management</span>
            </a>
            <!-- Management Collapsed content -->
            <ul
               id="management"
               class="collapse list-group list-group-flush"
               >
               <li class="list-group-item py-3 ps-5">
                  <a href="http://<?php echo $_SERVER['HTTP_HOST']  ?>/cit8UcSpecial-master/crop/" class="text-reset">Crop </a>
               </li>
               <li class="list-group-item py-3 ps-5">
                  <a href="http://<?php echo $_SERVER['HTTP_HOST']  ?>/cit8UcSpecial-master/farmer/" class="text-reset">Farmer</a>
               </li>
               <li class="list-group-item py-3 ps-5">
                  <a href="http://<?php echo $_SERVER['HTTP_HOST']  ?>/cit8UcSpecial-master/crop-production/" class="text-reset">Crop Production</a>
               </li>
            </ul>
            <!-- Management Collapsed Collapse -->
            <!-- Historical -->
            <a
               class="list-group-item list-group-item-action py-2 ripple bg-transparent text-white"
               aria-current="true"
               data-mdb-toggle="collapse"
               href="#historical"
               aria-expanded="true"
               aria-controls="historical"
               >
            <img class="img-fluid" src="http://<?php echo $_SERVER['HTTP_HOST']  ?>/cit8UcSpecial-master/images/navbar-icons/archive.png" alt="" style="width:60px;"><span>Historical Data</span>
            </a>
            <!-- Historical Collapsed content -->
            <ul
               id="historical"
               class="collapse list-group list-group-flush"
               >
               <li class="list-group-item py-3 ps-5">
                  <a href="http://<?php echo $_SERVER['HTTP_HOST']  ?>/cit8UcSpecial-master/historicaldata/agricultural/" class="text-reset">Agricultural </a>
               </li>
               <li class="list-group-item py-3 ps-5">
                  <a href="" class="text-reset">Climatological</a>
               </li>
            </ul>
            <!-- Historical Collapsed Collapse -->
            <a href="#" class="list-group-item list-group-item-action py-3 ripple bg-transparent text-white"
               ><img class="img-fluid" src="http://<?php echo $_SERVER['HTTP_HOST']  ?>/cit8UcSpecial-master/images/navbar-icons/prediction.png" alt="" style="width:60px;"><span>Predictions</span></a
               >
            <a href="#" class="list-group-item list-group-item-action py-3 ripple bg-transparent text-white">
            <img class="img-fluid" src="http://<?php echo $_SERVER['HTTP_HOST']  ?>/cit8UcSpecial-master/images/navbar-icons/news.png" alt="" style="width:60px;"><span>News</span>
            </a>
            <!-- Community -->
            <a
               class="list-group-item list-group-item-action py-2 ripple bg-transparent text-white"
               aria-current="true"
               data-mdb-toggle="collapse"
               href="#community"
               aria-expanded="true"
               aria-controls="community"
               >
            <img class="img-fluid" src="http://<?php echo $_SERVER['HTTP_HOST']  ?>/cit8UcSpecial-master/images/navbar-icons/community.png" alt="" style="width:60px;"><span>Community</span>
            </a>
            <!-- Community Collapsed content -->
            <ul
               id="community"
               class="collapse list-group list-group-flush"
               >
               <li class="list-group-item py-3 ps-5">
                  <a href="" class="text-reset">Farmers experience</a>
               </li>
               <li class="list-group-item py-3 ps-5">
                  <a href="" class="text-reset">Practices</a>
               </li>
               <li class="list-group-item py-3 ps-5">
                  <a href="" class="text-reset">Concerns & Issues</a>
               </li>
            </ul>
            <!-- Community Collapsed Collapse -->
         </div>
         <div class="text-center" style="height: 100px;">
            <hr class="mb-4 mt-0">
            <a class="btn btn-lg btn-color-accent text-white" href="http://<?php echo $_SERVER['HTTP_HOST']  ?>/cit8UcSpecial-master/logout.php " role="button">
            <i class="fas fa-sign-out-alt"></i>
            Sign out
            </a>
         </div>
      </div>
   </nav>
   <!-- Sidebar -->
   <!-- Navbar -->
   <nav id="main-navbar" class="navbar navbar-expand-lg background-color-primary fixed-top test">
      <div class="container-fluid mx-2 mt-2">
        <button
          class="navbar-toggler text-white"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
      
        <!-- Brand -->
        <a class="navbar-brand" href="#">
          <img
            src="http://<?php echo $_SERVER['HTTP_HOST']  ?>/cit8UcSpecial-master/images/logo/logob2.png"
            height="25"
            alt="Pasya"
            loading="lazy"
          />
        </a>
    
      </div>
      <!-- Container wrapper -->
      </nav>
   <!-- Navbar -->
</header>
<!--Main Navigation-->