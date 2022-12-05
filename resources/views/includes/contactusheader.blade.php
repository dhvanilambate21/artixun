<section class="header__wdp contact-bg">
        <nav class="navbar navbar-expand-lg header__manubar">
            <div class="container">
                <a class="navbar-brand" href="{{ Route('home') }}">Artixun</a>
                <button class="navbar-toggler" id="hummanu" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"> <img src="{{ asset('frontend/images/burger-menu@3x.svg') }}" alt=""> </span>
                  <span class="navbar-toggler-icon close"> <img src="{{ asset('frontend/images/close-d100@3x.svg') }}" alt=""> </span>
        </button>
                <div class="collapse navbar-collapse header__manubox" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto manu__wdp">
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('services') }}">Services</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('work') }}">Works</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('about') }}">About us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ Route('contact') }}">Contact</a>
                        </li>
                    </ul>
                    <div class="header-social-mob co__sideright d-lg-none d-md-block">
                        <ul class="social__icon">
                            <li class="social__list">
                                <a class="" href="https://www.facebook.com/artixun" target="_blank"><img src="{{ asset('frontend/images/facebook.svg') }}" alt=""></a>
                            </li>
                            <li class="social__list">
                                <a class="" href="https://www.instagram.com/" target="_blank"><img src="{{ asset('frontend/images/instagram.svg') }}" alt="Instagram"></a>
                            </li>
                            <li class="social__list">
                                <a class="" href="https://twitter.com/i/flow/login" target="_blank"><img src="{{ asset('frontend/images/twitter.svg') }}" alt="Twitter"></a>
                            </li>
                            <li class="social__list">
                                <a class="" href="https://www.linkedin.com/company/artixunsoftwares/about/" target="_blank"><img src="{{ asset('frontend/images/linkedin.svg') }}" alt=""></a>
                            </li>
                        </ul>
                        <div class="contact_links_ctm">
                            <h6>Email us</h6>
                            <!-- <p><a href="#" class="btn btn-iconic-blue">info@artixun.com
                                  <img src="images/copy-text-d60@3x.svg" alt="Copy File"></a></p> -->
                            <div class="link_main copied">
                                <p class="dev" id="copyText1">info@artixun.com</p>
                                <a class="btn btn-iconic-blue" id="RootNode" title="Copy to Clipboard!"><img src="{{ asset('frontend/images/copy-text-d60@3x.svg') }}" alt="Copy File"></a>
                            </div>
                        </div>
                    </div>
                    <a class="btn f16 font__semibold contact__btn d-lg-block d-md-none d-none" type="button" id="talk" data-bs-toggle="modal" data-bs-target="#letsTalk">Let’s Talk</a>
                    <!-- Modal -->
                    <div class="modal fade" id="letsTalk" tabindex="-1" aria-labelledby="talkModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="container">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="talkModalLabel">
                                            <a class="navbar-brand" href="{{ Route('home') }}">Artixun</a>
                                        </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"><img src="{{ asset('frontend/images/close-d100@3x.svg') }}" alt=""></button>
                                    </div>
                                    <div class="modal-body">
                                        @if($errors->any())
                                            <ul>
                                                @foreach($errors->all() as $error)
                                                    <li>{{$error}}</li>
                                                @endforeach
                                            </ul>
                                        @endif
                                        <form method="POST" action="{{ Route('store') }}" enctype="multipart/form-data">
                                            @csrf
                                            @if(session('msg'))
            <div class="alert alert-success">
                {{ session('msg') }}
            </div>
            @endif
                                        <h1>Got a project? Let's talk.</h1>
                                        <p>It usually takes us up to 24-48h to get back to you.</p>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-12">
                                                <div class="input-group flex-nowrap">
                                                    <input type="text" class="form-control" name="username" placeholder="1. Username" aria-label="Username" aria-describedby="addon-wrapping">
                                                    <span class="input-group-text" id="addon-wrapping"><img
                                                          src="{{ asset('frontend/images/contact/user.svg') }}" alt="User"></span>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="input-group flex-nowrap">
                                                    <input type="email" class="form-control" name="email" aria-label="Username" aria-describedby="addon-wrapping" placeholder="2. Your Email Address">
                                                    <span class="input-group-text" id="addon-wrapping"><img
                                                          src="{{ asset('frontend/images/contact/email.svg') }}" alt="Envelope"></span>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-8 col-md-12">
                                                <div class="input-group flex-nowrap">
                                                    <input type="text" class="form-control" name="project_description" placeholder="3. Tell us about your project" aria-label="Username" aria-describedby="addon-wrapping">
                                                    <span class="input-group-text" id="addon-wrapping"><img
                                                          src="{{ asset('frontend/images/contact/text-file.svg') }}" alt="File"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-8 col-md-12">
                                                <div class="file-upload-block">
                                                    <div class="choose__ks">
                                                        <input type="file" name="doc_file" placeholder="Attach File here" id="file-upload">
                                                        <span class="attach"> <img src="{{ asset('frontend/images/contact/attach.svg') }}">
                                                          <span class="attach__button">Attach File
                                                              here
                                                          </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <label for="name" class="col-form-label">4. I'm
                                                  interested in…</label>

                                                <div class="weekDays-selector">
                                                    <input type="checkbox" name="intrest[]" value="Ui Ux Design" id="uiux" class="weekday" checked>
                                                    <label for="uiux">UI UX Design </label>

                                                    <input type="checkbox" name="intrest[]" value="Development" id="development" class="weekday">
                                                    <label for="development">Development</label>

                                                    <input type="checkbox" name="intrest[]" value="Mobile Development" id="mobile" class="weekday">
                                                    <label for="mobile">Mobile Development</label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-12 col-md-12">
                                                <label for="name" class="col-form-label">5. What is your budget?</label>
                                                <div class="weekDays-selector">
                                                    <div class="form-check">
                                                        <input class="form-check-input" value="1,000 - $3,000" name="budget" type="radio" id="exampleRadios1" checked>
                                                        <label class="form-check-label" for="exampleRadios1">
                                                          $1,000 - $3,000
                                                      </label>

                                                        <input class="form-check-input" value="1,000 - $3,000" name="budget" type="radio" id="exampleRadios2">
                                                        <label class="form-check-label" for="exampleRadios2">
                                                          $1,000 - $3,000
                                                      </label>

                                                        <input class="form-check-input" value="$5,000 - $10,000" name="budget" type="radio" id="exampleRadios3">
                                                        <label class="form-check-label" for="exampleRadios3">
                                                          $5,000 - $10,000
                                                      </label>

                                                        <input class="form-check-input" type="radio" id="exampleRadios4" value="$10,000 and more" name="budget">
                                                        <label class="form-check-label" for="exampleRadios4">
                                                          $10,000 and more
                                                      </label>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <button type="submit" name="store" class="btn btn-submit">Submit <img
                                              src="{{ asset('frontend/images/cross-arrow.svg') }}" alt="Cross Arrow"> </button>
                                    </div>
                                        </form>
                                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </nav>
</section>