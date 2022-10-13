@extends('layouts.app')
@section('main-content')
<div class="row g-0 bs__innovations">
                <div class="container">
                <div class="col-lg-10">
                    <div class="innovation">
                        <h1>Best innovations<br /> and technology to startups</h1>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="innovation__contant">
                        <p class="f18">Elegant web applications and strong backend systems for today's top businesses.</p>
                        <a href="{{ Route('work') }}" class="btn view__btn f16 font__semibold ">View our works<img src="{{ asset('frontend/images/cross-arrow.svg') }}"
                class="btn__arrow" alt="#"></a>
                    </div>
                </div>
            </div>
            <div class="row g-0">
                <div class="wdp__scroll__arrow">
                    <img src="{{ asset('frontend/images/Scroll-explore.svg') }}" alt="">
                    <P>Scroll to explore</P>
                </div>
            </div>
        </div>
    </section>
    <section class="digital__product">
        <div class="container">
            <div class="row g-0 wdp__buid__dusign">
                <div class="col-lg-10">
                    <div class="buid__dusign__header">
                        <h2>We design, build,<br /> innovate your digital product</h2>
                    </div>
                </div>
            </div>
            <div class="row g-0 wdp__innovate d-md-block d-sm-none d-none">
                <div class="col-lg-12">
                    <div class="wdp__digital__list">
                        <div class="digital__box">
                            <div class="digital__picture">
                                <img src="{{ asset('frontend/images/for-startup-img.png') }}" alt="#">
                            </div>
                            <div class="digital__content">
                                <h5>Startup</h5>
                                <p class="f16 font__semibold">We work with you from scratch, build your products and help you grow.</p>
                            </div>
                        </div>
                        <div class="digital__box">
                            <div class="digital__picture">
                                <img src="{{ asset('frontend/images/for-enterprise-img.png') }}" alt="#">
                            </div>
                            <div class="digital__content">
                                <h5>Enterprise</h5>
                                <p class="f16 font__semibold">We can help with software development with faster and improved business out growth.</p>
                            </div>
                        </div>
                        <div class="digital__box">
                            <div class="digital__picture">
                                <img src="{{ asset('frontend/images/for-agency-img.png') }}" alt="#">
                            </div>
                            <div class="digital__content">
                                <h5>Agency</h5>
                                <p class="f16 font__semibold">We provide the resources to accomplish work with heavy workloads</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0 wdp__innovate d-block  d-sm-block d-md-none">
                <div class="col-lg-12">
                    <div class="wdp__digital__list digi__slider">
                        <div class="digital__box">
                            <div class="digital__picture">
                                <img src="{{ asset('frontend/images/for-startup-img.png') }}" alt="#">
                            </div>
                            <div class="digital__content">
                                <h5>Startup</h5>
                                <p class="f16 font__semibold">We work with you from scratch, build your products and help you grow.</p>
                            </div>
                        </div>
                        <div class="digital__box">
                            <div class="digital__picture">
                                <img src="{{ asset('frontend/images/for-enterprise-img.png') }}" alt="#">
                            </div>
                            <div class="digital__content">
                                <h5>Enterprise</h5>
                                <p class="f16 font__semibold">We can help with software development with faster and improved business out growth.</p>
                            </div>
                        </div>
                        <div class="digital__box">
                            <div class="digital__picture">
                                <img src="{{ asset('frontend/images/for-agency-img.png') }}" alt="#">
                            </div>
                            <div class="digital__content">
                                <h5>Agency</h5>
                                <p class="f16 font__semibold">We provide the resources to accomplish work with heavy workloads</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="wdp__services">
        <div class="container">
            <div class="row g-0 service__header">
                <div class="col-lg-12">
                    <div class="services">
                        <h2>Our Services</h2>
                        <p>We play to our strengths: Ideating, creating and shipping<br /> wonderful things on the internet.</p>
                    </div>
                </div>
            </div>


            <div class="row g-0  process__view d-md-block d-none">
                <div class="col-md-12">
                    <ul class="steps__services nav nav-tabs" id="myTab" role="tablist">
                        <li class="process__list" role="presentation">
                            <p class="title1">01</p>
                            <a class="active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">
                                <p class="title1">Product - UI/UX Design</p>
                            </a>
                        </li>
                        <li class="process__list" role="presentation">
                            <p class="title1">02</p>
                            <a class="" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                <p class="title1">Front-end development
                                </p>
                            </a>
                        </li>
                        <li class="process__list" role="presentation">
                            <p class="title1">03</p>
                            <a class="" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                <p class="title1">Back-end development
                                </p>
                            </a>
                        </li>
                        <li class="process__list" role="presentation">
                            <p class="title1">04</p>
                            <a class="" id="tab4-tab" data-bs-toggle="tab" data-bs-target="#tab-4" type="button" role="tab" aria-controls="tab-4" aria-selected="false">
                                <p class="title1">Mobile app development
                                </p>
                            </a>
                        </li>
                        <li class="process__list" role="presentation">
                            <p class="title1">05</p>
                            <a class="" id="tab5-tab" data-bs-toggle="tab" data-bs-target="#tab-5" type="button" role="tab" aria-controls="tab-5" aria-selected="false">
                                <p class="title1">Solutions we provide</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>




            <div class="tab-content d-md-block d-none" id="myTabContent1">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="row g-lg-0 exp__ofproduct">
                        <div class="col-lg-5 offset-g-1 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Product - UI/UX Design for web & mobile apps</p>
                                <p class="f16">Design that makes most of your business needs. Users are tickled pink of everything we produce. We're proud of our design, it is our ace.
                                </p>
                                <p class="f16">
                                    Build successful & usable products thanks to impeccable UX & UI design services
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-g-1 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Areas of expertise</p>
                                <ul class="expertice__list">
                                    <li class="expertice__item f16">UX Architecture - Site map & User Flow</li>
                                    <li class="expertice__item f16">Moodboarding</li>
                                    <li class="expertice__item f16">Craft a style guide or design system</li>
                                    <li class="expertice__item f16">Design full UI of screens of Design</li>
                                    <li class="expertice__item f16">Wireframing & Prototype</li>
                                    <li class="expertice__item f16">Development Handoff</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="row g-lg-0 exp__ofproduct">
                        <div class="col-lg-5 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Tab 2 Product - UI/UX Design for web & mobile apps</p>
                                <p class="f16">Design that makes most of your business needs. Users are tickled pink of everything we produce. We're proud of our design, it is our ace.
                                </p>
                                <p class="f16">
                                    Build successful & usable products thanks to impeccable UX & UI design services
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Areas of expertise</p>
                                <ul class="expertice__list">
                                    <li class="expertice__item f16">UX Architecture - Site map & User Flow</li>
                                    <li class="expertice__item f16">Moodboarding</li>
                                    <li class="expertice__item f16">Craft a style guide or design system</li>
                                    <li class="expertice__item f16">Design full UI of screens of Design</li>
                                    <li class="expertice__item f16">Wireframing & Prototype</li>
                                    <li class="expertice__item f16">Development Handoff</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                    <div class="row g-lg-0 exp__ofproduct">
                        <div class="col-lg-5 offset-g-1 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Tab-3 Product - UI/UX Design for web & mobile apps</p>
                                <p class="f16">Design that makes most of your business needs. Users are tickled pink of everything we produce. We're proud of our design, it is our ace.
                                </p>
                                <p class="f16">
                                    Build successful & usable products thanks to impeccable UX & UI design services
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-g-1 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Areas of expertise</p>
                                <ul class="expertice__list">
                                    <li class="expertice__item f16">UX Architecture - Site map & User Flow</li>
                                    <li class="expertice__item f16">Moodboarding</li>
                                    <li class="expertice__item f16">Craft a style guide or design system</li>
                                    <li class="expertice__item f16">Design full UI of screens of Design</li>
                                    <li class="expertice__item f16">Wireframing & Prototype</li>
                                    <li class="expertice__item f16">Development Handoff</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab4-tab">
                    <div class="row g-lg-0 exp__ofproduct">
                        <div class="col-lg-5 offset-g-1 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Tab-4 Product - UI/UX Design for web & mobile apps</p>
                                <p class="f16">Design that makes most of your business needs. Users are tickled pink of everything we produce. We're proud of our design, it is our ace.
                                </p>
                                <p class="f16">
                                    Build successful & usable products thanks to impeccable UX & UI design services
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-g-1 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Areas of expertise</p>
                                <ul class="expertice__list">
                                    <li class="expertice__item f16">UX Architecture - Site map & User Flow</li>
                                    <li class="expertice__item f16">Moodboarding</li>
                                    <li class="expertice__item f16">Craft a style guide or design system</li>
                                    <li class="expertice__item f16">Design full UI of screens of Design</li>
                                    <li class="expertice__item f16">Wireframing & Prototype</li>
                                    <li class="expertice__item f16">Development Handoff</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="tab5-tab">
                    <div class="row g-lg-0 exp__ofproduct">
                        <div class="col-lg-5 offset-g-1 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Tab-5 Product - UI/UX Design for web & mobile apps</p>
                                <p class="f16">Design that makes most of your business needs. Users are tickled pink of everything we produce. We're proud of our design, it is our ace.
                                </p>
                                <p class="f16">
                                    Build successful & usable products thanks to impeccable UX & UI design services
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-g-1 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Areas of expertise</p>
                                <ul class="expertice__list">
                                    <li class="expertice__item f16">UX Architecture - Site map & User Flow</li>
                                    <li class="expertice__item f16">Moodboarding</li>
                                    <li class="expertice__item f16">Craft a style guide or design system</li>
                                    <li class="expertice__item f16">Design full UI of screens of Design</li>
                                    <li class="expertice__item f16">Wireframing & Prototype</li>
                                    <li class="expertice__item f16">Development Handoff</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-0 process__view d-md-none d-block">
                <div class="col-md-12">
                    <ul class="steps__services nav nav-tabs" id="myTab" role="tablist">
                        <li class="process__list" role="presentation">
                            <a class="active" id="home-tab1" data-bs-toggle="tab" data-bs-target="#home1" type="button" role="tab" aria-controls="home" aria-selected="true">
                                <p class="title1">Design</p>
                            </a>
                        </li>
                        <li class="process__list" role="presentation">
                            <a class="" id="profile-tab2" data-bs-toggle="tab" data-bs-target="#profile2" type="button" role="tab" aria-controls="profile" aria-selected="false">
                                <p class="title1">Front-end</p>
                            </a>
                        </li>
                        <li class="process__list" role="presentation">
                            <a class="" id="contact-tab3" data-bs-toggle="tab" data-bs-target="#contact3" type="button" role="tab" aria-controls="contact" aria-selected="false">
                                <p class="title1">Back-end</p>
                            </a>
                        </li>
                        <li class="process__list" role="presentation">
                            <a class="" id="tab4-tab4" data-bs-toggle="tab" data-bs-target="#tab-44" type="button" role="tab" aria-controls="tab-4" aria-selected="false">
                                <p class="title1">Mobile app</p>
                            </a>
                        </li>
                        <li class="process__list" role="presentation">
                            <a class="" id="tab5-tab5" data-bs-toggle="tab" data-bs-target="#tab-55" type="button" role="tab" aria-controls="tab-5" aria-selected="false">
                                <p class="title1">Solutions</p>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="tab-content d-md-none d-block" id="myTabContent2">
                <div class="tab-pane fade show active" id="home1" role="tabpanel" aria-labelledby="home-tab1">
                    <div class="row g-lg-0 exp__ofproduct">
                        <div class="col-lg-5 offset-g-1 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Product - UI/UX Design for web & mobile apps</p>
                                <p class="f16">Design that makes most of your business needs. Users are tickled pink of everything we produce. We're proud of our design, it is our ace.
                                </p>
                                <p class="f16">
                                    Build successful & usable products thanks to impeccable UX & UI design services
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-g-1 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Areas of expertise</p>
                                <ul class="expertice__list">
                                    <li class="expertice__item f16">UX Architecture - Site map & User Flow</li>
                                    <li class="expertice__item f16">Moodboarding</li>
                                    <li class="expertice__item f16">Craft a style guide or design system</li>
                                    <li class="expertice__item f16">Design full UI of screens of Design</li>
                                    <li class="expertice__item f16">Wireframing & Prototype</li>
                                    <li class="expertice__item f16">Development Handoff</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="profile2" role="tabpanel" aria-labelledby="profile-tab2">
                    <div class="row g-lg-0 exp__ofproduct">
                        <div class="col-lg-5 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Tab 2 Product - UI/UX Design for web & mobile apps</p>
                                <p class="f16">Design that makes most of your business needs. Users are tickled pink of everything we produce. We're proud of our design, it is our ace.
                                </p>
                                <p class="f16">
                                    Build successful & usable products thanks to impeccable UX & UI design services
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Areas of expertise</p>
                                <ul class="expertice__list">
                                    <li class="expertice__item f16">UX Architecture - Site map & User Flow</li>
                                    <li class="expertice__item f16">Moodboarding</li>
                                    <li class="expertice__item f16">Craft a style guide or design system</li>
                                    <li class="expertice__item f16">Design full UI of screens of Design</li>
                                    <li class="expertice__item f16">Wireframing & Prototype</li>
                                    <li class="expertice__item f16">Development Handoff</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="contact3" role="tabpanel" aria-labelledby="contact-tab3">
                    <div class="row g-lg-0 exp__ofproduct">
                        <div class="col-lg-5 offset-g-1 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Tab-3 Product - UI/UX Design for web & mobile apps</p>
                                <p class="f16">Design that makes most of your business needs. Users are tickled pink of everything we produce. We're proud of our design, it is our ace.
                                </p>
                                <p class="f16">
                                    Build successful & usable products thanks to impeccable UX & UI design services
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-g-1 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Areas of expertise</p>
                                <ul class="expertice__list">
                                    <li class="expertice__item f16">UX Architecture - Site map & User Flow</li>
                                    <li class="expertice__item f16">Moodboarding</li>
                                    <li class="expertice__item f16">Craft a style guide or design system</li>
                                    <li class="expertice__item f16">Design full UI of screens of Design</li>
                                    <li class="expertice__item f16">Wireframing & Prototype</li>
                                    <li class="expertice__item f16">Development Handoff</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab-44" role="tabpanel" aria-labelledby="tab4-tab4">
                    <div class="row g-lg-0 exp__ofproduct">
                        <div class="col-lg-5 offset-g-1 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Tab-4 Product - UI/UX Design for web & mobile apps</p>
                                <p class="f16">Design that makes most of your business needs. Users are tickled pink of everything we produce. We're proud of our design, it is our ace.
                                </p>
                                <p class="f16">
                                    Build successful & usable products thanks to impeccable UX & UI design services
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-g-1 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Areas of expertise</p>
                                <ul class="expertice__list">
                                    <li class="expertice__item f16">UX Architecture - Site map & User Flow</li>
                                    <li class="expertice__item f16">Moodboarding</li>
                                    <li class="expertice__item f16">Craft a style guide or design system</li>
                                    <li class="expertice__item f16">Design full UI of screens of Design</li>
                                    <li class="expertice__item f16">Wireframing & Prototype</li>
                                    <li class="expertice__item f16">Development Handoff</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="tab-55" role="tabpanel" aria-labelledby="tab5-tab5">
                    <div class="row g-lg-0 exp__ofproduct">
                        <div class="col-lg-5 offset-g-1 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Tab-5 Product - UI/UX Design for web & mobile apps</p>
                                <p class="f16">Design that makes most of your business needs. Users are tickled pink of everything we produce. We're proud of our design, it is our ace.
                                </p>
                                <p class="f16">
                                    Build successful & usable products thanks to impeccable UX & UI design services
                                </p>
                            </div>
                        </div>
                        <div class="col-lg-5 offset-g-1 col-md-6">
                            <div class="wdp__ser__slid">
                                <p class="f20 font__semibold">Areas of expertise</p>
                                <ul class="expertice__list">
                                    <li class="expertice__item f16">UX Architecture - Site map & User Flow</li>
                                    <li class="expertice__item f16">Moodboarding</li>
                                    <li class="expertice__item f16">Craft a style guide or design system</li>
                                    <li class="expertice__item f16">Design full UI of screens of Design</li>
                                    <li class="expertice__item f16">Wireframing & Prototype</li>
                                    <li class="expertice__item f16">Development Handoff</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <section class="wdp__work">
        <div class="container">
            <div class="row wdp__cl__work">
                <div class="col-lg-6 col-md-6">
                    <div class="client__work">
                        <div class="work__review">
                            <h2>Work</h2>
                            <p class="f18">Our Clients and The work we done</p>
                        </div>
                        <div class="work__review__box">
                            <img src="images/Food-Safety-System.png" alt="" class="img-fluid">
                            <div class="work__review__content">
                                <div class="sub__review__content">
                                    <h6>AI-powered Food Safety System</h6>
                                    <p class="title1 fs6">Web development</p>
                                    <a class="" href="#"><svg class="arrow__45d" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px" viewBox="0 0 14 14"
                      version="1.1">
                      <g id="⚙️-Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="2.-Buttons/Primary/Primary-default-icon-right"
                          transform="translate(-87.000000, -17.000000)" fill="#5438C5">
                          <g id="1.-Icons/24px/cross-arrow-Copy" transform="translate(87.333333, 17.333333)">
                            <path
                              d="M13.3333333,0 L13.3333333,10.7134209 L11.0358721,10.7134209 L11.0357798,3.92111551 L1.6245478,13.3333333 L0,11.7087934 L9.41114994,2.29648552 L2.61991697,2.29746544 L2.61991697,0 L13.3333333,0 Z"
                              id="Combined-Shape" />
                          </g>
                        </g>
                      </g>
                    </svg>
                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="client__work">
                        <div class="work__review__box g-l">
                            <img src="images/B2B-Services.png" alt="" class="img-fluid">
                            <div class="work__review__content">
                                <div class="sub__review__content">
                                    <h6>Wedo - B2B Services</h6>
                                    <p class="title1 fs6">Web development</p>
                                    <a class="" href="#"><svg class="arrow__45d" xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px" viewBox="0 0 14 14"
                      version="1.1">
                      <g id="⚙️-Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="2.-Buttons/Primary/Primary-default-icon-right"
                          transform="translate(-87.000000, -17.000000)" fill="#5438C5">
                          <g id="1.-Icons/24px/cross-arrow-Copy" transform="translate(87.333333, 17.333333)">
                            <path
                              d="M13.3333333,0 L13.3333333,10.7134209 L11.0358721,10.7134209 L11.0357798,3.92111551 L1.6245478,13.3333333 L0,11.7087934 L9.41114994,2.29648552 L2.61991697,2.29746544 L2.61991697,0 L13.3333333,0 Z"
                              id="Combined-Shape" />
                          </g>
                        </g>
                      </g>
                    </svg>
                  </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="good__staff">
                        <a class="wdp__staff" href="#">
                            <p class="title1">More Good Stuff
                                <svg class="arrow__45d" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px" viewBox="0 0 14 14" version="1.1">
                  <g id="⚙️-Symbols" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                    <g id="2.-Buttons/Primary/Primary-default-icon-right" transform="translate(-87.000000, -17.000000)"
                      fill="#5438C5">
                      <g id="1.-Icons/24px/cross-arrow-Copy" transform="translate(87.333333, 17.333333)">
                        <path
                          d="M13.3333333,0 L13.3333333,10.7134209 L11.0358721,10.7134209 L11.0357798,3.92111551 L1.6245478,13.3333333 L0,11.7087934 L9.41114994,2.29648552 L2.61991697,2.29746544 L2.61991697,0 L13.3333333,0 Z"
                          id="Combined-Shape" />
                      </g>
                    </g>
                  </g>
                </svg>
                            </p>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="sl__bg">
        <div class="container">
            <div class="row amazing__title">
                <div class="col-lg-6">
                    <div class="cs__zing">
                        <p>TESTIMONIALS</p>
                        <h4>Hear what our amazing customers say</h4>
                    </div>
                </div>
            </div>
            <div class="row amazing__review">
                <div class="col-lg-11">
                    <div class="sl__zing">
                        <div class="customer__say first__customer">
                            <div class="company__lg">
                                <img src="images/food-docs-logo.png" alt="" class="img-fluid">
                            </div>
                            <p>“Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt
                                nisi.”
                            </p>
                            <div class="sl__user">
                                <div class="user__picture"><img src="images/user.svg"></div>
                                <p class="f16 font__semibold">Linh Nguyen <span class="font-reguler">- Founder at Carrot Labs</span>
                                </p>
                            </div>
                        </div>
                        <div class="customer__say second__customer">
                            <div class="company__lg">
                                <img src="images/food-docs-logo.png" alt="" class="img-fluid">
                            </div>
                            <p>“Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt
                                nisi.”
                            </p>
                            <div class="sl__user">
                                <div class=""><img src="images/user.svg"></div>
                                <p class="f16 font__semibold">Linh Nguyen <span class="font-reguler">- Founder at Carrot Labs</span>
                                </p>
                            </div>
                        </div>
                        <div class="customer__say first__customer">
                            <div class="company__lg">
                                <img src="images/food-docs-logo.png" alt="" class="img-fluid">
                            </div>
                            <p>“Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt
                                nisi.”
                            </p>
                            <div class="sl__user">
                                <div class=""><img src="images/user.svg"></div>
                                <p class="f16 font__semibold">Linh Nguyen <span class="font-reguler">- Founder at Carrot Labs</span>
                                </p>
                            </div>
                        </div>
                        <div class="customer__say second__customer">
                            <div class="company__lg">
                                <img src="images/food-docs-logo.png" alt="" class="img-fluid">
                            </div>
                            <p>“Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt
                                nisi.”
                            </p>
                            <div class="sl__user">
                                <div class=""><img src="images/user.svg"></div>
                                <p class="f16 font__semibold">Linh Nguyen <span class="font-reguler">- Founder at Carrot Labs</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection