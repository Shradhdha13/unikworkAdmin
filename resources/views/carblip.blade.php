@extends('layouts.apps',['data' => $data])
@section('content')
    <main id="case-studies-detail">
        {{-- Banner --}}
        <section class="banner-sec">
            <div class="container-fluid">
                <div class="container">
                    <h1>Carblip</h1>
                </div>
            </div>
        </section>

        <section class="case-studies-detail section-space">
            <div class="container pb-5">
                <div class="row align-items-center">
                    <div class="col-12 mb-4 p-0 p-sm-3 wow fadeInUp">
                        <img src="{{ asset('images/carb-lip.png')}}" width="977px" height="100%" alt="unikwork">
                    </div>
                    <div class="col-12 p-0 p-sm-3 wow fadeInUp">
                        <div class="work-content">
                            <h3>Carblip</h3>
                            <p>The main motive of this application is to ease the car leasing and buying without the dealership involved. This application allows users to experience the personal car customization and delivery at the doorstep without any dealership involved. Soon after the registration, the user is assigned a personalised concierge right from the beginning till the end. The main motive of this application is to ease the pain of car buying and leasing and experience a smooth process all through. This app thus allows and has a feature of the hassle-free customer service available along with the concierge guide.</p>
                        </div>
                        <h4>Features</h4>
                        <div class="work-points carblip-points">
                            <div>
                                <p>No dealership involved</p>
                                <p>No paperwork required</p>
                                <p>Robust and reliable</p>
                                <p>Easy access to get the nearby point cars on lease available </p>
                                <p>Customer chat features allowed with the concierge</p>
                            </div>
                        </div>
                        <h4>Challenges</h4>
                        <div class="work-points carblip-points">
                            <div>
                                <p>Keeping design user friendly</p>
                                <p>Hassle-free customer support service</p>
                                <p>Uninterrupted user experience for personalized car configuration</p>
                                <p>Service scalability to keep records</p>
                                <p>Adding multiple analytical tools to record human behaviour</p>
                            </div>
                        </div>
                        <h4>Technology used</h4>
                        <div>
                            <p>NodeJs, Mongodb, Native iOS</p>
                        </div>
                        <h4>Designing tools</h4>
                        <div>
                            <p>Sketch, Invision</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
