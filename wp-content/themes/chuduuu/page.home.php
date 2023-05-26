<?php
/**
 *template name: Trang chu
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package chuduuu
 */

get_header();
?>

	<main id="primary" class="site-main">
     <div class="slider">
        <?php
        echo do_shortcode('[smartslider3 slider="2"]');
        ?>
    </div>
    <div id="container" class="gioithieu">
        <div class="row">
            <div class="col-md-6">
                <?php $pageid = 146 ; ?>
                    <!-- lay ra hình dai dien cuar gioi thoei -->
                <?php echo get_the_post_thumbnail ($pageid, "langer"); ?>
            </div>
            <div class="col-md-6">
                    <!-- lay ra tieu de va mo ta ngan cua page gioi thieu -->
                     <?php $post_146 = get_post($pageid); ?>
                    <h3> <?php echo $post_146->post_title; ?> </h3>
                    <?php $excerpt = $post_146->post_content;
                     echo $excerpt; ?>
            </div>
        </div>
    </div>
	<div id="container" class="dichvu">
        <div class="row">
			<div class="col-md-6">
			<?php $pageid = 165 ; ?>
                    <!-- lay ra tieu de va mo ta ngan cua page dich vụ -->
                     <?php $post_165 = get_post($pageid); ?>
                    <h3> <?php echo $post_165->post_title; ?> </h3>
                    <?php $excerpt = $post_165->post_content;
                     echo $excerpt; ?>
            </div>
            <div class="col-md-6">
                <?php $pageid = 165 ; ?>
                    <!-- lay ra hình dai dien cuar dich vu -->
                <?php echo get_the_post_thumbnail ($pageid, "langer"); ?>
            </div>
            
        </div>
    </div>

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
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="anhdaidien">
						<img src="https://sp-ao.shortpixel.ai/client/to_auto,q_lossy,ret_img,w_768/https://lavihouse.vn/wp-content/uploads/2021/07/z2578958150046_20ab1860bc8486c3d970b26de70c20f3-768x614.jpg" />
					</div>
				</div>
				<div class="col-6">
					<div class="form">
					<div class="container">
						<div class="row">
						<div class="col-xl-6  col-lg-6 col-md-12 h-100 d-inline w-100 left">
							<p class="lh2-title1">Gửi liên hệ</p>
							<form action="">
								<div class="row">
									<div class="col-sm-6 col-xs-12 col-12">
										<div class="input-position">
											<input type="text" placeholder="Name *">
											<i class="fa fa-user" aria-hidden="true"></i>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12 col-12">
										<div class="input-position">
											<input type="text" placeholder="Email *">
											<i class="fa fa-envelope" aria-hidden="true"></i>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12 col-12">
										<div class="input-position">
											<input type="text" placeholder="Phone">
											<i class="fa fa-phone" aria-hidden="true"></i>
										</div>
									</div>
									<div class="col-sm-6 col-xs-12 col-12">
										<div class="input-position">
											<input type="text" placeholder="Subject *">
											<i class="fas fa-file-alt"></i>
										</div>
									</div>		
								</div>
								
								<div class="input-position">
									<textarea rows="5" placeholder="Tin nhắn"></textarea>
									<i class="fas fa-file-alt"></i>
								</div>
								<button class="lh2-button float-right">Send</button>
			</form>
				</div>	
			</div>
		</div>
        


</main><!-- #main -->

<?php
get_footer();
