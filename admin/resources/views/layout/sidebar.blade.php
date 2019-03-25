      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="/staradmin/images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Richard V.Welsh</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
              <button class="btn btn-success btn-block">New Project
                <i class="mdi mdi-plus"></i>
              </button>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('artikel') }}">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Article</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{ url('/category') }}">
              <i class="menu-icon mdi mdi-table"></i>
              <span class="menu-title">Category</span>
            </a>
          </li>
        </ul>
      </nav>