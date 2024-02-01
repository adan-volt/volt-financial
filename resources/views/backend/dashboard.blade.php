@extends('layouts.backend')
@section('content')

<div class="section-lg bg-dark text-center">
	<div class="container">
		<h1 class="font-weight-light margin-0">@lang('translations.FAQs')</h1>
	</div><!-- end container -->
</div>

<div class="section-xs">
	<div class="container">
		@if(session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
		@endif

		@if ($errors->any())
			<div class="alert alert-danger">
				<ul>
					@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
		@endif
	

		<div class="row justify-content-center">
			<div class="col-lg-8">
				<h3 class="font-weight-normal text-left">{{ __("translations.NewRegister") }}</h3>
				<br><br>
				<!-- Snippet -->
				<form action="/backend/faqs" method="POST">
					@csrf
					<label class="required">{{ __("translations.Title") }}</label>
					<input type="text" name="title" placeholder="{{ __("translations.Title") }}" required>
					<label class="required">{{ __("translations.Subtitle") }}</label>
					<input type="text" name="subtitle" placeholder="{{ __("translations.Subtitle") }}">
					<label class="required">{{ __("translations.Description") }}</label>
					<textarea name="description" id="ckeditor_description" placeholder="{{ __("translations.Description") }}"></textarea>
					<label class="required mt-4">{{ __("translations.Order") }}</label>
					<input type="number" name="order" min="1" value="{{ $last_order_faqs + 1 }}">
					<button type="submit" class="button button-lg button-outline-yellow w-25 border-radius-2px">{{ __("translations.Save") }}</button>
				</form>
				<!-- end Snippet -->

			</div>
		</div><!-- end row -->
	</div><!-- end container -->
</div>

@if ($faqs->count())
	<div class="section">
		<div class="container">
			<div class="row col-spacing-50 margin-bottom-40">
				<div class="col-12 col-lg-10 offset-lg-1 col-xl-8 offset-xl-2">

					<!-- Snippet -->
					<ul class="accordion single-open border-radius">
						@php $contador = 0 @endphp
						@foreach ($faqs as $faq)
							<li @if($contador == 0) class="active" @endif>
								<div class="accordion-title">
									<h6 class="font-family-tertiary font-small font-weight-medium uppercase">{{ $faq->title }}</h6>
								</div>
								<div class="accordion-content">
									<h6 class="font-family-tertiary font-weight-medium mb-2">{{ $faq->subtitle }}</h6>
									<p>{!! $faq->description !!}</p>
									<div class="text-right">
										<form action="/backend/delete/faq/{{ $faq->id }}" method="POST">
											@csrf
											<button class="p-2"><img src="{{ asset('images/delete.png') }}" class="delete-icon" alt=""></button>
										</form>
									</div>
								</div>
							</li>
							@php $contador++ @endphp
						@endforeach
					</ul>
				</div>
			</div>
		</div><!-- end container -->
	</div>
@endif

@endsection
@section('script')
	<script src="{{ asset('js/ckeditor.js') }}"></script>
	<script>
		ClassicEditor
			.create(document.querySelector('#ckeditor_description'))
			.catch(error => {
				console.error(error);
			});
	</script>
@endsection