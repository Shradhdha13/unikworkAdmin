@extends('admin.layouts.layout')

@section('title','Home')

@section('content')
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 grid-margin">
              <div class="row">
                <div class="col-12">
                  {{-- <h3 class="font-weight-bold">Welcome {{ Auth::user()->name }}</h3> --}}
                  <h3 class="font-weight-bold">Welcome Admin</h3>
                    <div class="row align-items-center dashboard">
                      <div class="col col-sm-6 admin-calender">
                        <section class="ftco-section">
                            <div class="elegant-calencar d-md-flex">
                              <div class="wrap-header d-flex align-items-center img calendar-bg">
                                <p id="reset">Today</p>
                                <div id="header" class="p-0">
                                  <!-- <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div> -->
                                  <div class="head-info">
                                    <div class="head-month"></div>
                                      <div class="head-day"></div>
                                  </div>
                                </div>
                              </div>
                              <div class="calendar-wrap">
                                <div class="w-100 button-wrap">
                                  <div class="pre-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-left"></i></div>
                                  <div class="next-button d-flex align-items-center justify-content-center"><i class="fa fa-chevron-right"></i></div>
                                </div>
                                <table id="calendar">
                                  <thead>
                                      <tr>
                                        <th>Sun</th>
                                        <th>Mon</th>
                                        <th>Tue</th>
                                        <th>Wed</th>
                                        <th>Thu</th>
                                        <th>Fri</th>
                                        <th>Sat</th>
                                      </tr>
                                  </thead>
                                  <tbody>
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                    <tr>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                      <td></td>
                                    </tr>
                                  </tbody>
                                </table>
                              </div>
                            </div>
                        </section>
                      </div>
                      <div class="col col-sm-6 counter">
                        <div class="row">
                          <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-tale">
                              <div class="card-body">
                                <p class="mb-4">Total Contact Data</p>
                                <p class="fs-38 mb-2">{{ $contactCount }}</p>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 mb-4 stretch-card transparent">
                            <div class="card card-dark-blue">
                              <div class="card-body">
                                <p class="mb-4">Total Careers Data</p>
                                <p class="fs-38 mb-2">{{ $careerCount }}</p>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row">
                          <div class="col-md-6 mb-4 mb-lg-0 stretch-card transparent">
                            <div class="card card-light-blue">
                              <div class="card-body">
                                <p class="mb-4">Monthly Contact Data</p>
                                <div class="d-flex">
                                  <p class="fs-38 mr-4">{{ $contactMonthlyCount }}</p>
                                  <p>{{ $contactPr }}% (30 days)</p>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md-6 stretch-card transparent">
                            <div class="card card-light-danger">
                              <div class="card-body">
                                <p class="mb-4">Monthly Careers Data</p>
                                <div class="d-flex">
                                  <p class="fs-38 mr-4">{{ $careerMonthlyCount }}</p>
                                  <p>{{ $careerPr }}% (30 days)</p>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="col col-md-6 chart">
                        <div class="card">
                          <div class="card-body">
                           <div class="d-flex justify-content-between">
                            <p class="card-title">Contact & Careers Data</p>
                           </div>
                            
                            <div id="sales-legend" class="chartjs-legend mt-4 mb-2"></div>
                            <canvas id="sales-chart"></canvas>
                          </div>
                        </div>
                      </div>
                      <div class="col col-md-6 blog">
                        <div class="card">
                          <div class="card-body">
                            <p class="card-title">Blogs</p>
                            <ul class="icon-data-list">
                              @foreach($blogData as $Blog)
                                <li>
                                  <div class="d-flex">
                                    <img src="{{ URL::to('public/blog_images').'/'.$Blog->image_medium }}" alt="images" />
                                    <div>
                                      <p class="text-info mb-1">{{ $Blog->title }}</p>
                                      <p class="blog-content">{{ $Blog->subtitle }}</p>
                                      <small>{{$Blog->created_at->format('d M, Y')}}</small>
                                    </div>
                                  </div>
                                </li>
                              @endforeach 
                            </ul>
                          </div>
                        </div>
                      </div>
                    </div>
                </div>
              </div>
            </div>
          </div>      

        </div>

@endsection

@section('js')
  <script src="{{ asset('admin-assets/js/main.js') }}"></script>
  <script>
    var contactCount = <?php echo $counts['contactDataCount']?>;
    var careerCount = <?php echo $counts['careerDataCount']?>;
  </script>
@endsection