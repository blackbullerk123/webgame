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
                <i class="fa fa-files-o"></i>
                <span>Tất cả games</span>
              </a>
            </li>
            <li>
              <a href="{{ route('bills') }}">
                <i class="fa fa-th"></i> <span>Hóa đơn</span>
              </a>
            </li>
            <li class="header ">
              <span style="font-size:18px ;color:rgb(238, 238, 238)"> THIẾT LẬP</span>
            </li>
            <li class="treeview">
              <a href="{{ route('slide') }}">
                <i class="fa fa-pie-chart"></i>
                <span>Banner</span>
              </a>
            </li>
            <li class="treeview">
              <a href="{{ route('logout') }}">
                <i class="fa fa-laptop"></i>
                <span>Đăng xuất</span>
              </a>
            </li>
          </ul>
        </section>
        <!-- /.sidebar -->
      </aside>