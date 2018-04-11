jQuery(document).ready(function($) {
  $('.title').on('click', function() {
    $(this)
      .parents()
      .find('.text')
      .removeClass('height');
    $(this)
      .parents()
      .find('.up')
      .addClass('hide');
    $(this)
      .parents()
      .find('.down')
      .removeClass('hide');
    $(this)
      .find('.up')
      .removeClass('hide');
    $(this)
      .find('.down')
      .addClass('hide');
    $(this)
      .siblings()
      .toggleClass('height');
  });
});


