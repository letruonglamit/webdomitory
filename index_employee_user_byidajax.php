<?php
	include('DatabaseConnection.php');
if(isset($_POST['msv'])){
		 $sql = "SELECT MaSV,TenSV,Email,NgaySinh,QueQuan,GioiTinh,Lop,SDT,MaPhong FROM sinhvien where MaSV={$_POST['msv']};";
		// echo $sql; exit();
	$query = mysqli_query($link,$sql);
	while($row = mysqli_fetch_array($query,MYSQL_ASSOC)){	
	$d = getdate(strtotime($row['NgaySinh']));
   $date= $d['mday'].'/'.$d['mon'].'/'.$d['year'];									
	echo "<div class='modal-dialog'>
		<div class='modal-content'>
		    <div class='modal-header'>
		        <button type='button' class='close' data-dismiss='modal'>&times;</button>
		        <h4 class='modal-title'>Chỉnh sửa thông tin</h4>
		    </div>
		    <form class='form-horizontal' action='' method=''>
		        <div class='row form-group'>
		            <div class='col-sm-3 col-sm-offset-1'>
		                <label class='control-label'>Mã sinh viên</label>
		            </div>
		            <div class='col-sm-6'>
		                <input type='email' class='form-control' name= 'masv' value='{$row['MaSV']}'>
		            </div>
		        </div>
		        <div class='row form-group'>
		            <div class='col-sm-3 col-sm-offset-1'>
		                <label class='control-label'>Mã phòng</label>
		            </div>
		            <div class='col-sm-6'>
		                <input type='email' class='form-control' name = 'maphong' value='{$row['MaPhong']}'>
		            </div>
		        </div>
		       <div class='row form-group'>
		            <div class='col-sm-3 col-sm-offset-1'>
		                <label class='control-label'>Tên sinh viên</label>
		            </div>
		            <div class='col-sm-6'>
		                <input type='email' class='form-control' name = 'tensv' value='{$row['TenSV']}'>
		            </div>
		        </div>
		         <div class='row form-group'>
		            <div class='col-sm-3 col-sm-offset-1'>
		                <label class='control-label'>Lớp</label>
		            </div>
		            <div class='col-sm-6'>
		                <input type='email' class='form-control' name = 'lop' value='{$row['Lop']}'>
		            </div>
		        </div>
		        <div class='row form-group'>
		            <div class='col-sm-3 col-sm-offset-1'>
		                <label class='control-label'>Ngày sinh</label>
		            </div>
		            <div class='col-sm-6'>
		                <input type='email' class='form-control' name = 'ngaysinh' value='$date'>
		            </div>
		        </div>
		        <div class='row form-group'>
		            <div class='col-sm-3 col-sm-offset-1'>
		                <label class='control-label'>Giới tính</label>
		            </div>
		            <div class='col-sm-6'>
		                <input type='email' class='form-control' name = 'gioitinh' value='{$row['GioiTinh']}'>
		            </div>
		        </div>
		        <div class='row form-group'>
		            <div class='col-sm-3 col-sm-offset-1'>
		                <label class='control-label'>Số điện thoại</label>
		            </div>
		            <div class='col-sm-6'>
		                <input type='email' class='form-control' name = 'sdt' value='{$row['SDT']}'>
		            </div>
		        </div>
		          <div class='row form-group'>
		            <div class='col-sm-3 col-sm-offset-1'>
		                <label class='control-label'>Email</label>
		            </div>
		            <div class='col-sm-6'>
		                <input type='email' class='form-control' name = 'email' value='{$row['Email']}'>
		            </div>
		        </div>
		        <div class='row form-group'>
		            <div class='col-sm-3 col-sm-offset-1'>
		                <label class='control-label'>Quê quán</label>
		            </div>
		            <div class='col-sm-6'>
		                <input type='email' class='form-control' id = 'quequan' value='{$row['QueQuan']}'>
		            </div>
		        </div>
		    </form>                                                      
		    <div class='modal-footer'>
		        <button type='button' class='btn btn-default' data-dismiss='modal' name='submit'>Submit</button>
		    </div>
		</div>
		</div>";
	}

}
?>