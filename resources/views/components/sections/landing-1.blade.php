<div class="container-fluid p-0">
    <div class="d-flex flex-column-xs align-items-center justify-content-between">
        <div class="col-lg-7 p-0">
            <div class="text-container-1">
                <p class="pretxt mb-2">{{ $pretxt }}</p>
                <h3 class="title">{{ $title }}</h3>
                <div class="horizontal-bar-2"></div>
                <h6 class="text-landing-500 mb-3">{{ $subtitle }}</h6>
                <span class="subtitle-sm mb-3">{{ $title_sm }}</span>

                <div class="d-flex align-items-start">
                    <img src={{ $bullet }} class="bullet" alt="">
                    <p class="text-landing mb-4">
                        <strong class="strong">{{ $boldtxt1 }}</strong>
                        {{ $text1 }}
                    </p>
                </div>

                <div class="d-flex align-items-start">
                    <img src={{ $bullet }} class="bullet" alt="">
                    <p class="text-landing mb-4">
                        <strong class="strong">{{ $boldtxt2 }}</strong>
                        {{ $text2 }}
                    </p>
                </div>

                <div class="d-flex align-items-start">
                    <img src={{ $bullet }} class="bullet" alt="">
                    <p class="text-landing mb-4">
                        <strong class="strong">{{ $boldtxt3 }}</strong>
                        {{ $text3 }}
                    </p>
                </div>

                <div class="d-flex align-items-start">
                    <img src={{ $bullet }} class="bullet" alt="">
                    <p class="text-landing mb-4">
                        <strong class="strong">{{ $boldtxt4 }}</strong>
                        {{ $text4 }}
                    </p>
                </div>

                <div class="d-flex align-items-start">
                    <img src={{ $bullet }} class="bullet" alt="">
                    <p class="text-landing">
                        <strong class="strong">{{ $boldtxt5 }}</strong>
                        {{ $text5 }}
                    </p>
                </div>
            </div>
        </div>
        <div class="col-lg-5 h-1615 p-0">
            <img class="img-fluid h-100 object-fit-cover mr-0" src={{ $img }} alt="">
        </div>
    </div>
</div>
