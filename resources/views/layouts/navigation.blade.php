<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <a class="navbar-brand" href="/">Winkel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active"><a href="/" class="nav-link">Home</a></li>
                <li class="nav-item"><a href="/catalog" class="nav-link">Shop</a>
{{--                    <a class="nav-link dropdown-toggle" href="#" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Shop</a>--}}
{{--                    <div class="dropdown-menu" aria-labelledby="dropdown04">--}}
{{--                        --}}
{{--                        <a class="dropdown-item" href="/checkout">Checkout ???</a>--}}
{{--                    </div>--}}
                </li>
                {{-- <li class="nav-item"><a href="about" class="nav-link">About</a></li> --}}
                <li class="nav-item"><a href="/blog" class="nav-link">Blog</a></li>
                {{--                <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>--}}
                <li class="nav-item cta cta-colored">
                    <a href="/cart" class="nav-link"><span class="icon-shopping_cart"></span>[0]</a></li>
                <li class="nav-item">
                        @if(Auth::check())
                      <span class="nav-link">

                                <i class="bi bi-person-fill"></i>
                                {{ Auth::user()->name }}


                    <form method="POST" action="{{ route('logout') }}" style="display:inline;">
                        @csrf
                        <x-dropdown-link :href="route('logout')"
                                         onclick="event.preventDefault();
                                                this.closest('form').submit();">
                            [log out]
                        </x-dropdown-link>
                    </form>


                      </span>



                    @else

                        <a href="/login" class="nav-link"><i class="bi bi-person-fill"></i>  [log in]</a>

                    @endif

                </li>

            </ul>
        </div>
    </div>
</nav>
