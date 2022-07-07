<footer class="footer-section">
    <div class="container">
        <div class="footer-content pt-25 pb-5">
            <div class="row">
                <div class="col-xl-4 col-lg-4 mb-50">
                    <div class="footer-widget">
                        <div class="footer-logo">
                            <a href=""><img src="{{ asset('assets/img/tork-logo.png') }}" class="img-fluid" alt="logo"></a>
                        </div>
                        <div class="footer-text">
                            <p>Selfcoder is working in IT services developing software applications</p>
                        </div>
                        <div class="footer-social-icon">
                            <span>Follow us</span>
                            <a href="https://www.facebook.com/TorkInc/" target="_blank"><i class="ri-facebook-fill"></i></a>
                            <a href="https://www.instagram.com/accounts/login/?next=/tork_inc/"><i class="ri-instagram-line" target="_blank"></i></a>
                            <a href="https://twitter.com/Tork_Inc"><i class="ri-twitter-line" target="_blank"></i></a>
                            <a href="https://www.youtube.com/channel/UCdveHCiKWUwmLjzkMQY6GlQ"><i class="ri-youtube-line" target="_blank"></i></a>
                            {{-- <ul class="social-link">
                                <li><a href="https://www.facebook.com/TorkInc/" target="_blank"><i class="ri-facebook-fill"></i></a></li>
                                <li><a href="https://www.instagram.com/accounts/login/?next=/tork_inc/"><i class="ri-instagram-line" target="_blank"></i></a></li>
                                <li><a href="https://twitter.com/Tork_Inc"><i class="ri-twitter-line" target="_blank"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCdveHCiKWUwmLjzkMQY6GlQ"><i class="ri-youtube-line" target="_blank"></i></a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-30">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Useful Links</h3>
                        </div>
                        <ul>
                            <li><a href="{{ route('home2') }}">Home</a></li>
                            <li><a href="#">about</a></li>
                            <li><a href="#">services</a></li>
                            <li><a href="{{ route('user_marketplace') }}">Marketplace</a></li>
                            <li><a href="{{ route('user_showcase') }}">Showcase</a></li>
                            <li><a href="{{ route('user_pricing') }}">Pricing</a></li>
                            <li><a href="#">portfolio</a></li>
                            <li><a href="#">Contact</a></li>
                            <li><a href="{{ route('user_introduction') }}">About us</a></li>
                            <li><a href="#">Our Services</a></li>
                            <li><a href="#">Expert Team</a></li>
                            <li><a href="#">Contact us</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-6 mb-50">
                    <div class="footer-widget">
                        <div class="footer-widget-heading">
                            <h3>Subscribe</h3>
                        </div>
                        <div class="footer-text mb-25">
                            <p>Don’t miss to subscribe to our new feeds.</p>
                        </div>
                        <div class="subscribe-form">
                            <form action="#">
                                <input class="" type="text" placeholder="Email Address">
                                <button>Submit</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright-area">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 text-center text-lg-left">
                    <div class="copyright-text">
                        <p>Copyright &copy; 2020 <a class="text-primary font-weight-bold" href="https://thetork.com/" target="_blank">Tork</a> all right reserved designed and developed</p>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 d-none d-lg-block text-right">
                    <div class="footer-menu">
                        <ul>
                            <li><a href="{{ route('home2') }}">Home</a></li>
                            <li><a href="#">Terms</a></li>
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Policy</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Back to top -->
<div id="thetop"></div>
<div id="backtotop">
    <a href="#" id="scroll">
        <i class="las la-chevron-up"></i>
    </a>
</div>
<!-- /Back to top -->
<style>
.social-link {
    list-style-type: none;
    margin-top: 50px;
    margin-bottom: 25px;
    padding-left: 0;
}
.social-link li {
    display: flex;
    margin: 0 10px;
}

.footer-social-icon a {
    width: 45px;
    height: 45px;
    line-height: 45px;
    border: 1px solid #c7cce6;
    border-radius: 50%;
    /* display: block; */
    color: #ffffff;
    font-size: 18px;
    -webkit-transition: .5s;
    transition: .5s;
    padding: 8px 7px 0px 6px;
    /* right: 8px; */
    margin-right: 7px;
}
.footer-social-icon a:hover, .footer-social-icon a:focus {
    text-decoration: none;
    color: #fff;
    background-color: #4d68fd;
    border-color: #4d68fd;
}
.las{
        margin-top: 10px;
    }
ul {
    margin: 0px;
    padding: 0px;
}
.footer-section {
  background: #151414;
  position: relative;
}
.footer-cta {
  border-bottom: 1px solid #373636;
}
.single-cta i {
  color: #ff1414;
  font-size: 30px;
  float: left;
  margin-top: 8px;
}
.cta-text {
  padding-left: 15px;
  display: inline-block;
}
.cta-text h4 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 2px;
}
.cta-text span {
  color: #757575;
  font-size: 15px;
}
.footer-content {
  position: relative;
  z-index: 2;
}
.footer-pattern img {
  position: absolute;
  top: 0;
  left: 0;
  height: 330px;
  background-size: cover;
  background-position: 100% 100%;
}
.footer-logo {
  margin-bottom: 30px;
}
.footer-logo img {
    max-width: 200px;
}
.footer-text p {
  margin-bottom: 14px;
  font-size: 14px;
      color: #7e7e7e;
  line-height: 28px;
}
.footer-social-icon span {
  color: #fff;
  display: block;
  font-size: 20px;
  font-weight: 700;
  font-family: 'Poppins', sans-serif;
  margin-bottom: 20px;
}
/* .footer-social-icon a {
  color: #fff;
  font-size: 16px;
  margin-right: 15px;
}
.footer-social-icon i {
  height: 40px;
  width: 40px;
  text-align: center;
  line-height: 38px;
  border-radius: 50%;
} */
.facebook-bg{
  background: #3B5998;
}
.twitter-bg{
  background: #55ACEE;
}
.youtube-bg{
  background: #DD4B39;
}
.footer-widget-heading h3 {
  color: #fff;
  font-size: 20px;
  font-weight: 600;
  margin-bottom: 40px;
  position: relative;
}
.footer-widget-heading h3::before {
  content: "";
  position: absolute;
  left: 0;
  bottom: -15px;
  height: 2px;
  width: 50px;
  background: #0330c5d2;
}
.footer-widget ul li {
  display: inline-block;
  float: left;
  width: 50%;
  margin-bottom: 12px;
}
.footer-widget ul li a:hover{
  color: 4d68fd ;
}
.footer-widget ul li a {
  color: #878787;
  text-transform: capitalize;
}
.subscribe-form {
  position: relative;
  overflow: hidden;
}
.subscribe-form input {
  width: 100%;
  padding: 14px 28px;
  background: #2E2E2E;
  border: 1px solid #2E2E2E;
  color: #fff;
}
.subscribe-form button {
    position: absolute;
    right: 0;
    background: #0524d4;
    padding: 13px 20px;
    border: 1px solid #1235cfc0;
    top: 0;
    color: white;
}
.subscribe-form button i {
  color: #fff;
  font-size: 22px;
  transform: rotate(-6deg);
}
.copyright-area{
  background: #202020;
  padding: 25px 0;
}
.copyright-text p {
  margin: 0;
  font-size: 14px;
  color: #878787;
}
.copyright-text p a{
  color: #ff5e14;
}
.footer-menu li {
  display: inline-block;
  margin-left: 20px;
}
.footer-menu li:hover a{
  color: 4d68fd;
}
.footer-menu li a {
  font-size: 14px;
  color: #878787;
}
.footer-section {
    padding: 10px;
    background: #151414;
    position: relative;
    margin-top: 200px;
}

</style>
