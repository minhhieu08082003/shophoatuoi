<?php get_header(); ?>		
	<?php get_template_part('slider')?>
		</div>
		<!-- end lh-header -->
<?php get_template_part('intro');?>
		
        
		<!-- end block-product -->
        <p class="lh2-title"><span>SẢN PHẨM HOT BÁN CHẠY</span></p> 
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
                    
            </main>
            <div class="block-product">
			<div class="container">
			    <p class="lh2-title"><span>Tin tức cập nhập</span></p> 
                <?php the_content(); ?>
            </div>
             </div>
             <div class="phanket">
                <h4>Sứ mệnh mà Hoatuoi2k.com Hướng đến</h4>
                <p>– Dịch vụ điện hoa Sài Gòn giá rẻ, chuyên nghiệp nhất: Với gần 5 năm kinh nghiệm trong lĩnh vực điện hoa ở Sài Gòn nói riêng và cả nước Việt Nam nói chung, Hoa tươi 2k tự tin là một trong những shop hoa tuoi có mức giá rẻ, cạnh tranh nhất so với bất kỳ shop hoa nào khác-Nhưng không vì mức giá mà làm giảm đi chất lượng, 
                    Phương châm của Hoatuoi2k là mang lại những mẫu hoa “Ngon-bổ-rẻ” nhất cho khách hàng thân yêu</p>
                <p>– Shop hoa tươi TPHCM giao hoa nhanh, Siêu tốc: Với đội ngũ nhân viên giàu kinh nghiệm (trên 5 năm trong ngành thiết kế hoa tươi, hoa sự kiện…) Dịch vụ giao hoa tận nơi của Hoatuoi2k.com có thể giúp khách hàng giải quyết những “ca khó, ca gấp” khi giao 
                    hoa tới nơi chỉ từ 1 tiếng đến 1 tiếng rưỡi đồng hồ (Tùy thuộc vào số km bán kính khách đặt hoa)</p>
                <p>– Điện hoa trực tuyến hàng đầu Sài Gòn với đa dạng mẫu mã, độc đáo và mới lạ: Hằng ngày, qua ngày những Nghệ nhân của Shop vẫn miệt mài, tìm kiếm những ý tưởng, mẫu hoa mới lạ nhất để sáng tạo đem đến cảm giác mới lạ và lạ mắt cho khách hàng</p>
                <p>– Tiệm Hoa Online Uy tín bật nhất TPHCM: Với những mẫu hoa do shop sáng tạo nên, Hoatuoi2k.com tự tin làm ra sản phẩm giống mẫu đến 90% | Hoa tươi trưng bày được trên 3 ngày nếu khách hàng trưng ở nơi đủ điều kiện nhiệt độ, ánh sáng thích hợp cho hoa sinh trưởng và phát triển !</p>
             </div>
<?php get_footer(); ?>