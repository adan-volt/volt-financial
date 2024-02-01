@extends('layouts.backend')
@section('content')

<div class="section-lg bg-dark text-center">
	<div class="container">
		<h1 class="font-weight-light margin-0">@if ($section_id == 1) Testimonials @else Projects @endif</h1>
	</div><!-- end container -->
</div>

<div class="section-xs">
	<div class="container">
		@if(session('status'))
			<div class="alert alert-success" role="alert">
				{{ session('status') }}
			</div>
		@endif
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<h3 class="font-weight-normal text-left">{{ __("translations.NewRegister") }}</h3>
				<!-- Snippet -->
				<form action="/backend/sliders/save" method="POST" enctype="multipart/form-data">
					@csrf
					<br>
					<label class="required">Select an image</label>
					<input type="file" name="image" required>
					<input type="hidden" name="section_id" value="{{ $section_id }}">
					<div class="alert alert-warning" role="alert">
						For Desktop: 1200x675px (1MB Max) // For Mobile: 645x1080px (1MB Max)
					</div>
					{{-- <small class="small-text"></small> --}}
					<label class="required">Type (desktop / mobile)</label>
					<select class="form-control bg-light" name="type_desktop" required>
						<option value="">Select an option</option>
						<option value="1">Desktop</option>
						<option value="0">Mobile</option>
					</select>
					<button type="submit" class="button button-lg button-outline-yellow w-25 border-radius-2px">{{ __("translations.Save") }}</button>
					<label class="required" style="visibility: hidden">{{ __("translations.Order") }}</label>
					<input type="number" name="order" min="1" value="{{ $last_order_images_sliders + 1 }}" style="visibility: hidden">
				</form>
				<!-- end Snippet -->
			</div>
		</div><!-- end row -->
	</div><!-- end container -->
</div>

<div class="container">
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-12">
			@if ($images_sliders->count())
			<table class="table table-bordered">
				<tbody class="text-center">
					<tr>
						<th scope="col"># Image</th>
						<th scope="col">Type</th>
						<th scope="col">Action</th>
					</tr>
					@php $contador = 1 @endphp
					@foreach ($images_sliders as $image_slider)
						<tr>
							<th scope="row">{{ $contador }} - IMG</th>
							<td class="font-weight-700"> {{ $image_slider->type_desktop == "0" ? 'Mobile' : 'Desktop' }} </td>
							<td>
								<form action="/backend/delete/img/slider/{{ $image_slider->id }}" method="POST">
									@csrf
									<button class="p-2"><img src="{{ asset('images/delete.png') }}" class="delete-icon" alt=""></button>
								</form>
							</td>
						</tr>
					@php $contador++ @endphp
					@endforeach
				</tbody>
			</table>
			@endif
		</div>
		<div class="col-lg-6 col-md-6 col-sm-12">
			@if($images_sliders_mobile->count())
			<table class="table table-bordered">
				<tbody class="text-center">
					<tr>
						<th scope="col"># Image</th>
						<th scope="col">Type</th>
						<th scope="col">Action</th>
					</tr>
					@php $contador = 1 @endphp
					@foreach ($images_sliders_mobile as $image_slider_mobile)
						<tr>
							<th scope="row">{{ $contador }} - IMG</th>
							<td class="font-weight-700"> {{ $image_slider_mobile->type_desktop == "0" ? 'Mobile' : 'Desktop' }} </td>
							<td>
								<form action="/backend/delete/img/slider/{{ $image_slider_mobile->id }}" method="POST">
									@csrf
									<button class="p-2"><img src="{{ asset('images/delete.png') }}" class="delete-icon" alt=""></button>
								</form>
							</td>
						</tr>
					@php $contador++ @endphp
					@endforeach
				</tbody>
			</table>
			@endif
		</div>
	</div>
</div>

<div class="section-sm">
	<div class="container-fluid">
		<div class="row align-items-center justify-content-center">
			<div class="col-lg-10">
				@if ($images_sliders->count())
				<h4 class="title-hero-black">Desktop View</h4>
					<div class="swiper mySwiper">
						<div class="swiper-wrapper">
						@foreach ($images_sliders as $image_slider)
							<div class="swiper-slide">
								<img src="data:image/gif;base64,{{ $image_slider->url }}" />
							</div>
						@endforeach
						</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
						{{-- <div class="swiper-pagination"></div> --}}
					</div>
				@endif
			</div>
			<div class="col-lg-10">
				@if ($images_sliders_mobile->count())
				<h4 class="title-hero-black text-center">Mobile View</h4>
					<div class="backend-mobile-container">
						<div class="swiper mySwiperMobile">
							<div class="swiper-wrapper">
								@foreach ($images_sliders_mobile as $image_slider)
								<div class="swiper-slide">
									<img class="box-shadow-img border-radius-2px" src="data:image/gif;base64,{{ $image_slider->url }}" />
								</div>
								@endforeach
							</div>
						<div class="swiper-button-next"></div>
						<div class="swiper-button-prev"></div>
						{{-- <div class="swiper-pagination"></div> --}}
						</div>
					</div>
				@endif
			</div>
		</div>
	</div>
</div>
@endsection