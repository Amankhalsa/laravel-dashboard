<header>

    <div class="headerCol">
      <div class="container">
        <div class="header_content">
          <div class="row align-items-center g-2">
            <div class="col-auto">
              <div class="header_logo">
                <a href="{{url('/')}}">
                  <img src="https://www.luxuryeyewear.in/uploaded_files/navbar/luxuryeyewear.png" alt="">
                </a>
              </div>
            </div>
            <div class="col">
              <div class="header_nav_links">
                <ul class="header_nav_links_style ">
                  <li>
                    <a href="{{route('front.eyeglass.page')}}">Eyeglasses</a>
                  </li>
                  <li>
                    <a href="{{route('front.sunglass.page')}}">Sunglasses</a>
                  </li>
                  <li>
                    <a href="{{route('front.brands.page')}}">Brands</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="col-auto">
              <div class="header_right_link_icon">
                <ul class="header_right_link_icon_style">
                  <li>
                    <!--<a href="javascript:void(0)"><img src=./images/search-icon.svg alt="Image Not Found"></a>-->
                    <form action="https://luxuryeyewear.in/search-result" class="topmenusearch page_speed_1450106835">
                      <input type="hidden" name="_token" value="hCAU7O90FTsuxWKBISDDlgKCFdBWPikCHUd7tjxA"> <input type="hidden" name="_method" value="GET">
                      <input type="text" class="form-control" placeholder="Search Products..." name="search_keyword" id="search_keyword" required="">

                      <span class="btnstyle"></span>
                    </form>

                  </li>
                  <li>
                    <a href="{{route('login')}}"><img src="{{asset('frontend/./images/login.png')}}" alt="Image Not Found"></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"><img src="{{asset('frontend/./images/like-icon.svg')}}" alt="Image Not Found"></a>
                  </li>
                  <li>
                    <a href="javascript:void(0)"><img src="{{asset('frontend/./images/cart-icon.svg')}}" alt="Image Not Found"></a>
                  </li>
                  <li class="d-lg-none">
                    <a href="javascript:void(0)" class="navTrigger"><img src="{{asset('frontend/images/nav-toggle.svg')}}" alt="Image Not Found"></a>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>