@extends('layouts.web')

@section('style')
@stop

@section('content')
<main>
   <div class="main-section">
      <div class="container">
         <div class="main-section-data">
            <div class="row">
               <div id="homeTrending" class="col-lg-3 col-md-4 pd-left-none no-pd">
                  <div class="main-left-sidebar no-margin">

                     <div  class="suggestions full-width">
                        <div class="sd-title">
                           <h3>Explore</h3>
                           <i class="la la-ellipsis-v"></i>
                        </div>
                        <div class="nav-left-lists">
                          <ul>
                            <li> <a href="{{route('web.consumerLense')}}">Consumer lens</a> </li>
                            <li> <a href="{{route('web.index')}}">Home</a> </li>
                            <li> <a href="{{route('web.services')}}">Regulators</a> </li>
                            <li> <a href="{{route('web.services')}}">Service Providers</a> </li>
                            <li> <a href="{{route('web.services')}}">Governmental </a> </li>
                            <li> <a href="{{route('web.services')}}">MPs</a> </li>
                            <li> <a href="{{route('web.services')}}">Others</a> </li>

                          </ul>
                        </div>
                        <div style="display:none;" class="suggestions-list">
                           <div class="suggestion-usd">
                              <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/MTN_Logo.svg/1200px-MTN_Logo.svg.png" alt="">
                              <div class="sgt-text">
                                 <h4>MTN Ghana</h4>
                                 <span>Service Provider</span>
                              </div>
                              <!-- <span><i class="la la-plus"></i></span> -->
                           </div>
                           <div class="suggestion-usd">
                              <img src="https://www.dcleakers.com/wp-content/uploads/2019/10/Vodafone-logo.jpg" alt="">
                              <div class="sgt-text">
                                 <h4>Vodafone</h4>
                                 <span>Service provider</span>
                              </div>
                              <!-- <span><i class="la la-plus"></i></span> -->
                           </div>
                           <div class="suggestion-usd">
                              <img src="https://www.mofep.gov.gh/sites/default/files/logo.png" alt="">
                              <div class="sgt-text">
                                 <h4>Ministry of Finanace</h4>
                                 <span>Government institutions</span>
                              </div>
                              <!-- <span><i class="la la-plus"></i></span> -->
                           </div>
                           <div class="suggestion-usd">
                              <img src="https://www.gsa.gov.gh/wp-content/uploads/2018/04/cropped-GSA-Logo.png" alt="">
                              <div class="sgt-text">
                                 <h4>Ghana Standards Authority</h4>
                                 <span>Regulator</span>
                              </div>
                              <!-- <span><i class="la la-plus"></i></span> -->
                           </div>
                           <div class="suggestion-usd">
                              <img src="https://pbs.twimg.com/profile_images/1216690773770612738/TVeaW-B1_400x400.jpg" alt="">
                              <div class="sgt-text">
                                 <h4>AirtelTigo</h4>
                                 <span>Service Provider</span>
                              </div>
                              <!-- <span><i class="la la-plus"></i></span> -->
                           </div>
                           <div class="view-more">
                              <a href="#" title="">View More</a>
                           </div>
                        </div>
                     </div>

                  </div>
               </div>

               <div class="col-lg-6 col-md-8 no-pd">
                  <div class="main-ws-sec">
                     <!-- <div class="post-topbar">

                     </div> -->
                     <div class="posts-section">

                       <div class="post-project">
                          <h3>Share grievances or challenges</h3>
                          <div class="post-project-fields">
                             <form>
                                <div class="row">
                                   <div class="col-lg-12">
                                      <input type="text" name="title" placeholder="Title">
                                   </div>
                                   <div class="col-lg-12">
                                      <input type="text" name="skills" placeholder="Name of service provider">
                                   </div>
                                   <div class="col-lg-12">
                                      <textarea name="description" placeholder="Enter grievances or challenges"></textarea>
                                   </div>
                                   <div class="col-lg-12">
                                      <p>Upload Media</p>
                                      <input type="file" name="" value="">
                                   </div>
                                   <div class="col-lg-12">
                                      <ul>
                                         <li><button class="active" type="submit" value="post">Submit</button></li>
                                      </ul>
                                   </div>
                                </div>
                             </form>
                          </div>
                       </div>

                     </div>
                  </div>
               </div>

               <div class="col-lg-3 pd-right-none no-pd">

                  <div class="right-sidebar">

                    <div class="widget widget-about">
                       <img src="{{ asset('frontend/images/logo22.png')}}" alt="">
                       <h3>Discover Service Providers</h3>
                       <span>There are moany service providers to discover</span>
                       <div class="sign_link">
                          <a href="{{route('web.services')}}" title="">View All</a>
                       </div>
                    </div>

                  </div>

               </div>
            </div>
         </div>
      </div>
   </div>
</main>

<div class="post-popup pst-pj">
   <div class="post-project">
      <h3>Share your grievances</h3>
      <div class="post-project-fields">
         <form>
            <div class="row">
               <div class="col-lg-12">
                  <input type="text" name="title" placeholder="Title">
               </div>
               <div class="col-lg-12">
                  <div class="inp-field">
                     <select>
                        <option>Category</option>
                        <option>Category 1</option>
                        <option>Category 2</option>
                        <option>Category 3</option>
                     </select>
                  </div>
               </div>
               <div class="col-lg-12">
                  <input type="text" name="skills" placeholder="Skills">
               </div>
               <div class="col-lg-12">
                  <div class="price-sec">
                     <div class="price-br">
                        <input type="text" name="price1" placeholder="Price">
                        <i class="la la-dollar"></i>
                     </div>
                     <span>To</span>
                     <div class="price-br">
                        <input type="text" name="price1" placeholder="Price">
                        <i class="la la-dollar"></i>
                     </div>
                  </div>
               </div>
               <div class="col-lg-12">
                  <textarea name="description" placeholder="Description"></textarea>
               </div>
               <div class="col-lg-12">
                  <ul>
                     <li><button class="active" type="submit" value="post">Post</button></li>
                     <li><a href="#" title="">Cancel</a></li>
                  </ul>
               </div>
            </div>
         </form>
      </div>
      <a href="#" title=""><i class="la la-times-circle-o"></i></a>
   </div>
</div>

<div class="post-popup job_post">
   <div class="post-project">
      <h3>Share grievances or challenges</h3>
      <div class="post-project-fields">
         <form>
            <div class="row">
               <div class="col-lg-12">
                  <input type="text" name="title" placeholder="Title">
               </div>
               <div class="col-lg-12">
                  <div class="inp-field">
                     <select>
                        <option>Select Category</option>
                        <option>Service Provider</option>
                        <option>Regulator</option>
                        <option>Governmental institutions</option>
                     </select>
                  </div>
               </div>
               <div class="col-lg-12">
                  <div class="inp-field">
                     <select>
                        <option>Select Service Provider</option>
                        <option>MTN</option>
                        <option>AirtelTigo</option>
                        <option>Ministry of Finanace</option>
                     </select>
                  </div>
               </div>
               <div class="col-lg-12">
                  <input type="text" name="skills" placeholder="Subject">
               </div>
               <div class="col-lg-12">
                  <textarea name="description" placeholder="Description"></textarea>
               </div>
               <div class="col-lg-12">
                  <input type="file" name="" value="">
               </div>
               <div class="col-lg-12">
                  <ul>
                     <li><button class="active" type="submit" value="post">Post</button></li>
                     <li><a href="#" title="">Cancel</a></li>
                  </ul>
               </div>
            </div>
         </form>
      </div>
      <a href="#" title=""><i class="la la-times-circle-o"></i></a>
   </div>
</div>

<div style="display:none;" class="chatbox-list">
   <div class="chatbox">
      <div class="chat-mg">
         <a href="#" title=""><img src="frontend/images/resources/usr-img1.png" alt=""></a>
         <span>2</span>
      </div>
      <div class="conversation-box">
         <div class="con-title mg-3">
            <div class="chat-user-info">
               <img src="frontend/images/resources/us-img1.png" alt="">
               <h3>John Doe <span class="status-info"></span></h3>
            </div>
            <div class="st-icons">
               <a href="#" title=""><i class="la la-cog"></i></a>
               <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
               <a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
            </div>
         </div>
         <div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
            <div class="chat-msg">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
               <span>Sat, Aug 23, 1:10 PM</span>
            </div>
            <div class="date-nd">
               <span>Sunday, August 24</span>
            </div>
            <div class="chat-msg st2">
               <p>Cras ultricies ligula.</p>
               <span>5 minutes ago</span>
            </div>
            <div class="chat-msg">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
               <span>Sat, Aug 23, 1:10 PM</span>
            </div>
         </div>
         <div class="typing-msg">
            <form>
               <textarea placeholder="Type a message here"></textarea>
               <button type="submit"><i class="fa fa-send"></i></button>
            </form>
            <ul class="ft-options">
               <li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
               <li><a href="#" title=""><i class="la la-camera"></i></a></li>
               <li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="chatbox">
      <div class="chat-mg">
         <a href="#" title=""><img src="frontend/images/resources/usr-img2.png" alt=""></a>
      </div>
      <div class="conversation-box">
         <div class="con-title mg-3">
            <div class="chat-user-info">
               <img src="frontend/images/resources/us-img1.png" alt="">
               <h3>John Doe <span class="status-info"></span></h3>
            </div>
            <div class="st-icons">
               <a href="#" title=""><i class="la la-cog"></i></a>
               <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
               <a href="#" title="" class="close-chat"><i class="la la-close"></i></a>
            </div>
         </div>
         <div class="chat-hist mCustomScrollbar" data-mcs-theme="dark">
            <div class="chat-msg">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
               <span>Sat, Aug 23, 1:10 PM</span>
            </div>
            <div class="date-nd">
               <span>Sunday, August 24</span>
            </div>
            <div class="chat-msg st2">
               <p>Cras ultricies ligula.</p>
               <span>5 minutes ago</span>
            </div>
            <div class="chat-msg">
               <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec rutrum congue leo eget malesuada. Vivamus suscipit tortor eget felis porttitor.</p>
               <span>Sat, Aug 23, 1:10 PM</span>
            </div>
         </div>
         <div class="typing-msg">
            <form>
               <textarea placeholder="Type a message here"></textarea>
               <button type="submit"><i class="fa fa-send"></i></button>
            </form>
            <ul class="ft-options">
               <li><a href="#" title=""><i class="la la-smile-o"></i></a></li>
               <li><a href="#" title=""><i class="la la-camera"></i></a></li>
               <li><a href="#" title=""><i class="fa fa-paperclip"></i></a></li>
            </ul>
         </div>
      </div>
   </div>
   <div class="chatbox">
      <div class="chat-mg bx">
         <a href="#" title=""><img src="frontend/images/chat.png" alt=""></a>
         <span>2</span>
      </div>
      <div class="conversation-box">
         <div class="con-title">
            <h3>Messages</h3>
            <a href="#" title="" class="close-chat"><i class="la la-minus-square"></i></a>
         </div>
         <div class="chat-list">
            <div class="conv-list active">
               <div class="usrr-pic">
                  <img src="frontend/images/resources/usy1.png" alt="">
                  <span class="active-status activee"></span>
               </div>
               <div class="usy-info">
                  <h3>John Doe</h3>
                  <span>Lorem ipsum dolor <img src="frontend/images/smley.png" alt=""></span>
               </div>
               <div class="ct-time">
                  <span>1:55 PM</span>
               </div>
               <span class="msg-numbers">2</span>
            </div>
            <div class="conv-list">
               <div class="usrr-pic">
                  <img src="frontend/images/resources/usy2.png" alt="">
               </div>
               <div class="usy-info">
                  <h3>John Doe</h3>
                  <span>Lorem ipsum dolor <img src="frontend/images/smley.png" alt=""></span>
               </div>
               <div class="ct-time">
                  <span>11:39 PM</span>
               </div>
            </div>
            <div class="conv-list">
               <div class="usrr-pic">
                  <img src="frontend/images/resources/usy3.png" alt="">
               </div>
               <div class="usy-info">
                  <h3>John Doe</h3>
                  <span>Lorem ipsum dolor <img src="frontend/images/smley.png" alt=""></span>
               </div>
               <div class="ct-time">
                  <span>0.28 AM</span>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection


@section('script')
@stop
