jQuery(document).ready(function($) {
  $('.tax-filter').click(function(event) {
    // Prevent default action - opening tag page
    if (event.preventDefault) {
      event.preventDefault();
    } else {
      event.returnValue = false;
    }

    // Add underline to active filter
    $('.tax-filter').removeClass('active-filter');
    $(this).addClass('active-filter');
    $(this).blur();

    // Get tag slug from title attirbute
    var selectedTaxonomy = $(this).attr('title');

    // After user click on tag, fade out list of posts
    $('.filtered-posts').fadeOut();

    var data = {
      action: 'filter_posts', // function to execute
      valo_nonce: valo_vars.valo_nonce, // wp_nonce
      taxonomy: selectedTaxonomy // selected tag
    };

    $.post(valo_vars.valo_ajax_url, data, function(response) {
      if (response) {
        // Display posts on page
        $('.filtered-posts').html(response);
        // Restore div visibility
        $('.filtered-posts').fadeIn();
      }
    });
  });
  $('.share-post').hover(
    function() {
      $('.soc-font-icon').css({ display: 'inline-block' });
      $('.fa-share-alt').css({ borderColor: '#c7c7c7' });

      $('.soc-links-container').animate({
        opacity: 1
      });
    },
    function() {
      $('.soc-font-icon').animate({ display: 'none' });
      $('.fa-share-alt').css({ borderColor: '#e7e7e7' });
      $('.soc-links-container').animate({
        opacity: 0
      });
    }
  );
});
