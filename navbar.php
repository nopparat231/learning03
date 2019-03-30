  <!--  <style>
    .navb {
     position: fixed;
     top: 0;
     left: 0;
     width: 100%;
   
   }
 </style>
 -->
 <div class="navb">

  <!-- Start your project here-->
  <nav class="navbar navbar-expand-lg navbar-dark default-color">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">หน้าหลัก <span class="sr-only">(current)</span></a>
      </li>
      <?php if(isset($_SESSION["Userlevel"]) <> "M"): ?>

        <li class="nav-item">
          <a href="" class="nav-link" data-toggle="modal" data-target="#modalLoginForm">เข้าสู่ระบบ/สมัครสมาชิก</a>
        </li>

        <?php else: ?>
          <li class="nav-item">
            <a href="index.php?learning" class="nav-link">บทเรียน</a>
          </li>
          <!-- Dropdown -->
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true"
            aria-expanded="false">ข้อมูลผู้ใช้</a>
            <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="index.php?editprofs&user_id=<?php echo($_SESSION["UserID"]); ?>">แก้ไขข้อมูล</a>
              <a class="dropdown-item" href="index.php?editpas&user_id=<?php echo($_SESSION["UserID"]); ?>">เปลี่ยนรหัสผ่าน</a>
              <a class="dropdown-item" href="index.php?sc&user_id=<?php echo($_SESSION["UserID"]); ?>">คะแนนผู้ใช้งาน</a>
            </div>
          </li>
          <li class="nav-item">
            <a href="index.php?scl" class="nav-link">คะแนนผู้ใช้งานทั้งหมด</a>
          </li>
        <?php endif ?>

      </ul>
    </div>
    <ul class="navbar-nav navbar-right">
      <?php if(isset($_SESSION["Userlevel"]) == "M"): ?>
        <li class="nav-item">
          <span class="navbar-text white-text">
            <?php echo $_SESSION["User"]; ?>
          </span>
        </li>
        <li class="nav-item">
          <a href="logout.php" class="nav-link orange-text">ออกจากระบบ</a>
        </li>

      <?php endif ?>
    </ul>
  </nav>

</div>
<br>