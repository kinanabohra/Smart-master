<?php
include('./mainInclude/header.php');
?>



  <div class="container-fluid bg-dark">
    <div class="row">
        <div class="image-container" style="position: relative; max-width: 100%; overflow: hidden;">
            <img src="./image/course_banner.jpg" alt="courses" style="max-height: 550px; width: 100%; object-fit: cover;">
            <div style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: #333; opacity: 0.5;"></div>
            <div style="position: absolute; bottom: 0; left: 0; width: 100%; height: 3.5px; background-color: #333;"></div>
        </div>
    </div>
  </div>

  <div class="container my-5">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <h2 class="text-center mb-4">Payment Status</h2>
            <form method="post" action="" class="text-center">
                <div class="form-group row justify-content-center">
                    <label for="orderID" class="col-sm-2 col-form-label">Order ID:</label>
                    <div class="col-sm-7">
                        <input type="text" class="form-control" id="orderID">
                    </div>
                    <div class="col-sm-1">
                        <button type="submit" class="btn btn-primary">View</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
  </div>
   
  <?php
    include('./contact.php');
  ?>
   

<?php
  include('./mainInclude/footer.php');
?>