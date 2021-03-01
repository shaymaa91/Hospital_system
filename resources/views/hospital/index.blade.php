@extends('hospital/homebase')







<head>
  <style media="screen">
    .jumbotron {
      margin-top: 0px;
      margin-bottom: 0px;
      background-image:  url({{URL('http://127.0.0.1:8000/admin/Home-Page')}}/public/static/images/bg.jpg);
      background-size: cover;
      background-repeat: no-repeat;
    }

    .jumbotron h5,
    h3 {
      text-align: center;
    }


    .alert {
      margin: 0px;
    }



    .glow {
      font-size: 50px;
      color: white;
      text-align: center;
      -webkit-animation: glow 1s ease-in-out infinite alternate;
      -moz-animation: glow 1s ease-in-out infinite alternate;
      animation: glow 1s ease-in-out infinite alternate;
    }

    @-webkit-keyframes glow {
      from {
        text-shadow: 0 0 10px #eeeeee, 0 0 20px #000000, 0 0 30px #000000, 0 0 40px #000000, 0 0 50px #9554b3, 0 0 60px #9554b3, 0 0 70px #9554b3;
      }

      to {
        text-shadow: 0 0 20px #eeeeee, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
      }
    }
  </style>
</head>
<br>
<br>

<div class="jumbotron" style="margin-bottom: 0px;margin-top: 0px;background-image: url('{{ asset('static/images/bg.jpg')}}');">
  <br>

  <h5 class="display-3 glow">You’ll Love the Way We Care for You</h5>
  
  <br><br><br><br><br>
  <p>
  <h3>Emergency ?</h3>

  <p class="lead">
    <a class="btn btn-primary btn-lg" href="/patientclick" role="button">Take Appointment</a>
  </p>
  <br><br>
</div>

<br><br><br><br>

@include("hospital/admin-doctor-patient-cards")
<br><br><br>
<!--
developed By : sumit kumar
facebook : fb.com/sumit.luv
youtube : youtube.com/lazycoders
-->


