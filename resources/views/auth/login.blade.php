<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <title>Luxury Eye Wear</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

  <!-- Bootstrap CSS -->
  <link href="{{asset('frontend/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('frontend/css/style.css')}}" rel="stylesheet">


</head>

<body>
 @include('frontend.body.header')
  <section>
    <div class="login_section">
      <div class="container">
        <div class="user signinBx">
          <div class="imgBx"><img src="{{asset('frontend/images/img_grid2.png')}}" alt="" /></div>
          <div class="formBx">
 

                <form method="POST" action="{{ route('login') }}" class="formStyle2">
                    @csrf
              <h2 class="mdTitle pb-2">Sign In</h2>
              <div class="row gy-2">
                <div class="col-12">
                  <input  id="email" name="email" type="email"  placeholder="Email" class="form-control"  required/>
                  @error('email')
                  <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
                  @enderror
                </div>
                <div class="col-12">
                  <input name="password" id="password" type="password"  placeholder="Password" class="form-control"  required/>
                @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
                @enderror
               
                </div>
                <div class="col">
                  <a href="{{route('password.request')}}" class="forgotPwd">Lost your password?</a>
                </div>
                <div class="col-auto">
                  <label for="remember">
                      <input class="form-check-input" type="checkbox"   name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                      Remember me
                  </label>
                </div>
                <div class="col-12">
                  <button class="btn btnDark w-100"> Login </button>
                </div>
            
                <div class="col-12 text-center">
                  <span class="or">OR</span>
                </div>
                <div class="col-12">
                  <a href="javascript:void(0)" class="btn googleBtn">
                    <span><img src="{{asset('frontend/images/google-icon.svg')}}" alt="..." width="18"></span>
                    <span>Login with Google</span>
                  </a>
                </div>
                <div class="col-12">
                  <a href="javascript:void(0)" class="btn fbBtn">
                    <span><img src="{{asset('frontend/images/fb-icon.svg')}}" alt="..." width="16"></span>
                    <span>Login with Facebook</span>
                  </a>
                </div>
              </div>
              <p class="signup">
                Don't have an account ?
                <a href="#" class="sTrigger" onclick="toggleForm();">Sign Up.</a>
              </p>
            </form>
          </div>
        </div>
        <div class="user signupBx">
          <div class="formBx">
            <form method="POST" action="{{ route('register') }}" class="formStyle2">
              @csrf
        <h2 class="mdTitle pb-2">Create an account</h2>
        <div class="row gy-2">
          <div class="col-12">
            <input type="text" name="name" placeholder="Username"  class="form-control" />
            @error('name')
            <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <div class="col-12">
            <input id="email" type="email"  name="email"  placeholder="Email Address"  class="form-control" />
            @error('email')
            <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <div class="col-12">
            <input id="password" type="password" name="password" placeholder="Create Password"  class="form-control" />
            @error('password')
            <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <div class="col-12">
            <input   id="password-confirm" type="password" name="password_confirmation"  placeholder="Confirm Password"  class="form-control" />
            @error('password_confirmation')
            <span class="text-danger"> {{$message}}</span>
            @enderror
          </div>
          <div class="col-12">
            <button class="btn btnDark w-100" type="submit"> Sign Up </button>
          </div>
          <div class="col-12">
            <p class="signup">
              Already have an account ?
              <a href="{{route('login')}}" class="sTrigger">Sign in.</a>
            </p>
          </div>
        </div>
      </form>
          </div>
          <div class="imgBx"><img src="{{asset('frontend/images/img_grid2.png')}}" alt="" /></div>
        </div>
      </div>
    </div>
  </section>
  <footer>
    <div class="footer_section">
      <div class="footer_fade"></div>
      <div class="container">
        <div class="newsletter_content newsletter_space_section">
          <h2 class="whiteColor">NEWSLETTER</h2>
          <p class="whiteColor">Once you subscribe to our newsletter, we will send our promo offers and news to your email.</p>
          <div class="subscribe_col">
            <input class="sub_input_style" type="text" placeholder="Enter Your Email">
            <button class="sub_btn_style" type="button">SUBSCRIBE US</button>
          </div>
        </div>
      </div>
      <div class="bottom_footer darkBGColor">
        <div class="container">
          <div class="row gy-5">
            <div class="col-xl-auto col-lg-12 col-sm-12 ">
              <div class="foot_logo_content">
                <div class="footer_logo">
                  <a href="index.html"><img src="{{asset('frontend/images/luxuryeyewear.png')}}" alt="..."></a>
                </div>
                <p class="whiteColor">Luxuryeyewear ipsum dolor sit amet, consectetur adipiscing elit. Etiam tincidunt ornare viverra.</p>
                <ul class="foot_social_icon">
                  <li><a href="javascript:void(0)"><img src="{{asset('frontend/./images/foot_facebook_icon.svg')}}" alt="..."></a></li>
                  <li><a href="javascript:void(0)"><img src="{{asset('frontend/./images/foot_twitter_icon.svg')}}" alt="..."></a></li>
                  <li><a href="javascript:void(0)"><img src="{{asset('frontend/./images/foot_instagram_icon.svg')}}" alt="..."></a></li>
                  <li><a href="javascript:void(0)"><img src="{{asset('frontend/./images/foot_linkedin_icon.svg')}}" alt="..."></a></li>
                  <li><a href="javascript:void(0)"><img src="{{asset('frontend/./images/foot_youtube_icon.svg')}}" alt="..."></a></li>
                </ul>
              </div>
            </div>
            <div class="col">
              <div class="footer_imp_links">
                <div class="row gy-5">
                  <div class="col-sm col-lg">
                    <div class="imp_links_col">
                      <div class="imp_link_head">
                        <h3 class="foot_link_head_style">Quick Links</h3>
                      </div>
                      <ul class="foot_link_list">

                        <li><a href="javascript:void(0)">Track Order</a></li>
                        <li><a href="javascript:void(0)">return & exchange</a></li>
                        <li><a href="javascript:void(0)">shipping policy</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-sm col-lg">
                    <div class="imp_links_col">
                      <div class="imp_link_head">
                        <h3 class="foot_link_head_style">usefull links</h3>
                      </div>
                      <ul class="foot_link_list">
                        <li><a href="javascript:void(0)">home</a></li>
                        <li><a href="javascript:void(0)">about us</a></li>
                        <li><a href="javascript:void(0)">contact us</a></li>

                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-auto">
                    <div class="imp_links_col add_cont">
                      <div class="imp_link_head">
                        <h3 class="foot_link_head_style">Get In Touch</h3>
                      </div>
                      <ul class="foot_link_list contact">
                        <li><a href="javascript:void(0)">C-12 Paryavaran Complex Ignu Road New Delhi, Delhi - 110030, India</a></li>
                        <li><a href="javascript:void(0)"><img src="{{asset('frontend/./images/phone-icon.svg')}}" alt="...">9990360806</a></li>
                        <li><a href="javascript:void(0)"><img src="{{asset('frontend/./images/email_icon.svg')}}" alt="...">Support@Luxuryeyewear.In</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="copyright_col">
            <div class="row align-items-center gy-4">
              <div class="col-xl col-lg-12 ">
                <div class="courier_logo justify-content-center">
                  <ul>
                    <li><a href="javascript:void(0)"><img src="{{asset('frontend/./images/dhl_icon.png')}}" alt="..."></a></li>
                    <li><a href="javascript:void(0)"><img src="{{asset('frontend/./images/fedex_icon.png')}}" alt="..."></a></li>
                    <li><a href="javascript:void(0)"><img src="{{asset('frontend/./images/ups_icon.png')}}" alt="..."></a></li>
                    <li><a href="javascript:void(0)"><img src="{{asset('frontend/./images/aramex_icon.png')}}" alt="..."></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-auto col-lg-12">
                <div class="payment_method_logo">
                  <ul>
                    <li><a href="javascript:void(0)"><img src="{{asset('frontend/./images/visa.png')}}" alt="..."></a></li>
                    <li><a href="javascript:void(0)"><img src="{{asset('frontend/./images/mastercard.png')}}" alt="..."></a></li>
                    <li><a href="javascript:void(0)"><img src="{{asset('frontend/./images/american-express.png')}}" alt="..."></a></li>
                    <li><a href="javascript:void(0)"><img src="{{asset('frontend/./images/paypal.png')}}" alt="..."></a></li>
                  </ul>
                </div>
              </div>
              <div class="col-xl-auto col-md-12 order-xl-first">
                <p class="mb-xl-0">Copyright © {{date('Y')}} by luxuryeyewear. All Rights reserved</p>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </footer>
  <div class="backDrop"></div>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="{{asset('frontend/js/bootstrap.bundle.min.js')}}"></script>
  <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('frontend/js/script.js')}}"></script>
  <script>
    $('.sTrigger').click(function() {
      $('.login_section > .container').toggleClass('active');
    })
  </script>


</body>
</html>
