<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from kute-themes.com/html/kuteshop/html/Checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jun 2020 15:41:23 GMT -->
@include('users.includes.nav')

<body class="index-opt-1 catalog-product-view catalog-view_op1 page-order">

	<div class="wrapper">



        @include('users.includes.header');

		<!-- MAIN -->
		<main class="site-main">

            <div class="columns container">
                <!-- Block  Breadcrumb-->
                        
                <ol class="breadcrumb no-hide">
                    <li><a href="#">Home    </a></li>
                    <li class="active"> Checkout</li>
                </ol><!-- Block  Breadcrumb-->

                <h2 class="page-heading">
                    <span class="page-heading-title2"> Checkout</span>
                </h2>

                <div class="page-content checkout-page">
                    <h3 class="checkout-sep">1. Billing Infomations</h3>
                    @include('users.includes.alert')

                    <div class="box-border">
                        <form method="post" action="{{route('checkout')}}">
                            @csrf
                        <ul>
                            <li class="row">
                                <div class="col-sm-6">
                                    <label for="first_name" class="required">First Name</label>
                                    <input class="input form-control" name="first_name" id="first_name" type="text">
                                </div>
                                <div class="col-sm-6">
                                    <label for="last_name" class="required">Last Name</label>
                                    <input name="last_name" class="input form-control" id="last_name" type="text">
                                </div>
                            </li>
                            <li class="row">

                                <div class="col-sm-6">
                                    <label for="email_address" class="required">Email Address</label>
                                    <input class="input form-control" name="email" id="email_address" type="text">
                                </div>
                            </li>
                            <li class="row"> 
                                <div class="col-xs-12">

                                    <label for="address" class="required">Address</label>
                                    <input class="input form-control" name="address" id="address" type="text">

                                </div>

                            </li>

                            <li class="row">

                                <div class="col-sm-6">
                                    <label for="telephone" class="required">Telephone</label>
                                    <input class="input form-control" name="telephone" id="telephone" type="text">
                                </div>

                                <div class="col-sm-6">
                                    
                                    <label for="city" class="required">City</label>
                                    <input class="input form-control" name="city" id="city" type="text">

                                </div>

                                <div class="col-sm-6">
                                    <label class="required">State/Province</label>
                                    <input class="input form-control" name="state" id="state" type="text">
                                </div>
                            </li>

                            <li class="row">

                                <div class="col-sm-6">

                                    <label for="postal_code" class="required">Zip/Postal Code</label>
                                    <input class="input form-control" name="zip_code" id="postal_code" type="text">
                                </div>

                                <div class="col-sm-6">
                                    <label class="required">Country</label>
                                    <input class="input form-control" name="country" id="country" type="text">
                                </div>
                            </li>
                            <li>
                                <button class="button" type="submit">Order Now</button>
                            </li>
                        </ul>
                        </form>
                    </div>
                    {{--<h3 class="checkout-sep">2. Payment Information</h3>--}}
                    {{--<div class="box-border">--}}
                        {{--<ul>--}}
                            {{--<li>--}}
                                {{--<label for="radio_button_5"><input checked="" name="radio_4" id="radio_button_5" type="radio"> Check / Money order</label>--}}
                            {{--</li>--}}

                            {{--<li>--}}
                    {{----}}
                                {{--<label for="radio_button_6"><input name="radio_4" id="radio_button_6" type="radio"> Credit card (saved)</label>--}}
                            {{--</li>--}}

                        {{--</ul>--}}
                        {{--<button class="button">Continue</button>--}}
                    {{--</div>--}}
                    <h3 class="checkout-sep">Order Review</h3>
                    <div class="box-border">
                        <div class="table-responsive">
                            <table class="table table-bordered  cart_summary">
                                <thead>
                                <tr>
                                    <th class="cart_product">Product</th>
                                    <th>Description</th>
                                    <th>Avail.</th>
                                    <th>Unit price</th>
                                    <th>Total</th>
                                    <th class="action"><i class="fa fa-trash-o"></i></th>
                                </tr>
                                </thead>
                                <tbody>
                                @if (\Darryldecode\Cart\Facades\CartFacade::isEmpty())
                                    <p class="alert alert-warning">Your shopping cart is empty.</p>
                                @else

                                    @foreach($items as $item)

                                        <tr>
                                            <td class="cart_product">
                                                <a href="#"><img alt="Product" src="/images/{{$item->image}}"></a>
                                            </td>
                                            <td class="cart_description">
                                                <p class="product-name"><a href="#">{{$item->name}}</a></p>
                                            </td>
                                            <td class="cart_avail">

                                                @if($item->availability == 0)
                                                    <span class="label label-danger">Not in stock</span>
                                                @else
                                                    <span class="label label-success">In stock</span>
                                                @endif
                                            </td>

                                            <td class="price"><span>${{$item->price}}</span></td>
                                            <td class="price">
                                                <span>${{$item->price}}</span>
                                            </td>
                                            <td class="action">
                                                <a href="{{url('/deleteItem/'.$item->id)}}">Delete item</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td rowspan="2" colspan="2"></td>
                                    <td colspan="3"></td>
                                    <td colspan="2">
                                        <a href="{{url('/clearCart')}}" class="btn btn-danger">Clear Cart</a>
                                    </td>                                    </tr>
                                <tr>
                                    <td colspan="3"><strong>Total</strong></td>
                                    <td colspan="2"><strong>${{\Darryldecode\Cart\Facades\CartFacade::getSubTotal()}}</strong></td>

                                </tr>

                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>

            </div>


		</main><!-- end MAIN -->

		<!-- FOOTER -->
        @include('users.includes.footer')<!-- end FOOTER -->
		
        <!--back-to-top  -->
        <a href="#" class="back-to-top">
            <i aria-hidden="true" class="fa fa-angle-up"></i>
        </a>
        
	</div>

    
    

    <!-- jQuery -->    
    <script type="text/javascript" src="js/jquery.min.js"></script>

    <!-- sticky -->
    <script type="text/javascript" src="js/jquery.sticky.js"></script>

    <!-- OWL CAROUSEL Slider -->    
    <script type="text/javascript" src="js/owl.carousel.min.js"></script>

    <!-- Boostrap --> 
    <script type="text/javascript" src="js/bootstrap.min.js"></script>

    <!-- Countdown --> 
    <script type="text/javascript" src="js/jquery.countdown.min.js"></script>

    <!--jquery Bxslider  -->
    <script type="text/javascript" src="js/jquery.bxslider.min.js"></script>
    
    <!-- actual --> 
    <script type="text/javascript" src="js/jquery.actual.min.js"></script>

    <!-- jQuery UI -->
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    
    <!-- Chosen jquery-->    
    <script type="text/javascript" src="js/chosen.jquery.min.js"></script>
    
    <!-- parallax jquery--> 
    <script type="text/javascript" src="js/jquery.parallax-1.1.3.js"></script>

    <!-- elevatezoom --> 
    <script type="text/javascript" src="js/jquery.elevateZoom.min.js"></script>

    <!-- fancybox -->
    <script src="js/fancybox/source/jquery.fancybox.pack.js"></script>
    <script src="js/fancybox/source/helpers/jquery.fancybox-media.js"></script>
    <script src="js/fancybox/source/helpers/jquery.fancybox-thumbs.js"></script>

    <!-- arcticmodal -->
    <script src="js/arcticmodal/jquery.arcticmodal.js"></script>
    
    <!-- Main -->  
    <script type="text/javascript" src="js/main.js"></script>

    <!-- Custom scripts -->

</body>

<!-- Mirrored from kute-themes.com/html/kuteshop/html/Checkout.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jun 2020 15:41:26 GMT -->
</html>