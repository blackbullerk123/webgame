      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
            <li class="treeview">
              <a href="{{ route('admin') }}">
                <h4><i class="fa fa-dashboard"></i> <span>Bảng điều khiển</span></h4>
              </a>
            </li>
            <li class="header ">
              <span style="font-size:18px ;color:rgb(238, 238, 238)"> QUẢN LÝ</span>
            </li>
            <li class="treeview">
              <a href="{{ route('product') }}">
                <i class="fa fa-gamepad"></i>
                <span>Tất cả games</span>
              </a>
            </li>
            <li>
              <a href="{{ route('bills') }}">
                <i class="fa fa-inbox"></i> <span>Hóa đơn games</span>
              </a>
            </li>
            <li>
              <a href="{{ route('point') }}">
                <i class="fa fa-inbox"></i> <span>Hóa đơn points</span>
              </a>
            </li>
            <li>
              <a href="{{ route('users') }}">
                <i class="fa fa-user"></i> <span>Tất cả user</span>
              </a>
            </li>
            <li class="header ">
              <span style="font-size:18px ;color:rgb(238, 238, 238)"> THIẾT LẬP</span>
            </li>
            <li class="treeview">
              <a href="{{ route('slide') }}">
                <i class="fa fa-list-alt"></i>
                <span>Banner</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ route('logout') }}">
                <i class="fa fa-sign-out"></i>
                <span>Đăng xuất</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>