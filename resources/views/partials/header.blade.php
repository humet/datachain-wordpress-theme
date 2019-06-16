<header class="wrap header @if (!is_front_page()) grey border-bottom @endif ">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/svg/social-chain-data.svg')"/></a>
    <div class="mobile-nav-button">
      <div id="nav-icon2">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
  <div class="mobile-nav-overlay">
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
  </div>
</header>
