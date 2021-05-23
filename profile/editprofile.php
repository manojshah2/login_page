<?php
$root = "../";  
include($root.'config/config.inc.php');
include_once($root."config/db.php");
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

  <title>Profile</title>

  <!-- Custom fonts for this template-->
  <link href="/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/css/fm.tagator.jquery.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">

  <style>
  a[aria-expanded="true"]{
    background:#42b0f5;
    color:white;
  }
  .item{
    padding:5px 0px 2px 10px;
    margin:0px 0px -10px 0px;
    display:block;
  }
  
  </style>

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
            <h1 class="h3 mb-0 text-gray-800">Profile</h1>
            <div class="spinner-border spinner-border-sm d-none" id="profileSpinner" role="status">
                <span class="sr-only">Loading...</span>
            </div>            
            <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="createprofile">Update</a>
          </div>


          <!-- Content Row -->
          <div class="row">
						
          </div>

          <!-- Content Row -->

          <div class="row">
            <div id="profileMessage">
              
            </div>
           
          </div>

          <!-- Content Row -->
          <div class="row">
						<div class="col-*-3 pl-0">
              <ul class="pl-0">
                <li class="nav-link"><a href="#aboutme" class="item" data-toggle="collapse" aria-expanded="true">About Me</a></li>
                <li class="nav-link"><a href="#education" class="item" data-toggle='collapse'>Education & Career</a></li>
                <li class="nav-link"><a href="#familydetails" class="item" data-toggle='collapse'>Family Details</a></li>
                <li class="nav-link"><a href="#horoscope"  class="item" data-toggle='collapse'>Horoscope Details</a></li>
                <li class="nav-link"><a href="#identity" class="item" data-toggle='collapse'>Contact Details</a></li>
                <li class="nav-link"><a href="#looks_div" class="item" data-toggle='collapse'>Looks & Lifestyle</a></li>
                <li class="nav-link"><a href="#partner" class="item" data-toggle='collapse'>Partner Preference</a></li>
                <li class="nav-link"><a href="#calling" class="item" data-toggle='collapse'>Calling Status</a></li>
                <li class="nav-link"><a href="#lead" class="item" data-toggle='collapse'>Lead Generation</a></li>
                <li class="nav-link"><a href="#meeting" class="item" data-toggle='collapse'>Meeting Details</a></li>
                <li class="nav-link"><a href="#subscription"  class="item" data-toggle='collapse'>Subscription Status</a></li>
                <li class="nav-link"><a href="#miscellaneous" class="item" data-toggle='collapse'>Miscellaneous</a></li>
                <li class="nav-link" id="uploadLI"><a href="#upload_photos" class="item" data-toggle='collapse'>Upload Photos</a></li>
              </ul>
            </div>
            
            <div class="col-md-9">
            <form id='profileFrm' novalidate>
            <?php
              
              function getValue($profile1,$database_col_name){
                  global $header;
                  if(array_key_exists($database_col_name,$header)){
                    $actual_col=$header[$database_col_name];
                    if(array_key_exists($actual_col,$profile1)){
                      return htmlspecialchars($profile1[$actual_col],ENT_QUOTES,"UTF-8");
                    }else{
                      return "";
                    }
                  }else{
                    return "";
                  }
              }

              if(isset($_REQUEST['id']))
              {
                $id= addslashes($_REQUEST['id']);
                echo "<input type='hidden' name='uniqueId' id='uniqueId' value='".$id."'/>";
                $select_data1 = "select * from tblprofiles where ID='".$id."'"; 
                $profile_array = $mysqli->query($select_data1);
                $profile = $profile_array->fetch_array();

                
              }else{
                $profile=[];
              }
            ?>
                <div id='aboutme'  class='collapse in show'>

                  <div class="row">
                    
                      <div class="form-group col-md-4">
                        <label>Data Taken From</label>
                        <input type="text" class="form-control" name="source" id="source" value="<?php echo getValue($profile,"source"); ?>" />                        
                      </div>
                      <div class="form-group col-md-4">
                        <label>Reference</label>                        
                        <input type="text" class="form-control" name="reference" id="reference" value="<?php echo getValue($profile,"reference"); ?>"/>
                      </div>
                      <div class="form-group col-md-4">
                        <label>Client Type</label>                        
                        <input type="text" class="form-control" name="client_type1" id="client_type1" value="<?php echo getValue($profile,"client_type1"); ?>"/>
                      </div>
                      
                    </div>
                    <div class="row">
                      <div class="form-group col-md-4">
                        <label>Profile Id</label>                        
                        <input type="text" class="form-control" name="PID" value="<?php echo getValue($profile,"PID"); ?>"/>
                      </div>
                      <div class="form-group col-md-4">
                        <label>First Name</label>
                        <input type="text" class="form-control blur_text" name="first_name" value="<?php echo getValue($profile,"first_name"); ?>"/>
                      </div>
                      <div class="form-group col-md-4">
                        <label>Last Name</label>
                        <input type="text" class="form-control blur_text" name="last_name" value="<?php echo getValue($profile,"last_name"); ?>"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-3">
                        <label>Gender</label>
                        <input type="text" class="form-control blur_text" name="gender" id="gender" value="<?php echo getValue($profile,"gender"); ?>" />
                      </div>

                      <div class="form-group col-md-3">
                        <label>Marital Status</label>
                        <input type="text" class="form-control" name="marital_status" id="marital_status" value="<?php echo getValue($profile,"marital_status"); ?>" />
                      </div>

                      <div class="form-group col-md-3">
                        <label>Have Children</label>
                        <input type="text" class="form-control" name="has_children" id="has_children" value="<?php echo getValue($profile,"has_children"); ?>" />
                        
                      </div> 
                    

                      <div class="form-group col-md-3">
                        <label>Height</label>
                        <input type="text" class="form-control" name="height" id="height" value="<?php echo getValue($profile,"height"); ?>" />
                        
                      </div>
                  </div>

                  <div class="row">
                    <div class="form-group col-md-3">
                      <label>Occupation</label>
                      <input type="text" class="form-control" name="occupation" id="occupation" value="<?php echo getValue($profile,"occupation"); ?>" />                      
                    </div>
                    <div class="form-group col-md-3">
                      <label>Country of Residence</label>
                      <input type="text" class="form-control" name="country_of_residence" id="country_of_residence" value="<?php echo getValue($profile,"country_of_residence"); ?>" />                                                                    
                    </div>
                    <div class="form-group col-md-3">
                      <label>State of Residence</label>
                      <input type="text" class="form-control" disabled name="state_of_residence" id="state_of_residence" value="<?php echo getValue($profile,"state_of_residence"); ?>" />                                                                    
                    </div>

                    <div class="form-group col-md-3">
                      <label>CITY</label>
                      <input type="text" class="form-control" disabled name="city" id="city" value="<?php echo getValue($profile,"city"); ?>"  />
                    </div>

                    
                    
                  </div>  
                  <div class="row">

                      <div class="form-group col-md-3">
                        <label>Currency</label>
                        <input type="text" class="form-control" disabled name="income_currency" id="income_currency" value="<?php echo getValue($profile,"income_currency"); ?>" />                      
                      </div>
                      <div class="form-group col-md-6">
                        
                        
                        <div class="row">
                          <div class="col-md-6">
                          <label>Annual Income (From)</label>
                            <input type="text" class="form-control" disabled name="annual_income1" id="annual_income1" value="<?php echo getValue($profile,"annual_income1"); ?>" />                      
                          </div>
                          <div class="col-md-6">
                          <label>Annual Income (To)</label>
                            <input type="text" class="form-control" disabled name="annual_income2" id="annual_income2" value="<?php echo getValue($profile,"annual_income2"); ?>" />                      
                          </div>                        
                        </div>
                      </div>  
                    <div class="form-group col-md-3">
                      <label>Open for outside India</label>
                      <input type="text" class="form-control" name="open_for_outside_india" id="open_for_outside_india" value="<?php echo getValue($profile,"open_for_outside_india"); ?>"/>
                    </div>
                    
                    
                  </div>                 
                  <div class="row">
                    <div class="form-group col-md-3">
                        <label>Religion</label>
                        <input type="text" class="form-control" name="religion" id="religion" value="<?php echo getValue($profile,"religion"); ?>" />                                                                    
                        
                    </div>                    
                    <div class="form-group col-md-3 d-none" id="caste_div">
                        <label>Caste</label> 
                        <input type="text" class="form-control" name="caste" id="caste" value="<?php echo getValue($profile,"caste"); ?>" />                                                                                           
                        
                      </div>
                    <div class="form-group col-md-3">
                        <label>Sub-Caste</label>
                        <input type="text" class="form-control blur_text" name="sub_caste" value="<?php echo getValue($profile,"sub_caste"); ?>"/>
                    </div>
                    
                    

                    <div class="form-group col-md-3">
                      <label>Residential Status</label>
                      <input type="text" class="form-control" name="residential_status" id="residential_status" value="<?php echo getValue($profile,"residential_status"); ?>"  />
                      
                    </div>
                    <div class="form-group col-md-3">
                        <label>Mother Tongue</label>
                        <input type="text" class="form-control" name="mother_tongue" id="mother_tongue" value="<?php echo getValue($profile,"mother_tongue"); ?>"  />  
                        
                      </div>
                      
                      <div class="form-group col-md-3">
                        <label>Special Case</label>
                        <input type="text" class="form-control" name="special_case" id="special_case" value="<?php echo getValue($profile,"special_case"); ?>"  />  
                        
                      </div>
                      
                      <div class="form-group col-md-3">
                        <label>Criminal Record</label>
                        <input type="text" class="form-control blur_text" name="criminal_record" value="<?php echo getValue($profile,"criminal_record"); ?>"/>
                      </div>
                      <div class="form-group col-md-3">
                        <label>Willing to Stay independently?</label>
                        <input type="text" class="form-control" name="willing_to_stay" id="willing_to_stay" value="<?php echo getValue($profile,"willing_to_stay"); ?>"/>
                      </div>
                      <div class="form-group col-md-3">
                        <label>Open for divorcee</label>
                        <input type="text" class="form-control" name="open_for_divorcee" id="open_for_divorcee" value="<?php echo getValue($profile,"open_for_divorcee"); ?>"/>
                      </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                        <label>About Me</label>
                        <textarea class="form-control title_text" name="about" rows=5><?php echo getValue($profile,"about"); ?></textarea>
                    </div>
                    
                    
                  </div>
                </div>
              
              <div id='education' class='collapse'>
                <div class="row">                  
                <div class="form-group col-md-6">
                  <label>UG Degree</label>
                  <input type="text" class="form-control" name="ug" id="ug" value="<?php echo getValue($profile,"ug"); ?>"  />  
                  
                </div>
                <div class="form-group col-md-6">
                  <label>PG Degree</label>
                  <input type="text" class="form-control" name="pg" id="pg" value="<?php echo getValue($profile,"pg"); ?>"  />  
                </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                      <label>UG College</label>
                      <input type="text" class="form-control" name="ug_college" value="<?php echo getValue($profile,"ug_college"); ?>"/>
                    </div>
                    <div class="form-group col-md-6">
                      <label>PG College</label>
                      <input type="text" class="form-control" name="pg_college" value="<?php echo getValue($profile,"pg_college"); ?>"/>
                    </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>Employed In</label>
                    <input type="text" class="form-control" name="employed_in" id="employed_in" value="<?php echo getValue($profile,"employed_in"); ?>"/>
                    
                  </div>
                  <div class="form-group col-md-6">
                    <label>Employed As</label>
                    <input type="text" class="form-control" name="employed_as" id="employed_as" value="<?php echo getValue($profile,"employed_as"); ?>"/>
                    
                  </div>
                </div>
                <div class="row">
                    <div class="form-group col-md-6">
                      <label>Employed With</label>
                      <input type="text" class="form-control" name="employed_with" value="<?php echo getValue($profile,"employed_with"); ?>"/>
                    </div>
                    <div class="form-group col-md-6">
                      <label>School Name</label>
                      <input type="text" class="form-control" name="school_name" value="<?php echo getValue($profile,"school_name"); ?>"/>
                    </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-6">
                    <label>From Premium institute</label>
                    <input type="text" class="form-control" name="from_premium_institute" id="from_premium_institute" value="<?php echo getValue($profile,"from_premium_institute"); ?>"/>
                  </div>
                </div>
              </div>
              <div id='familydetails' class='collapse'>
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label>Father Name</label>
                      <input type="text" class="form-control blur_text" name="father_name" id="father_name" value="<?php echo getValue($profile,"father_name"); ?>"/>
                    </div>
                    <div class="form-group col-md-3">
                      <label>Father Occupation</label>
                      <input type="text" class="form-control" name="father_is" id="father_is" value="<?php echo getValue($profile,"father_is"); ?>"/>
                    </div>
                    <div class="form-group col-md-3">
                      <label>Mother Name</label>
                      <input type="text" class="form-control blur_text" name="mother_name" id="mother_name" value="<?php echo getValue($profile,"mother_name"); ?>"/>
                    </div>
                    <div class="form-group col-md-3">
                      <label>Mother Occupation</label>
                      <input type="text" class="form-control" name="mother_is" id="mother_is" value="<?php echo getValue($profile,"mother_is"); ?>"/>
                      
                    </div>
                  </div>
                  <div class="row">                  
                    <div class="form-group col-md-3">
                      <label>Family Value</label>
                      <input type="text" class="form-control" name="family_value" id="family_value" value="<?php echo getValue($profile,"family_value"); ?>"/>
                      
                    </div>
                    <div class="form-group col-md-3">
                      <label>Family Type</label>
                      <input type="text" class="form-control" name="family_type" id="family_type" value="<?php echo getValue($profile,"family_type"); ?>"/>
                      
                    </div>
                    <div class="form-group col-md-3">
                      <label>Native Country</label>
                      <input type="text" class="form-control" name="native_country" id="native_country" value="<?php echo getValue($profile,"native_country"); ?>"/>
                    </div>
                    <div class="form-group col-md-3">
                      <label>Native State</label>
                      <input type="text" class="form-control" name="native_state" id="native_state" value="<?php echo getValue($profile,"native_state"); ?>"/>                      
                      
                    </div>
                    
                  </div>
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label>Currency</label>
                      <input type="text" class="form-control" disabled name="family_income_currency" id="family_income_currency" value="<?php echo getValue($profile,"family_income_currency"); ?>" />                      
                    </div>
                    <div class="form-group col-md-6">
                      
                      
                      <div class="row">
                        <div class="col-md-6">
                          <label>Family Income (From)</label>
                          <input type="text" class="form-control" disabled name="family_income" id="family_income" value="<?php echo getValue($profile,"family_income"); ?>"/>                                              
                          
                        </div>
                        <div class="col-md-6">
                          <label>Family Income (To)</label>
                          <input type="text" class="form-control" disabled name="family_income2" id="family_income2" value="<?php echo getValue($profile,"family_income2"); ?>"/>                                              
                          
                        </div>
                      </div>                      
                    </div>
                   
                    
                    
                  </div>
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label>Affluence Level</label>
                      <input type="text" class="form-control" name="affluence_level" id="affluence_level" value="<?php echo getValue($profile,"affluence_level"); ?>"/>
                      
                    </div>
                    
                    <div class="form-group col-md-3">
                      <label>Net Worth</label>
                      <input type="text" class="form-control" name="net_worth" id="net_worth" value="<?php echo getValue($profile,"net_worth"); ?>"/>
                    </div>
                    <div class="form-group col-md-3">
                      <label>Unmarried Sisters</label>
                      <input type="text" class="form-control" name="unmarried_sisters" id="unmarried_sisters" value="<?php echo getValue($profile,"unmarried_sisters"); ?>"/>
                      
                    </div>
                    <div class="form-group col-md-3">
                      <label>Married Sisters</label>
                      <input type="text" class="form-control" name="married_sisters" id="married_sisters" value="<?php echo getValue($profile,"married_sisters"); ?>"/>
                      
                    </div>
                    <div class="form-group col-md-3">
                      <label>Unmarried Brothers</label>
                      <input type="text" class="form-control" name="unmarried_brothers" id="unmarried_brothers" value="<?php echo getValue($profile,"unmarried_brothers"); ?>"/>
                      
                    </div>
                    <div class="form-group col-md-3">
                      <label>Married Brothers</label>
                      <input type="text" class="form-control" name="married_brothers" id="married_brothers" value="<?php echo getValue($profile,"married_brothers"); ?>"/>
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label>Other Property Details</label>
                      <input type="text" class="form-control" name="property_details" value="<?php echo getValue($profile,"property_details"); ?>"/>
                    </div>
                    <div class="form-group col-md-3">
                      <label>Square Yards</label>
                      <input type="text" class="form-control" name="square_yards" value="<?php echo getValue($profile,"square_yards"); ?>"/>
                    </div>
                    <div class="form-group col-md-3">
                      <label>Vehicles</label>
                      <input type="text" class="form-control" name="vehicles" value="<?php echo getValue($profile,"vehicles"); ?>"/>
                    </div>
                    
                    <div class="form-group col-md-3">
                      <label>Industry Type</label>    
                      <input type="text" class="form-control" name="industry_type" id="industry_type" value="<?php echo getValue($profile,"industry_type"); ?>"/>
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <label>About Family</label>
                      <textarea class="form-control title_text" name="about_family"><?php echo getValue($profile,"about_family"); ?></textarea>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label>Family Based out of</label>
                      <input type="text" class="form-control" name="family_based_out_of" id="family_based_out_of" value="<?php echo getValue($profile,"family_based_out_of"); ?>"/>
                    </div>
                    <div class="form-group col-md-6">
                      
                      <div class="row">
                        <div class="col-md-6">
                          <label>Wedding Budget (From)</label>
                          <input type="text" class="form-control" name="wedding_budget" id="wedding_budget" value="<?php echo getValue($profile,"wedding_budget"); ?>"/>                                             
                        </div>
                        <div class="col-md-6">
                          <label>Wedding Budget (To)</label>
                          <input type="text" class="form-control" name="wedding_budget2" id="wedding_budget2" value="<?php echo getValue($profile,"wedding_budget2"); ?>"/>                                              
                        </div>
                      </div>  
                    </div>
                    <div class="form-group col-md-3">
                      <label>Residential Type</label>
                      <input type="text" class="form-control" name="residential_type" id="residential_type" value="<?php echo getValue($profile,"residential_type"); ?>"/>
                    </div>
                  </div>                 
                  

                

              </div>
              <div id='horoscope' class='collapse'>
                  <div class="row">                  
                    <div class="form-group col-md-6">
                      <label>DOB</label>
                      <input type="date" class="form-control" name="dob" id="dob" value="<?php echo getValue($profile,"dob"); ?>"/>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Age</label>
                      <input type="text" class="form-control" id="age" value="<?php 
                        $dob_str=getValue($profile,"dob");
                        $dob=new DateTime($dob_str);
                        $today=new DateTime('today');
                        echo $dob->diff($today)->y;

                       ?>" disabled/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Birth Place</label>
                      <input type="text" class="form-control" name="birth_place" value="<?php echo getValue($profile,"birth_place"); ?>"/>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Birth Time</label>
                      <input type="text" class="form-control" name="birth_time" value="<?php echo getValue($profile,"birth_time"); ?>"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Gotra</label>
                      <input type="text" class="form-control" name="gotra" value="<?php echo getValue($profile,"gotra"); ?>"/>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Star</label>
                      <input type="text" class="form-control" name="star" value="<?php echo getValue($profile,"star"); ?>"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Manglik</label>
                      <input type="text" class="form-control" name="manglik" id="manglik" value="<?php echo getValue($profile,"manglik"); ?>"/>
          
                    </div>
                    <div class="form-group col-md-6">
                      <label>Believes in Horoscope</label>
                      <input type="text" class="form-control" name="believes_in_horoscope" id="believes_in_horoscope" value="<?php echo getValue($profile,"believes_in_horoscope"); ?>"/>
                      
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Raasi</label>
                      <input type="text" class="form-control" name="rassi" value="<?php echo getValue($profile,"rassi"); ?>"/>
                    </div>
                  </div>
                  
              </div>  
              
              <div id='identity' class='collapse'>
                <div class="row">
                  
                    
                    <div class="form-group col-md-4">
                      <label>Phone</label>
                      <input type="text" class="form-control" name="phone" value="<?php echo getValue($profile,"phone"); ?>"/>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Alternate Phone Number</label>
                      <input type="text" class="form-control" name="alternate_phone" value="<?php echo getValue($profile,"alternate_phone"); ?>"/>
                    </div>
                    <div class="form-group col-md-4">
                      <label>WhatsApp Number</label>
                      <input type="text" class="form-control" name="whatsapp_number" value="<?php echo getValue($profile,"whatsapp_number"); ?>"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-4">
                      <label>Phone Number Verified</label>
                      <input type="text" class="form-control" name="mobile_verified" id="mobile_verified" value="<?php echo getValue($profile,"mobile_verified"); ?>"/>
                      
                    </div>
                    <div class="form-group col-md-4">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" value="<?php echo getValue($profile,"email"); ?>"/>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Email Id Verified</label>
                      <input type="text" class="form-control" name="emailid_verified" id="emailid_verified" value="<?php echo getValue($profile,"emailid_verified"); ?>"/>
                      
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-4">
                      <label>Residence Address</label>
                      <input type="text" class="form-control" name="address" value="<?php echo getValue($profile,"address"); ?>"/>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Permanent Address</label>
                      <input type="text" class="form-control" name="permanent_address" value="<?php echo getValue($profile,"permanent_address"); ?>"/>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Pincode</label>
                      <input type="number" class="form-control" name="pincode" value="<?php echo getValue($profile,"pincode"); ?>"/>
                    </div>
                  </div>
                  <div class="row">                  
                    <div class="form-group col-md-4">
                      <label>Instagram Id</label>
                      <input type="text" class="form-control" name="instagram_id" value="<?php echo getValue($profile,"instagram_id"); ?>"/>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Facebook Id</label>
                      <input type="text" class="form-control" name="facebook_id" value="<?php echo getValue($profile,"facebook_id"); ?>"/>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Linkedin Id</label>
                      <input type="text" class="form-control" name="linkedin_id" value="<?php echo getValue($profile,"linkedin_id"); ?>"/>
                    </div>
                  </div>
                  <div class="row">                  
                    <div class="form-group col-md-4">
                      <label>Aadhar Verified</label>
                      <input type="text" class="form-control" name="aadhar_verified" id="aadhar_verified" value="<?php echo getValue($profile,"aadhar_verified"); ?>"/>
                      
                    </div>
                    
                    
                    <div class="form-group col-md-4">
                      <label>Aadhar Proof</label>
                      <input type="text" class="form-control" name="aadhar_proof" id="aadhar_proof" value="<?php echo getValue($profile,"aadhar_proof"); ?>"/>
                      
                    </div>

                    <div class="form-group col-md-4">
                      <label>Company WebSite</label>
                      <input type="text" class="form-control" name="company_website" value="<?php echo getValue($profile,"company_website"); ?>"/>
                    </div>
                  
                </div>  
              </div>
              <div id='looks_div' class='collapse'>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Body Type</label>
                      <input type="text" class="form-control" name="body_type" id="body_type" value="<?php echo getValue($profile,"body_type"); ?>"/>
                     
                    </div>
                    <div class="form-group">
                      <label>Food Habits</label>
                      <input type="text" class="form-control" name="food_habits" id="food_habits" value="<?php echo getValue($profile,"food_habits"); ?>"/>
                      
                    </div>
                    <div class="form-group">
                      <label>Drink</label>
                      <input type="text" class="form-control" name="drink" id="drink" value="<?php echo getValue($profile,"drink"); ?>"/>
                      
                    </div>
                    <div class="form-group">
                      <label>Smoke</label>
                      <input type="text" class="form-control" name="smoke" id="smoke" value="<?php echo getValue($profile,"smoke"); ?>"/>
                      
                    </div>
                    <div class="form-group">
                      <label>Complexion</label>
                      <input type="text" class="form-control" name="complexion" id="complexion" value="<?php echo getValue($profile,"complexion"); ?>"/>
                      
                      
                    </div>
                    <div class="form-group">
                      <label>Weight (in kg)</label>
                      <input type="number" class="form-control" name="weight" value="<?php echo getValue($profile,"weight"); ?>"/>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Hair Type</label>
                      <input type="text" class="form-control" name="hair_type" id="hair_type" value="<?php echo getValue($profile,"hair_type"); ?>"/>
                      
                    </div>
                    <div class="form-group">
                      <label>Looks</label>
                      <input type="text" class="form-control" name="looks" id="looks" value="<?php echo getValue($profile,"looks"); ?>"/>
                      
                    </div>
                    <div class="form-group">
                      <label>Specs</label>
                      <input type="text" class="form-control" name="specs" id="specs" value="<?php echo getValue($profile,"specs"); ?>"/>
                      
                    </div>
                    <div class="form-group">
                      <label>Communication</label>
                      <input type="text" class="form-control" name="communication" id="communication" value="<?php echo getValue($profile,"communication"); ?>"/>
                      
                    </div>
                  </div>
                </div>  
              </div>
              <div id='partner' class='collapse'>
                <div class="row">
                  <div class="form-group col-md-3">
                        <label>From Age</label>
                        <input type="text" class="form-control" name="pp_fromage" id="pp_fromage" value="<?php echo getValue($profile,"pp_fromage"); ?>"/>
                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>To Age</label>
                        <input type="text" class="form-control" name="pp_toage" id="pp_toage" value="<?php echo getValue($profile,"pp_toage"); ?>"/>
                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Min Height</label>
                        <input type="text" class="form-control" name="pp_min_height" id="pp_min_height" value="<?php echo getValue($profile,"pp_min_height"); ?>"/>
                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Max Height</label>
                        <input type="text" class="form-control" name="pp_max_height" id="pp_max_height" value="<?php echo getValue($profile,"pp_max_height"); ?>"/>
                        
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                        <label>Religion</label>                                                
                        <input type="text" class="form-control" name="pp_religion" id="pp_religion" value="<?php echo getValue($profile,"pp_religion"); ?>"/>
                  </div>
                  <div class="form-group col-md-3">
                        <label>Caste</label>
                        <input type="text" class="form-control" name="pp_caste" id="pp_caste" value="<?php echo getValue($profile,"pp_caste"); ?>"/>                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Marital Status</label>  
                        <input type="text" class="form-control" name="pp_marital_status" id="pp_marital_status" value="<?php echo getValue($profile,"pp_marital_status"); ?>"/>                                              
                        
                  </div>
                  <div class="form-group col-md-3">
                    <label>Education</label>
                    <input type="text" class="form-control" name="pp_education_qualification" id="pp_education_qualification" value="<?php echo getValue($profile,"pp_education_qualification"); ?>"/>
                  </div>
                  <div class="form-group col-md-3">
                    <label>Country</label>                        
                    <input type="text" class="form-control" name="pp_country" id="pp_country" value="<?php echo getValue($profile,"pp_country"); ?>"/>                        
                  </div>
                  <div class="form-group col-md-3">
                    <label>State</label>
                    <input type="text" class="form-control" name="pp_state" id="pp_state" value="<?php echo getValue($profile,"pp_state"); ?>"/>
                    
                  </div>
                  <div class="form-group col-md-3">
                    <label>Employed as</label> 
                    <input type="text" class="form-control" name="pp_employed_as" id="pp_employed_as" value="<?php echo getValue($profile,"pp_employed_as"); ?>"/>                    
                  </div>
                  <div class="form-group col-md-3">
                      <label>Partner Occupation</label>
                      <input type="text" class="form-control" name="pp_partner_occupation" id="pp_partner_occupation" value="<?php echo getValue($profile,"pp_partner_occupation"); ?>"/>
                  </div>
                  
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                    <label>Currency</label>
                    <input type="text" class="form-control" disabled name="pp_income_currency" id="pp_income_currency" value="<?php echo getValue($profile,"pp_income_currency"); ?>" />                      
                  </div>
                  <div class="form-group col-md-6">
                        
                        <input type="hidden" class="form-control" name="pp_income"/>
                        <div class="row">
                        <div class="col-md-6">
                          <label>Income (From)</label>
                          <input type="text" class="form-control" name="pp_income" id="pp_income" value="<?php echo getValue($profile,"pp_income"); ?>"/>                                              
                          
                        </div>
                        <div class="col-md-6">
                          <label>Income (To)</label>
                          <input type="text" class="form-control" name="pp_income2" id="pp_income2" value="<?php echo getValue($profile,"pp_income2"); ?>"/>                                              
                          
                        </div>
                      </div>
                  </div>
                  <div class="form-group col-md-3">
                        <label>Challenged</label>
                        <input type="text" class="form-control" name="pp_challenged" id="pp_challenged" value="<?php echo getValue($profile,"pp_challenged"); ?>"/>                        
                  </div>
                  
                  
                  
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                        <label>Smoker</label>
                        <input type="text" class="form-control" name="pp_smoker" id="pp_smoker" value="<?php echo getValue($profile,"pp_smoker"); ?>">
                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Drinker</label>
                        <input type="text" class="form-control" name="pp_drinker" id="pp_drinker" value="<?php echo getValue($profile,"pp_drinker"); ?>"/>                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Veg/Non Veg</label>
                        <input type="text" class="form-control" name="pp_veg/non_veg" id="pp_food_habits" value="<?php echo getValue($profile,"pp_veg/non_veg"); ?>"/>
                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Manglik</label>
                        <input type="text" class="form-control" name="pp_manglik" id="pp_manglik" value="<?php echo getValue($profile,"pp_manglik"); ?>"/>                        
                  </div>
                </div>
                <div class="row">
                  
                  <div class="form-group col-md-3">
                        <label>Mother Tongue</label>
                        <input type="text" class="form-control" name="pp_mother_tongue" id="pp_mother_tongue" value="<?php echo getValue($profile,"pp_mother_tongue"); ?>"/>
                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Complexion</label>
                        <input type="text" class="form-control" name="pp_complexion"  id="pp_complexion" value="<?php echo getValue($profile,"pp_complexion"); ?>"/>                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Body Type</label>  
                        <input type="text"  class="form-control" name="pp_body_type" id="pp_body_type" value="<?php echo getValue($profile,"pp_body_type"); ?>"/>                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Have Children</label>
                        <input type="text" class="form-control" name="pp_have_children" id="pp_have_children" value="<?php echo getValue($profile,"pp_have_children"); ?>"/>                        
                  </div>
                </div>
                <div class="row">
                  
                  <div class="form-group col-md-12">
                        <label>About Partner</label>
                        <textarea rows="3" class="form-control title_text" name="pp_about_partner" ><?php echo getValue($profile,"pp_about_partner"); ?></textarea>
                  </div>
                  
                  
                </div>
                
              </div>
              <div id='calling' class='collapse'>
                <div class="row">                  
                  <div class="form-group col-md-4">
                    <label>Last Calling date</label>
                    <input type="date" class="form-control" name="last_calling_date" value="<?php echo getValue($profile,"last_calling_date"); ?>"/>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Calling for</label>
                    <input type="text" class="form-control" name="calling_for" id="calling_for" value="<?php echo getValue($profile,"calling_for"); ?>"/>
                    
                  </div>
                  <div class="form-group col-md-4">
                    <label>Calling Status</label>
                    <input type="text" class="form-control" name="calling_status" id="calling_status" value="<?php echo getValue($profile,"calling_status"); ?>"/>
                    
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4">
                    <label>Calling Comments</label>
                    <input type="text" class="form-control" name="calling_comments" value="<?php echo getValue($profile,"calling_comments"); ?>"/>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Profile Shortlisted for id</label>
                    <input type="text" class="form-control" name="profile_shortlisted_for" value="<?php echo getValue($profile,"profile_shortlisted_for"); ?>"/>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Response of shared Profile</label>
                    <input type="text" class="form-control" name="response_shared_profile" value="<?php echo getValue($profile,"response_shared_profile"); ?>"/>
                  </div>
                </div>  
              </div>
              <div id='lead' class='collapse'>
                <div class="row">
                <div class="col-md-3">
                  <div class="form-group">
                        <label>Lead-Date of calling</label>
                        <input type="date" class="form-control" name="lead_date" value="<?php echo getValue($profile,"date"); ?>"/>
                  </div>
                  <div class="form-group">
                        <label>Lead-Follow up date</label>
                        <input type="date" class="form-control" name="lead_follow_up" value="<?php echo getValue($profile,"lead_follow_up"); ?>"/>
                  </div>
                  <div class="form-group">
                        <label>Lead Follow Up time </label>
                        <input type="text" class="form-control" name="lead_follow_up_time" value="<?php echo getValue($profile,"lead_follow_up_time"); ?>"/>
                  </div>
                  <div class="form-group">
                        <label>Lead-Status</label>
                        <input type="text" class="form-control" name="lead_status" id="lead_status" value="<?php echo getValue($profile,"lead_status"); ?>"/>
                        
                  </div>
                  <div class="form-group">
                        <label>lead-comment</label>
                        <input type="text" class="form-control" name="lead_comment" value="<?php echo getValue($profile,"lead_comment"); ?>"/>
                  </div>
                  </div><div class="col-md-3">
                  <div class="form-group">
                        <label>Lead-shared profile ids</label>
                        <input type="text" class="form-control" name="lead_shared_id" value="<?php echo getValue($profile,"lead_shared_id"); ?>"/>
                  </div>
                  <div class="form-group">
                        <label>lead shortlisted profile ids</label>
                        <input type="text" class="form-control" name="lead_shortlisted_id" value="<?php echo getValue($profile,"lead_shortlisted_id"); ?>"/>
                  </div>
                  <div class="form-group">
                        <label>Lead Biodata received</label>
                        <input type="text" class="form-control" name="lead_biodata" id="lead_biodata" value="<?php echo getValue($profile,"lead_biodata"); ?>"/>
                        
                  </div>
                  <div class="form-group">
                        <label>Lead-Matrimony Picture</label>
                        <input type="text" class="form-control" name="lead_matrimony_picture" id="lead_matrimony_picture" value="<?php echo getValue($profile,"lead_matrimony_picture"); ?>"/>
                        
                  </div>
                  </div>
                </div>  
              </div>
              <div id='meeting' class='collapse'>
                <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                        <label>MEETING FINALISED BY</label>
                        <input type="text" class="form-control" name="meeting_finalised_by" value="<?php echo getValue($profile,"meeting_finalised_by"); ?>"/>
                  </div>
                  <div class="form-group">
                        <label>Meeting Type</label>
                        <input type="text" class="form-control" name="meeting_type" id="meeting_type" value="<?php echo getValue($profile,"meeting_type"); ?>"/>
                        
                  </div>
                  <div class="form-group">
                        <label>MEETING DATE</label>
                        <input type="date" class="form-control" name="meeting_date" value="<?php echo getValue($profile,"meeting_date"); ?>"/>
                  </div>
                  <div class="form-group">
                        <label>MEETING TIME</label>
                        <input type="text" class="form-control" name="meeting_time" value="<?php echo getValue($profile,"meeting_time"); ?>"/>
                  </div>
                  <div class="form-group">
                        <label>MEETING PLACE</label>
                        <input type="text" class="form-control" name="meeting_place" value="<?php echo getValue($profile,"meeting_place"); ?>"/>
                  </div>
                  </div><div class="col-md-3">
                  <div class="form-group">
                        <label>MEETING LVM ID</label>
                        <input type="text" class="form-control" name="meeting_lvm_id" value="<?php echo getValue($profile,"meeting_lvm_id"); ?>"/>
                  </div>
                  <div class="form-group">
                        <label>Meeting Status</label>
                        <input type="text" class="form-control" name="meeting_status" id="meeting_status" value="<?php echo getValue($profile,"meeting_status"); ?>"/>
                        
                  </div>
                  <div class="form-group">
                        <label>Rejection reason</label>
                        <input type="text" class="form-control" name="rejection_reason" id="rejection_reason" value="<?php echo getValue($profile,"rejection_reason"); ?>"/>
                        
                  </div>
                  <div class="form-group">
                        <label>Rejection Reason Comments</label>
                        <input type="text" class="form-control" name="rejection_comments" value="<?php echo getValue($profile,"rejection_comments"); ?>"/>
                  </div>
                  </div>
                </div>  
              </div>
              <div id='subscription' class='collapse'>
                <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                        <label>CLIENT TYPE</label>
                        <input type="text" class="form-control" name="client_type" id="client_type" value="<?php echo getValue($profile,"client_type"); ?>"/>
                        
                  </div>
                  <div class="form-group">
                        <label>REGISTRATION FEE</label>
                        <input type="number" class="form-control" name="registration_fee" value="<?php echo getValue($profile,"registration_fee"); ?>"/>
                  </div>
                  <div class="form-group">
                        <label>MEETING FEE</label>
                        <input type="number" class="form-control" name="meeting_fee" value="<?php echo getValue($profile,"meeting_fee"); ?>"/>
                  </div>
                  <div class="form-group">
                        <label>ROKA CHARGE</label>
                        <input type="number" class="form-control" name="roka_charge" value="<?php echo getValue($profile,"roka_charge"); ?>"/>
                  </div>
                  <div class="form-group">
                        <label>DURATION</label>
                        <input type="text" class="form-control" name="duration" id="duration" value="<?php echo getValue($profile,"duration"); ?>"/>
                        
                  </div>
                  </div><div class="col-md-3">
                  <div class="form-group">
                        <label>PACKAGE TYPE</label>
                        <input type="text" class="form-control" name="package_type" id="package_type" value="<?php echo getValue($profile,"package_type"); ?>"/>
                        
                  </div>
                  <div class="form-group">
                        <label>SOLD BY</label>
                        <input type="text" class="form-control" name="sold_by" value="<?php echo getValue($profile,"sold_by"); ?>"/>
                        
                  </div>
                  <div class="form-group">
                        <label>Subscription Type</label>
                        <input type="text" class="form-control" name="subscription_type" value="<?php echo getValue($profile,"subscription_type"); ?>"/>
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="form-group">
                        <label>Payment Given</label>
                        <input type="number" class="form-control" name="payment_given" value="<?php echo getValue($profile,"payment_given"); ?>"/>
                  </div>
                  <div class="form-group">
                        <label>Payment Remaining</label>
                        <input type="number" class="form-control" name="payment_remaining" value="<?php echo getValue($profile,"payment_remaining"); ?>"/>
                  </div>
                  <div class="form-group">
                        <label>Next Payment Due Date</label>
                        <input type="date" class="form-control" name="next_payment_due_date" value="<?php echo getValue($profile,"next_payment_due_date"); ?>"/>
                  </div>
                  <div class="form-group">
                        <label>Payment Comments</label>
                        <input type="text" class="form-control" name="payment_comments" value="<?php echo getValue($profile,"payment_comments"); ?>"/>
                  </div>
                  </div>
                </div>  
              </div>
              <div id='miscellaneous' class='collapse'>
                <div class="row">
                  <div class="col-md-3">
                  
                  
                  <div class="form-group">
                        <label>ADDED BY</label>
                        <input type="text" class="form-control" name="added_by" value="<?php echo getValue($profile,"added_by"); ?>"/>
                  </div>
                  <div class="form-group">
                        <label>WEEKLY PROFILE</label>
                        <input type="text" class="form-control" name="weekly_profile" value="<?php echo getValue($profile,"weekly_profile"); ?>"/>
                  </div>
                  </div>
                </div>  
              </div>
              <div id='upload_photos' class='collapse'>
                
                  <div class="row">
                    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#img_modal" onclick="">Upload Images</button>
                  </div>
                  <div class="row" id="imgDiv">
                  
                  </div>
              </div>
            </form>
          </div>
            
            
          </div>
          <div class="row">
            
            
              
            
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
 
 <div class="modal fade" id="img_modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
  aria-hidden="true">
  	<div class="modal-dialog" role="document">
	    <div class="modal-content">
	      	<div class="modal-header">
		        <h5 class="modal-title" id="exampleModalLabel">Upload Images</h5>
		        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		          <span aria-hidden="true">&times;</span>
		        </button>
	      	</div>
	      	<form id="uploadForm" action="/uploadImage.php" method="post" enctype="multipart/form-data"> 
		     	<div class="modal-body">
		        	<input type="hidden" name="id" id="id" value="<?php echo $id;?>">
	                <div class="form-group"> 
	                    <div class="topic tp">
	                        <div class="file"></div>
	                        <div class="topic_area">
	                            <input type="file" class="w3-input file" name="file[]" placeholder="Choose Attachment" multiple>
	                            <span class="dele text-danger" style="float:right;cursor: pointer;">X</span> 
	                        </div> 
	                    </div>  
	                     
	                </div>	
		     	</div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
		        	<button type="submit" name="upload_image" id="upload_image" class="btn btn-primary">Submit</button>	
		      	</div>
		    </form>		
	    </div>
  	</div>
</div>
<script src="/scripts/js/variables.js?ver=1.1146"></script>
 <script src="/scripts/js/registerprofile.js?ver=1.126"></script>
 <script src="/scripts/js/fm.tagator.jquery.js?ver=1.00000002"></script>



</body>

</html>
