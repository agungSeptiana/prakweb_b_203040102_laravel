<!--*******************
        Preloader start
    ********************-->
    {{-- <div id="preloader">
      <div class="sk-three-bounce">
          <div class="sk-child sk-bounce1"></div>
          <div class="sk-child sk-bounce2"></div>
          <div class="sk-child sk-bounce3"></div>
      </div>
  </div> --}}
  <!--*******************
      Preloader end
  ********************-->

<header class="navbar navbar-dark sticky-top flex-md-nowrap p-0 shadow" style="background-color: rgba(255, 255, 255, 0.2); box-shadow: 0 15px 35px rgba(0,0,0,0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.25); border-top: 1px solid rgba(255,255,255,0.5); border-left: 1px solid rgba(255,255,255,0.5);">
    <a class="navbar-brand col-md-3 col-lg-2 me-0 px-5 text-light" style="background-color: rgba(255, 255, 255, 0.2); box-shadow: 0 15px 35px rgba(0,0,0,0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.25); border-top: 1px solid rgba(255,255,255,0.5); border-left: 1px solid rgba(255,255,255,0.5);" href="#">AGS Blog</a>
    <button class="navbar-toggler position-relative d-md-none collapsed mb-2" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <input id="search" class="input-group search-area right d-lg-inline-flex d-none w-50" type="text" placeholder="Search" aria-label="Search">
    {{-- <div class="navbar-nav">
      <div class="nav-item text-nowrap">
        <form action="/logout" method="post">
          @csrf
          <button type="submit" class="nav-link px-3 border-0 text-light" >Logout <span data-feather="log-out"></span></button>
        </form>
      </div>
    </div> --}}

    <div class="nav-control">
      <div class="hamburger">
          <span class="line"></span><span class="line"></span><span class="line"></span>
      </div>
    </div>
  
      <li class="nav-item dropdown header-profile" style="list-style: none; right: 25px;">
        <a class="nav-link" href="#" role="button" data-bs-toggle="dropdown">
            <img src="/img/pic1.jpg" width="30" alt="">
        </a>
        <div class="dropdown-menu dropdown-menu-end">
            <a href="/dashboard/profile" class="dropdown-item ai-icon">
                <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                <span class="text-dark ms-2">{{ auth()->user()->name }}</span>
            </a>
            <form action="/logout" method="post" class="dropdown-item ai-icon">
              @csrf
                <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                <button class="ms-2 border-0" style="background: none;" >Logout </button>
            </form>
        </div>
      </li>
  </header>
  
    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script src="./vendor/global/global.min.js"></script>
	<script src="./vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
	<script src="./vendor/chart.js/Chart.bundle.min.js"></script>
	
	<!-- Chart piety plugin files -->
    <script src="./vendor/peity/jquery.peity.min.js"></script>
	
	<!-- Apex Chart -->
	<script src="./vendor/apexchart/apexchart.js"></script>
	
	<!-- Dashboard 1 -->
	<script src="./js/dashboard/dashboard-1.js"></script>
	
	<script src="./vendor/owl-carousel/owl.carousel.js"></script>
    <script src="./js/custom.js"></script>
	<script src="./js/deznav-init.js"></script>
    
    
