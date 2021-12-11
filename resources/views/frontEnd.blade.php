@extends('layout_depan.template')
@section('content')
<header id="slider-area">
      <!-- Main Carousel Section -->
      <div id="carousel-area">
        <div id="carousel-slider" class="carousel slide carousel-fade" data-ride="carousel">
          <ol class="carousel-indicators">
            <li data-target="#carousel-slider" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-slider" data-slide-to="1"></li>
            <li data-target="#carousel-slider" data-slide-to="2"></li>
          </ol>
          <div class="carousel-inner" role="listbox">
            <div class="carousel-item active">
              <img src="img/slider/bg-1.jpg" alt="">
              <div class="carousel-caption text-left">
                <h3 class="wow fadeInRight" data-wow-delay="0.2s">Handcrafted</h1>  
                <h2 class="wow fadeInRight" data-wow-delay="0.4s">Bootstrap 4 Template</h2>
                <h4 class="wow fadeInRight" data-wow-delay="0.6s">Comes with All Essential Sections & Elements</h4>
                <a href="#" class="btn btn-lg btn-common btn-effect wow fadeInRight" data-wow-delay="0.9s">Download</a>
                <a href="#" class="btn btn-lg btn-border wow fadeInRight" data-wow-delay="1.2s">Get Started!</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slider/bg-3.jpg" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Bundled With Tons of</h3>
                <h2 class="wow bounceIn" data-wow-delay="0.6s">Cutting-edge Features</h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.9s">Parallax, Video, Product, Premium Addons and More...</h4>
                <a href="#" class="btn btn-lg btn-common btn-effect wow fadeInUp" data-wow-delay="1.2s">View Works</a>
              </div>
            </div>
            <div class="carousel-item">
              <img src="img/slider/bg-2.jpg" alt="">
              <div class="carousel-caption text-center">
                <h3 class="wow fadeInDown" data-wow-delay="0.3s">Ready For</h3>
                <h2 class="wow fadeInRight" data-wow-delay="0.6s">Multi-purpose Websites</h2> 
                <h4 class="wow fadeInUp" data-wow-delay="0.6s">App, Business, SaaS and Landing Pages</h4>
                <a href="#" class="btn btn-lg btn-border wow fadeInUp" data-wow-delay="0.9s">Purchase</a>
              </div>
            </div>
          </div>
          <a class="carousel-control-prev" href="#carousel-slider" role="button" data-slide="prev">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-left"></i></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carousel-slider" role="button" data-slide="next">
            <span class="carousel-control" aria-hidden="true"><i class="lni-chevron-right"></i></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>  

    </header>
    <!-- Header Section End --> 

    <!-- Services Section Start -->
    <!-- <section id="services" class="section">
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Our Services</h2>
          <span>Services</span>
          <p class="section-subtitle">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy</p>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.2s">
              <div class="icon color-1">
                <i class="lni-pencil"></i>
              </div>
              <h4>Content Writing</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.4s">
              <div class="icon color-2">
                <i class="lni-cog"></i>
              </div>
              <h4>Web Development</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.6s">
              <div class="icon color-3">
                <i class="lni-stats-up"></i>
              </div>
              <h4>Graphic Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="0.8s">
              <div class="icon color-4">
                <i class="lni-layers"></i>
              </div>
              <h4>UI/UX Design</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1s">
              <div class="icon color-5">
                <i class="lni-tab"></i>
              </div>
              <h4>App Development</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 col-xs-12">
            <div class="item-boxes services-item wow fadeInDown" data-wow-delay="1.2s">
              <div class="icon color-6">
                <i class="lni-briefcase"></i>
              </div>
              <h4>Digital Marketing</h4>
              <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut.</p>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- Services Section End -->

    <!-- Portfolio Section -->
    <section id="portfolios" class="section">
      <!-- Container Starts -->
      <div class="container">
        <div class="section-header">          
          <h2 class="section-title">Tempat Popular di Indonesia</h2>

          <p class="section-subtitle">Temukan Restaurant, Cafe, Jajanan Kaki Lima Terenak di Kota Mu</p>
        </div>
        <!-- Portfolio Recent Projects -->
        <div id="portfolio" class="row">
          @foreach($location as $loc)
          <div class="col-lg-4 col-md-6 col-xs-12 mix development print">
            <div class="portfolio-item">
              <div class="shot-item">
                <!-- ngapus class="lightbox" -->
                <a href="{{ route('list.tempat', $loc->lokasi_seo) }}">
                <img src="{{ asset('storage/'.$loc->foto) }}" style="width: 520px; height: 240px;">   
                <div class="single-content">
                  <div class="fancy-table">
                    <div class="table-cell">
                      <div class="zoom-icon">
                        <h2><font color="white"><strong>{{ $loc->nama_kota }}</strong></h2></font>
                      </div>
                    </div>
                  </div>
                </div>
                </a>
              </div>               
            </div>
          </div>
          @endforeach
        </div>
      </div>
      <!-- Container Ends -->
    </section>
    <!-- Portfolio Section Ends --> 

    <div id="subscribe" class="section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5 col-md-12 col-xs-12">
            <div class="subscribe-form">
              <div class="form-wrapper">
                <div class="sub-title text-center">
                  <h3>Rekomendasi Tempat Makan</h3>
                  <p>Silahkan rekomendasikan tempat makan favorite kalian!</p>
                </div>
                <form action="rivaldyarief@mail.ugm.ac.id" method="post" enctype="text/plain">
                  <div class="row">
                    <div class="col-12 form-line mb-2">
                      <div class="form-group">
                        <input type="text" class="form-control rounded" name="email" placeholder="Lokasi Tempat Makan">
                      </div>
                    </div>
                    <div class="col-md-12 form-line mb-2">
                      <div class="form-group">
                        <input type="text" class="form-control rounded" name="phone" placeholder="Nama Tempat">
                      </div>
                    </div>
                    <div class="col-12 form-line mb-3">
                      <div class="form-group">
                        <input type="email" class="form-control rounded" name="email" placeholder="Email">
                      </div> 
                    </div>
                    <div class="col-12">
                      <div class="form-submit">
                        <button type="submit" class="btn btn-common btn-effect">Kirim Rekomendasi</button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
          <!-- <div class="col-lg-6 col-md-12 col-xs-12">
            <div class="sub-item-box">
              <div class="icon-box">
                <i class="lni-bullhorn"></i>
              </div>
              <div class="text-box">
                <h4>Weekly Free Learning Materials</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, laborum libero beatae obcaecati.</p>
              </div>
            </div>
            <div class="sub-item-box">
              <div class="icon-box">
                <i class="lni-book"></i>
              </div>
              <div class="text-box">
                <h4>Free PDF to Get Started</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, laborum libero beatae obcaecati.</p>
              </div>
            </div>
            <div class="sub-item-box">
              <div class="icon-box">
                <i class="lni-timer"></i>
              </div>
              <div class="text-box">
                <h4>10% Instant Discount</h4>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius, laborum libero beatae obcaecati.</p>
              </div>
            </div>
          </div> -->
        </div>
      </div>
    </div>

    <!-- Footer Section Start -->
    <footer>
      <!-- Footer Area Start -->
      <section class="footer-Content">
        <div class="container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <h3>Boomberg</h3>
              <div class="textwidget">
                <p>Boomberg memudahkan kamu dalam mencari dan menemukan tempat makan favorite di seluruh Indonesia.</p>
              </div>
              <ul class="footer-social">
                <li><a class="facebook" href="#"><i class="lni-facebook-filled"></i></a></li>
                <li><a class="twitter" href="#"><i class="lni-twitter-filled"></i></a></li>
                <li><a class="linkedin" href="#"><i class="lni-linkedin-fill"></i></a></li>
                <li><a class="google-plus" href="#"><i class="lni-google-plus"></i></a></li>
              </ul> 
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Short Link</h3>
                <ul class="menu">
                  <li><a href="#">Home</a></li>
                  <li><a href="#portfolios">Tempat Popular</a></li>
                  <li><a href="#subscribe">Rekomendasi</a></li>
                </ul>
              </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 col-mb-12">
              <div class="widget">
                <h3 class="block-title">Contact Us</h3>
                <ul class="contact-footer">
                  <li>
                    <strong>Address :</strong> <span>Bulaksumur, Caturtunggal, Kec. Depok, Kabupaten Sleman, Daerah Istimewa Yogyakarta</span>
                  </li>
                  <li>
                    <strong>Phone :</strong> <span>+62895610769630</span>
                  </li>
                  <li>
                    <strong>E-mail :</strong> <span><a href="#">Boomberg@gmail.com</a></span>
                  </li>
                </ul> 
              </div>
            </div>
        
          </div>
        </div>
      </section>
      <!-- Footer area End -->


    </footer>
    <!-- Footer Section End -->
@endsection