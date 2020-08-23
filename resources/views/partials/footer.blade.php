<footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <address>
                        <p>@lang('site.address1')</p>
                        <p class="mb-4">@lang('site.address2')</p>
                        <div class="d-flex align-items-center">
                            <p class="mr-4 mb-0 ml-2 text-right">@lang('site.company-number')</p>
                            <a href="mailto:info@medica.com" class="footer-link">info@medica.com</a>
                        </div>
                        <div class="d-flex align-items-center">
                            <p class="mr-4 mb-0 ml-2">+249 92 333 3290</p>
                            <a href="mailto:ateeg1999@gmail.com" class="footer-link">ateeg1999@gmail.com</a>
                        </div>
                    </address>
                    <div class="social-icons">
                        <h6 class="footer-title font-weight-bold">
                            @lang('site.social')
                        </h6>
                        <div class="d-flex">
                            <a href="#"><i class="mdi mdi-github-circle"></i></a>
                            <a href="#"><i class="mdi mdi-facebook-box"></i></a>
                            <a href="#"><i class="mdi mdi-twitter"></i></a>
                            <a href="#"><i class="mdi mdi-dribbble"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <h6 class="footer-title">@lang('site.social')</h6>
                            <ul class="list-footer">
                                <li><a href="#" class="footer-link">@lang('site.home')</a></li>
                                <li><a href="#" class="footer-link">@lang('site.about')</a></li>
                                <li><a href="#" class="footer-link">@lang('site.services')</a></li>
                                <li><a href="#" class="footer-link">@lang('site.team')</a></li>
                                <li><a href="#" class="footer-link">@lang('site.contact-us')</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <h6 class="footer-title" style="justify-content: flex-end">@lang('site.our-products')</h6>
                            <ul class="list-footer">
                                <li><a href="#" class="footer-link">@lang('site.tele')</a></li>
                                <li><a href="#" class="footer-link">@lang('site.slamtk')</a></li>
                                {{-- <li><a href="#" class="footer-link">@lang('site.implance')</a></li> --}}
                                <li><a href="#" class="footer-link">@lang('site.mshfana')</a></li>
                                {{-- <li><a href="#" class="footer-link">@lang('site.icu')</a></li>
                                <li><a href="#" class="footer-link">@lang('site.image-sys')</a></li>
                                <li><a href="#" class="footer-link">@lang('site.traning')</a></li> --}}
                            </ul>
                        </div>
                        {{-- <div class="col-sm-4">
                            <h6 class="footer-title">Company</h6>
                            <ul class="list-footer">
                                <li><a href="#" class="footer-link">Partners</a></li>
                                <li><a href="#" class="footer-link">Investors</a></li>
                                <li><a href="#" class="footer-link">Partners</a></li>
                                <li><a href="#" class="footer-link">FAQ</a></li>
                            </ul>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                <div class="d-flex align-items-center">
                    <img src="{{ asset('site/images/logo.svg') }}" alt="logo" class="mr-3">
                    <p class="mb-0 text-small pt-1">© 2019-2020 <a href="#" class="text-white" target="_blank">@lang('site.dev')</a>. @lang('site.rights').</p>
                </div>
                <div>
                    {{-- <div class="d-flex">
                        <a href="#" class="text-small text-white mx-2 footer-link">Privacy Policy </a>          
                        <a href="#" class="text-small text-white mx-2 footer-link">Customer Support </a>
                        <a href="#" class="text-small text-white mx-2 footer-link">Careers </a>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</footer>