
<?php include 'conn.php'; ?>

<?php 


$query_choice = "SELECT * FROM choice ORDER BY choice_id";
$choice = mysqli_query($con,$query_choice) or die(mysqli_error());
$row_choice = mysqli_fetch_assoc($choice);
$totalRows_choice = mysqli_num_rows($choice);

$query_testing = "SELECT * FROM testing ";
$testing = mysqli_query($con,$query_testing) or die(mysqli_error());
$row_testing = mysqli_fetch_assoc($testing);
$totalRows_testing = mysqli_num_rows($testing);


?>
<div class="col-7">
  <div class="py-2">


    <h1 class="mb-3 text-center">สื่อการเรียนรู้</h1>
    <hr>
    <ul class="list-group list-group-flush text-center">
      <?php if ($totalRows_choice > 0) {?>
        <?php do { ?>

          <?php 
          $c =  $row_choice['choice_id']; 
          $user_id = $_SESSION['UserID'];
          $sql3="SELECT * From user_learning WHERE user_id = $user_id AND choice_id = $c";
          $db_query3=mysqli_query($con,$sql3) or die(mysqli_error());
          $result3=mysqli_fetch_array($db_query3);
          $totalRows_query3 = mysqli_num_rows($db_query3);

          ?>

          <?php if ($totalRows_query3 > 0){ ?>

            <?php if ($result3['user_learning_af'] == 'ยังไม่ทำ'){ ?>
             <li class="list-group">
              <h3>
<!-- บทสอง -->
                <a href="index.php?ch&choice_id=<?php echo $row_choice['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&aff=aff" class="list-group-item list-group-item-action list-group-item-info"><?php echo $row_choice['choice_name']; ?></a>
              </h3>
            </li>

          <?php }else{ ?>
            <li class="list-group">
              <h3>
<!-- ทำแล้ว -->
                <a href="index.php?wa&choice_id=<?php echo $row_choice['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&aff=aff&cff" class="list-group-item list-group-item-action list-group-item-danger"><?php echo $row_choice['choice_name']; ?></a>
              </h3>
            </li>

          <?php  } ?>


        <?php }else{?>

         <li class="list-group">
          <h3>
<!-- ยังไม่ทำ -->
            <a href="index.php?ch&choice_id=<?php echo $row_choice['choice_id'];?>&user_id=<?php echo $_SESSION['UserID'];?>&bff=bff" class="list-group-item list-group-item-action list-group-item-primary"><?php echo $row_choice['choice_name']; ?></a>
          </h3>
        </li>
      <?php } ?>

      <hr>

    <?php } while ($row_choice = mysqli_fetch_assoc($choice)); ?>
  <?php }
  mysqli_free_result($choice);
  ?>

</ul>
</div>
</div>

