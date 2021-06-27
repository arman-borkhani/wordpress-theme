<footer class="content-info footer py-5">
  <div class="container footer-wrapper">
    <div>
      <div class="footer-logo mb-3">
        <img src="@asset('images/small-logo.png')">
      </div>
      <div class="links mb-2">
          <a href="#" class="mr-4">Download Now</a>
          <a href="#">License</a>
      </div>
      <div class="footer-menu mb-3">
          @if (has_nav_menu('footer_navigation'))
            {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
          @endif
      </div>
      <div class="copyright">
        @php(dynamic_sidebar('footer-copyright'))
      </div>
    </div>
    <div class="d-flex flex-column">
      <span class="mb-3">Get the App</span>
      <a href="#" class="download-badge mb-3">
        <img src="@asset('images/google-play-badge.png')">
      </a>
      <a href="#" class="download-badge">
        <img src="@asset('images/app-store-badge.png')">
      </a>
    </div>
  </div>
</footer>
