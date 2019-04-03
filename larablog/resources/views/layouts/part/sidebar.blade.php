    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{ asset('adminlte/dist/img/user2-160x160.jpg') }}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>Alexander Pierce</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
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
        <li class="{{ Request::is('admin/santri') || Request::is('admin/santri/*') ? 'active' : '' }}">
          <a href="{{ url('admin/santri') }}"><i class="fa fa-users"></i> <span>Santri</span></a>
        </li>
        <li class="{{ Request::is('admin/guru') || Request::is('admin/guru/*') ? 'active' : '' }}">
          <a href="{{ url('admin/guru') }}"><i class="glyphicon glyphicon-education"></i> <span>Guru</span></a>
        </li>
        <li class="{{ Request::is('admin/provinsi') || Request::is('admin/provinsi/*') ? 'active' : '' }}">
          <a href="{{ url('admin/provinsi') }}"><i class="fa fa-globe"></i> <span>Provinsi</span></a>
        </li>
      </ul>
    </section>