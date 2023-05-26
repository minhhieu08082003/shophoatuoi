<div class="block-intro">
			<div class="container">
				<div class="row">
				 		<?php $getposts = new WP_query(); $getposts->query('post_status=publish&showposts=3&post_type=dich-vu'); ?>
						<?php global $wp_query; $wp_query->in_the_loop = true; ?>
						<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
							<?php $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); ?>
							<div class="col-lg-4 item-intro">
								<div class="img-height">
									<a href="<?php the_permalink(); ?>"><img src="<?php echo $featured_img_url; ?>" alt="<?php the_title(); ?>"></a>
								</div>
								<div class="item-info">
									<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
								<p><?php the_excerpt(); ?></p>
								</div>
							</div>	
						<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>