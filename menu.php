<?php session_start(); ?>
   <div class="col-md-3">
   	<ul class="list-group">
   		<a href="index.php" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> หน้าหลัก <i class="fa fa-home text-muted fa-lg"></i></a>
   		<?php if(isset($_SESSION["Userlevel"]) == "M"): ?>

   			<a href="#" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> บทเรียน <i class="fa fa-list text-muted fa-lg"></i></a>

   			<a class="dropdown-toggle border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action" href="#" data-toggle="dropdown"> ข้อมูล <span class="caret"></span></a>
   			<ul class="dropdown-menu">
   				<li><a href="#" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> ข้อมูลผู้ใช้ </a></li>
   				<li><a href="#" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> เปลี่ยนรหัสผ่าน </a></li>
   				<li><a href="#" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> ข้อมูลคะะแนน </a></li>
   			</ul>

   			<a href="logout.php" class="border-0 list-group-item d-flex justify-content-between align-items-center list-group-item-action"> ออกจากระบบ <i class="fa fa-sign-out text-muted fa-lg"></i></a>
   		<?php endif ?>
   	</ul>
   </div>

</li>