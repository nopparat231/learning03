
<?php 
$choice_id = $_GET['choice_id'];


$query_learning = "SELECT * FROM testing WHERE choice_id = '$choice_id' order by id desc " ;
$learning = mysqli_query($con,$query_learning) or die(mysqli_error());
$row_learning = mysqli_fetch_assoc($learning);
$totalRows_learning = mysqli_num_rows($learning);


?>


<div class="col-12">
 <div class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center" >คำถามทั้งหมด</h1>
      </div>
    </div>
  </div>
</div>


  <br>
  <?php include 'add_choice_sub.php'; ?>
  
  <a href="showchoice_sub.php" class="btn btn-outline-success my-2 my-sm-0"  data-toggle='modal' data-target='#addchoicesubModal'>เพิ่มคำถาม</a>
  <br><br>
  <table  id="dtBasicExample" class="table table-striped table-bordered" cellspacing="0" width="100%">
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
        <th scope="col" width="5">ยกเลิก</th>
      </tr>
    </thead>
    <tbody>

      <?php
      $i = 1 ;
      do { ?>

        <?php

        $query_learningc = "SELECT * FROM choice where choice_id = '$choice_id' and choice_id = ".$row_learning['choice_id'];
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

          
          <td><a href="edit_choice_sub.php?choice_id=<?php echo $choice_id; ?>&id=<?php echo $row_learning['id'];?>" class="btn btn-outline-warning my-2 my-sm-0" ><img src="../img/edit.png" width="20"></a></td>
          
          <?php if ($row_learning['status'] <> 1 ): ?>
            <td>
              <a href="del_choice_sub.php?choice_id=<?php echo $choice_id; ?>&id=<?php echo $row_learning['id'];?>&st=1" class="btn btn-outline-danger my-2 my-sm-0" onClick="return confirm('ยืนยันการยกเลิกคำถาม');"><img src="../img/delete.png" width="20"></a>
            </td>
            <?php else: ?>
             <td>
              <a href="del_choice_sub.php?choice_id=<?php echo $choice_id; ?>&id=<?php echo $row_learning['id'];?>&st=0" class="btn btn-outline-info my-2 my-sm-0" onClick="return confirm('ยืนยันการใช้งานคำถาม');"><i class="fas fa-redo"></i></a>
            </td>
          <?php endif ?>
        </tr>

        <?php 
        $i += 1;
      } while ($row_learning = mysqli_fetch_assoc($learning)); ?>

    </tbody>
  </table>
<?php }else {
  echo "<h3><br /> ยังไม่มีคำถาม </h3>";
}

mysqli_free_result($learning);?>



</div>
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12"></div>
    </div>
  </div>
</div>
</div>