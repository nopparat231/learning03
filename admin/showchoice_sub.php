<?php session_start();?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" type="text/css">
  <link rel="stylesheet" href="https://static.pingendo.com/bootstrap/bootstrap-4.1.3.css">
</head>
<?php include 'navbar.php'; ?>
<?php include 'datatables.php'; ?>
<?php include '../conn.php'; ?>
<?php 



$query_learning = "SELECT * FROM testing order by choice_id asc " ;
$learning = mysqli_query($con,$query_learning) or die(mysqli_error());
$row_learning = mysqli_fetch_assoc($learning);
$totalRows_learning = mysqli_num_rows($learning);


?>


<body>

 <div class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center" >คำถามทั้งหมด</h1>
      </div>
    </div>
  </div>
</div>

<div class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="table-responsive text-center">
          <br>
          <?php include 'add_choice_sub.php'; ?>
          
          <a href="showchoice_sub.php" class="btn btn-outline-success my-2 my-sm-0"  data-toggle='modal' data-target='#addchoicesubModal'>เพิ่มคำถาม</a>
          <table class="display" id="example">
           <?php if ($totalRows_learning > 0) {?>

            <thead>
              <tr class="text-center">
                <th scope="col" width="5">ลำดับ</th>
                <th scope="col">หมวดหมู่</th>
                <th scope="col">คำถาม</th>
                <th scope="col">ตัวเลือกที่1</th>
                <th scope="col">ตัวเลือกที่2</th>
                <th scope="col">ตัวเลือกที่3</th>
                <th scope="col">ตัวเลือกที่4</th>
                <th scope="col">คำตอบ</th>
                
                <th scope="col" width="5">แก้ไข</th>
                <th scope="col" width="5">ลบ</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $i = 1 ;
              do { ?>

                <?php

                $query_learningc = "SELECT * FROM choice where choice_id = ".$row_learning['choice_id'];
                $learningc = mysqli_query($con,$query_learningc) or die(mysqli_error());
                $row_learningc = mysqli_fetch_assoc($learningc);
                $totalRows_learningc = mysqli_num_rows($learningc);

                ?>
                <tr class="text-center">
                  <td><?php echo $i ?></td>
                  <td><?php echo $row_learningc['choice_name']; ?></td>
                  <td><?php echo $row_learning['question']; ?></td>
                  <td><?php echo $row_learning['c1']; ?></td>
                  <td><?php echo $row_learning['c2']; ?></td>
                  <td><?php echo $row_learning['c3']; ?></td>
                  <td><?php echo $row_learning['c4']; ?></td>
                  <td><?php echo $row_learning['answer']; ?></td>

                  
                  <td><a href="edit_choice_sub.php?id=<?php echo $row_learning['id'];?>" class="btn btn-outline-warning my-2 my-sm-0" >แก้ไข</a></td>
                  
                  <td><a href="del_choice_sub.php?id=<?php echo $row_learning['id'];?>" class="btn btn-outline-danger my-2 my-sm-0" onClick="return confirm('ยืนยันการลบคำถาม');">ลบ</a></td>
                </tr>

                <?php 
                $i += 1;
              } while ($row_learning = mysqli_fetch_assoc($learning)); ?>

            </tbody>
          </table>
        <?php }else {
          echo "<h3> ยังไม่มีคะแนน </h3>";
        }

        mysqli_free_result($learning);?>

      </div>
    </div>
  </div>
</div>
</div>
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12"></div>
    </div>
  </div>
</div>
<?php include 'footer_admin.php'; ?>


</body>

</html>