<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
    @include('components.head')
    
    <body>
        <!-- Google Tag Manager (noscript) -->
        <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5BR26BCX"
        height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
        <!-- End Google Tag Manager (noscript) -->
            
        @include('components.header')

        @yield('content')

        <input type="hidden" id="modal_doble" value="">    

        @include('components.footer')

        @include('components.contact-form')

        @include('components.form-result')

        @include('components.modal-privacy')

    </body>

    @include('components.scripts')
    @yield('script')
    
</html>
