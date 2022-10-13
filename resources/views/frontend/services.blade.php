@extends('layouts.app')
@section('main-content')
<section class="about__bg">
<div class="container">
            <div class="row g-0 art__header__ab service_bnr-area">
                <div class="col-lg-12">
                    <div class="ab__header">
                        <h1>Services: What we do</h1>
                    </div>
                    <div class="ab__header__content service_bnr_content">
                        <p class="f18">Building digital products from ideation to its final delivery. Whether it is a basic landing page or a high-traffic portals, we are always in!</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="service_banner_ctm">
            <img class="img-fluid" src="{{ asset('frontend/images/service-img-web@2x.png') }}" alt="Service Banner">
        </div>
    </section>
</section>

    <section class="our_work_ctm">
        <div class="container">
            <div class="row g-0">
                <div class="offset-lg-1 col-lg-11">
                    <a href="{{ Route('work') }}" class="btn btn-work-ctm"> <img class="work_arrow_right" src="{{ asset('frontend/images/ic_Oval_Arrow_Right@3x.svg') }}" alt="Arrow Right">View our Work</a>
                </div>
            </div>
        </div>
    </section>

    <section class="services_boxes_ctm">
        <div class="container">
            <div class="row g-0">
                <div class="offset-lg-1 col-lg-11">
                    <div class="section_title_ctm">
                        <h2>Services We Can <br> Help You With</h2>
                    </div>
                </div>
            </div>
            <div class="row box_bg_ctm">
                <div class="offset-lg-1 col-lg-5">
                    <div class="f20 service_box_top">
                        <span>01</span>
                        <h6>Product Design - UI/UX</h6>
                        <p class="f16">Design that makes most of your business needs. Users are tickled pink of everything we produce. We're proud of our design, it is our ace.</p>
                    </div>
                    <div class="service_box_middle">
                        <h6 class="f20">What we do</h6>
                        <ul>
                            <li>Interface design</li>
                            <li>Corporate & Marketing Website</li>
                            <li>E-commerce</li>
                            <li>Apps for iOS & Android</li>
                        </ul>
                    </div>
                    <div class="service_box_bottom">
                        <h6>Areas of expertise in UI/UX</h6>
                        <div class="service_ui_ux">
                            <ul class="bottom_ux">
                                <li>UX Flow & Site map</li>
                                <li>Moodboarding</li>
                                <li>Design system</li>
                            </ul>
                            <ul class="bottom_ui">
                                <li>Design UI screens</li>
                                <li>Wireframing & Prototype</li>
                                <li>Development Handoff</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service_media">
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media_title f16">Make your product stand out from the crowd</h6>
                                <p>Crafting the visual hierarchy, screen layouts, depth, proper use of whitespace, and an icon set is is what distinguishes one product from crowded markets.</p>
                            </div>
                            <div class="img-block top">
                                <img class="" src="{{ asset('frontend/images/service/Cup-32@3x.svg') }}" alt="Toggle">
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media_title f16">Develop a coherent visual style</h6>
                                <p>All great user interfaces are based on documented design systems, set of pretty independent screens, but a consistent visual system that's intuitive to use</p>
                            </div>
                            <div class="img-block middle">
                                <img class="" src="{{ asset('frontend/images/service/visual-eye-32@3x.svg') }}" alt="Mouse">
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media_title f16">Keeping in touch with the future</h6>
                                <p>Products that succeed in the long run are not only deeply rooted in conventions, but also responsive to the current trends.</p>
                            </div>
                            <div class="img-block bottom">
                                <img class="" src="{{ asset('frontend/images/service/time-32@3x.svg') }}" alt="Zap">
                            </div>
                        </div>

                        <div class="media">
                            <div class="media-body">
                                <h6 class="media_title f16">Reduce development costs</h6>
                                <p>Lower future investment costs with a scalable design system and minimizes services from the outset.</p>
                            </div>
                            <div class="img-block last">
                                <img class="" src="{{ asset('frontend/images/service/money-32@3x.svg') }}" alt="Zap">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services_boxes_ctm">
        <div class="container">
            <div class="row g-0 box_bg_ctm">
                <div class="offset-lg-1 col-lg-5">
                    <div class="f20 service_box_top">
                        <span>02</span>
                        <h6>Front-end development</h6>
                        <p class="f16">We create a Pixel-perfect responsive layout with component-based scalable development, using modern JS frameworks, a living style guide, maintainable CSS, and an animation library.</p>
                    </div>
                    <div class="service_box_middle">
                        <h6 class="f20">What we do</h6>
                        <ul>
                            <li>FIgma/PSD to HTML CSS Bootstrap</li>
                            <li>Front-end React development</li>
                        </ul>
                    </div>
                    <div class="service_box_bottom">
                        <h6>Tools & technologies we use</h6>
                        <div class="service_ui_ux">
                            <ul class="bottom_ux">
                                <li>Sass & Bootstrap</li>
                                <li>React JS</li>
                                <li>Angular JS</li>
                            </ul>
                            <ul class="bottom_ui">
                                <li>Vue JS</li>
                                <li>Gulp & Git</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service_media">
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media_title f16">Mobile Friendly Responsive development</h6>
                                <p>Responsive development of desktop screens to a smaller version for smartphones or tablets which easy access to information to mobile users</p>
                            </div>
                            <div class="img-block top">
                                <img class="" src="{{ asset('frontend/images/service/mobile-32 @3x.svg') }}" alt="Toggle">
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media_title f16">Pixel-Perfect Development.</h6>
                                <p>we code a website to match the web design pixel by pixel in close collaboration with the designer and front-end developer</p>
                            </div>
                            <div class="img-block middle">
                                <img class="" src="{{ asset('frontend/images/service/Ruler-32@3x.svg') }}" alt="Mouse">
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media_title f16">Clean code & Scalable Components System.</h6>
                                <p>It helps to reduce significant Development duration and easy scale and modified updated design.</p>
                            </div>
                            <div class="img-block bottom">
                                <img class="" src="{{ asset('frontend/images/service/Scale-32@3x.svg') }}" alt="Zap">
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media_title f16">Stunning animations</h6>
                                <p>Whether it's subtle interactions that improve the UX, or complex animations.</p>
                            </div>
                            <div class="img-block last">
                                <img class="" src="{{ asset('frontend/images/service/animation-32@3x.svg') }}" alt="Zap">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services_boxes_ctm">
        <div class="container">
            <div class="row g-0 box_bg_ctm">
                <div class="offset-lg-1 col-lg-5">
                    <div class="f20 service_box_top">
                        <span>03</span>
                        <h6>Back-end development</h6>
                        <p class="f16">Our dedicated back-end development team builds RESTFul API, scalable architecture, and third-party integrations. Creating solid yet scalable solutions for your business.</p>
                    </div>
                    <div class="service_box_middle">
                        <h6 class="f20">What we do</h6>
                        <ul>
                            <li>API Development and Integration</li>
                            <li>Mobile App Back-End Development</li>
                            <li>Web Applications & Custom Development</li>
                        </ul>
                    </div>
                    <div class="service_box_bottom">
                        <h6>Tools & technologies we use</h6>
                        <div class="service_ui_ux">
                            <ul class="bottom_ux">
                                <li>React</li>
                                <li>JavaScript</li>
                                <li>PHP Laravel</li>
                            </ul>
                            <ul class="bottom_ui">
                                <li>Node.js</li>
                                <li>MongoDB</li>
                                <li>Elasticsearch</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service_media">
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media_title f16">Latest Technology</h6>
                                <p>We render high-quality backend development services for each client by implementing a set of innovative and time-tested technologies.</p>
                            </div>
                            <div class="img-block middle">
                                <img class="" src="{{ asset('frontend/images/service/zap-32@3x.svg') }}" alt="Toggle">
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media_title f16">Optimize or scale your app</h6>
                                <p>Extend your app’s functionalities to fit your users’ needs and adjust your app’s performance to the latest standards and guidelines.</p>
                            </div>
                            <div class="img-block top">
                                <img class="" src="{{ asset('frontend/images/service/Scale-32@3x.svg') }}" alt="Mouse">
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media_title f16">End-to-end Security</h6>
                                <p>Our team follows the latest security protocols for keeping your data and software products safe.</p>
                            </div>
                            <div class="img-block bottom">
                                <img class="" src="{{ asset('frontend/images/service/security-32@3x.svg') }}" alt="Zap">
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media_title f16">Maintain your web product’s legacy</h6>
                                <p>Maintenance is one of the key factors to your app’s high user satisfaction. We maintain & scale your product, fix bugs and, if possible, we also propose solutions to tweak your product’s performance.</p>
                            </div>
                            <div class="img-block last">
                                <img class="" src="{{ asset('frontend/images/service/code-32@3x.svg') }}" alt="Zap">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="services_boxes_ctm">
        <div class="container">
            <div class="row g-0 box_bg_ctm">
                <div class="offset-lg-1 col-lg-5">
                    <div class="f20 service_box_top">
                        <span>04</span>
                        <h6>Mobile app development</h6>
                        <p>One-stop solution for your mobile app design to development is taken care of from a concept to the finished product.</p>
                    </div>
                    <div class="service_box_middle">
                        <h6 class="f20">What we do</h6>
                        <ul>
                            <li>App for android device</li>
                            <li>Cross platform React-Native app</li>
                        </ul>
                    </div>
                    <div class="service_box_bottom">
                        <h6>Tools & technologies we use</h6>
                        <div class="service_ui_ux">
                            <ul class="bottom_ux">
                                <li>React-Native</li>
                            </ul>
                            <ul class="bottom_ui">
                                <li>Java</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="service_media">
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media_title f16">Create a mobile app from scratch</h6>
                                <p>Our team will help you plan, design and develop your mobile app to fit your business’ and user need.</p>
                            </div>
                            <div class="img-block top">
                                <img class="" src="{{ asset('frontend/images/service/idea-32@3x.svg') }}" alt="Toggle">
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media_title f16">Cross-platform mobile app development</h6>
                                <p>It utilizes one code base for two platforms, iOS and Android. With cross-platform technologies, you are able to speed up your development and launch.</p>
                            </div>
                            <div class="img-block middle">
                                <img class="" src="{{ asset('frontend/images/service/cross-platform-32@3x.svg') }}" alt="Mouse">
                            </div>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h6 class="media_title f16">Clean code & Scalable Components System.</h6>
                                <p>It helps to reduce significant Development duration and easy scale and modified updated design.</p>
                            </div>
                            <div class="img-block bottom">
                                <img class="" src="{{ asset('frontend/images/service/Components-32@3x.svg') }}" alt="Zap">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="benifit_working_ctm">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-12">
                    <div class="section_title_ctm">
                        <h2>Benefits of
                            <br> working with us</h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card mb_ctm">
                        <img src="{{ asset('frontend/images/service/roket-40@3x.svg') }}" class="card-img-top" alt="Card-img">
                        <div class="card-body">
                            <h6 class="card-title">Your Full-Services agency</h6>
                            <p class="card-text">Any solution your digital business needs, we’re on it: interface design prior to development and technical support.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card mb_ctm">
                        <img src="{{ asset('frontend/images/service/team-40@3x.svg') }}" class="card-img-top" alt="card-img">
                        <div class="card-body">
                            <h6 class="card-title">Dedicated team approach</h6>
                            <p class="card-text">No hiring pain needed, you’ll get control over the workflow and speed up product delivery.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card mb_ctm">
                        <img src="{{ asset('frontend/images/service/project-40@3x.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Project based approach</h6>
                            <p class="card-text">The classic model of delivery — you specify the desired product, timeframe and budget, and we will take care of everything else.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="{{ asset('frontend/images/service/Collaborative-40@3x.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Collaborative effort</h6>
                            <p class="card-text">Wherever you are in the world, you’ll feel like we’re right around the corner.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="{{ asset('frontend/images/service/quality-40@3x.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Focus on quality result</h6>
                            <p class="card-text">Our expertise allows us to deliver high-quality software development services that exceed our customers’ expectations.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card">
                        <img src="{{ asset('frontend/images/service/dollars-40@3x.svg') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h6 class="card-title">Transparency cost</h6>
                            <p class="card-text">Just like we stick to a fixed budget or time-based approach we stay within a set time and framework.</p>
                        </div>
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
                                <img src="{{ asset('frontend/images/food-docs-logo.png') }}" alt="" class="img-fluid">
                            </div>
                            <p>“Aliqua id fugiat nostrud irure ex duis ea quis id quis ad et. Sunt qui esse pariatur duis deserunt mollit dolore cillum minim tempor enim. Elit aute irure tempor cupidatat incididunt sint deserunt ut voluptate aute id deserunt
                                nisi.”
                            </p>
                            <div class="sl__user">
                                <div class="user__picture"><img src="{{ asset('frontend/images/user.svg') }}"></div>
                                <p class="f16 font__semibold">Linh Nguyen <span class="font-reguler">- Founder at Carrot Labs</span>
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
                                <p class="f16 font__semibold">Linh Nguyen <span class="font-reguler">- Founder at Carrot Labs</span>
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
                                <p class="f16 font__semibold">Linh Nguyen <span class="font-reguler">- Founder at Carrot Labs</span>
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
