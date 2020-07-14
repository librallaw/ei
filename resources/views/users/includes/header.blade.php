<!-- HEADER -->
<header class="site-header header-opt-12 cate-show">

    <div class=" container">
        <div class="header-top">

            <ul class="nav-right">
                <li><a href="{{url('/getCheckout')}}">Checkout</a></li>
                @if(auth()->user())
                @include('layouts.app')
                <li class="dropdown setting">
                    <a data-toggle="dropdown" role="button" href="#" class="dropdown-toggle "><span>My Account</span> <i aria-hidden="true" class="fa fa-angle-down"></i></a>
                    <div class="dropdown-menu  ">
                        <ul class="account">
                            <li><a href="{{url('/viewOrder')}}">Orders</a></li>
                        </ul>
                    </div>
                </li>
                @else
                <li><a href="{{url('/login')}}">Login</a></li>
                <li><a href="{{url('/register')}}">Register</a></li>
                @endif


            </ul>
        </div>
    </div>

    <!-- header-content -->
    <div class="header-content mid-header">
        <div class="container">

            <div class="clearfix">

                <div class="nav-left">
                    <!-- logo -->
                    <strong class="logo">
                        <a href="{{url('/')}}"><img src="{{asset('inc/images/media/index12/logo.png')}}" alt="logo"></a>
                    </strong><!-- logo -->
                </div>


                <div class="nav-mind">

                    <!-- menu -->
                    <div class="block-nav-menu">
                        <div class="clearfix"><span data-action="close-nav" class="close-nav"><span>close</span></span></div>
                        <ul class="ui-menu">
                            <li><a href="{{url('/')}}">Home</a></li>
                            <li class="parent parent-submenu">
                                <a href="#">Products </a>
                                <span class="toggle-submenu"></span>
                                <div class="submenu drop-menu">
                                    <ul>
                                        <li><strong><a href="">CATEGORIES</a> </strong></li>
                                        <hr>
                                        @foreach($hCategories as $category)
                                            <li>
                                                <a href="{{url('/categoryProduct/'.$category->id)}}">

                                                    {{$category->category_name}}
                                                </a>
                                            </li>
                                        @endforeach

                                    </ul>
                                </div>
                            </li>
                            <li><a href="{{url('/viewCart')}}">Cart</a></li>
                            <li><a href="#">About Us</a></li>
                            <li><a href="#"> Contact Us </a></li>
                        </ul>

                    </div><!-- menu -->

                </div>

            </div>

        </div>
    </div><!-- header-content -->

    <div class=" header-nav ">
        <div class="container">
            <div class="box-header-nav">

                <span data-action="toggle-nav" class="nav-toggle-menu"><span>Menu</span><i aria-hidden="true" class="fa fa-bars"></i></span>

                <!-- categori -->
                <div class="block-nav-categori">

                    <div class="block-title">
                        <span>Categories</span>
                    </div>


                    <div class="block-content">
                        <div class="clearfix"><span data-action="close-cat" class="close-cate"><span>Categories</span></span></div>
                        <ul class="ui-categori">

                            @foreach($hCategories as $category)
                                <li>
                                    <a href="{{url('/categoryProduct/'.$category->id)}}">

                                        {{$category->category_name}}
                                    </a>
                                </li>
                            @endforeach

                        </ul>
                    </div>

                </div><!-- categori -->

                <!-- search -->
                <div class="block-search">
                    <div class="block-title">
                        <span>Search</span>
                    </div>
                    <div class="block-content">
                        <div class="form-search">
                            <form method="get" action="{{url('/search')}}">
                                @csrf
                                <div class="box-group">
                                    <input type="text" class="form-control" placeholder="Search your products" name="search">
                                    <button class="btn btn-search" type="submit"><span>search</span></button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- block mini cart -->


                <div class="block-minicart dropdown">
                    <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                        <span class="cart-icon"></span>
                        <span class="counter qty">
                                    <span class="cart-text">Cart: </span>
                                    <span class="counter-number">{{$cartCount}}</span>
                                    <span class="counter-label">{{$cartCount}} <span>Item(s)</span></span>
                                    <span class="counter-price">${{$total_price}}</span>
                                </span>
                    </a>
                    <div class="dropdown-menu">
                        <form>
                            <div  class="minicart-content-wrapper" >
                                <div class="subtitle">
                                    <?php $cart = new Darryldecode\Cart\Facades\CartFacade(); ?>
                                    You have {{$cartCount}} item(s) in your cart
                                </div>
                                <div class="minicart-items-wrapper">
                                    <ol class="minicart-items">

                                        @if(!empty($cart_items))
                                            @foreach($cart_items as $item)
                                                <li class="product-item">
                                                    <a class="product-item-photo" href="#" title="{{$item->name}}">
                                                        <img class="product-image-photo" src="/images/{{$item->image}}" alt="The Name Product">
                                                    </a>
                                                    <div class="product-item-details">
                                                        <strong class="product-item-name">
                                                            <a href="#">{{$item->name}}</a>
                                                        </strong>
                                                        <div class="product-item-price">
                                                            <span class="price">${{$item->price}} </span>
                                                        </div>
                                                        <div class="product-item-qty">
                                                            <span class="label">Qty: </span ><span class="number">{{$item->quantity}}</span>
                                                        </div>
                                                        <div class="product-item-actions">
                                                            <a class="action delete" href="{{url('/deleteCartItem/'.$item->id)}}" title="Remove item">
                                                                <span>Remove</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </li>
                                            @endforeach
                                        @endif

                                    </ol>
                                </div>
                                <div class="subtotal">
                                    <span class="label">Total</span>
                                    <span class="price">${{$total_price}}</span>
                                </div>
                                <div class="actions">
                                    <!-- <a class="btn btn-viewcart" href="">
                                        <span>Shopping bag</span>
                                    </a> -->
                                    <button class="btn btn-checkout" type="button" title="Check Out">
                                        <span><a href="{{url('/viewCart')}}"> View all</a></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- block mini cart -->

            </div>
        </div>
    </div>

</header><!-- end HEADER -->