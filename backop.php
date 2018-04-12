<div class="news">
						<p class="caps title">News</p>
						<?php if (have_posts()) : $i = 1; while ( have_posts() && $i < 4 ) : the_post(); ?>

							
									<a href="<?php the_permalink() ?>"><?php the_title() ?></a>
									<p class="journal-date"><?php the_time(' F jS, Y') ?></p>
							

						<?php $i++; endwhile; ?>
						<?php else : ?>
						<p> News stories coming soon!</p>

						<?php endif ?>
					</div>	