<!DOCTYPE html>
<html lang="vi">
	<head>
		<title>View subject</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="../css/bootstrap.min.css" />
		<link rel="stylesheet" href="../css/font-awesome-4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="../style.css" />
	</head>
	<body>
		<div class="form-account">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-3 col-xs-12">
						<div class="menu-col">
							<div class="thumbnail_img">
								<a href="#" title="">
									<img class="img-responsive img-circle" src="../images/thumbnail.jpg" alt="">
								</a>
								<div class="name_user">
									<a href="#" title="">Mr Tùng</a>
								</div>
							</div>
							<ul class="nav">
								<li class="active"><a href="view_infor.php">View information</a></li>
								
								<li><a href="#compare">Compare</a></li>
								<li><a href="view_all_subject.php">Subject</a></li>
								<li><a href="report.php">Report</a></li>
								<li><a href="#">Logout</a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-9 col-sm-9 col-xs-12">
						<div class="tab-content pass-content">
							<div class="edit-infor">
								<div class="edit_link">
									<a href="edit_infor.php">Edit Infor</a>
								</div>
								<form action="" method="post">
									<div class="input-group">
										<div class="input-btn">
											<label>Name:</label>
											<input type="text" name="name" value="">
										</div>
										<div class="input-btn">
											<label>Date of birth:</label>
											<input type="text" name="date" value="">
										</div>
										<div class="input-btn">
											<label>Email:</label>
											<input type="text" name="email" value="">
										</div>
										<div class="input-btn">
											<label>Phone number:</label>
											<input type="text" name="phone" value="">
										</div>
										<!--<div class="form-submit">
											<input type="submit" name="submit" value="Save">
										</div>-->
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End Form Account-->
		
		<script src="../js/jquery-1.11.3.min.js"></script>
		<script src="../js/bootstrap.min.js"></script>
	
	</body>
</html>