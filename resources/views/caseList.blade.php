@extends('layouts.app')
@section('content')
@include('inc.header')
<!-- Find Job Section Start -->
<section class="find-job section">
        <div class="container">
          <div class="row">
            

            <div class="col-md-12">
            <div class="thumb">
            <div class="job-list-content">
            <div class="job-tag">

              <div class="pull-left">
                      <div class="meta-tag">
                          <div><h2 class="section-title">Hot Jobs</h2></div>
                      </div>
                    </div>

            <div class="pull-right" style="float:right">
              <a href="/addCase" class="btn btn-common btn-rm" style="float:right">Add Case</a>
            </div></div></div></div></div>
          </div>

          <div class="row">
            <div class="col-md-12">
              <div class="job-list">
                <div class="thumb">
                  <a href="job-details.html"><img src="assets/img/jobs/img-1.jpg" alt=""></a>
                </div>
                <div class="job-list-content">
                  <h4><a href="job-details.html">Need a web designer</a><span class="full-time">Full-Time</span></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                  <div class="job-tag">
                    <div class="pull-left">
                      <div class="meta-tag">
                        <span><a href="browse-categories.html"><i class="ti-brush"></i>Art/Design</a></span>
                        <span><i class="ti-location-pin"></i>Washington, USA</span>
                        <span><i class="ti-time"></i>60/Hour</span>
                      </div>
                    </div>
                    <div class="pull-right">
                      <div class="icon">
                        <i class="ti-heart"></i>
                      </div>
                      <a href="job-details.html" class="btn btn-common btn-rm">More Detail</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="job-details.html"><img src="assets/img/jobs/img-2.jpg" alt=""></a>
                </div>
                <div class="job-list-content">
                  <h4><a href="job-details.html">Front-end developer needed</a><span class="full-time">Full-Time</span></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                  <div class="job-tag">
                    <div class="pull-left">
                      <div class="meta-tag">
                        <span><a href="browse-categories.html"><i class="ti-desktop"></i>Technologies</a></span>
                        <span><i class="ti-location-pin"></i>Cupertino, CA, USA</span>
                        <span><i class="ti-time"></i>60/Hour</span>
                      </div>
                    </div>
                    <div class="pull-right">
                      <div class="icon">
                        <i class="ti-heart"></i>
                      </div>
                      <a href="job-details.html" class="btn btn-common btn-rm">More Detail</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="job-details.html"><img src="assets/img/jobs/img-3.jpg" alt=""></a>
                </div>
                <div class="job-list-content">
                  <h4><a href="job-details.html">Senior Accountant</a><span class="part-time">Part-Time</span></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                  <div class="job-tag">
                    <div class="pull-left">
                      <div class="meta-tag">
                        <span><a href="browse-categories.html"><i class="ti-home"></i>Finance</a></span>
                        <span><i class="ti-location-pin"></i>Delaware, USA</span>
                        <span><i class="ti-time"></i>60/Hour</span>
                      </div>
                    </div>
                    <div class="pull-right">
                      <div class="icon">
                        <i class="ti-heart"></i>
                      </div>
                      <a href="job-details.html" class="btn btn-common btn-rm">More Detail</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="job-list">
                <div class="thumb">
                  <a href="job-details.html"><img src="assets/img/jobs/img-4.jpg" alt=""></a>
                </div>
                <div class="job-list-content">
                  <h4><a href="job-details.html">Fullstack web developer needed</a><span class="full-time">Full-Time</span></h4>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illum quaerat aut veniam molestiae atque dolorum omnis temporibus consequuntur saepe. Nemo atque consectetur saepe corporis odit in dicta reprehenderit, officiis, praesentium?</p>
                  <div class="job-tag">
                    <div class="pull-left">
                      <div class="meta-tag">
                        <span><a href="browse-categories.html"><i class="ti-desktop"></i>Technologies</a></span>
                        <span><i class="ti-location-pin"></i>New York, USA</span>
                        <span><i class="ti-time"></i>60/Hour</span>
                      </div>
                    </div>
                    <div class="pull-right">
                      <div class="icon">
                        <i class="ti-heart"></i>
                      </div>
                      <a href="job-details.html" class="btn btn-common btn-rm">More Detail</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-md-12">
              <div class="showing pull-left">
                <a href="#">Showing <span>6-10</span> Of 24 Jobs</a>
              </div>                    
              <ul class="pagination pull-right">              
                <li class="active"><a href="#" class="btn btn-common" ><i class="ti-angle-left"></i> prev</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li class="active"><a href="#" class="btn btn-common">Next <i class="ti-angle-right"></i></a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- Find Job Section End -->
      @endsection