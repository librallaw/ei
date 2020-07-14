<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/kuteshop/html/Category1.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jun 2020 15:41:26 GMT -->
@include('users.includes.nav')

<body class="index-opt-1 catalog-category-view catalog-view_op1">

	<div class="wrapper">


        @include('users.includes.header');

		<!-- MAIN -->
		<main class="site-main">

            <div class="columns container">
                <div class="row">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                @include('users.includes.alert')
                            </div>
                        </div>
                    </div>

                    <!-- Main Content -->
                    <div class="col-md-9 col-md-push-3  col-main">

                        <!-- Toolbar -->
                        <div class=" toolbar-products toolbar-top">
                            <div class="btn-filter-products">
                                <span>Filter</span>
                            </div>
                            <h1 class="cate-title">Search Results</h1>
                        </div><!-- Toolbar -->

                        <!-- List Products -->
                        <div class="products  products-grid">
                            <ol class="product-items row">
                                @if(count($search_results) > 0)
                                @foreach($search_results as $result)
                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="{{ route('productDetails', ['id' => $result->id]) }}"><img alt="product name" src="/images/{{$result->product_image}}"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-quickview" href="{{ route('productDetails', ['id' => $result->id]) }}"><span>quickview</span></a>
                                                </div>
                                                <a href="{{url('/addToCart/'.$result->id)}}" type="button" class="btn btn-cart"><span>Add to Cart</span></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">{{$result->name}}</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        @if($result->discount != 0)
                                                            <span class="price">${{$result->price - ($result->price * $result->discount / 100)}}</span>
                                                            <span class="old-price">${{$result->price}}</span>
                                                            <span class="product-item-label label-price">{{$result->discount}}% <span>off</span></span>
                                                        @else
                                                            <span class="price">${{$result->price}}</span>
                                                        @endif
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @endforeach
                                 @else
                                    <div class="panel">
                                        <div class="panel-body">
                                            <div class="alert alert-danger alert-block">
                                                {{--<button type="button" class="close" data-dismiss="alert">×</button>--}}
                                                <strong>Sorry, No Product Related To Your Search</strong>
                                            </div>

                                        </div>
                                    </div>
                                @endif

                            </ol><!-- list product -->
                        </div> <!-- List Products -->

                    </div><!-- Main Content -->

                    <!-- Sidebar -->
                        <div class="col-md-3"></div>


                    <!-- Sidebar -->

                    
                    
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

<!-- Mirrored from kute-themes.com/html/kuteshop/html/Category1.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jun 2020 15:42:12 GMT -->
</html>