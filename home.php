<?php
$root = "./";  
include('config/config.inc.php');
$root='./';
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

  <title>Dashboard</title>

  <!-- Custom fonts for this template-->
  <link href="css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/css/fm.tagator.jquery.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <script type="text/javascript" src="/scripts/js/variables.js?ver=1.0000001"></script>

</head>

<body id="page-top">

  <!-- Page Wrapper -->
  <div id="wrapper">

    <!-- Sidebar -->
    <?php include 'include/sidebar.php';?>
    <!-- End of Sidebar -->

    <!-- Content Wrapper -->
    <div id="content-wrapper" class="d-flex flex-column">

      <!-- Main Content -->
      <div id="content">

        <!-- Topbar -->
        <?php include 'include/topbar.php';?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

          <!-- Page Heading -->
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>            
          </div>

          <!-- Content Row -->
          <div class="row">
						
          </div>

          <!-- Content Row -->

          <div class="row">

           
          </div>

          <!-- Content Row -->
          <div class="row">
						<div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Total Profiles</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                          $result =$mysqli->query("select count(*) from tblprofiles");
                          while($fetchdata=$result->fetch_array()){
                              $total_profiles=$fetchdata[0];                              
                              print_r("<a href='/profile/listprofile.php?type=total'>".$total_profiles."</a>");
                          }
                      ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>              
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Paid Profiles</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                          $result =$mysqli->query("select count(*) from tblprofiles where `client type`='PAID'");
                          while($fetchdata=$result->fetch_array()){
                            $paid_profiles=$fetchdata[0];
                            print_r("<a href='/profile/listprofile.php?type=paid'>".$paid_profiles."</a>");
                          }
                      ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Pay at Roka Profiles</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                          $result =$mysqli->query("select count(*) from tblprofiles where `client type`='Pay At Roka'");
                          while($fetchdata=$result->fetch_array()){
                            $pay_at_roka=$fetchdata[0];
                            print_r("<a href='/profile/listprofile.php?type=payatroka'>".$pay_at_roka."</a>");
                          }
                      ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">UnPaid Profiles</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <?php
                          $unpaid_profiles=$total_profiles-$paid_profiles-$pay_at_roka;
                          print_r("<a href='/profile/listprofile.php?type=unpaid'>".$unpaid_profiles."</a>");
                      ?></div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                    </div>
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Profiles By Data Taken From</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        
                        <input type="text" id="source" name="source" class="form-control"/>
                        
                      </div>
                    </div>
                    
                  </div>
                </div>
              </div>
              
            </div>
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">Client Type</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      <table width="100%">
                      <?php
                          $result =$mysqli->query("SELECT `client type`,count(*) as count FROM `tblprofiles` where `client type` in ('Lead','After First Meeting','Meeting','PostMeeting-WillDecide','Post Sample Will Decide','Rejected Completely') group by `CLIENT TYPE`");
                          while($fetchdata=$result->fetch_array()){                            
                            print_r("<tr><td><span style='font-size:9pt;'>".$fetchdata[0]."</span></td><td><a href='/profile/listprofile.php?type=".strtolower(str_replace(' ','',$fetchdata[0]))."'>".$fetchdata[1]."</a></td></tr>");
                          }
                      ?>
                      </table></div>
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
      <?php include 'include/footer.php';?>
      <!-- End of Footer -->

    </div>
    
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

 <?php include 'include/footer_main.php';?>
 <script src="/scripts/js/fm.tagator.jquery.js?ver=1.00000002"></script>
 <script type="text/javascript">
        $(document).ready(function () {

          $('#source').tagator({autocomplete: source,useDimmer: true,allowAutocompleteOnly: true,showAllOptionsOnFocus: true,maxTags:1});
          
          $("#source").on('change',function(e){
            var selectedvalue  = e.target.value;
            
              window.location.href = "/profile/listprofile.php?source="+selectedvalue;
            
          });
        });
  </script>

</body>

</html>
