		<div class="footer-bg">
			<div class="block-footer">
				<div class="container">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
							<p class="title">GIỚI THIỆU</p>
							<p class="caption">Cửa hàng hoa tươi 2k luôn cam kết đặt chất lượng hoa luôn tươi mới lên hàng đầu giao cho khách. 
								Các mẫu hoa luôn được cắm đủ số lượng và giống kiểu dáng trên website nhất có thể.</p>
							<ul class="lh2-ul">
								<li><i class="fas fa-map-marker-alt"></i> 68 Nguyễn Huệ, TP Huế</li>
								<li><i class="fas fa-phone"></i> 0888.111.652</li>
								<li><i class="fas fa-envelope"></i> Email: hoatuoi2k@gmail.com</li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
							<p class="title">Hỗ trợ khách hàng</p>
							<ul class="lh2-ul">
								<li><a href="">Liên hệ với chúng tôi</a></li>
								<li><a href="">Câu hỏi thường gặp</a></li>
								<li><a href="">Điều khoản và chính sách</a></li>
								<li><a href="">Chăm sóc khách hàng</a></li>
							</ul>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
							<p class="title">Danh mục sản phẩm</p>
							<div class="row" id="danhmucchinh">
									<?php $args = array( 
									'hide_empty' => 0,
									'taxonomy' => 'danh-muc',
									); 
									$cates = get_categories( $args ); 
									
									foreach ( $cates as $cate ) {  ?>
									<ul class="lh2-ul">
										<li>
											<a href="<?php echo get_term_link($cate->slug, 'danh-muc'); ?>"><?php echo $cate->name ?></a>
											
										</li>
									</ul>
								<?php } ?>

							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6 col-12 item">
							<p class="title">GỬI LIÊN HỆ</p>
							<p>Liên hệ ngay với chúng tôi để nhận được những ưu đãi mới nhất</p>
							<input type="" name="" placeholder="Nhập email của bạn">
							<button type="">Gửi</button>
							<p class="title">Kết nối</p>
							<ul class="lh2-ul share-h2">
								<li><a href="" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-twitter"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-skype"></i></a></li>
								<li><a href="#" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a class="btn-top" id="bttop" href="javascript:void(0);" title="Top" style="display: inline;"><i class="fa fa-chevron-up" aria-hidden="true"></i></a>
	</div>
	<!-- Javascript -->
  	<script src="<?php bloginfo('template_directory'); ?>/js/tether.min.js"></script>
  	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.min.js"></script>
  	<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
  	<script src="<?php bloginfo('template_directory'); ?>/js/wow.min.js"></script>
  	<script src="<?php bloginfo('template_directory'); ?>/js/jquery.mmenu.all.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/slick.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/smoothscroll.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/lightslider.js"></script>
    <script src="<?php bloginfo('template_directory'); ?>/js/lightGallery.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/main.js"></script>
	<?php wp_footer();?>
	<div id="fb-root"></div>
	<script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v16.0" nonce="mWfeq3TK"></script>
</body>
</html>