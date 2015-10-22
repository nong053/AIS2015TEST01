<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>AIS2015 | Dashboard</title>

    
    <!-- kendo ui resource start -->
	 
	<link rel="stylesheet" href="js/kendoCommercial/styles/kendo.common.min.css" />
	<link rel="stylesheet" href="js/kendoCommercial/styles/kendo.default.min.css" />

    <!-- kendo ui resource end -->
    
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Toastr style -->
    <link href="css/plugins/toastr/toastr.min.css" rel="stylesheet">

    <!-- Gritter -->
    <link href="js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
     <link href="css/custom.css" rel="stylesheet">

      <!-- Mainly scripts -->
   <script src="js/jquery-2.1.1.js"></script> 
    <!--  <script src="js/kendoCommercial/js/jquery.min.js"></script>-->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Flot -->
    <script src="js/plugins/flot/jquery.flot.js"></script>
    <script src="js/plugins/flot/jquery.flot.tooltip.min.js"></script>
    <script src="js/plugins/flot/jquery.flot.spline.js"></script>
    <script src="js/plugins/flot/jquery.flot.resize.js"></script>
    <script src="js/plugins/flot/jquery.flot.pie.js"></script>

    <!-- Peity -->
    <script src="js/plugins/peity/jquery.peity.min.js"></script>
    <script src="js/demo/peity-demo.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- jQuery UI -->
    <script src="js/plugins/jquery-ui/jquery-ui.min.js"></script>

    <!-- GITTER -->
    <script src="js/plugins/gritter/jquery.gritter.min.js"></script>

    <!-- Sparkline -->
    <script src="js/plugins/sparkline/jquery.sparkline.min.js"></script>

    <!-- Sparkline demo data  -->
    <script src="js/demo/sparkline-demo.js"></script>

    <!-- ChartJS-->
    <script src="js/plugins/chartJs/Chart.min.js"></script>

    <!-- Toastr -->
    <script src="js/plugins/toastr/toastr.min.js"></script>

	<!-- kendo ui resource end -->
   <!-- <script src="js/kendoCommercial/js/kendo.all.min.js"></script> -->
    
     <script src="//kendo.cdn.telerik.com/2015.3.930/js/kendo.all.min.js"></script>
     
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav metismenu" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/profile_small.jpg" />
                             </span>
                            <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">David Williams</strong>
                              
                             </span> <span class="text-muted text-xs block">Amin <!-- <b class="caret"></b></span> </span> --> </a>
                            <!--
                            <ul class="dropdown-menu animated fadeInRight m-t-xs">
                                <li><a href="profile.html">Profile</a></li>
                                <li><a href="contacts.html">Contacts</a></li>
                                <li><a href="mailbox.html">Mailbox</a></li>
                                <li class="divider"></li>
                                <li><a href="login.html">Logout</a></li>
                            </ul>
                            -->
                        </div>
                        <div class="logo-element">
                            IN+
                        </div>
                    </li>
                    <li class="active">
                        <a href="index.html"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li class="active"><a href="index.php?page=trend">Trend</a></li>
                            <li><a href="index.php?page=soot">Soot/Blower</a></li>
                            <li><a href="index.php?page=process_view">Process View</a></li>
                          
                        </ul>
                    </li>

                    <li class="active">
                        <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">ออกแบบ</span><span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level ">
                        	<li><a href="#">Design Trend Color</a></li>
                            <li><a href="index.php?page=design_trend"> Design Trend</a></li>
                            <li><a href="index.php?page=design_calculation">Design Calcultion</a></li>
                       
                        
                        </ul>
                    </li>
                    
                   
                    <li class="landing_link">
                        <a target="_blank" href="landing.html"><i class="fa fa-star"></i> <span class="nav-label">วิธีใช้งาน</span> <span class="label label-warning pull-right">NEW</span></a>
                    </li>
                    <li class="special_link">
                        <a href="package.html"><i class="fa fa-sign-out"></i> <span class="nav-label">ออกจากระบบ</span></a>
                    </li>
                </ul>

            </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
        <div class="row border-bottom">
        <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
        <div class="navbar-header">
            <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
           
        </div>
            <ul class="nav navbar-top-links navbar-right">
               
                <li>
                    <span class="m-r-sm text-muted welcome-message"><b>Analytical Information System</b></span>
                </li>
               
                <li class="dropdown">
                	
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-gears"></i> ทั่วไป
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                      
                        <li>
                            <div class="dropdown-messages-box">
                              
                                <div class="media-body ">
                             
                                   <i class="fa fa-users"></i> 
                                   <a href='index.php?page=statistics'>ดูข้อมูลการใช้งาน</a>
                                  
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                               
                                <div class="media-body ">
                                   
                                   <i class="fa fa-user"></i> 
                                   	<a href='index.php?page=addUser'>เพิ่มรายชื่อผู้ใช้งาน</a>
                               
                                </div>
                            </div>
                        </li>
                        
                      
                        <li class="divider"></li>
                        <li>
                            <div class="dropdown-messages-box">
                                
                                <div class="media-body ">
                               
                                    <i class="fa fa-gears"></i> 
                                    <a href='index.php?page=tagConfiguration'>Tag Configuration</a>
                                 
                                </div>
                            </div>
                        </li>
                        <li class="divider"></li>
                         <li>
                            <div class="dropdown-messages-box">
                               
                                <div class="media-body ">
                                 
                                   <i class="fa fa-gear"></i> 
                                   <a href='index.php?page=pointConfiguration'>Point Configuration</a>
                                   
                                </div>
                            </div>
                        </li>
                        
                        
                         <li class="divider"></li>
                         <li>
                            <div class="dropdown-messages-box">
                                
                                <div class="media-body ">
                                   
                                 <i class="fa fa-tasks"></i> 
                                  <a href='index.php?page=serverSetting'>Server Setting </a>
                                   
                                </div>
                            </div>
                        </li>
                      
                       
                    </ul>
                </li>
                <li class="dropdown">
                    <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                        <i class="fa fa-users"></i>  วิธีใช้งาน
                    </a>
                   
                </li>


                <li>
                    <a href="login.html">
                        <i class="fa fa-sign-out"></i> ออกจากระบบ
                    </a>
                </li>
                
            </ul>

        </nav>
        </div>
        
        		
                
        
        	  <!-- Main Content Start -->
        					<?php 
        					switch ($_GET['page']){
        						case 'design_trend':include 'design_trend.php';break;
        						case 'process_view':include 'process_view.php';break;
        						case 'trend':include 'trend.php';break;
        						case 'serverSetting':include 'serverSetting.php';break;
        						case 'pointConfiguration':include 'pointConfiguration.php';break;
        						case 'tagConfiguration':include 'tagConfiguration.php';break;
        						case 'addUser':include 'addUser.php';break;
        						case 'statistics':include 'statistics.php';break;
        						case 'design_calculation':include 'design_calculation.php';break;
        						case 'form_calculation':include 'form_calculation.php';break;
        						case 'soot':include 'soot.php';break;
        						
        					}
        					?>
         	<!-- Main Content End -->

                     
                <div class="footer">
                    <div class="pull-right">
                        AIS <strong>Client</strong> 2015.
                    </div>
                    <div>
                        <strong>Copyright</strong> Analytical Information System  &copy; 2014-2015
                    </div>
                </div>
            </div>
        </div>

        </div>
        
      


        </div>
    </div>

   

    
  
</body>
</html>
