    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{ auth()->user()->name }}</p>
          <a href="#"><i class="fa fa-envelope"></i>{{ auth()->user()->email }}</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>
        <li class="{{ Request::is('home') || Request::is('home/*')? 'active' : '' }}">
          <a href="{{ route('home') }}"><i class="fa fa-home"></i> <span>Dashboard</span></a>
        </li>
        <li class="{{ Request::is('users') || Request::is('users/*')? 'active' : '' }}">
          <a href="{{ route('users.index') }}"><i class="fa fa-users"></i> <span>Users</span></a>
        </li>
      </ul>
    </section>