<?php 
	session_start();
	header('Content-Type: text/html; charset=UTF-8');
	if (isset($_POST['capnhat'])) {	
		include('DatabaseConnection.php');
		$masv = $_POST['MaSV'];
		echo "$masv";
		$tensv = $_POST['HoTen'];		
		$lop = $_POST['Lop'];
		$gt = $_POST['GioiTinh'];
		$dateofbirth = $_POST['dateofbirth'];
		$d = getdate(strtotime($dateofbirth));
    	$date = $d['year'].'-'.$d['mon'].'-'.$d['mday'];
    	echo "$date";
		$noisinh = $_POST['NoiSinh'];
		$sdt = $_POST['sdt'];
		$email = $_POST['Email'];

		$rssinhvien = mysqli_query($link,"UPDATE sinhvien set TenSV='$tensv',Email='$email',NgaySinh='$date',QueQuan='$noisinh',GioiTinh='$gt',Lop='$lop',SDT='$sdt' where MaSV='$masv'");
		if($rssinhvien){
	        $_SESSION['masv'] = $masv;
	    	$URL = "index_user.php";
	        header ("Location: $URL");
    	}else{
    		echo "Lỗi cập nhập cơ sở dữ liệu";
   		}
	}
?>