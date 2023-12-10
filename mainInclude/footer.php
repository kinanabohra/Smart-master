<footer class="container-fluid text-white p-2" style="background-color: #25274D;">
    <div class="container">
        <div class="row">
            <div class="col-12 text-center">
                <p class="mb-0">
                    &copy; 2023 Smart Master. All rights reserved. | Designed by Smart Master | <a href="#login" class="text-white" data-bs-toggle="modal" data-bs-target="#adminLoginModalCenter">Admin Login</a>
                </p>
            </div>
        </div>
    </div>
</footer>



  
  <!-- student registration -->
  <div class="modal fade" id="stuRegModalCenter" tabindex="-1" aria-labelledby="stuRegModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="stuRegModalCenterLabel">Student Registration</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="stuRegForm">
            <div class="form-group">
              <i class="fa fa-user"></i>
              <label for="student_name" class="pl-2 font-weight-bold">Name</label>
              <small id="status_msg1"></small>
              <input type="text" class="form-control" placeholder="Name" name="student_name" id="student_name">
            </div>
            <div class="form-group">
              <i class="fa fa-envelope"></i>
              <label for="student_mail" class="pl-2 font-weight-bold">Email</label>
              <small id="status_msg2"></small>
              <input type="email" class="form-control" placeholder="Email" name="student_mail" id="student_mail">
              <small class="form-text">we'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
              <i class="fa fa-key"></i>
              <label for="student_password" class="pl-2 font-weight-bold">Set Password</label>
              <small id="status_msg3"></small>
              <input type="password" class="form-control" placeholder="Password" name="student_password" id="student_password">
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <span id="success_msg"></span>
          <button type="button" class="btn btn-primary" onclick="addstu()" id="signup">Sign Up</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="clearstuRegForm()">Close</button>
        </div>
      </div>
    </div>
  </div>
  <!-- student registration -->


  
  <!-- student login -->
  <div class="modal fade" id="stuLoginModalCenter" tabindex="-1" aria-labelledby="stuLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="stuLoginModalCenterLabel">Student Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="stuLoginForm">
            <div class="form-group">
              <i class="fa fa-envelope"></i>
              <label for="student_log_mail" class="pl-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" placeholder="Email" name="student_log_mail" id="student_log_mail">
            </div>
            <div class="form-group">
              <i class="fa fa-key"></i>
              <label for="student_log_password" class="pl-2 font-weight-bold">Password</label>
              <input type="password" class="form-control" placeholder="Password" name="student_log_password" id="student_log_password">
            </div>
          </form>
        </div>
        <div class="modal-footer">
        <small id="status_log_msg"></small>
          <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="check_Student_Login()">Login</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="clearstuloginForm()">Cancel</button>
        </div>
      </div>
    </div>
  </div>
  <!-- student login -->



  <!-- Admin login -->
  <div class="modal fade" id="adminLoginModalCenter" tabindex="-1" aria-labelledby="adminLoginModalCenterLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="adminLoginModalCenterLabel">Admin Login</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form id="adminLoginForm">
            <div class="form-group">
              <i class="fa fa-envelope"></i>
              <label for="admin_log_mail" class="pl-2 font-weight-bold">Email</label>
              <input type="email" class="form-control" placeholder="Email" name="admin_log_mail" id="admin_log_mail">  
            </div>
            <div class="form-group">
              <i class="fa fa-key"></i>
              <label for="admin_log_password" class="pl-2 font-weight-bold">Password</label>
              <input type="password" class="form-control" placeholder="Password" name="admin_log_password" id="admin_log_password">
            </div>
          </form>
        </div>
        <div class="modal-footer">
        <small id="status_admin_msg"></small>
          <button type="button" class="btn btn-primary" id="adminLoginBtn" onclick="check_Admin_Login()">Login</button>
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal" onclick="clearadminloginForm()">Cancel</button>
        </div>
       </div>
    </div>
  </div>
  <!-- Admin login -->

  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
  <script>const swiper = new Swiper('.js-testimonials-slider', {grabCursor: true, spaceBetween:30,pagination:{el: '.js-testimonials-pagination',clickable: true},breakpoints:{767:{slidesPerView:4} }});</script>
     
  <script>
    // JavaScript code to determine the active page and apply the 'active' class
    var currentPage = window.location.href;
    var links = document.querySelectorAll(".custom-nav-item a");

    for (var i = 0; i < links.length; i++) {
        if (links[i].href === currentPage) {
            links[i].classList.add("active");
        }
    }
  </script> 
  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/all.min.js"></script>
  <script type="text/javascript" src="Student/stu_reg_ajaxrequest.js"></script>
  <script type="text/javascript" src="Student/stu_login_ajaxrequest.js"></script>
  <script type="text/javascript" src="Admin/admin_login_ajaxrequest.js"></script>

  
  
  
</body>
</html>