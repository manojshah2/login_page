<?php
$root = "../";  
include($root.'config/config.inc.php');
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

  <title>Profile Page</title>

  <!-- Custom fonts for this template-->
  <link href="../css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
  <link href="../css/viewprofile.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">

  
</head>

<body id="page-top">

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
                $result =$mysqli->query("select * from tblprofiles where ID=".$_REQUEST['profilechecksum']);                
                $profile = $result->fetch_array();
            }

            ?>

          <!-- Content Row -->
          <div class="row">
		    <div class="col-md-8">
                <div id='profile' class="pb-3">
                
                  <div class="row profile">                
                    <div class="col-md-4">
                      <?php
                        $profile_images = $mysqli->query('select `IMG PATH` from tblimages where PID='.$profile['ID']);
                        $images=$profile_images->fetch_array();

                        if(count($images)==0){
                          $images[0]="images/nophoto.png";
                        };
                      ?>
                      
                      <img src="<?php echo $root.$images[0]; ?>" height="220px" width="220px">
                    </div>
                    <div class="col-md-8 profile_txt">
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
                  <div>
                          <a href="downloadPDF.php?profilechecksum=<?php echo $profile["ID"] ?>">Download PDF</a>
                      </div>
              </div>
            </div>
          </div>

          <div class="row">
              <div class="col-md-8 bg-white">
                  <div class="tabs-style-prf fontlig f15 prfp4 prfbr2 pos-rel">
                      <div class="moveline"></div>
                      <nav>
                          <ul class="clearfix">
                              <li data-attr="1">
                                  <a href="#section-a">
                                      <div class="sprite2 prfic8 mauto"></div>
                                      <div class="pt10">About Him</div>
                                  </a>
                              </li>
                              <li data-attr="2">
                                  <a href="#section-career">
                                      <div class="sprite2 prfic9 mauto"></div>
                                      <div class="pt10">Education & Career</div>
                                  </a>
                              </li>
                              <li data-attr="2">
                                  <a href="#section-family">
                                      <div class="sprite2 prfic10 mauto"></div>
                                      <div class="pt10">Family Details</div>
                                  </a>
                              </li>
                              <li data-attr="1">
                                  <a href="#section-d">
                                      <div class="sprite2 prfic11 mauto"></div>
                                      <div class="pt10">Desired Partner</div>
                                  </a>
                              </li>
                          </ul>
                      </nav>
                  </div>
              </div>
          </div>
          <div id="section-about" >
            <div class="row">
                <div class="col-md-8 bg-white pl-4 prfbr3">
                    <div class="row pt-4 pb-4">
                        <div class="col-md-10">
                            Profile managed by
                        </div>                      
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            About his family:<br><?php echo getValue($profile,'ABOUT FAMILY') ?>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-10">
                            Education: <?php echo getValue($profile,'UG') ?>
                        </div>
                    </div>
                    
                </div>
            </div>
          </div>
          <div id="section-career" >
              <div class="row">
                <div class="col-md-8 bg-white pl-4 pt-4 prfbr3">
                    <i class="sprite2 fl prfic12"></i>
                    <div class="fl">Education & Career</div>
                    <br>
                    <div class="pl27 prflist1 js-careerView">
                        <ul class="clearfix profile_education">
                            <li>
                                <p class="color12 pt15">Highest Education</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'UG') ?></p>
                            </li>
                            <li>
                                <p class="color12 pt15">School Name</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'SCHOOL NAME') ?></p>
                            </li>
                            <li>
                                <p class="color12 pt15">UG Degree</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'UG') ?></p>
                            </li>
                            <li>
                                <p class="color12 pt15">UG College</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'UG College') ?></p>
                            </li>
                            <li>
                                <p class="color12 pt15">Employed In</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'EMPLOYED IN') ?></p>
                            </li>
                            <li>
                                <p class="color12 pt15">Occupation</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'OCCUPATION') ?></p>
                            </li>
                            <li>
                                <p class="color12 pt15">Organization Name</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'COMPANY NAME') ?></p>
                            </li>
                            <li>
                                <p class="color12 pt15">Annual Income</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'ANNUAL INCOME') ?>-<?php echo getValue($profile,'ANNUAL INCOME2') ?></p>
                            </li>
                        </ul>

                    </div>
                </div>
              </div>
          </div>
          <div id="section-family" >
              <div class="row">
                  <div class="col-md-8 bg-white pl-4 pt-4 prfbr3">                    
                    <i class="sprite2 fl prfic14"></i>
                    <div class="fl">Family Details</div>
                    <br>
                    <div class="pl27 prflist1 js-careerView">
                        <ul class="clearfix profile_education">
                            <li>
                                <p class="color12 pt15">Mother's Occupation</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'MOTHER IS') ?></p>
                            </li>
                            <li>
                                <p class="color12 pt15">Father's Occupation</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'FATHER IS') ?></p>
                            </li>
                            <li>
                                <p class="color12 pt15">Sister(s)</p>
                                <?php 
                                    $sister="";
                                    $un_sister=getValue($profile,'UNMARRIED SISTER');
                                    $m_sister=getValue($profile,'MARRIED SISTERS');
                                    
                                    if (strpos($un_sister,"filled")!=false){
                                        $sister=$m_sister." married sister";
                                    }else{
                                        $sister=$un_sister." sister of which ".$m_sister." married";
                                    }
                                ?>
                                <p class="pt2 pr20"><?php echo $sister?></p>
                            </li>
                            <li>
                                <p class="color12 pt15">Brother(s)</p>
                                <?php 
                                    $brother="";
                                    $un_brother=getValue($profile,'UNMARRIED BROTHERS');
                                    $m_brother=getValue($profile,'MARRIED BROTHERS');
                                    
                                    if (strpos($un_broter,"filled")!=false){
                                        $brother=$m_brother." married sister";
                                    }else{
                                        $brother=$un_brother." brother of which ".$m_brother." married";
                                    }
                                ?>
                                <p class="pt2 pr20"><?php echo $brother ?></p>
                            </li>
                            <li>
                                <p class="color12 pt15">Gothra</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'GOTRA') ?></p>
                            </li>
                            
                            
                            <li>
                                <p class="color12 pt15">Family Income</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'FAMILY INCOME') ?>-<?php echo getValue($profile,'FAMILY INCOME2') ?></p>
                            </li>
                            <li>
                                <p class="color12 pt15">Family Type</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'FAMILY TYPE') ?></p>
                            </li>
                            <li>
                                <p class="color12 pt15">Family Values</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'FAMILY VALUE') ?></p>
                            </li>
                            <li>
                                <p class="color12 pt15">Family based out of</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'FAMILY BASED OUT OF') ?></p>
                            </li>
                        </ul>
                    </div>


                  
              </div>
          </div>
          <div id="section-lifestyle">
            <div class="row">
                <div class="col-md-8 bg-white pl-4 pt-4 prfbr3">
                     <i class="sprite2 fl prfic37"></i>
                    <div class="fl">Lifestyle</div>
                    <br>
                    <div class="pl27 prflist1 js-careerView">
                        <ul class="clearfix profile_education">
                            <li>
                                <p class="color12 pt15">Habits</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'FOOD HABITS') ?></p>
                            </li>
                            <li>
                                <p class="color12 pt15">Assets</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'Property Details') ?></p>
                            </li>
                            
                            <li>
                                <p class="color12 pt15">Residential Status</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'Residential Status') ?></p>
                            </li>
                            <li>
                                <p class="color12 pt15">Special Case</p>
                                <p class="pt2 pr20"><?php echo getValue($profile,'SPECIAL CASE') ?></p>
                            </li>
                            
                        </ul>
                    </div>                
              </div>
          </div>
          <div id="section-d" >
          <div class="row">
                <div class="col-md-8 bg-white pl-4 pt-4 prfbr3">
                    <i class="sprite2 fl prfic26 mt6"></i>
                    <div class="fl colr5 pl8 f17 pt3">Desired Partner</div>


                
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

</body>

</html>
