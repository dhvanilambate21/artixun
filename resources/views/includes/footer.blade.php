<footer class="footer__art">
        <div class="container">
            <div class="row g-0 wdp__footer">
                <div class="col-lg-3 col-md-6 col-sm-6 col-6">
                    <div class="art__people">
                        <h1>Hello.</h1>
                    </div>
                    <div class="atl__mail">
                        <h6 class="title_v1">Get in touch
                        </h6>
                        <a class="art__info" href="mailto:info@artixun.com">
                            <p class="f18 font__midium">info@artixun.com</p>
                        </a>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-6">
                    <div class="ftr__manu">
                        <p class="title1">Menu</p>
                        <ul class="footer__manu__list">
                            <li class="ftr__list__item"><a class="sub_text f16 font__midium" href="{{ Route('home') }}">Home</a></li>
                            <li class="ftr__list__item"><a class="sub_text f16 font__midium" href="{{ Route('services') }}">Services</a></li>
                            <li class="ftr__list__item"><a class="sub_text f16 font__midium" href="{{ Route('work') }}">Works</a></li>
                            <li class="ftr__list__item"><a class="sub_text f16 font__midium" href="{{ Route('about') }}">About us</a></li>
                            <li class="ftr__list__item"><a class="sub_text f16 font__midium" href="{{ Route('contact') }}">Contacts</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="cteate__idea">
                        <h4>Have an idea? Let’s digitalize it.</h4>
                        <a href="{{ Route('contact') }}" class="btn view__btn f16 font__semibold ">Contact us<img src="{{ asset('frontend/images/cross-arrow.svg') }}"
                class="btn__arrow" alt="#"></a>
                    </div>
                </div>
            </div>
            <div class="row g-0 sub__footer">
                <div class="col-lg-4 col-md-4 col-sm-6 order-md-1 order-1">
                    <div class="co__sideleft">
                        <div class="co__profile">
                            <img src="{{ asset('frontend/images/download-icon.svg') }}" alt="">
                        </div>
                        <div class="co__info__pdf">
                            <p class="f16 font__semibold">Download Company Deck</p>
                            <p class="f12">PDF, 3MB</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-12 order-md-2 order-3">
                    <div class="co__side">
                        <p class="f14 font__midium">Copyright © 2022 — All rights reserved</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 order-md-3 order-2">
                    <div class="co__sideright">
                        <ul class="social__icon">
                            <li class="social__list">
                                <a class="" href="https://www.facebook.com/artixun" target="_blank"><img src="{{ asset('frontend/images/facebook.svg') }}" alt="Facebook"></a>
                            </li>
                            <li class="social__list">
                                <a class="" href="https://www.instagram.com/" target="_blank"><img src="{{ asset('frontend/images/instagram.svg') }}" alt="Instagram"></a>
                            </li>
                            <li class="social__list">
                                <a class="" href="https://twitter.com/i/flow/login" target="_blank"><img src="{{ asset('frontend/images/twitter.svg') }}" alt="Twitter"></a>
                            </li>
                            <li class="social__list">
                                <a class="" href="https://www.linkedin.com/company/artixunsoftwares/about/" target="_blank"><img src="{{ asset('frontend/images/linkedin.svg') }}" alt="Linkedin"></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>