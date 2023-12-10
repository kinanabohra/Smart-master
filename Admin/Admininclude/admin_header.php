<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Admin Dashboard</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css" />

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="../css/all.min.css" />

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Ubuntu"
      rel="stylesheet"
    />

    <!-- Custom CSS -->
    <link rel="stylesheet" href="admin_dashboard_style.css" />
  </head>

  <body>
    <!-- Top Navbar -->
    <nav
      class="navbar navbar-dark fixed-top p-0 shadow"
      style="background-color: #225470"
    >
      <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="admin_dashboard.php"
        >Smart Master <small class="text-white">Admin Dashboard</small></a
      >
    </nav>

    <!-- Side Bar -->
    <div class="container-fluid mb-5" style="margin-top: 40px">
      <div class="row">
        <nav class="col-sm-3 col-md-2 bg-light sidebar py-5 d-print-none">
          <div class="sidebar-sticky">
            <ul class="nav flex-column">
              <li class="nav-item">
                <a class="nav-link" href="admin_dashboard.php">
                <i class="fa-solid fa-chart-bar"></i> Dashboard
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_courses.php">
                  <i class="fa-solid fa-book"></i> Courses
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_lessons.php">
                  <i class="fa-solid fa-person-chalkboard"></i> Lessons
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_students.php">
                  <i class="fas fa-users"></i> Students
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sellReport.php">
                <i class="fa-solid fa-file-invoice-dollar"></i> Sell Report
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="adminPaymentStatus.php">
                <i class="fa-solid fa-credit-card"></i> Payment Status
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="feedback.php">
                <i class="fa-solid fa-thumbs-up"></i> Feedback
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="admin_changePassword.php">
                  <i class="fas fa-key"></i> Change Password
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="../logout.php">
                  <i class="fas fa-sign-out-alt"></i> Logout
                </a>
              </li>
            </ul>
          </div>
        </nav>
