@extends('layouts.apps',['data' => $data])
@section('content')
    <main id="case-studies-detail">
        {{-- Banner --}}
        <section class="banner-sec">
            <div class="container-fluid">
                <div class="container">
                    <h1>Quick</h1>
                </div>
            </div>
        </section>

        <section class="case-studies-detail section-space">
            <div class="container pb-5">
                <div class="row align-items-center">
                    <div class="col-12 mb-4 p-0 p-sm-3 wow fadeInUp">
                        <img src="{{ asset('images/quick-detail.png')}}" width="855px" height="100%" alt="case study unikwork">
                    </div>
                    <div class="col-12 p-0 p-sm-3 wow fadeInUp">
                        <div class="work-content">
                            <h3>Quick</h3>
                            <p>One of the first ever coffee applications in the Kingdom of Saudi Arabia, that gives access to the artisanal coffee and international coffee available at the nearby cafes and restaurants. This application mainly targets the coffee lovers to bring them under an umbrella and serve the best experience. Quick application helps you reach out to various coffee brands nearby. Quick application connects and facilitates between their partners and the customers.</p>
                        </div>
                        <h4>Features</h4>
                        <div class="work-points quick-points">
                            <div>
                                <p>First ever coffee application</p>
                                <p>Popular coffee and brands available</p>
                                <p>Smoother and reliable payment, and transactions services</p>
                                <p>Reliable location services</p>
                                <p>Smoother notification services</p>
                            </div>
                        </div>
                        <h4>Challenges</h4>
                        <div class="work-points quick-points">
                            <div>
                                <p>Better design for the user friendly experience</p>
                                <p>Conceptualize the application in multiple languages</p>
                                <p>Robust and reliable</p>
                                <p>Smooth and reliable design for payment, transactions, and notifications</p>
                                <p>Managing user ratings for the cafes and beverages</p>
                                <p>Managing payment details page</p>
                                <p>Managing order status and notifications</p>
                            </div>
                        </div>
                        <h4>Technology used</h4>
                        <div>
                            <p>Android, iOS, Laravel</p>
                        </div>
                        <h4>Designing tools</h4>
                        <div>
                            <p>Figma, Invision</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection
