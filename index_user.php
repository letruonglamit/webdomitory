<?php session_start();
 ?>
<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from g-axon.com/mouldifi-3.0/light/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2016 02:49:11 GMT -->
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
<meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
<title>Mouldifi | Advanced Plugins</title>
<!-- Site favicon -->
<link rel='shortcut icon' type='image/x-icon' href='images/favicon.ico' />
<!-- /site favicon -->

<!-- Entypo font stylesheet -->
<link href="css/entypo.css" rel="stylesheet">
<!-- /entypo font stylesheet -->

<!-- Font awesome stylesheet -->
<link href="css/font-awesome.min.css" rel="stylesheet">
<!-- /font awesome stylesheet -->

<!-- Bootstrap stylesheet min version -->
<link href="css/bootstrap.min.css" rel="stylesheet">
<!-- /bootstrap stylesheet min version -->

<!-- Mouldifi core stylesheet -->
<link href="css/mouldifi-core.css" rel="stylesheet">
<!-- /mouldifi core stylesheet -->

<link href="css/plugins/datepicker/bootstrap-datepicker.css" rel="stylesheet">
<link href="css/plugins/colorpicker/bootstrap-colorpicker.css" rel="stylesheet">
<link href="css/plugins/nouislider/nouislider.css" rel="stylesheet">
<link href="css/plugins/select2/select2.css" rel="stylesheet">
<link href="css/mouldifi-forms.css" rel="stylesheet" >

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->

</head>
<body>

<div class="page-container">

  <!-- Page Sidebar -->
	<div class="page-sidebar">
	
		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo"><a href="index.php"><img src="images/logo.png" alt="Mouldifi" title="Mouldifi"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
			
			<li class="has-sub"><a href="introduce.php"><i class="icon-layout"></i><span class="title">Ký Túc Xá</span></a>
				<ul class="nav collapse">
					<li><a href="introduce_index.php"><span class="title">Giới Thiệu</span></a></li>
					<li><a href="officials_index.php"><span class="title">Danh Sách Cán Bộ</span></a></li>
					<li><a href="listroom_index.php"><span class="title">Thông Tin Phòng</span></a></li>
				</ul>
			</li>

			<li class="has-sub"><a href="panels.html"><i class="icon-users"></i><span class="title">Người Dùng</span></a>
				<ul class="nav collapse">
					<!-- <li><a href="login.php"><span class="title">Đăng Nhập</span></a></li> -->
					<li><a href="index_user.php"><span class="title">Thông tin cá nhân </span></a></li>
					<li><a href="user_room_information.php"><span class="title">Thông tin phòng</span></a></li>	
					<li><a href="user_thongbao.php"><span class="title">Thông báo</span></a></li>					
					<li><a href="user_reported-missing.php"><span class="title">Báo vắng</span></a></li>					
					<li><a href="user_extend-room.php"><span class="title">Gia Hạn Phòng</span></a></li>
					<li><a href="user_request.php"><span class="title">Yêu Cầu</span></a></li>					
					<li><a href="user_service.php"><span class="title">Dịch Vụ</span></a></li>					
					<li><a href="feedback.php"><span class="title">Góp ý</span></a></li>
					
				</ul>
			</li>
			<!-- <li class="has-sub"><a href="basic-tables.html"><i class="icon-window"></i><span class="title">Hoạt Động Cư Trú</span></a>
				<ul class="nav collapse">
					<li><a href="registation-room.php"><span class="title">Đăng Ký Phòng</span></a></li>					 
					<li><a href="extend-room.html"><span class="title">Gia Hạn Phòng</span></a></li>					
					<li><a href="service.html"><span class="title">Dịch Vụ</span></a></li>
					<li><a href="request.html"><span class="title">Yêu Cầu</span></a></li>
				</ul>
			</li> -->
			<li class="other-activity.html"><a href="orther-activity_index.php"><i class="icon-doc-text"></i><span class="title">Hoạt Động Khác</span></a>
			</li>
			<li class="seach.html"><a href="seach.php"><i class="icon-search"></i><span class="title">Tìm Kiếm</span></a>
			</li>

		</ul>
		<!-- /main navigation -->		
  	</div>
  <!-- /page sidebar -->
  
	  <!-- Main container -->
	<div class="main-container">
	  
		<!-- Main header -->
			<div class="main-header row">

			  
				<div class="col-sm-6 col-xs-5 height-header1">
							<a href="index.php">
							<div id="header-logo-img">
		                        		<img src="images/logobk.jpg" alt = "HTML5 icon" width="60" >
		                        </div>
							<div id="header-logo-infologo">
		                            <h3><b>KÝ TÚC XÁ ĐẠI HỌC BÁCH KHOA</b></h3>
		                            <p>Dormitory of University of Science and Technology</p>
		                    </div>
		                        
		                        
		                    </a>
				</div>

			  		  <div class="col-sm-6 col-xs-7">
			  
				<!-- User info -->
				<ul class="user-info pull-left">          
				  <li class="profile-info dropdown" style="margin-left: 350px;margin-top: 10px;"> 
				  <?php 
	      				 if (isset($_SESSION['TaiKhoan'])){
	      				 	echo "<a data-toggle='dropdown' class='dropdown-toggle' href='index_user.php' aria-expanded='false'>
	      				 		<img width='44' class='img-circle avatar' alt='' src='images/nu.jpg'>{$_SESSION['TaiKhoan']}
	      				 		<span class='caret'></span></a>
	      				 		<ul class='dropdown-menu'>
					 			<li><a href='#'><i class='icon-cog'></i>Account settings</a></li>
					  			<li><a href='logout.php'><i class='icon-logout'></i>Logout</a></li>
								</ul>";
	      				 }
	      				 ?>
					<!-- /user action menu -->
					
				  </li>
				</ul>
				</div>
				<!-- /user info -->
			</div>
			<!-- /main header -->
		
		<!-- Main content -->
			<div class="main-content" >	
					<!-- Breadcrumb -->
				<ol class="breadcrumb breadcrumb-2"> 
					<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li> 
					<li>Ký túc xá</li> 
					<li class="active"><strong>Thông tin sinh viên</strong></li> 
				</ol>
				
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading no-border clearfix" style="background: #58FAF4;"> 
								<h2 class="panel-title"><b>THÔNG TIN CÁ NHÂN</b></h2>
							</div> 
							<!-- panel body --> 
							<div class="panel-body">
								<div class="col-lg-10">
									<!-- Card Container -->
									<div class="cards-container default-view">
							
										<!-- Card -->
										<div class="card">
											
											<!-- Card Content -->
											<div class="card-content" style="margin-left: 0px;">
												<form action="controller_capnhatsv.php?do=capnhat" method="post" style="margin: auto; width: 950px">
													<table class="table">
														<?php 
															if(isset($_SESSION['TaiKhoan'])){
																include('DatabaseConnection.php');
																$tk = $_SESSION['TaiKhoan'];
																$sql = "SELECT TenSV,Email,NgaySinh,QueQuan,GioiTinh,Lop,SDT FROM sinhvien where MaSV='$tk'";
																$query = mysqli_query($link,$sql);
																while($row = mysqli_fetch_array($query,MYSQL_ASSOC)){
																	echo "{$row['NgaySinh']}";
																	$d = getdate(strtotime($row['NgaySinh']));
																	$date= $d['mday'].'/'.$d['mon'].'/'.$d['year'];
																	echo "
																		<tr>
															<td> <label> Mã sinh viên: </label></td>
															<td> <input id='disabledInput' type='text' name='msv' value='{$tk}' disabled/></td>
															<input type='hidden' name='MaSV' value='{$tk}' />
															<td> <label> Họ vào tên: </label></td>
															<td> <input type='text' name='HoTen' value='{$row['TenSV']}'/></td>
															<td> <label> Lớp: </label> </td>
															<td> <input type='text' name='Lop' value='{$row['Lop']}'/></td>
														</tr>
														<tr>
															<td> <label> Giới tính: </label> </td>
															<td> 
																<select name='GioiTinh'>";
																	if($row['GioiTinh']=='Nam'){
																		echo"<option value='Nam' selected>Nam</option>	
																		<option value='Nữ'>Nữ</option>";
																	}else{
																		echo"<option value='Nam'>Nam</option>
																		<option value='Nữ' selected>Nữ</option>";	
																	}	
																echo"
																</select>
															</td>
															<td> <label> Ngày sinh: </label> </td>
																<td><div id='date-popup' class='input-group date'> 
															<input type='text' data-format='D, dd MM yyyy' class='form-control' name='dateofbirth' value='$date'> 
														<span class='input-group-addon'><i class='fa fa-calendar'></i></span> 
															</div></td>
														 
															<td> <label> Nơi sinh: </label> </td>
															<td> <input type='text' name='NoiSinh' value='{$row['QueQuan']}' /></td>
														</tr>
														<tr>
															<td> <label> Số điện thoại: </label></td>
															<td> <input type='text' name='sdt' value='{$row['SDT']}'/></td>
															<td> <label> Email: </label> </td>
															<td> <input type='text' name='Email' value='{$row['Email']}' style='width: 182px;'/></td>
														</tr>
														<tr>
															<td><input type='submit' name='capnhat' value='Cập nhật' /></td>
														</tr>";
																}	
															}
														?>
													</table>
												</form>
											</div>
											<!-- /card content -->			
										</div>
										<!-- /card -->
									</div>
								<!-- /card container -->
								</div>
							<!--/panel body -->
							</div>
						<!--/panel panel default-->
						</div>
					</div>
				</div>
				<!--/row-->	 			  		
		

				<!-- Footer -->
				<footer class="footer-main"> 				
					<div class="container">
	                    <div id="footer-content-nav">
	                        <div id="footer-content-nav-brand" style="float: left;">
	                            <h4><a href="#"><b>KÝ TÚC XÁ ĐẠI HỌC BÁCH KHOA</b></a></h4>
	                        </div>
	                        <div id="footer-content-nav-links" style="float: right;">
	                            <a href="#"><span class="glyphicon glyphicon-open" aria-hidden="true"></span></a>
	                        </div>
	                    </div>
	                    <div id="footer-content-links" style="padding-top: 10px">
	                        <div class="links-group contact" style="float: left;">
	                            <h4>LIÊN HỆ</h4>
	                            <p>Ban quản lý KTX - Đại học Bách Khoa.</p>
	                            <p>Địa chỉ: 60 Ngô Sĩ Liên, phường Hòa Khánh, quận Liên Chiểu, TP.Đà Nẵng.</p>
	                            <p>Tel: 0511.3736.936</p>
	                            <p>Email: ktxbk.dn@gmail.com</p>
	                        </div>
	                        <div class="links-group connectus" style="margin-left: 80px;float: left;">
	                            <h4>LIÊN KẾT</h4>
	                            <a href="http://udn.vn/" target="_blank">Trang Đại Học Đà Nẵng</a><br>
	                            <a href="http://dut.udn.vn/" target="_blank">Trang Đại Học Bách Khoa</a><br>                            
	                            <a href="http://daotao.dut.udn.vn/" target="_blank">Trang Đào Tạo</a><br>
	                            <a href="http://daotao.dut.udn.vn/sv" target="_blank">Hệ thống trang tín chỉ</a><br>
	                            <a href="http://ctsv.dut.udn.vn/" target="_blank">Phòng công tác sinh viên</a><br>
	                            <a href="http://yu.dut.udn.vn/" target="_blank">Đoàn Trường Bách Khoa</a>
	                        </div>
	                    </div>
	                </div>
				</footer>		
				<!-- /footer -->
		  	</div>
		  	<!-- /main content -->
		  
	</div>
	  <!-- /main container --><div class="page-container">

  <!-- Page Sidebar -->
	<div class="page-sidebar">
	
		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo"><a href="index.php"><img src="images/logo.png" alt="Mouldifi" title="Mouldifi"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
			
			<li class="has-sub"><a href="introduce.php"><i class="icon-layout"></i><span class="title">Ký Túc Xá</span></a>
				<ul class="nav collapse">
					<li><a href="introduce_index.php"><span class="title">Giới Thiệu</span></a></li>
					<li><a href="officials_index.php"><span class="title">Danh Sách Cán Bộ</span></a></li>
					<li><a href="listroom_index.php"><span class="title">Thông Tin Phòng</span></a></li>
				</ul>
			</li>

			<li class="has-sub"><a href="panels.html"><i class="icon-users"></i><span class="title">Người Dùng</span></a>
				<ul class="nav collapse">
					<!-- <li><a href="login.php"><span class="title">Đăng Nhập</span></a></li> -->
					<li><a href="index_user.php"><span class="title">Thông tin cá nhân </span></a></li>
					<li><a href="user_room_information.php"><span class="title">Thông tin phòng</span></a></li>	
					<li><a href="user_thongbao.php"><span class="title">Thông báo</span></a></li>					
					<li><a href="user_reported-missing.php"><span class="title">Báo vắng</span></a></li>					
					<li><a href="user_extend-room.php"><span class="title">Gia Hạn Phòng</span></a></li>
					<li><a href="user_request.php"><span class="title">Yêu Cầu</span></a></li>					
					<li><a href="user_service.php"><span class="title">Dịch Vụ</span></a></li>					
					<li><a href="feedback.php"><span class="title">Góp ý</span></a></li>
					
				</ul>
			</li>
			<!-- <li class="has-sub"><a href="basic-tables.html"><i class="icon-window"></i><span class="title">Hoạt Động Cư Trú</span></a>
				<ul class="nav collapse">
					<li><a href="registation-room.php"><span class="title">Đăng Ký Phòng</span></a></li>					 
					<li><a href="extend-room.html"><span class="title">Gia Hạn Phòng</span></a></li>					
					<li><a href="service.html"><span class="title">Dịch Vụ</span></a></li>
					<li><a href="request.html"><span class="title">Yêu Cầu</span></a></li>
				</ul>
			</li> -->
			<li class="other-activity.html"><a href="orther-activity_index.php"><i class="icon-doc-text"></i><span class="title">Hoạt Động Khác</span></a>
			</li>
			<li class="seach.html"><a href="seach.php"><i class="icon-search"></i><span class="title">Tìm Kiếm</span></a>
			</li>

		</ul>
		<!-- /main navigation -->		
  	</div>
  <!-- /page sidebar -->
  
	  <!-- Main container -->
	<div class="main-container">
	  
		<!-- Main header -->
			<div class="main-header row">

			  
				<div class="col-sm-6 col-xs-5 height-header1">
							<a href="index.php">
							<div id="header-logo-img">
		                        		<img src="images/logobk.jpg" alt = "HTML5 icon" width="60" >
		                        </div>
							<div id="header-logo-infologo">
		                            <h3><b>KÝ TÚC XÁ ĐẠI HỌC BÁCH KHOA</b></h3>
		                            <p>Dormitory of University of Science and Technology</p>
		                    </div>
		                        
		                        
		                    </a>
				</div>

			  		  <div class="col-sm-6 col-xs-7">
			  
				<!-- User info -->
				<ul class="user-info pull-left">          
				  <li class="profile-info dropdown" style="margin-left: 350px;margin-top: 10px;"> 
				  <?php 
	      				 if (isset($_SESSION['TaiKhoan'])){
	      				 	echo "<a data-toggle='dropdown' class='dropdown-toggle' href='index_user.php' aria-expanded='false'>
	      				 		<img width='44' class='img-circle avatar' alt='' src='images/nu.jpg'>{$_SESSION['TaiKhoan']}
	      				 		<span class='caret'></span></a>
	      				 		<ul class='dropdown-menu'>
					 			<li><a href='#'><i class='icon-cog'></i>Account settings</a></li>
					  			<li><a href='logout.php'><i class='icon-logout'></i>Logout</a></li>
								</ul>";
	      				 }
	      				 ?>
					<!-- /user action menu -->
					
				  </li>
				</ul>
				</div>
				<!-- /user info -->
			</div>
			<!-- /main header -->
		
		<!-- Main content -->
			<div class="main-content" >	
					<!-- Breadcrumb -->
				<ol class="breadcrumb breadcrumb-2"> 
					<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li> 
					<li>Ký túc xá</li> 
					<li class="active"><strong>Thông tin sinh viên</strong></li> 
				</ol>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading clearfix">
								<h3 class="panel-title">Date Picker</h3>
								<ul class="panel-tool-options"> 
									<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
									<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
									<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
								</ul>
							</div>
							<div class="panel-body">
								<form class="form-horizontal">
									<div class="form-group"> 
										<label class="col-sm-3 control-label">Date Picker (inline)</label> 
										<div class="col-sm-5"> 
											<div id="datepicker"></div>
										</div> 
									</div>
									<div class="line-dashed"></div>
									<div class="form-group"> 
										<label class="col-sm-3 control-label">Date Picker (popup)</label> 
										<div class="col-sm-3"> 
											<div id="date-popup" class="input-group date"> 
												<input type="text" data-format="D, dd MM yyyy" class="form-control"> 
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
											</div>
										</div> 
									</div>
									<div class="line-dashed"></div>
									<div class="form-group"> 
										<label class="col-sm-3 control-label">One Year view</label> 
										<div class="col-sm-3"> 
											<div id="year-view" class="input-group date"> 
												<input id="year-view" type="text" value="03/04/2016" class="form-control"> 
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
											</div>
										</div> 
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading no-border clearfix" style="background: #58FAF4;"> 
								<h2 class="panel-title"><b>THÔNG TIN CÁ NHÂN</b></h2>
							</div> 
							<!-- panel body --> 
							<div class="panel-body">
								<div class="col-lg-10">
									<!-- Card Container -->
									<div class="cards-container default-view">
							
										<!-- Card -->
										<div class="card">
											
											<!-- Card Content -->
											<div class="card-content" style="margin-left: 0px;">
												<form action="controller_capnhatsv.php?do=capnhat" method="post" style="margin: auto; width: 950px">
													<table class="table">
														<?php 
															if(isset($_SESSION['TaiKhoan'])){
																include('DatabaseConnection.php');
																$tk = $_SESSION['TaiKhoan'];
																$sql = "SELECT TenSV,Email,GioiTinh,Lop,SDT FROM sinhvien where MaSV='$tk'";
																$query = mysqli_query($link,$sql);
																while($row = mysqli_fetch_array($query,MYSQL_ASSOC)){
																	echo "
																		<tr>
															<td> <label> Mã sinh viên: </label></td>
															<td> <input type='text' name='MaSV' value='{$tk}'/></td>
															<td> <label> Họ vào tên: </label></td>
															<td> <input type='text' name='HoTen' value='{$row['TenSV']}'/></td>
															<td> <label> Lớp: </label> </td>
															<td> <input type='text' name='Lop' value='{$row['Lop']}'/></td>
														</tr>
														<tr>
															<td> <label> Giới tính: </label> </td>
															<td> 
																<select name='GioiTinh'>";
																	if($row['GioiTinh']=='Nam'){
																		echo"<option value='Nam' selected>Nam</option>	
																		<option value='Nữ'>Nữ</option>";
																	}else{
																		echo"<option value='Nam'>Nam</option>
																		<option value='Nữ' selected>Nữ</option>";	
																	}	
																echo"
																</select>
															</td>
															<td> <label> Ngày sinh: </label> </td>
																<td><div id='date-popup' class='input-group date'> 
															<input type='text' data-format='D, dd MM yyyy' class='form-control'> 
														<span class='input-group-addon'><i class='fa fa-calendar'></i></span> 
															</div></td>
														 
															<td> <label> Nơi sinh: </label> </td>
															<td> <input type='text' name='NoiSinh' value='' /></td>
														</tr>
														<tr>
															<td> <label> Số điện thoại: </label></td>
															<td> <input type='text' name='sdt' value='{$row['SDT']}'/></td>
															<td> <label> Email: </label> </td>
															<td> <input type='text' name='Email' value='{$row['Email']}' style='width: 182px;'/></td>
														</tr>
														<tr>
															<td><input type='submit' name='capnhat' value='Cập nhật' /></td>
														</tr>";
																}	
															}
														?>
													</table>
												</form>
											</div>
											<!-- /card content -->			
										</div>
										<!-- /card -->
									</div>
								<!-- /card container -->
								</div>
							<!--/panel body -->
							</div>
						<!--/panel panel default-->
						</div>
					</div>
				</div>
				<!--/row-->	 			  		
		

				<!-- Footer -->
				<footer class="footer-main"> 				
					<div class="container">
	                    <div id="footer-content-nav">
	                        <div id="footer-content-nav-brand" style="float: left;">
	                            <h4><a href="#"><b>KÝ TÚC XÁ ĐẠI HỌC BÁCH KHOA</b></a></h4>
	                        </div>
	                        <div id="footer-content-nav-links" style="float: right;">
	                            <a href="#"><span class="glyphicon glyphicon-open" aria-hidden="true"></span></a>
	                        </div>
	                    </div>
	                    <div id="footer-content-links" style="padding-top: 10px">
	                        <div class="links-group contact" style="float: left;">
	                            <h4>LIÊN HỆ</h4>
	                            <p>Ban quản lý KTX - Đại học Bách Khoa.</p>
	                            <p>Địa chỉ: 60 Ngô Sĩ Liên, phường Hòa Khánh, quận Liên Chiểu, TP.Đà Nẵng.</p>
	                            <p>Tel: 0511.3736.936</p>
	                            <p>Email: ktxbk.dn@gmail.com</p>
	                        </div>
	                        <div class="links-group connectus" style="margin-left: 80px;float: left;">
	                            <h4>LIÊN KẾT</h4>
	                            <a href="http://udn.vn/" target="_blank">Trang Đại Học Đà Nẵng</a><br>
	                            <a href="http://dut.udn.vn/" target="_blank">Trang Đại Học Bách Khoa</a><br>                            
	                            <a href="http://daotao.dut.udn.vn/" target="_blank">Trang Đào Tạo</a><br>
	                            <a href="http://daotao.dut.udn.vn/sv" target="_blank">Hệ thống trang tín chỉ</a><br>
	                            <a href="http://ctsv.dut.udn.vn/" target="_blank">Phòng công tác sinh viên</a><br>
	                            <a href="http://yu.dut.udn.vn/" target="_blank">Đoàn Trường Bách Khoa</a>
	                        </div>
	                    </div>
	                </div>
				</footer>		
				<!-- /footer -->
		  	</div>
		  	<!-- /main content -->
		  
	</div>
	  <!-- /main container -->
  
</div><div class="page-container">

  <!-- Page Sidebar -->
	<div class="page-sidebar">
	
		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo"><a href="index.php"><img src="images/logo.png" alt="Mouldifi" title="Mouldifi"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
			
			<li class="has-sub"><a href="introduce.php"><i class="icon-layout"></i><span class="title">Ký Túc Xá</span></a>
				<ul class="nav collapse">
					<li><a href="introduce_index.php"><span class="title">Giới Thiệu</span></a></li>
					<li><a href="officials_index.php"><span class="title">Danh Sách Cán Bộ</span></a></li>
					<li><a href="listroom_index.php"><span class="title">Thông Tin Phòng</span></a></li>
				</ul>
			</li>

			<li class="has-sub"><a href="panels.html"><i class="icon-users"></i><span class="title">Người Dùng</span></a>
				<ul class="nav collapse">
					<!-- <li><a href="login.php"><span class="title">Đăng Nhập</span></a></li> -->
					<li><a href="index_user.php"><span class="title">Thông tin cá nhân </span></a></li>
					<li><a href="user_room_information.php"><span class="title">Thông tin phòng</span></a></li>	
					<li><a href="user_thongbao.php"><span class="title">Thông báo</span></a></li>					
					<li><a href="user_reported-missing.php"><span class="title">Báo vắng</span></a></li>					
					<li><a href="user_extend-room.php"><span class="title">Gia Hạn Phòng</span></a></li>
					<li><a href="user_request.php"><span class="title">Yêu Cầu</span></a></li>					
					<li><a href="user_service.php"><span class="title">Dịch Vụ</span></a></li>					
					<li><a href="feedback.php"><span class="title">Góp ý</span></a></li>
					
				</ul>
			</li>
			<!-- <li class="has-sub"><a href="basic-tables.html"><i class="icon-window"></i><span class="title">Hoạt Động Cư Trú</span></a>
				<ul class="nav collapse">
					<li><a href="registation-room.php"><span class="title">Đăng Ký Phòng</span></a></li>					 
					<li><a href="extend-room.html"><span class="title">Gia Hạn Phòng</span></a></li>					
					<li><a href="service.html"><span class="title">Dịch Vụ</span></a></li>
					<li><a href="request.html"><span class="title">Yêu Cầu</span></a></li>
				</ul>
			</li> -->
			<li class="other-activity.html"><a href="orther-activity_index.php"><i class="icon-doc-text"></i><span class="title">Hoạt Động Khác</span></a>
			</li>
			<li class="seach.html"><a href="seach.php"><i class="icon-search"></i><span class="title">Tìm Kiếm</span></a>
			</li>

		</ul>
		<!-- /main navigation -->		
  	</div>
  <!-- /page sidebar -->
  
	  <!-- Main container -->
	<div class="main-container">
	  
		<!-- Main header -->
			<div class="main-header row">

			  
				<div class="col-sm-6 col-xs-5 height-header1">
							<a href="index.php">
							<div id="header-logo-img">
		                        		<img src="images/logobk.jpg" alt = "HTML5 icon" width="60" >
		                        </div>
							<div id="header-logo-infologo">
		                            <h3><b>KÝ TÚC XÁ ĐẠI HỌC BÁCH KHOA</b></h3>
		                            <p>Dormitory of University of Science and Technology</p>
		                    </div>
		                        
		                        
		                    </a>
				</div>

			  		  <div class="col-sm-6 col-xs-7">
			  
				<!-- User info -->
				<ul class="user-info pull-left">          
				  <li class="profile-info dropdown" style="margin-left: 350px;margin-top: 10px;"> 
				  <?php 
	      				 if (isset($_SESSION['TaiKhoan'])){
	      				 	echo "<a data-toggle='dropdown' class='dropdown-toggle' href='index_user.php' aria-expanded='false'>
	      				 		<img width='44' class='img-circle avatar' alt='' src='images/nu.jpg'>{$_SESSION['TaiKhoan']}
	      				 		<span class='caret'></span></a>
	      				 		<ul class='dropdown-menu'>
					 			<li><a href='#'><i class='icon-cog'></i>Account settings</a></li>
					  			<li><a href='logout.php'><i class='icon-logout'></i>Logout</a></li>
								</ul>";
	      				 }
	      				 ?>
					<!-- /user action menu -->
					
				  </li>
				</ul>
				</div>
				<!-- /user info -->
			</div>
			<!-- /main header -->
		
		<!-- Main content -->
			<div class="main-content" >	
					<!-- Breadcrumb -->
				<ol class="breadcrumb breadcrumb-2"> 
					<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li> 
					<li>Ký túc xá</li> 
					<li class="active"><strong>Thông tin sinh viên</strong></li> 
				</ol>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading clearfix">
								<h3 class="panel-title">Date Picker</h3>
								<ul class="panel-tool-options"> 
									<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
									<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
									<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
								</ul>
							</div>
							<div class="panel-body">
								<form class="form-horizontal">
									<div class="form-group"> 
										<label class="col-sm-3 control-label">Date Picker (inline)</label> 
										<div class="col-sm-5"> 
											<div id="datepicker"></div>
										</div> 
									</div>
									<div class="line-dashed"></div>
									<div class="form-group"> 
										<label class="col-sm-3 control-label">Date Picker (popup)</label> 
										<div class="col-sm-3"> 
											<div id="date-popup" class="input-group date"> 
												<input type="text" data-format="D, dd MM yyyy" class="form-control"> 
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
											</div>
										</div> 
									</div>
									<div class="line-dashed"></div>
									<div class="form-group"> 
										<label class="col-sm-3 control-label">One Year view</label> 
										<div class="col-sm-3"> 
											<div id="year-view" class="input-group date"> 
												<input id="year-view" type="text" value="03/04/2016" class="form-control"> 
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
											</div>
										</div> 
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading no-border clearfix" style="background: #58FAF4;"> 
								<h2 class="panel-title"><b>THÔNG TIN CÁ NHÂN</b></h2>
							</div> 
							<!-- panel body --> 
							<div class="panel-body">
								<div class="col-lg-10">
									<!-- Card Container -->
									<div class="cards-container default-view">
							
										<!-- Card -->
										<div class="card">
											
											<!-- Card Content -->
											<div class="card-content" style="margin-left: 0px;">
												<form action="controller_capnhatsv.php?do=capnhat" method="post" style="margin: auto; width: 950px">
													<table class="table">
														<?php 
															if(isset($_SESSION['TaiKhoan'])){
																include('DatabaseConnection.php');
																$tk = $_SESSION['TaiKhoan'];
																$sql = "SELECT TenSV,Email,GioiTinh,Lop,SDT FROM sinhvien where MaSV='$tk'";
																$query = mysqli_query($link,$sql);
																while($row = mysqli_fetch_array($query,MYSQL_ASSOC)){
																	echo "
																		<tr>
															<td> <label> Mã sinh viên: </label></td>
															<td> <input type='text' name='MaSV' value='{$tk}'/></td>
															<td> <label> Họ vào tên: </label></td>
															<td> <input type='text' name='HoTen' value='{$row['TenSV']}'/></td>
															<td> <label> Lớp: </label> </td>
															<td> <input type='text' name='Lop' value='{$row['Lop']}'/></td>
														</tr>
														<tr>
															<td> <label> Giới tính: </label> </td>
															<td> 
																<select name='GioiTinh'>";
																	if($row['GioiTinh']=='Nam'){
																		echo"<option value='Nam' selected>Nam</option>	
																		<option value='Nữ'>Nữ</option>";
																	}else{
																		echo"<option value='Nam'>Nam</option>
																		<option value='Nữ' selected>Nữ</option>";	
																	}	
																echo"
																</select>
															</td>
															<td> <label> Ngày sinh: </label> </td>
																<td><div id='date-popup' class='input-group date'> 
															<input type='text' data-format='D, dd MM yyyy' class='form-control'> 
														<span class='input-group-addon'><i class='fa fa-calendar'></i></span> 
															</div></td>
														 
															<td> <label> Nơi sinh: </label> </td>
															<td> <input type='text' name='NoiSinh' value='' /></td>
														</tr>
														<tr>
															<td> <label> Số điện thoại: </label></td>
															<td> <input type='text' name='sdt' value='{$row['SDT']}'/></td>
															<td> <label> Email: </label> </td>
															<td> <input type='text' name='Email' value='{$row['Email']}' style='width: 182px;'/></td>
														</tr>
														<tr>
															<td><input type='submit' name='capnhat' value='Cập nhật' /></td>
														</tr>";
																}	
															}
														?>
													</table>
												</form>
											</div>
											<!-- /card content -->			
										</div>
										<!-- /card -->
									</div>
								<!-- /card container -->
								</div>
							<!--/panel body -->
							</div>
						<!--/panel panel default-->
						</div>
					</div>
				</div>
				<!--/row-->	 			  		
		

				<!-- Footer -->
				<footer class="footer-main"> 				
					<div class="container">
	                    <div id="footer-content-nav">
	                        <div id="footer-content-nav-brand" style="float: left;">
	                            <h4><a href="#"><b>KÝ TÚC XÁ ĐẠI HỌC BÁCH KHOA</b></a></h4>
	                        </div>
	                        <div id="footer-content-nav-links" style="float: right;">
	                            <a href="#"><span class="glyphicon glyphicon-open" aria-hidden="true"></span></a>
	                        </div>
	                    </div>
	                    <div id="footer-content-links" style="padding-top: 10px">
	                        <div class="links-group contact" style="float: left;">
	                            <h4>LIÊN HỆ</h4>
	                            <p>Ban quản lý KTX - Đại học Bách Khoa.</p>
	                            <p>Địa chỉ: 60 Ngô Sĩ Liên, phường Hòa Khánh, quận Liên Chiểu, TP.Đà Nẵng.</p>
	                            <p>Tel: 0511.3736.936</p>
	                            <p>Email: ktxbk.dn@gmail.com</p>
	                        </div>
	                        <div class="links-group connectus" style="margin-left: 80px;float: left;">
	                            <h4>LIÊN KẾT</h4>
	                            <a href="http://udn.vn/" target="_blank">Trang Đại Học Đà Nẵng</a><br>
	                            <a href="http://dut.udn.vn/" target="_blank">Trang Đại Học Bách Khoa</a><br>                            
	                            <a href="http://daotao.dut.udn.vn/" target="_blank">Trang Đào Tạo</a><br>
	                            <a href="http://daotao.dut.udn.vn/sv" target="_blank">Hệ thống trang tín chỉ</a><br>
	                            <a href="http://ctsv.dut.udn.vn/" target="_blank">Phòng công tác sinh viên</a><br>
	                            <a href="http://yu.dut.udn.vn/" target="_blank">Đoàn Trường Bách Khoa</a>
	                        </div>
	                    </div>
	                </div>
				</footer>		
				<!-- /footer -->
		  	</div>
		  	<!-- /main content -->
		  
	</div>
	  <!-- /main container -->
  
</div><div class="page-container">

  <!-- Page Sidebar -->
	<div class="page-sidebar">
	
		<!-- Site header  -->
		<header class="site-header">
		  <div class="site-logo"><a href="index.php"><img src="images/logo.png" alt="Mouldifi" title="Mouldifi"></a></div>
		  <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
		  <div class="sidebar-mobile-menu visible-xs"><a data-target="#side-nav" data-toggle="collapse" class="mobile-menu-icon" href="#"><i class="icon-menu"></i></a></div>
		</header>
		<!-- /site header -->
		
		<!-- Main navigation -->
		<ul id="side-nav" class="main-menu navbar-collapse collapse">
			
			<li class="has-sub"><a href="introduce.php"><i class="icon-layout"></i><span class="title">Ký Túc Xá</span></a>
				<ul class="nav collapse">
					<li><a href="introduce_index.php"><span class="title">Giới Thiệu</span></a></li>
					<li><a href="officials_index.php"><span class="title">Danh Sách Cán Bộ</span></a></li>
					<li><a href="listroom_index.php"><span class="title">Thông Tin Phòng</span></a></li>
				</ul>
			</li>

			<li class="has-sub"><a href="panels.html"><i class="icon-users"></i><span class="title">Người Dùng</span></a>
				<ul class="nav collapse">
					<!-- <li><a href="login.php"><span class="title">Đăng Nhập</span></a></li> -->
					<li><a href="index_user.php"><span class="title">Thông tin cá nhân </span></a></li>
					<li><a href="user_room_information.php"><span class="title">Thông tin phòng</span></a></li>	
					<li><a href="user_thongbao.php"><span class="title">Thông báo</span></a></li>					
					<li><a href="user_reported-missing.php"><span class="title">Báo vắng</span></a></li>					
					<li><a href="user_extend-room.php"><span class="title">Gia Hạn Phòng</span></a></li>
					<li><a href="user_request.php"><span class="title">Yêu Cầu</span></a></li>					
					<li><a href="user_service.php"><span class="title">Dịch Vụ</span></a></li>					
					<li><a href="feedback.php"><span class="title">Góp ý</span></a></li>
					
				</ul>
			</li>
			<!-- <li class="has-sub"><a href="basic-tables.html"><i class="icon-window"></i><span class="title">Hoạt Động Cư Trú</span></a>
				<ul class="nav collapse">
					<li><a href="registation-room.php"><span class="title">Đăng Ký Phòng</span></a></li>					 
					<li><a href="extend-room.html"><span class="title">Gia Hạn Phòng</span></a></li>					
					<li><a href="service.html"><span class="title">Dịch Vụ</span></a></li>
					<li><a href="request.html"><span class="title">Yêu Cầu</span></a></li>
				</ul>
			</li> -->
			<li class="other-activity.html"><a href="orther-activity_index.php"><i class="icon-doc-text"></i><span class="title">Hoạt Động Khác</span></a>
			</li>
			<li class="seach.html"><a href="seach.php"><i class="icon-search"></i><span class="title">Tìm Kiếm</span></a>
			</li>

		</ul>
		<!-- /main navigation -->		
  	</div>
  <!-- /page sidebar -->
  
	  <!-- Main container -->
	<div class="main-container">
	  
		<!-- Main header -->
			<div class="main-header row">

			  
				<div class="col-sm-6 col-xs-5 height-header1">
							<a href="index.php">
							<div id="header-logo-img">
		                        		<img src="images/logobk.jpg" alt = "HTML5 icon" width="60" >
		                        </div>
							<div id="header-logo-infologo">
		                            <h3><b>KÝ TÚC XÁ ĐẠI HỌC BÁCH KHOA</b></h3>
		                            <p>Dormitory of University of Science and Technology</p>
		                    </div>
		                        
		                        
		                    </a>
				</div>

			  		  <div class="col-sm-6 col-xs-7">
			  
				<!-- User info -->
				<ul class="user-info pull-left">          
				  <li class="profile-info dropdown" style="margin-left: 350px;margin-top: 10px;"> 
				  <?php 
	      				 if (isset($_SESSION['TaiKhoan'])){
	      				 	echo "<a data-toggle='dropdown' class='dropdown-toggle' href='index_user.php' aria-expanded='false'>
	      				 		<img width='44' class='img-circle avatar' alt='' src='images/nu.jpg'>{$_SESSION['TaiKhoan']}
	      				 		<span class='caret'></span></a>
	      				 		<ul class='dropdown-menu'>
					 			<li><a href='#'><i class='icon-cog'></i>Account settings</a></li>
					  			<li><a href='logout.php'><i class='icon-logout'></i>Logout</a></li>
								</ul>";
	      				 }
	      				 ?>
					<!-- /user action menu -->
					
				  </li>
				</ul>
				</div>
				<!-- /user info -->
			</div>
			<!-- /main header -->
		
		<!-- Main content -->
			<div class="main-content" >	
					<!-- Breadcrumb -->
				<ol class="breadcrumb breadcrumb-2"> 
					<li><a href="index.php"><i class="fa fa-home"></i>Home</a></li> 
					<li>Ký túc xá</li> 
					<li class="active"><strong>Thông tin sinh viên</strong></li> 
				</ol>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading clearfix">
								<h3 class="panel-title">Date Picker</h3>
								<ul class="panel-tool-options"> 
									<li><a data-rel="collapse" href="#"><i class="icon-down-open"></i></a></li>
									<li><a data-rel="reload" href="#"><i class="icon-arrows-ccw"></i></a></li>
									<li><a data-rel="close" href="#"><i class="icon-cancel"></i></a></li>
								</ul>
							</div>
							<div class="panel-body">
								<form class="form-horizontal">
									<div class="form-group"> 
										<label class="col-sm-3 control-label">Date Picker (inline)</label> 
										<div class="col-sm-5"> 
											<div id="datepicker"></div>
										</div> 
									</div>
									<div class="line-dashed"></div>
									<div class="form-group"> 
										<label class="col-sm-3 control-label">Date Picker (popup)</label> 
										<div class="col-sm-3"> 
											<div id="date-popup" class="input-group date"> 
												<input type="text" data-format="D, dd MM yyyy" class="form-control"> 
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
											</div>
										</div> 
									</div>
									<div class="line-dashed"></div>
									<div class="form-group"> 
										<label class="col-sm-3 control-label">One Year view</label> 
										<div class="col-sm-3"> 
											<div id="year-view" class="input-group date"> 
												<input id="year-view" type="text" value="03/04/2016" class="form-control"> 
												<span class="input-group-addon"><i class="fa fa-calendar"></i></span> 
											</div>
										</div> 
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-12">
						<div class="panel panel-default">
							<div class="panel-heading no-border clearfix" style="background: #58FAF4;"> 
								<h2 class="panel-title"><b>THÔNG TIN CÁ NHÂN</b></h2>
							</div> 
							<!-- panel body --> 
							<div class="panel-body">
								<div class="col-lg-10">
									<!-- Card Container -->
									<div class="cards-container default-view">
							
										<!-- Card -->
										<div class="card">
											
											<!-- Card Content -->
											<div class="card-content" style="margin-left: 0px;">
												<form action="controller_capnhatsv.php?do=capnhat" method="post" style="margin: auto; width: 950px">
													<table class="table">
														<?php 
															if(isset($_SESSION['TaiKhoan'])){
																include('DatabaseConnection.php');
																$tk = $_SESSION['TaiKhoan'];
																$sql = "SELECT TenSV,Email,GioiTinh,Lop,SDT FROM sinhvien where MaSV='$tk'";
																$query = mysqli_query($link,$sql);
																while($row = mysqli_fetch_array($query,MYSQL_ASSOC)){
																	echo "
																		<tr>
															<td> <label> Mã sinh viên: </label></td>
															<td> <input type='text' name='MaSV' value='{$tk}'/></td>
															<td> <label> Họ vào tên: </label></td>
															<td> <input type='text' name='HoTen' value='{$row['TenSV']}'/></td>
															<td> <label> Lớp: </label> </td>
															<td> <input type='text' name='Lop' value='{$row['Lop']}'/></td>
														</tr>
														<tr>
															<td> <label> Giới tính: </label> </td>
															<td> 
																<select name='GioiTinh'>";
																	if($row['GioiTinh']=='Nam'){
																		echo"<option value='Nam' selected>Nam</option>	
																		<option value='Nữ'>Nữ</option>";
																	}else{
																		echo"<option value='Nam'>Nam</option>
																		<option value='Nữ' selected>Nữ</option>";	
																	}	
																echo"
																</select>
															</td>
															<td> <label> Ngày sinh: </label> </td>
																<td><div id='date-popup' class='input-group date'> 
															<input type='text' data-format='D, dd MM yyyy' class='form-control'> 
														<span class='input-group-addon'><i class='fa fa-calendar'></i></span> 
															</div></td>
														 
															<td> <label> Nơi sinh: </label> </td>
															<td> <input type='text' name='NoiSinh' value='' /></td>
														</tr>
														<tr>
															<td> <label> Số điện thoại: </label></td>
															<td> <input type='text' name='sdt' value='{$row['SDT']}'/></td>
															<td> <label> Email: </label> </td>
															<td> <input type='text' name='Email' value='{$row['Email']}' style='width: 182px;'/></td>
														</tr>
														<tr>
															<td><input type='submit' name='capnhat' value='Cập nhật' /></td>
														</tr>";
																}	
															}
														?>
													</table>
												</form>
											</div>
											<!-- /card content -->			
										</div>
										<!-- /card -->
									</div>
								<!-- /card container -->
								</div>
							<!--/panel body -->
							</div>
						<!--/panel panel default-->
						</div>
					</div>
				</div>
				<!--/row-->	 			  		
		

				<!-- Footer -->
				<footer class="footer-main"> 				
					<div class="container">
	                    <div id="footer-content-nav">
	                        <div id="footer-content-nav-brand" style="float: left;">
	                            <h4><a href="#"><b>KÝ TÚC XÁ ĐẠI HỌC BÁCH KHOA</b></a></h4>
	                        </div>
	                        <div id="footer-content-nav-links" style="float: right;">
	                            <a href="#"><span class="glyphicon glyphicon-open" aria-hidden="true"></span></a>
	                        </div>
	                    </div>
	                    <div id="footer-content-links" style="padding-top: 10px">
	                        <div class="links-group contact" style="float: left;">
	                            <h4>LIÊN HỆ</h4>
	                            <p>Ban quản lý KTX - Đại học Bách Khoa.</p>
	                            <p>Địa chỉ: 60 Ngô Sĩ Liên, phường Hòa Khánh, quận Liên Chiểu, TP.Đà Nẵng.</p>
	                            <p>Tel: 0511.3736.936</p>
	                            <p>Email: ktxbk.dn@gmail.com</p>
	                        </div>
	                        <div class="links-group connectus" style="margin-left: 80px;float: left;">
	                            <h4>LIÊN KẾT</h4>
	                            <a href="http://udn.vn/" target="_blank">Trang Đại Học Đà Nẵng</a><br>
	                            <a href="http://dut.udn.vn/" target="_blank">Trang Đại Học Bách Khoa</a><br>                            
	                            <a href="http://daotao.dut.udn.vn/" target="_blank">Trang Đào Tạo</a><br>
	                            <a href="http://daotao.dut.udn.vn/sv" target="_blank">Hệ thống trang tín chỉ</a><br>
	                            <a href="http://ctsv.dut.udn.vn/" target="_blank">Phòng công tác sinh viên</a><br>
	                            <a href="http://yu.dut.udn.vn/" target="_blank">Đoàn Trường Bách Khoa</a>
	                        </div>
	                    </div>
	                </div>
				</footer>		
				<!-- /footer -->
		  	</div>
		  	<!-- /main content -->
		  
	</div>
	  <!-- /main container -->
  
</div>
  
</div>

<!--Load JQuery-->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/plugins/metismenu/jquery.metisMenu.js"></script>
<script src="js/plugins/blockui-master/jquery-ui.js"></script>
<script src="js/plugins/blockui-master/jquery.blockUI.js"></script>
<!--nouiSlider-->
<script src="js/plugins/nouislider/nouislider.min.js"></script>
<!-- Input Mask-->
<script src="js/plugins/jasny/jasny-bootstrap.min.js"></script>
<!-- Select2-->
<script src="js/plugins/select2/select2.full.min.js"></script>
<!--Bootstrap ColorPicker-->
<script src="js/plugins/colorpicker/bootstrap-colorpicker.min.js"></script>
<!--Bootstrap DatePicker-->
<script src="js/plugins/datepicker/bootstrap-datepicker.js"></script>
<script>
	$(document).ready(function () {
		$('#datepicker').datepicker({
			keyboardNavigation: false,
			forceParse: false,
			todayHighlight: true
		});

		$('#date-popup').datepicker({
			keyboardNavigation: false,
			forceParse: false,
			todayHighlight: true
		});

		$('#year-view').datepicker({
			startView: 2,
			keyboardNavigation: false,
			forceParse: false,
			format: "mm/dd/yyyy"
		});

		var dragFixed = document.getElementById('drag-fixed');
		noUiSlider.create(dragFixed, {
			start: [40, 60],
			behaviour: 'drag-fixed',
			connect: true,
			range: {
				'min': 20,
				'max': 80
			}
		});

		var basicSlider = document.getElementById('basic-slider');
		noUiSlider.create(basicSlider, {
			start: 40,
			behaviour: 'tap',
			connect: 'upper',
			range: {
				'min': 20,
				'max': 80
			}
		});

		var rangeSlider = document.getElementById('range-slider');
		noUiSlider.create(rangeSlider, {
			start: [40, 60],
			behaviour: 'drag',
			connect: true,
			range: {
				'min': 20,
				'max': 80
			}
		});

		$(".select2").select2();
		$(".select2-placeholer").select2({
			allowClear: true
		});

		//$('.colorpicker').colorpicker();

		// Colorpicker
		if ($.isFunction($.fn.colorpicker))
		{
			$(".colorpicker").each(function (i, el)
			{
				var $this = $(el);
				var  opts = {
							//format: attrDefault($this, 'format', false)
						};
				var $nextEle = $this.next();
				var $prevEle = $this.prev();
				var $colorPreview = $this.siblings('.input-group-addon').find('.icon-color-preview');

				$this.colorpicker(opts);

				if ($nextEle.is('.input-group-addon') && $nextEle.has('span'))
				{
					$nextEle.on('click', function (ev)
					{
						ev.preventDefault();
						$this.colorpicker('show');
					});
				}

				if ($prevEle.is('.input-group-addon') && $prevEle.has('span'))
				{
					$prevEle.on('click', function (ev)
					{
						ev.preventDefault();
						$this.colorpicker('show');
					});
				}

				if ($colorPreview.length)
				{
					$this.on('changeColor', function (ev) {

						$colorPreview.css('background-color', ev.color.toHex());
					});

					if ($this.val())
					{
						$colorPreview.css('background-color', $this.val());
					}
				}
			});
		}
	});
</script>
<script src="js/functions.js"></script>
</body>

<!-- Mirrored from g-axon.com/mouldifi-3.0/light/form-advanced.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2016 02:49:18 GMT -->
</html>
