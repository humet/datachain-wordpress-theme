export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired

    $('.mobile-nav-button').click(function() {
      $('#nav-icon2').toggleClass('open');
      $('.mobile-nav-overlay').toggleClass('show');
      $('body').toggleClass('no-scroll');
  });

  $('.chat-bot').click(function() {
    $('.widget').show();
    $('.close-widget').show();
    $('.hand').hide();
    $('.close').hide();
});

$('.close-widget').click(function() {
  $('.widget').hide();
  $('.hand').show();
  $('.close').show();
});
  },
};
