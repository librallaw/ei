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
                    <span class="page-heading-title2">Order's History</span>
                </h2>

                <div class="page-content page-order">
                    <div class="order-detail-content">
                        <div class="table-responsive">
                            @include('users.includes.alert')
                            <table class="table table-bordered  cart_summary">
                                <thead>
                                    <tr>
                                        <th class="cart_product">Product</th>
                                        <th>Name</th>
                                        <th>Price</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>

                                @if (count($items) == 0)
                                    <p class="alert alert-danger">No Orders.</p>
                                @else
                                @foreach($items as $item)
                                    <tr>
                                        <td class="cart_product">
                                            <a href="#"><img alt="Product" src="/images/{{$item->image}}"></a>
                                        </td>
                                        <td class="cart_description">
                                            <p class="product-name"><a href="#">{{$item->name}} </a></p>
                                        </td>
                                        <td class="price"><span>${{$item->price}}</span></td>
                                        <td class="cart_description">
                                            <span>
                                                @if($item->status == 4)
                                                    <span class="label label-rounded label-warning">Pending</span>
                                                @elseif($item->status == 3)
                                                    <span class="label label-rounded label-primary">Confirmed</span>
                                                @elseif($item->status == 2)
                                                    <span class="label label-rounded label-info">Shipped</span>
                                                @elseif($item->status == 1)
                                                    <span class="label label-rounded label-success">Delivered</span>
                                                @elseif($item->status == 0)
                                                    <span class="label label-rounded label-danger">Canceled</span>
                                                @endif
                                            </span>
                                        </td>
                                    </tr>
                                @endforeach
                                @endif
                                </tbody>

                            </table>
                        </div>
                        {{--<div class="cart_navigation">--}}


                            {{--<a href="{{url('/')}}" class="prev-btn">Continue shopping</a>--}}
                            {{--<a href="{{url('/getCheckout')}}" class="next-btn">Proceed to checkout</a>--}}
                        {{--</div>--}}
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