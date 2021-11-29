<br>
<br>
	<!-- footer -->
	
		
		<!-- //footer third section -->
		
	
 <footer>
 	<style type="text/css">
 		footer{
     position: relative;
     width: 100%;
     height: auto;
     padding: 50px 100px;
     background: #FF9900;
     display: flex;
     justify-content: space-between;
     flex-wrap: wrap;
 }
footer .container{
     display: flex;
     justify-content: space-between;
     flex-wrap: wrap;
     flex-direction: row;
 }
/*Thiết Lập Cho Thành Phần Nội Dung Giới Thiệu*/
 footer .container .noi-dung{
     margin-right: 30px;
     
 }
footer  .container .noi-dung.about{
     width:30%;
    
 }
 footer .container .noi-dung.about h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;

 }
 footer .container .noi-dung.about h2:before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background: #f00;
 }
footer .container .noi-dung.about p{
     color: black;

 }

 /*Thiết Lập Cho Thành Phần Icon Mạng Xã Hội*/
 .social-icon{
     margin-top: 20px;
     display: flex;
 }
.social-icon li {
     list-style: none;
 }
 .social-icon li a{
     display: inline-block;
     width: 40px;
     height: 40px;
     background: white;
     display: flex;
     justify-content: center;
     align-items: center;
     margin-right: 10px;
     text-decoration: none;
     border-radius: 4px;
 }
.social-icon li a:hover{
     background: #FA5137;
     background-color: purple;
     background-image: linear-gradient(purple, red); 
 }
.social-icon li a .fa{
     color: black;
     font-size: 20px;
 }
 
.links h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
.links h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 25px;
 }
.links h2::before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background: #f00;
 }
.links{
    position: relative;
    width: 25%;
 }
 .links ul li{
     list-style: none;
 }
 .links ul li a{
     color: black;
     text-decoration: none;
     margin-bottom: 10px;
     display: inline-block;
 }
.links ul li a:hover{
     color: #fff;
 }
 .contact h2{
     position: relative;
     color: #fff;
     font-weight: 500;
     margin-bottom: 15px;
 }
.contact h2::before{
     content: '';
     position: absolute;
     bottom: -5px;
     left: 0;
     width: 50px;
     height: 2px;
     background: #f00;
 }
.contact{
     width: calc(35% - 60px);
     margin-right: 0 !important;
 }
.contact .info{
     position: relative;
 }
 .contact .info li{
     display: flex;
     margin-bottom: 16px;
 }
 .contact .info li span:nth-child(1) {
     color: #fff;
     font-size: 20px;
     margin-right: 10px;
 }
.contact .info li span{
     color: #999;
 }
.contact .info li a{
     color: black;
     text-decoration: none;
 }
 .contact ul li a:hover{
     color: #fff;
 }
.btn {
     display: inline-block;
     background: transparent;
     color: inherit;
     font: inherit;
     border: 0;
     outline: 0;
     padding: 0;
     margin-top:16px;
     transition: all 200ms ease-in;
     cursor: pointer;
 }
 .btn--primary {
     background: #222;
     color: #fff;
     box-shadow: 0 0 10px 2px rgba(0, 0, 0, .1);
     border-radius: 2px;
     padding: 8px 24px;
     border-bottom-left-radius:10px;
     border-top-left-radius: 10px;
     border-top-right-radius: 10px;
     border-bottom-right-radius: 10px;
 }
 .btn--primary:hover {
     background: gold;
      opacity: 1.5;
       background-color: purple;
     background-image: linear-gradient(purple, red); 
 }
 .btn--primary:active {
     background: #f00;
     box-shadow: inset 0 0 10px 2px rgba(0, 0, 0, .2);

 }
.form__field {
     width: 90%;
     background: #fff;
     color: #a3a3a3;
     font: inherit;
     box-shadow: 0 6px 10px 0 rgba(0, 0, 0, .1);
     border: 0;
     outline: 0;
     padding: 8px 4px;
     border-bottom-left-radius:10px;
     border-top-left-radius: 10px;
     border-top-right-radius: 10px;
     border-bottom-right-radius: 10px;
 }
 @media  (max-width: 768px){
     footer{
         padding: 40px;
              }
     footer .container{
         flex-direction: column;
     }
     footer .container .noi-dung{
         margin-right: 0;
         margin-bottom: 40px;
     }
     footer .container, .noi-dung.about, .links, .contact{
         width: 100%;
     }
 }
 	</style>
              <div class="dddd">
                  <img  src="images/logo.png" height="70">
              </div>
        
            <div class="container">
              <br>
         <!--Bắt Đầu Nội Dung Giới Thiệu-->
         <div class="noi-dung about">
             <h2>Về Chúng Tôi</h2>
             <p>Traveldanang là website của Công ty TNHH Dịch vụ và Du lịch Đà Nẵng. Đây là một trong những trang web của Công ty Du lịch hàng đầu tại Việt Nam.</p>
             <ul class="social-icon">
                 <li><a href=""><i class="fab fa-facebook-f"></i></a></li>
                 <li><a href=""><i class="fab fa-twitter"></i></a></li>
                 <li><a href=""><i class="fab fa-instagram"></i></a></li>
                 <li><a href=""><i class="fab fa-youtube"></i></a></li>
                 <li><a href=""><i class="fab fa-google"></i></a></li>

             </ul>
             <br>
             <img src="images/qr.png" height="100" width="100">
         </div>
         <!--Kết Thúc Nội Dung Giới Thiệu-->
         <!--Bắt Đầu Nội Dung Đường Dẫn-->
         <div class="noi-dung links">
             <h2>Đường Dẫn</h2>
             <ul>
                 <li><a href="tour.html">Đặt Tour Du Lịch</a></li>
                 <li><a href="datve.html">Đặt Vé Máy Bay</a></li>
                 <li><a href="datphongkhachsan.html">Đặt Phòng Khách Sạn</a></li>
                 
             </ul>
         </div>
         <!--Kết Thúc Nội Dung Đường Dẫn-->
         <!--Bắt Đâu Nội Dung Liên Hệ-->
         <div class="noi-dung contact">
             <h2>Thông Tin Liên Hệ</h2>
             <ul class="info">
                 
                 <li>
                     <span><i class="fa fa-phone"></i></span>
                     <p><a href="tel:+0899866789">0899866789</a></p>
                 </li>
                 <li>
                     <span><i class="fa fa-envelope"></i></span>
                     <p><a href="#">Traveldanang@gmail.com</a></p>
                </li>
                <li>
                     &nbsp;<span><i class="fa fa-map-marker"></i></span>
                     <p>&nbsp;<a href="">470 Nam Kì Khởi Nghĩa, Quận Ngũ Hành Sơn, Đà Nẵng</span></a></p>
                 </li>
                 <li>
                     <form action="index.php" method="post" onsubmit="myFunction()">
                         <input type="email" class="form__field" placeholder="Đăng Ký Subscribe Email" />
                         <button type="button" class="btn btn--primary  uppercase">Gửi</button>
                     </form>
                 </li>
             </ul>
         </div>
         <!--Kết Thúc Nội Dung Liên Hệ-->
            </div>
        </footer>
<!-- footer fourth section -->
        <div class="agile-sometext py-md-5 py-sm-4 py-3">
            <div class="container">
                <!-- payment -->
                <div class="sub-some child-momu mt-4">
                    <h5 class="font-weight-bold mb-3">Payment Method</h5>
                    <ul>
                        <li>
                            <img src="images/pay2.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay5.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay1.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay4.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay6.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay3.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay7.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay8.png" alt="">
                        </li>
                        <li>
                            <img src="images/pay9.png" alt="">
                        </li>
                    </ul>
                </div>
                <!-- //payment -->
            </div>
        </div>
        <!-- //footer fourth section (text) -->
            
            </div>
        </div>
    </div>
    <script>
function myFunction() {
alert("Bạn đã đăng kí thành công");
}
</script>
        <script type="text/javascript">
            $(document).ready(function () {
                $(".col-lg-4").hover(
                    function () {
                        $(this).animate(
                            {
                                marginTop: "-=1%",
                            },
                            200
                        );
                    },

                    function () {
                        $(this).animate(
                            {
                                marginTop: "0%",
                            },
                            200
                        );
                    }
                );
                $(".col-lg-3").hover(
                    function () {
                        $(this).animate(
                            {
                                marginTop: "-=1%",
                            },
                            200
                        );
                    },

                    function () {
                        $(this).animate(
                            {
                                marginTop: "0%",
                            },
                            200
                        );
                    }
                );
            });
        </script>
    </body>
</html>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copy-right py-3">
		<div class="container">
			<p class="text-center text-white">© 2021 Travel Đà Nẵng.  | Design by
				<a href="">LK</a>
			</p>
		</div>
	</div>
	<!-- //copyright -->