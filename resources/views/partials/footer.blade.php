<div class="video-overlay">
  <div class="cross"></div>
  <div class="video-wrapper" itemscope itemtype="https://schema.org/VideoObject">
    <meta itemprop="uploadDate" content="Wed Jul 24 2019 20:41:21 GMT+0100 (British Summer Time)"/>
    <meta itemprop="name" content="Sc Data 2704"/>
    <meta itemprop="duration" content="PT2M28.89S" />
    <meta itemprop="thumbnailUrl" content="https://content.jwplatform.com/thumbs/YDqkWm44-1920.jpg"/>
    <meta itemprop="contentUrl" content="https://content.jwplatform.com/videos/YDqkWm44-mZRGQPeg.mp4"/>
    <script src="https://cdn.jwplayer.com/players/YDqkWm44-T0PF2eBM.js"></script>
  </div>
</div>
<footer class="wrap footer">
    @if (!is_page('contact'))
    <div class="footer-top">
        <div class="container">
          Use Social Chain Data to increase your brand’s relevance on social.
        {{-- {{ gravity_form( 1, false, false ) }} --}}
        <a href="/contact#contact" class="button center">Contact Us</a>
        </div>
      </div>
      @else
      <div class="footer-top-border"></div>
      @endif
    <div class="footer-bottom">
        <div class="container row space-between">
      <div class="footer-social">
        <a href="https://www.instagram.com/socialchain" target="_blank" class="footer-social__icons"><img src="@asset('images/svg/instagram.svg')"/></a>
        <a href="https://twitter.com/TheSocialChain" class="footer-social__icons" target="_blank" ><img src="@asset('images/svg/twitter.svg')"/></a>
        <a href="https://www.facebook.com/SocialChain/" class="footer-social__icons" target="_blank" ><img src="@asset('images/svg/facebook.svg')"/></a>
      </div>
      <div class="footer-links row">
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
