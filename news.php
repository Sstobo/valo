<?php
/**
 * The template for displaying all pages.
 * Template Name: news
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
				<section class="hero-container-dark">
					<h1>News</h1>
				</section>

				<section class="articles-container">
					<?php $args = array(
            'post_type' => 'post',
            'posts_per_page' => 10,
       		 );

        		$query = new WP_Query( $args );

       			$tax = 'category';
       		 	$terms = get_terms( $tax );
       		 	$count = count( $terms );
							
       		 	if ( $count > 0 ): ?>
       		  	<div class="news-categories">
							 <a href="#" class="tax-filter active-filter" title="">View All</a>
       		    	<?php
       		    	foreach ( $terms as $term ) {
									if ($term->slug === 'uncategorized') {
										continue;
									}
									else {
       		    		$term_link = get_term_link( $term, $tax );
									 echo '<a href="' . $term_link . '" class="tax-filter" title="' . $term->slug . '">' . $term->name . '</a> ';
									}
       		     	} ?>
       		    </div>
							<?php endif;
							
       		if ( $query->have_posts() ): ?>

       		 	<div class="filtered-posts">
       		 	  <?php while ( $query->have_posts() ) : $query->the_post(); ?>
								<?php get_template_part( 'template-parts/content-news' ); ?>
       		 	  <?php endwhile; ?>
       		 	</div>
							
       		<?php else: ?>
       			<div class="filtered-posts">
       		  	<h2>No articles found</h2>
       		  </div>
       		 <?php endif; ?>
				</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
