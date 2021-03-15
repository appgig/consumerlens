<!DOCTYPE html>
<html>
   <!-- Mirrored from gambolthemes.net/workwise-new/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 10:53:14 GMT -->
   <head>
      <meta charset="UTF-8">
      <title>{{ config('app.name', 'Laravel') }}</title>
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/animate.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/bootstrap.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/line-awesome.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/line-awesome-font-awesome.min.css')}}">
      <link href="{{ asset('frontend/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/font-awesome.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/jquery.mCustomScrollbar.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/lib/slick/slick.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/lib/slick/slick-theme.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('frontend/css/responsive.css')}}">
       @yield('style')
   </head>
   <body>
      <div class="wrapper">
         <header>
            <div class="container">
               <div class="header-data">
                  <div class="logo">
                     <a href="{{route('web.index')}}" title=""><img src="{{ asset('frontend/images/logo22.png')}}" alt=""></a>
                  </div>
                  <div class="search-bar">
                     <form>
                        <input type="text" name="search" placeholder="Search...">
                        <button type="submit"><i class="la la-search"></i></button>
                     </form>
                  </div>
                  <nav>
                     <ul>
                        <li>
                           <a href="{{route('web.index')}}" title="">
                           <span> <i class="la la-home"></i> </span>
                           Home
                           </a>
                        </li>

                        <li>
                           <a href="{{route('web.services')}}" title="">
                           <span> <i class="la la-book"></i> </span>
                           Regulators
                           </a>
                        </li>


                        <li>
                           <a href="{{route('web.services')}}" title="">
                           <span> <i class="la la-briefcase"></i> </span>
                           Service Providers
                           </a>
                        </li>

                        <li>
                           <a href="{{route('web.services')}}" title="">
                           <span><i class="la la-flag"></i></span>
                           Governmental
                           </a>
                        </li>

                        <li>
                           <a href="#" title="">
                           <span> <i class="la la-calendar"></i> </span>
                           Upcoming events
                           </a>
                        </li>

                        <li style="display:none;">
                           <a href="#" title="" class="not-box-openm">
                           <span><img src="{{ asset('frontend/images/icon6.png')}}" alt=""></span>
                           Messages
                           </a>
                           <div class="notification-box msg" id="message">
                              <div class="nt-title">
                                 <h4>Setting</h4>
                                 <a href="#" title="">Clear all</a>
                              </div>
                              <div class="nott-list">
                                 <div class="notfication-details">
                                    <div class="noty-user-img">
                                       <img src="{{ asset('frontend/images/resources/ny-img1.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                       <h3><a href="messages.html" title="">Jassica William</a> </h3>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do.</p>
                                       <span>2 min ago</span>
                                    </div>
                                 </div>
                                 <div class="notfication-details">
                                    <div class="noty-user-img">
                                       <img src="{{ asset('frontend/images/resources/ny-img2.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                       <h3><a href="messages.html" title="">Jassica William</a></h3>
                                       <p>Lorem ipsum dolor sit amet.</p>
                                       <span>2 min ago</span>
                                    </div>
                                 </div>
                                 <div class="notfication-details">
                                    <div class="noty-user-img">
                                       <img src="{{ asset('frontend/images/resources/ny-img3.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                       <h3><a href="messages.html" title="">Jassica William</a></h3>
                                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempo incididunt ut labore et dolore magna aliqua.</p>
                                       <span>2 min ago</span>
                                    </div>
                                 </div>
                                 <div class="view-all-nots">
                                    <a href="messages.html" title="">View All Messsages</a>
                                 </div>
                              </div>
                           </div>
                        </li>

                        <li style="display:none;">
                           <a href="#" title="" class="not-box-open">
                           <span><img src="{{ asset('frontend/images/icon7.png')}}" alt=""></span>
                           Notification
                           </a>
                           <div class="notification-box noti" id="notification">
                              <div class="nt-title">
                                 <h4>Setting</h4>
                                 <a href="#" title="">Clear all</a>
                              </div>
                              <div class="nott-list">
                                 <div class="notfication-details">
                                    <div class="noty-user-img">
                                       <img src="{{ asset('frontend/images/resources/ny-img1.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                       <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                       <span>2 min ago</span>
                                    </div>
                                 </div>
                                 <div class="notfication-details">
                                    <div class="noty-user-img">
                                       <img src="{{ asset('frontend/images/resources/ny-img2.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                       <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                       <span>2 min ago</span>
                                    </div>
                                 </div>
                                 <div class="notfication-details">
                                    <div class="noty-user-img">
                                       <img src="{{ asset('frontend/images/resources/ny-img3.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                       <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                       <span>2 min ago</span>
                                    </div>
                                 </div>
                                 <div class="notfication-details">
                                    <div class="noty-user-img">
                                       <img src="{{ asset('frontend/images/resources/ny-img2.png')}}" alt="">
                                    </div>
                                    <div class="notification-info">
                                       <h3><a href="#" title="">Jassica William</a> Comment on your project.</h3>
                                       <span>2 min ago</span>
                                    </div>
                                 </div>
                                 <div class="view-all-nots">
                                    <a href="#" title="">View All Notification</a>
                                 </div>
                              </div>
                           </div>
                        </li>
                     </ul>
                  </nav>
                  <div class="menu-btn">
                     <a href="#" title=""><i class="fa fa-bars"></i></a>
                  </div>
                  <div class="user-account">
                     <div class="user-info">
                        <img src="{{ asset('frontend/images/resources/user.png')}}" alt="">
                        <a href="#" title="">John</a>
                        <i class="la la-sort-down"></i>
                     </div>
                     <div class="user-account-settingss" id="users">
                        <h3>Setting</h3>
                        <ul class="us-links">
                           <li><a href="{{route('web.signIn')}}" title="">Sign In / Sign Out</a></li>
                           <li><a href="#" title="">Account Setting</a></li>
                           <li><a href="#" title="">My Profile</a></li>
                           <li><a href="#" title="">My Grievances</a></li>
                        </ul>
                        <h3 class="tc"><a href="sign-in.html" title="">Logout</a></h3>
                     </div>
                  </div>
               </div>
            </div>
         </header>


         <!-- content -->
          @yield('content')
         <!-- content -->


         <footer>
            <div class="footy-sec mn no-margin">
               <div class="container">
                  <ul>
                     <li><a href="help-center.html" title="">Help Center</a></li>
                     <li><a href="about.html" title="">About</a></li>
                     <li><a href="#" title="">Privacy Policy</a></li>
                     <li><a href="#" title="">Cookies Policy</a></li>
                     <li><a href="#" title="">FAQs</a></li>
                     <li><a href="#" title="">Copyright Policy</a></li>
                  </ul>
                  <p><img src="images/copy-icon2.png" alt="">Copyright 2021</p>
                  <img class="fl-rgt" src="images/logo2.png" alt="">
               </div>
            </div>
         </footer>

      </div>


      <script type="text/javascript" src="{{ asset('frontend/js/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('frontend/js/popper.js')}}"></script>
      <script type="text/javascript" src="{{ asset('frontend/js/bootstrap.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('frontend/js/jquery.mCustomScrollbar.js')}}"></script>
      <script type="text/javascript" src="{{ asset('frontend/lib/slick/slick.min.js')}}"></script>
      <script type="text/javascript" src="{{ asset('frontend/js/scrollbar.js')}}"></script>
      <script type="text/javascript" src="{{ asset('frontend/js/script.js')}}"></script>
   </body>
   <!-- Mirrored from gambolthemes.net/workwise-new/ by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Mar 2021 10:53:38 GMT -->
</html>
