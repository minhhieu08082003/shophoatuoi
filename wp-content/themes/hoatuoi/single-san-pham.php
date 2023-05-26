<?php get_header(); ?>		
	<?php get_template_part('slider')?>
	
<!-- end lh-header -->
		<div class="module-product-detail">
			<div class="container">
				<div class="bread-crumb">
					<a href="<?php bloginfo('url');?>">Trang chủ</a>
					<span class="dot">/</span>
					<a href="<?php bloginfo('url');?>/san-pham">Sản phẩm</a>
					<span class="dot">/</span>
					<span class="name"><?php the_title();?></span>
				</div>
			</div>
			<div class="container">
				<div class="row">
					<div class="col-lg-9">
						<div class="block-product-slider">
							<div class="row">
								<div class="col-md-6 col-sm-6 col-xs-6  left">
									<?php $gallery = get_field('hinh_anh'); ?>
								 	<ul id="imageGallery">
										<?php foreach($gallery as $Key => $value ) 	{?>
											<li data-thumb="<?php echo $value['sizes']['thumbnail']?>" data-src="<?php echo $value['url']?>">
						                	<div class="img-height">
							                	<img  class="img-fluid lh2-img" src="<?php echo $value['url']?>"/>
							                	<div class="overlay">
							                		<a href="" class="zoom"><i class="fa fa-search-plus" aria-hidden="true"></i></a>
							                	</div>
											</div>
						                 </li>
										<?php } ?>  	
					                </ul>
								</div>
								<div class="col-md-6  col-sm-6 col-xs-6 right">
									<div class="border">
										<b class="name"><?php the_title();?></b>
										<p><b>Giá khuyến mãi: </b><?php the_field('gia_sp')?></p>
										<p><b>Số gốc: </b><?php the_field('gia_goc')?></p>
									 	<button class="lh2-button lh-show-bk">Mua ngay</a>
									</div>
								</div>
							</div>
						</div>
						<!-- end block-slider -->
						<div class="block-info-product-detail">
							<p class="title-other"><span>Thông tin chi tiết</span></p>
							<div class="box-content">
								<b>Ưu đãi đặt biệt:</b>
								<p>- Giảm Ngay 30.000đ-Khi tạo đơn hàng online (>500k)-Nhập mã Giảm giá: HOATUOI2K.COM

									. Giảm Ngay 50.000đ-Khi tạo đơn hàng online (>1TR)-Nhập mã Giảm giá: HOATUOI2K

									- Giao hoa miễn phí nội thành 63 tỉnh trên cả nước

									- Khuyến mãi kèm thiệp chúc mừng, banner (Trị giá đến 40k)

									- Trước khi giao hàng shop sẽ gửi ảnh trước qua zalo để khách kiểm tra

									- Thanh toán sau dễ dàng với những khách hàng là công ty, tổ chức hoặc khách đặt hoa từ lần thứ 2 trở đi.

									- Sản phẩm giống mẫu đến 90% tùy thuộc vào cảm nhận của khách hàng</p>`
								
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