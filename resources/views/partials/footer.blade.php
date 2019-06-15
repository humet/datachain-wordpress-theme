<footer class="wrap footer">
    <div class="footer-top">
        <div class="container">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec interdum sagittis metus vel auctor.
        {{ gravity_form( 1, false, false ) }}
        </div>
      </div>

    <div class="footer-bottom">
        <div class="container row space-between">
      <div class="footer-social">
        <a href="#" class="footer-social__icons"><img src="@asset('images/svg/instagram.svg')"/></a>
        <a href="#" class="footer-social__icons"><img src="@asset('images/svg/twitter.svg')"/></a>
        <a href="#" class="footer-social__icons"><img src="@asset('images/svg/facebook.svg')"/></a>
      </div>
      <div class="footer-links">
          @if (has_nav_menu('footer_navigation'))
          {!! wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'nav']) !!}
        @endif
      <div class="copyright">&copy; Social Chain {{date("Y")}}</div>
      </div>
      <div class="footer-logo">
          <img src="@asset('images/svg/footer-logo.svg')"/>
      </div>
        </div>
    </div>
  </div>
</footer>
