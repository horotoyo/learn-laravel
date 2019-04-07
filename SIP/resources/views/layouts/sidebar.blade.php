      <div class="nav-left-sidebar sidebar-dark">
            <div class="menu-list">
                <ul class="navbar-nav flex-column" style="background-color: #030214">
                    <li class="nav-divider" style="padding-left: 2rem; padding-top: 1rem">
                        {{ auth()->user()->nama }} <br> <small><i class="fas fa-circle"></i> SuperAdmin</small>
                    </li>
                </ul>
                <nav class="navbar navbar-expand-lg navbar-light" style="padding-top: 0rem">
                    <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav flex-column">
                            <li class="nav-divider">
                                Menu
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('santri') || Request::is('santri/*') ? 'active' : '' }}" href="{{ route('santri.index') }}"><i class="fa fa-fw fas fa-child"></i>Santri <span class="badge badge-success">6</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('orangtua') || Request::is('orangtua/*') ? 'active' : '' }}" href="{{ route('orangtua.index') }}">
                                    <i class="fa fa-fw fa fa-users"></i>Orang Tua Santri
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link {{ Request::is('pengguna') || Request::is('pengguna/*') ? 'active' : '' }}" href="{{ route('pengguna.index') }}">
                                    <i class="fa fa-fw fas fa-address-book"></i>User
                                </a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>