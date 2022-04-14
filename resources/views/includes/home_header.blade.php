<nav>
    <div class="logo">
        {{-- <img src="logo.svg" alt="Logo Image"> --}}
        <a href="{{ route('app.home') }}"><img src="{{ asset('assets/img/logo/BizzaInvest-02.png') }}" alt="" width="120px" height="300px" /></a>
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
                <button style="background-color: orange; width: 150px" type="button" class="btn btn-primary">Login</button>
            </a>
        </li>
        <li>
            <a href="{{ route('user.register') }}">
                <button style="background-color: orange; width: 150px" type="button" class="btn btn-primary">Register</button>
            </a>
        </li>
    </ul>
</nav>