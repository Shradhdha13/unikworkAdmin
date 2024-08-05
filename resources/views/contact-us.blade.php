@extends('layouts.apps',['data' => $data])
@section('content')
    <link href="{{ captcha_layout_stylesheet_url() }}" type="text/css" rel="stylesheet">
    <main id="contact-us">
        <section class="banner-sec">
            <div class="container-fluid">
                <div class="container">
                    <h1>Contact Us</h1>
                </div>
            </div>
        </section>

        <section class="contact-us-form">
            <div class="container-fluid">
                <div class="container cross-sec">
                    <div class="row align-items-center">
                        <div class="col-sm-12 col-xl-6 mt-4 mb-4 wow fadeInUp">
                            <svg xmlns="http://www.w3.org/2000/svg" width="100.005" height="100" viewBox="0 0 100.005 100" class="illustration-sec-icon">
                                <g id="statistic" transform="translate(-195.997 -744)">
                                  <g id="Group_2194" data-name="Group 2194" transform="translate(196.002 759.385)">
                                    <path id="Path_10861" data-name="Path 10861" d="M296,753.923a1.929,1.929,0,0,1-1.923,1.923H197.923a1.923,1.923,0,0,1,0-3.846h96.154A1.929,1.929,0,0,1,296,753.923Z" transform="translate(-196 -752)" fill="#231f20"/>
                                  </g>
                                  <path id="Path_10862" data-name="Path 10862" d="M286.462,746H201.846A3.857,3.857,0,0,0,198,749.846v7.692h92.308v-7.692A3.857,3.857,0,0,0,286.462,746Zm-80.769,7.692a1.923,1.923,0,1,1,1.923-1.923A1.929,1.929,0,0,1,205.692,753.692Zm9.615,0a1.923,1.923,0,1,1,1.923-1.923A1.929,1.929,0,0,1,215.308,753.692Zm9.615,0a1.923,1.923,0,1,1,1.923-1.923A1.929,1.929,0,0,1,224.923,753.692Z" transform="translate(1.848 1.846)" fill="#231f20" opacity="0.5"/>
                                  <path id="Path_10863" data-name="Path 10863" d="M231.612,784v3.846H207.42L211.266,784Z" transform="translate(10.544 36.923)" fill="#231f20"/>
                                  <path id="Path_10864" data-name="Path 10864" d="M296,751.692v65.385a7.69,7.69,0,0,1-7.692,7.692h-3.846v-3.846h3.846a3.857,3.857,0,0,0,3.846-3.846V751.692a3.857,3.857,0,0,0-3.846-3.846H203.692a3.857,3.857,0,0,0-3.846,3.846v65.385a3.857,3.857,0,0,0,3.846,3.846h12.654l-3.846,3.846h-8.808A7.69,7.69,0,0,1,196,817.077V751.692A7.69,7.69,0,0,1,203.692,744h84.615A7.69,7.69,0,0,1,296,751.692Z" transform="translate(0.002 0)" fill="#231f20"/>
                                  <g id="Group_2195" data-name="Group 2195" transform="translate(249.848 820.923)">
                                    <rect id="Rectangle_463" data-name="Rectangle 463" width="9.615" height="3.846" fill="#231f20"/>
                                  </g>
                                  <g id="Group_2196" data-name="Group 2196" transform="translate(267.156 820.923)">
                                    <rect id="Rectangle_464" data-name="Rectangle 464" width="9.615" height="3.846" fill="#231f20"/>
                                  </g>
                                  <path id="Path_10865" data-name="Path 10865" d="M286.368,762.635c-.019-.058-.038-.135-.058-.192a.027.027,0,0,0,0-.038,1.087,1.087,0,0,0-.077-.231,1.89,1.89,0,0,0-1.019-1.019,1.089,1.089,0,0,0-.231-.077.027.027,0,0,0-.039,0,.689.689,0,0,0-.192-.038.748.748,0,0,0-.288-.038h-9.615a1.923,1.923,0,1,0,0,3.846h4.962l-22.269,22.289-10.173-10.192a1.938,1.938,0,0,0-2.731,0l-28.288,28.288-3.846,3.846L196.56,825.019a1.938,1.938,0,0,0,0,2.731,1.95,1.95,0,0,0,2.731,0l22.519-22.519L246,781.019l10.173,10.192a1.939,1.939,0,0,0,2.731,0l23.635-23.635v4.962a1.923,1.923,0,1,0,3.846,0v-9.615A1.456,1.456,0,0,0,286.368,762.635Z" transform="translate(0 15.692)" fill="#231f20" opacity="0.5"/>
                                  <g id="Group_2197" data-name="Group 2197" transform="translate(215.233 769)">
                                    <path id="Path_10866" data-name="Path 10866" d="M220.808,757a3.187,3.187,0,0,0-.769.077,4.341,4.341,0,0,0-2.923,1.9,8.513,8.513,0,0,1-7.1,3.788h-2.1A1.929,1.929,0,0,0,206,764.692v11.538a1.884,1.884,0,0,0,.75,1.5l.019.019a1.911,1.911,0,0,0,1.154.4h2.1a8.483,8.483,0,0,1,7.077,3.769,4.381,4.381,0,0,0,2.942,1.923,3.187,3.187,0,0,0,.769.077,4.424,4.424,0,0,0,4.423-4.423V761.423A4.424,4.424,0,0,0,220.808,757Zm.577,22.5a.578.578,0,0,1-.577.577.837.837,0,0,1-.1-.019.547.547,0,0,1-.4-.231,12.293,12.293,0,0,0-10.288-5.519h-.173v-7.692h.173a12.323,12.323,0,0,0,10.308-5.538.514.514,0,0,1,.385-.211c.038,0,.058-.019.1-.019h-.058l.058-1.923v1.923h.019a.563.563,0,0,1,.558.577Z" transform="translate(-206 -757)" fill="#231f20"/>
                                  </g>
                                  <path id="Path_10867" data-name="Path 10867" d="M212.538,760h-3.846a7.686,7.686,0,0,0-1.365,15.25h.019a6.275,6.275,0,0,0,1.346.135h3.846a1.929,1.929,0,0,0,1.923-1.923V761.923A1.929,1.929,0,0,0,212.538,760Zm-7.692,7.692a3.857,3.857,0,0,1,3.846-3.846h1.923v7.692h-1.942A3.853,3.853,0,0,1,204.846,767.692Z" transform="translate(4.618 14.769)" fill="#231f20"/>
                                  <path id="Path_10868" data-name="Path 10868" d="M208.769,762v7.692h-1.942a3.846,3.846,0,0,1,.019-7.692Z" transform="translate(6.464 16.616)" fill="coral"/>
                                  <g id="Group_2198" data-name="Group 2198" transform="translate(211.386 786.307)">
                                    <path id="Path_10869" data-name="Path 10869" d="M209.772,779.462a1.925,1.925,0,0,1-1.788-1.21l-3.846-9.615a1.924,1.924,0,1,1,3.573-1.427l3.846,9.615a1.921,1.921,0,0,1-1.785,2.636Z" transform="translate(-203.999 -765.999)" fill="#231f20"/>
                                  </g>
                                  <g id="Group_2199" data-name="Group 2199" transform="translate(242.156 809.385)" opacity="0.5">
                                    <path id="Path_10870" data-name="Path 10870" d="M227.692,779.923v30.769H220V779.923A1.929,1.929,0,0,1,221.923,778h3.846A1.929,1.929,0,0,1,227.692,779.923Z" transform="translate(-220 -778)" fill="#231f20"/>
                                  </g>
                                  <g id="Group_2200" data-name="Group 2200" transform="translate(224.848 828.615)" opacity="0.5">
                                    <path id="Rectangle_465" data-name="Rectangle 465" d="M1,0H6.692a1,1,0,0,1,1,1V13.462a0,0,0,0,1,0,0H0a0,0,0,0,1,0,0V1A1,1,0,0,1,1,0Z" fill="#231f20"/>
                                  </g>
                                  <g id="Group_2201" data-name="Group 2201" transform="translate(259.464 817.077)" opacity="0.5">
                                    <path id="Path_10871" data-name="Path 10871" d="M236.692,783.923V807H229V783.923A1.929,1.929,0,0,1,230.923,782h3.846A1.929,1.929,0,0,1,236.692,783.923Z" transform="translate(-229 -782)" fill="#231f20"/>
                                  </g>
                                  <g id="Group_2202" data-name="Group 2202" transform="translate(276.772 801.692)" opacity="0.5">
                                    <path id="Path_10872" data-name="Path 10872" d="M245.692,775.923v38.462H238V775.923A1.929,1.929,0,0,1,239.923,774h3.846A1.929,1.929,0,0,1,245.692,775.923Z" transform="translate(-238 -774)" fill="#231f20"/>
                                  </g>
                                  <g id="Group_2203" data-name="Group 2203" transform="translate(215.233 840.154)">
                                    <path id="Path_10873" data-name="Path 10873" d="M284.846,797.846H207.923a1.923,1.923,0,0,1,0-3.846h76.923a1.923,1.923,0,0,1,0,3.846Z" transform="translate(-206 -794)" fill="#231f20"/>
                                  </g>
                                </g>
                            </svg>
                            <h2>Tell Us Your Technological Goals</h2>
                            <p>Connect with us directly by giving us a call or by filling in the contact form below to schedule an obligation-free consultation. A Unikwork Representative will get in touch with you to discuss how we can help you realize your goals.</p>
                        </div>
                        <div class="col-sm-12 col-xl-6 contact-form-main">
                            <form class="contact-form" id="contact_form" method="post" action="{{ route('add-contact') }}">
                                @csrf
                                <h3 class="form-title">How can we help?</h3>
                                <div class="form-group">
                                    <label>First name <span>*</span></label>
                                    <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name">
                                    <label class="error">
                                        {{$errors->first('firstname')}}
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>Last name <span>*</span></label>
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name">
                                    <label class="error">
                                        {{$errors->first('lastname')}}
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>Email address <span>*</span></label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email address">
                                    <label class="error">
                                        {{$errors->first('email')}}
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>Phone number <span>*</span></label>
                                    <input type="number" class="form-control" id="phone" name="phone" placeholder="+91 012-345-6789">
                                    <label class="error">
                                        {{$errors->first('phone')}}
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>I am a <span>*</span></label>
                                    <select name="iam" id="iam" class="form-control">
                                        <option value="">-- Select I am a --</option>
                                        <option value="Entrepreneur / Startup Founder">Entrepreneur / Startup Founder</option>
                                        <option value="Marketing Executive">Marketing Executive</option>
                                        <option value="Small Business Owner">Small Business Owner</option>
                                        <option value="Corporation">Corporation</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <label class="error">
                                        {{$errors->first('iam')}}
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>I need help with <span>*</span></label>
                                    <select name="help" id="help" class="form-control">
                                        <option value="">-- I need help with --</option>
                                        <option value="Building a new product">Building a New Product</option>
                                        <option value="Modernize Existing Product">Modernize Existing Product</option>
                                        <option value="Add a Feature">Add a Feature</option>
                                        <option value="Consultation">Consultation</option>
                                        <option value="Other">Other</option>
                                    </select>
                                    <label class="error">
                                        {{$errors->first('help')}}
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>Tell us about your project <span>*</span></label>
                                    <textarea class="form-control" id="message" rows="5" name="message" placeholder="Your message"></textarea>
                                    <label class="error">
                                        {{$errors->first('message')}}
                                    </label>
                                </div>

                                <div class="form-group">
                                    <label>Captcha <span>*</span></label>
                                    {!! captcha_image_html('ContactCaptcha') !!}
                                    <input class="form-control" type="text" id="CaptchaCode" name="captcha">
                                    <label class="error">
                                        {{ $errors->first('captchacode') }}
                                    </label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn button-primary">Send Message</button>
                                </div>
                            </form>
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
        </div>
    </main>
@endsection
