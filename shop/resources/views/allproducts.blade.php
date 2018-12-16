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

    
    
    <section id="slider"><!-- slider -->

        <div class='container-fluid'>
            <div class="row">
                <div id="demo" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <ul class="carousel-indicators">
                        <li data-target="#demo" data-slide-to="0" class="active"></li>
                        <li data-target="#demo" data-slide-to="1"></li>
                        <!-- <li data-target="#demo" data-slide-to="2"></li> -->
                    </ul>
                    <!-- The slideshow -->
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="images/home/11.png" alt="Los Angeles">
                        </div>
                        <div class="item">
                            <img src="images/home/22.png" alt="Chicago">
                        </div>
                    </div>
                    <!-- Left and right controls -->
                    <a href="#demo" class="left control-carousel hidden-xs" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                    </a>
                    <a href="#demo" class="right control-carousel hidden-xs" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                    </a>

                </div>
            </div>
        </div>
    </section><!-- /slider -->
    
    <section>
        <div class="container">
            <div class="row">
                <div class="col-sm-3">
                    <div class="left-sidebar">
                        <h2>Category</h2>
                        <div class="panel-group category-products" id="accordian"><!--category-productsr-->
                            
                            
                            
                            
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">ИКСС</a></h4>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title"><a href="#">ИСИТ</a></h4>
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
                    
                        
                        
                        <div class="shipping text-center"><!--shipping-->
                            <img src="{{ asset('images/home/bonch2.png') }}" alt="" />
                        </div><!--/shipping-->
                    
                    </div>
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
                        {{$products->links()}}
                        
                        
                    </div><!--features_items-->
                    
                    <div class="category-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <ul class="nav nav-tabs">
                                <li class="active"><a href="#t-shirt" data-toggle="tab">T-Shirt</a></li>
                                <li><a href="#hoodie" data-toggle="tab">Hoodie</a></li>
                                <li><a href="#backpack" data-toggle="tab">Backpack</a></li>
                                <li><a href="#sweater" data-toggle="tab">Sweater</a></li>
                                
                            </ul>
                        </div>
                        <div class="tab-content">
                            @foreach ($products as $product)
                            <div class="tab-pane fade active in" id="{{ $product->name }}" >

                                <div class="col-sm-3">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <img src="{{Storage::disk('local')->url('product_images/'.$product->image)}}" alt="" />
                                                <h2>{{ $product->price }}</h2>
                                                <h5>{{ $product->name }}</h5>
                                                <a href="{{ route('AddToCartProduct', ['id'=>$product->id]) }}" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                                
                            </div>
                            @endforeach

                            </div>
                        </div>
                    </div><!--/category-tab-->

                    <div class='button-up' id='btn-up'>
                        <a href='#'><img src="images/home/up1.png" alt=""></a>
                    </div>
                    
                    
                    
                </div>
            </div>
        </div>
    </section>
@endsection