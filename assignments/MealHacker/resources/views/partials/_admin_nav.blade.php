<nav class="navbar is-dark">
    <div class="container">
        <div class="navbar-brand">
            <a class="navbar-item has-text-white is-size-4 has-text-weight-bold" href="/recipe">
                Admin
            </a>
            <span role="button" tabindex="0" class="navbar-burger burger has-text-white" data-target="navbar-menu">
          <span></span>
          <span></span>
          <span></span>
        </span>
        </div>
        <div id="navbar-menu" class="navbar-menu">
            <div class="navbar-end">
                <!-- Loop through the navigation items -->
                <a class="{{ Request::is('/') ? "is-active" : "" }} navbar-item nav-home" href="/">Go To Website</a>
            </div>
        </div>
    </div>
</nav>
