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


  <div class="container mt-5">
    <div class="row">
      <div class="col-md-4">
        <img src="image/download (1).jpg" alt="#" class="card-img-top"/>
      </div>
      <div class="col-md-8">
        <div class="class-body">
          <h5 class="card-title">Course Name: #</h5><br>
          <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, quod?</p>
          <p class="card-text">Duration: #</p>
          <form action="" method="post">
            <p class="card-text d-inline">Price: <small><del>&#8377 2000</del></small> <span class="font-weight-bolder">&#8377 200</span></p>
            <button class="btn btn-primary text-white font-weight-bolder float-right" type="submit" name="buy">Buy Now</button>
          </form>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="row">
      <table class="table table-bordered table-hover">
        <thead>
          <tr>
            <th scope="col">Lesson NO.</th>
            <th scope="col">Lesson Name</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Indroduction</td>
          </tr>';
        </tbody>
      </table>';
    </div>
  </div>
   

<?php
  include('./mainInclude/footer.php');
?>