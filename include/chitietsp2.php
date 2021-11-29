<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = '';
	}
	$sql_chitiet = mysqli_query($con,"SELECT * FROM tbl_ttdl WHERE sanpham_id='$id'"); 
?>
<!-- page -->
	<div class="services-breadcrumb">
		<div class="agile_inner_breadcrumb" style="background-color: #58ACFA">
			<div class="container">
				<ul class="w3_short">
					<li>
						<a href="index.php">Trang chủ</a>
						<i>|</i>
					</li>
					<li> Xem thêm </li>
				</ul>
			</div>
		</div>
	</div>
	<!-- //page -->
	<?php
	while($row_chitiet = mysqli_fetch_array($sql_chitiet)){ 
	?>
	<!-- Single Page -->
	<div class="banner-bootom-w3-agileits py-5">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			
			<!-- //tittle heading -->
			<div class="row">
				<div class="col-lg-5 col-md-8 single-right-left ">
					<div class="grid images_3_of_2">
						<div class="flexslider">
							<ul class="slides">
								<li data-thumb="images/<?php echo $row_chitiet['sanpham_image'] ?>">
									<div class="thumb-image">
										<img src="images/<?php echo $row_chitiet['sanpham_image'] ?>" data-imagezoom="true" class="img-fluid" alt=""> </div>
								</li>
							
								
							</ul>
							<div class="clearfix"></div>
						</div>
					</div>
				</div>

				<div class="col-lg-7 single-right-left simpleCart_shelfItem">
					<h3 class="mb-3"><?php echo $row_chitiet['sanpham_name'] ?></h3>
				
					<div class="product-single-w3l">
						<p><?php echo $row_chitiet['sanpham_chitiet'] ?></p><br><br>
						<p><?php echo $row_chitiet['sanpham_mota'] ?></p>
					</div>
					
				</div>
			</div>
		</div>
	</div>
	<!-- //Single Page -->
	<?php
	} 
	?>
	<br>