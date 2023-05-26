<?php get_header(); ?>		
	<?php get_template_part('slider')?>
		<!-- end lh-header -->
		<div class="module-product">
			<div class="container">
				<div class="bread-crumb">
					<a href="">Trang chủ</a>
					<span class="dot">/</span>
					<span class="name">Sản phẩm</span>
				</div>
			</div>		
			<div class="container">
				<div class="row">
					<?php $getposts = new WP_query(); 
						$getposts->query('
						post_status=publish&showposts=6&post_type=san-pham'); 
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
		<div class="phare">
						<p class="lh2-title"><span>LAN HỒ ĐIỆP</span></p> 
                        <div class="box-product">
                            <div class="product">  
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/L1.jpg">
                                <p class="name_product">CHẬU LAN 01 </p>
                                <div class="group">
                                    <span class="product_price1">400.000đ</span>
                                    <span class="product_price sale_product">500.000đ</span>
                                </div>
                                <span class="badge badge-sale badge-orange">20%</span>
                            </div>
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/L2.jpg">
                                <p class="name_product"> CHẬU LAN 02</p>
                                <div class="group">
                                    <span class="product_price1">400.000đ</span>
                                    <span class="product_price sale_product">500.000đ</span>
                                </div>
                                <span class="badge badge-sale badge-orange">20%</span>
                            </div>
                            <div class="product">
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/L3.jpg">
                                <p class="name_product">CHẬU LAN 03</p>
                                <div class="group">
                                    <span class="product_price1">400.000đ</span>
                                    <span class="product_price sale_product">500.000đ</span>
                                </div>
                                <span class="badge badge-sale badge-orange">20%</span>
                            </div>
                            <div class="product">
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/L4.jpg">
                                <p class="name_product">CHẬU LAN 04</p>
                                <div class="group">
                                    <span class="product_price1">400.000đ</span>
                                    <span class="product_price sale_product">500.000đ</span>
                                </div>
                                <span class="badge badge-sale badge-orange">50%</span>
                            </div>
                            <div class="product">
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/L5.jpg">
                                <p class="name_product">CHẬU LAN 05</p>
                                <div class="group">
                                    <span class="product_price1">600.000đ</span>
                                    <span class="product_price sale_product">700.000đ</span>
                                </div>
                                <span class="badge badge-sale badge-orange">10%</span>
                            </div>
                            <div class="product">
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/L6.jpg">
                                <p class="name_product">CHẬU LAN 06</p>
                                <div class="group">
                                    <span class="product_price1">600.000đ</span>
                                    <span class="product_price sale_product">700.000đ</span>
                                </div>
                                <span class="badge badge-sale badge-orange">10%</span>
                            </div>
                            <div class="product">
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/L7.jpg">
                                <p class="name_product">CHẬU LAN 07</p>
                                <div class="group">
                                    <span class="product_price1">600.000đ</span>
                                    <span class="product_price sale_product">700.000đ</span>
                                </div>
                                <span class="badge badge-sale badge-orange">10%</span>
                            </div>
                            <div class="product">
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/L8.jpg">
                                <p class="name_product">CHẬU LAN 08</p>
                                <div class="group">
                                    <span class="product_price1">600.000đ</span>
                                    <span class="product_price sale_product">700.000đ</span>
                                </div>
                                <span class="badge badge-sale badge-orange">10%</span>
                            </div>
                        </div>
                        <div class="bottom-link">
                            <a href="./sanpham.html">xem thêm mẫu...</a>
                        </div>
                    </div>
		<div class="phare">
			<p class="lh2-title"><span>GIỎ HOA ĐẸP</span></p> 
                        <div class="box-product">
                            <div class="product">
                                
                                	<img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/f_1.jpg" alt="">
                                    <p class="name_product">Giỏ Hoa Đẹp 01 </p>
                                <div class="group">
                                    <span class="product_price1">400.000đ</span>
                                    <span class="product_price sale_product">500.000đ</span>
                                </div>
                                <span class="badge badge-sale badge-orange">20%</span>
                            </div>
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/f_2.jpg">
                                <p class="name_product">Giỏ Hoa Đẹp 02</p>
                                <div class="group">
                                    <span class="product_price1">400.000đ</span>
                                    <span class="product_price sale_product">500.000đ</span>
                                </div>
                                <span class="badge badge-sale badge-orange">20%</span>
                            </div>
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/f_3.jpg">
                                <p class="name_product">Giỏ Hoa Đẹp 03</p>
                                <div class="group">
                                    <span class="product_price1">400.000đ</span>
                                    <span class="product_price sale_product">500.000đ</span>
                                </div>
                                <span class="badge badge-sale badge-orange">20%</span>
                            </div>
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/f_4.jpg">
                                <p class="name_product">Giỏ Hoa Đẹp 04</p>
                                <div class="group">
                                    <span class="product_price1">400.000đ</span>
                                    <span class="product_price sale_product">500.000đ</span>
                                </div>
                                <span class="badge badge-sale badge-orange">50%</span>
                            </div>
                            <div class="product">
                               
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/f_5.jpg">
                                <p class="name_product">Giỏ Hoa Đẹp 05</p>
                                <div class="group">
                                    <span class="product_price1">600.000đ</span>
                                    <span class="product_price sale_product">700.000đ</span>
                                </div>
                                <span class="badge badge-sale badge-orange">10%</span>
                            </div>
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/f_6.jpg">
                                <p class="name_product">Giỏ Hoa Đẹp 06</p>
                                <div class="group">
                                    <span class="product_price1">600.000đ</span>
                                    <span class="product_price sale_product">700.000đ</span>
                                </div>
                                <span class="badge badge-sale badge-orange">10%</span>
                            </div>
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/f_7.jpg">
                               <p class="name_product">Giỏ Hoa Đẹp 07</p>
                                <div class="group">
                                    <span class="product_price1">600.000đ</span>
                                    <span class="product_price sale_product">700.000đ</span>
                                </div>
                                <span class="badge badge-sale badge-orange">10%</span>
                            </div>
                            <div class="product">
                               
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/f_8.jpg">
                                <p class="name_product">Giỏ Hoa Đẹp 08</p>
                                <div class="group">
                                    <span class="product_price1">600.000đ</span>
                                    <span class="product_price sale_product">700.000đ</span>
                                </div>
                                <span class="badge badge-sale badge-orange">10%</span>
                            </div>
                        </div>
                        <div class="bottom-link  text-center " >
                            <a href="./sanpham.html">xem thêm mẫu...</a>
                        </div>
                    </div>
                    <?php
                        echo do_shortcode('[smartslider3 slider="4"]');
                    ?>
                    <div class="phare">
					<p class="lh2-title"><span>BÓ HOA ĐẸP</span></p> 
                        <div class="box-product">
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/1.jpg">
                                <p class="name_product">Bó Hoa 01</p>
                                <div class="group">
                                    <span class="product_price1">600.000đ</span>
                                    <span class="product_price sale_product">650.000đ</span>
                                </div>
                            </div>
                            <div class="product">
                               
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/2.jpg">
                                <p class="name_product">Bó Hoa 02</p>
                                <div class="group">
                                    <span class="product_price1">600.000đ</span>
                                    <span class="product_price sale_product">650.000đ</span>
                                </div>
                            </div>
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/3.jpg">
                                <p class="name_product">Bó Hoa 03</p>
                                <div class="group">
                                    <span class="product_price1">600.000đ</span>
                                    <span class="product_price sale_product">650.000đ</span>
                                </div>
                            </div>
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/4.jpg">
                                <p class="name_product">Bó Hoa 04</p>
                                <div class="group">
                                    <span class="product_price1">600.000đ</span>
                                    <span class="product_price sale_product">650.000đ</span>
                                </div>
                            </div>
                            <div class="product">
                               
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/5.jpg">
                                <p class="name_product">Bó Hoa 05</p>
                                <div class="group">
                                    <span class="product_price1">450.000.đ</span>
                                    <span class="product_price sale_product">500.000đ</span>
                                </div>
                            </div>
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/6.jpg">
                                <p class="name_product">Bó Hoa 06</p>
                                <div class="group">
                                    <span class="product_price1">450.000.đ</span>
                                    <span class="product_price sale_product">500.000đ</span>
                                </div>
                            </div>
                            <div class="product">
                               
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/7.jpg">
                                <p class="name_product">Bó Hoa 07</p>
                                <div class="group">
                                    <span class="product_price1">450.000.đ</span>
                                    <span class="product_price sale_product">500.000đ</span>
                                </div>
                            </div>
                            <div class="product">
                               
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/8.jpg">
                                <p class="name_product">Bó Hoa 08</p>
                                <div class="group">
                                    <span class="product_price1">450.000.đ</span>
                                    <span class="product_price sale_product">500.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-link">
                            <a href="./sanpham.html">xem thêm mẫu...</a>
                        </div>
                    </div>
                    
                    <div class="phare">
					<p class="lh2-title"><span>HOA CHÚC MỪNG</span></p> 
                        <div class="box-product">
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/15.jpg">
                                <p class="name_product">Lãng hoa 01</p>
                                <div class="group">
                                    <span class="product_price1">600.000đ</span>
                                    <span class="product_price sale_product">650.000đ</span>
                                </div>
                            </div>
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/22.jpg">
                                <p class="name_product">Lãng hoa 02</p>
                                <div class="group">
                                    <span class="product_price1">600.000đ</span>
                                    <span class="product_price sale_product">650.000đ</span>
                                </div>
                            </div>
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/33.jpg">
                                <p class="name_product">Lãng hoa 03</p>
                                <div class="group">
                                    <span class="product_price1">600.000đ</span>
                                    <span class="product_price sale_product">650.000đ</span>
                                </div>
                            </div>
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/44.jpg">
                                <p class="name_product">Lãng hoa 04</p>
                                <div class="group">
                                    <span class="product_price1">600.000đ</span>
                                    <span class="product_price sale_product">650.000đ</span>
                                </div>
                            </div>
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/55.jpg">
                                <p class="name_product">Lãng hoa 05</p>
                                <div class="group">
                                    <span class="product_price1">450.000đ</span>
                                    <span class="product_price sale_product">500.000đ</span>
                                </div>
                            </div>
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/66.jpg">
                                <p class="name_product">Lãng hoa 06</p>
                                <div class="group">
                                    <span class="product_price1">450.000đ</span>
                                    <span class="product_price sale_product">500.000đ</span>
                                </div>
                            </div>
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/77.jpg">
                                <p class="name_product">Lãng hoa 07</p>
                                <div class="group">
                                    <span class="product_price1">450.000đ</span>
                                    <span class="product_price sale_product">500.000đ</span>
                                </div>
                            </div>
                            <div class="product">
                                
                                <img class="img_product" src="<?php bloginfo('template_directory'); ?>/img/88.jpg">
                                <p class="name_product">Lãng hoa 08</p>
                                <div class="group">
                                    <span class="product_price1">450.000đ</span>
                                    <span class="product_price sale_product">500.000đ</span>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-link">
                            <a href="./sanpham.html">xem thêm mẫu...</a>
                        </div>
                    </div>
<?php get_footer();?>