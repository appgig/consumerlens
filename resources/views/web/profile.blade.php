@extends('layouts.web')

@section('style')
@stop

@section('content')
<section class="cover-sec">
  <img src="https://guardian.ng/wp-content/uploads/2016/08/qz-mtn-1.jpg" alt="">
</section>

<main>
  <div class="main-section">
     <div class="container">
        <div class="main-section-data">
           <div class="row">
              <div class="col-lg-3">
                 <div class="main-left-sidebar">
                    <div class="user_profile">
                       <div class="user-pro-img">
                          <img src="https://www.logolynx.com/images/logolynx/58/5851155e37656ef98b095e8517ebb5fc.jpeg" alt="">
                       </div>
                       <div class="user_pro_status">
                          <ul class="flw-hr">
                             <li><a href="#" title="" class="flww"><i class="la la-plus"></i> Follow</a></li>
                          </ul>
                          <!-- <ul class="flw-status">
                             <li>
                                <span>Following</span>
                                <b>34</b>
                             </li>
                             <li>
                                <span>Followers</span>
                                <b>155</b>
                             </li>
                          </ul> -->
                       </div>
                       <ul class="social_links">
                          <li><a href="#" title=""><i class="la la-globe"></i> www.example.com</a></li>
                          <li><a href="#" title=""><i class="fa fa-facebook-square"></i> Http://www.facebook.com/john...</a></li>
                          <li><a href="#" title=""><i class="fa fa-instagram"></i> Http://www.instagram.com/john...</a></li>
                          <li><a href="#" title=""><i class="fa fa-twitter"></i> Http://www.Twitter.com/john...</a></li>
                          <li><a href="#" title=""><i class="fa fa-youtube"></i> Http://www.youtube.com/john...</a></li>
                       </ul>
                    </div>
                    <div style="display:none;" class="suggestions full-width">
                       <div class="sd-title">
                          <h3>Suggestions</h3>
                          <i class="la la-ellipsis-v"></i>
                       </div>
                       <div class="suggestions-list">
                          <div class="suggestion-usd">
                             <img src="frontend/images/resources/s1.png" alt="">
                             <div class="sgt-text">
                                <h4>Jessica William</h4>
                                <span>Graphic Designer</span>
                             </div>
                             <span><i class="la la-plus"></i></span>
                          </div>
                          <div class="suggestion-usd">
                             <img src="frontend/images/resources/s2.png" alt="">
                             <div class="sgt-text">
                                <h4>John Doe</h4>
                                <span>PHP Developer</span>
                             </div>
                             <span><i class="la la-plus"></i></span>
                          </div>
                          <div class="suggestion-usd">
                             <img src="frontend/images/resources/s3.png" alt="">
                             <div class="sgt-text">
                                <h4>Poonam</h4>
                                <span>Wordpress Developer</span>
                             </div>
                             <span><i class="la la-plus"></i></span>
                          </div>
                          <div class="suggestion-usd">
                             <img src="frontend/images/resources/s4.png" alt="">
                             <div class="sgt-text">
                                <h4>Bill Gates</h4>
                                <span>C & C++ Developer</span>
                             </div>
                             <span><i class="la la-plus"></i></span>
                          </div>
                          <div class="suggestion-usd">
                             <img src="frontend/images/resources/s5.png" alt="">
                             <div class="sgt-text">
                                <h4>Jessica William</h4>
                                <span>Graphic Designer</span>
                             </div>
                             <span><i class="la la-plus"></i></span>
                          </div>
                          <div class="suggestion-usd">
                             <img src="frontend/images/resources/s6.png" alt="">
                             <div class="sgt-text">
                                <h4>John Doe</h4>
                                <span>PHP Developer</span>
                             </div>
                             <span><i class="la la-plus"></i></span>
                          </div>
                          <div class="view-more">
                             <a href="#" title="">View More</a>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-6">
                 <div class="main-ws-sec">
                    <div class="user-tab-sec">
                       <h3>MTN Ghana</h3>
                       <div class="star-descp">
                          <span>Telecomunication Service Provider</span>
                          <ul>
                             <li><i class="fa fa-star"></i></li>
                             <li><i class="fa fa-star"></i></li>
                             <li><i class="fa fa-star"></i></li>
                             <li><i class="fa fa-star"></i></li>
                             <li><i class="fa fa-star-half-o"></i></li>
                          </ul>
                       </div>
                       <div class="tab-feed">
                          <ul>
                             <li data-tab="feed-dd" class="active">
                                <a href="#" title="">
                                <img src="frontend/images/ic1.png" alt="">
                                <span>Feed</span>
                                </a>
                             </li>
                             <li data-tab="info-dd">
                                <a href="#" title="">
                                <img src="frontend/images/ic2.png" alt="">
                                <span>Info</span>
                                </a>
                             </li>
                             <li data-tab="portfolio-dd">
                                <a href="#" title="">
                                <img src="frontend/images/ic3.png" alt="">
                                <span>Portfolio</span>
                                </a>
                             </li>
                          </ul>
                       </div>
                    </div>
                    <div class="product-feed-tab current" id="feed-dd">
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
                                <h3>Latest Promotion</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                             </div>
                             <div class="job-status-bar">
                                <ul class="like-com">
                                   <li>
                                      <a href="#"><i class="fas fa-heart"></i> Like</a>
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
                                <h3>Business Service Solutions</h3>
                                <div class="job_descp">
                                   <h3>MTN MoMo Pay</h3>
                                   <div class="job_img">
                                     <img src="https://mtn.com.gh/wp-content/uploads/2019/06/Home-wwd-business@2x.jpg" alt="">
                                   </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                             </div>
                             <div class="job-status-bar">
                                <ul class="like-com">
                                   <li>
                                      <a href="#"><i class="fas fa-heart"></i> Like</a>
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
                                   <img src="frontend/images/resources/company-pic.png" alt="">
                                   <div class="usy-name">
                                      <h3>MTN Ghana </h3>
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
                                <h3>Dedicated internet</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam luctus hendrerit metus, ut ullamcorper quam finibus at. Etiam id magna sit amet... <a href="#" title="">view more</a></p>
                             </div>
                             <div class="job-status-bar">
                                <ul class="like-com">
                                   <li>
                                      <a href="#"><i class="fas fa-heart"></i> Like</a>
                                      <img src="frontend/images/liked-img.png" alt="">
                                      <span>25</span>
                                   </li>
                                   <li><a href="#" class="com"><i class="fas fa-comment-alt"></i> Comments 15</a></li>
                                </ul>
                                <a href="#"><i class="fas fa-eye"></i>Views 50</a>
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
                    <div class="product-feed-tab" id="info-dd">
                       <div class="user-profile-ov">
                          <h3><a href="#" title="" class="overview-open">Overview</a> <a href="#" title="" class="overview-open"><i class="fa fa-pencil"></i></a></h3>
                          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque tempor aliquam felis, nec condimentum ipsum commodo id. Vivamus sit amet augue nec urna efficitur tincidunt. Vivamus consectetur aliquam lectus commodo viverra. Nunc eu augue nec arcu efficitur faucibus. Aliquam accumsan ac magna convallis bibendum. Quisque laoreet augue eget augue fermentum scelerisque. Vivamus dignissim mollis est dictum blandit. Nam porta auctor neque sed congue. Nullam rutrum eget ex at maximus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec eget vestibulum lorem.</p>
                       </div>
                       <div class="user-profile-ov st2">
                          <h3><a href="#" title="" class="esp-bx-open">Establish Since </a><a href="#" title="" class="esp-bx-open"><i class="fa fa-pencil"></i></a> <a href="#" title="" class="esp-bx-open"><i class="fa fa-plus-square"></i></a></h3>
                          <span>February 2004</span>
                       </div>
                       <div class="user-profile-ov">
                          <h3><a href="#" title="" class="emp-open">Total Employees</a> <a href="#" title="" class="emp-open"><i class="fa fa-pencil"></i></a> <a href="#" title="" class="emp-open"><i class="fa fa-plus-square"></i></a></h3>
                          <span>17,048</span>
                       </div>
                       <div class="user-profile-ov">
                          <h3><a href="#" title="" class="lct-box-open">Location</a> <a href="#" title="" class="lct-box-open"><i class="fa fa-pencil"></i></a> <a href="#" title="" class="lct-box-open"><i class="fa fa-plus-square"></i></a></h3>
                          <h4>USA</h4>
                          <p> Menlo Park, California, United States</p>
                       </div>
                    </div>
                    <div class="product-feed-tab" id="portfolio-dd">
                       <div class="portfolio-gallery-sec">
                          <h3>Portfolio</h3>
                          <div class="gallery_pf">
                             <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                   <div class="gallery_pt">
                                      <img src="frontend/images/resources/pf-img1.jpg" alt="">
                                      <a href="#" title=""><img src="frontend/images/all-out.png" alt=""></a>
                                   </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                   <div class="gallery_pt">
                                      <img src="frontend/images/resources/pf-img2.jpg" alt="">
                                      <a href="#" title=""><img src="frontend/images/all-out.png" alt=""></a>
                                   </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                   <div class="gallery_pt">
                                      <img src="frontend/images/resources/pf-img3.jpg" alt="">
                                      <a href="#" title=""><img src="frontend/images/all-out.png" alt=""></a>
                                   </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                   <div class="gallery_pt">
                                      <img src="frontend/images/resources/pf-img4.jpg" alt="">
                                      <a href="#" title=""><img src="frontend/images/all-out.png" alt=""></a>
                                   </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                   <div class="gallery_pt">
                                      <img src="frontend/images/resources/pf-img5.jpg" alt="">
                                      <a href="#" title=""><img src="frontend/images/all-out.png" alt=""></a>
                                   </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                   <div class="gallery_pt">
                                      <img src="frontend/images/resources/pf-img6.jpg" alt="">
                                      <a href="#" title=""><img src="frontend/images/all-out.png" alt=""></a>
                                   </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                   <div class="gallery_pt">
                                      <img src="frontend/images/resources/pf-img7.jpg" alt="">
                                      <a href="#" title=""><img src="frontend/images/all-out.png" alt=""></a>
                                   </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                   <div class="gallery_pt">
                                      <img src="frontend/images/resources/pf-img8.jpg" alt="">
                                      <a href="#" title=""><img src="frontend/images/all-out.png" alt=""></a>
                                   </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                   <div class="gallery_pt">
                                      <img src="frontend/images/resources/pf-img9.jpg" alt="">
                                      <a href="#" title=""><img src="frontend/images/all-out.png" alt=""></a>
                                   </div>
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-4 col-6">
                                   <div class="gallery_pt">
                                      <img src="frontend/images/resources/pf-img10.jpg" alt="">
                                      <a href="#" title=""><img src="frontend/images/all-out.png" alt=""></a>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="col-lg-3">
                 <div class="right-sidebar">
                    <div class="message-btn">
                       <a href="#" title=""><i class="fa fa-envelope"></i> Share Grievances</a>
                    </div>
                    <div class="widget widget-portfolio">
                       <div class="wd-heady">
                          <h3>Portfolio</h3>
                          <img src="frontend/images/photo-icon.png" alt="">
                       </div>
                       <div class="pf-gallery">
                          <ul>
                             <li><a href="#" title=""><img src="frontend/images/resources/pf-gallery1.png" alt=""></a></li>
                             <li><a href="#" title=""><img src="frontend/images/resources/pf-gallery2.png" alt=""></a></li>
                             <li><a href="#" title=""><img src="frontend/images/resources/pf-gallery3.png" alt=""></a></li>
                             <li><a href="#" title=""><img src="frontend/images/resources/pf-gallery4.png" alt=""></a></li>
                             <li><a href="#" title=""><img src="frontend/images/resources/pf-gallery5.png" alt=""></a></li>
                             <li><a href="#" title=""><img src="frontend/images/resources/pf-gallery6.png" alt=""></a></li>
                             <li><a href="#" title=""><img src="frontend/images/resources/pf-gallery7.png" alt=""></a></li>
                             <li><a href="#" title=""><img src="frontend/images/resources/pf-gallery8.png" alt=""></a></li>
                             <li><a href="#" title=""><img src="frontend/images/resources/pf-gallery9.png" alt=""></a></li>
                             <li><a href="#" title=""><img src="frontend/images/resources/pf-gallery10.png" alt=""></a></li>
                             <li><a href="#" title=""><img src="frontend/images/resources/pf-gallery11.png" alt=""></a></li>
                             <li><a href="#" title=""><img src="frontend/images/resources/pf-gallery12.png" alt=""></a></li>
                          </ul>
                       </div>
                    </div>
                 </div>
              </div>
           </div>
        </div>
     </div>
  </div>
</main>



<div class="overview-box" id="overview-box">
   <div class="overview-edit">
      <h3>Overview</h3>
      <span>5000 character left</span>
      <form>
         <textarea></textarea>
         <button type="submit" class="save">Save</button>
         <button type="submit" class="cancel">Cancel</button>
      </form>
      <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
   </div>
</div>
<div class="overview-box" id="experience-box">
   <div class="overview-edit">
      <h3>Experience</h3>
      <form>
         <input type="text" name="subject" placeholder="Subject">
         <textarea></textarea>
         <button type="submit" class="save">Save</button>
         <button type="submit" class="save-add">Save & Add More</button>
         <button type="submit" class="cancel">Cancel</button>
      </form>
      <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
   </div>
</div>
<div class="overview-box" id="education-box">
   <div class="overview-edit">
      <h3>Education</h3>
      <form>
         <input type="text" name="school" placeholder="School / University">
         <div class="datepicky">
            <div class="row">
               <div class="col-lg-6 no-left-pd">
                  <div class="datefm">
                     <input type="text" name="from" placeholder="From" class="datepicker">
                     <i class="fa fa-calendar"></i>
                  </div>
               </div>
               <div class="col-lg-6 no-righ-pd">
                  <div class="datefm">
                     <input type="text" name="to" placeholder="To" class="datepicker">
                     <i class="fa fa-calendar"></i>
                  </div>
               </div>
            </div>
         </div>
         <input type="text" name="degree" placeholder="Degree">
         <textarea placeholder="Description"></textarea>
         <button type="submit" class="save">Save</button>
         <button type="submit" class="save-add">Save & Add More</button>
         <button type="submit" class="cancel">Cancel</button>
      </form>
      <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
   </div>
</div>
<div class="overview-box" id="location-box">
   <div class="overview-edit">
      <h3>Location</h3>
      <form>
         <div class="datefm">
            <select>
               <option>Country</option>
               <option value="pakistan">Pakistan</option>
               <option value="england">England</option>
               <option value="india">Ghana</option>
               <option value="usa">United Sates</option>
            </select>
            <i class="fa fa-globe"></i>
         </div>
         <div class="datefm">
            <select>
               <option>City</option>
               <option value="london">London</option>
               <option value="new-york">New York</option>
               <option value="sydney">Sydney</option>
               <option value="chicago">Chicago</option>
            </select>
            <i class="fa fa-map-marker"></i>
         </div>
         <button type="submit" class="save">Save</button>
         <button type="submit" class="cancel">Cancel</button>
      </form>
      <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
   </div>
</div>
<div class="overview-box" id="skills-box">
   <div class="overview-edit">
      <h3>Skills</h3>
      <ul>
         <li><a href="#" title="" class="skl-name">HTML</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
         <li><a href="#" title="" class="skl-name">php</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
         <li><a href="#" title="" class="skl-name">css</a><a href="#" title="" class="close-skl"><i class="la la-close"></i></a></li>
      </ul>
      <form>
         <input type="text" name="skills" placeholder="Skills">
         <button type="submit" class="save">Save</button>
         <button type="submit" class="save-add">Save & Add More</button>
         <button type="submit" class="cancel">Cancel</button>
      </form>
      <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
   </div>
</div>
<div class="overview-box" id="create-portfolio">
   <div class="overview-edit">
      <h3>Create Portfolio</h3>
      <form>
         <input type="text" name="pf-name" placeholder="Portfolio Name">
         <div class="file-submit nomg">
            <input type="file" name="file">
         </div>
         <div class="pf-img">
            <img src="frontend/images/resources/np.png" alt="">
         </div>
         <input type="text" name="website-url" placeholder="htp://www.example.com">
         <button type="submit" class="save">Save</button>
         <button type="submit" class="cancel">Cancel</button>
      </form>
      <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
   </div>
</div>
<div class="overview-box" id="establish-box">
   <div class="overview-edit">
      <h3>Establish Since</h3>
      <form>
         <div class="daty">
            <input type="text" name="establish" placeholder="Select Date" class="datepicker">
            <i class="fa fa-calendar"></i>
         </div>
         <button type="submit" class="save">Save</button>
         <button type="submit" class="cancel">Cancel</button>
      </form>
      <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
   </div>
</div>
<div class="overview-box" id="total-employes">
   <div class="overview-edit">
      <h3>Total Employees</h3>
      <form>
         <input type="text" name="employes" placeholder="Type in numbers">
         <button type="submit" class="save">Save</button>
         <button type="submit" class="cancel">Cancel</button>
      </form>
      <a href="#" title="" class="close-box"><i class="la la-close"></i></a>
   </div>
</div>
@endsection


@section('script')
@stop
