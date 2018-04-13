
						<?php if (have_posts()) : $i = 1; while ( have_posts() && $i < 4 ) : the_post(); ?>

							
									<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
									<p class="journal-date"><?php the_time(' F jS, Y') ?></p>
							

						<?php $i++; endwhile; ?>
						<?php else : ?>
						<p> News stories coming soon!</p>

						<?php endif ?>
					</div>	


          	<?php if ( $query->have_posts() ) : ?>
					
				
          <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
      
      <?php endif; ?>

      <?php the_widget( 'WP_Widget_Recent_Posts' ); ?>

<?php if ( red_starter_categorized_blog() ) : // Only show the widget if site has multiple categories. ?>
<div class="widget widget_categories">
  <h2 class="widget-title"><?php echo esc_html( 'Most Used Categories' ); ?></h2>
  <ul>
  <?php
    wp_list_categories( array(
      'orderby'    => 'count',
      'order'      => 'DESC',
      'show_count' => 1,
      'title_li'   => '',
      'number'     => 10,
    ) );
  ?>
  </ul>
</div><!-- .widget -->
<?php endif; ?>

<?php
  $archive_content = '<p>' . sprintf( esc_html( 'Try looking in the monthly archives. %1$s' ), convert_smilies( ':)' ) ) . '</p>';
  the_widget( 'WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$archive_content" );
?>