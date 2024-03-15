@extends('site.app')
@section('title', 'Accueil')

@section('content')
<style>
/*
*/
.card {
    border: none;
    background: transparent;
}
.card-body{
    background: transparent;
}
/*  */
.circle{
    width: 200px;
    height: 200px;
    border-radius: 50%;
    vertical-align: middle;
    display: table-cell;
    font-size: 40px;
    font-weight: lighter;
    color: rgb(41, 37, 37);
    cursor: pointer;
    background-color: rgb(224, 186, 186);
}
.circle:hover {
    background-color: #c66;
    color: #fff
}
/*  */
.containerr {
  width: 90%;
  max-width: 1000px;
  margin: 50px auto;
  display: flex;
  align-items: center;
  justify-content: center;
}
.btn{
    color: #c66;
}
.left {
  width: 50%;
  height: 600px;
  background: url("/frontend/img/alex-shaw-kIcFTNvx3fY-unsplash.jpg")
  no-repeat center / cover;
  border-radius: 0px;
}
.right {
  width: 50%;
  min-height: 400px;
  background-color: #c66;
  display: flex;
  align-items: center;
  justify-content: center;
  padding: 30px;
  border-radius: 8px;
  color: white;
  margin-left: -150px;
}
.right h1 {
  font-size: 40px;
  font-weight: lighter;
}
.right p {
  margin: 20px 0;
  font-weight: 500;
  line-height: 25px;
}
.right a {
  text-decoration: none;
  text-transform: uppercase;
  background-color: white;
  color: #c66;
  padding: 20px 30px;
  display: inline-block;
  letter-spacing: 2px;
}

@media only screen and (max-width: 768px) {
    .containerr {
    flex-direction: column;
    width: 100%;
    margin: 0 20px;
  }
  .left {
    width: 100%;
    height: 400px;
  }
  .right {
    width: 90%;
    margin: 0;
    margin-top: -100px;
  }
}

/* -------------------------------------------------------------------
Products owlcarousal
------------------------------------------------------------------- */

.product {
	background-color: #fff;
	text-align: center;
	margin: 0 5px;
}
.product .product-image {
	overflow: hidden;
	position: relative;
}
.product .product-image a.image {
	display: block;
}
.product .product-image img {
	width: 100%;
	height: auto;
}
.product .product-image .pic-1 {
	transition: .5s;
}
.product .product-image:hover .pic-1 {
	opacity: 0;
}
.product .product-image .pic-2 {
	width: 100%;
	height: 100%;
	backface-visibility: hidden;
	opacity: 0;
	position: absolute;
	top: 0;
	left: 0;
	transition: .5s;
}
.product .product-image:hover .pic-2 {
	opacity: 1;
}
.product .discount {
	color: #fff;
	background: #c66;
	font-size: 12px;
	font-weight: 600;
	letter-spacing: 1px;
	line-height: 30px;
	width: 50px;
	height: 30px;
	position: absolute;
	top: 10px;
	left: 10px;
}
.product .cart {
	color: #fff;
	background: rgba(0, 0, 0, 0.692);
	font-size: 12px;
	font-weight: 500;
	text-transform: uppercase;
	width: 100%;
	padding: 4px 14px;
	opacity: .85;
	transform: translateX(-50%);
	position: absolute;
	bottom: -75px;
	left: 50%;
	transition: .5s;
}
.product .cart:hover {
	opacity: 1;
	color: #fff;
	background: #c66;
}
.product:hover .cart {
	bottom: 0px;
}
.product .content {
	padding: 12px;
}
.product .category {
	font-size: 17px;
	margin: 0 0 5px;
	display: block;
}
.product .category a {
	color: #999;
	transition: .5s;
	font-size: 11px;
}
.product .category a:hover {
	color: #555;
}
.product .title {
	font-size: 14px;
	font-weight: 500;
	margin: 0 0 8px;
}
.product .title a {
	color: #444;
	transition: .5s;
}
.product .title a:hover {
	color: lightgrey;
}
.product .price {
	color: #000000;
	font-size: 14px;
	font-weight: 700;
}
.product .price span {
	color: #888;
	margin: 0 5px 0 0;
	font-weight: 300;
	font-size: 12px;
}

</style>

    <!-- Hero  -->
    @include('site.partials.hero')

    <productt></productt>
    <section data-section-id="template__20757597618508__image_with_text_tknczP" data-section-type="image-with-text" class=" bg-light section image-with-text section--default section--bordered image-with-text--image-width-one-half image-with-text--image-position-right image-with-text--text-alignment-center image-with-text--aspect-ratio-natural animation animation--image-with-text image-with-text--background-transparent is-visible pt-5">
        <div class="image-with-text__inner d-flex justify-content-around">
            <div class="image-with-text_text-container d-flex">
                <div class="image-with-text__text text-center font-all">
                    <div class="image-with-text__text-block image-with-text__text-block--center animation--section-introduction" style="--text-color: #000000;">
                        <h2 class="text-block__item text-block__heading type-heading-1" data-theme-editor-setting="section.template__20757597618508__image_with_text_tknczP.heading" style="max-width: 46rem; --delay-offset-multiplier: 1;">
                            TRENDING NOW
                        </h2>
                        <div class="text-block__subheading type-body-regular rte" data-theme-editor-setting="section.template__20757597618508__image_with_text_tknczP.subheading" style="max-width: 36rem; --delay-offset-multiplier: 2;">
                            <p><em>Elevate your style with the hottest 2024 jewellery trends. Make a statement that won’t go unnoticed with this Summer’s most-wanted pieces.</em></p>
                        </div>
                        <a href="/catégorie/her-collection" class="btn btn-dark text-white p-3" style = "border-radius:20px;">
                            Her Collection
                        </a>
                    </div>
                </div>
            </div>
            <div class="image image--animate image--45897756606796" style="width: 70vh; height: 120vh;">
                <img class="image__img lazyautosizes lazyloaded" src="/frontend/img/vv1.jpg" >
            </div>
        </div>
    </section>



    <section data-section-id="template--20757597618508__9321a60a-a7ee-47f6-91f9-2e6064e2b702" data-section-type="image-hero" class="image-hero image-hero--aspect-custom image-hero--text-horizontal-align-center image-hero--text-vertical-align-bottom image-hero--has-image image-hero--has-mobile-image animation animation--image-hero enable_reveal_animations--true is-visible" style="
        --desktop-height: 90vh;
        --mobile-height: 90vh;
        --overlay-background: #000000;

        --text-container-background: rgba(0,0,0,0);
        --text-color: #ffffff;
        --button-text-color: #181818;
        --button-text-background: #ffffff;
        --button-text-background-hover: #cccccc;"
    >
        <div class="image-hero__inner relative">
            <div class="image
                image--animate
                image-hero__image image-hero__image--desktop image-hero__image--aspect-custom" style="--focal-alignment: center;"
            >
                <img class="image__img lazyautosizes lazyloaded" src="//www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_300x300.jpg?v=1707905521" data-widths="[180, 360, 540, 720, 900, 1080, 1296, 1512, 1728, 2048]" data-aspectratio="2.6666666666666665" data-sizes="auto" alt="" data-srcset="//www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_180x.jpg?v=1707905521 180w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_360x.jpg?v=1707905521 360w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_540x.jpg?v=1707905521 540w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_720x.jpg?v=1707905521 720w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_900x.jpg?v=1707905521 900w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_1080x.jpg?v=1707905521 1080w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_1296x.jpg?v=1707905521 1296w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_1512x.jpg?v=1707905521 1512w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_1728x.jpg?v=1707905521 1728w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_2048x.jpg?v=1707905521 2048w" sizes="1519px" srcset="//www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_180x.jpg?v=1707905521 180w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_360x.jpg?v=1707905521 360w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_540x.jpg?v=1707905521 540w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_720x.jpg?v=1707905521 720w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_900x.jpg?v=1707905521 900w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_1080x.jpg?v=1707905521 1080w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_1296x.jpg?v=1707905521 1296w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_1512x.jpg?v=1707905521 1512w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_1728x.jpg?v=1707905521 1728w, //www.tisento-milano.com/cdn/shop/files/homepage_banner_desk3_2048x.jpg?v=1707905521 2048w">
            </div>
            <div class="image-hero__content-container absolute">
                <div class="image-hero__content animation--section-introduction ">
                    <h2 class="image-hero__heading type-heading-dynamic" style="--text-max-width: 40rem; --heading-font-size: 33px; --delay-offset-multiplier: 3;">
                        BESTSELLER LINKS
                    </h2>
                    <div class="image-hero__subheading type-body-regular" style="--text-max-width: 45rem; --subheading-font-size: 14px; --delay-offset-multiplier: 4;">
                        <p><em>The links are interlocked, they are closed forever, symbolising the idea that jewellery accompanies its wearer for life. It's not just a necklace, ring or pendant but a proper expression code.</em></p>
                    </div>

                    <a href="/catégorie/pearl-collection" class="btn btn-light text-dark p-3" style = "border-radius:20px;">
                        Pearl Collection
                    </a>
                </div>
            </div>
            <div class="image-hero__overlay o-0"></div>
        </div>
    </section>


    <!-- Produits Populaires  -->
    <section class="section-content  padding-y " id="product">
        <div class="container">
            <h2 class="text-center mb-5 font-all"><strong class = " text-dark"> Bestseller</strong></h2>
            <div class="row">
                @include('site.partials.nav')
            </div>
        </div>
    </section>

{{--     service --}}
<section class="section-content " >
    <div class="card bg-light">
        <div class="row mx-auto text-center">

            <button type="button" class="mr-5 border-0 bg-transparent outline-0" style = "outline: none" data-toggle="modal" data-target="#exampleModal">

                <div class="card text-dark  m-3" style="max-width: 22rem;">
                    <div class="card-body cursor-pointer">
                        <h5 class="card-title"><i class="fas fa-handshake fa-2x"></i></h5>
                            <p class="card-text">COMPLIMENTARY DELIVERY</p>
                    </div>
                </div>
            </button>
            <div class="card text-dark ml-5 m-3" style="max-width: 22rem;">
                <div class="card-body">

                    <a href="{{ route('wrapping') }}" class="nav-link text-dark">
                        <h5 class="card-title"><i class="fas fa-shipping-fast fa-2x"></i></h5>
                        <p class="card-text">FREE GIFT WRAPPING</p>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content p-5">
            <div class="modal-header">
                <h4 class="modal-title font-all text-center w-100" id="exampleModalLabel">DELIVERY INFORMATION</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <h6 class = "font-all" style = "opacity: 0.7">
                    <br> <br>
                    Cartier offers you 2 delivery options: <br><br>
                    Standard Delivery: <br>
                    2 to 3 business days. Complimentary with all CARTIER.COM orders. (Additional time may apply to some selections.)
                    <br><br>
                    Express Delivery: <br>
                    1 to 2 business days; $35 per order; Complimentary with all CARTIER.COM orders over $500. (Based on availability.)
                    <br><br>
                    Please note that in exceptional cases, express delivery may be delayed if you have requested bracelet adjustment or engraving. In such cases, the Client Relations Center will contact you to propose other arrangements.
                </h6>
            </div>
        </div>
    </div>
</div>

@stop
