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

  <title>Search Result</title>

  <!-- Custom fonts for this template-->
  <link href="css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
    .profile {
      background-color: white;
    }
    .profile_txt {
      
      font-size: 14px;
      font-weight: 300;
      color: #353e4f;
    }
    .about_txt {
      white-space: nowrap;
      overflow: hidden;
      text-overflow: ellipsis;
    }
    .profile_link:hover {
      text-decoration: none;
    }
  </style>

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
          $page=0;          
          $resultsperpage = 20;
          if (isset($_REQUEST['page'])){
            $page = $_REQUEST['page'];
          }

          $offset = ($page * $resultsperpage);
          

          function addSearchParam($search_condition, $column, $db_header ) {
            if (strlen($column)>0){
              $data_split = explode(",",$column);
              $cond = "";
              foreach($data_split as $key => $value) {  
                $cond = $cond." or `".$db_header."`='".$value."'";
              }
              $cond = substr($cond,3);
              if(strlen($search_condition)>0){
                $search_condition = $search_condition." and (".$cond.") ";
              }else {
                $search_condition = $search_condition." (".$cond.") ";
              }
            }
            return $search_condition;
          }

            if(isset($_REQUEST['searchid'])){
              $result =$mysqli->query("select SEARCH from tblsearch where ID=".$_REQUEST['searchid']);
              $data=array();
              while($fetchdata=$result->fetch_array()){
                  $data=json_decode($fetchdata[0],true);
              }

              if (count($data)<1){
                echo "Search Not Found. Please goto Search Profile and Perform Search Again.";
                exit();
              }

              $search_condition="";
              $fromage= $data["fromage"];
              $toage = $data["toage"];
              if(strlen($fromage)>0){
                  $search_condition = $search_condition." TIMESTAMPDIFF(YEAR,DOB,current_date())>=".$fromage." and TIMESTAMPDIFF(YEAR,DOB,current_date())<=".$toage; 
              }
              //print_r($data);
              $search_condition = addSearchParam($search_condition,$data["religion"],"RELIGION");
              $search_condition = addSearchParam($search_condition,$data["caste"],"CASTE");
              $search_condition = addSearchParam($search_condition,$data["country"],"COUNTRY OF RESIDENCE");
              $search_condition = addSearchParam($search_condition,$data["state"],"STATE OF RESIDENCE");
              $search_condition = addSearchParam($search_condition,$data["open_for_divorce"],"Open For Divorcee");
              $search_condition = addSearchParam($search_condition,$data["open_for_outside_india"],"Open For Outside India");
              $search_condition = addSearchParam($search_condition,$data["marital_status"],"MARITAL STATUS");
              $search_condition = addSearchParam($search_condition,$data["manglik"],"MANGLIK");
              $search_condition = addSearchParam($search_condition,$data["believes_in_horoscope"],"BELIEVES IN HOROSCOPE ");
              $search_condition = addSearchParam($search_condition,$data["occupation"],"Occupation");
              $search_condition = addSearchParam($search_condition,$data["from_premium_institute"],"From Premium Institute");
              $search_condition = addSearchParam($search_condition,$data["residential_type"],"Residential Type");
              $search_condition = addSearchParam($search_condition,$data["affluence_level"],"AFFLUENCE LEVEL");
              $search_condition = addSearchParam($search_condition,$data["family_type"],"FAMILY TYPE");
              $search_condition = addSearchParam($search_condition,$data["willing_to_stay"],"Willing To Stay");
              $search_condition = addSearchParam($search_condition,$data["food_habits"],"FOOD HABITS");
              $search_condition = addSearchParam($search_condition,$data["drink"],"DRINK");
              $search_condition = addSearchParam($search_condition,$data["smoke"],"SMOKE");
              $search_condition = addSearchParam($search_condition,$data["looks"],"LOOKS");
              $search_condition = addSearchParam($search_condition,$data["body_type"],"BODY TYPE");
              $search_condition = addSearchParam($search_condition,$data["communication"],"Communication");
              $search_condition = addSearchParam($search_condition,$data["complexion"],"COMPLEXION");
              
              //print_r($search_condition);

              if (strlen($search_condition)>0) {
                
                $final_query="select * from tblprofiles where ".$search_condition." LIMIT ".$resultsperpage." OFFSET ".$offset;
                $count_query="select count(*) from tblprofiles where ".$search_condition;
                //print_r($final_query);
                $count_result = $mysqli->query($count_query);
                $count = $count_result->fetch_array()[0];                
                $result =$mysqli->query($final_query);
              }
              
             
              $totalPages = ceil($count / $resultsperpage);

            }
            

          ?>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $count; ?> Matches Found</h1>
            <div class="row">
              <div class="col-md-12">
                <div class="row">                  
                    <?php if ($page>0){ ?>
                      <a class="btn btn-primary mr-4" href="results.php?searchid=<?php echo $sid ?>&page=<?php echo $page-1 ?>">Prev</a>
                    <?php }; ?>
                  
                    <?php if ($page<$totalPages-1){ ?>
                      <a class="btn btn-primary" href="results.php?searchid=<?php echo $sid ?>&page=<?php echo $page+1 ?>">Next</a>
                    <?php }; ?>
                </div>
              </div>
            </div>
          </div>
            
          
          <div class="row">
            <div id='results' style='display:block;width:65%;'>
              <?php while($profile=$result->fetch_array()): ?>
              <div id='profile' class="pb-3">
                <a href="profile/viewprofile.php?profilechecksum=<?php echo $profile['ID']; ?>" class="profile_link">
                  <div class="row profile">                
                    <div class="col-md-4">
                      <?php
                        $profile_images = $mysqli->query('select `IMG PATH` from tblimages where PID='.$profile['ID']);
                        $images=$profile_images->fetch_array();

                        if(count($images)==0){
                          $images[0]="images/nophoto.png";
                        };
                      ?>
                      
                      <img src="<?php echo $images[0]; ?>" height="220px" width="220px">
                    </div>
                    <div class="col-md-6 profile_txt">
                      <div class="row">
                        <div class="pt-2">
                        <?php echo $profile['FIRST NAME']; ?> <?php echo $profile['LAST NAME']; ?>
                        </div>
                      </div>
                      <hr class="mt-2">
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
                      <div class="row pt-2">
                        <div class="about_txt">
                          <?php echo $profile['ABOUT'] ?>
                        </div>
                      </div>
                    </div>
                  </div>
                </a>
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
