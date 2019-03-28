
<?php 

if (isset($_GET['choice_id'])) {

  $choice_id = $_GET['choice_id'];

  $query_editc = "SELECT * FROM choice where choice_id = $choice_id";
  $editc = mysqli_query($con,$query_editc) or die(mysqli_error());
  $row_editc = mysqli_fetch_assoc($editc);
  $totalRows_editc = mysqli_num_rows($editc);

}
?>

<body>
<div class="col-12">
  <div class="py-3 text-center">
    <div class="container">
      <div class="row">
        <div class="mx-auto p-4 col-lg-7">
          <h1 class="mb-4">แก้ไขหมวดหมู่</h1>
          <form action="edit_choice_db.php" method="post">
            <input type="hidden" name="choice_id" value="<?php echo $row_editc['choice_id'] ?>" />

            <div class="form-group row"> 
              <label for="inputmailh" class="col-3 col-form-label">ชื่อหมวดหมู่</label>
              <div class="col-9">
                <input type="text" class="form-control" required="required" id="choice_name" name="choice_name" placeholder="กรุณากรอกหมวดหมู่"  value="<?php echo $row_editc['choice_name'] ?>"> 
              </div>
            </div>


            <div class="form-group row"> 
              <label for="inputmailh" class="col-3 col-form-label">URL Youtube</label>
              <div class="col-9">
                <input type="text" class="form-control"  required="required"  id="video" name="video" placeholder="กรุณากรอก URL"  value="<?php echo $row_editc['video'] ?>"> 
              </div>
            </div>

            <div class="form-group row"> 
              <label for="inputmailh" class="col-3 col-form-label">รายละเอียด</label>
              <div class="col-9">
                <input type="text" class="form-control"  required="required"  id="video" name="choice_detail" placeholder="กรุณากรอก URL"  value="<?php echo $row_editc['choice_detail'] ?>"> 
              </div>
            </div>


            <button type="submit" class="btn btn-primary">แก้ไข</button> 
            <a href="index.php?sc" type="submit" class="btn btn-danger" >ยกเลิก</a>
          </form>
        </div>
      </div>
    </div>
  </div>


</body>

<div class="py-5">
  <div class="container">
    <div class="row">
      <div class="col-md-12">

      </div>
    </div>
  </div>
</div>
</div>
