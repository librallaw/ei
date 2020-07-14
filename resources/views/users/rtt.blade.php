@foreach($categoryProducts as $categoryProduct)
    <?php $x = 1;?>

<div class="block-floor-products block-floor-products-opt1 floor-products{{$x++}}" id="floor0-{{$x++}}">
    <div class="container">


        <div class="block-title ">
            <span class="title">{{$categoryProduct['category_name']}}</span>
        </div>

                <!-- Banner -->
                <div class="block-banner-floor">

                    <div class="col-sm-6">
                        <a href="#" class="box-img"><img src="{{asset('inc/images/media/index1/banner5-1.jpg')}}" alt="banner"></a>
                    </div>
                    <div class="col-sm-6">
                        <a href="#" class="box-img"><img src="{{asset('inc/images/media/index1/banner5-2.jpg')}}" alt="banner"></a>
                    </div>

                </div><!-- Banner -->

        <div class="block-content">

            <div class="col-banner">
                {{--<span class="label-featured"><img src="images/icon/index1/label-featured.png" alt="label-featured"></span>--}}
                <a href="#" class="box-img"><img src="/images/{{$categoryProduct['category_image']}}" alt="baner-floor"></a>
            </div>

            <div class="col-products tab-content">

                <!-- tab 1 -->
                <div class="tab-pane active in  fade " id="floor1-{{$x++}}" role="tabpanel">
                    <div class="owl-carousel"
                         data-nav="true"
                         data-dots="false"
                         data-margin="0"
                         data-responsive='{
                                        "0":{"items":1},
                                        "420":{"items":2},
                                        "600":{"items":3},
                                        "768":{"items":3},
                                        "992":{"items":3},
                                        "1200":{"items":4}
                                    }'>
                        @foreach($categoryProduct['category_products'] as $categoryProduct)
                        {{--@foreach($categoryProduct as $product)--}}

                        <div class=" product-item  product-item-opt-1 ">
                            <div class="product-item-info">
                                <div class="product-item-photo">
                                    <a class="product-item-img" href="{{ route('productDetails', ['id' => $categoryProduct->id]) }}"><img alt="product name" src="/images/{{$categoryProduct->product_image}}"></a>
                                    <div class="product-item-actions">
                                        <a class="btn btn-quickview" href="{{ route('productDetails', ['id' => $categoryProduct->id]) }}"><span>quickview</span></a>
                                    </div>
                                    <a href="{{url('/addToCart/'.$categoryProduct->id)}}" type="button" class="btn btn-cart"><span>Add to Cart</span></a>
                                </div>
                                <div class="product-item-detail">
                                    <strong class="product-item-name"><a href="#">{{$categoryProduct->name}}</a></strong>
                                    <div class="clearfix">
                                        <div class="product-item-price">
                                            @if($categoryProduct->discount != 0)
                                                <span class="price">${{$categoryProduct->price - ($categoryProduct->price * $categoryProduct->discount / 100)}}</span>
                                                <span class="old-price">${{$categoryProduct->price}}</span>
                                                <span class="product-item-label label-price">{{$categoryProduct->discount}}% <span>off</span></span>
                                            @else
                                                <span class="price">${{$categoryProduct->price}}</span>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        @endforeach
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
@endforeach


{{--<!-- Banner -->--}}
{{--<div class="block-banner-opt1 effect-banner3">--}}
    {{--<div class="container">--}}
        {{--<div class="row">--}}
            {{--<div class="col-sm-6">--}}
                {{--<a href="#" class="box-img"><img src="{{asset('inc/images/media/index1/banner7-1.jpg')}}" alt="banner"></a>--}}
            {{--</div>--}}
            {{--<div class="col-sm-6">--}}
                {{--<a href="#" class="box-img"><img src="{{asset('inc/images/media/index1/banner7-2.jpg')}}" alt="banner"></a>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}
{{--</div><!-- Banner -->--}}