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
                           <h3>Trending</h3>
                           <i class="la la-ellipsis-v"></i>
                        </div>
                        <div class="suggestions-list">
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
                     <div class="post-topbar">
                        <div class="user-picy">
                           <img src="frontend/images/resources/user-pic.png" alt="">
                        </div>
                        <div class="post-st">
                           <ul>
                              <!-- <li><a class="post_project" href="#" title="">Share grievances or challenges </a></li> -->
                              <li><a class="post-jb active" href="#" title="">Share grievances or challenges</a></li>
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
                                   <a href="#" class="active"><i class="fas fa-heart"></i> Like</a>
                                   <img src="frontend/images/liked-img.png" alt="">
                                   <span>25</span>
                                </li>
                                <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
                             </ul>
                             <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                          </div>
                       </div>

                        <div class="post-bar">
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
                                    <img src="frontend/images/liked-img.png" alt="">
                                    <span>25</span>
                                 </li>
                                 <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                              </ul>
                              <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                           </div>
                        </div>

                        <div class="top-profiles">
                           <div class="pf-hd">
                              <h3>Top Profiles</h3>
                              <i class="la la-ellipsis-v"></i>
                           </div>
                           <div class="profiles-slider">
                              <div class="user-profy">
                                 <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/a/af/MTN_Logo.svg/1200px-MTN_Logo.svg.png" alt="">
                                 <h3>MTN Ghana</h3>
                                 <span>Service Provider</span>
                                 <a href="{{ route('web.profile')}}" title="">View Profile</a>
                              </div>
                              <div class="user-profy">
                                 <img src="https://pbs.twimg.com/profile_images/1216690773770612738/TVeaW-B1_400x400.jpg" alt="">
                                 <h3>AirtelTigo</h3>
                                 <span>Service Provider</span>
                                 <a href="{{ route('web.profile')}}" title="">View Profile</a>
                              </div>
                              <div class="user-profy">
                                 <img src="https://www.dcleakers.com/wp-content/uploads/2019/10/Vodafone-logo.jpg" alt="">
                                 <h3>Vodafone</h3>
                                 <span>Service Provider</span>
                                 <a href="{{ route('web.profile')}}" title="">View Profile</a>
                              </div>
                              <div class="user-profy">
                                 <img src="https://www.mofep.gov.gh/sites/default/files/logo.png" alt="">
                                 <h3>Ministry of Finanace</h3>
                                 <span>Regulator</span>
                                 <a href="{{ route('web.profile')}}" title="">View Profile</a>
                              </div>
                           </div>
                        </div>

                        <div class="post-bar">
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
                                    <img src="frontend/images/liked-img.png" alt="">
                                    <span>25</span>
                                 </li>
                                 <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
                              </ul>
                              <a href="#"><i class="fas fa-eye"></i>Views 50</a>
                           </div>
                        </div>

                        <div class="post-bar">
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
                                    <img src="frontend/images/liked-img.png" alt="">
                                    <span>25</span>
                                 </li>
                                 <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comment 15</a></li>
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
                                       <img src="frontend/images/liked-img.png" alt="">
                                       <span>25</span>
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
                     <div class="widget widget-about">
                        <img src="frontend/images/wd-logo.png" alt="">
                        <h3>Track Time on Workwise</h3>
                        <span>Pay only for the Hours worked</span>
                        <div class="sign_link">
                           <h3><a href="#" title="">advertisement</a></h3>
                           <a href="#" title="">Learn More</a>
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
