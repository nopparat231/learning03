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

<style>
  /* The container */
  .container {
    display: block;
    position: relative;
    padding-left: 35px;
    margin-bottom: 12px;
    cursor: pointer;
    font-size: 15px;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
  }

  /* Hide the browser's default radio button */
  .container input {
    position: absolute;
    opacity: 0;
    cursor: pointer;
  }

  /* Create a custom radio button */
  .checkmark {
    position: absolute;
    top: 0;
    left: 0;
    height: 25px;
    width: 25px;
    background-color: #eee;
    border-radius: 50%;
  }

  /* On mouse-over, add a grey background color */
  .container:hover input ~ .checkmark {
    background-color: #E5DBFF;
  }

  /* When the radio button is checked, add a blue background */
  .container input:checked ~ .checkmark {
    background-color: #AD8CFF;
  }

  /* Create the indicator (the dot/circle - hidden when not checked) */
  .checkmark:after {
    content: "";
    position: absolute;
    display: none;
  }

  /* Show the indicator (dot/circle) when checked */
  .container input:checked ~ .checkmark:after {
    display: block;
  }

  /* Style the indicator (dot/circle) */
  .container .checkmark:after {
    top: 9px;
    left: 9px;
    width: 8px;
    height: 8px;
    border-radius: 50%;
    background: white;
  }
</style>


</head>

<?php include 'conn.php'; ?>
<?php 

$choice_id = $_GET['choice_id'];
$user_id = $_GET['user_id'];

$sql="SELECT * From testing WHERE choice_id = $choice_id order by rand() limit 21";
$db_query=mysqli_query($con,$sql) or die(mysqli_error());
$result=mysqli_fetch_array($db_query);

$sqln="SELECT * From choice WHERE choice_id = $choice_id ";
$db_queryN=mysqli_query($con,$sqln) or die(mysqli_error());
$resultN=mysqli_fetch_array($db_queryN);


?>

<body style="background-color: #FFF7F7">

  <div  class="container" >
     <?php include 'navbar.php'; ?>
<div class="col-md-12" style="background-color: #FFFEF0">
  
   


   

     <div class="py-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12" >
            <h1 class="text-center">
              <b>

                <?php if (isset($_GET['bff'])){ ?>
                  แบบทดสอบก่อนเรียน <?php echo $resultN['choice_name']; ?>
                <?php }elseif(isset($_GET['aff'])){ ?>
                  แบบทดสอบหลังเรียน <?php echo $resultN['choice_name']; ?>
                <?php }elseif (isset($_GET['af'])) { ?>
                  เฉลยแบบทดสอบ <?php echo $resultN['choice_name']; ?>
                <?php } ?>
                <hr>
              </b>
            </h1>
          </div>
        </div>
      </div>
    </div>
    <form name="form1" method="get" action="">
      <div class="py-3" style="">
        <div class="container">
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-10">
              <?php 

              if (isset($_GET['af'])) {
                include 'answer.php';
              }else{

               ?>
               <?php

               $i=0;
               while($result=mysqli_fetch_array($db_query))
               {
                $i++;


                $re = $result['answer'];
                $arran = "answer[$re]";

                ?>
                <input name="id" type="hidden" value="<?php echo $result['id']; ?>">
                <input name="id<?php echo $i;?>" type="hidden" value="<?php echo $result['id']; ?>">
                <h3><?php echo $i." ).   ".$result["question"];?></h3>
                <input type="hidden" name="line" value="<?=$i;?>">

                <ol>

                  <label class="container"><h5><?php echo $result["c1"];?>
                  <input type="radio" class="form-check-input" id="radiobtn" name="c<?php echo $i;?>" value="1" required >
                  <span class="checkmark"></span></h5>
                </label>

                <label class="container"><h5><?php echo $result["c2"];?>
                <input type="radio" class="form-check-input" id="radiobtn" name="c<?php echo $i;?>" value="2">
                <span class="checkmark"></span></h5>
              </label>

              <label class="container"><h5><?php echo $result["c3"];?>
              <input type="radio" class="form-check-input" id="radiobtn" name="c<?php echo $i;?>" value="3">
              <span class="checkmark"></span></h5>

            </label>
            <label class="container"><h5><?php echo $result["c4"];?>
            <input type="radio" class="form-check-input" id="radiobtn" name="c<?php echo $i;?>" value="4">
            <span class="checkmark"></span></h5>
          </label>

          <input name="answer<?php echo $i;?>" type="hidden" value="<?php echo $result['answer'];?>">
        </ol>


        <hr>

      <?php } ?>
    <?php   } ?>
  </div>
</div>
</div>
</div>


<input type="hidden" name="choice_id" value="<?php echo $choice_id ?>">

<input type="hidden" name="user_id" value="<?php echo $user_id ?>">


<?php if (isset($_GET['aff'])){ ?>
  <input type="hidden" name="af" value="af" />
<?php }elseif(isset($_GET['bff'])){ ?>
 <input type="hidden" name="bf" value="bf" />
<?php } ?>


<div class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <?php if (isset($_GET['af'])) { ?>
         <a href="score.php?user_id=<?php echo $user_id ?>" class="btn btn-secondary" type="button" >ดูคะแนนรวม</a>
       <?php }else{ ?>
        <button class="btn btn-secondary" type="submit" >ส่งคำตอบ</button>
      <?php   } ?>


    </div>
  </div>
</div>
</form>
<?php if (isset($_GET['bf'])) {
  bf();
}elseif (isset($_GET['af'])) {

  af();
} ?>

<!-- คำนวนคะแนนก่อนเรียน -->
<?php

function bf(){

  $choice_id = $_GET['choice_id'];
  $user_id = $_GET['user_id'];

  $score =0;


  $line = $_GET['line']+1;
  for ($i=1; $i < $line; $i++) { 


    if($_GET["c$i"] == $_GET["answer$i"])
    {
      $score=$score+1;
    }
  }
  include 'conn.php';

  $user_learning_af = 'ยังไม่ทำ';
  $sql1 = "INSERT INTO user_learning VALUES(null, '$choice_id', '$user_id', '$score','$user_learning_af')";

  $result1 = mysqli_query($con, $sql1) or die ("Error in query: $sql1 " . mysqli_error());

//ปิดการเชื่อมต่อ database
  mysqli_close($con);
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
  ?>

  <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

  <script type="text/javascript">

    var $ws = 'watch.php?choice_id=<?php echo $choice_id ?>&user_id=<?php echo $user_id ?>';

    setTimeout(function () { 
      swal({
        title: "คะแนนก่อนเรียน <?php echo $score ?> คะแนน",

        type: "success",

        confirmButtonText: "รับชมสื่อการเรียนรู้"
      },
      function(isConfirm){
        if (isConfirm) {
          window.location.href = $ws;
        }
      }); }, 50);

    </script>
  <?php } ?>


  <!-- คำนวนคะแนนหลังเรียน -->
  <?php

  function af(){

    $choice_id = $_GET['choice_id'];
    $user_id = $_GET['user_id'];
    $user_learning_af = $_GET['af'];
    $score =0;


    $line = $_GET['line']+1;
    for ($i=1; $i < $line; $i++) { 


      if($_GET["c$i"] == $_GET["answer$i"])
      {
        $score=$score+1;
      }
    }
    include 'conn.php';

    $sql2 = "UPDATE user_learning SET user_learning_af = $score WHERE user_id = $user_id AND choice_id = $choice_id ";

    $result2 = mysqli_query($con, $sql2) or die ("Error in query: $sql2 " . mysqli_error());

//ปิดการเชื่อมต่อ database
    mysqli_close($con);
//จาวาสคริปแสดงข้อความเมื่อบันทึกเสร็จและกระโดดกลับไปหน้าฟอร์ม
    ?>

    <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert-dev.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css">

    <script type="text/javascript">

      var $ws = '#';

      setTimeout(function () { 
        swal({
          title: "คะแนนหลังเรียน <?php echo $score ?> คะแนน",

          type: "success",

          confirmButtonText: "ดูเฉลย"
        },
        function(isConfirm){
          if (isConfirm) {
            window.location.href = $ws;
          }
        }); }, 50);

      </script>
    <?php } ?>


  </div>
  <?php include 'footer.php'; ?>
  </div>

</body>

</html>