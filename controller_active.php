<?php 
	session_start();
	include('DatabaseConnection.php');
	$active = $_GET['active'];
	$masv = $_SESSION['masv'];
	$query = mysqli_query($link,"SELECT MaSV,TenSV,GioiTinh,Email,SDT,MaPhong,Lop,NgayDatCho,NgayBatDau,NgayKetThuc,active FROM quanlydatcho WHERE MaSV='$masv' and active='$active'");
	
	if (mysqli_num_rows($query) != 0) {
		while($row = mysqli_fetch_array($query)){
			$maP =  $row['MaPhong'];
			$sql1 = "INSERT INTO sinhvien(MaSV,TenSV,Email,GioiTinh,Lop,SDT,MaPhong) VALUES('{$masv}','{$row['TenSV']}','{$row['Email']}','{$row['GioiTinh']}','{$row['Lop']}','{$row['SDT']}','$maP')";
			$sql2 = "INSERT INTO hopdong(NgayBatDau,NgayKetThuc,NgayTao,ChiPhi6Thang,MaSV) VALUES('{$row['NgayBatDau']}','{$row['NgayKetThuc']}','{$row['NgayDatCho']}',500000,'{$masv}')";

			$sql3 = "UPDATE phong set SoLuongNgO = SoLuongNgO+1 where MaPhong = '$maP'";
			$sql4 = "UPDATE taikhoan set active = 1 where TaiKhoan = '$masv'";
			$rssinhvien = mysqli_query($link,$sql1);
			$rshopdong = mysqli_query($link,$sql2);
			$rsphong = mysqli_query($link,$sql3);
			$rstaikhoan = mysqli_query($link,$sql4);

			if($rssinhvien && $rshopdong && $rsphong && $rstaikhoan){
				$URL = "login.php";
        		header ("Location: $URL");
        		die();	
			}else{
				echo "loi cap nhat du lieu";
			}
		}
       
    }else{
    	echo "Active That Bai!";
    }
?>