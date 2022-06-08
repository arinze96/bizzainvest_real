<!-- favicon -->
<link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/just1.jpg') }}">

<!-- all css here -->

<!-- bootstrap v3.3.6 css -->
<link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
<!-- owl.carousel css -->
<link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/owl.transitions.css') }}">
<!-- Animate css -->
<link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
<!-- meanmenu css -->
<link rel="stylesheet" href="{{ asset('assets/css/meanmenu.min.css') }}">
<!-- font-awesome css -->
<link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/themify-icons.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
<!-- magnific css -->
<link rel="stylesheet" href="{{ asset('assets/css/magnific.min.css') }}">
<!-- style css -->
<link rel="stylesheet" href="{{ asset('assets/style.css') }}">
<!-- responsive css -->
<link rel="stylesheet" href="{{ asset('assets/css/responsive.css') }}">

<!-- modernizr css -->
<script src="{{ asset('assets/js/vendor/modernizr-2.8.3.min.js') }}"></script>
<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/625dffd57b967b11798b52f8/1g0viunm4';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->

<style>
    *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;

    }
    #particles-js {
            background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.7)), url('/assets/images/tt.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            width: 100%;
            height: 100vh;
            /* background-color: green; */
    }
    #caption{
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        color: white
    }

    nav {
        height: 9rem;
        width: 100vw;
        background-color: #131418;
        box-shadow: 0 3px 20px rgba(0, 0, 0, 0.2);
        display: flex;
        position: fixed;
        z-index: 10;
    }

    /*Styling logo*/
    .logo {
        padding: 1vh 1vw;
        text-align: center;
    }

    .logo img {
        /* height: 5rem;
    width: 5rem; */
    }

    /*Styling Links*/
    .nav-links {
        display: flex;
        list-style: none;
        width: 88vw;
        padding: 0 0.7vw;
        justify-content: space-evenly;
        align-items: center;
        text-transform: uppercase;
    }

    .nav-links li a {
        text-decoration: none;
        margin: 0 0.7vw;
        color: white;
    }

    .nav-links li a:hover {
        color: white;
    }

    .nav-links li {
        position: relative;
    }

    .nav-links li a::before {
        content: "";
        display: block;
        height: 3px;
        width: 0%;
        background-color: white;
        position: absolute;
        transition: all ease-in-out 250ms;
        margin: 0 0 0 10%;
    }

    .nav-links li a:hover::before {
        width: 80%;
    }

    /*Styling Buttons*/
    .login-button {
        background-color: transparent;
        border: 1.5px solid #f2f5f7;
        border-radius: 2em;
        padding: 0.6rem 0.8rem;
        margin-left: 2vw;
        font-size: 1rem;
        cursor: pointer;

    }

    .login-button:hover {
        color: #131418;
        background-color: #f2f5f7;
        border: 1.5px solid #f2f5f7;
        transition: all ease-in-out 350ms;
    }

    .join-button {
        color: #131418;
        background-color: #61DAFB;
        border: 1.5px solid #61DAFB;
        border-radius: 2em;
        padding: 0.6rem 0.8rem;
        font-size: 1rem;
        cursor: pointer;
    }

    .join-button:hover {
        color: #f2f5f7;
        background-color: transparent;
        border: 1.5px solid #f2f5f7;
        transition: all ease-in-out 350ms;
    }

    /*Styling Hamburger Icon*/
    .hamburger div {
        width: 30px;
        height: 3px;
        background: #f2f5f7;
        margin: 5px;
        transition: all 0.3s ease;
    }

    .hamburger {
        display: none;
    }

    @media screen and (min-device-width: 1200px) and (max-device-width: 1600px) and (-webkit-min-device-pixel-ratio: 1) {
        .nav-links {
            justify-content: flex-end;
        }
    }

    /*Stying for small screens*/
    @media screen and (max-width: 800px) {
        nav {
            position: fixed;
            z-index: 3;
        }

        .hamburger {
            display: block;
            position: absolute;
            cursor: pointer;
            right: 5%;
            top: 50%;
            transform: translate(-5%, -50%);
            z-index: 2;
            transition: all 0.7s ease;
        }

        .nav-links {
            position: fixed;
            background: #131418;
            /* justify-content: flex-end; */
            height: 100vh;
            width: 100%;
            flex-direction: column;
            clip-path: circle(50px at 90% -20%);
            -webkit-clip-path: circle(50px at 90% -10%);
            transition: all 1s ease-out;
            pointer-events: none;
        }

        .nav-links.open {
            clip-path: circle(1000px at 90% -10%);
            -webkit-clip-path: circle(1000px at 90% -10%);
            pointer-events: all;
        }

        .nav-links li {
            opacity: 0;
        }

        .nav-links li:nth-child(1) {
            transition: all 0.5s ease 0.2s;
        }

        .nav-links li:nth-child(2) {
            transition: all 0.5s ease 0.4s;
        }

        .nav-links li:nth-child(3) {
            transition: all 0.5s ease 0.6s;
        }

        .nav-links li:nth-child(4) {
            transition: all 0.5s ease 0.7s;
        }

        .nav-links li:nth-child(5) {
            transition: all 0.5s ease 0.8s;
        }

        .nav-links li:nth-child(6) {
            transition: all 0.5s ease 0.9s;
            margin: 0;
        }

        .nav-links li:nth-child(7) {
            transition: all 0.5s ease 1s;
            margin: 0;
        }

        li.fade {
            opacity: 1;
        }
    }

    /*Animating Hamburger Icon on Click*/
    .toggle .line1 {
        transform: rotate(-45deg) translate(-5px, 6px);
    }

    .toggle .line2 {
        transition: all 0.7s ease;
        width: 0;
    }

    .toggle .line3 {
        transform: rotate(45deg) translate(-5px, -6px);
    }
</style>
