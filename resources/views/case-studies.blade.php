@extends('layouts.apps',['data' => $data])
@section('content')
    <main id="case-studies">
        {{-- Banner --}}
        <section class="banner-sec">
            <div class="container-fluid">
                <div class="container">
                    <h1>Case Studies</h1>
                </div>
            </div>
        </section>

        {{-- The Products Story --}}
        <section class="mobile-app-dev">
            <div class="container mobile-app cross-sec">
                <div class="row align-items-center">
                    <div class="col col-md-6 wow fadeInUp cross-alter-content">
                        <h2>Discover Our Portfolio</h2>
                        <h4>Take a look at our case studies and discover how we can help businesses just like yours get a competitive edge in their domain.</h4>
                        <p>Our case studies detail the way we capture the vision of our clients and closely collaborate with them to develop apps and software, tailored to their organizational goals.</p>
                        <p>Our team of experienced professionals formulate custom software development strategies and lead your projects from the drawing board to deployment, working with a high degree of professionalism to deliver high-impact technical solutions that address your business needs.</p>
                        <p>Connect With Us To Gain Your Competitive Edge</p>

                        <a href="{{ route('contact-us') }}" class="btn button-primary mt-0">Contact Us</a>
                    </div>
                    <div class="col col-md-6 text-right wow fadeInUp">
                        <img src="{{ asset('images/case-studies.png') }}" widht="685px" height="100%" alt="case study unikwork">
                    </div>
                </div>
            </div>
        </section>


        {{-- Mobile Apps --}}
        <section class="our-work">
            <div class="container">
                <h2 class="section-title wow fadeInUp">Mobile Apps</h2>
                <div class="row work-sec">
                    <div class="work-sec-bg"></div>
                    <div class="work-content-sec d-lg-flex">
                        <div class="col-lg-6 col-12 work-img p-0">
                            <img src="{{ asset('images/lojong.png')}}" widht="704px" height="100%" alt="unikwork">
                        </div>
                        <div class="col-lg-6 col-12 work-main">
                            <div class="work-content">
                                <a href="javascript:void(0)" class="d-block">
                                    <h3 class="mb-4">Lojong <span> - Meditation guide</span></h3>
                                </a>
                                <p>Lojong application has hundreds of videos that can guide you to improve your daily life and reduce anxiety. It helps users with mindfulness and reduces stress. we have been approached to create a mobile application for them. We stepped in to create a roadmap for their product and worked closely with the product owner and design team. We worked with them to launch their application to market in 2016</p>
                                <div class="work-store">
                                    <a href="{{ URL::to('https://apps.apple.com/us/app/lojong-guided-meditation/id1292587933') }}" target="_blank"><img src="{{ asset('images/apple-store.png') }}" alt="image"></a>
                                    <a href="{{ URL::to('https://play.google.com/store/apps/details?id=br.com.lojong&hl=en_IN&gl=US') }}" target="_blank"><img src="{{ asset('images/playstore.png') }}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row work-sec carblip-work mb-5">
                    <div class="work-sec-bg carblip-bg"></div>
                    <div class="work-content-sec carblip-sec d-lg-flex">
                        <div class="col-lg-6 col-12 work-main">
                            <div class="work-content">
                                <a href="{{ route('carblip') }}" class="d-block">
                                    <h3 class="mb-4">CarBlip  <span> - Buy or Lease a car</span></h3>
                                </a>
                                <p>Carblip helps to eliminate contacting a dealer for buying your dream car. It allows a user to select a car brand and configure it. After selecting the car user can submit the document and also user can trade in the existing car. Carblip and Unikwork worked together to develop mobile and web application which gives the best user experience.</p>
                                <div class="work-store">
                                    <a href="{{ URL::to('https://apps.apple.com/us/app/carblip-your-car-delivered/id1362042544') }}" target="_blank"><img src="{{ asset('images/apple-store.png') }}" alt="image"></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-12 work-img p-0">
                            <img src="{{ asset('images/carb-lip.png')}}" widht="704px" height="100%" alt="unikwork">
                        </div>
                    </div>
                </div>
                
            </div>
        </section>
        @include('whatwedo')
    </main>
@endsection
