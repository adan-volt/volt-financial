<footer>
    <div class="section-lg bg-light-footer vw-100">
        <div class="container-fluid">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4 col-md-12 text-center text-md-left footer-padding">
                    <h4 class="title-footer white-space">{{ $text_title_footer }}</h4>
                    <div class="horizontal-bar"></div>
                    <h3 class="title-footer">@lang('translations.Reach'):</h3>
                    {{-- <p class="margin-top-20">@lang('translations.Phone'): (786) 744-7703</p> --}}
                    <p class="footer-contact-info margin-top-20">@lang('translations.Phone'): (786) 744-7703</p>
                    <p class="footer-contact-info margin-top-10">@lang('translations.New customers'): info@voltsolarenergy.com</p>
                    <p class="footer-contact-info margin-top-10">@lang('translations.Customer Support'): support@voltsolarenergy.com</p>
                    <p class="footer-contact-info margin-top-10">@lang('translations.Address'): 801 Brickell Ave. Suite 817 Miami, FL 33131</p>
                    <ul class="list-inline margin-top-20 icon-size-sm">
                        <li><a href="https://www.facebook.com/voltenrgy" target="_blank"><i class="fab fa-facebook text-blue-2"></i></a></li>
                        <li><a href="https://www.instagram.com/voltsolarenergy/" target="_blank"><i class="fab fa-instagram text-blue-2"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/volt-solar-energy/" target="_blank"><i class="fab fa-linkedin-in text-blue-2"></i></a></li>
                        <li><a href="https://twitter.com/VoltSolarEnergy" target="_blank"><i class="fa-brands fa-x-twitter text-blue-2"></i></a></li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-12 vw-100 text-center text-md-right d-none-sm d-none-md">
                    <img data-src="{{ asset('images/Footer/image-footer.png') }}" alt="" class="lazyload">
                </div>
            </div><!-- end row -->
        </div><!-- end container -->
    </div>
    <div class="section-xs bg-light-footer">
        <div class="container text-center">
            <p>@lang('translations.All Rights reserved Volt © :year', ['year' => now()->format('Y')])</p>
        </div><!-- end container -->
    </div>
</footer>
