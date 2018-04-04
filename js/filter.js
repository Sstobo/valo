jQuery(document).ready(function($) {
  $('.tax-filter').click(function(event) {
    // Prevent default action - opening tag page
    if (event.preventDefault) {
      event.preventDefault();
    } else {
      event.returnValue = false;
    }

    // Get tag slug from title attirbute
    var selecetd_taxonomy = $(this).attr('title');

    // After user click on tag, fade out list of posts
    $('.tagged-posts').fadeOut();

    data = {
      action: 'filter_posts', // function to execute
      valo_nonce: valo_vars.valo_nonce, // wp_nonce
      taxonomy: selecetd_taxonomy // selected tag
    };

    $.post(valo_vars.valo_ajax_url, data, function(response) {
      if (response) {
        // Display posts on page
        $('.tagged-posts').html(response);
        // Restore div visibility
        $('.tagged-posts').fadeIn();
      }
    });
  });
});
