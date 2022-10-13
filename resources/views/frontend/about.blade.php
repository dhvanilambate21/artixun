@extends('layouts.app')
@section('main-content')
<div class="container">
            <div class="row art__header__ab">
                <div class="col-lg-4">
                    <div class="ab__header">
                        <h1>We are Artixun.
                        </h1>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="ab__header__content">
                        <p class="f20 ">Artixun Artixun Softwares was founded in 2015 on beautiful city of Rajkot, India. Today we are a fully service digital agency with focused on design, web & mobile development from all over the world to provide a valuable global
                            perspective on our work.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="ab__place">
            <div class="ab__place__row">
                <div class="picture__box">
                    <img src="{{ asset('frontend/images/ab-1.png') }}" alt="">
                </div>
                <div class="picture__box">
                    <img src="{{ asset('frontend/images/ab-3.png') }}" alt="">
                </div>
                <div class="picture__box">
                    <img src="{{ asset('frontend/images/ab-2.png') }}" alt="">
                </div>
                <div class="picture__box">
                    <img src="{{ asset('frontend/images/ab-4.png') }}" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="digital__agency">
        <div class="container">
            <div class="row agency__content">
                <div class="col-lg-5">
                    <div class="digi__agency">
                        <h2>Agency</h2>
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="digi__content">
                        <p class="f20 font-reguler">We provides a one-stop solution for all your intricate business problems. For more than 6 years , we are focused on delivering innovation enabled solutions through the exceptionally productive delivery system and engagement models.
                        </p>
                        <p class="f20 font-reguler">

                            We empower business transformation for startups, enterprises and technology providers by delivering customized, reliable and efficient solutions.
                        </p>
                        <p class="f20 font-reguler">
                            Continually in the process of updating our software skills by adopting new technologies that can perform optimally. We believe in integrating our skills with our client's inputs to achieve desirable results.
                        </p>
                    </div>
                    <a class="read-more d-md-none  d-lg-none" onclick="return false;">
                        <span class="more">Read more <img src="{{ asset('frontend/images/down-arrow.svg') }}"></span>
                        <span class="less">Read less<img src="{{ asset('frontend/images/down-arrow.svg') }}"></span>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <section class="count__team">
        <div class="container">
            <div class="row projeck__art">
                <div class="col-lg-3 col-md-4">
                    <div class="tech__partners">
                        <p class="f18 font__midium">Tech partnership with startup & forward-thinking enterprises since 2017.</p>
                        <h1>6+
                        </h1>
                        <p class="f18 font__semibold">Years of Hard Work</p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-4">
                    <div class="tech__partners">
                        <p class="f18 font__midium">Helping clients around the globe by turning their vision into a tangible Web & app product.</p>
                        <h1>30+</h1>
                        <p class="f18 font__semibold">Projects</p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-3 offset-lg-1 col-md-4">
                    <div class="tech__partners">
                        <p class="f18 font__midium">An in-house team of 8 experts Filled by friendly and professionals handyman.</p>
                        <h1>8+</h1>
                        <p class="f18 font__semibold">People on Board</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="testimonial__area">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="testim__author">
                        <div class="testim__profile">
                            <img class="img-fluid" src="{{ asset('frontend/images/img-author.png') }}" alt="Testimonial Author">
                        </div>
                        <div class="testim__name__block">
                            <h6>Siddharth Ghedia</h6>
                            <p>Founder & CEO</p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="testim__desc">
                        <h6>“Our goal is to build software that gives customer-facing teams at SMBs the ability to create fruitful and enduring relationships with customers.”</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="team">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-md-12">
                    <div class="team__headers">
                        <h2>Meet our amazing team</h2>
                    </div>
                </div>
            </div>
            <div class="amazing">
                <div class="amazing__team">
                    <div class="team__box">
                        <img src="{{ asset('frontend/images/Siddharth-Ghedia.png') }}" alt="" class="img-fluid">
                        <div class="team__user__details">
                            <h6>Siddharth Ghedia</h6>
                            <p class="">Founder & CEO - Full-Stack Developer</p>
                        </div>
                    </div>
                    <div class="team__box">
                        <img src="{{ asset('frontend/images/Yash.png') }}" alt="" class="img-fluid">
                        <div class="team__user__details">
                            <h6>Yash Vakil</h6>
                            <p class="">Game Developer</p>
                        </div>
                    </div>
                    <div class="team__box">
                        <img src="{{ asset('frontend/images/Drashti.png') }}" alt="" class="img-fluid">
                        <div class="team__user__details">
                            <h6>Drashti Talsaniya</h6>
                            <p class="">Business Development Associate</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="join__team">
        <div class="container team__border">
            <div class="row">
                <div class="col-lg-6">
                    <div class="join__hd">
                        <h2>Join our team</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="our__details">
                        <p class="f18 font__regular">We believe it takes great people to make a great product. If you are a web developer, a project manager, a business developer, or a designer who has been in pursuit of a great place to work; you can contact us via email. Savvy
                            and enthusiastic people are always welcome here!</p>
                        <a href="mailto:careers@artixun.com" class="copy__mail">
                            <p class="f20 font__semibold">careers@artixun.com</p><img src="{{ asset('frontend/images/copy-text.svg') }}" alt="">
                 </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection