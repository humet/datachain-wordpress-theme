<section class="wrap">
  @if (is_front_page())
  <div class="container">
    <h1>BLAH BLAH BLAH</h1>
  </div>
  @elseif (is_page(array( 'what-we-do', 'how-we-do-it', 'contact', 'privacy-policy', 'terms-conditions',)))
  <div class="hero-section grey">
  <div class="container pages-header">
    <h1>{!! App::title() !!}</h1>
    <div class="intro-text">@include('partials.content-page')</div>
  </div>
<div class="pages-hero" style="background-image: url(' {{ the_post_thumbnail_url() }} ')"></div>
</div>
  @elseif( is_404() )
  <div class="container pages-header">
    <h1>Oh NO!</h1>
  </div>
  @endif
</section>