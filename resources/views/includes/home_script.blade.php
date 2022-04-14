<!-- all js here -->

<!-- jquery latest version -->
<script src=" {{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- bootstrap js -->
<script src=" {{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- owl.carousel js -->
<script src=" {{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- stellar js -->
<script src=" {{ asset('assets/js/jquery.stellar.min.js') }}"></script>
<!-- magnific js -->
<script src=" {{ asset('assets/js/magnific.min.js') }}"></script>
<!-- wow js -->
<script src=" {{ asset('assets/js/wow.min.js') }}"></script>
<!-- meanmenu js -->
<script src=" {{ asset('assets/js/jquery.meanmenu.js') }}"></script>
<!-- Form validator js -->
<script src=" {{ asset('assets/js/form-validator.min.js') }}"></script>
<!-- plugins js -->
<script src=" {{ asset('assets/js/plugins.js') }}"></script>
<!-- main js -->
<script src=" {{ asset('assets/js/main.js') }}"></script>



<script type="text/javascript" src="https://files.coinmarketcap.com/static/widget/coinMarquee.js"></script>
<!-- all js here -->

<!-- jquery latest version -->
<script src="{{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
<!-- bootstrap js -->
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<!-- Google Map js -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBceNl50o3BU6LrsIGJxSL9tKKvqBKIeVs"></script>
<script src="{{ asset('assets/js/mapcode.js') }}"></script>
<!-- owl.carousel js -->
<script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
<!-- stellar js -->
<script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
<!-- magnific js -->
<script src="{{ asset('assets/js/magnific.min.js') }}"></script>
<!-- wow js -->
<script src="{{ asset('assets/js/wow.min.js') }}"></script>
<!-- meanmenu js -->
<script src="{{ asset('assets/js/jquery.meanmenu.js') }}"></script>
<!-- Form validator js -->
<script src="{{ asset('assets/js/form-validator.min.js') }}"></script>
<!-- plugins js -->
<script src="{{ asset('assets/js/plugins.js') }}"></script>
<!-- main js -->
<script src="{{ asset('assets/js/main.js') }}"></script>

<script>
    const hamburger = document.querySelector(".hamburger");
    const navLinks = document.querySelector(".nav-links");
    const links = document.querySelectorAll(".nav-links li");

    hamburger.addEventListener('click', () => {
        //Animate Links
        navLinks.classList.toggle("open");
        links.forEach(link => {
            link.classList.toggle("fade");
        });

        //Hamburger Animation
        hamburger.classList.toggle("toggle");
    });
</script>
