@extends('layouts.apps',['data' => $data])
@section('content')
    <main id="case-studies-detail">
        {{-- Banner --}}
        <section class="banner-sec">
            <div class="container-fluid">
                <div class="container">
                    <h1>Kixify</h1>
                </div>
            </div>
        </section>

        <section class="case-studies-detail section-space">
            <div class="container pb-5">
                <div class="row align-items-center">
                    <div class="col-12 mb-4 p-0 p-sm-3 wow fadeInUp">
                        <img src="{{ asset('images/kixify-detail.png')}}" widht="800px" height="100%"  alt="case study unikwork">
                    </div>
                    <div class="col-12 p-0 p-sm-3 wow fadeInUp">
                        <div class="work-content">
                            <h3>Kixify</h3>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets</p>
                        </div>
                        <div class="work-points kixify-points">
                            <div>
                                <p>Lorem Ipsum is simply</p>
                                <p>Lorem Ipsum is simply dummy</p>
                                <p>Lorem Ipsum is simply dummy text</p>
                                <p>Lorem Ipsum is simply</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection