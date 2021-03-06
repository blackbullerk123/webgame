<style>
  .wordart {
      font-family: Arial, sans-serif;
      font-size: 32px;
      font-weight: bold;
      position: relative;
      z-index: 1;
      display: inline-block;
      -webkit-font-smoothing: antialiased;
      -moz-osx-font-smoothing: grayscale;
  }

  .wordart.horizon .text {
      font-family: Arial, sans-serif;
      font-weight: bold;
      font-style: oblique;
      background: #7286a7;
      background: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiA/Pgo8c3ZnIHhtbG5zPSJod…EiIGhlaWdodD0iMSIgZmlsbD0idXJsKCNncmFkLXVjZ2ctZ2VuZXJhdGVkKSIgLz4KPC9zdmc+);
      background: -moz-linear-gradient(top, #e8ecf3 0%, #e8ecf3 13%, #ffffff 50%, #cdd82e 56%, #ffffff 100%);
      background: -webkit-gradient(linear, left top, left bottom, color-stop(0%, #7286a7), color-stop(13%, #7286a7), color-stop(50%, #ffffff), color-stop(56%, #812f30), color-stop(100%, #ffffff));
      background: -webkit-linear-gradient(top, #e8ecf3 0%, #e8ecf3 13%, #ffffff 50%, #cdd82e 56%, #ffffff 100%);
      background: -o-linear-gradient(top, #e8ecf3 0%, #e8ecf3 13%, #ffffff 50%, #cdd82e 56%, #ffffff 100%);
      background: -ms-linear-gradient(top, #e8ecf3 0%, #e8ecf3 13%, #ffffff 50%, #cdd82e 56%, #ffffff 100%);
      background: linear-gradient(to bottom, #e8ecf3 0%, #e8ecf3 13%, #ffffff 50%, #cdd82e 56%, #ffffff 100%);
      filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#7286a7', endColorstr='#ffffff', GradientType=0);
      background-clip: text;
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
  }

  .wordart.horizon .text:before {
      content: attr(data-text);
      position: absolute;
      z-index: -1;
      text-shadow: 0.01em 0em 0 #161616, 0em 0.01em 0 #8d8d8d, 0.02em 0.01em 0 #161616, 0.01em 0.02em 0 #8d8d8d, 0.03em 0.02em 0 #161616, 0.02em 0.03em 0 #8d8d8d, 0.04em 0.03em 0 #161616, 0.03em 0.04em 0 #8d8d8d, 0.05em 0.04em 0 #161616, 0.04em 0.05em 0 #8d8d8d, 0.06em 0.05em 0 #161616, 0.05em 0.06em 0 #8d8d8d, 0.07em 0.06em 0 #161616, 0.06em 0.07em 0 #8d8d8d, 0.08em 0.07em 0 #161616, 0.07em 0.08em 0 #8d8d8d, 0.09em 0.08em 0 #161616, 0.08em 0.09em 0 #8d8d8d, 0.1em 0.09em 0 #161616, 0.09em 0.1em 0 #8d8d8d;
  }
</style>
<header class="main-header">
  <!-- Logo --> 
  <a href="{{ route('index') }}" target="_blank" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    {{-- <span class="logo-lg"><b style="color: red">S</b><b>harker</b><b style="color: red">T</b>opup</span> --}}
    <img src="{{ asset('assets/images/13.png') }}" alt="Sharker" style="height: 60px">
  </a>
  <!-- Header Navbar: style can be found in header.less -->
  <nav class="navbar navbar-static-top" role="navigation">
    <!-- Sidebar toggle button-->
    <div class="wordart horizon">
      <span class="text">Hệ thống top up game</span>
    </div>
    <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
      <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
      <ul class="nav navbar-nav">
        <!-- Notifications: style can be found in dropdown.less -->
        <li class="dropdown notifications-menu">
          @php
            $orders = DB::table('bill')
                          ->orderBy('created_at', 'desc')
                          ->where('status', 0)
                          ->distinct()
                          ->count();

            $orders_pointpurchase = DB::table('point_purchase')
                          ->orderBy('created_at', 'desc')
                          ->where('status', 0)
                          ->distinct()
                          ->count();
            $sum = $orders + $orders_pointpurchase;
          @endphp
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">{{ $sum }}</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">Bạn có {{ $sum }} đơn hàng chưa thanh toán</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li>
                  <a href="{{ route('bills.unpaid') }}">
                    <i class="fa fa-gamepad text-aqua"></i> Có {{ $orders }} đơn hàng game 
                  </a>
                </li>
                <li>
                  <a href="{{ route('bills.unpaid.point') }}">
                    <i class="fa fa-inbox text-yellow"></i> Có {{ $orders_pointpurchase }} đơn hàng nạp point </i> 
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset(Auth::user()->avatar) }}" class="user-image" alt="User Image"/>
            <span class="hidden-xs">{{ Auth::user()->name }}</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="{{ asset(Auth::user()->avatar) }}" class="img-circle" alt="User Image" />
              <p style="color: #ffffff">
                {{ Auth::user()->name }}
                <small>{{ Auth::user()->email }}</small>
              </p>
            </li> 
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="{{ route('admin.profile.transaction', Auth::user()->id) }}" class="btn btn-default btn-flat">TT chuyển khoản</a>
              </div>
              <div class="pull-right">
                <a href="{{ route('admin.profile', Auth::user()->id) }}" class="btn btn-default btn-flat">Thông tin </a>
              </div>
            </li>
            {{-- <li class="user-footer">
              <div class="text-center">
                  <a href="{{ route('admin.profile', Auth::user()->id) }}" class="btn btn-danger btn-flat">Đổi mật khẩu</a>
                  <a href="{{ route('admin.profile.transaction', Auth::user()->id) }}" class="btn btn-danger btn-flat">TT chuyển khoản</a>
              </div>
          </li> --}}
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>