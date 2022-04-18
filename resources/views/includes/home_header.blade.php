<nav>
    <div class="logo">
        {{-- <img src="logo.svg" alt="Logo Image"> --}}
        <a href="{{ route('app.home') }}"><img class="img1" src="{{ asset('assets/images/just1.jpg') }}" alt="" width="100px" height="100px" /></a>
    </div>
    <div class="hamburger">
        <div class="line1"></div>
        <div class="line2"></div>
        <div class="line3"></div>
    </div>
    <ul class="nav-links">
        <li><a class="pages" href="{{ route('app.home') }}">Home</a></li>
        <li><a href="{{ route('about') }}">About us</a></li>
        <li><a href="{{ route('investmentplans') }}">Investment Plans</a></li>
        <li><a class="pages" href="{{ route('user.faq') }}">FAQ</a></li>
        <li><a class="pages" href="{{ route('user.terms') }}">Terms</a></li>
        <li>
            <a href="{{ route('user.login') }}">
                Login
            </a>
        </li>
        <li>
            <a href="{{ route('user.register') }}">
                <button style="background-color: rgb(152,204,159); width: 150px" type="button" class="btn btn-primary">Register</button>
            </a>
        </li>
        <li><a href="{{ route('app.home') }}"><i class="fa fa-envelope"></i> info@aievari4.com</a>
        </li>
        <li><a href="{{ route('app.home') }}"><i class="fa fa-phone"></i> +909-654-9805</a></li>
    </ul>
</nav>