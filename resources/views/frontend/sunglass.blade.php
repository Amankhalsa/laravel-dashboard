@extends('frontend.body.home_master')
@section('title', 'Sunglass')
@section('description', 'Sunglass Description ')
@section('keywords', ' Sunglass Keywords')
@section('robots', 'index, follow')
@section('revisit-after', 'content="3 days')
@section('content')
<section>
  @include('frontend.body.breadcrumb')
  </section>
  <section>
    <div class="product_detail section_space pb-0">
      <div class="container">
        <div class="product_deatail_list">
          <div class="product_deatail_list_text">
            <div class="lineTitleCol">
              <h6 class="lineTitle">Explore Our Products</h6>
            </div>
            <h2 class="product_detail_head lgTitle darkColor">Most Loved Frames</h2>
          </div>
          <div class="filterColMain pt-3">
            <div class="filterCol">
              <div class="row g-2 g-md-3">
                <div class="col"><a  class="btn btnDark w-100 filterBtn"  data-bs-toggle="offcanvas" href="#filterCanvas" role="button" aria-controls="filterCanvas"><span class="filterIcon"><img src="images/filter-icon.svg" alt="..."></span> <span>Filter</span></a></div>
                <div class="col">
                  <select class="form-select selectStyle" aria-label="Default select example">
                    <option selected>Sort by</option>
                    <option value="1">Sort by Name</option>
                    <option value="2">Sort by Name</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="productColMain">
            <div class="row g-4">
              <div class="col-md-6 col-xl-4">
                <div class="cardStyle1">
                  <span class="discountCol">20% off</span>
                  <div class="productImg">
                    <div class="imgCol">
                      <img src="images/product-img-1.png" alt="...">
                    </div>
                    <div class="color_builts">
                      <ul>
                        <li>
                          <a href="javascript:void(0)"></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="contentCol">
                    <h4 class="brandCol">HUGO BOSS</h4>
                    <p>HUGO BOSS HG 0328 086</p>
                    <span class="priceCol">₹8900 </span>
                    <div class="row gx-2">
                      <div class="col-auto">
                        <a href="javascript:void(0)" class="btn btnDark w-100 addCartBtn">ADD TO CART</a>
                      </div>
                      <div class="col">
                        <a href="javascript:void(0)" class="btn btnDark_outline w-100">ADD TO WISHLIST</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="cardStyle1">
                  <div class="productImg">
                    <div class="imgCol">
                      <img src="images/product-img-2.png" alt="...">
                    </div>
                    <div class="color_builts">
                      <ul>
                        <li>
                          <a href="javascript:void(0)" class=""></a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class=""></a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class=""></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="contentCol">
                    <h4 class="brandCol">TOMMY HILFIGER</h4>
                    <p>TOMMY HILFIGER TH 1689 086</p>
                    <span class="priceCol">₹9900 </span>
                    <div class="row gx-2">
                      <div class="col-auto">
                        <a href="javascript:void(0)" class="btn btnDark w-100 addCartBtn">ADD TO CART</a>
                      </div>
                      <div class="col">
                        <a href="javascript:void(0)" class="btn btnDark_outline w-100">ADD TO WISHLIST</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="cardStyle1">
                  <span class="discountCol">20% off</span>
                  <div class="productImg">
                    <div class="imgCol">
                      <img src="images/product-img-3.png" alt="...">
                    </div>
                    <div class="color_builts">
                      <ul>
                        <li>
                          <a href="javascript:void(0)"></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="contentCol">
                    <h4 class="brandCol">TOMMY HILFIGER</h4>
                    <p>TOMMY HILFIGER TH 1689 086</p>
                    <span class="priceCol">₹9900 </span>
                    <div class="row gx-2">
                      <div class="col-auto">
                        <a href="javascript:void(0)" class="btn btnDark w-100 addCartBtn">ADD TO CART</a>
                      </div>
                      <div class="col">
                        <a href="javascript:void(0)" class="btn btnDark_outline w-100">ADD TO WISHLIST</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="cardStyle1">
                  <span class="discountCol">20% off</span>
                  <div class="productImg">
                    <div class="imgCol">
                      <img src="images/product-img-4.png" alt="...">
                    </div>
                    <div class="color_builts">
                      <ul>
                        <li>
                          <a href="javascript:void(0)"></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="contentCol">
                    <h4 class="brandCol">ELIE SAAB</h4>
                    <p>ELIE SAAB ES 061/G/S MVU</p>
                    <span class="priceCol">₹41800</span>
                    <div class="row gx-2">
                      <div class="col-auto">
                        <a href="javascript:void(0)" class="btn btnDark w-100 addCartBtn">ADD TO CART</a>
                      </div>
                      <div class="col">
                        <a href="javascript:void(0)" class="btn btnDark_outline w-100">ADD TO WISHLIST</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="cardStyle1">
                  <div class="productImg">
                    <div class="imgCol">
                      <img src="images/product-img-5.png" alt="...">
                    </div>
                    <div class="color_builts">
                      <ul>
                        <li>
                          <a href="javascript:void(0)" class=""></a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class=""></a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class=""></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="contentCol">
                    <h4 class="brandCol">JIMMY CHOO</h4>
                    <p>JIMMY CHOO VINA/G/SK J5G</p>
                    <span class="priceCol">₹19900</span>
                    <div class="row gx-2">
                      <div class="col-auto">
                        <a href="javascript:void(0)" class="btn btnDark w-100 addCartBtn">ADD TO CART</a>
                      </div>
                      <div class="col">
                        <a href="javascript:void(0)" class="btn btnDark_outline w-100">ADD TO WISHLIST</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="cardStyle1">
                  <span class="discountCol">20% off</span>
                  <div class="productImg">
                    <div class="imgCol">
                      <img src="images/product-img-6.png" alt="...">
                    </div>
                    <div class="color_builts">
                      <ul>
                        <li>
                          <a href="javascript:void(0)"></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="contentCol">
                    <h4 class="brandCol">ELIE SAAB</h4>
                    <p>ELIE SAAB ES 087/S OGA</p>
                    <span class="priceCol">₹36000</span>
                    <div class="row gx-2">
                      <div class="col-auto">
                        <a href="javascript:void(0)" class="btn btnDark w-100 addCartBtn">ADD TO CART</a>
                      </div>
                      <div class="col">
                        <a href="javascript:void(0)" class="btn btnDark_outline w-100">ADD TO WISHLIST</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="cardStyle1">
                  <span class="discountCol">20% off</span>
                  <div class="productImg">
                    <div class="imgCol">
                      <img src="images/product-img-1.png" alt="...">
                    </div>
                    <div class="color_builts">
                      <ul>
                        <li>
                          <a href="javascript:void(0)"></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="contentCol">
                    <h4 class="brandCol">HUGO BOSS</h4>
                    <p>HUGO BOSS HG 0328 086</p>
                    <span class="priceCol">₹8900 </span>
                    <div class="row gx-2">
                      <div class="col-auto">
                        <a href="javascript:void(0)" class="btn btnDark w-100 addCartBtn">ADD TO CART</a>
                      </div>
                      <div class="col">
                        <a href="javascript:void(0)" class="btn btnDark_outline w-100">ADD TO WISHLIST</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="cardStyle1">
                  <div class="productImg">
                    <div class="imgCol">
                      <img src="images/product-img-2.png" alt="...">
                    </div>
                    <div class="color_builts">
                      <ul>
                        <li>
                          <a href="javascript:void(0)" class=""></a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class=""></a>
                        </li>
                        <li>
                          <a href="javascript:void(0)" class=""></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="contentCol">
                    <h4 class="brandCol">TOMMY HILFIGER</h4>
                    <p>TOMMY HILFIGER TH 1689 086</p>
                    <span class="priceCol">₹9900 </span>
                    <div class="row gx-2">
                      <div class="col-auto">
                        <a href="javascript:void(0)" class="btn btnDark w-100 addCartBtn">ADD TO CART</a>
                      </div>
                      <div class="col">
                        <a href="javascript:void(0)" class="btn btnDark_outline w-100">ADD TO WISHLIST</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xl-4">
                <div class="cardStyle1">
                  <span class="discountCol">20% off</span>
                  <div class="productImg">
                    <div class="imgCol">
                      <img src="images/product-img-3.png" alt="...">
                    </div>
                    <div class="color_builts">
                      <ul>
                        <li>
                          <a href="javascript:void(0)"></a>
                        </li>
                      </ul>
                    </div>
                  </div>
                  <div class="contentCol">
                    <h4 class="brandCol">TOMMY HILFIGER</h4>
                    <p>TOMMY HILFIGER TH 1689 086</p>
                    <span class="priceCol">₹9900 </span>
                    <div class="row gx-2">
                      <div class="col-auto">
                        <a href="javascript:void(0)" class="btn btnDark w-100 addCartBtn">ADD TO CART</a>
                      </div>
                      <div class="col">
                        <a href="javascript:void(0)" class="btn btnDark_outline w-100">ADD TO WISHLIST</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="btnCol text-center">
              <a href="javascript:void(0)" class="btn btnPrimary minWdBtn btnNew">Load More</a>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </section>
  @include('frontend.body.filter')

@endsection