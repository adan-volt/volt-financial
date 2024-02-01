<script src="{{ asset('/plugins/jquery.min.js') }}"></script>
<script src="https://polyfill.io/v3/polyfill.min.js?features=IntersectionObserver"></script>
<script src="{{ asset('/plugins/plugins.js') }}"></script>
<script src="{{ asset('/js/functions.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
<!-- Include lazysizes -->
<script src="{{ asset('/js/lazysizes.min.js') }}" async=""></script>

<!-- Initialize Swiper -->
<script>
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min) + min);
}
var swiper = new Swiper(".mySwiper", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 1.5,
    initialSlide: 2,
    watchSlidesVisibility: false,
    updateOnWindowResize: true,
    spaceBetween: 220,
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 75,
        modifier: 3,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});

var swiper = new Swiper(".mySwiperMobile", {
    effect: "coverflow",
    grabCursor: true,
    centeredSlides: true,
    slidesPerView: 1.5,
    initialSlide: 2,
    watchSlidesVisibility: false,
    updateOnWindowResize: true,
    spaceBetween: 75,
    coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 75,
        modifier: 3,
        slideShadows: true,
    },
    pagination: {
        el: ".swiper-pagination",
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
});
</script>
<script>
    $('#modal-privacy').on('hidden.bs.modal', function () {
        if($("#modal_doble").val() == 1){
            $('body').addClass('modal-open');
        }
    });
</script>
<script>
    function modal_doble_active(){
        $("#modal_doble").val(1);
    }

    function modal_doble_inactive(){
        $("#modal_doble").val(0);
    }
</script>