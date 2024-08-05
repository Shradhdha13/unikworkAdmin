@extends('layouts.apps',['data' => $data])
@section('content')
    <main id="our-portfolio">
        {{-- Banner --}}
        <section class="banner-sec">
            <div class="container-fluid">
                <div class="container">
                    <h1>Our Portfolio</h1>
                </div>
            </div>
        </section>

        {{-- Our Portfolio --}}
        <section class="web-portfollio">
            <div class="container pt-5 pb-5">
                <h2 class="section-title wow fadeInUp mt-0 pt-5">Explore Our Portfolio</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="portfollio-img-sec">
                            <img src="{{ asset('images/service/expertcarbuyers.png') }}" width="382px" height="100%" alt="image" class="w-100">
                            <a href="{{ URL::to('https://expatcarbuyers.com/') }}" target="_blank" rel="noopener">https://expatcarbuyers.com/</a>
                            <div class="webpill">
                                <p>Wordpress</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="portfollio-img-sec">
                            <img src="{{ asset('images/service/ortus.png') }}" width="382px" height="100%" alt="image" class="w-100">
                            <a href="{{ URL::to('https://ortus.com.tr/') }}" target="_blank" rel="noopener">https://ortus.com.tr/</a>
                            <div class="webpill">
                                <p>Laravel</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="portfollio-img-sec">
                            <img src="{{ asset('images/service/iwa-port.png') }}" width="382px" height="100%" alt="image" class="w-100">
                            <a href="{{ URL::to('http://iwaport.com/customer/home') }}" target="_blank" rel="noopener">http://iwaport.com/customer/home</a>
                            <div class="webpill">
                                <p>Node Js</p>
                                <p>Angular</p>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </>
        </section>
        @include('whatwedo')
    </main>
@endsection
