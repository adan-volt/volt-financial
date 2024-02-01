<!-- Modal Contact -->
<div class="modal modal-slide-up fade" id="modal-form-contact" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="bg-form-color">
                <div class="container pt-3 pb-1">
                    <div class="row p-2">
                        <div class="col-2 d-flex justify-content-start m-0">
                            <button type="button" class="close" onclick="modal_doble_inactive()" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="col-9 title-form-contact m-0">
                            <p class="title-hero-grey">{{__("translations.Contact Volt Financial")}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="div-bg-form-contact">
                <h6 class="text-title-tv text-center">{{__("translations.Subtitle Form Contact")}}<span class="blue-dot">.</span></h6>
                {{-- <p class="title-hero-grey mt-4">{{__("translations.Your Information")}}</p> --}}
		        <div class="row justify-content-around mt-5">
                    <div class="col-lg-5 col-sm-12">
                        <form class="form-contact" action="/contact-form" method="POST" class="w-100">
                            @csrf
                            <p class="your-information mb-3">{{ __("translations.Your information") }}</p>
                            <div class="mb-4">
                                <input type="text" class="form-control bg-input-form border-radius-2px" name="firstName" placeholder="{{__("translations.First Name")}}" required>
                            </div>
                            <div class="mb-4">
                                <input type="text" class="form-control bg-input-form border-radius-2px" name="lastName" placeholder="{{__("translations.Last Name")}}" required>
                            </div>
                            <div class="mb-4">
                                <input type="email" class="form-control bg-input-form border-radius-2px" name="email" placeholder="{{__("translations.Email Address")}}" required>
                            </div>
                            <div class="mb-4">
                                <input type="phone" class="form-control bg-input-form border-radius-2px" name="phone" placeholder="{{__("translations.Phone Number")}}" required>
                            </div>
                            <p class="text-form-tv">{{__("translations.warning-text")}} <a class="text-black-2" data-toggle="modal" data-target="#modal-privacy" href="#">{{__("translations.Privacy Policy")}}</a> {{__("translations.statement-consent")}}</p>
                            <div class="mb-4 mt-4 form-check">
                                <input type="checkbox" class="form-check-input" name="checkboxAgree" id="exampleCheck1" required>
                                <label class="form-check-label" for="exampleCheck1">{{__("translations.I agree")}}<span class="blue-dot">.</span></label>
                            </div>
                            <div class="">
                                <button type="submit" class="btn btn-font button-form">{{__("translations.Submit Contact Form")}}</button>
                            </div>
                        </form>
                    </div>
                    <div class="col-lg-5 col-sm-12 reach-us-at-cf">
                        <h3 class="title-footer">@lang('translations.Reach'):</h3>
                        {{-- <p class="margin-top-20">@lang('translations.Phone'): (786) 744-7703</p> --}}
                        <p class="footer-contact-info margin-top-20">@lang('translations.Phone'): (786) 744-7703</p>
                        <p class="footer-contact-info margin-top-10">@lang('translations.New customers'): info@voltsolarenergy.com</p>
                        <p class="footer-contact-info margin-top-10">@lang('translations.Customer Support'): support@voltsolarenergy.com</p>
                        <p class="footer-contact-info margin-top-10">@lang('translations.Address'): 801 Brickell Ave. Suite 817 Miami, FL 33131</p>
                        <ul class="list-inline margin-top-20">
                            <li><a href="https://www.facebook.com/voltenrgy" target="_blank"><i class="fab fa-facebook text-blue-2"></i></a></li>
                            <li><a href="https://www.instagram.com/voltsolarenergy/" target="_blank"><i class="fab fa-instagram text-blue-2"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/volt-solar-energy/" target="_blank"><i class="fab fa-linkedin-in text-blue-2"></i></a></li>
                            <li><a href="https://twitter.com/VoltSolarEnergy" target="_blank"><i class="fa-brands fa-x-twitter text-blue-2"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Modal Contact -->