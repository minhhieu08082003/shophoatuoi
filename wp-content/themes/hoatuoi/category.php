<?php get_header(); 
/**
 * template Name: tin tuc 2   
 */
?>		
	<?php get_template_part('slider')?>
		</div>
		<!-- end lh-header -->
			<div class="block-slider">
				
			</div>
			<!-- end block-slider -->
		</div>
		<!-- end lh-header -->
		<div class="module-news">
			<div class="container">
				<div class="bread-crumb">
					<a href="<?php bloginfo('url');?>">Trang chủ</a>
					<span class="dot">/</span>
					<span class="name">Tin tức</span>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
					<?php 
							$args = array(
								'post_status' => 'publish', // Chỉ lấy những bài viết được publish
								'showposts' => 10, // số lượng bài viết
							);
						?>
						<?php $getposts = new WP_query($args); ?>
						<?php global $wp_query; $wp_query->in_the_loop = true; ?>
						<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
							<?php //các thành phần cần lấy  ?>
							<div class="row">
								<div class="col-4 img">
									<a href="<?php the_permalink()?>">
									
									<?php the_post_thumbnail(); ?>
										<img class="img-fluid lh2-img" src="<?php echo $featured_img_url; ?> " alt="
										<?php the_title();?>">
									</a>
								</div>
								<div class="col-8 text">
									<a href="<?php the_permalink();?>"><?php the_title();?></a>
									<p><?php the_excerpt();?>.</p>
									<div class="lh2-date"><i class="fas fa-calendar-alt"></i><?php echo
									get_the_date('d/m/Y');?></div>
								</div>
							</div>
						<?php endwhile; wp_reset_postdata(); ?>
						<div class="lh2-pagging col-12">
							<?php if(paginate_links()!='') {?>
							<div class="quatrang">
								<?php
								global $wp_query;
								$big = 999999999;
								echo paginate_links( array(
									'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
									'format' => '?paged=%#%',
									'prev_text'    => __('« Mới hơn'),
									'next_text'    => __('Tiếp theo »'),
									'current' => max( 1, get_query_var('paged') ),
									'total' => $wp_query->max_num_pages
									) );
								?>
							</div>
						<?php } ?>
						</div>
					</div>
					<div class="col-lg-3 d-none d-lg-block">
					<?php get_sidebar();?>
				</div>
					</div>
				</div>
				
			</div>
		</div>
		
<?php get_footer();?>	