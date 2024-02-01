<!-- Modal Contact -->
<div class="modal modal-slide-up fade" id="modal-form-result" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="bg-form-color">
                <div class="container pt-3 pb-1">
                    <div class="row p-1s">
                        <div class="col-2 d-flex justify-content-start m-0">
                            <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                        </div>
                        <div class="col-9 title-form-contact m-0">
                            <p class="title-hero-grey"></p>
                        </div>
                    </div>
                </div>
            </div>
            @if(session('status') == 200)
                <div class="div-bg-form-contact border-none">
                    <h6 class="text-title-tv text-center">Thank you<span class="yellow-text">!</span></h6>
                    <p class="title-hero-grey mt-4">We'll be reaching out to you soon.</p>
                </div>                
            @else
                <div class="div-bg-form-contact border-none">
                    <h6 class="text-title-tv text-center">Something Went Wrong<span class="yellow-text">!</span></h6>
                    <p class="title-hero-grey mt-4">Please try again.</p>
                </div>   
            @endif
        </div>
    </div>
</div>
<!-- END Modal Contact -->