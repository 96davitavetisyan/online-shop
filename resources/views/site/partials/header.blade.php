
 <nav class="fixed-top navbar-expand-lg navbar-light bg-lignt py-3 fon-white border-bottom">
    <div class="">
      <div class="navbar-brand d-flex col-12">
          <div class = "col-4 d-flex authed relative" id =  "nnn">
                      <div class="search hidden" id="quick-search" role="dialog">
                          <div class="search__container">
                              <form action="/search" class="search__input-container" autocomplete="off">
                                  <input autofocus="" type="search" name="q" class="search__input" placeholder="Search products, articles, pages">
                                  <input type="hidden" name="options[prefix]" value="last">

                                  <div class="search__input-actions">
                                      <a href="#" class="search__input-clear accent underline">
                                          Clear
                                      </a>
                                      <button type="submit" class="search__submit-button" aria-label="Search">
                                          <svg width="15px" height="15px" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 11 8" fill="#000000">
                                              <path d="M7.2 0l-.7.7 2.6 2.8H0v1h9.2L6.5 7.3l.7.7L11 4 7.2 0z"></path>
                                          </svg>
                                      </button>

                                      <a href="#" class="search__input-close" aria-label="Close" aria-expanded="true" aria-controls="quick-search" id = "fa-times">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12">
                                              <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round">
                                                  <path d="M10.714 1.286l-9.428 9.428M1.286 1.286l9.428 9.428" stroke-width=".85714"></path>
                                              </g>
                                          </svg>
                                      </a>
                                  </div>

                                  <div class="search__results"></div>
                              </form>
                          </div>
                      </div>
              <div class="search__overlay"></div>
              <span id="kkkk" class="nav-item cursor-pointer" >
                      <span class = "header-icon-span cc">
                          <span class = "svg-span">
                             <svg width="20px" height="20px" viewBox="0 0 24 24">
                                <circle cx="9.54" cy="9.51" r="9.08" fill="none" stroke="#ffffff" stroke-miterlimit="10" stroke-width="1.4px"></circle>
                                <path d="m17.87 17.83 5.88 5.89" fill="none" stroke="#ffffff" stroke-miterlimit="10" stroke-width="1.4px"></path>
                             </svg>
                          </span>
                          <span class = "uu"></span>
                      </span>
                      <span class = "header-icon-span d-none dd">
                          <span class = "svg-span">
                             <svg width="20px" height="20px" viewBox="0 0 24 24">
                                <circle cx="9.54" cy="9.51" r="9.08" fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="1.4px"></circle>
                                <path d="m17.87 17.83 5.88 5.89" fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="1.4px"></path>
                             </svg>
                          </span>
                          <span class = "uu"></span>
                      </span>
                  </span>


          </div>
          <div class = "col-4 text-center authed">
              <a href="{{ route('home') }}">
                  <img class="logo cc" src="/frontend/img/logo-white.png" alt="logo">
                  <img class="logo d-none dd" src="/frontend/img/logo-brown.png" alt="logo">

              </a>
          </div>
          @guest
              <div class = "col-4 d-flex justify-content-end authed">
                  <span class="nav-item">
                      <a href="{{ route('login') }}" class="nav-link " >
                          <span class = "header-icon-span cc">
                              <span class = "svg-span">
                                 <svg width="20px" height="20px" viewBox="0 0 24 24">
                                    <circle cx="12" cy="6.47" r="5.92" fill="none" stroke="#ffffff" stroke-miterlimit="10" stroke-width="1.4px"></circle>
                                    <path d="M.43 23.86c0-4.19 2.17-7.62 7.15-7.62h8.84c5 0 7.15 3.43 7.15 7.62" fill="none" stroke="#ffffff" stroke-miterlimit="10" stroke-width="1.4px"></path>
                                 </svg>
                              </span>
                              <span class = "uu"></span>
                          </span>
                          <span class = "header-icon-span d-none dd">
                              <span class = "svg-span">
                                 <svg width="20px" height="20px" viewBox="0 0 24 24">
                                    <circle cx="12" cy="6.47" r="5.92" fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="1.4px"></circle>
                                    <path d="M.43 23.86c0-4.19 2.17-7.62 7.15-7.62h8.84c5 0 7.15 3.43 7.15 7.62" fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="1.4px"></path>
                                 </svg>
                              </span>
                              <span class = "uu"></span>
                          </span>
                      </a>
                  </span>

                  <span class="nav-item">
                      <a href="{{route('checkout.cart') }}" class="nav-link " >
                          <span class = "header-icon-span cc ">
                              <span class = "svg-span relative">
                                  <svg width="20px" height="20px" viewBox="0 0 24 24">
                                        <path d="M21.17 22.84H2.83A2.44 2.44 0 0 1 .39 20.4v-12a2.44 2.44 0 0 1 2.44-2.49h18.34a2.44 2.44 0 0 1 2.44 2.44v12a2.44 2.44 0 0 1-2.44 2.49zM17 4V2.91a1.75 1.75 0 0 0-1.75-1.75H8.71A1.75 1.75 0 0 0 7 2.91V4" fill="none" stroke="#ffffff" stroke-miterlimit="10" stroke-width="1.4px"></path>
                                  </svg>
                                    @if ($cartCount > 0)
                                        <span class = "absolute count bg-white ">
                                            {{$cartCount}}
                                        </span>
                                    @endif
                              </span>
                              <span class = "uu"></span>
                          </span>
                          <span class = "header-icon-span d-none dd">
                              <span class = "svg-span relative">
                                  <svg width="20px" height="20px" viewBox="0 0 24 24">
                                        <path d="M21.17 22.84H2.83A2.44 2.44 0 0 1 .39 20.4v-12a2.44 2.44 0 0 1 2.44-2.49h18.34a2.44 2.44 0 0 1 2.44 2.44v12a2.44 2.44 0 0 1-2.44 2.49zM17 4V2.91a1.75 1.75 0 0 0-1.75-1.75H8.71A1.75 1.75 0 0 0 7 2.91V4" fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="1.4px"></path>
                                  </svg>
                                    @if ($cartCount > 0)
                                        <span class = "absolute count">
                                            {{$cartCount}}
                                        </span>
                                    @endif
                              </span>
                              <span class = "uu"></span>
                          </span>
                      </a>
                  </span>


                  <span class="nav-item">
                      <a href="{{route('checkout.cart') }}" class="nav-link " >
                          <span class = "header-icon-span cc ">
                              <span class = "svg-span relative">
                                  <svg width="20px" height="20px" viewBox="0 0 24 24">
                                        <path d="M12 21.6C6.37 16.04 1 11.3 1 7.2 1 3.4 4.07 2 6.28 2c1.31 0 4.15.5 5.72 4.46C13.59 2.49 16.46 2 17.73 2 20.27 2 23 3.62 23 7.18c0 4.07-5.14 8.63-11 14.4M17.73 1" fill="none" stroke="#ffffff" stroke-miterlimit="10" stroke-width="1.4px"></path>
                                  </svg>
                                    @if ($cartCount > 0)
                                      <span class = "absolute count bg-white ">
                                        {{$cartCount}}
                                      </span>
                                  @endif
                              </span>
                              <span class = "uu"></span>
                          </span>
                          <span class = "header-icon-span d-none dd">
                              <span class = "svg-span relative">
                                  <svg width="20px" height="20px" viewBox="0 0 24 24">
                                        <path d="M12 21.6C6.37 16.04 1 11.3 1 7.2 1 3.4 4.07 2 6.28 2c1.31 0 4.15.5 5.72 4.46C13.59 2.49 16.46 2 17.73 2 20.27 2 23 3.62 23 7.18c0 4.07-5.14 8.63-11 14.4M17.73 1" fill="none" stroke="#000000" stroke-miterlimit="10" stroke-width="1.4px"></path>
                                  </svg>
                                    @if ($cartCount > 0)
                                      <span class = "absolute count">
                                            {{$cartCount}}
                                        </span>
                                  @endif
                              </span>
                              <span class = "uu"></span>
                          </span>
                      </a>
                  </span>
              </div>
          @else
              <div class = "col-4 d-flex justify-content-end authed">
                  <span class="nav-item dropdown">
                      <a id="navbarDropdown" class="nav-link dropdown-toggle "
                         href="{{ url('home') }}" role="button"
                         data-toggle="dropdown"
                         aria-haspopup="true"
                         aria-expanded="false"
                         v-pre
                      >
                          {{ ucwords(Auth::user()->full_name) }} <span class="caret"></span>
                      </a>
                      <div class="dropdown-menu dropdown-menu-right"
                           aria-labelledby="navbarDropdown">
                          <a class="dropdown-item" href="{{ route('logout') }}"
                             onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                              Logout
                          </a>
                          <a class="dropdown-item" href="{{ route('account.orders') }}">Orders</a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                              @csrf
                          </form>
                      </div>
                  </span>
                  <span class="nav-item">
                      <a href="{{route('checkout.cart') }}" class="nav-link " >
                          <i class="fa fa-shopping-bag" aria-hidden="true"></i>
                            @if ($cartCount > 0)
                              <small >({{ $cartCount }})</small>
                          @endif
                      </a>
                  </span>

                  <span class="nav-item">
                      <a href="{{route('checkout.cart') }}" class="aa nav-link" >
                          <i class="fa fa-heart " aria-hidden="true"></i>
                           @if ($cartCount > 0)
                              <small >({{ $cartCount }})</small>
                          @endif
                      </a>
                  </span>
              </div>
          @endguest
       </div>
       <button
            style="border-color: #c66"
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarNav"
            aria-controls="navbarNav"
            aria-expanded="false"
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon" ></span>
        </button>

      <div class="collapse navbar-collapse justify-content-center mt-3 mb-2" style = "font-family: cursive;" id="navbarNav">
        <ul class="navbar-nav">
{{--            collections--}}
          <li class="nav-item dropdown" >
              <a class="nav-link dropdown-toggle text-capitalize aa text-white ff" id="category" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Collections</a>
                <ul class="dropdown-menu" id="dropdown-menu">
                    @foreach($categories as $cat)
                        @foreach($cat->items as $category)
                            @if ($category->items->count() > 0)
                                <li class="nav-link dropright" >
                                    <a class="nav-item dropdown-toggle" data-toggle="dropdown" href="#" id="catName">{{ $category->name }}</a>
                                    <ul class="dropdown-menu " id="itemCat">
                                        @foreach($category->items as $item)
                                                <li>
                                                    {{$item}}
                                                    <a class="dropdown-item" href="{{ route('category.show', $item->slug) }}" id="itemName">{{ $item->name }}</a>
                                                </li>
                                        @endforeach
                                    </ul>
                                </li>
                            @else
                                <li class="nav-item" id="catName2" >
                                    <a class="nav-link" href="{{ route('category.show', $category->slug) }}" >{{ $category->name }}</a>
                                </li>
                            @endif
                        @endforeach
                    @endforeach
                </ul>
          </li>
{{--            Jewelry--}}

            <li class="nav-item dropdown" >
                <a class="nav-link dropdown-toggle text-capitalize aa text-white ff" id="category" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Jewelry</a>
                <ul class="dropdown-menu" id="dropdown-menu">
                    <li class="nav-item" id="catName2" >
                        <a class="nav-link" href="/" >Rings</a>
                    </li>
                    <li class="nav-item" id="catName2" >
                        <a class="nav-link" href="/" >Earrings</a>
                    </li>
                    <li class="nav-item" id="catName2" >
                        <a class="nav-link" href="/" >Bracelets</a>
                    </li>
                    <li class="nav-item" id="catName2" >
                        <a class="nav-link" href="/" >Necklaces</a>
                    </li>
                    <li class="nav-item" id="catName2" >
                        <a class="nav-link" href="/" >Gift Card</a>
                    </li>
                    <li class="nav-item" id="catName2" >
                        <a class="nav-link" href="/" >All</a>
                    </li>
                </ul>
            </li>

            {{--            new in--}}
            <li class="nav-item">
                <a class="nav-link text-capitalize aa text-white ff" href="{{ route('product.new') }}">New In</a>
            </li>
            {{--           Best sellers--}}
            <li class="nav-item">
                <a class="nav-link text-capitalize aa text-white ff" href="/">Best sellers</a>
            </li>
{{--            contact us--}}
          <li class="nav-item">
            <a class="nav-link text-capitalize aa text-white ff" href="{{route('contact') }}">About us</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>


 <style>
.white-fon{
    box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.15);
    color:white;
}
</style>


  <script type="text/javascript">
      var nav = document.querySelector('nav');
      var aa = document.getElementsByClassName('aa');
      var cc = document.getElementsByClassName('cc');
      var dd = document.getElementsByClassName('dd');
      var count = document.getElementsByClassName('count');

    window.addEventListener('scroll', function () {
        if (window.pageYOffset > 100) {
            nav.classList.add('bg-white', 'shadow');
            for (i = 0; i < aa.length; i++) {
                aa[i].classList.remove('text-white')
                aa[i].classList.add('text-black')
            }
            for (i = 0; i < cc.length; i++) {
                cc[i].classList.add('d-none')
                dd[i].classList.remove('d-none')
            }
            for (i = 0; i < count.length; i++) {
                count[i].classList.add('bg-dark', 'text-white')
                count[i].classList.remove('bg-white')
            }
        } else {
            nav.classList.remove('bg-white', 'shadow');
            for (i = 0; i < aa.length; i++) {
                aa[i].classList.remove('text-black')
                aa[i].classList.add('text-white')
            }

            for (i = 0; i < cc.length; i++) {
                cc[i].classList.remove('d-none')
                dd[i].classList.add('d-none')
            }
            for (i = 0; i < count.length; i++) {
                count[i].classList.remove('bg-dark', 'text-white')
                count[i].classList.add('bg-white')
            }
        }

    });


        var jjj = document.getElementById('search-input');
        var nnn = document.getElementById('nnn');
        document.getElementById("kkkk").addEventListener('click', function () {
            console.log(555);
            nnn.classList.add('is-active');
        });
        document.getElementById("fa-times").addEventListener('click', function () {
            nnn.classList.remove('is-active')

        })
  </script>

