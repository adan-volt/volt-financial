<div class="container-fluid p-0">
    <div class="d-flex flex-column-xs align-items-center justify-content-end">
        <div class="col-lg-5 col-md-6 pl-40 reducing-impact-padding flex-direction-column align-items-start">
            <p class="banner-subtitle mb-2">{{ $pretxt }}</p>
            <h4 class="title-footer reducing-impact-title white-space">{{ $title }}</h4>
            <div class="horizontal-bar-3"></div>

            <div class="d-flex align-items-center">
                <img class="mr-icon-1" src="{{ asset('images/Icons/Roof.svg') }}" alt="">
                <p class="">
                    <strong>{{ $text1 }}</strong>
                </p>
            </div>

            <div class="d-flex align-items-center mt-3">
                <img class="mr-icon-2" src="{{ asset('images/Icons/Subtract.svg') }}" alt="">
                <p class="">
                    <strong>{{ $text2 }}</strong>
                </p>
            </div>

            <div class="d-flex align-items-center mt-3">
                <img class="mr-icon-3" src="{{ asset('images/Icons/Efficient.svg') }}" alt="">
                <p class="">
                    <strong>{{ $text3 }}</strong>
                </p>
            </div>

        </div>
        <div class="col-lg-6 col-md-6 text-center p-0 text-md-right">
            <img data-src={{ $img }} alt="" class="lazyload">
        </div>
    </div><!-- end row -->
</div>