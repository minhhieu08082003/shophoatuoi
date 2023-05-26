<?php get_header(); 
/**
 * template Name: tin tuc   
 */
?>	
	
	<?php get_header(); ?>		
	<?php get_template_part('slider')?>
		<div class="module-news">
			<div class="container">
				<div class="bread-crumb">
					<a href="<?php bloginfo('url');?>">Trang chủ</a>
					<span class="dot">/</span>
					<span class="name">Tin tức</span>
				</div>
			</div>			
		</div>	
		<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<?php the_content(); ?>
						<p class="lh2-title"><span>SẢN PHẨM HOT BÁN CHẠY</span></p> 
						<div class="container">
							<div class="row">
								<?php $getposts = new WP_query(); 
									$getposts->query('
									post_status=publish&showposts=3&post_type=san-pham'); 
									?>
									<?php global $wp_query; $wp_query->in_the_loop = true; ?>
									<?php while ($getposts->have_posts()) : $getposts->the_post(); ?>
									<?php $featured_img_url = get_the_post_thumbnail_url( get_the_ID (), 'full' ); ?>		
								<div class="item-product col-lg-4 col-md-6 col-sm-6 col-12">
								<div class="bg">
										<div class="img-height">
											<a class="img" href="<?php the_permalink();?>">
												<img class="img-fluid lh2-img" src="<?php echo $featured_img_url;?>" alt="
												<?php the_title();?>">
											</a>
										</div>
										<div class="info-product">
											<a class="name" href="<?php the_permalink();?>"><?php the_title();?></a>
											<p class="price"> <b><i class="fas fa-tag"></i>Giá gốc: </b> <?php the_field('gia_goc');?></p>
											<p class="product_price sale_product"> <b><i class="fas fa-tag"></i>Giá khuyến mãi:</b> <?php the_field('gia_sp');?></p>
										</div>
									</div>
								</div>
								<?php endwhile; wp_reset_postdata(); ?>
								<!-- end item -->
								<div class="clear"></div>
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
						</div>
					</div>
			
		<div class="col-lg-3 d-none d-lg-block">
					<?php get_sidebar();?>
		</div>
		</div>
				</div>
	</div>	
<?php get_footer();?>