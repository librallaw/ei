<!DOCTYPE html>
<html lang="en">

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
                    <li class="active">Your shopping cart</li>
                </ol><!-- Block  Breadcrumb-->

                <h2 class="page-heading">
                    <span class="page-heading-title2">Shopping Cart Summary</span>
                </h2>

                <div class="page-content page-order">
                    <ul class="step">
                        <li class="current-step"><span>01. Summary</span></li>
                        <li><span>02. Sign in</span></li>
                        <li><span>03. Address</span></li>
                        <li><span>04. Shipping</span></li>
                        <li><span>05. Payment</span></li>
                    </ul>
                    <div class="order-detail-content">
                        <div class="table-responsive">
                            @include('users.includes.alert')
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
                                            <p class="product-name"><a href="#">{{$item->name}} </a></p>
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
                        <div class="cart_navigation">


                            <a href="{{url('/')}}" class="prev-btn">Continue shopping</a>
                            <a href="{{url('/getCheckout')}}" class="next-btn">Proceed to checkout</a>
                        </div>
                    </div>
                </div>
                <br>
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

</body>

<!-- Mirrored from kute-themes.com/html/kuteshop/html/Order.php by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 09 Jun 2020 15:41:26 GMT -->
</html>