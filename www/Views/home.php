      <style>
ul.timeline {
    list-style-type: none;
    position: relative;
}
ul.timeline:before {
    content: ' ';
    background: #d4d9df;
    display: inline-block;
    position: absolute;
    left: 29px;
    width: 2px;
    height: 100%;
    z-index: 400;
}
ul.timeline > li {
    margin: 20px 0;
    padding-left: 20px;
}
ul.timeline > li:before {
    content: ' ';
    background: white;
    display: inline-block;
    position: absolute;
    border-radius: 50%;
    border: 3px solid #22c0e8;
    left: 20px;
    width: 20px;
    height: 20px;
    z-index: 400;
}
        .bg-overlay{
          background: rgba(0,0,0, .7);
          position: absolute;
          top: -60px;
          bottom: -100px;
          left: 0;
          right:0;
          z-index: 0;
        }
        video {
            position: absolute;
            top: 50%;
            left: 50%;
            min-width: 100%;
            min-height: 100%;
            width: auto;
            height: auto;
            z-index: -100;
            -moz-transform: translateX(-50%) translateY(-50%);
            -ms-transform: translateX(-50%) translateY(-50%);
            -webkit-transform: translateX(-50%) translateY(-50%);
            transform: translateX(-50%) translateY(-50%);
            background: url(facade.jpg) no-repeat;
            background-size: cover;
            -webkit-transition: 1s opacity;
            transition: 1s opacity;
            z-index: 0;
        }
        .ov-hidden{
          overflow: hidden;
        }
      </style>

      <section class="ov-hidden pt-5 pb-5 bg-dark position-relative" style="min-height:100vh; background-image: url(https://images.unsplash.com/photo-1498050108023-c5249f4df085?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1652&q=80); background-size: cover;">

        <!--video component -->
        <video playsinline="" autoplay="true" muted="true" loop="true" poster="http://casagiacometti.com/photo/facade.JPG" id="bgvid">
          <source src="http://casagiacometti.com/rain.webm" type="video/webm">
            <!--<source srcRA="rain.mp4" type="video/mp4">-->
          </video>
          <div class="bg-overlay"></div>

        <div class="container pt-5 pb-5 position-relative">
          <div class="row d-flex justify-content-between pt-lg-5 align-items-center">
            <div class="col-xl-5 col-lg-6 col-md-7 text-center text-lg-left mb-5 mb-lg-0">
              <h1 class="display-3 font-weight-bold text-white" data-aos="fade-up">Build better websites faster</h1>
              <div class="my-4" data-aos="fade-up">
                <p class="lead text-white">Lorem ipsum dolor sit amet, consectetur adipiscing eliterat sed sem sagittis cursus.</p>
              </div>
              <div class="d-flex justify-content-center justify-content-lg-start" data-aos="fade-up">
                <div class="d-flex mr-2">
                  <i class="fas fa-star fa-lg text-warning m-1"></i>
                  <i class="fas fa-star fa-lg text-warning m-1"></i>
                  <i class="fas fa-star fa-lg text-warning m-1"></i>
                  <i class="fas fa-star fa-lg text-warning m-1"></i>
                  <i class="fas fa-star fa-lg text-warning m-1"></i>
                </div>
                <span class="text-white">(Average score: 4.9/5)</span>
              </div>
            </div>
            <div class="col">
              <div class="row justify-content-center">
                <div class="col-xl-8 col-md-10">
                  <form class="position-relative d-block" data-aos="fade-up">
                    <div class="form-group">
                      <label class="text-white" for="course-name-1">Your Name</label>
                      <input name="course-name" id="course-name-1" type="text" class="form-control form-control-lg" placeholder="Type your name">
                    </div>
                    <div class="form-group">
                      <label class="text-white" for="course-email-1">Email Address</label>
                      <input name="course-email" id="course-email-1" type="email" class="form-control form-control-lg" placeholder="you@yoursite.com">
                    </div>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-12">
                          <div class="form-group mb-1">
                            <label class="text-white">Skill Level:</label>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group rounded bg-white p-2 border">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="course-radio-beginner-1" name="course-radio-1" class="custom-control-input">
                              <label class="custom-control-label" for="course-radio-beginner-1">Beginner</label>
                            </div>
                          </div>
                        </div>
                        <div class="col">
                          <div class="form-group rounded bg-white p-2 border">
                            <div class="custom-control custom-radio">
                              <input type="radio" id="course-radio-advanced-1" name="course-radio-1" class="custom-control-input">
                              <label class="custom-control-label" for="course-radio-advanced-1">Advanced</label>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group text-center">
                      <button class="btn btn-lg btn-success btn-block mb-2" type="submit">Claim your free spot</button>
                      <small class="text-white">You’ll recieve your first lesson via email in less than a minute.</small>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </section>
      <section class="pt-5 pb-5 bg-light" style="">
        <div class="container  pt-5 pb-5">
          <div class="row d-flex justify-content-between">
            <div class="col-md-6">
              <h3 class=" display-4 font-weight-bold" data-aos="fade-up">Start building beautiful websites</h3>
              <p class="lead mt-4" data-aos="fade-up">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
              <div class="row row-grid">
                <div class="col-xs-4 col-md-4 my-1 " data-aos="fade-up">
                  <img src="https://via.placeholder.com/150x45/ccc/ffffff&text=IMG LOGO" alt="" class="img-fluid">
                </div>
                <div class="col-xs-4 col-md-4 my-1" data-aos="fade-up">
                  <img src="https://via.placeholder.com/150x45/ccc/ffffff&text=IMG LOGO" alt="" class="img-fluid">
                </div>
                <div class="col-xs-4 col-md-4 my-1" data-aos="fade-up">
                  <img src="https://via.placeholder.com/150x45/ccc/ffffff&text=IMG LOGO" alt="" class="img-fluid">
                </div>
              </div>
            </div>
            <div class="col-md-5" data-aos="fade-up">
              <div id="carouselExampleTestimonials" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                  <div class="carousel-item">
                    <div class="container-fluid">
                      <div class="row   justify-content-center d-flex  ">
                        <div class="col-md-12  card px-5 text-dark py-5">
                          <div class="d-flex justify-content-center justify-content-lg-start">
                            <div class="d-flex mr-2">
                              <i class="fas fa-star text-warning mr-1"></i>
                              <i class="fas fa-star text-warning mr-1"></i>
                              <i class="fas fa-star text-warning mr-1"></i>
                              <i class="fas fa-star text-warning mr-1"></i>
                              <i class="fas fa-star text-warning mr-1"></i>
                            </div>
                          </div>
                          <blockquote class="blockquote blockquote-reverse mt-4">
                            <p class="lead font-weight-bold mt-2">"Lorem ipsum dolor sit amet, consectetur adipiscing eliterat sed".</p>
                            <div class="mt-3 d-flex align-items-center pt-2">
                              <div class="mr-3">
                                <img class="d-block img-fluid rounded-circle" src="https://via.placeholder.com/40x40/5fa9f8/ffffff " srcset="https://via.placeholder.com/120x120/5fa9f8/ffffff 2x" alt="user">
                              </div>
                              <div class="d-block">
                                <p class="mb-0">User Name</p>
                                <p class="small">Designer</p>
                              </div>
                            </div>
                          </blockquote>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item">
                    <div class="container-fluid">
                      <div class="row   justify-content-center d-flex  ">
                        <div class="col-md-12  card px-5 text-dark py-5">
                          <div class="d-flex justify-content-center justify-content-lg-start">
                            <div class="d-flex mr-2">
                              <i class="fas fa-star text-warning mr-1"></i>
                              <i class="fas fa-star text-warning mr-1"></i>
                              <i class="fas fa-star text-warning mr-1"></i>
                              <i class="fas fa-star text-warning mr-1"></i>
                              <i class="fas fa-star text-warning mr-1"></i>
                            </div>
                          </div>
                          <blockquote class="blockquote blockquote-reverse mt-4">
                            <p class="lead font-weight-bold mt-2">"Lorem ipsum dolor sit amet, consectetur adipiscing eliterat sed".</p>
                            <div class="mt-3 d-flex align-items-center pt-2">
                              <div class="mr-3">
                                <img class="d-block img-fluid rounded-circle" src="https://via.placeholder.com/40x40/5fa9f8/ffffff " srcset="https://via.placeholder.com/120x120/5fa9f8/ffffff 2x" alt="user">
                              </div>
                              <div class="d-block">
                                <p class="mb-0">User Name</p>
                                <p class="small">Designer</p>
                              </div>
                            </div>
                          </blockquote>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="carousel-item active">
                    <div class="container-fluid">
                      <div class="row   justify-content-center d-flex  ">
                        <div class="col-md-12  card px-5 text-dark py-5">
                          <div class="d-flex justify-content-center justify-content-lg-start">
                            <div class="d-flex mr-2">
                              <i class="fas fa-star text-warning mr-1"></i>
                              <i class="fas fa-star text-warning mr-1"></i>
                              <i class="fas fa-star text-warning mr-1"></i>
                              <i class="fas fa-star text-warning mr-1"></i>
                              <i class="fas fa-star text-warning mr-1"></i>
                            </div>
                          </div>
                          <blockquote class="blockquote blockquote-reverse mt-4">
                            <p class="lead font-weight-bold mt-2">"Lorem ipsum dolor sit amet, consectetur adipiscing eliterat sed".</p>
                            <div class="mt-3 d-flex align-items-center pt-2">
                              <div class="mr-3">
                                <img class="d-block img-fluid rounded-circle" src="https://via.placeholder.com/40x40/5fa9f8/ffffff " srcset="https://via.placeholder.com/120x120/5fa9f8/ffffff 2x" alt="user">
                              </div>
                              <div class="d-block">
                                <p class="mb-0">User Name</p>
                                <p class="small">Designer</p>
                              </div>
                            </div>
                          </blockquote>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section>
        <div class="container mt-5 mb-5">
            <div class="row">
                <div class="col-md-10 offset-md-1">
                    <h4>Latest News</h4>
                    <ul class="timeline">
                        <li>
                            <a target="_blank" href="https://www.totoprayogo.com/#">New Web Design</a>
                            <a href="#" class="float-right">21 March, 2014</a>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque scelerisque diam non nisi semper, et elementum lorem ornare. Maecenas placerat facilisis mollis. Duis sagittis ligula in sodales vehicula....</p>
                        </li>
                        <li>
                            <a href="#">21 000 Job Seekers</a>
                            <a href="#" class="float-right">4 March, 2014</a>
                            <p>Curabitur purus sem, malesuada eu luctus eget, suscipit sed turpis. Nam pellentesque felis vitae justo accumsan, sed semper nisi sollicitudin...</p>
                        </li>
                        <li>
                            <a href="#">Awesome Employers</a>
                            <a href="#" class="float-right">1 April, 2014</a>
                            <p>Fusce ullamcorper ligula sit amet quam accumsan aliquet. Sed nulla odio, tincidunt vitae nunc vitae, mollis pharetra velit. Sed nec tempor nibh...</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
      </section>
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <script>
        AOS.init({
          duration: 1200,
        })
      </script>