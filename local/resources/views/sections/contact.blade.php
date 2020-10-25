<section class="success" id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2>تماس با ما</h2>
                <hr class="star-primary">
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2">



                @if (isset($mailState))
                <div class="alert alert-success">
                    <strong>{{  $mailState }}</strong>
                </div>
                @endif


                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                <form name="sentMessage" id="contactForm" method="post" novalidate>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>نام</label>
                            <input type="text" class="form-control" placeholder="نام" name="name" id="name" required data-validation-required-message="لطفا نام خود را وارد کنید.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>ایمیل</label>
                            <input type="email" class="form-control" placeholder="ایمیل"  name="email" id="email" required data-validation-required-message="لطفا ایمیل خود را وارد کنید.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>موضوع</label>
                            <input type="tel" class="form-control" placeholder="موضوع" name="subject" id="subject" required data-validation-required-message="لطفا موضوع پیام را وارد کنید.">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="row control-group">
                        <div class="form-group col-xs-12 floating-label-form-group controls">
                            <label>پیام</label>
                            <textarea rows="5" class="form-control" placeholder="پیام" name="message" id="message" required data-validation-required-message="لطفا متن پیام را وارد کنید."></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <br>
                    <div id="success"></div>
                    <div class="row">
                        <div class="form-group col-xs-12">
                            <button type="submit" class="btn btn-default btn-lg">ارسال</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
