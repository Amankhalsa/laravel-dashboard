<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <!-- Required meta tags -->
  <title>@yield('title') - Luxury Eye Wear</title>
  <meta charset="utf-8">
     <!-- CSRF Token -->
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta name="description" content="@yield('description')">
  <meta name="keywords" content="@yield('keywords')">
  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Bootstrap CSS -->
  <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">
</head>
<body>
  {{-- header  start  --}}
  @include('frontend.body.header')
  {{-- header  end  --}}
  @yield('content')

  <!-- <section>
    <div class="section_space">
      <div class="container">
        <div class="maxWdTitle pb-3">
          <h4 class="lgTitle pb-3">What People Say About Us</h4>
          <p>SvaLove Mindspace provides the best professionals across all sectors for the mental wellbeing of the users. Take a look at what People Say About Us. </p>
        </div>
        <div class="swiper testimonialSlider">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="testimonialImgCol">
                    <img src="images/lg-dots.svg" alt="..." class="testimonialDotsImg">
                    <span class="testimonialUserImg">
                      <img src="images/testimonial-img.jpg" alt="...">
                    </span>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="testimonialContent">
                    <figure>
                      <blockquote class="blockquote">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                      </blockquote>
                      <figcaption class="blockquote-footer">
                        <span>Tom cruise</span> <cite title="Source Title">Information on its origins</cite>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="testimonialImgCol">
                    <img src="images/lg-dots.svg" alt="..." class="testimonialDotsImg">
                    <span class="testimonialUserImg">
                      <img src="images/testimonial-img2.jpg" alt="...">
                    </span>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="testimonialContent">
                    <figure>
                      <blockquote class="blockquote">
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                      </blockquote>
                      <figcaption class="blockquote-footer">
                        <span>Fan Bingbing</span> <cite title="Source Title">Information on its origins</cite>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="testimonialImgCol">
                    <img src="images/lg-dots.svg" alt="..." class="testimonialDotsImg">
                    <span class="testimonialUserImg">
                      <img src="images/testimonial-img3.jpg" alt="...">
                    </span>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="testimonialContent">
                    <figure>
                      <blockquote class="blockquote">
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                      </blockquote>
                      <figcaption class="blockquote-footer">
                        <span>Katherine Langford</span> <cite title="Source Title">Information on its origins</cite>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
            </div>
            <div class="swiper-slide">
              <div class="row align-items-center">
                <div class="col-lg-6">
                  <div class="testimonialImgCol">
                    <img src="images/lg-dots.svg" alt="..." class="testimonialDotsImg">
                    <span class="testimonialUserImg">
                      <img src="images/testimonial-img2.jpg" alt="...">
                    </span>
                  </div>
                </div>
                <div class="col-lg-6">
                  <div class="testimonialContent">
                    <figure>
                      <blockquote class="blockquote">
                        <p>Lorem Ipsum has been the industry's standard dummy text ever since Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and typesetting industry.  </p>
                      </blockquote>
                      <figcaption class="blockquote-footer">
                        <span>Fan Bingbing</span> <cite title="Source Title">Information on its origins</cite>
                      </figcaption>
                    </figure>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-pagination"></div>
        </div>
      </div>
    </div>
  </section> -->
 {{-- Footer  --}}
 @include('frontend.body.footer')
 {{-- footer  --}}
 

<div class="backDrop"></div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="{{asset('frontend/js/script.js')}}"></script>
  <script>
        var swiper = new Swiper(".logoSwiper", {
           autoplay: {
          delay: 2400,
          disableOnInteraction: false,
        },
      slidesPerView: 1,
      spaceBetween: 5,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      breakpoints: {
          375: {
            slidesPerView: 2,
            spaceBetween: 20,
          },
          480: {
            slidesPerView: 3,
            spaceBetween: 10,
          },
          768: {
            slidesPerView: 4,
            spaceBetween: 10,
          },
          1200: {
            slidesPerView: 5,
            spaceBetween: 10,
          },
        },
    });
  </script>

  <script>
    var swiper = new Swiper(".testimonialSlider", {
      spaceBetween: 30,
      effect: "fade",
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
  <script>
    var swiper = new Swiper(".bannerSlider", {
      autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
</script>
</body>
</html>
