<header class="banner header">
  <div class="container-lg navbar navbar-expand-lg navbar-light">
      <a class="brand nav-brand mr-5" href="{{ home_url('/') }}">
        <img src="@asset('images/logo.png')">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div id="menu-icon" class="menu-icon">
          <span class="menu-icon-line-1 menu-icon-line"></span>
          <span class="menu-icon-line-2 menu-icon-line"></span>
          <span class="menu-icon-line-3 menu-icon-line"></span>
        </div>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <nav class="nav-primary">
          @if (has_nav_menu('primary_navigation'))
            {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
          @endif
        </nav>
        <div class="right-nav d-flex justify-content-center ml-auto">
          <a href="#" class="download-badge mr-3">
            <img src="@asset('images/google-play-badge.png')">
          </a>
          <a href="#" class="download-badge">
            <img src="@asset('images/app-store-badge.png')">
          </a>
        </div>
      </div>
    </div>
  
</header>
