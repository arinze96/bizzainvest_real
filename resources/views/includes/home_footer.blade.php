<!-- Start Footer Area -->
<footer class="footer1">
    <div class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-5 col-xs-12">
                    <div class="footer-content logo-footer">
                        <div class="footer-head">
                            <div class="footer-logo">
                                <a class="footer-black-logo" href="{{ route('app.home') }}"><img class="img2"
                                        src=" {{ asset('assets/images/btz.png') }}" alt="" width="250" height="400"></a>
                            </div>
                            <p>
                            <p>Bitazza Invest company works in the sphere of investment. We are legally registered
                                Worldwide.
                                The clients cooperating with us conclude the agreement on placement of the capitals then
                                they
                                draw interest from profit.
                            </p>
                            <div class="subs-feilds">
                                <div class="suscribe-input">
                                    <input type="email" class="email form-control width-80" id="sus_email"
                                        placeholder="Type Email">
                                    <button type="submit" id="sus_submit" class="add-btn">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-4 col-sm-3 col-xs-12">
                    <div class="footer-content">
                        <div class="footer-head">
                            <h4>Services Link</h4>
                            <ul class="footer-list">
                                <li><a href="{{ route('app.home') }}">Home</a></li>
                                <li><a href="{{ route('about') }}">About us</a></li>
                                <li><a href="{{ route('investmentplans') }}">Investment Plans</a></li>
                            </ul>
                            <ul class="footer-list hidden-sm">
                                <li><a href="{{ route('user.register') }}">Register</a></li>
                                <li><a href="{{ route('user.terms') }}">Terms & Condition</a></li>
                                <li><a href="{{ route('user.contact') }}">Contact us </a></li>
                                <li><a href="" data-toggle="modal" data-target="#exampleModalLong">Certificate of incoporation </a></li>
                                
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- end single footer -->
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <div class="footer-content last-content">
                        <div class="footer-head">
                            <h4>Information</h4>
                            <div class="footer-contacts">
                                <p><span>Tel :</span> +447760784971</p>
                                <p><span>Email :</span> SUPPORT@BITAZZAINVEST.COM</p>
                                <p><span>Location :</span> House- 65/4, London</p>
                            </div>
                            <div class="footer-icons">
                                <ul>
                                    <li>
                                        <img style="width:50px;"
                                            src="https://iqiglobalfxjuwai.com/assets/images/home/logo/btc.png">
                                    </li>
                                    <li>
                                        <img style="width:50px;"
                                            src="https://iqiglobalfxjuwai.com/assets/images/home/logo/perfectmoney.png">

                                    </li>
                                    <li>
                                        <img style="width:50px;"
                                            src="https://iqiglobalfxjuwai.com/assets/images/home/logo/payeer.png">
                                    </li>
                                    <li>
                                        {{-- <img style="width:50px;" src="https://iqiglobalfxjuwai.com/assets/images/home/logo/litecoin.png" > --}}
                                    </li>
                                    <li>
                                        {{-- <img style="width:50px;" src="https://iqiglobalfxjuwai.com/assets/images/home/logo/bitcoincash.png" > --}}
                                    </li>
                                    <li>
                                        <img style="width:50px;"
                                            src="https://iqiglobalfxjuwai.com/assets/images/home/logo/ethereum.png">
                                    </li>
                                </ul>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        

        
    </div>
    <div class="footer-area-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <div class="copyright">
                        <p>
                            Copyright © 2022
                            <a href="{{ route('app.home') }}">Bitazza INVEST</a> All Rights Reserved
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer area -->
