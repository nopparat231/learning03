
<?php 

$query_learning = "SELECT * FROM choice as c , user as u, user_learning as l where l.user_learning_status <> 1 and l.choice_id = c.choice_id and l.user_id = u.id ORDER BY convert(l.user_learning_af, UNSIGNED INTEGER) DESC" ;
$learning = mysqli_query($con,$query_learning) or die(mysqli_error());
$row_learning = mysqli_fetch_assoc($learning);
$totalRows_learning = mysqli_num_rows($learning);


?>
<div class="col-12">
 <div class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center">คะแนนผู้ใช้งานทั้งหมด</h1>
        <hr>
      </div>
    </div>
  </div>
</div>

<div class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

        <table id="dtBasicExample" class="table table-striped table-borderless">
         <?php if ($totalRows_learning > 0) {?>

          <thead>
            <tr class="text-center">
              <th scope="col">ลำดับ</th>
              <th scope="col">ชื่อ</th>
              <th scope="col">นามสกุล</th>
              <th scope="col">บทเรียน</th>
              <th scope="col">คะแนนก่อนเรียน</th>
              <th scope="col">คะแนนหลังเรียน</th>
              <th scope="col">ผลการเปรียบเทียบคะแนน</th>
            </tr>
          </thead>
          <tbody>

            <?php
            $i = 1 ;
            do { ?>


              <tr class="text-center">
                <td><?php echo $i ?></td>
                <td><?php echo $row_learning['Firstname']; ?></td>
                <td><?php echo $row_learning['Lastname']; ?></td>
                <td><?php echo $row_learning['choice_name']; ?></td>
                <td><?php echo $row_learning['user_learning_bf']; ?></td>
                <td><?php echo $row_learning['user_learning_af']; ?></td>
                <td><?php 
                if($row_learning['user_learning_bf'] > $row_learning['user_learning_af']){
                  if (is_numeric($row_learning['user_learning_af'])) {
                   echo "แย่ลง";
                 }else{
                  echo "";
                }

              }else{
               if (is_numeric($row_learning['user_learning_af'])) {
                 echo "ดีขึ้น";
               }else{
                echo "";
              }
            } ?></td>
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