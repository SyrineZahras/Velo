<header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap" style="height: 0px;"> 
          <nav class="rd-navbar rd-navbar-aside rd-navbar-original rd-navbar-fixed" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                      <!-- Nav Item - User Information -->
                      

                  <!-- RD Navbar Brand-->
                  <div class="">
                    <a href="index.html"><img class="brand-logo-light" src="images/logobike.png" alt="" width="50" height="50"></a>
                </div>
                  <div class="block-right">
                    <ul class="list-inline nav-list">
                      <li class="list-inline-item active"><a class="link-menu-item " href="/home">Home</a></li>
                      <li class="list-inline-item"><a class="link-menu-item " href="/user-association">Association</a></li>
                      <li class="list-inline-item "><a class="link-menu-item " href="/user-ride">Rides</a></li>
                      <li class="list-inline-item"><a class="link-menu-item " href="/user-event">Events</a></li>
                      <li class="list-inline-item"><a class="link-menu-item " href="/user-bike">Bikes</a></li>
                      <li class="list-inline-item"><a class="link-menu-item " href="/user-rent">Rent Bike</a></li>
                      <li class="list-inline-item"><a class="link-menu-item " href="/user-claim">Claims</a></li>
                      <li class="list-inline-item"><a class="link-menu-item " href="/user-blog">Blogs</a></li>

                      <li class="nav-item dropdown no-arrow ">
                        <a class="nav-link dropdown-toggle " href="#" id="userDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{ Auth::user()->name }}</span>
                            <img class="img-profile rounded-circle" width="50" src="{{ Auth::user()->profile_photo_url }}" > 
                        </a>
                       <!-- Dropdown - User Information -->
                        <div class="dropdown-menu dropdown-menu-right"
                            aria-labelledby="userDropdown">
                            <a class="dropdown-item" href="{{ route('profile.show') }}">
                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span style="font-weight: 20px; color:blue;">Profile</span>
                            </a>
                            <a class="dropdown-item" href="#">
                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span style="font-weight: 20px; color:blue;">Settings</span>
                            </a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                <span style="font-weight: 20px; color:blue;">Logout</span>
                            </a>
                        </div>
                        </li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>



        <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <a class="btn btn-primary" href="{{ route('logout') }}" @click.prevent="$root.submit();">Logout</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
