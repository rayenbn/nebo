@extends('layouts.theme')
@section('content')
<div class="section-featured-icons d-lg-block d-none">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="icon-box icon-box-left icon-box-circle justify-content-lg-center">
                    <div class="icon-box__icon"><i class="flaticon flaticon-delivery-truck"></i></div>
                    <div class="icon-box__title">Delivery to all regions</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box icon-box-left icon-box-circle justify-content-lg-center">
                    <div class="icon-box__icon"><i class="flaticon flaticon-sales-ticket"></i></div>
                    <div class="icon-box__title">Don't miss this great deal!</div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="icon-box icon-box-left icon-box-circle justify-content-lg-center">
                    <div class="icon-box__icon"><i class="flaticon flaticon-thumb-up-gesture"></i></div>
                    <div class="icon-box__title">The highest quality of products</div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Breadcrumbs -->
<nav aria-label="breadcrumb" class="page-breadcrumb">
    <div class="container">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">About</li>
        </ol>
    </div>
</nav>

<!-- Page content -->
<div class="page-content">
    <main class="main-content">
        <section class="section-about">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-7">
                        <h3 class="section-title mb-40">{{ $aboutus->sec_one_title ?? ''}}</h3>

                        {!! $aboutus->sec_one_text ?? '' !!}
                    </div>
                    <div class="col-lg-5">
                        @if(isset($aboutus->sec_one_img))
                        <img src="/storage/images/banners/{{ $aboutus->sec_one_img ?? ''}}" alt="{{ $aboutus->sec_one_title ?? ''}}"/>
                        @endif
                    </div>
                    <div style="width: 100%; text-align: center;">
                        <img src="{{ asset('img/certificates.png')}}" alt="pufflex certificates"/>
                    </div>
                </div>
            </div>
        </section>
        {{--
        <section class="section-team">
            <div class="container">
                <h3 class="section-title text-center">Our team</h3>

                <div class="row">
                    <div class="col-lg-3 col-md-6">
                        <div class="team">
                            <div class="team__thumb">
                                <img src="images/270x380.png" alt="">
                            </div>
                            <div class="team__name h4">Barry McCoy</div>
                            <div class="team__position">Exec. Creative Director</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team">
                            <div class="team__thumb">
                                <img src="images/270x380.png" alt="">
                            </div>
                            <div class="team__name h4">Barbara Garner</div>
                            <div class="team__position">Client Partner</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team">
                            <div class="team__thumb">
                                <img src="images/270x380.png" alt="">
                            </div>
                            <div class="team__name h4">Justin Gomez</div>
                            <div class="team__position">Photographer</div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="team">
                            <div class="team__thumb">
                                <img src="images/270x380.png" alt="">
                            </div>
                            <div class="team__name h4">Eddie Douglas</div>
                            <div class="team__position">Senior Strategist</div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        --}}
        @if ($galleries->count() > 0)
        <section class="section-team">
            <div class="container">
                <h3 class="section-title text-center">Pufflex Factory</h3>
                <!-- Gallery -Photo -->
                <div class="gallery gallery-lightbox gallery-photos gallery-filled hover-zoom">

                    <ul class="photos-list col-x4">
                        @foreach($galleries as $key => $gallery)
                        <li>
                            <a href="../storage/gallery/{{ $gallery->picture }}" target="_blank">
                                <div class="photo">
                                    <img src="../storage/gallery/thumbnail/{{ $gallery->picture }}" alt="Photo Title">
                                </div>
                            </a>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- Gallery #end -->
            </div>
        </section>
        @endif
        
        <!-- Call Action -->
        @include('frontend.components.newsletter')
        <!-- End Section -->

    </main> <!-- end of main -->
</div> <!-- /.page-content -->

@endsection