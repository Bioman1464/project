    <footer class='container-fluid foot'>
        <div class='container'>
            <div class='row bonch-merch'>
                <div>Bonch.Merch</div>
            </div>
            <div class="row foot-nav">
                <div class="col-xl-2 col-md-3 col-sm-3 col-3">
                    <a href="/products" title="">Home</a>
                    <br>
                    <a href="{{ route('cartproducts') }}"><i class=""></i> Cart</a>
                </div>
                <div class="col-xl-2 col-md-3 col-sm-3 col-3">
                    @if(Auth::check())
                    <a href="/home"><i class=""></i> Profile</a>
                    @else
                    <a href="/login"><i class=""></i> Login</a>
                    @endif
                    <br>
                    <a href="/contacts" title="">Contact</a>
                </div>
                <div class="col-xl-8 col-md-6 col-sm-6 col-6">
                    <div class='pull-right instface'>
                        <a href='https://www.instagram.com/'><img src="images/home/inst.png"  alt=""></a>
                        <a href='https://ru-ru.facebook.com/'><img src="images/home/face.png"  alt=""></a>
                    </div>
                    <div class='text-right social'>Мы в соцсетях: </div>
                </div>
            </div>
        </div>

        
    </footer>
    <!-- <div class="footer-bottom">
        <div class="container-fluid">
            <div class="row">
                <p class="pull-left">Copyright © 2018 Bonch.Merch</p>
            </div>
        </div>
    </div> -->
  
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/btnup.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
</body>
</html>