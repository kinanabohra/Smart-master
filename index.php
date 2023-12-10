<?php
include('./mainInclude/header.php');
?>  



  <div class="container-fluid remove-vid-margin">
      <div class="vid-parent">
          <video playsinline autoplay muted loop>
            <source src="video/index_vid.mp4">
          </video>
          <div class="vid-overlay"></div>
          <div class="vid-content"> 
            <h1 class="my-content">Welcome to Smart Master</h1>
            <small class="my-content">Your Path to Mastery</small><br>
            <?php
                    if(!isset($_SESSION['is_login'])){
                      echo '
                      <a href="#" class="btn btn-teal" data-bs-toggle="modal" data-bs-target="#stuRegModalCenter">Get Started</a>';
                    }
                    else{
                      echo '
                      <a href="#" class="btn btn-primary">My Profile</a>';
                    }
            ?>
          </div>
      </div>
  </div>
  
  
  
  <div class="container-fluid txt-banner" style="background-color: #1F4A9F;">
    <div class="row bottom-banner">
      <div class="col-sm"><h5><i class="fas fa-book-open mr-3"></i> 100+ Online Courses</h5></div>
      <div class="col-sm"><h5><i class="fas fa-users mr-3"></i> Expert Instruction</h5></div>
      <div class="col-sm"><h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5></div>
      <div class="col-sm"><h5><i class="fa-solid fa-indian-rupee-sign"></i>  Money Back Guarantee*</h5></div>
    </div>
  </div>
  
  
  <div class="container-fluid p4" style="background-color: #E9ECEF; padding:20px;">
    <div class="container mt-5">
      <h1 class="text-center">Popular Courses</h1>
    
      <div class="card-deck mt-4">
        <div class="card-deck d-flex flex-nowrap mt-4">
  
          <a href="#" class="btn" style="text-align: left; padding:0px; margin:10px">
            <div class="card">
              <img src="image/download.jpg" class="card image top" alt="#">
              <div class="card body">
                <h5 class="card-title">title 1</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, eos.</p>
              </div>
              <div class="class-footer">
                <p class="card-text d-inline">Price:
                 <small><del>&#8377 2000</del></small>
                 <span class="font-weight-bolder">&#8377 200</span>
                 <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                </p>
              </div>
            </div>
          </a>
  
          <a href="#" class="btn" style="text-align: left; padding:0px; margin:10px">
            <div class="card">
              <img src="image/download.jpg" class="card image top" alt="#">
              <div class="card body">
                <h5 class="card-title">title 1</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, eos.</p>
              </div>
              <div class="class-footer">
                <p class="card-text d-inline">Price:
                 <small><del>&#8377 2000</del></small>
                 <span class="font-weight-bolder">&#8377 200</span>
                 <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                </p>
              </div>
            </div>
          </a>
  
          <a href="#" class="btn" style="text-align: left; padding:0px; margin:10px">
            <div class="card">
              <img src="image/download.jpg" class="card image top" alt="#">
              <div class="card body">
                <h5 class="card-title">title 1</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, eos.</p>
              </div>
              <div class="class-footer">
                <p class="card-text d-inline">Price:
                 <small><del>&#8377 2000</del></small>
                 <span class="font-weight-bolder">&#8377 200</span>
                 <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                </p>
              </div>
            </div>
          </a>
          
        </div>
      </div>
    
    
      <div class="card-deck mt-4">
        <div class="card-deck d-flex flex-nowrap mt-4">
  
          <a href="#" class="btn" style="text-align: left; padding:0px; margin:10px">
            <div class="card">
              <img src="image/download.jpg" class="card image top" alt="#">
              <div class="card body">
                <h5 class="card-title">title 1</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, eos.</p>
              </div>
              <div class="class-footer">
                <p class="card-text d-inline">Price:
                 <small><del>&#8377 2000</del></small>
                 <span class="font-weight-bolder">&#8377 200</span>
                 <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                </p>
              </div>
            </div>
          </a>
          
          <a href="#" class="btn" style="text-align: left; padding:0px; margin:10px">
            <div class="card">
              <img src="image/download.jpg" class="card image top" alt="#">
              <div class="card body">
                <h5 class="card-title">title 1</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, eos.</p>
              </div>
              <div class="class-footer">
                <p class="card-text d-inline">Price:
                 <small><del>&#8377 2000</del></small>
                 <span class="font-weight-bolder">&#8377 200</span>
                 <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                </p>
              </div>
            </div>
          </a>
  
          <a href="#" class="btn" style="text-align: left; padding:0px; margin:10px">
            <div class="card">
              <img src="image/download.jpg" class="card image top" alt="#">
              <div class="card body">
                <h5 class="card-title">title 1</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi, eos.</p>
              </div>
              <div class="class-footer">
                <p class="card-text d-inline">Price:
                 <small><del>&#8377 2000</del></small>
                 <span class="font-weight-bolder">&#8377 200</span>
                 <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Enroll</a>
                </p>
              </div>
            </div>
          </a>
          
        </div>
      </div>
      <br />
      <div class=" text-center m-2">
        <a class=" btn btn-teal btn sm" href="courses.php">View All Courses</a>
      </div>
  
    </div>
  </div>



  <?php
  include('./contact.php');
  ?>
  


  <div class="testimonials-section">
    <section class="testimonials" >
      <div class="container">
        <div class="section-header">
          <h2 class="title">student review</h2>
        </div>
        <div class="testimonials-content">
          <div class="swiper testimonials-slider js-testimonials-slider">
            <div class="swiper-wrapper">
    
              <div class="swiper-slide testimonials-item">
                <div class="info">
                  <img src="image/tm3.jpg" alt="#">
                  <div class="text-box">
                    <h3 class="name">Sourav</h3>
                    <span class="job">Student</span>
                  </div>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, eligendi.</p>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>

              <div class="swiper-slide testimonials-item">
                <div class="info">
                  <img src="image/download2.jpg" alt="#">
                  <div class="text-box">
                    <h3 class="name">Rohan</h3>
                    <span class="job">Freelancer</span>
                  </div>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, eligendi.</p>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>

              <div class="swiper-slide testimonials-item">
                <div class="info">
                  <img src="image/tm3.jpg" alt="#">
                  <div class="text-box">
                    <h3 class="name">Sourav</h3>
                    <span class="job">Student</span>
                  </div>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, eligendi.</p>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>

              <div class="swiper-slide testimonials-item">
                <div class="info">
                  <img src="image/download2.jpg" alt="#">
                  <div class="text-box">
                    <h3 class="name">Rohan</h3>
                    <span class="job">Freelancer</span>
                  </div>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, eligendi.</p>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>

              <div class="swiper-slide testimonials-item">
                <div class="info">
                  <img src="image/tm3.jpg" alt="#">
                  <div class="text-box">
                    <h3 class="name">Sourav</h3>
                    <span class="job">Student</span>
                  </div>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, eligendi.</p>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>

              <div class="swiper-slide testimonials-item">
                <div class="info">
                  <img src="image/download2.jpg" alt="#">
                  <div class="text-box">
                    <h3 class="name">Rohan</h3>
                    <span class="job">Freelancer</span>
                  </div>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, eligendi.</p>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>

              <div class="swiper-slide testimonials-item">
                <div class="info">
                  <img src="image/tm3.jpg" alt="#">
                  <div class="text-box">
                    <h3 class="name">Sourav</h3>
                    <span class="job">Student</span>
                  </div>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, eligendi.</p>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>

              <div class="swiper-slide testimonials-item">
                <div class="info">
                  <img src="image/download2.jpg" alt="#">
                  <div class="text-box">
                    <h3 class="name">Rohan</h3>
                    <span class="job">Freelancer</span>
                  </div>
                </div>
                <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. At, eligendi.</p>
                <div class="rating">
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                  <i class="fa fa-star"></i>
                </div>
              </div>

            </div>
          </div>
          <div class="swiper-pagination js-testimonials-pagination"></div>
        </div>
      </div>
    </section>
  </div>

  <div class="container-fluid p4" style="background-color: #E9ECEF; padding:20px;">
    <div class="container" style="background-color: #E9ECEF;">
      <div class="row text-center">
        <div class="col-sm">
          <h5>About us</h5>
          <p>Lorem ipsum dolor sit amet consectetur 
             adipisicing elit.
             Quibusdam, commodi!
          </p>
        </div>
        <div class="col-sm">
          <h5>Category</h5>
          <a href="#" class="text-dark">web development</a><br />
          <a href="#" class="text-dark">app development</a><br />
          <a href="#" class="text-dark">full stack development</a><br />
          <a href="#" class="text-dark">frontend development</a><br />
        </div>
        <div class="col-sm">
          <h5>Contact Us</h5>
          <p>Smart Master <br> piet, sitapura <br>jaipur, rajastjan <br>ph. 8529482153</p>
        </div>
      </div>
    </div>
  </div>



<?php
include('./mainInclude/footer.php');
?>