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
                        <h5>Ng?? H??nh S??n</h5>
                        <p>
                           Ng?? H??nh S??n (ch??? H??n: ?????????) hay n??i Non N?????c l?? t??n c???a m???t danh th???ng g???m 6 ng???n n??i ???? v??i nh?? l??n tr??n m???t b??i c??t ven bi???n, tr??n m???t di???n t??ch kho???ng 2 km??. Ng?? H??nh S??n g???m c??c ng???n n??i: M???c S??n, Th???y S??n (l???n, cao v?? ?????p nh???t), Th??? S??n, Kim S??n v?? H???a S??n (c?? hai ng???n l?? D????ng H???a S??n v?? ??m H???a S??n)...
                        </p>
                    </div>
                </div>

                <div class="slideshow-item">
                    <img src="https://d2e5ushqwiltxm.cloudfront.net/wp-content/uploads/sites/86/2020/02/18085024/dragon-bridge-and-firework-ph%C3%A1o-hoa-tr%C3%AAn-c%E1%BA%A7u-r%E1%BB%93ng-Danang-Discovery-4-famous-bridge-in-danang-Restaurant-near-me-dragon-bridge-history-a-new-iconic-image-of-danang.jpg" />
                    <div class="slideshow-item-text">
                        <h5>C???u R???ng - ???? N???ng</h5>
                        <p>
                            C???u R???ng l?? c??y c???u th??? 7 v?? l?? c??y c???u m???i nh???t b???c qua s??ng H??n. V?? c??y c???u c?? h??nh d??ng gi???ng m???t con r???ng n??n ???????c g???i l?? C???u R???ng C???u R???ng d??i 568 m v?? r???ng 37,5 m v???i 6 l??n xe ch???y. C???u ???????c kh???i c??ng x??y
                            d???ng v??o ng??y 19/7/2009 v??...
                        </p>
                    </div>
                </div>

                <div class="slideshow-item" style="">
                    <img src="https://dulichkhampha24.com/wp-content/uploads/2020/02/bai-tam-bien-my-khe-da-nang-1.jpg" />
                    <div class="slideshow-item-text">
                        <h5>B??i bi???n m?? kh??</h5>
                        <p>
                           B??i bi???n M??? Kh?? c?? chi???u d??i 900m, thu???c v??o lo???i nh???n nh???p nh???t trong s??? c??c b??i t???m c???a ???? N???ng.bi???n m??? kh?? l?? b??i bi???n l???t top 50 b??i bi???n ?????p nh???t h??nh tinh. 
                        </p>
                    </div>
                </div>


                <div class="slideshow-item">
                    <img src="https://danangopentour.vn/uploads/images/images/gia-ve-asia-park-da-nang.jpg" />
                    <div class="slideshow-item-text">
                        <h5>C??ng vi??n ch??u ??</h5>
                        <p>
                          C??ng vi??n Ch??u  ?? -  Asia Park t???a l???c ngay t???i trung t??m th??nh ph??? ???? N???ng, v???n h??nh theo ti??u chu???n qu???c t??? v?? ???????c m???nh danh l?? ???c??ng vi??n c???a nh???ng k??? l???c???. M???t ???Ch??u ????? kh??ng ng??? ?????y s??i ?????ng ??ang ch??? du kh??ch tr???i nghi???m v?? kh??m ph??. 
                        </p>
                    </div>
                </div>
            </div>
		
	</div>
	<!-- //banner -->