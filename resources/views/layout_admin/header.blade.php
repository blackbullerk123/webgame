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
  <a href="{{ route('admin') }}" class="logo">
    <!-- mini logo for sidebar mini 50x50 pixels -->
    <span class="logo-mini"><b>A</b>LT</span>
    <!-- logo for regular state and mobile devices -->
    <span class="logo-lg"><b>Admin</b>LTE</span>
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
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <i class="fa fa-bell-o"></i>
            <span class="label label-warning">10</span>
          </a>
          <ul class="dropdown-menu">
            <li class="header">You have 10 notifications</li>
            <li>
              <!-- inner menu: contains the actual data -->
              <ul class="menu">
                <li>
                  <a href="#">
                    <i class="fa fa-users text-aqua"></i> 5 new members joined today
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-warning text-yellow"></i> Very long description here that may not fit into the page and may cause design problems
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-users text-red"></i> 5 new members joined
                  </a>
                </li>

                <li>
                  <a href="#">
                    <i class="fa fa-shopping-cart text-green"></i> 25 sales made
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="fa fa-user text-red"></i> You changed your username
                  </a>
                </li>
              </ul>
            </li>
            <li class="footer"><a href="#">View all</a></li>
          </ul>
        </li>
        <!-- User Account: style can be found in dropdown.less -->
        <li class="dropdown user user-menu">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <img src="{{ asset('adminlte2/dist/img/user2-160x160.jpg') }}" class="user-image" alt="User Image"/>
            <span class="hidden-xs">Alexander Pierce</span>
          </a>
          <ul class="dropdown-menu">
            <!-- User image -->
            <li class="user-header">
              <img src="dist/img/user2-160x160.jpg" class="img-circle" alt="User Image" />
              <p>
                Alexander Pierce - Web Developer
                <small>Member since Nov. 2012</small>
              </p>
            </li> 
            <!-- Menu Footer-->
            <li class="user-footer">
              <div class="pull-left">
                <a href="#" class="btn btn-default btn-flat">Profile</a>
              </div>
              <div class="pull-right">
                <a href="#" class="btn btn-default btn-flat">Sign out</a>
              </div>
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>