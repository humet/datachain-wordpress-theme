<section class="wrap @if (is_front_page()) mb-50 @endif">
  @if (is_front_page())
  <div class="container pages-header-home row sm-column-reverse">
  <div class="video">
      <div class="floaty-stuff"><img src="@asset('images/svg/Home1-01.svg')"/></div>
      <div class="couple"><img src="@asset('images/svg/Home2-01.svg')"/></div>
      <div class="play-video"><img src="@asset('images/svg/video-play.svg')"/></div>
      <div class="video-text">Let us show you how</div>
  </div>
  <div class="content">
    <h1><span>Feel</span> what your audience feels with data from Social Chain</h1>
    <div class="fbmessenegr">
        <img src="@asset('images/svg/Facebook_Messenger_logo.svg')"/>
    </div>
    </div>
  </div>
  @elseif (is_page(array( 'what-we-do', 'how-we-do-it', 'contact',)))
  <div class="hero-section grey">
  <div class="container pages-header row">
    <h1>{!! App::title() !!}</h1>
    <div class="intro-text">@include('partials.content-page')</div>
  </div>
<div class="pages-hero" style="background-image: url(' {{ the_post_thumbnail_url() }} ')"></div>
</div>
@elseif (is_page(array( 'privacy-policy', 'terms-conditions',)))
<div class="hero-section grey">
    <div class="container pages-header">
      <h1>{!! App::title() !!}</h1>
    </div>
  </div>
  @elseif( is_404() )
  <div class="hero-section grey">
  <div class="container pages-header row">
    <h1>404</h1>
    <div class="intro-text-404">
      The page you are looking for doesn’t exist or another error occured. Click this button to return home.
        <a href="/" class="button">Home</a>
    </div>
  </div>
  </div>
  @endif
</section>