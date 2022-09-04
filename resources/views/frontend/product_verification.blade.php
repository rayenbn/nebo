@extends('layouts.theme')
@section('content')

 <!-- Start Service__Style--1 Area  -->
 <div class="rn-service-area rn-section-gap" style="min-height: 400px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                @if($response == 'exist')
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <img src="{{ asset('theme/assets/images/shield.png') }}" width="60px">
                    <h2 class="title w-600 mb--20 mt-4">Approved product</h2>
                    <p class="description b1">Thank you for choosing NEBO</p>
                </div>
                @else
                <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                    <h2 class="title w-600 mb--20 mt-4">This code has been scanned before</h2>
                    <p class="description b1">If you have any question contact us at: support@neboecig.com</p>
                </div>
                @endif
            </div>
        </div>
    </div>
</div>
<!-- End Service__Style--1 Area  -->

@endsection