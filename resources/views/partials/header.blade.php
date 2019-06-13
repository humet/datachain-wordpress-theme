<header class="wrap header @if (!is_front_page()) border-bottom @endif ">
  <div class="container">
    <a class="brand" href="{{ home_url('/') }}"><img src="@asset('images/svg/social-chain-data.svg')"/></a>
    <nav class="nav-primary">
      @if (has_nav_menu('primary_navigation'))
        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
      @endif
    </nav>
  </div>
</header>
