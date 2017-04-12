<html lang="en">


<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Mouldifi - A fully responsive, HTML5 based admin theme">
    <meta name="keywords" content="Responsive, HTML5, admin theme, business, professional, Mouldifi, web design, CSS3">
    <title>KTX DHBK Đà Nẵng</title>
    <!-- Site favicon -->
    <link href="images/favicon.ico" rel="shortcut icon" type="image/x-icon">
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

    <link href="css/mouldifi-forms.css" rel="stylesheet">



    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="js/html5shiv.min.js"></script>
      <script src="js/respond.min.js"></script>
<![endif]-->

    <!--[if lte IE 8]>
    <script src="js/plugins/flot/excanvas.min.js"></script>
<![endif]-->
</head>

<body>


    <div class="back-to-top1">

    </div>

    <!-- Page container -->
    <div class="page-container">

        <!-- Page Sidebar -->
        <div class="page-sidebar">

            <!-- Site header  -->
            <header class="site-header">
                <div class="site-logo">
                    <a href="index.html"><img title="Mouldifi" alt="Mouldifi" src="images/logo.png"></a>
                </div>
                <div class="sidebar-collapse hidden-xs"><a class="sidebar-collapse-icon" href="#"><i class="icon-menu"></i></a></div>
                <div class="sidebar-mobile-menu visible-xs"><a class="mobile-menu-icon" href="#" data-toggle="collapse" data-target="#side-nav"><i class="icon-menu"></i></a></div>
            </header>
            <!-- /site header -->

            <!-- Main navigation -->
            <ul class="main-menu navbar-collapse collapse" id="side-nav">

                <li class="index-user.html"><a href="index-employee-user.php"><i class="fa fa-users"></i><span class="title">Danh sách sinh viên</span></a></li>
                <li class="index-rom.html"><a href="index-employee-room.php"><i class="fa fa-building"></i><span class="title">Danh sách phòng</span></a></li>
                <li class="reservation.html"><a href="index_employee_reservation.html"><i class="fa fa-outdent"></i><span class="title">Danh sách đặt chổ</span></a></li>
                <li class="seach.html"><a href="error-404.html"><i class="fa fa-file-text"></i><span class="title">Danh sách hóa đơn</span></a></li>
                <li class="seach.html"><a href="error-404.html"><i class="fa fa-list-ol"></i><span class="title">Thống kê</span></a></li>
                <li class="seach.html"><a href="error-404.html"><i class="icon-search"></i><span class="title">Tìm Kiếm</span></a></li>

            </ul>
            <!-- /main navigation -->
        </div>
        <!-- /page sidebar -->

        <!-- Main container -->
        <div class="main-container gray-bg">

            <!-- Main header -->
            <div class="main-header row">


                <div class="col-sm-6 col-xs-5 height-header1">
                    <a href="index.html">
                        <div id="header-logo-img">
                            <img width="60" alt="HTML5 icon" src="images/logobk.jpg">
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
                            <a class="dropdown-toggle" aria-expanded="false" href="#" data-toggle="dropdown"> <img width="44" class="img-circle avatar" alt="" src="images/nu.png">Ngọc Trinh <span class="caret"></span></a>

                            <!-- User action menu -->
                            <ul class="dropdown-menu">
                                <li><a href="#"><i class="icon-cog"></i>Thông tin cá nhân</a></li>
                                <li><a href="#"><i class="icon-logout"></i>Logout</a></li>
                            </ul>
                            <!-- /user action menu -->

                        </li>
                    </ul>
                    <!-- /user info -->

                </div>
            </div>
            <!-- /main header -->

            <!-- Main content -->
            <div class="main-content">
                <h1 class="page-title">Đăng ký phòng</h1>
                <!-- Breadcrumb -->
                <ol class="breadcrumb breadcrumb-2">
                    <li><a href="index.html"><i class="fa fa-home"></i>Home</a></li>
                </ol>


            
            <div class="row ">
                <div class="col-lg-11 ">
                <div class="panel panel-default " style="position: static; zoom: 1; ">
                    <div class="panel-heading clearfix ">
                        <h3 class="panel-title ">Danh sách sinh viên đăng ký phòng</h3>
                        <ul class="panel-tool-options "> 
                            <li><a href="# " data-rel="reload "><i class="icon-arrows-ccw "></i></a></li>
                            
                        </ul>
                    </div>
                    <div class="panel-body ">
                        <div class="table-responsive ">
                            <table class="table table-striped " id="delete-row">
                                <thead> 
                                    <tr> 
                                        <th>#</th> 
                                        <th>Mã SV</th> 
                                        <th>Mã phòng</th> 
                                        <th>Tên SV</th> 
                                        <th>Ngày sinh</th>
                                        <th>Giới tính</th>
                                        <th>Số DT</th>
                                        <th>Ngày bắt đầu</th>


                                    </tr> 
                                </thead> 
                                <tbody> 
                                    <tr> 
                                        <th scope="row ">1</th> 
                                        <td>102130154</td> 
                                        <td>B123</td> 
                                        <td>Lê Trường Lâm</td>
                                        <td>02/03/1995</td>
                                        <td>Nam</td>
                                        <td>01642353805</td>
                                        <td>17/01/2017</td>                                         
                                        <td><button class="btn btn-success btn-xs remove" type="button" data-original-title="Remove from list"> <i class="icon-check"></i> </button></td>
                                        <td><button class="btn btn-red btn-xs remove" type="button" data-original-title="Remove from list"> <i class="icon-cancel"></i> </button></td>

                
                                    <tr> 
                                        <th scope="row ">2</th> 
                                        <td>102130154</td> 
                                        <td>B123</td> 
                                        <td>Phạm Thị Quỳnh Anh</td>
                                        <td>02/03/1995</td>
                                        <td>Nam</td>
                                        <td>01642353805</td>
                                        <td>17/01/2017</td> 
                                        <td><button class="btn btn-success btn-xs remove" type="button" data-original-title="Remove from list"> <i class="icon-check"></i> </button></td>
                                        <td><button class="btn btn-red btn-xs remove" type="button" data-original-title="Remove from list"> <i class="icon-cancel"></i> </button></td>

                                    </tr> 
                                    <tr> 
                                        <th scope="row ">1</th> 
                                        <td>102130154</td> 
                                        <td>B123</td> 
                                        <td>Lê Trường Lâm</td>
                                        <td>02/03/1995</td>
                                        <td>Nam</td>
                                        <td>01642353805</td>
                                        <td>17/01/2017</td> 
                                       <td><button class="btn btn-success btn-xs remove" type="button" data-original-title="Remove from list"> <i class="icon-check"></i> </button></td>
                                        <td><button class="btn btn-red btn-xs remove" type="button" data-original-title="Remove from list"> <i class="icon-cancel"></i> </button></td>


                                    </tr> 
                
                                    <tr> 
                                        <th scope="row ">2</th> 
                                        <td>102130154</td> 
                                        <td>B123</td> 
                                        <td>Phạm Thị Quỳnh Anh</td>
                                        <td>02/03/1995</td>
                                        <td>Nam</td>
                                        <td>01642353805</td>
                                        <td>17/01/2017</td> 
                                       <td><button class="btn btn-success btn-xs remove" type="button" data-original-title="Remove from list"> <i class="icon-check"></i> </button></td>
                                        <td><button class="btn btn-red btn-xs remove" type="button" data-original-title="Remove from list"> <i class="icon-cancel"></i> </button></td>


                                    </tr> 
                                    <tr> 
                                        <th scope="row ">1</th> 
                                        <td>102130154</td> 
                                        <td>B123</td> 
                                        <td>Lê Trường Lâm</td>
                                        <td>02/03/1995</td>
                                        <td>Nam</td>
                                        <td>01642353805</td>
                                        <td>17/01/2017</td> 
                                        <td><button class="btn btn-success btn-xs remove" type="button" data-original-title="Remove from list"> <i class="icon-check"></i> </button></td>
                                        <td><button class="btn btn-red btn-xs remove" type="button" data-original-title="Remove from list"> <i class="icon-cancel"></i> </button></td>


                                    </tr> 
                
                                    <tr> 
                                        <th scope="row ">2</th> 
                                        <td>102130154</td> 
                                        <td>B123</td> 
                                        <td>Phạm Thị Quỳnh Anh</td>
                                        <td>02/03/1995</td>
                                        <td>Nam</td>
                                        <td>01642353805</td>
                                        <td>17/01/2017</td> 
                                        <td><button class="btn btn-success btn-xs remove" type="button" data-original-title="Remove from list"> <i class="icon-check"></i> </button></td>
                                        <td><button class="btn btn-red btn-xs remove" type="button" data-original-title="Remove from list"> <i class="icon-cancel"></i> </button></td>
                                    </tr> 

                                </tbody> 
                            </table>
                        </div>
                    </div>
                </div>
                </div>
            </div>


            <div class="row ">
                
            </div>
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

<div class="fixed ">
    <a href="https://www.facebook.com/Dormitory-DUT-560787624081622/ " targer="_blank "><img width="35 " class="fa-fa-fmxx " alt="HTML5 icon " src="images/fb.png "></a>
    <a href="https://twitter.com " target="_blank "><img width="35 " class="fa-fa-fmxx " alt="HTML5 icon " src="images/tw.png ">    </a> 
    <a href="https://www.youtube.com/user/googleplusupdates " target="_blank "><img width="35 " class="fa-fa-fmxx " alt="HTML5 icon " src="images/gp.png "> </a>                        
</div>
<!--Load JQuery-->
<script src="js/jquery.min.js "></script>
<script src="js/bootstrap.min.js "></script>
<script src="js/plugins/metismenu/jquery.metisMenu.js "></script>
<script src="js/plugins/blockui-master/jquery-ui.js "></script>
<script src="js/plugins/blockui-master/jquery.blockUI.js "></script>
<!--Float Charts-->
<script src="js/plugins/flot/jquery.flot.min.js "></script>
<script src="js/plugins/flot/jquery.flot.tooltip.min.js "></script>
<script src="js/plugins/flot/jquery.flot.resize.min.js "></script>
<script src="js/plugins/flot/jquery.flot.selection.min.js "></script>        
<script src="js/plugins/flot/jquery.flot.pie.min.js "></script>
<script src="js/plugins/flot/jquery.flot.time.min.js "></script>
<script src="js/functions.js "></script>

<!--ChartJs-->
<script src="js/plugins/chartjs/Chart.min.js "></script>


<script type='text/javascript'>
$(window).load(function(){<!--from   w  w  w.  ja v a 2s.  c  om-->
$(function () {
    $("table#delete-row").on("click", ".remove", function () {
        $(this).closest('tr').remove();
    });
});
$(function () {
    $(".show_tip").tooltip({
        container: 'body'
    });
});
$(document).click(function () {
    $('.tooltip').remove();
    $('[title]').tooltip();
});
});
</script>
</body>
<!-- Mirrored from g-axon.com/mouldifi-3.0/light/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 12 Nov 2016 02:48:19 GMT -->

</html>
