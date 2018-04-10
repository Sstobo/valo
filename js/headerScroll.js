(function($) {
  var header = $('#header-wrapper');
  console.log('test');
  $(window).scroll(function() {
    if (scrollY <= 0) {
      if ($('.page-template-news')) {
        header.css({ background: 'transparent' });
      }
      header.animate(
        {
          opacity: 1,
          height: '160px'
        },
        300
      );
    }
    if (scrollY > 0 && header.is(':not(:animated)')) {
      header.css({ background: '#fff' });
      header.animate(
        {
          opacity: 0.9,
          height: '140px',
        },
        300
      );
    }
  });
})(jQuery);
