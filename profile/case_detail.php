<?php
$root = "../";  
include($root.'config/config.inc.php');
include($root.'config/comfunc.php');
include_once($root."field_mapping.php");
is_login($root); 
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Case Detail</title>

  <!-- Custom fonts for this template-->
  <link href="../css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../css/viewprofile.css?ver=1.100001" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../css/theme.css?ver=100001" rel="stylesheet">

  
</head>

<body id="page-top" class="body_font">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include $root.'include/sidebar.php';?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include $root.'include/topbar.php';?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            
          </div>

          <!-- Content Row -->
          <div class="row">
						
          </div>

          <!-- Content Row -->

          <div class="row">

           
          </div>

          <?php 
          error_reporting(E_ERROR | E_PARSE);
          
          function getValue($profile1,$database_col_name){
                $actual_col=$database_col_name;
                if(array_key_exists($actual_col,$profile1)){
                    return htmlspecialchars($profile1[$actual_col],ENT_QUOTES,"UTF-8");
                }else{
                    return "Not filled in";
                }                
            }
            if(isset($_REQUEST['profilechecksum'])){
                $profile_id=$_REQUEST['profilechecksum'];
                $result =$mysqli->query("select * from tblprofiles where ID=".$_REQUEST['profilechecksum']);                
                $profile = $result->fetch_array();
            }

            ?>
        <div class="row">
            <div class="col-md-12">
                <div id="myalert">

                </div>
                <div>
                    <input type="hidden" id="profileid" value="<?php echo $profile["ID"] ?>"/>
                </div>
            </div>
            <div class="col-md-12">
                <div class="widget">
                    <div class="widget-header">
                        <div class="title">Actions done on Case</div>
                        <div style='float:right'>
                            <a class="btn btn-sm btn-primary" href="/profile/viewprofile.php?profilechecksum=<?php echo $profile_id; ?>" title="View Profile">View Profile</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="row">
            <div style="margin-bottom: 5px;;"></div>
        </div>
        <div class="row">
            <div class="col-sm-4 col-md-offset-4"></div>
            <div class="col-sm-4 col-md-offset-4">
                <div class="alert alert-success col-sm-12">
                <label class="title">Profile Status</label> : <?php echo getArrayValue($profile,'CALLING STATUS',"")?></div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-8">
                <div class="widget">
                    <div class="widget-header">
                        <label class="title1 col-sm-5 control-label2">Actions Done</label>
                        <label class="title1 col-sm-3 control-label2">Date</label>
                        <label class="title1 col-sm-1 control-label2">User</label>
                        <div style="float:right;">
                            <a href="#" class="btn btn-sm btn-primary" id="add_comment">Add Comment</a>
                        </div>
                    </div>
                    <div class="widget-body" id="comments_container">
                        <div class="row row-border-bottom">                            
                                <div class="col-sm-12">
                                    <label class="col-sm-5 control-label1">test Action</label>
                                    <label class="col-sm-3 control-label1">20-02-2022 12:00:00</label>
                                    <label class="col-sm-3 control-label1">20-02-2022 User</label>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="col-lg-12 col-md-12">
                    <div class="widget">
                        <div class="widget-header">
                            <label class="col-sm-6 control-label2">Actions</label>
                        </div>
                        <div class="widget-body">
                            <div class="row" style="margin:0">
                                <div class="col-sm-12" style="padding-right: 0px;padding-left: 0px;">
                                    <div class="col-sm-12 control-label1">
                                        <div class="col-sm-12">
                                            <label></label>
                                        </div>
                                        <div class="mt20" style="float:right;"><a target="_blank" title="Send Match" href="send_match.php?profilechecksum=<?php echo $profile["ID"]  ?>" class="btn btn-sm btn-primary">Send Matches</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
         

        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->

      <!-- Footer -->
      <?php include $root.'include/footer.php';?>
      <!-- End of Footer -->
      

    </div>
    <!-- End of Content Wrapper -->

    

  </div>
  <!-- End of Page Wrapper -->

 <?php include $root.'include/footer_main.php';?>

 <script src="/scripts/simpleDialog.min.js"></script>
 <script src="/scripts/js/profile.js?ver=100003"></script>

 <script type="text/javascript">
          
           
          
    </script>

</body>

</html>