@extends('layouts.index')

@section('center')
    <div class="header-bottom"><!--header-bottom-->
            <div class="container">
                <div class="row">
                    <div class="col-sm-9">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <div class="mainmenu">
                            <ul class="nav navbar-nav collapse navbar-collapse">
                                <li><a href="/products" class="active">Home</a></li>
                                <li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">

                                        @if(Auth::check())
                                        <li><a href="/home"><i class="fa fa-lock"></i> Profile</a></li>
                                        @else
                                        <li><a href="/login"><i class="fa fa-lock"></i> Login</a></li>
                                        @endif
                                        <li><a href="{{ route('cartproducts') }}"><i class="fa fa-shopping-cart"></i> Cart</a></li> 
                                        <li><a href="/contacts">Contact</a></li>
                                    </ul>
                                </li> 
                                
                               
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-3">
                        <div class="search_box pull-right">
                            <input type="text" placeholder="Search"/>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--/header-bottom-->
    </header><!--/header-->

 
<!--     <section id="slider">slider

    <div class='container-fluid'>
        <div class="row">
            <div id="demo" class="carousel slide" data-ride="carousel">
                Indicators
                <ul class="carousel-indicators">
                    <li data-target="#demo" data-slide-to="0" class="active"></li>
                    <li data-target="#demo" data-slide-to="1"></li>
                    <li data-target="#demo" data-slide-to="2"></li>
                    <li data-target="#demo" data-slide-to="3"></li>
                </ul>
                The slideshow
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="images/home/11.png" alt="">
                    </div>
                    <div class="item">
                        <img src="images/home/22.png" alt="">
                    </div>
                    <div class="item">
                        <img src="images/home/Milos2.png" alt="">
                    </div>
                    <div class="item">
                        <img src="images/home/Banner.png" alt="">
                    </div>
                </div>
                Left and right controls
                <a href="#demo" class="left control-carousel hidden-xs" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a href="#demo" class="right control-carousel hidden-xs" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>

            </div>
        </div>
    </div>
</section>/slider -->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Facultuis</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{ route('ikssProducts') }}">ИКСС</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{ route('isitProducts') }}">ИСИТ</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">РТС</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">ГФ</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">ИВО</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">ФЭУ</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">ФФП</a></h4>
                                </div>
                            </div>
                        </div><!--/category-products-->
                    
                        
                        
                        
                    
                    </div>

                    <div class="left-sidebar">
                        <h2>Type</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{ route('tshirtProducts') }}">T-Shirt</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="{{ route('hoodieProducts') }}">Hoodie</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Backpack</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">Sweater</a></h4>
                                </div>
                            </div>
                            
                        </div><!--/category-products-->
                    
                    </div>

                    <div class="shipping text-center"><!--shipping-->
                            <img src="{{ asset('images/home/bonch2.png') }}" alt="" />
                    </div><!--/shipping-->

                </div>
                
                <div class="col-sm-9 padding-right">
                    <div class="features_items"><!--features_items-->
                        <h2 class="title text-center">Features Items</h2>

                        @foreach ($products as $product)

                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <!-- {{ $product->id }} -->
                                            <img src="{{Storage::disk('local')->url('product_images/'.$product->image)}}" alt="" />
                                            <h2>{{ $product->price }}</h2>
                                            <h4>{{ $product->name }}</h4>
                                            <a href="{{ route('AddToCartProduct', ['id'=>$product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                        </div>
                                </div>
                            </div>
                        </div>

                        @endforeach

                        
                        
                    </div><!--features_items-->
                    
                </div><!--/category-tab-->

                    <div class='button-up' id='btn-up'>
                        <a href='#'><img src="images/home/up1.png" alt=""></a>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </section>
@endsection