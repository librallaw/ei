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
                <!-- Block  Breadcrumb-->
                        
                <ol class="breadcrumb no-hide">
                    <li><a href="#">Home    </a></li>
                    <li class="active">Products</li>
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
                    <div class="col-md-9 col-md-push-3  col-main">
                    @foreach($categoryProducts as $categoryProduct)

                        <!-- Toolbar -->
                        <div class=" toolbar-products toolbar-top">

                            <div class="btn-filter-products">
                                <span>Filter</span>
                            </div>
                            <h1 class="cate-title">{{$categoryProduct['category_name']}}</h1>
                           
                            <div class="toolbar-option">

                                <div class="toolbar-sorter ">
                                    <label    class="label">Short by:</label>
                                    <select class="sorter-options form-control" >
                                        <option selected="selected" value="position">Position</option>
                                        <option value="name">Name</option>
                                        <option value="price">Price</option>
                                    </select>
                                    <a href="#" class="sorter-action"></a>
                                </div><!-- Short by -->

                                <div class="toolbar-limiter">
                                    <label   class="label">
                                        <span>Show:</span>
                                    </label>
                                   
                                    <select class="limiter-options form-control" >
                                        <option selected="selected" value="9">Show 18</option>
                                        <option value="15">Show 15</option>
                                        <option value="30">Show 30</option>
                                    </select>
                                    
                                </div><!-- Show per page -->

                            </div>


                            <ul class="pagination">
                                <li class="action">
                                    <a href="#">
                                        <span><i aria-hidden="true" class="fa fa-angle-left"></i></span>
                                    </a>
                                </li>
                                
                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li class="action">
                                    <a href="#">
                                        <span><i aria-hidden="true" class="fa fa-angle-right"></i></span>
                                    </a>
                                </li>
                            </ul>

                        </div><!-- Toolbar -->

                        <!-- List Products -->
                        <div class="products  products-grid">
                            <ol class="product-items row">
                                @if(count($categoryProduct['category_products']) > 0)
                                @foreach($categoryProduct['category_products'] as $product)
                                <li class="col-sm-4 product-item ">
                                    <div class="product-item-opt-1">
                                        <div class="product-item-info">
                                            <div class="product-item-photo">
                                                <a class="product-item-img" href="{{ route('productDetails', ['id' => $product->id]) }}"><img alt="product name" src="/images/{{$product->product_image}}"></a>
                                                <div class="product-item-actions">
                                                    <a class="btn btn-quickview" href="{{ route('productDetails', ['id' => $product->id]) }}"><span>quickview</span></a>
                                                </div>
                                                <a href="{{url('/addToCart/'.$product->id)}}" type="button" class="btn btn-cart"><span>Add to Cart</span></a>
                                            </div>
                                            <div class="product-item-detail">
                                                <strong class="product-item-name"><a href="#">{{$product->name}}</a></strong>
                                                <div class="clearfix">
                                                    <div class="product-item-price">
                                                        @if($product->discount != 0)
                                                            <span class="price">${{$product->price - ($product->price * $product->discount / 100)}}</span>
                                                            <span class="old-price">${{$product->price}}</span>
                                                            <span class="product-item-label label-price">{{$product->discount}}% <span>off</span></span>
                                                        @else
                                                            <span class="price">${{$product->price}}</span>
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
                                                <button type="button" class="close" data-dismiss="alert">×</button>
                                                <strong>Sorry, No Product In This Category</strong>
                                            </div>

                                        </div>
                                    </div>
                                @endif

                            </ol><!-- list product -->
                        </div> <!-- List Products -->

                        <!-- Toolbar -->
                        <div class=" toolbar-products toolbar-bottom">


                            <div class="toolbar-option">

                                <div class="toolbar-sorter ">
                                    <label    class="label">Short by:</label>
                                    <select class="sorter-options form-control" >
                                        <option selected="selected" value="position">Product name</option>
                                        <option value="name">Name</option>
                                        <option value="price">Price</option>
                                    </select>
                                    <a href="#" class="sorter-action"></a>
                                </div><!-- Short by -->

                                <div class="toolbar-limiter">
                                    <label   class="label">
                                        <span>Show:</span>
                                    </label>

                                    <select class="limiter-options form-control" >
                                        <option selected="selected" value="9"> Show 18</option>
                                        <option value="15">Show 15</option>
                                        <option value="30">Show 30</option>
                                    </select>

                                </div><!-- Show per page -->

                            </div>

                            <ul class="pagination">


                                <li class="active">
                                    <a href="#">1</a>
                                </li>
                                <li>
                                    <a href="#">2</a>
                                </li>
                                <li>
                                    <a href="#">3</a>
                                </li>
                                <li>
                                    <a href="#">4</a>
                                </li>
                                <li>
                                    <a href="#">5</a>
                                </li>
                                <li class="action action-next">
                                    <a href="#">
                                        Next <span><i aria-hidden="true" class="fa fa-angle-double-right"></i></span>
                                    </a>
                                </li>
                            </ul>

                        </div><!-- Toolbar -->
                        @endforeach
                    </div><!-- Main Content -->

                    <!-- Sidebar -->
                    <div class="col-md-3 col-md-pull-9  col-sidebar">

                        <!-- block filter products -->
                        <div id="layered-filter-block" class="block-sidebar block-filter no-hide">
                            <div class="close-filter-products"><i class="fa fa-times" aria-hidden="true"></i></div>
                            <div class="block-title">
                                <strong>CATEGORIES</strong>
                            </div>
                            <div class="block-content">

                                <!-- Filter Item  categori-->
                                <div class="filter-options-item filter-options-categori">
                                    <div class="filter-options-content">
                                        <ol class="items">
                                            @foreach($categories as $category)
                                                <?php $x = 1;?>
                                            <li class="item ">
                                                <label>
                                                    <a href="{{url('/categoryProduct/'.$category->id)}}"> <span>{{$category->category_name}}</span></a>
                                                </label>
                                            </li>

                                           @endforeach
                                        </ol>
                                    </div>
                                </div><!-- Filter Item  categori-->

                            </div>
                        </div><!-- Filter -->

                        <!-- block slide top -->
                        <div class="block-sidebar block-sidebar-testimonials">
                            <div class="block-title">
                                <strong>Testimonials</strong>
                            </div>
                            <div class="block-content">
                                <div class="owl-carousel" 
                                    data-nav="false" 
                                    data-dots="true" 
                                    data-margin="0" 
                                    data-items='1' 
                                    data-autoplayTimeout="700" 
                                    data-autoplay="true" 
                                    data-loop="true">

                                    @foreach($testimonials as $testimonial)
                                    <div class="item " >
                                       <strong class="name">{{$testimonial->testifier}}</strong>

                                       <div class="des">
                                        "{{$testimonial->testimony}}"
                                       </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div><!-- block slide top -->


                    </div><!-- Sidebar -->

                    
                    
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