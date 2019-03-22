<?php session_start(); ?>
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
      <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link" data-toggle="modal" data-target="#modalLoginForm">เข้าสู่ระบบ/สมัครสมาชิก</a>
    </li>
    <li class="nav-item">
      <a href="" class="nav-link">ทบเรียน</a>
    </li>

    
  </ul>
</div>
<?php if(isset($_SESSION["Userlevel"]) == "M"): ?>
  <span class="navbar-text white-text">
    <?php echo "ยินดีต้อนรับคุณ " . $_SESSION["User"]; ?>
  </span>
  <a href="logout.php" class="nav-link orange-text">ออกจากระบบ</a>
<?php endif ?>

</nav>
<br />
