export default {
  init() {
    // JavaScript to be fired on the home page
  },
  finalize() {
    // JavaScript to be fired on the home page, after the init JS

    $('.button--play').click(function() {
      $('.video-overlay').addClass('show');
      $('body').addClass('no-scroll');
  });

  $('.video-overlay .cross').click(function() {
    $('.video-overlay').removeClass('show');
    $('body').removeClass('no-scroll');
  });
  },
};
