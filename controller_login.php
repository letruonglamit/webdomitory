<?php 
    //Khai báo sử dụng session
    session_start();
 
//Khai báo utf-8 để hiển thị được tiếng việt
    header('Content-Type: text/html; charset=UTF-8');
 
//Xử lý đăng nhập
if (isset($_POST['login'])) 
{
    //Kết nối tới database
    include('DatabaseConnection.php');
     
    //Lấy dữ liệu nhập vào
    $taikhoan = $_POST['username'];
    $matkhau = $_POST['password'];
    // echo "tai khoan ".$taikhoan; die();
     
    // mã hóa pasword
    //$password = md5($password);
     
    //Kiểm tra tên đăng nhập có tồn tại không
    // echo "SELECT MaND,TaiKhoan,MatKhau,active FROM taikhoan WHERE TaiKhoan='$taikhoan'"; die();
    $query = mysqli_query($link,"SELECT MaND,TaiKhoan,MatKhau,active FROM taikhoan WHERE TaiKhoan='$taikhoan'");
    if (mysqli_num_rows($query) == 0) {
        $msg = "Tài khoản này không tồn tại.";
        include_once "login.php";      
        exit;
    }
    //Lấy mật khẩu trong database ra
    $row = mysqli_fetch_array($query);
     
    //So sánh 2 mật khẩu có trùng khớp hay không
    if ($matkhau != $row['MatKhau']) {
        $msg1 = "Mật khẩu này không đúng.";
        include_once "login.php";
        exit;
    }
    // }else{
    //     $_SESSION['TaiKhoan'] = $taikhoan;
    //     $URL = "index_user.php";
    //     header ("Location: $URL");
    //     die(); 
    // }

    if($row['active']==1){
            if($row['MaND'] == 1){        
            $_SESSION['TaiKhoan'] = $taikhoan;    
            $URL = "index_admin.php";
            header ("Location: $URL");
            die();    
        }else{
            if($row['MaND'] == 2){
                $_SESSION['TaiKhoan'] = $taikhoan;  
                $URL = "index-employee-user.php";
                header ("Location: $URL");
                die();    
            }else{
                $_SESSION['TaiKhoan'] = $taikhoan;  
                $URL = "index_user.php";
                header ("Location: $URL");
                die();
            }  
        } 
    }else{
        $msglogin = "Tài khoản chưa được kích hoạt. Vui lòng check Email để kích hoạt!";
        include_once "login.php";
        exit;
    }
    
    //Lưu tên đăng nhập    
}
?>
