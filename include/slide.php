<style type="text/css">.slideshow {
    width: 100%;
    height: 70vh;
    position: relative;
    overflow: hidden;
	margin-bottom: 70px;
}

.slideshow-item {
    width: inherit;
    height: inherit;
    position: absolute;
    opacity: 0;
    animation: cycleImages 31s infinite;
}

.slideshow-item img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    animation: zoom 31s infinite;
}

.slideshow-item:nth-child(1),
.slideshow-item:nth-child(1) {
    animation-delay: 0s;
}
.slideshow-item:nth-child(2),
.slideshow-item:nth-child(2) {
    animation-delay: 9s;
}
.slideshow-item:nth-child(3),
.slideshow-item:nth-child(3) {
    animation-delay: 18s;
}

.slideshow-item-text {
    max-width: 45%;
    position: absolute;
    top: 50%;
    left: 0;
    transform: translateY(-50%);
    background-color: rgba(0, 0, 0, 0.5);
    color: #fff;
    padding: 30px 20px;
}

.slideshow-item-text h5 {
    font-size: 30px;
    text-transform: uppercase;
    letter-spacing: 3px;
    margin-bottom: 2.5rem;
}

.slideshow-item-text p {
    font-size: 18px;
    letter-spacing: 1px;
    font-weight: 300;
    color: white;
}

@keyframes cycleImages {
    25% {
        opacity: 1;
    }
    40% {
        opacity: 0;
    }
}
@keyframes zoom {
    100% {
        transform: scale(1.2);
    }
}

@media screen and (max-width: 1000px) {
    .slideshow-item-text {
        max-width: 70%;
        padding: 5rem 1rem;
    }
    .slideshow-item-text h5 {
        font-size: 4rem;
    }
}

@media screen and (max-width: 767px) {
    .slideshow-item-text {
        max-width: 100%;
        padding: 2rem;
        top: initial;
        bottom: 0;
        transform: initial;
    }
    .slideshow-item-text h5 {
        font-size: 3rem;
    }
    .slideshow-item-text p {
        font-size: 1.4rem;
    }
}</style>
<!-- banner -->
	<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
		<!-- Indicators-->
		<ol class="carousel-indicators">
			<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
			<li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
		</ol>
		<div class="slideshow">
                <div class="slideshow-item">
                    <img src="https://image.kkday.com/v2/image/get/s1.kkday.com/product_30925/20190921043715_1dhaN/jpg" />
                    <div class="slideshow-item-text">
                        <h5>Ngũ Hành Sơn</h5>
                        <p>
                           Ngũ Hành Sơn (chữ Hán: 五行山) hay núi Non Nước là tên của một danh thắng gồm 6 ngọn núi đá vôi nhô lên trên một bãi cát ven biển, trên một diện tích khoảng 2 km². Ngũ Hành Sơn gồm các ngọn núi: Mộc Sơn, Thủy Sơn (lớn, cao và đẹp nhất), Thổ Sơn, Kim Sơn và Hỏa Sơn (có hai ngọn là Dương Hỏa Sơn và Âm Hỏa Sơn)...
                        </p>
                    </div>
                </div>

                <div class="slideshow-item">
                    <img src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/86/2020/02/18085024/dragon-bridge-and-firework-ph%C3%A1o-hoa-tr%C3%AAn-c%E1%BA%A7u-r%E1%BB%93ng-Danang-Discovery-4-famous-bridge-in-danang-Restaurant-near-me-dragon-bridge-history-a-new-iconic-image-of-danang.jpg" />
                    <div class="slideshow-item-text">
                        <h5>Cầu Rồng - Đà Nẵng</h5>
                        <p>
                            Cầu Rồng là cây cầu thứ 7 và là cây cầu mới nhất bắc qua sông Hàn. Vì cây cầu có hình dáng giống một con rồng nên được gọi là Cầu Rồng Cầu Rồng dài 568 m và rộng 37,5 m với 6 làn xe chạy. Cầu được khởi công xây
                            dựng vào ngày 19/7/2009 và...
                        </p>
                    </div>
                </div>

                <div class="slideshow-item" style="">
                    <img src="https://dulichkhampha24.com/wp-content/uploads/2020/02/bai-tam-bien-my-khe-da-nang-1.jpg" />
                    <div class="slideshow-item-text">
                        <h5>Bãi biển mĩ khê</h5>
                        <p>
                           Bãi biển Mỹ Khê có chiều dài 900m, thuộc vào loại nhộn nhịp nhất trong số các bãi tắm của Đà Nẵng.biển mỹ khê là bãi biển lọt top 50 bãi biển đẹp nhất hành tinh. 
                        </p>
                    </div>
                </div>


                <div class="slideshow-item">
                    <img src="https://danangopentour.vn/uploads/images/images/gia-ve-asia-park-da-nang.jpg" />
                    <div class="slideshow-item-text">
                        <h5>Công viên châu Á</h5>
                        <p>
                          Công viên Châu  Á -  Asia Park tọa lạc ngay tại trung tâm thành phố Đà Nẵng, vận hành theo tiêu chuẩn quốc tế và được mệnh danh là “công viên của những kỷ lục”. Một “Châu Á” không ngủ đầy sôi động đang chờ du khách trải nghiệm và khám phá. 
                        </p>
                    </div>
                </div>
            </div>
		
	</div>
	<!-- //banner -->