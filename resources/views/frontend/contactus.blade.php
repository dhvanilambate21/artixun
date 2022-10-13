@extends('layouts.app')
@section('main-content')
<section class="contact_banner_ctm contact-bg">
        <div class="container">
            <div class="row g-0">
                <div class="col-md-12">
                    <h1>Hey! Let's Talk </h1>
                    <p>We're excited to hear about your projects… or at least grab a coffee together.</p>
                </div>

            </div>
        </div>
    </section>

    <section class="contact_links_area contact-bg">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-4 col-md-6">
                    <div class="contact_links_ctm">
                        <h6>Interested in a project?</h6>
                        <div class="link_main">
                            <p><a data-bs-toggle="modal" data-bs-target="#letsTalk" class="btn-iconic-blue">Go to the form<img src="{{ asset('frontend/images/cross-arrow-blue.svg') }}"
                                    alt="cross arrow"></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact_links_ctm">
                        <h6>Email us</h6>
                        <div class="link_main copied">
                            <p class="dev" id="copyText1">info@artixun.com</p>
                            <a class="btn btn-iconic-blue" id="RootNode" title="Copy to Clipboard!"><img src="{{ asset('frontend/images/copy-text-d60@3x.svg') }}" alt="Copy File"></a>
                        </div>
                        <!-- <p><a class="btn btn-iconic-blue">info@artixun.com
                            <a class="btn" ><img src="images/copy-text-d60@3x.svg" alt="Copy File">Copy</a></a>
                        </p> -->

                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact_links_ctm">
                        <h6>Careers</h6>
                        <div class="link_main copied">
                            <p class="dev" id="copyText2">careers@artixun.com</p>
                            <a class="btn btn-iconic-blue" id="RootNode2" title="Copy to Clipboard!"><img src="{{ asset('frontend/images/copy-text-d60@3x.svg') }}" alt="Copy File"></a>

                        </div>
                        <!-- <p><a href="#" class="btn-iconic-blue">careers@artixun.com<img src="images/copy-text-d60@3x.svg"
                                    alt="Copy File"></a></p> -->
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ofc_details_ctm contact-bg">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 align-self-center">
                    <div class="ofc_address_ctm">
                        <h3>Office</h3>
                        <p>1014 - The Spire 2, 150 Feet Ring Rd, Sheetal Park, Rajkot, Gujarat 360007</p>
                        <div class="link_main">
                            <p><a href="https://goo.gl/maps/hyi1tNT6UuJZAf4V8" target="_blank" class="btn btn-iconic-blue">Get Direction<img src="images/cross-arrow-blue.svg"
                                    alt="arrow"> </a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ofc_views_ctm">
                        <img class="img-fluid" src="{{ asset('frontend/images/contact/ofc-views.png') }}" alt="Artixun">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="faq_ctm">
        <div class="container">
            <div class="section_title_ctm">
                <h2>Frequently <br> Asked Questions</h2>
            </div>
            <div class="row g-0">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <p> What's required from us to get started Project?</p>
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p> Design Brief is the prerequisite with which any engagement needs to start. Once the design discussion is done, we will move to the next stage of the functionality of design.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <p>What's the turnaround time for starting a new project?</p>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p> Design Brief is the prerequisite with which any engagement needs to start. Once the design discussion is done, we will move to the next stage of the functionality of design.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <p>How long it will take to get an estimate from you?</p>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p> Design Brief is the prerequisite with which any engagement needs to start. Once the design discussion is done, we will move to the next stage of the functionality of design.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                <p>How much do projects usually cost?</p>
                            </button>
                        </h2>
                        <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p> Design Brief is the prerequisite with which any engagement needs to start. Once the design discussion is done, we will move to the next stage of the functionality of design.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                                <p>Can we start the design without User flow and wireframes?</p>
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p> Design Brief is the prerequisite with which any engagement needs to start. Once the design discussion is done, we will move to the next stage of the functionality of design.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <p>Can't find answer?</p>
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <p> Design Brief is the prerequisite with which any engagement needs to start. Once the design discussion is done, we will move to the next stage of the functionality of design.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    @endsection