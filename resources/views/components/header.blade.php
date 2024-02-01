<div class="header sticky-autohide">
    <div class="container-fluid header-padding">
        <!-- Logo -->
        <div class="header-logo">
            <a href="/">
                <img data-src="{{ asset('/images/Logos/Logo.png') }}" alt="" class="lazyload">
            </a>   
        </div>
        <!-- Menu -->
        <div class="header-menu">
            <ul class="nav">
                <li class="nav-item menu-header-mobile d-none-lg mb-2">
                    <a class="nav-link">@lang('translations.Menu')</a>
                </li>
                <li class="nav-item nav-item-header">
                    <a class="nav-link nldt" href="/about-us">@lang('translations.About Us')</a>
                </li>
                <li class="nav-item nav-item-header">
                    <a class="nav-link nldt" href="#" onclick="modal_doble_active()" data-toggle="modal" data-target="#modal-form-contact">@lang('translations.Contact')</a>
                </li>
                <li class="nav-item nav-item-header login-item d-none-lg">
                    <a class="mt-6 link-login" target="_blank" href="https://my.voltsolarenergy.com">
                        <img data-src="{{ asset('/images/Icons/icon.svg') }}" alt="" class="mr-6 lazyload">
                    Login
                    </a>
                </li>
                <li class="nav-item nav-item-header d-none-lg">
                    <a class="nav-link button-circle button-circle-white-3" href="/locale/{{ App::currentLocale() == 'en' ? 'es' : 'en' }}">
                        <form action="/locale/{{ App::currentLocale() == 'en' ? 'es' : 'en' }}" method="GET">
                            <button type="submit" class="text-center text-white">
                                {{ App::currentLocale() == "en" ? "ES" : "EN" }}
                            </button>
                        </form>
                    </a>
                </li>
            </ul>
        </div>

        <!-- Menu Extra -->
        <div class="header-menu-extra d-none-sm">
            <ul class="list-inline d-flex justify-content-center align-items-center">
                <li class="nav-item login-item desktop-buy-now-my-voit mr-20 mt-6">
                    <a class="mt-6" target="_blank" href="https://my.voltsolarenergy.com">
                        <img data-src="{{ asset('/images/Icons/icon.svg') }}" alt="" class="mr-6 lazyload">
                    Login
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link button-circle button-circle-white-3" href="/locale/{{ App::currentLocale() == 'en' ? 'es' : 'en' }}">
                        <form action="/locale/{{ App::currentLocale() == 'en' ? 'es' : 'en' }}" method="GET">
                            <button type="submit" class="text-center text-white">
                                {{ App::currentLocale() == "en" ? "ES" : "EN" }}
                            </button>
                        </form>
                    </a>
                </li>
            </ul>
        </div>
        <!-- Menu Toggle -->
        <button class="header-toggle d-none-lg">
            <span style="height: 3px"></span>
        </button>
    </div><!-- end container -->
</div>
<script>
    function modal_doble_active(){
        console.log("entre en active")
        $("#modal_doble").val(1);
    }

    function modal_doble_inactive(){
        console.log("entre en inactive")
        $("#modal_doble").val(0);
    }
</script>