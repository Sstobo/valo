(function($) {
  //Cache reference to window and animation items for performance
  var $animation_elements = $('.about-phone-icon');
  var $window = $(window);
  $window.on('scroll', check_if_in_view);
  $window.on('scroll resize', check_if_in_view);
  $window.trigger('scroll');
  function check_if_in_view() {
    console.log(window_top_position);
    var window_height = $window.height();
    console.log(window_height);
    var window_top_position = $window.scrollTop();
    var window_bottom_position = window_top_position + window_height;

    $.each($animation_elements, function() {
      var $element = $(this);
      var element_height = $element.outerHeight();
      var element_top_position = $element.offset().top;
      var element_bottom_position = element_top_position + element_height;
      console.log(window_top_position);
      if (
        element_bottom_position >= window_top_position &&
        element_top_position <= window_bottom_position
      ) {
        $element.addClass('about-phone-in-view');
      } else {
        $element.removeClass('about-phone-in-view');
      }
    });
  }
})(jQuery);
