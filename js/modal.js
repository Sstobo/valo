jQuery(document).ready(function($) {
  function validateEmail(email) {
    var re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
  }
  $('input[type="submit"]').attr('disabled', 'disabled');
  $('input[type="email"]').keyup(function() {
    if (
      $('input[type="email"]').val() === '' ||
      !validateEmail($('input[type="email"]').val())
    ) {
      $('input[type="submit"]').attr('disabled', 'disabled');
    } else if (validateEmail($('input[type="email"]').val())) {
      $('input[type="submit"]').removeAttr('disabled');
    }
  });
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
  // $('#mc-embedded-subscribe-form').submit(function() {
  //   $('.modal')
  //     .removeClass('modal-open')
  //     .addClass('modal-closed');
  // });
});
