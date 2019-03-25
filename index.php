<?php
if(session_status() == PHP_SESSION_NONE){
    //session has not started
  session_start();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>สื่อการเรียนรู้</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="MDBcss/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="MDBcss/css/mdb.min.css" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="MDBcss/css/style.css" rel="stylesheet">
</head>

<body style="background-color: #FFF7F7">

 <div class="container">
  <div class="row">
    <div class="col-md-12">

     <?php include 'navbar.php'; ?>

     <?php include 'model.php'; ?>


     <!--Grid row-->
     <div class="row d-flex justify-content-center">

      <!--Grid column-->
      <div class="col-md-12">


       <?php
       $regis = isset($_GET['register']);
       $learning = isset($_GET['learning']);

       if ($learning <> ''): ?>

        <?php include 'index1.php'; ?>

        <?php elseif ($regis <> ''): ?>

          <?php include 'register.php'; ?>

          <?php else: ?>

            <!-- Video -->
            <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
              <iframe class="embed-responsive-item" src="https://www.youtube.com/watch?v=EErY75MXYXI" allowfullscreen></iframe>
            </div>

          <?php endif ?>

        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->
      <?php
      if ($learning <> ''): ?>
        <div class="container">
          <div class="row">
            <style>
              .footer {
               position: fixed;
               bottom: 0;
               width: 83%;
               color: white;
               text-align: center;
             }
           </style>
           <?php include 'footer.php'; ?>
         </div>
       </div>
       <?php else: ?>

        <!-- footer -->
        <footer class="page-footer font-small default-color" >

          <!-- Copyright -->
          <div class="footer-copyright text-center py-3 ">
            © 2019 Copyright: RMUTK 

          </div>
          <!-- Copyright -->

        </footer>
      <?php endif ?>

    </div>
  </div>
</div>

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="MDBcss/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="MDBcss/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="MDBcss/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="MDBcss/js/mdb.min.js"></script>
</body>

</html>