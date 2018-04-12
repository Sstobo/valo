jQuery(document).ready(function($) {
  window.onscroll = function() {
    scrollFunction();
  };

  $('.fix').on('click', function() {
    topFunction();
  });

  function topFunction() {
    window.scroll({
      top: 0,
      behavior: 'smooth'
    });
  }

  function scrollFunction() {
    if (
      document.body.scrollTop > 1000 ||
      document.documentElement.scrollTop > 1000
    ) {
      $('.fix').css('display', 'flex');
    } else {
      $('.fix').css('display', 'none');
    }
  }
});


