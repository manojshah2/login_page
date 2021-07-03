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

  <title>Reports</title>

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
            <h1 class="h3 mb-0 text-gray-800">Reports</h1>            
          </div>

          <!-- Content Row -->
          <div class="row">
						
          </div>

          <!-- Content Row -->

          <div class="row">

           
          </div>

          <!-- Content Row -->
          <div class="row">
						<div class="col-xl-6 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><a href='#' id="comment_report"><i class="fa fa-download"></i> Comment Report</a></div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                        <div class="row">
                          <div class="col-md-6">
                            <input type="date" id="start_date" class="form-control"/>
                          </div>
                          <div class="col-md-6">
                            <input type="date" id="end_date" class="form-control"/>
                          </div>
                          
                        </div>
                      </div>
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-report fa-2x text-gray-300"></i>
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
 <script src="/scripts/js/moment.min.js?ver=1.00000002"></script>
 <script type="text/javascript">
        $(document).ready(function () {

         
          
          
          $("#start_date").val(moment().format("YYYY-MM-DD"));
          $("#end_date").val(moment().format("YYYY-MM-DD"));
          
          $(document).on('click', "#comment_report", function (e) {              
            
            var date=$("#start_date").val();
            var end_date=$("#end_date").val();
            var final_url="/api/downloadCommentReport.php?start_date="+date+"&end_date="+end_date;            
            $(this).attr('href', final_url);                
          });
        });
        
  </script>

</body>

</html>
