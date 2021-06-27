<!doctype html>
<html {!! get_language_attributes() !!}>
  @include('partials.head')
  <body @php body_class() @endphp>
    <section class="hero-section">
      <img class="background-img" src="@asset('images/Background.png')">
      @php do_action('get_header') @endphp
      @include('partials.header')
      <div class="container">
        <div class="row">
          <div class="col-12 col-lg-8">
            <h1 class="hero-title">
              Organise projects.
              <br/>
              Get more done.
            </h1>
            <a href="#" class="btn hero-btn">Get Started</a>
          </div>
          <div class="d-none d-lg-block col-lg-4">
            <img class="hero-phone-img" src="@asset('images/iPhone.png')">
          </div>
        </div>
      </div>
    </section>
    <div class="wrap" role="document">
      <div class="content">
        <main class="main">
          <!-- @yield('content') -->
          @include('partials.landing')
        </main>
        @if (App\display_sidebar())
          <aside class="sidebar">
            @include('partials.sidebar')
          </aside>
        @endif
      </div>
    </div>
    @php do_action('get_footer') @endphp
    @include('partials.footer')
    @php wp_footer() @endphp
  </body>
</html>
