<?php
$root = "../";  
include($root.'config/config.inc.php');
include($root.'config/comfunc.php');
include_once($root."field_mapping.php");
include_once($root."buildsearch.php");
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

  <title>Send Match</title>

  <!-- Custom fonts for this template-->
  <link href="../css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../css/viewprofile.css?ver=1.100001" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <link href="../css/theme.css?ver=100004" rel="stylesheet">

  
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
                $profile1 = $result->fetch_array();
            }

            
            $search_condition = createSearchFromProfile($profile1["ID"]);
            //print_r($search_condition);
            $pattern = "/\( `(.+?)`/i";
            if(preg_match_all($pattern, $search_condition, $match)){
                $matched_cols=$match[1];
            }

            $resultsperpage=10;
            $offset=0;
            if (strlen($search_condition)>0) {
                
                $final_query="select * from tblprofiles where ".$search_condition." LIMIT ".$resultsperpage." OFFSET ".$offset;
                $count_query="select count(*) from tblprofiles where ".$search_condition;
                //print_r($final_query);
                $count_result = $mysqli->query($count_query);
                $count = $count_result->fetch_array()[0];                
                $result =$mysqli->query($final_query);
            }else{
                
                print_r("No Matches found for criteria");
                exit;
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
                <div class="widget" style="margin:0 auto;margin-bottom: 20px;">
                    <div class="widget-header" style="background:#cd3162;">
                        <div class="title" style='color:white;'>Matches - <?php echo $count ?> results found</div>
                    </div>
                    <div class="widget-body" style="max-height:300px;overflow:auto;">
                        <table class="table table-striped table-bordered" width="100%">
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Photo</th>
                                    <th>Profile Id</th>
                                    <th>Name</th>
                                    <th>Details</th>
                                    <th style="width:210px;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php while($profile=$result->fetch_array()): ?>
                                    <tr>
                                    <td></td>
                                        <td>

                                        <?php
                        $profile_images = $mysqli->query('select `IMG PATH` from tblimages where PID='.$profile['ID']);
                        $images=$profile_images->fetch_array();

                        if(count($images)==0){
                          $images[0]="images/nophoto.png";
                        };
                      ?>
                      
                      <img src="<?php echo $root.$images[0]; ?>" height="150px" width="150px" class="img-fluid">
                                        </td>
                                        
                                        <td><?php echo getValue($profile,"ID"); ?></td>
                                        <td><?php echo getValue($profile,"FIRST NAME"); ?> <?php echo getValue($profile,"LAST NAME"); ?></td>
                                        <td>
                                            <?php

                                            echo "<ul class='matched_cols'>";
                                            for($i=0;$i<count($matched_cols);$i++){
                                                $db_cols= $matched_cols[$i];
                                                echo nl2br("<li class='pp'><b>".$db_cols."</b> : ".getValue($profile,$db_cols)."</li>");
                                            }
                                            echo "</ul>";

                                            

                                            ?>
                                        </td>
                                        <td>


                                        <a target="_blank" title="View" href="/profile/viewprofile.php?profilechecksum=<?php echo getValue($profile,"ID") ?>" class="btn btn-sm btn-primary btn-matches"><i class="glyphicon glyphicon-eye-open"></i> View Profile</a>
                                        <a target="_blank" title="Edit" href="/profile/previewPDF.php?profilechecksum=<?php echo getValue($profile,"ID") ?>" class="btn btn-sm btn-info btn-matches"><i class="glyphicon glyphicon-eye-open"></i> Preview PDF</a>
                                        <a href="javascript:void(0)" title="Share Client's Profile" prospect-id="<?php echo getValue($profile,"ID") ?>"  onclick="$" id="btn-share<?php echo getValue($profile,"ID") ?>" class="btn btn-sm btn-success btn-matches btn-share"><i class="glyphicon glyphicon-share"></i> Share Client's Profile</a>


                                        </td>
                                    </tr>
                                <?php endwhile; ?>
                            </tbody>

                        </table>
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
 <script src="/scripts/js/profile.js"></script>

 <script type="text/javascript">
          
           
          
    </script>

</body>

</html>