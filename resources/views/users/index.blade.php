<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/kuteshop/html/home12.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jun 2020 15:38:02 GMT -->
@include('users.includes.nav')
<body class="cms-index-index index-opt-12">

    <div class="wrapper">

        @include('users.includes.header')

        <!-- MAIN -->
        <main class="site-main">

            <div class="block-section-top block-section-top12">
                <div class="container">
                    <div class="box-section-top">

                        <!-- categori -->
                        <div class="block-nav-categori">

                            <div class="block-title">
                                <span>Categories</span>
                            </div>

                            <div class="block-content">
                                <ul class="ui-categori">
                                    @foreach($categories as $category)
                                    <li>
                                        <a href="{{url('/categoryProduct/'.$category->id)}}">
                                            {{$category->category_name}}
                                        </a>
                                    </li>
                                    @endforeach

                                </ul>

                            </div>

                        </div><!-- categori -->

                        <!-- block slide top -->
                        <div class="block-slide-main slide-opt-12">
<!--////////////////////////banner-->
                            <!-- slide -->
                            <div class="owl-carousel " 
                                data-nav="true" 
                                data-dots="true" 
                                data-margin="0" 
                                data-items='1' 
                                data-autoplayTimeout="700" 
                                data-autoplay="true" 
                                data-loop="true">
                                <?php $x = 1; ?>
                                @foreach($banners as $banner)
                                <div class="item item{{$x++}}">
                                    <img src="/images/{{$banner->image}}" alt="slide{{$x++}}" class="img-slide">
                                    <div class="description">
                                        <span class="subtitle " >{{$banner->subtitle}}</span>
                                        <span class="title">{{$banner->title}}</span>
                                        <span class="des">{{$banner->description}}</span>
                                        <a href="#" class="btn view">HOT DISCOUNT </a>
                                    </div>
                                </div>
                                @endforeach
                            </div> <!-- slide -->

                        </div><!-- block slide top -->

<!--                        ////////////////////////////////////////////-->

                        <!--banner  -->
                        <div class="col-right">
                            @foreach($ad_banners as $ad_banner)
                            <div class="banner-slide">
                                <a href="#" class="box-img"><img src="/images/{{$ad_banner->image}}" alt="img"></a>
                            </div>
                            @endforeach
                        </div><!--banner  -->

                    </div>
                </div>
            </div>


        <!--            //////////////////////////////////index-banner/////////-->

            <!-- banner -->
            <div class="block-banner-main-opt12">
                <div class="container">
                    <div class="row">
                        @foreach($index_banners as $index_banner)
                        <div class="col-md-4">
                            <a href="#" class="box-img"><img src="/images/{{$index_banner->image}}" alt="img"></a>
                            <!-- <div class="item item1">
                                <img src="images/media/index12/banner1.jpg" alt="img">
                                <div class="description">
                                    <span class="title">new look book </span>
                                    <span class="des">watches    </span>
                                    <a href="" class="btn btn-shop-now">SHOP NOW</a>
                                </div>
                            </div> -->
                        </div>
                        @endforeach

                    </div>
                </div>
            </div><!-- banner -->

            <!--  block-service-->
            <div class="block-service-opt2">
                <div class="container">
                    <div class="items">
                        <div class="item">
                            <div class="icon">
                                <img src="{{asset('inc/images/media/index2/service1.png')}}" alt="service">
                                <span class="title">Great Value</span>
                            </div>
                            <div class="des">
                                We offer competitive prices on our 100 million plus product range.
                            </div>
                        </div>
                        <div class="item">
                            <div class="icon">
                                <img src="{{asset('inc/images/media/index2/service3.png')}}" alt="service">
                                <span class="title">Safe Payment</span>
                            </div>
                            <div class="des">
                                Pay with the world's most popular and secure payment methods.
                            </div>
                        </div>

                        <div class="item">
                            <div class="icon">
                                <img src="{{asset('inc/images/media/index2/service4.png')}}" alt="service">
                                <span class="title">Shop with Confidence</span>
                            </div>
                            <div class="des">
                                Our Buyer Protection covers your purchase from click to delivery.
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!--  block-service-->


            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        @include('users.includes.alert')
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">

                    <div class="col-md-9">

                        <!-- block tab products -->
                        <div class="block-tab-products-opt1">

                            <div class="block-title">
                                <ul class="nav" role="tablist">
                                    <li role="presentation" class="active">
                                        <a href="#tabproduct1"  role="tab" data-toggle="tab">NEW PRODUCTS</a>
                                    </li>
                                </ul>
                            </div>

                            <div class="block-content tab-content">

                                <!-- tab 1 -->
                                <div role="tabpanel" class="tab-pane active fade in " id="tabproduct1">
                                    <div class="owl-carousel"
                                         data-nav="true"
                                         data-dots="false"
                                         data-margin="30"
                                         data-responsive='{
                                        "0":{"items":1},
                                        "480":{"items":2},
                                        "480":{"items":2},
                                        "768":{"items":3},
                                        "992":{"items":3}
                                    }'>
                                        @foreach($latestProducts as $latestProduct)
                                        <div class="product-item  product-item-opt-1 ">
                                            <div class="product-item-info">
                                                <div class="product-item-photo">
                                                    <a class="product-item-img" href="{{ route('productDetails', ['id' => $latestProduct->id]) }}"><img alt="product name" src="/images/{{$latestProduct->product_image}}"></a>
                                                    <div class="product-item-actions">
                                                        <a class="btn btn-quickview" href="{{ route('productDetails', ['id' => $latestProduct->id]) }}"><span>quickview</span></a>
                                                    </div>
                                                    <a class="btn btn-cart" type="button" href="{{url('/addToCart/'.$latestProduct->id)}}"><span>Add to Cart</span></a>
                                                </div>
                                                <div class="product-item-detail">
                                                    <strong class="product-item-name"><a href="#">{{$latestProduct->name}}</a></strong>
                                                    <div class="clearfix">
                                                        <div class="product-item-price">
                                                            @if($latestProduct->discount != 0)
                                                                <span class="price">${{$latestProduct->price - ($latestProduct->price * $latestProduct->discount / 100)}}</span>
                                                                <span class="old-price">${{$latestProduct->price}}</span>
                                                                <span class="product-item-label label-price">{{$latestProduct->discount}}% <span>off</span></span>
                                                            @else
                                                                <span class="price">${{$latestProduct->price}}</span>
                                                            @endif
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                            @endforeach

                                    </div>
                                </div><!-- tab 1 -->


                            </div>

                        </div><!-- block tab products -->

                    </div>

                    <div class="col-md-3">

                        <!-- block deals  of -->
                        <div class="block-deals-of block-deals-of-opt1">
                            <div class="block-title ">
                                <span class="icon"></span>
                                <div class="heading-title">Hot deals</div>
                            </div>
                            <div class="block-content">

                                <div class="owl-carousel"
                                     data-nav="true"
                                     data-dots="false"
                                     data-margin="30"
                                     data-responsive='{
                                    "0":{"items":1},
                                    "480":{"items":2},
                                    "768":{"items":3},
                                    "992":{"items":1},
                                    "1200":{"items":1}
                                    }'>
                                    @foreach($hotDeals as $hotDeal)
                                    <div class="product-item  product-item-opt-1 ">

                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="{{ route('productDetails', ['id' => $hotDeal->id]) }}"><img alt="product name" src="/images/{{$hotDeal->product_image}}" ></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-quickview" href="{{ route('productDetails', ['id' => $hotDeal->id]) }}"><span>quickview</span></a>
                                                </div>
                                                {{--<button type="button" class="btn btn-cart"><span>Add to Cart</span></button>--}}
                                                <a class="btn btn-cart" type="button" href="{{url('/addToCart/'.$hotDeal->id)}}"><span>Add to Cart</span></a>

                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">{{$hotDeal->name}}</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        @if($hotDeal->discount != 0)
                                                        <span class="price">${{$hotDeal->price - ($hotDeal->price * $hotDeal->discount / 100)}}</span>
                                                        <span class="old-price">${{$hotDeal->price}}</span>
                                                            <span class="product-item-label label-price">{{$hotDeal->discount}}% <span>off</span></span>
                                                        @else
                                                            <span class="price">${{$hotDeal->price}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                </div>

                            </div>
                        </div><!-- block deals  of -->

                    </div>

                </div>
            </div>

            <div class="clearfix" style="background-color: #eeeeee;margin-bottom: 40px; padding-top:30px;">

            <!-- block -floor -products / floor 1 -->
                {{--{{dd($categoryProduct)}}--}}
                @include('users.rtt')

            </div>

                        <!-- Block Testimonials -->


                        <!-- Block Testimonials -->

                        <!-- block  -new-product-->
            <!-- banner -->

        </main><!-- end MAIN -->

    @include('users.includes.footer');
        
        <!--back-to-top  -->
        <a href="#" class="back-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a>
        
    </div>

    @include('users.includes.scripts');

</body>

<!-- Mirrored from kute-themes.com/html/kuteshop/html/home12.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jun 2020 15:39:37 GMT -->
</html>