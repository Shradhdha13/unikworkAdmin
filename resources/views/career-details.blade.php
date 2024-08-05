@extends('layouts.apps',['data' => $data])
@section('content')
    <main id="careers">
        {{-- Banner --}}
        <section class="banner-sec">
            <div class="container-fluid">
                <div class="container">
                    <h1>{{ !empty($requirement->technology) ? $requirement->technology : '' }}</h1>
                </div>
            </div>
        </section>


        <section class="current-opening">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="accordion">
                            <div class="company-req row">
                                <div class="col-md-6">
                                    <h4>Qualification</h4>
                                    <p>{{ !empty($requirement->qualification) ? $requirement->qualification : '' }}</p>
                                </div>
                                <div class="col-md-6">
                                    <h4>Location</h4>
                                    <p>{{ !empty($requirement->location) ?  $requirement->location : ''}}</p>
                                </div>
                                <div class="col-md-6">
                                    <h4>Salary range</h4>
                                    <p>{{ !empty($requirement->salary) ? $requirement->salary : '' }}</p>
                                </div>
                                <div class="col-md-6">
                                    <h4>Experience/Seniority level</h4>
                                    <p>{{ !empty($requirement->experience) ?  $requirement->experience : ''}}</p>
                                </div>
                                <div class="col-md-6">
                                    <h4>Job Time</h4>
                                    <p>{{ !empty($requirement->time) ? $requirement->time : '' }}</p>
                                </div>
                            </div>
                            <h4 class="text-center my-4">Requirements / Your Skills</h4>
                            <div class="req-skill">
                                <div class="icon-points">
                                    @foreach(json_decode($requirement->requirement) as $value)
                                        <p>{{ $value }}</p>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Apply For This Position --}}
        <input type="hidden" name="requirement_id" value="{{ encrypt($requirement->id) }}" id="requirement_id">
        <section class="apply-position-sec section-space" id="apply-position">
            <div class="container">
                <div class="apply-position-form">
                    <h2 class="form-title  wow fadeInUp">Apply For This Position</h2>
                    <p class="form-subtitle">Please fill in the form below, and one of us will get in touch with you or respond to your queries soon.</p>
                    <div class="row align-items-center">
                        <div class="col col-sm-12">
                            
                            <form class="apply-position" id="apply_position" method="post" action="{{ route('add-careers') }}" enctype="multipart/form-data">
                                @csrf
                                
                                
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>First name <span>*</span></label>
                                            <input type="text" class="form-control" id="firstname" name="firstname">
                                            <label class="error">
                                                {{$errors->first('firstname')}}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Last name <span>*</span></label>
                                            <input type="text" class="form-control" id="lastname" name="lastname">
                                            <label class="error">
                                                {{$errors->first('lastname')}}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Email address <span>*</span></label>
                                            <input type="email" class="form-control" id="email" name="email">
                                            <label class="error">
                                                {{$errors->first('email')}}
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Phone number <span>*</span></label>
                                            <input type="number" class="form-control" id="phone" name="phone">
                                            <label class="error">
                                                {{$errors->first('phone')}}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Expected Monthly Salary</label>
                                            <input type="number" class="form-control" id="expected_salary" name="expected_salary">
                                            <label class="error"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Experience</label>
                                            <select name="experience" id="experience" class="form-control">
                                                <option value="">-- Select --</option>
                                                <option value="Fresher">Fresher</option>
                                                <option value="6 Month and above">6 Month and above</option>
                                                <option value="1 Year and above">1 Year and above</option>
                                                <option value="2 Year and above">2 Year and above</option>
                                                <option value="3 Year and above">3 Year and above</option>
                                                <option value="4 Year and above">4 Year and above</option>
                                                <option value="5 Year and above">5 Year and above</option>
                                                <option value="6 Year and above">6 Year and above</option>
                                                <option value="7 Year and above">7 Year and above</option>
                                                <option value="8 Year and above">8 Year and above</option>
                                                <option value="9 Year and above">9 Year and above</option>
                                                <option value="10 Year and above">10 Year and above</option>
                                            </select>
                                            <label class="error"></label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="form-group pl-3 pr-3 p-sm-0">
                                    <label>Send Portfolio (if applicable)</label>
                                    <input type="file" class="form-control file-upload" data-error="upload-error" id="portfolio" name="portfolio">
                                    <div class="send-portfollio"></div>
                                    <label class="error upload-error"></label>
                                </div> --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            {{-- <div class="form-group pl-3 pr-3 p-sm-0"> --}}
                                            <label>Current Location</label>
                                            <input type="text" class="form-control" data-error="location-error" id="location" name="location">
                                            <label class="error location-error"></label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Please upload your CV <span>*</span></label>
                                            <input type="file" class="form-control file-upload" data-error="cv-upload-error" id="cv" name="cv">
                                            <div class="your-cv"></div>
                                            <label class="error">
                                                {{$errors->first('cv')}}
                                            </label>
                                            <label class="error cv-upload-error"></label>
                                        </div>
                                    </div>
                                </div>
                                {{-- <div class="form-group pl-3 pr-3 p-sm-0">
                                    <label>Please upload your CV <span>*</span></label>
                                    <input type="file" class="form-control file-upload" data-error="cv-upload-error" id="cv" name="cv">
                                    <div class="your-cv"></div>
                                    <label class="error">
                                        {{$errors->first('cv')}}
                                    </label>
                                    <label class="error cv-upload-error"></label>
                                </div> --}}
                                <div class="text-center">
                                    <button type="submit" class="btn button-primary mt-4 apply-now" disabled>Apply now</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- <button type="button" class="btn button-primary" data-toggle="modal" data-target="#thankyou">
            Launch demo modal
        </button> --}}
        <div class="modal fade" id="thankyou" tabindex="-1" role="dialog">
            <div class="modal-dialog container-fluid" role="document">
                <div class="modal-content">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <div class="modal-body container">
                        <div class="row align-items-center text-center">
                            <div class="col-12 p-0">
                                <svg id="logo" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" width="235px" viewBox="0 0 1533.85 207.71"><defs><style>.cls-1{fill:#343434;}.cls-2{fill:#f37d53;}</style></defs><path class="cls-1" d="M587.7,140.33v86.94q0,13,5.44,20.55t16.5,7.51q11.26,0,16.69-7.51t5.44-20.55V140.33h42.28v84a88.14,88.14,0,0,1-4,27.57,56.69,56.69,0,0,1-12,21,53.16,53.16,0,0,1-20.16,13.44q-12.15,4.74-28.15,4.74t-28.16-4.64a52.76,52.76,0,0,1-20.15-13.24,55.61,55.61,0,0,1-12.06-21,89.75,89.75,0,0,1-4-27.86v-84Z" transform="translate(-254.01 -104.62)"/><path class="cls-1" d="M840.22,140.33V288.52H797.94l-49.4-81.8v81.8h-41.1V140.33h41.69l50,82.59V140.33Z" transform="translate(-254.01 -104.62)"/><path class="cls-1" d="M917.08,140.33V288.52H874.6V140.33Z" transform="translate(-254.01 -104.62)"/><path class="cls-1" d="M993.75,140.33v59.08l42.88-59.08h51l-51.37,63.23,56.12,85h-51.18l-32.4-55.13-15,14.43v40.7H951.27V140.33Z" transform="translate(-254.01 -104.62)"/><path class="cls-1" d="M1143.92,140.33l20.55,96.82,21.93-96.82h34.78l22.32,96.82,20.16-96.82h42.88l-40.12,148.59h-45.64l-18.18-82-18.18,82h-45.84l-39.51-148.59Z" transform="translate(-254.01 -104.62)"/><path class="cls-1" d="M1392.88,137.76a77.48,77.48,0,0,1,29.34,5.33,63.21,63.21,0,0,1,22.53,15.32,68,68,0,0,1,14.42,24.1,94.59,94.59,0,0,1,5,31.91q0,17.79-5.13,31.91a70.09,70.09,0,0,1-14.43,24.11,62.06,62.06,0,0,1-22.43,15.31,83.27,83.27,0,0,1-58.68,0,62.58,62.58,0,0,1-22.43-15.21,67.65,67.65,0,0,1-14.32-24.11,95.4,95.4,0,0,1-5-32,94.59,94.59,0,0,1,5-31.91,68,68,0,0,1,14.42-24.1,63.21,63.21,0,0,1,22.53-15.32A76.91,76.91,0,0,1,1392.88,137.76Zm0,36.75a25.29,25.29,0,0,0-20.75,9.88q-7.89,9.88-7.9,30,0,20.36,8.1,30.14a25.54,25.54,0,0,0,20.55,9.78q13,0,20.95-9.78t7.9-30.14a66.57,66.57,0,0,0-2.07-17.58,35.35,35.35,0,0,0-5.93-12.45,24.82,24.82,0,0,0-9.19-7.41A27.36,27.36,0,0,0,1392.88,174.51Z" transform="translate(-254.01 -104.62)"/><path class="cls-1" d="M1555.5,140.33q29.43,0,44.16,14.32t14.72,39q0,15.21-6.92,26a43.65,43.65,0,0,1-19,16.3l33.59,52.56h-49.2l-22.73-42.68H1534v42.68h-42.48V140.33ZM1534,211.46h17.59q20.54,0,20.54-17.78,0-17.38-20.54-17.39H1534Z" transform="translate(-254.01 -104.62)"/><path class="cls-1" d="M1689.27,140.33v59.08l42.87-59.08h51l-51.37,63.23,56.11,85h-51.17l-32.41-55.13-15,14.43v40.7h-42.49V140.33Z" transform="translate(-254.01 -104.62)"/><path class="cls-2" d="M0,0H1.48A97.93,97.93,0,0,1,99.41,97.93v0a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V0A0,0,0,0,1,0,0Z"/><path class="cls-2" d="M207.86,0h1.48a0,0,0,0,1,0,0V97.93a0,0,0,0,1,0,0H109.93a0,0,0,0,1,0,0v0A97.93,97.93,0,0,1,207.86,0Z"/><path class="cls-1" d="M0,109.78H99.41a0,0,0,0,1,0,0v97.93a0,0,0,0,1,0,0H97.93A97.93,97.93,0,0,1,0,109.78v0A0,0,0,0,1,0,109.78Z"/><path class="cls-1" d="M109.93,109.78h99.41a0,0,0,0,1,0,0v0a97.93,97.93,0,0,1-97.93,97.93h-1.48a0,0,0,0,1,0,0V109.78A0,0,0,0,1,109.93,109.78Z"/></svg>
                                {{-- <img src="{{ asset('images/logo-black.png') }}" alt="Logo" class="mb-4 logo" /> --}}
                                <h4 class="mb-0">Thank you for sending us a request.</h4>
                                <p class="mb-0">we will contact you shortly</p>
                                <img src="{{ asset('images/thankyou.gif') }}" alt="Thank You" class="gif-img" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @include('whatwedo')
    </main>
@endsection

