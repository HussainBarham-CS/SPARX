<div class="carousel-inner">
    <div class="carousel-item active">
        <img class="d-block w-100" src="{{  asset('assets/img/home-1.jpg') }}">
        <div class="carousel-caption">
            <h5>YOUR DREAM ELECTRONIC SHOP</h5>
            <p>If you can dream it, you can sell it with <span style="color: #106eea"><b>SPA</b></span><b>RX</b></p>
            <p style="font-size: 12px">Build your business here. Take it anywhere.</p>

            <!--<a class="btn btn-primary mt-3" href="#">Learn More</a>-->

            <form class="form-inline" action="/rigestarShop" method="GET">
                <div class="form-group mb-2">

                  <input type="email"  class="form-control" id="form-control"   placeholder="email@example.com" required>


                  @if (Route::has('login'))

                    <div >
                        @auth
                            <a href="{{ url('/dashboard') }}" class="btn btn-success mb-2" id="btn-dash">Dashboard</a>
                        @else
                        <a href="{{ route('login') }}" id="btn-login" class="btn btn-success mb-2" id="btn-login">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="btn btn-primary mb-2" id="btn-Free-Trial">Free Trial !!</a>
                            @endif
                        @endauth
                    </div>
                @endif

                </div>

            </form>
            <br>
            <hr>


            <form class="form-inline">
                <h5>Welcome!!</h5>
                <p>Welcome to the Sparks family!
                    I am glad you are shopping through our platform. I will be happy to help you get what you want.</p>
                <br>
                <button type="submit" class="btn btn-primary mb-2">Shoping Now !</button>
            </form>


        </div>
    </div>

</div>
