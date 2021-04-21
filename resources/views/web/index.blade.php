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
                  <div id="mainLeftSideBar" class="main-left-sidebar no-margin">

                     <div  class="suggestions full-width">
                        <div class="sd-title">
                           <h3>Consumerlens</h3>
                           <i class="fa fa-caret-down"></i>
                        </div>
                        <div class="nav-left-lists">
                          <ul>
                            <li>
                               <a href="#" class="klenstPos">
                                  <span class="consLenseSee"> <i class="fa fa-microphone"></i> </span>
                                   Radio
                                  <span class="consLenseSeeRight"> <i class="fa fa-caret-down"></i> </span>

                                  <div class="drpMenuAct">
                                    <a class="drpMenuActItem" href="#">Adom FM</a>
                                    <a class="drpMenuActItem" href="#">Peace FM</a>
                                    <a class="drpMenuActItem" href="#">Citi FM</a>
                                  </div>

                               </a>
                             </li>
                            <li> <a href="{{route('web.index')}}"> <span class="consLenseSee"><i class="fa fa-television"></i> </span> TV</a> </li>
                            <li> <a href="{{route('web.services')}}"> <span class="consLenseSee"><i class="fa fa-newspaper-o"></i> </span> Digital Newspaper</a> </li>
                            <li> <a href="{{route('web.services')}}"> <span class="consLenseSee"><i class="fa fa-address-card-o"></i> </span> News</a> </li>
                            <li> <a href="{{route('web.services')}}"> <span class="consLenseSee"><i class="fa fa-commenting-o"></i> </span> Company Reviews </a> </li>
                            <li> <a href="{{route('web.services')}}" class="consLenseSeeall"> SEE ALL</a> </li>
                          </ul>
                        </div>
                     </div>

                     <div  class="suggestions full-width">
                        <div class="sd-title">
                           <h3>Service Providers</h3>
                           <i class="fa fa-caret-down"></i>
                        </div>
                        <div class="nav-left-lists">
                          <ul>
                            <li>
                               <a href="#" class="klenstPos">
                                  <span class="consLenseSee"> <i class="fa fa-wifi"></i> </span>
                                   Telcos
                                  <span class="consLenseSeeRight"> <i class="fa fa-caret-down"></i> </span>

                                  <div class="drpMenuAct">
                                    <a class="drpMenuActItem" href="#">MTN Ghana</a>
                                    <a class="drpMenuActItem" href="#">Vodafone</a>
                                    <a class="drpMenuActItem" href="#">AirtelTigo</a>
                                  </div>

                               </a>
                             </li>
                            <li> <a href="{{route('web.index')}}"> <span class="consLenseSee"><i class="fa fa-bank"></i> </span> Banks</a> </li>
                            <li> <a href="{{route('web.services')}}"> <span class="consLenseSee"><i class="fa fa-newspaper-o"></i> </span> Automobile</a> </li>
                            <li> <a href="{{route('web.services')}}" class="consLenseSeeall"> SEE ALL</a> </li>
                          </ul>
                        </div>
                     </div>

                     <div  class="suggestions full-width">
                        <div class="sd-title">
                           <h3>Regulators</h3>
                           <i class="fa fa-caret-down"></i>
                        </div>
                        <div class="nav-left-lists">
                          <ul>
                            <li> <a href="#">  Registrar General’s Department (RGD)</a> </li>
                            <li> <a href="#">  Ghana Revenue Authority (GRA)</a> </li>
                            <li> <a href="#">  Ghana Investment Promotion Centre (GIPC)</a> </li>
                            <li> <a href="#">  Ghana Immigration Services (GIS)</a> </li>
                            <li> <a href="#">  Ghana Civil Aviation Authority (GCAA))</a> </li>
                            <li> <a href="{{route('web.services')}}" class="consLenseSeeall"> SEE ALL</a> </li>
                          </ul>
                        </div>
                     </div>

                     <div  class="suggestions full-width">
                        <div class="sd-title">
                           <h3>Governmental Institutions</h3>
                           <i class="fa fa-caret-down"></i>
                        </div>
                        <div class="nav-left-lists">
                          <ul>
                            <li> <a href="#">  Ministry of Works & Housing</a> </li>
                            <li> <a href="#">  Ministry of Fisheries & Aquaculture</a> </li>
                            <li> <a href="#">  Ministry of Defence</a> </li>
                            <li> <a href="{{route('web.services')}}" class="consLenseSeeall"> SEE ALL</a> </li>
                          </ul>
                        </div>
                     </div>

                     <div  class="suggestions full-width">
                        <div class="sd-title">
                           <h3>Embassies</h3>
                           <i class="fa fa-caret-down"></i>
                        </div>
                        <div class="nav-left-lists">
                          <ul>
                            <li> <a href="#">  Spanish Embassy</a> </li>
                            <li> <a href="#">  Italian Embassy</a> </li>
                            <li> <a href="#">  Embassy of the Korea</a> </li>
                            <li> <a href="{{route('web.services')}}" class="consLenseSeeall"> SEE ALL</a> </li>
                          </ul>
                        </div>
                     </div>

                     <div  class="suggestions full-width">
                        <div class="sd-title">
                           <h3>Member of Parliament</h3>
                           <i class="fa fa-caret-down"></i>
                        </div>
                        <div class="nav-left-lists">
                          <ul>
                            <li> <a href="#"> <img src="frontend/images/photo-icon.png" alt=""> Francis Asenso-Boakye</a> </li>
                            <li> <a href="#"> <img src="frontend/images/photo-icon.png" alt=""> Kojo Oppong Nkrumah</a> </li>
                            <li> <a href="#"> <img src="frontend/images/photo-icon.png" alt=""> Mustapha Abdul-Hamid</a> </li>
                            <li> <a href="{{route('web.services')}}" class="consLenseSeeall"> SEE ALL</a> </li>
                          </ul>
                        </div>
                     </div>

                     <div  class="suggestions full-width">
                        <div class="sd-title">
                           <h3>Commissions</h3>
                           <i class="fa fa-caret-down"></i>
                        </div>
                        <div class="nav-left-lists">
                          <ul>
                            <li> <a href="#"> Forestry Commission</a> </li>
                            <li> <a href="#"> Energy Commission</a> </li>
                            <li> <a href="#"> National Insurance Commission</a> </li>
                            <li> <a href="{{route('web.services')}}" class="consLenseSeeall"> SEE ALL</a> </li>
                          </ul>
                        </div>
                     </div>

                  </div>
               </div>

               <div class="col-lg-6 col-md-8 no-pd">
                  <div class="main-ws-sec">
                     <div style="display:none;" class="post-topbar">
                        <div class="user-picy">
                           <img src="frontend/images/resources/user-pic.png" alt="">
                        </div>
                        <div class="post-st">
                           <ul>
                              <!-- <li><a class="post_project" href="#" title="">Share grievances or challenges </a></li> -->
                              <li><a class="post-jb active" href="#" title=""> <i class="la la-share"></i> Share grievances or challenges</a></li>
                           </ul>
                        </div>
                     </div>
                     <div class="posts-section">

                        <div class="post-bar">
                          <div class="post_topbar">
                             <div class="usy-dt">
                                <img src="frontend/images/resources/company-pic.png" alt="">
                                <div class="usy-name">
                                   <h3>MTN Ghana</h3>
                                   <span><img src="frontend/images/clock.png" alt="">3 min ago</span>
                                </div>
                             </div>
                             <div class="ed-opts">
                                <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                <ul class="ed-options">
                                   <li><a href="#" title="">Edit Post</a></li>
                                   <li><a href="#" title="">Unsaved</a></li>
                                   <li><a href="#" title="">Unbid</a></li>
                                   <li><a href="#" title="">Close</a></li>
                                   <li><a href="#" title="">Hide</a></li>
                                </ul>
                             </div>
                          </div>
                          <div class="epi-sec">
                             <ul class="descp">
                                <li><img src="frontend/images/icon8.png" alt=""><span>Telecom</span></li>
                                <li><img src="frontend/images/icon9.png" alt=""><span>Ghana</span></li>
                             </ul>
                             <ul class="bk-links">
                                <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                             </ul>
                          </div>
                          <div class="job_descp">
                             <h3>MTN MoMo Pay</h3>
                             <div class="job_img">
                               <img src="https://mtn.com.gh/wp-content/uploads/2020/06/GettyImages-865615130_.jpg" alt="">
                             </div>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                          </div>
                          <div class="job-status-bar">
                             <ul class="like-com">
                                <li>
                                   <a href="#" class=""><i class="fas fa-heart"></i> Like</a>
                                   <!-- <img src="frontend/images/liked-img.png" alt=""> -->
                                   <span></span>
                                </li>
                                <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
                                <li><a href="#" class="com"><i class="fas fa-share"></i> Share</a></li>
                             </ul>
                             <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                          </div>
                        </div>

                        <div class="post-bar">
                          <div class="post_topbar">
                             <div class="usy-dt">
                                <img src="frontend/images/resources/company-pic.png" alt="">
                                <div class="usy-name">
                                   <h3>SSNIT</h3>
                                   <span><img src="frontend/images/clock.png" alt="">3 min ago</span>
                                </div>
                             </div>
                             <div class="ed-opts">
                                <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                <ul class="ed-options">
                                   <li><a href="#" title="">Edit Post</a></li>
                                   <li><a href="#" title="">Unsaved</a></li>
                                   <li><a href="#" title="">Unbid</a></li>
                                   <li><a href="#" title="">Close</a></li>
                                   <li><a href="#" title="">Hide</a></li>
                                </ul>
                             </div>
                          </div>
                          <div class="epi-sec">
                             <ul class="descp">
                                <li><img src="frontend/images/icon8.png" alt=""><span>Telecom</span></li>
                                <li><img src="frontend/images/icon9.png" alt=""><span>Ghana</span></li>
                             </ul>
                             <ul class="bk-links">
                                <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                             </ul>
                          </div>
                          <div class="job_descp">
                             <h3>SSNIT pays</h3>
                             <div class="job_img">
                               <img src="https://mtn.com.gh/wp-content/uploads/2020/06/GettyImages-865615130_.jpg" alt="">
                             </div>
                             <p>The Social Security and National Insurance Trust (SSNIT) has over time admonished the working class to ensure they make their pension trust <br> <a href="#" title="">view more</a></p>
                          </div>
                          <div class="job-status-bar">
                             <ul class="like-com">
                                <li>
                                   <a href="#" class=""><i class="fas fa-heart"></i> Like</a>
                                   <!-- <img src="frontend/images/liked-img.png" alt=""> -->
                                   <span></span>
                                </li>
                                <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
                                <li><a href="#" class="com"><i class="fas fa-share"></i> Share</a></li>
                             </ul>
                             <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                          </div>
                        </div>

                        <div style="display:none;" class="post-bar">
                           <div class="post_topbar">
                              <div class="usy-dt">
                                 <img src="frontend/images/resources/us-pic.png" alt="">
                                 <div class="usy-name">
                                    <h3>John Doe</h3>
                                    <span><img src="frontend/images/clock.png" alt="">3 min ago</span>
                                 </div>
                              </div>

                              <div class="ed-opts">
                                 <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                 <ul class="ed-options">
                                    <li><a href="#" title="">Edit Post</a></li>
                                    <li><a href="#" title="">Unsaved</a></li>
                                    <li><a href="#" title="">Unbid</a></li>
                                    <li><a href="#" title="">Close</a></li>
                                    <li><a href="#" title="">Hide</a></li>
                                 </ul>
                              </div>
                           </div>
                           <div class="epi-sec">
                              <ul class="descp">
                                 <li><img src="frontend/images/icon8.png" alt=""><span>Accountant</span></li>
                                 <li><img src="frontend/images/icon9.png" alt=""><span>Accra, Ghana</span></li>
                              </ul>
                              <ul class="bk-links">
                                 <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                 <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                              </ul>
                           </div>
                           <div class="job_descp">
                              <h3>Grievance / Challenge</h3>
                              <ul class="job-dt">
                                 <li><span>Directed to </span></li>
                                 <li><a href="#" title="">MTN Ghana</a></li>
                              </ul>
                              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                              <ul style="display:none;

                              " class="skill-tags">
                                 <li><a href="#" title="">HTML</a></li>
                                 <li><a href="#" title="">PHP</a></li>
                                 <li><a href="#" title="">CSS</a></li>
                                 <li><a href="#" title="">Javascript</a></li>
                                 <li><a href="#" title="">Wordpress</a></li>
                              </ul>
                           </div>
                           <div class="job-status-bar">
                              <ul class="like-com">
                                 <li>
                                    <a href="#"><i class="fas fa-heart"></i> Like</a>
                                    <!-- <img src="frontend/images/liked-img.png" alt=""> -->
                                    <span></span>
                                 </li>
                                 <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                                 <li><a href="#" class="com"><i class="fas fa-share"></i> Share</a></li>
                              </ul>
                              <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                           </div>
                        </div>

                        <!-- advertisment -->
                        <div class="post-bar">
                          <div class="epi-sec">
                             <ul class="descp">
                                <li><span>Advertisment</span></li>
                             </ul>
                          </div>
                          <div class="job_descp">
                             <h3>Herbalife</h3>
                             <div class="job_img">
                               <a href="#">
                                 <img src="https://www.herbalvitality.co/images/protein-chips-from-herbalife-625.jpg" alt="">
                               </a>
                             </div>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet...
                              <br> <a href="#" title="">visit site</a>
                             </p>
                          </div>
                        </div>
                        <!-- advertisment -->

                        <div class="post-bar">
                          <div class="post_topbar">
                             <div class="usy-dt">
                                <img src="frontend/images/resources/company-pic.png" alt="">
                                <div class="usy-name">
                                   <h3>Nadmo</h3>
                                   <span><img src="frontend/images/clock.png" alt="">3 min ago</span>
                                </div>
                             </div>
                             <div class="ed-opts">
                                <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                <ul class="ed-options">
                                   <li><a href="#" title="">Edit Post</a></li>
                                   <li><a href="#" title="">Unsaved</a></li>
                                   <li><a href="#" title="">Unbid</a></li>
                                   <li><a href="#" title="">Close</a></li>
                                   <li><a href="#" title="">Hide</a></li>
                                </ul>
                             </div>
                          </div>
                          <div class="epi-sec">
                             <ul class="descp">
                                <li><img src="frontend/images/icon8.png" alt=""><span>Telecom</span></li>
                                <li><img src="frontend/images/icon9.png" alt=""><span>Ghana</span></li>
                             </ul>
                             <ul class="bk-links">
                                <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                             </ul>
                          </div>
                          <div class="job_descp">
                             <h3>Nadmo training</h3>
                             <div class="job_img">
                               <img src="https://mtn.com.gh/wp-content/uploads/2020/06/GettyImages-865615130_.jpg" alt="">
                             </div>
                             <p>NADMO trains specialists on post-disaster needs assessment. The training sought to train a pool of recovery specialists on the PDNA and ... <br> <a href="#" title="">view more</a></p>
                          </div>
                          <div class="job-status-bar">
                             <ul class="like-com">
                                <li>
                                   <a href="#" class=""><i class="fas fa-heart"></i> Like</a>
                                   <!-- <img src="frontend/images/liked-img.png" alt=""> -->
                                   <span></span>
                                </li>
                                <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
                                <li><a href="#" class="com"><i class="fas fa-share"></i> Share</a></li>
                             </ul>
                             <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                          </div>
                        </div>

                        <div class="post-bar">
                          <div class="post_topbar">
                             <div class="usy-dt">
                                <img src="frontend/images/resources/company-pic.png" alt="">
                                <div class="usy-name">
                                   <h3>MTN Ghana</h3>
                                   <span><img src="frontend/images/clock.png" alt="">3 min ago</span>
                                </div>
                             </div>
                             <div class="ed-opts">
                                <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                <ul class="ed-options">
                                   <li><a href="#" title="">Edit Post</a></li>
                                   <li><a href="#" title="">Unsaved</a></li>
                                   <li><a href="#" title="">Unbid</a></li>
                                   <li><a href="#" title="">Close</a></li>
                                   <li><a href="#" title="">Hide</a></li>
                                </ul>
                             </div>
                          </div>
                          <div class="epi-sec">
                             <ul class="descp">
                                <li><img src="frontend/images/icon8.png" alt=""><span>Telecom</span></li>
                                <li><img src="frontend/images/icon9.png" alt=""><span>Ghana</span></li>
                             </ul>
                             <ul class="bk-links">
                                <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                             </ul>
                          </div>
                          <div class="job_descp">
                             <h3>MTN MoMo Pay</h3>
                             <div class="job_img">
                               <img src="https://mtn.com.gh/wp-content/uploads/2020/06/GettyImages-865615130_.jpg" alt="">
                             </div>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <br> <a href="#" title="">view more</a></p>
                          </div>
                          <div class="job-status-bar">
                             <ul class="like-com">
                                <li>
                                   <a href="#" class=""><i class="fas fa-heart"></i> Like</a>
                                   <!-- <img src="frontend/images/liked-img.png" alt=""> -->
                                   <span></span>
                                </li>
                                <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
                                <li><a href="#" class="com"><i class="fas fa-share"></i> Share</a></li>
                             </ul>
                             <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                          </div>
                        </div>

                        <!-- advertisment -->
                        <div class="post-bar">
                          <div class="epi-sec">
                             <ul class="descp">
                                <li><span>Advertisment</span></li>
                             </ul>
                          </div>
                          <div class="job_descp">
                             <h3>DSTV Ghana</h3>
                             <div class="job_img">
                               <a href="#">
                                 <img src="https://lawcarenigeria.com/wp-content/uploads/2020/06/DSTV-the-leading-cable-TV-company-in-Nigeria-.jpg" alt="">
                               </a>
                             </div>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet...
                               <br> <a href="#" title="">visit site</a>
                             </p>
                          </div>
                        </div>
                        <!-- advertisment -->

                        <div class="post-bar">
                          <div class="post_topbar">
                             <div class="usy-dt">
                                <img src="frontend/images/resources/company-pic.png" alt="">
                                <div class="usy-name">
                                   <h3>MTN Ghana</h3>
                                   <span><img src="frontend/images/clock.png" alt="">3 min ago</span>
                                </div>
                             </div>
                             <div class="ed-opts">
                                <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                <ul class="ed-options">
                                   <li><a href="#" title="">Edit Post</a></li>
                                   <li><a href="#" title="">Unsaved</a></li>
                                   <li><a href="#" title="">Unbid</a></li>
                                   <li><a href="#" title="">Close</a></li>
                                   <li><a href="#" title="">Hide</a></li>
                                </ul>
                             </div>
                          </div>
                          <div class="epi-sec">
                             <ul class="descp">
                                <li><img src="frontend/images/icon8.png" alt=""><span>Telecom</span></li>
                                <li><img src="frontend/images/icon9.png" alt=""><span>Ghana</span></li>
                             </ul>
                             <ul class="bk-links">
                                <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                             </ul>
                          </div>
                          <div class="job_descp">
                             <h3>MTN MoMo Pay</h3>
                             <div class="job_img">
                               <img src="https://mtn.com.gh/wp-content/uploads/2020/06/GettyImages-865615130_.jpg" alt="">
                             </div>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <br> <a href="#" title="">view more</a></p>
                          </div>
                          <div class="job-status-bar">
                             <ul class="like-com">
                                <li>
                                   <a href="#" class=""><i class="fas fa-heart"></i> Like</a>
                                   <!-- <img src="frontend/images/liked-img.png" alt=""> -->
                                   <span></span>
                                </li>
                                <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
                                <li><a href="#" class="com"><i class="fas fa-share"></i> Share</a></li>
                             </ul>
                             <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                          </div>
                        </div>

                        <div class="post-bar">
                          <div class="post_topbar">
                             <div class="usy-dt">
                                <img src="frontend/images/resources/company-pic.png" alt="">
                                <div class="usy-name">
                                   <h3>MTN Ghana</h3>
                                   <span><img src="frontend/images/clock.png" alt="">3 min ago</span>
                                </div>
                             </div>
                             <div class="ed-opts">
                                <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                <ul class="ed-options">
                                   <li><a href="#" title="">Edit Post</a></li>
                                   <li><a href="#" title="">Unsaved</a></li>
                                   <li><a href="#" title="">Unbid</a></li>
                                   <li><a href="#" title="">Close</a></li>
                                   <li><a href="#" title="">Hide</a></li>
                                </ul>
                             </div>
                          </div>
                          <div class="epi-sec">
                             <ul class="descp">
                                <li><img src="frontend/images/icon8.png" alt=""><span>Telecom</span></li>
                                <li><img src="frontend/images/icon9.png" alt=""><span>Ghana</span></li>
                             </ul>
                             <ul class="bk-links">
                                <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                             </ul>
                          </div>
                          <div class="job_descp">
                             <h3>MTN MoMo Pay</h3>
                             <div class="job_img">
                               <img src="https://mtn.com.gh/wp-content/uploads/2020/06/GettyImages-865615130_.jpg" alt="">
                             </div>
                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <br> <a href="#" title="">view more</a></p>
                          </div>
                          <div class="job-status-bar">
                             <ul class="like-com">
                                <li>
                                   <a href="#" class=""><i class="fas fa-heart"></i> Like</a>
                                   <!-- <img src="frontend/images/liked-img.png" alt=""> -->
                                   <span></span>
                                </li>
                                <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
                                <li><a href="#" class="com"><i class="fas fa-share"></i> Share</a></li>
                             </ul>
                             <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                          </div>
                        </div>

                        <div style="display:none;" class="posty">
                           <div class="post-bar no-margin">
                              <div class="post_topbar">
                                 <div class="usy-dt">
                                    <img src="frontend/images/resources/us-pc2.png" alt="">
                                    <div class="usy-name">
                                       <h3>John Doe</h3>
                                       <span><img src="frontend/images/clock.png" alt="">3 min ago</span>
                                    </div>
                                 </div>
                                 <div class="ed-opts">
                                    <a href="#" title="" class="ed-opts-open"><i class="la la-ellipsis-v"></i></a>
                                    <ul class="ed-options">
                                       <li><a href="#" title="">Edit Post</a></li>
                                       <li><a href="#" title="">Unsaved</a></li>
                                       <li><a href="#" title="">Unbid</a></li>
                                       <li><a href="#" title="">Close</a></li>
                                       <li><a href="#" title="">Hide</a></li>
                                    </ul>
                                 </div>
                              </div>
                              <div class="epi-sec">
                                 <ul class="descp">
                                    <li><img src="frontend/images/icon8.png" alt=""><span>Epic Coder</span></li>
                                    <li><img src="frontend/images/icon9.png" alt=""><span>India</span></li>
                                 </ul>
                                 <ul class="bk-links">
                                    <li><a href="#" title=""><i class="la la-bookmark"></i></a></li>
                                    <li><a href="#" title=""><i class="la la-envelope"></i></a></li>
                                 </ul>
                              </div>
                              <div class="job_descp">
                                 <h3>Senior Wordpress Developer</h3>
                                 <ul class="job-dt">
                                    <li><a href="#" title="">Full Time</a></li>
                                    <li><span>$30 / hr</span></li>
                                 </ul>
                                 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                                 <ul class="skill-tags">
                                    <li><a href="#" title="">HTML</a></li>
                                    <li><a href="#" title="">PHP</a></li>
                                    <li><a href="#" title="">CSS</a></li>
                                    <li><a href="#" title="">Javascript</a></li>
                                    <li><a href="#" title="">Wordpress</a></li>
                                 </ul>
                              </div>
                              <div class="job-status-bar">
                                 <ul class="like-com">
                                    <li>
                                       <a href="#"><i class="fas fa-heart"></i> Like</a>
                                       <!-- <img src="frontend/images/liked-img.png" alt=""> -->
                                       <span></span>
                                    </li>
                                    <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                                 </ul>
                                 <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                              </div>
                           </div>
                           <div class="comment-section">
                              <a href="#" class="plus-ic">
                              <i class="la la-plus"></i>
                              </a>
                              <div class="comment-sec">
                                 <ul>
                                    <li>
                                       <div class="comment-list">
                                          <div class="bg-img">
                                             <img src="frontend/images/resources/bg-img1.png" alt="">
                                          </div>
                                          <div class="comment">
                                             <h3>John Doe</h3>
                                             <span><img src="frontend/images/clock.png" alt=""> 3 min ago</span>
                                             <p>Lorem ipsum dolor sit amet, </p>
                                             <a href="#" title="" class="active"><i class="fa fa-reply-all"></i>Reply</a>
                                          </div>
                                       </div>
                                       <ul>
                                          <li>
                                             <div class="comment-list">
                                                <div class="bg-img">
                                                   <img src="frontend/images/resources/bg-img2.png" alt="">
                                                </div>
                                                <div class="comment">
                                                   <h3>John Doe</h3>
                                                   <span><img src="frontend/images/clock.png" alt=""> 3 min ago</span>
                                                   <p>Hi John </p>
                                                   <a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
                                                </div>
                                             </div>
                                          </li>
                                       </ul>
                                    </li>
                                    <li>
                                       <div class="comment-list">
                                          <div class="bg-img">
                                             <img src="frontend/images/resources/bg-img3.png" alt="">
                                          </div>
                                          <div class="comment">
                                             <h3>John Doe</h3>
                                             <span><img src="frontend/images/clock.png" alt=""> 3 min ago</span>
                                             <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at.</p>
                                             <a href="#" title=""><i class="fa fa-reply-all"></i>Reply</a>
                                          </div>
                                       </div>
                                    </li>
                                 </ul>
                              </div>
                              <div class="post-comment">
                                 <div class="cm_img">
                                    <img src="frontend/images/resources/bg-img4.png" alt="">
                                 </div>
                                 <div class="comment_box">
                                    <form>
                                       <input type="text" placeholder="Post a comment">
                                       <button type="submit">Send</button>
                                    </form>
                                 </div>
                              </div>
                           </div>
                        </div>

                        <div class="process-comm">
                           <div class="spinner">
                              <div class="bounce1"></div>
                              <div class="bounce2"></div>
                              <div class="bounce3"></div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-lg-3 pd-right-none no-pd">

                  <div class="right-sidebar">

                      <div class="ads-profileWrap">

                         <div class="user-profy2">
                           <div class="ourevent-wrapper" style="background: #1098ad;">
                             <div class="ourevent-header">
                               <h1>17</h1>
                               <h3>April</h3>
                             </div>

                             <div class="ourevent-body">
                               <p>Accra Start-up Innovation Summit</p>
                             </div>

                             <div class="ourevent-footer">
                               <ul>
                                 <li>7:30PM - 10PM</li>
                                 <li>@Github Towers - Accra</li>
                               </ul>
                             </div>
                           </div>
                         </div>

                         <div class="user-profy2">

                           <div class="ourevent-wrapper">
                             <div class="ourevent-header">
                               <h1>25</h1>
                               <h3>April</h3>
                             </div>

                             <div class="ourevent-body">
                               <p>Kumasi Start-up Innovation Summit</p>
                             </div>

                             <div class="ourevent-footer">
                               <ul>
                                 <li>7:30PM - 10PM</li>
                                 <li>@Aleska Towers - Accra</li>
                               </ul>
                             </div>
                           </div>

                         </div>

                      </div>

                  </div>

                  <!-- <div class="right-sidebar">

                      <div class="ads-profileWrap">

                       <div class="user-profy2">
                         <div class="widget widget-about">
                            <img src="frontend/images/wd-logo.png" alt="">
                            <h3>The Workshop</h3>
                            <span>Pay only for the Hours worked</span>
                            <div class="sign_link">
                               <h3><a href="#" title="">Upcoming Event</a></h3>
                               <a href="#" title="">Learn More</a>
                            </div>
                         </div>
                       </div>

                       <div class="user-profy2">
                         <div class="widget widget-about">
                            <img src="frontend/images/wd-logo.png" alt="">
                            <h3>Startup Meeting</h3>
                            <span>Pay only for the Hours worked</span>
                            <div class="sign_link">
                               <h3><a href="#" title="">Upcoming Event</a></h3>
                               <a href="#" title="">Learn More</a>
                            </div>
                         </div>
                       </div>

                       <div class="user-profy2">
                         <div class="widget widget-about">
                            <img src="frontend/images/wd-logo.png" alt="">
                            <h3>Track Time on Workwise</h3>
                            <span>Pay only for the Hours worked</span>
                            <div class="sign_link">
                               <h3><a href="#" title="">Upcoming Event</a></h3>
                               <a href="#" title="">Learn More</a>
                            </div>
                         </div>
                       </div>

                     </div>

                  </div> -->

                  <div class="widget widget-jobs">
                    <div class="sd-title">
                      <h3>Polls</h3>
                      <i class="la la-ellipsis-v"></i>
                    </div>

                    <div class="polls-list">
                      <div class="pol-question">
                        <h3>If age is only a state of mind, which category best describes your state of mind right now?</h3>
                      </div>
                      <!-- <div class="pol-answers">
                        <ul>
                          <li> <input type="radio" name="answer" value=""> <span>Accra</span> </li>
                          <li> <input type="radio" name="answer" value=""> <span>Kumasi</span> </li>
                          <li> <input type="radio" name="answer" value=""> <span>Cape Coast</span> </li>
                          <li> <input type="radio" name="answer" value=""> <span>Ho</span> </li>
                        </ul>
                        <p> <a href="#" class="btn btn-primary btn-sm">Submit Answer</a> </p>
                      </div>
                      <div class="pol-stats">
                        <p>Time remaining: 23HRS</p>
                        <p>Votes: 12k</p>
                      </div> -->
                      <div class="polls-progress">
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">Cheeky child</div>
                        </div>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">Tormented teenager</div>
                        </div>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 58%" aria-valuenow="58" aria-valuemin="0" aria-valuemax="100">Mad mid-lifer</div>
                        </div>
                        <div class="progress">
                          <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100">Groovy grandparent</div>
                        </div>
                      </div>
                      <p> <a href="#" id="voteBtn" class="btn btn-primary btn-sm">Vote</a> </p>
                    </div>


                  </div>

                  <div class="widget widget-jobs">
                    <div class="sd-title">
                      <h3>Trending News</h3>
                      <i class="la la-ellipsis-v"></i>
                    </div>
                    <div class="suggestions-list">
                      <div class="suggestion-usd">
                        <img src="frontend/images/resources/s1.png" alt="">
                        <div class="sgt-text sgt2Text">
                          <h4>Achievements Of NADMO Under Nana Addo Dankwa Akufo-Addo’s Government.</h4>
                        </div>
                      </div>

                      <div class="suggestion-usd">
                        <img src="frontend/images/resources/s1.png" alt="">
                        <div class="sgt-text sgt2Text">
                          <h4>NIA sets up registration centre at RGD to provide TIN to businesses</h4>
                        </div>
                      </div>

                      <div class="view-more">
                        <a href="#" title="">View More</a>
                      </div>
                    </div>
                  </div>

                  <div class="widget widget-jobs">
                    <div class="sd-title">
                      <h3>Recent Reviews</h3>
                      <i class="la la-ellipsis-v"></i>
                    </div>
                    <div class="suggestions-list">
                      <div class="suggestion-usd sugStarMain">
                        <img src="frontend/images/resources/s1.png" alt="">
                        <div class="sugStar">
                          <span>  <i class="fa fa-star"></i> </span>
                          <span>  <i class="fa fa-star"></i> </span>
                          <span>  <i class="fa fa-star"></i> </span>
                          <span>  <i class="fa fa-star"></i> </span>
                          <span>  <i class="fa fa-star"></i> </span>
                        </div>
                        <div class="sgt-text sgt2Text">
                          <h4>Kwesi Mintah <b>reviewed</b> Ghana Ports</h4>
                          <p>“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.”</p>
                        </div>
                      </div>

                      <div class="suggestion-usd sugStarMain">
                        <img src="frontend/images/resources/s1.png" alt="">
                        <div class="sugStar">
                          <span>  <i class="fa fa-star"></i> </span>
                          <span>  <i class="fa fa-star"></i> </span>
                          <span>  <i class="fa fa-star"></i> </span>
                          <span>  <i class="fa fa-star"></i> </span>
                          <span>  <i class="fa fa-star"></i> </span>
                        </div>
                        <div class="sgt-text sgt2Text">
                          <h4>Kwesi Mintah <b>reviewed</b> Ghana Ports</h4>
                          <p>“ Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.”</p>
                        </div>
                      </div>


                      <div class="view-more">
                        <a href="#" title="">View More</a>
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
