
<?php 

$query_learning = "SELECT * FROM choice";
$learning = mysqli_query($con,$query_learning) or die(mysqli_error());
$row_learning = mysqli_fetch_assoc($learning);
$totalRows_learning = mysqli_num_rows($learning);




?>

<div class="col-md-9 bg-light">
 <div class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center" >หมวดหมู่ทั้งหมด</h1>
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

          <?php include 'add_choice.php'; ?>




          <a href="showchoice.php" class="btn btn-outline-success my-2 my-sm-0" data-toggle='modal' data-target='#addchoiceModal'>เพิ่มหมวดหมู่</a>
          <table class="display" id="example">
           <?php if ($totalRows_learning > 0) {?>

            <thead>
              <tr class="text-center">
                <th scope="col" width="5">ลำดับ</th>
                <th scope="col">ชื่อบทเรียน</th>
                <th scope="col">รายละเอียด</th>

                <th scope="col" width="5">แก้ไข</th>
                <th scope="col" width="5">ยกเลิก</th>
                <th scope="col" width="5">สื่อ</th>
                <th scope="col" width="5">แบบทดสอบ</th>
                <th scope="col" width="5">คะแนน</th>
              </tr>
            </thead>
            <tbody>

              <?php
              $i = 1 ;
              do { ?>


                <tr class="text-center">

                  <td><?php echo $i ?></td>
                  <td><?php echo $row_learning['choice_name']; ?></td>
                  <td><?php echo $row_learning['choice_detail']; ?></td>

                  <td>
                    <a href="edit_choice.php?choice_id=<?php echo $row_learning['choice_id'];?>" class="btn btn-outline-warning my-2 my-sm-0" ><i class="fa fa-pencil-square-o text-muted fa-mg"></i></a>
                  </td>

                  <td> <!-- รอยกเลิกหมวดหมู่ -->
                    <a href="#" class="btn btn-outline-danger my-2 my-sm-0" onClick="return alert('ยังไม่ทำระบบ');"><i class="fa fa-window-close-o text-muted fa-mg"></i></a>
                  </td>

                  <td><a href="#" onClick="return alert('ยังไม่ทำระบบ');" class="btn btn-outline-warning my-2 my-sm-0" ><i class="fa fa-youtube-play text-muted fa-mg"></i></a></td>
                  <td><a href="index.php?showchoice_s" class="btn btn-outline-warning my-2 my-sm-0" ><i class="fa fa-file-text-o text-muted fa-mg"></i></a></td>
                  <td><a href="index.php?in" class="btn btn-outline-warning my-2 my-sm-0" ><i class="fa fa-list-ol text-muted fa-mg"></i></a></td>

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
</div>

