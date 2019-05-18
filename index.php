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
 <?php include 'admin/navbar.php'; ?> 
<body style="background-color: #FFF7F7">



  <div class="container" >


    <div class="row" style="background-color: #FFFEF0" >


      <?php include("conn.php"); ?>


      <?php include 'model.php'; ?>


      <!--Grid row-->
      <div class="col"></div>
      <!--Grid column-->



      <?php
      $regis = isset($_GET['register']);
      $learning = isset($_GET['learning']);

      $editprofs = isset($_GET['editprofs']);
      $editprof = isset($_GET['editprof']);
      $editpas = isset($_GET['editpas']);
      $sc = isset($_GET['sc']);
      $scl = isset($_GET['scl']);
      $wa = isset($_GET['wa']);
      $ch = isset($_GET['ch']);
      $aw = isset($_GET['aw']);


      if ($learning <> ''){
        include 'index1.php';
      }elseif ($regis <> ''){
        include 'register.php';
      }elseif ($editprofs <> ''){
        include 'editprofile_show.php';
      }elseif ($editprof <> ''){
        include 'editprofile.php';
      }elseif ($editpas <> ''){
        include 'edit_password.php';
      }elseif ($sc <> ''){
        include 'score.php';
      }elseif ($scl <> ''){
        include 'score_all.php';
      }elseif ($wa <> ''){
        include 'watch.php';
      }elseif ($ch <> ''){
        include 'choice.php';
      }elseif ($aw <> ''){
        include 'answer.php';
      }elseif ($regis <> ''){

      }else{ ?>

       <!-- Video -->
       <?php
       $cff = isset($_GET['cff']);
       $url = 'https://www.youtube.com/watch?v=aqDmiAhju78';
       preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
       $id = $matches[1];
       $width = '800px';
       $height = '450px';
       ?>
       <div class="embed-responsive embed-responsive-16by9 z-depth-1-half">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/<?php echo $id ?>" allowfullscreen></iframe>
      </div>
      <br><br><br>
    <?php }  ?>




    <!--Grid column-->


    <div class="col"></div>
  </div>
</div>

<!--Grid row-->




<!-- footer -->
<?php include 'footer.php'; ?>

<!-- SCRIPTS -->
<!-- JQuery -->
<script type="text/javascript" src="MDBcss/js/jquery-3.3.1.min.js"></script>
<!-- Bootstrap tooltips -->
<script type="text/javascript" src="MDBcss/js/popper.min.js"></script>
<!-- Bootstrap core JavaScript -->
<script type="text/javascript" src="MDBcss/js/bootstrap.min.js"></script>
<!-- MDB core JavaScript -->
<script type="text/javascript" src="MDBcss/js/mdb.min.js"></script>

  <script type="text/javascript">
    $(document).ready( function () {
      $('#dtBasicExample').DataTable({
        "oLanguage": {
          "sEmptyTable":     "ไม่มีข้อมูลในตาราง",
          "sInfo":           "แสดง _START_ ถึง _END_ จาก _TOTAL_ แถว",
          "sInfoEmpty":      "แสดง 0 ถึง 0 จาก 0 แถว",
          "sInfoFiltered":   "(กรองข้อมูล _MAX_ ทุกแถว)",
          "sInfoPostFix":    "",
          "sInfoThousands":  ",",
          "sLengthMenu":     "แสดง _MENU_ แถว",
          "sLoadingRecords": "กำลังโหลดข้อมูล...",
          "sProcessing":     "กำลังดำเนินการ...",
          "sSearch":         "ค้นหา: ",
          "sZeroRecords":    "ไม่พบข้อมูล",
          "oPaginate": {
            "sFirst":    "หน้าแรก",
            "sPrevious": "ก่อนหน้า",
            "sNext":     "ถัดไป",
            "sLast":     "หน้าสุดท้าย"
          },
          "oAria": {
            "sSortAscending":  ": เปิดใช้งานการเรียงข้อมูลจากน้อยไปมาก",
            "sSortDescending": ": เปิดใช้งานการเรียงข้อมูลจากมากไปน้อย"
          }
        }
      } );
    } );
    
  </script>

</body>

</html>