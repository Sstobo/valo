jQuery(document).ready(function($) {
  $('#download-presentation').click(function(e) {
    e.preventDefault();
    $('.modal')
      .removeClass('modal-closed')
      .addClass('modal-open');
  });
  $('.close-modal').click(function(e) {
    e.preventDefault();
    $('.modal')
      .removeClass('modal-open')
      .addClass('modal-closed');
  });
});
