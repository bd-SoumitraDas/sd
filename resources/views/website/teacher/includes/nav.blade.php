<nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
  <div class="container-fluid">
    <div class="navbar-wrapper">
      <div class="navbar-toggle">
        <button type="button" class="navbar-toggler">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <a class="navbar-brand" href="#pablo">Dashboard</a>
    </div>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
      <span class="navbar-toggler-bar navbar-kebab"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navigation">
      <form>
        <div class="input-group no-border">
          <input type="text" value="" class="form-control" placeholder="Search...">
          <div class="input-group-append">
            <div class="input-group-text">
              <i class="now-ui-icons ui-1_zoom-bold"></i>
            </div>
          </div>
        </div>
      </form>
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" href="#pablo">
            <i class="now-ui-icons media-2_sound-wave"></i>
            <p>
              <span class="d-lg-none d-md-block">Stats</span>
            </p>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="now-ui-icons location_world"></i>
            <p>
              <span class="d-lg-none d-md-block">Some Actions</span>
            </p>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link">
            <div class="profile" onclick="menuToggle();">
              <i class="now-ui-icons users_single-02"></i>
                <p>
                  <span class="d-lg-none d-md-block">Account</span>
                </p>
            </div>
          </a>
          <div class="action">
            <div class="profile" onclick="menuToggle();">
            </div>
            <div class="menu">
              <h3>Name<br /><span>Account Settings</span></h3>
              <ul>
                <li>
                  <img src="{{ asset('dropdown/assets/icons/user.png') }}" /><a href="#" style="color:black;" >My profile</a>
                </li>
                <li>
                  <img src="{{ asset('dropdown/assets/icons/edit.png') }}" /><a href="#" style="color:black;" >Edit profile</a>
                </li>
                <li>
                  <img src="{{ asset('dropdown/assets/icons/envelope.png') }}" /><a href="#" style="color:black;" >Inbox</a>
                </li>
                <li>
                  <img src="{{ asset('dropdown/assets/icons/settings.png') }}" /><a href="#" style="color:black;" >Setting</a>
                </li>
                <li><img src="{{ asset('dropdown/assets/icons/question.png') }}" /><a href="#" style="color:black;" >Help</a></li>
                <li>
                  <img src="{{ asset('dropdown/assets/icons/log-out.png') }}" /><a href="#" style="color:black;" >Logout</a>
                </li>
              </ul>
            </div>
          </div>
        </li>
      </ul>
    </div>
  </div>
</nav>
      
<div class="panel-header" style="height: 70px;padding:0">

</div>
