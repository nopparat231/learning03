<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document" >
  <div class="modal-content" style="background-color: #FFFEF0;">
    <div class="modal-header text-center" style="background-color: #FFF7D0;">
      <h4 class="modal-title w-100 font-weight-bold">เข้าสู่ระบบ</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form action="login_db.php" method="post">
    <div class="modal-body mx-3">
      <div class="md-form mb-5">
        <i class="fas fa-user prefix grey-text"></i>
        <input type="text" id="defaultForm-email" name="Username" class="form-control validate">
        <label data-error="wrong" data-success="right" for="defaultForm-user">ชื่อผู้ใช้</label>
      </div>

      <div class="md-form mb-4">
        <i class="fas fa-lock prefix grey-text"></i>
        <input type="password" id="defaultForm-pass" name="Password" class="form-control validate">
        <label data-error="wrong" data-success="right" for="defaultForm-pass">รหัสผ่าน</label>
      </div>

    </div>
    <div class="modal-footer d-flex justify-content-center">
      <div class="row d-flex align-items-center mb-12">
        <div class="text-center">
          <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1 my-4">เข้าสู่ระบบ</button>

          <a href="?register"type="submit" class="btn btn-default btn-rounded z-depth-1">สมัครสมาชิก</a>
          <a href="#" type="submit" class="btn btn-secondary btn-rounded z-depth-1" data-toggle="modal" data-dismiss="modal" data-target="#resetpassword">ลืมรหัสผ่าน</a>
        </div>
      </div>
    </div>
    </form>
  </div>
</div>
</div>


<div class="modal fade" id="resetpassword" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
aria-hidden="true">
<div class="modal-dialog" role="document" >
  <div class="modal-content" style="background-color: #FFFEF0;">
    <div class="modal-header text-center" style="background-color: #FFF7D0;">
      <h4 class="modal-title w-100 font-weight-bold">ลืมรหัสผ่าน</h4>
      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span aria-hidden="true">&times;</span>
      </button>
    </div>
    <form action="resetpassword_db.php" method="post">
    <div class="modal-body mx-3">
      <div class="md-form mb-5">
        <i class="fas fa-envelope prefix grey-text"></i>
        <input type="email" id="defaultForm-email" class="form-control validate" name="email">
        <label data-error="wrong" data-success="right" for="defaultForm-email">อีเมล์</label>
      </div>

    </div>
    <div class="modal-footer d-flex justify-content-center">
      <div class="row d-flex align-items-center mb-12">
        <div class="text-center">
          <button type="submit" class="btn btn-success btn-block btn-rounded z-depth-1">เข้าสู่ระบบ</button>
     </div>
      </div>
    </div>
    </form>
  </div>
</div>
</div>

