<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/kuteshop/html/Product3.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jun 2020 15:43:09 GMT -->
@include('users.includes.nav')

<body class="index-opt-1 catalog-product-view catalog-view_op1">

	<div class="wrapper">



        @include('users.includes.header')

		<!-- MAIN -->
		<main class="site-main">

            <div class="columns container">
                <!-- Block  Breadcrumb-->
                        
                <ol class="breadcrumb no-hide">
                    <li><a href="#">Home    </a></li>
                    <li class="active">Product Details </li>

                </ol><!-- Block  Breadcrumb-->

                <div class="row">


                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                @include('users.includes.alert')
                            </div>
                        </div>
                    </div>
                    <!-- Main Content -->
                    <div class="col-md-12  col-main">

                        <div class="row">
                    
                            <div class="col-sm-6 col-md-5 col-lg-5">

                                <div class="product-media media-horizontal">

                                    <div class="image_preview_container images-large">

                                        <img id="img_zoom" data-zoom-image="/images/{{$product->product_image}}" src="/images/{{$product->product_image}}" alt="">

                                        <button class="btn-zoom open_qv"><span>zoom</span></button>

                                    </div>

                                    <div class="product_preview images-small">

                                        <div class="owl-carousel thumbnails_carousel" id="thumbnails"  data-nav="true" data-dots="false" data-margin="10" data-responsive='{"0":{"items":3},"480":{"items":4},"600":{"items":5},"768":{"items":3}}'>


                                        </div><!--/ .owl-carousel-->

                                    </div><!--/ .product_preview-->

                                </div><!-- image product -->
                            </div>

                            <div class="col-sm-6 col-md-7 col-lg-7"> 

                                <div class="product-info-main">

                                    <h1 class="page-title">
                                        {{$product->name}}
                                    </h1>
                                   
                                    <div class="product-info-price">
                                        <div class="price-box">
                                            <span class="price">${{$product->price - ($product->price * $product->discount / 100)}}</span>
                                            @if($product->discount != 0)
                                            <span class="old-price">${{$product->price}}</span>
                                            <span class="label-sale">-{{$product->discount}}%</span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-info-stock">
                                        <div class="stock available">
                                            @if($product->availability == 0)
                                            <span class="label">Availability: </span>Not in stock
                                                @else
                                                <span class="label">Availability: </span>In stock
                                            @endif
                                        </div>
                                    </div>
                                    <div class="product-condition">
                                        Condition: New
                                    </div>

                                    <div class="product-add-form">
                                        <p>Available Options:</p>
                                        <form>

                                            <div class="product-options-wrapper">
                                                <div class="form-qty">
                                                    <label class="label">Qty: </label>
                                                    <div class="control">
                                                        <input type="text" class="form-control input-qty" value='1' id="qty1" name="qty1"  maxlength="12"  minlength="1">
                                                        <button class="btn-number  qtyminus" data-type="minus" data-field="qty1"><span>-</span></button>
                                                        <button class="btn-number  qtyplus" data-type="plus" data-field="qty1"><span>+</span></button>
                                                    </div>
                                                </div>
                                            </div>

                                            

                                            <div class="product-options-bottom clearfix">
                                                
                                                <div class="actions">
                                                    
                                                    <a href="{{url('/addToCart/'.$product->id)}}" type="submit" title="Add to Cart" class="action btn-cart">
                                                        <span>Add to Cart</span>
                                                    </a>
                                                </div>
                                               
                                            </div>

                                        </form>
                                    </div>
                                </div><!-- detail- product -->

                            </div><!-- Main detail -->

                        </div>

                        <!-- block-related product -->
                        <div class="block-related ">
                            <div class="block-title">
                                <strong class="title">RELATED products</strong>
                            </div>
                            <div class="block-content ">
                                <ol class="product-items owl-carousel " data-nav="true" data-dots="false" data-margin="30" data-responsive='{"0":{"items":1},"480":{"items":2},"600":{"items":3},"992":{"items":3},"1200":{"items":4}}'>
                                    
                                    @foreach($relatedProducts as $relatedProduct)
                                    <li class="product-item product-item-opt-2">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="{{ route('productDetails', ['id' => $relatedProduct->id]) }}"><img alt="product name" src="/images/{{$relatedProduct->product_image}}" ></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-quickview" href="{{ route('productDetails', ['id' => $relatedProduct->id]) }}"><span>quickview</span></a>
                                                </div>
                                                {{--<button type="button" class="btn btn-cart"><span>Add to Cart</span></button>--}}
                                                <a class="btn btn-cart" type="button" href="{{url('/addToCart/'.$relatedProduct->id)}}"><span>Add to Cart</span></a>

                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">{{$relatedProduct->name}}</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        @if($relatedProduct->discount != 0)
                                                            <span class="price">${{$relatedProduct->price - ($relatedProduct->price * $relatedProduct->discount / 100)}}</span>
                                                            <span class="old-price">${{$relatedProduct->price}}</span>
                                                            <span class="product-item-label label-price">{{$relatedProduct->discount}}% <span>off</span></span>
                                                        @else
                                                            <span class="price">${{$relatedProduct->price}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach

                                
                                </ol>
                            </div>
                        </div><!-- block-related product -->


                    </div><!-- Main Content -->
                    
                   

                </div>
            </div>


		</main><!-- end MAIN -->

        <!-- FOOTER -->
        @include('users.includes.footer');


        <!--back-to-top  -->
        <a href="#" class="back-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a>

    </div>




    <!-- jQuery -->
    @include('users.includes.scripts');
    <!-- Custom scripts -->

    <script>

        (function($) {

            "use strict";

            $(document).ready(function() {

                /*  [ Filter by price ]

                - - - - - - - - - - - - - - - - - - - - */

                $('#slider-range').slider({

                    range: true,

                    min: 0,

                    max: 500,

                    values: [0, 300],

                    slide: function (event, ui) {

                        $('#amount-left').text(ui.values[0] );
                        $('#amount-right').text(ui.values[1] );

                    }

                });

                $('#amount-left').text($('#slider-range').slider('values', 0));

                $('#amount-right').text($('#slider-range').slider('values', 1));
            }); 

        })(jQuery);

    </script>
</body>

<!-- Mirrored from kute-themes.com/html/kuteshop/html/Product3.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jun 2020 15:43:10 GMT -->
</html>