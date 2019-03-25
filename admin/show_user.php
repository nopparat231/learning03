
<?php 

$query_user = "SELECT * FROM user";
$user = mysqli_query($con,$query_user) or die(mysqli_error());
$row_user = mysqli_fetch_assoc($user);
$totalRows_user = mysqli_num_rows($user);




?>

<div class="col-md-9 bg-light">
	<div class="py-2">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="text-center" >จัดการผู้ใช้</h1>
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


						<table class="display" id="example">
							<?php if ($totalRows_user > 0) {?>

								<thead>
									<tr class="text-center">
										<th scope="col" width="5">ลำดับ</th>
										<th scope="col">ชื่อผู้ใช้</th>
										<th scope="col">ชื่อ  - สกุล</th>
										<th scope="col">ข้อมูลติดต่อ</th>
										<th scope="col">วันหมดอายุ</th>
										<th scope="col">ประเภท</th>

										<th scope="col" width="5">แก้ไข</th>
									</tr>
								</thead>
								<tbody>

									<?php
									$i = 1 ;
									do { ?>


										<tr class="text-center">

											<td><?php echo $i ?></td>
											<td><?php echo $row_user['Username']; ?></td>
											<td><?php echo $row_user['Firstname'] . "  " . $row_user['Lastname']; ?></td>
											<td><?php echo " เบอร์โทร " . $row_user['phone'] . " <br /> อีเมล์ " . $row_user['email']; ?></td>
											<td><?php echo $row_user['user_date']; ?></td>
											<td><?php echo $row_user['Userlevel']; ?></td>


											<td>
												<a href="index.php?eu&user_id=<?php echo $row_user['ID'];?>" class="btn btn-outline-warning my-2 my-sm-0" ><i class="fa fa-pencil text-muted fa-mg"></i></a>
											</td>

										</tr>

										<?php 
										$i += 1;
									} while ($row_user = mysqli_fetch_assoc($user)); ?>

								</tbody>
							</table>
						<?php }else {
							echo "<h3> ยังไม่มีคะแนน </h3>";
						}

						mysqli_free_result($user);?>

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

