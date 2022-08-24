@extends('layouts.theme')
@section('content')


        @include('partials.slider', $sliders)
        
        

        <!-- Start Seperator Area  -->
        <!-- <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div> -->
        <!-- End Seperator Area  -->

        <!-- Start Split Area  -->
        <div class="rwt-split-area">
            <div class="wrapper">
                <div class="rn-splite-style bg-color-blackest">
                    <div class="split-wrapper">
                        <div class="row g-0 radius-10 align-items-center">
                            <div class="col-lg-12 col-xl-12 col-12">
                                <div class="thumbnail">
                                    <picture>
                                        <source media="(min-width: 480)" srcset="{{ asset('theme/assets/images/banners/2.jpg') }}">
                                        <source media="(max-width: 480px)" srcset="{{ asset('theme/assets/images/banners/2-mb.jpg') }}">
                                        <img src="{{ asset('theme/assets/images/banners/2.jpg') }}" alt="split Images">
                                    </picture>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Split Area  -->
      
         <!-- Start Advance Tab-2  -->
         <div class="rwt-advance-tab-area rn-section-gap" id="prod-details">
            <div class="container">
                <div class="row mb--40">
                    <div class="col-lg-12">
                        <div class="section-title text-center">
                            <h4 class="subtitle "><span class="theme-gradient">You can Customize All</span></h4>
                            <h2 class="title w-600 mb--20">NEBO Coil Types.</h2>
                        </div>
                    </div>
                </div>
                <div class="row row--30">
                    <div class="col-lg-8 col-md-12 col-sm-12 col-12">
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active advance-tab-content-1" id="home-2" role="tabpanel" aria-labelledby="home-tab-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('theme/assets/images/banners/nebo02-08.jpg') }}" alt="advance-tab-image">
                                </div>
                            </div>
                            <div class="tab-pane fade advance-tab-content-1" id="profile-2" role="tabpanel" aria-labelledby="profile-tab-2">
                                <div class="thumbnail">
                                    <img src="{{ asset('theme/assets/images/banners/nebo03-12.jpg') }}" alt="advance-tab-image">
                                </div>
                            </div>
                            <div class="tab-pane fade advance-tab-content-1" id="profile-3" role="tabpanel" aria-labelledby="profile-tab-3">
                                <div class="thumbnail">
                                    <img src="{{ asset('theme/assets/images/banners/nebo015-10.jpg') }}" alt="advance-tab-image">
                                </div>
                            </div>
                            <div class="tab-pane fade advance-tab-content-1" id="profile-4" role="tabpanel" aria-labelledby="profile-tab-4">
                                <div class="thumbnail">
                                    <img src="{{ asset('theme/assets/images/banners/nebo045-06.jpg') }}" alt="advance-tab-image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-12 col-sm-12 col-12 mt_md--30 mt_sm--30">
                        <div class="advance-tab-button advance-tab-button-1 right-align">
                            <ul class="nav nav-tabs tab-button-list" id="myTab-2" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link tab-button active" id="home-tab-2" data-bs-toggle="tab" data-bs-target="#home-2" role="tab" aria-controls="home" aria-selected="true">
                                        <div class="tab">
                                            <h4 class="title">Mesh coil Nebo-V0.2 & Nebo-V0.8</h4>
                                            <!-- <p class="description">Use Doob template you can build a corporate
                                                website a short time.</p> -->
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link tab-button" id="profile-tab-2" data-bs-toggle="tab" data-bs-target="#profile-2" role="tab" aria-controls="profile-2" aria-selected="false">
                                        <div class="tab">
                                            <h4 class="title">Mesh coil Nebo-V0.3 & Nebo-V1.2</h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link tab-button" id="profile-tab-3" data-bs-toggle="tab" data-bs-target="#profile-3" role="tab" aria-controls="profile-3" aria-selected="false">
                                        <div class="tab">
                                            <h4 class="title">Mesh coil Nebo-V0.15 & Nebo-V1.0</h4>
                                        </div>
                                    </a>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <a href="#" class="nav-link tab-button" id="profile-tab-4" data-bs-toggle="tab" data-bs-target="#profile-4" role="tab" aria-controls="profile-4" aria-selected="false">
                                        <div class="tab">
                                            <h4 class="title">Mesh coil Nebo-V0.45 & Nebo-V0.6</h4>
                                        </div>
                                    </a>
                                </li>

                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Advance Tab-2  -->

        <!-- Start Split Area  -->
        <div class="rwt-split-area">
            <div class="wrapper">
                <div class="rn-splite-style bg-color-blackest">
                    <div class="split-wrapper">
                        <div class="row g-0 radius-10 align-items-center">
                            <div class="col-lg-12 col-xl-12 col-12">
                                <div class="thumbnail">
                                    <picture>
                                        <source media="(min-width: 480)" srcset="{{ asset('theme/assets/images/banners/9.jpg')}}">
                                        <source media="(max-width: 480px)" srcset="{{ asset('theme/assets/images/banners/9-mb.jpg')}}">
                                        <img src="{{ asset('theme/assets/images/banners/9.jpg')}}" alt="split Images">
                                    </picture>
                                    <!-- <img src="assets/images/banners/6.jpg" alt="split Images"> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Split Area  -->

        <!-- Start Seperator Area  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- End Seperator Area  -->

        @if ($blogs->count() > 0)
         <!-- Start Blog Area  -->
         <div class="blog-area rn-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="400" data-sal-delay="100">
                            <h4 class="subtitle "><span class="theme-gradient">Latests News</span></h4>
                            <h2 class="title w-600 mb--20">Our Latest News.</h2>
                            <p class="description b1">We provide the best Mesh Coil <br> for smooth vaping.</p>
                        </div>
                    </div>
                </div>
                <div class="row row--15">
                    @foreach($blogs as $key => $blog)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-12 mt--30" data-sal="slide-up" data-sal-duration="700">
                        <div class="rn-card box-card-style-default">
                            <div class="inner">
                                <div class="thumbnail"><a class="image" href="{{ $blog->path() }}">
                                    <img src="../storage/blogs/thumbnail/{{ $blog->image }}" alt="Blog Image"></a>
                                </div>
                                <div class="content">
                                    <ul class="rn-meta-list">
                                        <li><a href="#">{{ $blog->created_by ?? ''}}</a></li>
                                        <li class="separator">/</li>
                                        <li>{{ $blog->created_at->diffForHumans() }}</li>
                                    </ul>
                                    <h4 class="title"><a href="{{ $blog->path() }}">{{ $blog->title ?? ''}}</a></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach 
                </div>
            </div>
        </div>
        <!-- End Blog Area  -->
        <!-- Start Seperator Area  -->
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- End Seperator Area  -->
        @endif

        <!-- Start Tab Area  -->
        <div class="rwt-tab-area rn-section-gap">
            <div class="container">
                <div class="row mb--40">
                    <div class="col-lg-12">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h4 class="subtitle "><span class="theme-gradient">About NEBO.</span></h4>
                            <h2 class="title w-600 mb--20">{{ $aboutus->sec_one_title ?? ''}}</h2>
                            <p class="description b1">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quibusdam ipsa, <br>deleniti soluta minima minus asperiores doloribus enim vitae obcaecati.</p>
                        </div>
                    </div>
                </div>

                <div class="row row row--30 align-items-center">
                    <div class="col-lg-5" data-sal="slide-right" data-sal-duration="700">
                        <img class="radius-small" src="/storage/images/banners/{{ $aboutus->sec_one_img ?? ''}}" alt="{{ $aboutus->sec_one_title ?? ''}}">
                    </div>
                    <div class="col-lg-7 mt_md--40 mt_sm--40 order-2 order-lg-1" data-sal="slide-left" data-sal-duration="700">
                        <div class="rn-default-tab">
                            <ul class="nav nav-tabs tab-button" id="myTab" role="tablist">
                                <li class="nav-item tabs__tab " role="presentation">
                                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">About</button>
                                </li>
                                <li class="nav-item tabs__tab " role="presentation">
                                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Security Verification</button>
                                </li>
                                <!-- <li class="nav-item tabs__tab " role="presentation">
                                    <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Development</button>
                                </li> -->
                            </ul>
                            <div class="rn-tab-content tab-content" id="myTabContent">
                                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                    {!! $aboutus->sec_one_text ?? '' !!}
                                </div>

                                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                    <div class="content row">
                                        <div class="col-md-4 col-12">
                                            <img class="w-md-25 radius mb-4" src="{{ asset('theme/assets/images/verification_card.png') }}" alt="nebo verification sticker">
                                        </div>
                                        <div class="col-md-8 col-12">
                                            <h5 class="title">Please enter the 16-digit security code</h5>
                                            <h6 class="subtitle mb-4" style="font-size: 1.2rem;">Locate the security label, like the one shown below, <br>on the package and  remove the scratch off coating to see the code.</h6>
                                            <div class="row justify-content-center">
                                                <div class="col-lg-8 col-md-12 col-12">
                                                    <div class="rnform-group"><input type="text" placeholder="Place security code here"></div>
                                                </div>
                                                <div class="col-lg-4 col-md-12 col-12">
                                                    <div class="call-to-btn text-center">
                                                        <a class="btn-default btn-icon" target="_blank" href="#">Submit</a>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- End Tab Area  -->
       
    </main> 
</div>
@endsection