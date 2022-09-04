@extends('layouts.theme')
@section('content')

 <!-- Start Service__Style--1 Area  -->
 <div class="rn-service-area rn-section-gap">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <!-- <h4 class="subtitle">
                        <span class="theme-gradient">Approved product</span>
                    </h4> -->
                    <h2 class="title w-600 mb--20">{{ $privacy->title ?? ''}}</h2>
                    <!-- <p class="description b1">Thank you for choosing NEBO</p> -->
                </div>
            </div>
        </div>

        <div class="row row--15 service-wrapper">
            {!! $privacy->content ?? '' !!}
        </div>
    </div>
</div>
<!-- End Service__Style--1 Area  -->


@endsection