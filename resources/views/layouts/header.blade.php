    <!-- Header Top Area -->

    <div class="header-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="contact-info">
                        <i class="las la-envelope"></i> career@rimotechology |
                        <i class="las la-map-marker"></i>2, opebi, Off Allen Ikeja Lagos</div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 text-right">
                    <div class="site-info">
                      Follow Us on
                        <div class="social-area">
                            <a href="#"><i class="lab la-facebook-f"></i></a>
                            <a href="#"><i class="lab la-instagram"></i></a>
                            <a href="#"><i class="lab la-twitter"></i></a>
                            <a href="#"><i class="la la-skype"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Header Area -->

    <header class="header-area">
        <div class="sticky-area">
            <div class="navigation">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2">
                            <div class="logo">
                                <a class="navbar-brand" href="/"><h3><b>RIMOTECH</b></h3></a>
                            </div>
                        </div>

                        <div class="col-lg-3">
                            <div class="sub-title">
                                 <p>Providing the Products You Need</p> 
                               
                            </div>
                        </div>

                        <div class="col-lg-6">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-lg">
                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                        <span class="navbar-toggler-icon"></span>
                                        <span class="navbar-toggler-icon"></span>
                                        <span class="navbar-toggler-icon"></span>
                                    </button>

                                    <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                                        <ul class="navbar-nav ml-auto">
                                            <li class="nav-item">
                                                <a class="nav-link active" href="/">Home
                                                  
                                                </a>
                                              
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="#">About</a>
                                            </li>

                                            <li class="nav-item">
                                                <a class="nav-link" href="/product">Products 
                                                    <span class="sub-nav-toggler">
                                                    </span>
                                                </a>
                                                                                          </li>
                                        

                                            <li class="nav-item">
                                                <a class="nav-link" href="/product">Contact
                                                    
                                                </a>
                                               
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" href="{{ url('/login') }}"> Login </a>
                                            </li>
                                             {{-- auth code start here --}}
                                            @if (Route::has('login'))
                                            @auth
                                            <li class="nav-item">
                                                <a class="nav-link" href="#">{{Auth::user()->name}}
                                                    <span class="sub-nav-toggler">
                                                    </span>
                                                </a>
                                                <ul class="sub-menu">
                                                    {{-- <li><a href="{{ route('profile.show') }} ">Manage Profile</a></li> --}}
                                                    <li><a href="{{ url('/product/create') }}">Create New Product </a></li>
                                                   
                                                    <li><a href="{{ url('/categories/create') }}">Create Product Categories</a></li>
                                                    <form method="POST" action="{{ route('logout') }}">
                                                    @csrf

                                                    <li>
                                                        <a class="btn bg_white" href="{{ route('logout') }}"
                                                            onclick="event.preventDefault();
                                                            this.closest('form').submit();">{{ __('Logout') }}
                                                        </a>
                                                    </li>
                                                </form>

                                                </ul>
                                            </li>
                                            @else 

                                            <li class="nav-item">
                                                <a hidden class="nav-link" href="{{route('login')}}">Login</a>
                                            </li>
                                            @endif
                                            @endif
                                           
        
        
                                        </ul>

                                    </div>
                                </nav>
                            </div>
                        </div>
                        <div class="col-lg-1">
                            <div class="header-right-content">
                                <div class="search-box">
                                    <button class="search-btn"><i class="la la-search"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Dropdown Area -->

        <div class="search-popup">
            <span class="search-back-drop"></span>

            <div class="search-inner">
                <div class="auto-container">
                    <div class="upper-text">
                        <div class="text">Search for anything.</div>
                        <button class="close-search"><span class="la la-times"></span></button>
                    </div>

                    <form method="post" action="#!">
                        <div class="form-group">
                            <input type="search" name="search-field" value="" placeholder="Search..." required="">
                            <button type="submit"><i class="la la-search"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>