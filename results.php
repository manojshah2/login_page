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

  <title>Admin Page</title>

  <!-- Custom fonts for this template-->
  <link href="css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
          

          
          <!-- Content Row -->
          
          <?php
          error_reporting(E_ERROR | E_PARSE);
          $sid=$_REQUEST['searchid'];
            if(isset($_REQUEST['searchid'])){
              $result =$mysqli->query("select SEARCH from tblsearch where ID=".$_REQUEST['searchid']);
              $data='';
              while($fetchdata=$result->fetch_array()){
                  $data=json_decode($fetchdata[0],true);
              }

              $search_condition="";
              $fromage= $data["fromage"];
              $toage = $data["toage"];
              if(strlen($fromage)>0){
                  $search_condition = $search_condition." TIMESTAMPDIFF(YEAR,DOB,current_date())>=".$fromage." and TIMESTAMPDIFF(YEAR,DOB,current_date())<=".$toage; 
              }
              $final_query="select * from tblprofiles where ".$search_condition;
              //print_r($final_query);
              $result =$mysqli->query($final_query);
            }
            

          ?>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo mysqli_num_rows($result); ?> Results Found</h1>            
          </div>
            
          
          <div class="row">
            <div id='results' style='display:block;width:65%;'>
              <?php while($profile=$result->fetch_array()): ?>
              <div id='profile' class="pb-3">
                <div class="row">
                  <div class="col-md-4">
                    <?php
                      $profile_images = $mysqli->query('select `IMG PATH` from tblimages where PID='.$profile['ID']);
                      $images=$profile_images->fetch_array();

                      if(strlen($images)==0){
                        $images[0]="Default";
                      };
                    ?>
                    
                    <img src="<?php echo $images[0]; ?>" height="220px" width="220px">
                  </div>
                  <div class="col-md-8">
                    <div class="row">
                      <?php echo $profile['FIRST NAME']; ?> <?php echo $profile['LAST NAME']; ?>
                    </div>
                    <hr>
                    <div class="row">
                      <div class="col-md-5">
                        <div class="mb-0"><?php echo $profile['HEIGHT']; ?></div>
                        <div class="mb-0"><?php echo $profile['CITY']; ?></div>
                        <div class="mb-0"><?php echo $profile['RELIGION']; ?></div>
                        <div class="mb-0"><?php echo $profile['CASTE']; ?></div>
                      </div>
                      <div class="col-md-5">
                        <div class="mb-0"><?php echo $profile['EDUCATION']; ?></div>
                        <div class="mb-0"><?php echo $profile['EMPLOYED AS']; ?></div>
                        <div class="mb-0"><?php echo $profile['ANNUAL INCOME']; ?>-<?php echo $profile['ANNUAL INCOME2']; ?></div>
                        <div class="mb-0"><?php echo $profile['MARITAL STATUS']; ?></div>
                      </div>
                      <div class="col-md-2"></div>
                    </div>
                  </div>
                </div>
              </div>
              <?php endwhile; ?>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">

           
          </div>

          <!-- Content Row -->
          <div class="row">
			
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

</body>

</html>
