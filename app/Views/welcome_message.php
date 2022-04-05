<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>หน้าหลัก</title>

</head>
<body>
<?php include('templastes/header.php') ?>

	<div class="container" style="text-align: center; margin-top: 20%; margin-bottom: 15%; " id="m1">
		<h1>ระบบบันทึกข้อมูลการเข้าเรียน</h1>
		<br>
		<a href="<?php echo site_url('/namelist');?>" class="btn btn-primary">รายละเอียดข้อมูล</a>
		<a href="<?php echo site_url('/addname');?>" class="btn btn-success">เพิ่มข้อมูล</a>
		<a href="<?php echo site_url('/namelist');?>" class="btn btn-danger">ลบข้อมูล</a>
		<a href="<?php echo site_url('/namelist');?>" class="btn btn-warning">แก้ไขข้อมูล</a>
	</div>

<?php include('templastes/footer.php') ?>
</body>
</html>