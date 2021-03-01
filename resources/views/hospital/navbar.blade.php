<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

  <style type="text/css">
    .bs-example {
      margin: 0px;

    }

    .navbar-brand {
      font-size: 20px;
      font-family: sans-serif;

    }
  </style>
</head>

<body>



  <div class="bs-example">
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background:#337AB7;">
      <a href="/" class="navbar-brand">Hospital Management</a>
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav">

          <a href="{{route('admin.login')}}" class="nav-item nav-link">Admin</a>
          <a href="/doctorclick" class="nav-item nav-link">Doctor</a>
          <a href="/patientclick" class="nav-item nav-link">Patient</a>


        </div>

        <div class="navbar-nav">
          <a href="/aboutus" class="nav-item nav-link">About Us</a>
          <a href="/contactus" class="nav-item nav-link">Contact Us</a>
        </div>

      </div>
    </nav>
  </div>

  <!--
  developed By : sumit kumar
  facebook : fb.com/sumit.luv
  youtube : youtube.com/lazycoders
  -->

</body>

</html>