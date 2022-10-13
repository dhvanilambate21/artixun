@extends('layouts.app')
@section('main-content')
<section class="we__helps">
        <div class="container">
            <div class="row work__side">
                <div class="col-lg-12">
                    <div class="work__content">
                        <h1>What we've done, <br> and the people we help.</h1>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="tab__dd">
                        <ul class="tab__list">
                            <li class="tab__item"><a class="btn tb active">All</a></li>
                            <li class="tab__item"><a class="btn tb">UI & UX design</a></li>
                            <li class="tab__item"><a class="btn tb">Web development</a></li>
                            <li class="tab__item"><a class="btn tb">Mobile development</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row wdp__cl__work">
                <div class="col-lg-6">
                    <div class="client__work">
                        <div class="work__review__box">
                            <img src="{{ asset('frontend/images/Food-Safety-System.png') }}" alt="" class="img-fluid">
                            <div class="work__review__content">
                                <div class="sub__review__content">
                                    <h6>AI-powered Food Safety System</h6>
                                    <p class="title1 fs6">Web development</p>
                                    <a class="" href="#"><svg class="arrow__45d" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px"
                                            viewBox="0 0 14 14" version="1.1">
                                            <g id="⚙️-Symbols" stroke="none" stroke-width="1" fill="none"
                                                fill-rule="evenodd">
                                                <g id="2.-Buttons/Primary/Primary-default-icon-right"
                                                    transform="translate(-87.000000, -17.000000)" fill="#5438C5">
                                                    <g id="1.-Icons/24px/cross-arrow-Copy"
                                                        transform="translate(87.333333, 17.333333)">
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
                <div class="col-lg-6">
                    <div class="client__work gy-top">
                        <div class="work__review__box">
                            <img src="{{ asset('frontend/images/B2B-Services.png') }}" alt="" class="img-fluid">
                            <div class="work__review__content">
                                <div class="sub__review__content">
                                    <h6>Wedo - B2B Services</h6>
                                    <p class="title1 fs6">Web development</p>
                                    <a class="" href="#"><svg class="arrow__45d" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px"
                                            viewBox="0 0 14 14" version="1.1">
                                            <g id="⚙️-Symbols" stroke="none" stroke-width="1" fill="none"
                                                fill-rule="evenodd">
                                                <g id="2.-Buttons/Primary/Primary-default-icon-right"
                                                    transform="translate(-87.000000, -17.000000)" fill="#5438C5">
                                                    <g id="1.-Icons/24px/cross-arrow-Copy"
                                                        transform="translate(87.333333, 17.333333)">
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
                <div class="col-lg-6">
                    <div class="client__work">
                        <div class="work__review__box">
                            <img src="{{ asset('frontend/images/Oned-jp.png') }}" alt="" class="img-fluid">
                            <div class="work__review__content">
                                <div class="sub__review__content">
                                    <h6>Oned.jp</h6>
                                    <p class="title1 fs6">Web development</p>
                                    <a class="" href="#"><svg class="arrow__45d" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px"
                                            viewBox="0 0 14 14" version="1.1">
                                            <g id="⚙️-Symbols" stroke="none" stroke-width="1" fill="none"
                                                fill-rule="evenodd">
                                                <g id="2.-Buttons/Primary/Primary-default-icon-right"
                                                    transform="translate(-87.000000, -17.000000)" fill="#5438C5">
                                                    <g id="1.-Icons/24px/cross-arrow-Copy"
                                                        transform="translate(87.333333, 17.333333)">
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
                <!-- <div class="col-lg-6">
                    <div class="client__work gy-top">
                        <div class="work__review__box">
                            <img src="images/B2B-Services.png" alt="" class="img-fluid">
                            <div class="work__review__content">
                                <div class="sub__review__content">
                                    <h6>AI-powered Food Safety System</h6>
                                    <p class="title1 fs7">Web development</p>
                                    <a class="" href="#"><svg class="arrow__45d" xmlns="http://www.w3.org/2000/svg"
                                            xmlns:xlink="http://www.w3.org/1999/xlink" width="16px" height="16px"
                                            viewBox="0 0 14 14" version="1.1">
                                            <g id="⚙️-Symbols" stroke="none" stroke-width="1" fill="none"
                                                fill-rule="evenodd">
                                                <g id="2.-Buttons/Primary/Primary-default-icon-right"
                                                    transform="translate(-87.000000, -17.000000)" fill="#5438C5">
                                                    <g id="1.-Icons/24px/cross-arrow-Copy"
                                                        transform="translate(87.333333, 17.333333)">
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
                </div> -->
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
                                <img src="{{ asset('frontend/images/food-docs-logo.png') }}" alt="" class="img-fluid">
                            </div>
                            <p>“Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt
                                nisi.”
                            </p>
                            <div class="sl__user">
                                <div class="user__picture"><img src="{{ asset('frontend/images/user.svg') }}"></div>
                                <p class="f16 font__semibold">Linh Nguyen <span class="font-reguler">- Founder at Carrot
                                        Labs</span>
                                </p>
                            </div>
                        </div>
                        <div class="customer__say second__customer">
                            <div class="company__lg">
                                <img src="{{ asset('frontend/images/food-docs-logo.png') }}" alt="" class="img-fluid">
                            </div>
                            <p>“Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt
                                nisi.”
                            </p>
                            <div class="sl__user">
                                <div class=""><img src="{{ asset('frontend/images/user.svg') }}"></div>
                                <p class="f16 font__semibold">Linh Nguyen <span class="font-reguler">- Founder at Carrot
                                        Labs</span>
                                </p>
                            </div>
                        </div>
                        <div class="customer__say first__customer">
                            <div class="company__lg">
                                <img src="{{ asset('frontend/images/food-docs-logo.png') }}" alt="" class="img-fluid">
                            </div>
                            <p>“Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt
                                nisi.”
                            </p>
                            <div class="sl__user">
                                <div class=""><img src="{{ asset('frontend/images/user.svg') }}"></div>
                                <p class="f16 font__semibold">Linh Nguyen <span class="font-reguler">- Founder at Carrot
                                        Labs</span>
                                </p>
                            </div>
                        </div>
                        <div class="customer__say second__customer">
                            <div class="company__lg">
                                <img src="{{ asset('frontend/images/food-docs-logo.png') }}" alt="" class="img-fluid">
                            </div>
                            <p>“Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt
                                nisi.”
                            </p>
                            <div class="sl__user">
                                <div class=""><img src="{{ asset('frontend/images/user.svg') }}"></div>
                                <p class="f16 font__semibold">Linh Nguyen <span class="font-reguler">- Founder at Carrot
                                        Labs</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection
    