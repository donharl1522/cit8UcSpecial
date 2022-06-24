<!--Main Navigation-->
<header>
   <!-- Sidebar -->
   <nav id="sidebarMenu" class="collapse d-lg-block sidebar collapse background-color-primary">
      <div class="position-sticky">
         <div class="list-group list-group-flush mx-2 mt-2">
            <div id="header-content" class="pl-3 text-center">
               <img
                  src="https://mdbootstrap.com/img/Photos/Avatars/img%20(23).jpg"
                  alt="avatar"
                  class="rounded-circle img-fluid mb-3"
                  style="max-width: 50px;"
                  />
               <h4 class="text-white">
                  <span style="white-space: nowrap;"><?=$_SESSION['name']?></span>
               </h4>
               <p class="text-white">test@email.com</p>
            </div>
            <hr class="mb-2 background-white" />
            <a
               href="#"
               class="list-group-item list-group-item-action py-3 ripple active bg-transparent"
               aria-current="true"
               >
            <img class="img-fluid" src="images/navbar-icons/dashboard.png" alt="" style="width:60px;"><span>Dashboard</span>
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
            <img class="img-fluid" src="images/navbar-icons/plant.png" alt="" style="width:60px;"><span>Management</span>
            </a>
            <!-- Management Collapsed content -->
            <ul
               id="management"
               class="collapse list-group list-group-flush"
               >
               <li class="list-group-item py-3 ps-5">
                  <a href="" class="text-reset">Crop </a>
               </li>
               <li class="list-group-item py-3 ps-5">
                  <a href="" class="text-reset">Farmer</a>
               </li>
               <li class="list-group-item py-3 ps-5">
                  <a href="" class="text-reset">Crop Production</a>
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
            <img class="img-fluid" src="images/navbar-icons/archive.png" alt="" style="width:60px;"><span>Historical</span>
            </a>
            <!-- Historical Collapsed content -->
            <ul
               id="historical"
               class="collapse list-group list-group-flush"
               >
               <li class="list-group-item py-3 ps-5">
                  <a href="" class="text-reset">Agricultural </a>
               </li>
               <li class="list-group-item py-3 ps-5">
                  <a href="" class="text-reset">Climatological</a>
               </li>
            </ul>
            <!-- Historical Collapsed Collapse -->
            <a href="#" class="list-group-item list-group-item-action py-3 ripple bg-transparent text-white"
               ><img class="img-fluid" src="images/navbar-icons/prediction.png" alt="" style="width:60px;"><span>Predictions</span></a
               >
            <a href="#" class="list-group-item list-group-item-action py-3 ripple bg-transparent text-white">
            <img class="img-fluid" src="images/navbar-icons/news.png" alt="" style="width:60px;"><span>News</span>
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
            <img class="img-fluid" src="images/navbar-icons/community.png" alt="" style="width:60px;"><span>Community</span>
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
            <a class="btn btn-lg btn-color-accent text-white" href="logout.php" role="button">
            <i class="fas fa-sign-out-alt"></i>
            Sign out
            </a>
         </div>
      </div>
   </nav>
   <!-- Sidebar -->
   <!-- Navbar -->
   <!--<nav id="main-navbar" class="navbar navbar-expand-lg navbar-light bg-white fixed-top">
      Container wrapper
      <div class="container-fluid">
        Toggle button 
        <button
          class="navbar-toggler"
          type="button"
          data-mdb-toggle="collapse"
          data-mdb-target="#sidebarMenu"
          aria-controls="sidebarMenu"
          aria-expanded="false"
          aria-label="Toggle navigation"
        >
          <i class="fas fa-bars"></i>
        </button>
      
        <!- - Brand - ->
        <a class="navbar-brand" href="#">
          <img
            src="https://mdbcdn.b-cdn.net/img/logo/mdb-transaprent-noshadows.webp"
            height="25"
            alt="MDB Logo"
            loading="lazy"
          />
        </a>
        <!- - Search form - ->
        <form class="d-none d-md-flex input-group w-auto my-auto">
          <input
            autocomplete="off"
            type="search"
            class="form-control rounded"
            placeholder='Search (ctrl + "/" to focus)'
            style="min-width: 225px;"
          />
          <span class="input-group-text border-0"><i class="fas fa-search"></i></span>
        </form>
      
        <!- - Right links - ->
        <ul class="navbar-nav ms-auto d-flex flex-row">
          <!- - Notification dropdown - ->
          <li class="nav-item dropdown">
            <a
              class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              <i class="fas fa-bell"></i>
              <span class="badge rounded-pill badge-notification bg-danger">1</span>
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
            >
              <li>
                <a class="dropdown-item" href="#">Some news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Another news</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Something else here</a>
              </li>
            </ul>
          </li>
      
          <!- - Icon - ->
          <li class="nav-item">
            <a class="nav-link me-3 me-lg-0" href="#">
              <i class="fas fa-fill-drip"></i>
            </a>
          </li>
          <!- - Icon - ->
          <li class="nav-item me-3 me-lg-0">
            <a class="nav-link" href="#">
              <i class="fab fa-github"></i>
            </a>
          </li>
      
          <!- - Icon dropdown - ->
          <li class="nav-item dropdown">
            <a
              class="nav-link me-3 me-lg-0 dropdown-toggle hidden-arrow"
              href="#"
              id="navbarDropdown"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              <i class="flag-united-kingdom flag m-0"></i>
            </a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="#"
                  ><i class="flag-united-kingdom flag"></i>English
                  <i class="fa fa-check text-success ms-2"></i
                ></a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-poland flag"></i>Polski</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-china flag"></i>中文</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-japan flag"></i>日本語</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-germany flag"></i>Deutsch</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-france flag"></i>Français</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-spain flag"></i>Español</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-russia flag"></i>Русский</a>
              </li>
              <li>
                <a class="dropdown-item" href="#"><i class="flag-portugal flag"></i>Português</a>
              </li>
            </ul>
          </li>
      
          <!- - Avatar - ->
          <li class="nav-item dropdown">
            <a
              class="nav-link dropdown-toggle hidden-arrow d-flex align-items-center"
              href="#"
              id="navbarDropdownMenuLink"
              role="button"
              data-mdb-toggle="dropdown"
              aria-expanded="false"
            >
              <img
                src="https://mdbcdn.b-cdn.net/img/Photos/Avatars/img (31).webp"
                class="rounded-circle"
                height="22"
                alt="Avatar"
                loading="lazy"
              />
            </a>
            <ul
              class="dropdown-menu dropdown-menu-end"
              aria-labelledby="navbarDropdownMenuLink"
            >
              <li>
                <a class="dropdown-item" href="#">My profile</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Settings</a>
              </li>
              <li>
                <a class="dropdown-item" href="#">Logout</a>
              </li>
            </ul>
          </li>
        </ul>
      </div>
      <!- - Container wrapper - ->
      </nav>--> 
   <!-- Navbar -->
</header>
<!--Main Navigation-->