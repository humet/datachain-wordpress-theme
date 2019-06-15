export default {
  init() {
    // JavaScript to be fired on all pages
  },
  finalize() {
    // JavaScript to be fired on all pages, after page specific JS is fired
    $('#solutions1').show();
    $('.solutions-tabs li a.current').addClass('current');
    $('.solutions-tabs li a').click(function() {
      var tabDivId = this.hash;							   
      
      $('.solutions-tabs li a').removeClass('current');
      $(this).addClass('current');
      $('.solutions-img').hide();
      $(tabDivId).fadeIn();
      return false;
    });
  },
};
