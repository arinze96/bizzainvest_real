<!-- all js here -->

<!-- jquery latest version -->
<!-- bootstrap js -->
<script type="tet/javascript" src=" {{ asset('assets/js/particles/particles.js') }}"></script>
<script type="tet/javascript" src=" {{ asset('assets/js/particles/app.js') }}"></script>
<script src=" {{ asset('assets/js/vendor/jquery-1.12.4.min.js') }}"></script>
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

<script>
</script>


<script>
    
    let ran1 = Math.round(Math.random() * 24);
    let ran2 = Math.round(Math.random() * 24);
    let ran3 = Math.round(Math.random() * 24);
    let ran4 = Math.round(Math.random() * 24);
    let ran5 = Math.round(Math.random() * 24);
    let ran6 = Math.round(Math.random() * 24);
    let ran7 = Math.round(Math.random() * 24);
    let ran8 = Math.round(Math.random() * 24);
    let ran9 = Math.round(Math.random() * 24);
    let ran10 = Math.round(Math.random() * 24);
    let ran11 = Math.round(Math.random() * 24);
    let ran12 = Math.round(Math.random() * 24);
    let users = ['khalifa', 'jenny', 'Admond sayhel', 'Jonshon', 'Hopper', 'jessica', 'Bruno', 'Hernandez', 'zhada','josh', 'khabib','kremalina', 'louis', 'lorence', 'janet', 'perry', 'laquisha', 'jeremy', 'kaleb', 'romanus', 'Gerald', 'udena', 'Ariana'];

    document.getElementById('j1').innerHTML =  users[ran1];
    document.getElementById('j2').innerHTML =  users[ran2];
    document.getElementById('j3').innerHTML =  users[ran3];
    document.getElementById('j4').innerHTML =  users[ran4];
    document.getElementById('j5').innerHTML =  users[ran5];
    document.getElementById('j6').innerHTML =  users[ran6];
    document.getElementById('j7').innerHTML =  users[ran7];
    document.getElementById('j8').innerHTML =  users[ran8];
    document.getElementById('j9').innerHTML =  users[ran9];
    document.getElementById('j10').innerHTML =  users[ran10];
    document.getElementById('j11').innerHTML =  users[ran11];
    document.getElementById('j12').innerHTML =  users[ran12];
    // user.value =  users[0];
</script>
