                       

<?php 
date_default_timezone_set('Asia/Bangkok');

$user_id = $_REQUEST["user_id"];
$query_user = "SELECT * FROM user WHERE ID = '$user_id'";
$user = mysqli_query($con,$query_user) or die(mysqli_error());
$row_user = mysqli_fetch_assoc($user);
$totalRows_user = mysqli_num_rows($user);

?>  
<div class="col-7">
 <div class="py-2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h1 class="text-center"><b>แก้ไขข้อมูล</b></h1>
        <hr>
      </div>
    </div>
  </div>
</div>
<div class="py-3">

  <form class="" id="c_form-h" action="edit_user_db.php" method="post" >
    <div class="form-group row"><label class="col-2 col-form-label">ชื่อผู้ใช้<br></label>
      <div class="col-9">
        <?php echo $row_user['Username']; ?>

      </div>
    </div>

    <div class="form-group row"><label class="col-2">ชื่อ</label>
      <div class="col-9">
       <?php echo $row_user['Firstname']; ?>

     </div>
   </div>
   <div class="form-group row"><label class="col-2">นามสกุล</label>
    <div class="col-9">
      <?php echo $row_user['Lastname']; ?>
    </div>
  </div>
  <div class="form-group row"> <label for="inputmailh" class="col-2 col-form-label">อีเมล์</label>
    <div class="col-9">
      <?php echo $row_user['email']; ?>

    </div>
  </div>
  <div class="form-group row">
    <label class="col-2">เบอร์โทร<br></label>
    <div class="col-9">
     <?php echo $row_user['phone']; ?>

   </div>
 </div>
 <div class="form-group row">
  <label class="col-2">วันหมดอายุ<br></label>
  <div class="col-9">
    <?php $d = date("Y-m-d"); ?>

    <input type="date" name="user_date" min="<?php echo $d; ?>" value="<?php echo date('Y-m-d',strtotime($row_user['user_date'])) ?>" />

  </div>
</div>

<?php 
$m = '';
$a = '';
$e = '';
if ($row_user['Userlevel'] == 'A' ){
  $a = 'selected';
}elseif ($row_user['Userlevel'] == 'M') {
  $m = 'selected';
}elseif ($row_user['Userlevel'] == 'E') {
  $e = 'selected';
}
?>
<div class="form-group row">

 <label class="col-2">สถานะ<br></label>
 <div class="col-3">
   <select class="custom-select" name="Userlevel">
     <option <?php echo $a; ?> value="A">Admin</option>
     <option <?php echo $m; ?> value="M">User</option>
     <option <?php echo $e; ?> value="E">Expired</option>

   </select>
 </div>
</div>
<label></label>
<input name="User_id" hidden value="<?php echo $user_id; ?>" />
<div class="py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-12 text-center">
        <button name="submit" type="submit" class="btn btn-success text-light mx-1">แก่ไข</button>
        <a class="btn btn-danger text-light mx-1" href="index.php?su">ยกเลิก</a>
      </div>
    </div>
  </div>
</div>
</form>
</div>
<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12"></div>
    </div>
  </div>
</div>
</div>
