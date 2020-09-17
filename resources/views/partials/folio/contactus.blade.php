<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url({{ asset('folio/assets/img/overlay-bg.jpg') }})">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      @lang('site.send-message')
                    </h5>
                  </div>
                  <div>
                    <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="@lang('site.name')" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validate"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="email" id="email" placeholder="@lang('site.email')" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validate"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" class="form-control" name="subject" id="subject" placeholder="@lang('site.subject')" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                            <div class="validate"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <div class="form-group">
                            <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="@lang('site.message')"></textarea>
                            <div class="validate"></div>
                          </div>
                        </div>
                        <div class="col-md-12 text-center mb-3">
                          <div class="loading">Loading</div>
                          <div class="error-message"></div>
                          <div class="sent-message">Your message has been sent. Thank you!</div>
                        </div>
                        <div class="col-md-12 text-center">
                          <button type="submit" class="button button-a button-big button-rouded">@lang('site.send')</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                        {{ $contactus->title }}
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                        {!!$contactus->description!!}
                    </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span> @lang('site.address1')</li>
                      <li><span class="ion-ios-telephone"></span> @lang('site.company-phone')</li>
                      <li><span class="ion-email"></span> @lang('site.company-email')</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>