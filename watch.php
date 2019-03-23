<?php session_start();?>
<html>

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


<?php include 'conn.php'; ?>
<?php 
$choice_id = $_GET['choice_id'];
$user_id = $_GET['user_id'];

$query_watch = "SELECT * FROM choice where choice_id = $choice_id ";
$watch = mysqli_query($con,$query_watch) or die(mysqli_error());
$row_watch = mysqli_fetch_assoc($watch);
$totalRows_watch = mysqli_num_rows($watch);
?>




<body style="background-color: #FFF7F7">
 <div class="container">

  <?php include 'navbar.php'; ?>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="background-color: #FFFEF0">
          <h1 class="text-center"><b><?php echo $row_watch['choice_name']; ?></b></h1>
        </div>
      </div>
    </div>
  </div>
  <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="embed-responsive embed-responsive-16by9">

            <?php if ($totalRows_watch > 0) {?>

              <?php
              $url = $row_watch['video'];
              preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
              $id = $matches[1];
              $width = '800px';
              $height = '450px';
              ?>

              <iframe id="existing-iframe-example" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
                src="https://www.youtube.com/embed/<?php echo $id ?>?enablejsapi=1&autoplay=0&amp;controls=0&amp;rel=0&amp;fs=0&amp;enablejsapi=1" frameborder="0" style="border: solid 4px #37474F">

              </iframe> 



            <?php } ?>

          </div>
        </div>
      </div>
    </div>
  </div>
  <?php
  $cff = isset($_GET['cff']);
  if ($cff <> '') { ?>
   <div class="py-2">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <a class="btn btn-secondary" href="choice.php?choice_id=<?php echo $row_watch['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&aff=aff">ทำแบบทดสอบหลังเรียน</a></div>
        </div>
      </div>
    </div>
  <?php }else{ ?>
    <div class="py-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <a class="btn btn-secondary" id="npbutton" style="display: none;" href="choice.php?choice_id=<?php echo $row_watch['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&aff=aff">ทำแบบทดสอบหลังเรียน</a></div>
          </div>
        </div>
      </div>
    <?php } ?>
    <!-- footer -->
    <footer class="page-footer font-small default-color" >

      <!-- Copyright -->
      <div class="footer-copyright text-center py-3 ">
        © 2019 Copyright: RMUTK 

      </div>
      <!-- Copyright -->

    </footer>
  </div>
</body>

</html>
<script type="text/javascript">
  var tag = document.createElement('script');
  tag.id = 'iframe-demo';
  tag.src = 'https://www.youtube.com/iframe_api';
  var firstScriptTag = document.getElementsByTagName('script')[0];
  firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

  var player;
  function onYouTubeIframeAPIReady() {
    player = new YT.Player('existing-iframe-example', {
      height: '630',
      width: '1160',
      playerVars: { 
       'autoplay': 0,
       'controls': 0, 
       'rel' : 0,
       'fs' : 0,
     },
     events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    }
  });
  }
  function onPlayerReady(event) {
    document.getElementById('existing-iframe-example').style.borderColor = '#FF6D00';
  }
  function changeBorderColor(playerStatus) {
    var color;
    if (playerStatus == -1) {
      document.getElementById("npbutton").style.display = "none";// unstarted = gray
    } else if (playerStatus == 0) {
      document.getElementById("npbutton").style.display = "block"; // ended = yellow
    } else if (playerStatus == 1) {
      color = "#33691E"; // playing = green
    } else if (playerStatus == 2) {
      color = "#DD2C00"; // paused = red
    } else if (playerStatus == 3) {
      color = "#AA00FF"; // buffering = purple
    } else if (playerStatus == 5) {
      color = "#FF6DOO"; // video cued = orange
    }
    if (color) {
      document.getElementById('existing-iframe-example').style.borderColor = color;
    }
  }
  function onPlayerStateChange(event) {
    changeBorderColor(event.data);
  }
</script>
