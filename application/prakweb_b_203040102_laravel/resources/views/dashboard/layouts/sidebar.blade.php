<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block sidebar collapse" style="background-color: rgba(255, 255, 255, 0.2); box-shadow: 0 15px 35px rgba(0,0,0,0.05); backdrop-filter: blur(10px); border: 1px solid rgba(255,255,255,0.25); border-top: 1px solid rgba(255,255,255,0.5); border-left: 1px solid rgba(255,255,255,0.5);">
    <div class="position-sticky pt-3">
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-light {{ Request::is('dashboard') ? 'active' : '' }}" aria-current="page" href="/dashboard">
            <span data-feather="home" class="text-light"></span>
            Dashboard
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light {{ Request::is('dashboard/posts*') ? 'active' : '' }}" href="/dashboard/posts">
            <span class="text-light" data-feather="file-text"></span>
            My Posts
          </a>
        </li>
      </ul>

      @can('admin')
      <h6 class="sidebar-heading d-flex justify-content-beetween align-item-center px-3 mt-4 mb-1 text-muted">
        <span>Administratior</span>
      </h6>
      <ul class="nav flex-column">
        <li class="nav-item">
          <a class="nav-link text-light {{ Request::is('dashboard/categories*') ? 'active' : '' }}" href="/dashboard/categories">
            <span class="text-light" data-feather="grid"></span>
            Post Categories
          </a>
        </li>
      </ul>
      @endcan

    </div>
  </nav>