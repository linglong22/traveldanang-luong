
<?php
	if(isset($_GET['id'])){
		$id = $_GET['id'];
	}else{
		$id = '';
	}
	$sql_cate = mysqli_query($con,"SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_category.category_id=tbl_sanpham.category_id AND tbl_sanpham.category_id='$id' ORDER BY tbl_sanpham.sanpham_id DESC");	
	$sql_category = mysqli_query($con,"SELECT * FROM tbl_category,tbl_sanpham WHERE tbl_category.category_id=tbl_sanpham.category_id AND tbl_sanpham.category_id='$id' ORDER BY tbl_sanpham.sanpham_id DESC");		

	$row_title = mysqli_fetch_array($sql_category);
	$title = $row_title['category_name'];		
	?>
<!-- top Products --
	<div class="ads-grid py-sm-5 py-4">
		<div class="container py-xl-4 py-lg-2">
			<!-- tittle heading -->
			<h3 class="tittle-w3l text-center mb-lg-5 mb-sm-4 mb-3"><?php echo $title ?></h3>
			<!-- //tittle heading --
			<div>
		<form action="" method="post" onsubmit="myFunction()">
        <div class="to">
            <br>
        <h2 class="s1">Đặt phòng khách sạn</h2>
        <hr>
        <div class="input-box">
          <input class="s2" type="text" required placeholder="&ensp;Họ Và Tên"> 
        </div>
        <div class="input-box2">
        	<input class="b1" type="number_format" required placeholder="&ensp;Số CMND">
        </div>
        <br>
         <div>
        	<h4 class="go" style="font-size: 15px; margin-left: 5%">Ngày nhận phòng</h4>
	        <input class="ngaydi" type="date" name="bday" max="2025-12-31"><br>
	    </div>
	    <div class="df">
        	<h4 class="go1" style="font-size: 15px; margin-left: 5%">Ngày nhận phòng</h4>
	        <input class="ngayden" type="date" name="bday" max="2025-12-31"><br>
	    </div>
        <br>
        <div class="sd">
        	<h4 class="go" style="font-size: 15px">Chọn phòng</h4>
        	 <select id="chonp" name="chonp">
		   	<option value="">&ensp;Phòng</option>
			<option value="">&ensp;Single bed room </option>
			<option value="">&ensp;Twin bed room</option>
			<option value="">&ensp;Double bed room</option>
			<option value="">&ensp;Triple bed room</option>
	        </select>
        </div>
        <div class="sdd">
        	<h4 class="go" style="font-size: 15px">Loại phòng</h4>
        	 <select id="chonp" name="chonp">
		   <option value="loaip">&ensp;Standard</option>
			<option value="loaip">&ensp;Superior</option>
			<option value="loaip">&ensp;Deluxe </option>
			<option value="loaip">&ensp;Suite</option>
	        </select>
        </div>
        <br>
        <div class="tour">
            <input class="t1" type="text" list="khuvuc" name="khuvuc" required placeholder="&ensp;Chọn khách sạn"> 
              <datalist id="khuvuc" >
              <option  value="&ensp;Ngũ Hành Sơn"></option>
              <option  value="&ensp;Hải Châu"></option>
              <option  value="&ensp;Cẩm lệ"></option>
              <option  value="&ensp;Liên Chiểu"></option>
               <option  value="&ensp;Sơn Trà"></option>
              </datalist>
            </div>
             <div class="rown" style="text-align: center;">
	       <br>
	       <br>
	       <input style="background-color: ; height: 40px; width: 40%; border-radius: 10px; border-color: red; " type="submit" value="Đặt Ngay">
         </div>
      </form>
      <br>
     <-- top Products -->
      
			</div>
			<br>
			<div class="row">
				<!-- product left -->
				<div class="agileinfo-ads-display col-lg-9">
					<div class="wrapper">
						<!-- first section -->
						<div class="product-sec1 px-sm-4 px-3 py-sm-5  py-3 mb-4">
							<div class="row">
								<?php
								while($row_sanpham = mysqli_fetch_array($sql_cate)){ 
								?>
								<div class="col-md-4 product-men mt-5">
									<div class="men-pro-item simpleCart_shelfItem">
										<div class="men-thumb-item text-center">
											<img src="images/<?php echo $row_sanpham['sanpham_image'] ?>" alt="">
											<div class="men-cart-pro">
												<div class="inner-men-cart-pro">
													<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>" class="link-product-add-cart">Xem thông tin</a>
												</div>
											</div>
										</div>
										<div class="item-info-product text-center border-top mt-4">
											<h4 class="pt-1">
												<a href="?quanly=chitietsp&id=<?php echo $row_sanpham['sanpham_id'] ?>"><?php echo $row_sanpham['sanpham_name'] ?></a>
											</h4>
											<div class="info-product-price my-2">
												<span class="item_price"><?php echo number_format($row_sanpham['sanpham_giakhuyenmai']).'vnđ' ?></span>
												<del><?php echo number_format($row_sanpham['sanpham_gia']).'vnđ' ?></del>
											</div>
											<div class="snipcart-details top_brand_home_details item_add single-item hvr-outline-out">
												<form action="?quanly=giohang" method="post">
												<fieldset>
													<input type="hidden" name="tensanpham" value="<?php echo $row_sanpham['sanpham_name'] ?>" />
													<input type="hidden" name="sanpham_id" value="<?php echo $row_sanpham['sanpham_id'] ?>" />
													<input type="hidden" name="giasanpham" value="<?php echo $row_sanpham['sanpham_gia'] ?>" />
													<input type="hidden" name="hinhanh" value="<?php echo $row_sanpham['sanpham_image'] ?>" />
													<input type="hidden" name="soluong" value="1" />			
													<input type="submit" name="themgiohang" value="Đặt ngay" class="button" />
												</fieldset>
											</form>
											</div>
										</div>
									</div>
								</div>
								<?php
								} 
								?>
							</div>
						</div>
						<!-- //first section -->
					</div>
				</div>
				<!-- //product left -->
				<!-- product right -->
				<div class="col-lg-3 mt-lg-0 mt-4 p-lg-0">
					<div class="side-bar p-sm-4 p-3" style="background-color: #D8F6CE ">
						<div class="search-hotel border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Tìm kiếm</h3>
							<form class="form-inline" action="index.php?quanly=timkiem" method="POST">
								<input class="form-control mr-sm-2" style="width: 66%" name="search_product" type="search" placeholder="Tìm kiếm sản phẩm" aria-label="Search" required>
								<button class="btn my-2 my-sm-0" style="background-color: #D0F5A9" name="search_button" type="submit">Tìm kiếm</button>
							</form>
						</div>
						<!-- price -->
						<div class="range border-bottom py-2">
							<h3 class="agileits-sear-head mb-3">Giá</h3>
							<div class="w3l-range">
								<ul>
									<li>
										<a href="#">Dưới 1 triệu</a>
									</li>
									
								</ul>
							</div>
						</div>
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
							<h3 class="agileits-sear-head mb-3">Sản phẩm bán chạy</h3>
							<div class="box-scroll">
								<div class="scroll">
									<?php
									$sql_product_sidebar = mysqli_query($con,"SELECT * FROM tbl_sanpham WHERE sanpham_hot='0' ORDER BY sanpham_id DESC"); 
									while($row_sanpham_sidebar = mysqli_fetch_array($sql_product_sidebar)){
									?>
									<div class="row">
										<div class="col-lg-3 col-sm-2 col-3 left-mar">
											<img src="images/<?php echo $row_sanpham_sidebar['sanpham_image'] ?>" alt="" class="img-fluid">
										</div>
										<div class="col-lg-9 col-sm-10 col-9 w3_mvd">
											<a href=""><?php echo $row_sanpham_sidebar['sanpham_name'] ?></a>
											<a href="" class="price-mar mt-2"><?php echo number_format($row_sanpham_sidebar['sanpham_giakhuyenmai']).'vnđ' ?></a>
											<del><?php echo number_format($row_sanpham_sidebar['sanpham_gia']).'vnđ' ?></del>
										</div>
									</div>
									<?php
									} 
									?>
									
									
								</div>
							</div>
						</div>
						<!-- //best seller -->
					</div>
					<!-- //product right -->
				</div>
			</div>
		</div>
	</div>
	<!-- //top products -->
 <style type="text/css">
		.s1{
            text-align: center;
        }
        .to{
         background-color: #FF6600;
            height: 50%;
            width: 45%;
           border-radius: 15px;
        }
        .input-box{
        	margin-left: 5%;
        }
        .s2{
        	width: 44%;
        }
        .input-box2{
        	margin-left: 51%;
        	margin-top: -30px;
        }
        .b1{
        	width: 90%;
        }
        .ngaydi{
        	margin-left: 5%;
        }
        .df{
        	margin-left: 51%;
        	margin-top: -48px;
        }
        .sd{
        	margin-left: 5%;

        }
        #chonp{
        	width: 44%;
        	height: 30px;
        }
        .sdd{
        	margin-left: 51%;
        	margin-top: -49px;
        }
        .tour{
        	margin-left: 5%;
        }
            

	</style>	