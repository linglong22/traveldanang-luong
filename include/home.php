<div style="background-color: ">
<!-- top Products -->
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">
				<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3">Thông tin du lịch</h3>
			<!-- //tittle heading -->
			<div class="row">
				<!-- product left --> 
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<?php
						$sql_cate_home = mysqli_query($con,"SELECT * FROM tbl_tt ORDER BY tt_id DESC");
						while($row_cate_home = mysqli_fetch_array($sql_cate_home)){
							$id_tt = $row_cate_home['tt_id'];
						?>
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<h3 class="heading-tittle text-center font-italic"><?php echo $row_cate_home['tt_name'] ?></h3>
							<div class="row">
								<?php
								$sql_product = mysqli_query($con,"SELECT * FROM tbl_ttdl ORDER BY sanpham_id DESC");
								while($row_sanpham = mysqli_fetch_array($sql_product)){ 
									if($row_sanpham['tt_id']==$id_tt){
								?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="images/<?php echo $row_sanpham['sanpham_image'] ?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanly=chitietsp2&id=<?php echo $row_sanpham['sanpham_id'] ?>" class="link-product-add-cart">Xem thêm</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>"><?php echo $row_sanpham['sanpham_name'] ?></a>
											</h4>
											
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												
											</div>
										</div>
									</div>
								</div>
								<?php
									}
								} 
								?>
							</div>
						</div>
						<!-- //first section -->
							<?php
							} 
							?>
						
					</div>
				</div>
				<!-- //product left -->

				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0" >
					<div class="side-bar p-sm-4 p-3"  style="background-color: #D8F6CE">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Tìm kiếm</h3>
							<form class="form-inline" action="index.php?quanly=timkiem" method="POST">
								<input class="form-control mr-sm-2" style="width: 66%" name="search_product" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" style="background-color: #D0F5A9" name="search_button" type="submit">Tìm kiếm</button>
							</form>
						</div>
						<!-- price -->
						
						<!-- //price -->
						
						<!-- reviews -->
						<div class="customer-rev border-bottom left-side py-2">
							<h3 class="agileits-sear-head mb-3">Khách hàng Review</h3>
							<ul>
								<li>
									<a href="#">
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<i class="fas fa-star"></i>
										<span>5.0</span>
									</a>
								</li>
								
							</ul>
						</div>
						<!-- //reviews -->
						<!-- electronics -->
						<div class="left-side border-bottom py-2">

							<h3 class="agileits-sear-head mb-3">Danh mục sản phẩm</h3>
							<ul>
								<?php 
									$sql_category_sidebar = mysqli_query($con,'SELECT * FROM tbl_category ORDER BY category_id DESC');
									while($row_category_sidebar = mysqli_fetch_array($sql_category_sidebar)){
								?>
								<li>
									<!-- <input type="checkbox" class="checked"> -->
									<span class="span"><a href="danhmucsanpham.php?id=<?php echo $row_category_sidebar['category_id'] ?>"><?php echo $row_category_sidebar['category_name'] ?></a></span>
								</li>
								<?php
								} 
								?>
							</ul>
						</div>
						<!-- //electronics -->
					
						
						<!-- best seller -->
						<div class="f-grid py-2">
							<h3 class="agileits-sear-head mb-3">Quan tâm</h3>
							<div class="box-scroll">
								
                    <p><a  href="http://divui.com/blog/47-dia-diem-du-lich-da-nang-dep-den-man-quen-loi-ve/">Các điểm tham quan</a></p>
                    
                    <p><a  href="https://myphamlily.com.vn/bat-mi-cach-thu-gian-va-lam-dep-sau-1-tuan-lam-viec-cang-thang/">Thư giãn </p></a>
                    <p><a  href=""> Văn hoá & workshops</a></p>
                    <p><a  href="https://travel.com.vn/"> Tour</a></p>
                    <p><a  href=""> Di chuyển sân bay</a></p>
                    <p><a  href="https://taxisieuredanang.com/?gclid=CjwKCAjwzruGBhBAEiwAUqMR8MdOq1zIscQ6J-cAdQxHzbEa53NQ_c4409Qk2k-lv7803ghESair5xoCUf8QAvD_BwE"> Thuê xe riêng</a></p>
                    <p><a href="https://tourdanangcity.vn/nha-hang-da-nang/"> Ẩm thực & nhà hàng</a></p>
                    <p><a href=""> Giao thông công cộng</a></p>
                    <p><a href="https://www.zemzemshop.com/do-tien-ich-1.html"> Tiện ích du lịch</a></p>
                    <p><a href="https://www.tripadvisor.com.vn/Attractions-g298085-Activities-c61-Da_Nang.html">Thể thao & hoạt động </a></p>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
</div>

	<!-- //top products -->

<style type="text/css">
	
 
</style>