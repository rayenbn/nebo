<!-- Start Slider Area  -->
<div class="rwt-testimonial-area  slider-style-4  slider-activation slider-dot rn-slick-dot rn-slick-arrow" style="margin-bottom: 0px;">
    @foreach ($sliders as $key => $slider)
    <div class="single-rn-slider slider-bg-image bg-overlay bg_image bg_image--6 height-950 d-flex align-items-center" 
        style="--mobile-bg: url('/storage/sliders/{{ $slider->picture_mb }}'); --desktop-bg: url('/storage/sliders/{{ $slider->picture }}')"
        >
        <div class="container">
            <div class="row row--30 align-items-center">
                <div class="order-2 order-lg-1 col-lg-7">
                    <div class="inner text-left">
                        <h1 class="title ">{{ $slider->title}}</h1>
                        <p class="description d-none d-md-block">{!! $slider->subtitle !!}</p>
                        <div class="button-group mt--30"><a class="btn-default"  href="{{ $slider->link }}">DETAILS</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
    {{--
    <div class="single-rn-slider slider-bg-image bg-overlay bg_image bg_image--7 height-950 d-flex align-items-center" 
    style="--mobile-bg: url('/storage/sliders/{{ $slider->picture_mb }}'); --desktop-bg: url('/storage/sliders/{{ $slider->picture_mb }}')"
    >
        <div class="container">
            <div class="row row--30 align-items-center">
                <div class="order-2 order-lg-1 col-lg-7">
                    <div class="inner text-left">
                        <h1 class="title ">HIGH DENSITY.</h1>
                        <p class="description d-none d-md-block">High-quality cotton and uniform heating wire, providing extremely long life-span</p>
                        <div class="button-group mt--30"><a class="btn-default"  href="#prod-details">DETAILS</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="single-rn-slider slider-bg-image bg-overlay bg_image bg_image--8 height-950 d-flex align-items-center" 
    style="--mobile-bg: url('../assets/images/banners/4-mb.jpg'); --desktop-bg: url('../images/banners/4.jpg');"
    >
        <div class="container">
            <div class="row row--30 align-items-center">
                <div class="order-2 order-lg-1 col-lg-7">
                    <div class="inner text-left">
                        <h1 class="title">NEBO Mesh Coil.</h1>
                        <p class="description d-none d-md-block">chasing coils with the soothest,purest and Long-life span</p>
                        <div class="button-group mt--30"><a class="btn-default" href="#prod-details">DETAILS</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    --}}
</div>
<!-- End Slider Area  -->
