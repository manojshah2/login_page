<?php
$root = "./";  
include('config/config.inc.php');
include_once("config/db.php");
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
  <link href="css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/fm.tagator.jquery.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">

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
                <li class="nav-link"><a href="#looks" class="item" data-toggle='collapse'>Looks & Lifestyle</a></li>
                <li class="nav-link"><a href="#partner" class="item" data-toggle='collapse'>Partner Preference</a></li>
                <li class="nav-link"><a href="#calling" class="item" data-toggle='collapse'>Calling Status</a></li>
                <li class="nav-link"><a href="#lead" class="item" data-toggle='collapse'>Lead Generation</a></li>
                <li class="nav-link"><a href="#meeting" class="item" data-toggle='collapse'>Meeting Details</a></li>
                <li class="nav-link"><a href="#subscription"  class="item" data-toggle='collapse'>Subscription Status</a></li>
                <li class="nav-link"><a href="#miscellaneous" class="item" data-toggle='collapse'>Miscellaneous</a></li>
              </ul>
            </div>
            
            <div class="col-md-9">
            <form id='profileFrm' novalidate>
            <?php
              $header = array(    
                "source"=>"Data Taken From",
                "PID"=>"PID",
                "email"=>"EMAIL",
                "subscription_type"=>"SUBSCRIPTION TYPE",
                "first_name"=>"FIRST NAME",
                "last_name"=>"LAST NAME",
                "gender"=>"GENDER",
                "dob"=>"DOB",
                "birth_place"=>"BIRTH PLACE",
                "birth_time"=>"BIRTH TIME",
                "manglik"=>"MANGLIK",
                "gotra"=>"GOTRA",
                "phone"=>"PHONE",
                "marital_status"=>"MARITAL STATUS",
                "height"=>"HEIGHT",
                "education"=>"EDUCATION",
                "school_name"=>"SCHOOL NAME",
                "ug"=>"UG",
                "pg"=>"PG",
                "ug_college"=>"UG COLLEGE",
                "pg_college"=>"PG COLLEGE",
                "college"=>"COLLEGE",
                "country_of_residence"=>"COUNTRY OF RESIDENCE",
                "state_of_residence"=>"STATE OF RESIDENCE",
                "city"=>"CITY",
                "mother_tongue"=>"MOTHER TONGUE",
                "family_based_out_of"=>"FAMILY BASED OUT OF",
                "religion"=>"RELIGION",
                "caste"=>"Caste",
                "sub_caste"=>"SUB CASTE",
                "complexion"=>"COMPLEXION",
                "employed_in"=>"EMPLOYED IN",
                "employed_as"=>"EMPLOYED AS",
                "employed_with"=>"EMPLOYED WITH",
                "annual_income"=>"ANNUAL INCOME",
                "family_income"=>"FAMILY INCOME",
                "family_type"=>"FAMILY TYPE",
                "about_family"=>"ABOUT FAMILY",
                "about"=>"ABOUT",
                "father_is"=>"FATHER IS",
                "mother_is"=>"MOTHER IS",
                "family_value"=>"FAMILY VALUE",
                "affluence_level"=>"AFFLUENCE LEVEL",
                "native_country"=>"NATIVE COUNTRY",
                "native_state"=>"NATIVE STATE",
                "unmarried_sisters"=>"UNMARRIED SISTERS",
                "married_sisters"=>"MARRIED SISTERS",
                "unmarried_brothers"=>"UNMARRIED BROTHERS",
                "has_children"=>"has children",
                "married_brothers"=>"MARRIED BROTHERS",
                "criminal_record"=>"CRIMINAL RECORD",
                "special_case"=>"SPECIAL CASE",
                "believes_in_horoscope"=>"BELIEVES IN HOROSCOPE",
                "food_habits"=>"FOOD HABITS",
                "drink"=>"DRINK",
                "smoke"=>"SMOKE",
                "pp_smoker"=>"PP SMOKER",
                "pp_drinker"=>"PP DRINKER",
                "pp_veg/non_veg"=>"PP VEG/NON VEG",
                "pp_fromage"=>"PP FROMAGE",
                "pp_toage"=>"PP TOAGE",
                "pp_caste"=>"PP CASTE",
                "pp_education_qualification"=>"PP EDUCATION QUALIFICATION",
                "pp_min_height"=>"PP MIN HEIGHT",
                "pp_max_height"=>"PP MAX HEIGHT",
                "pp_mother_tongue"=>"PP MOTHER TONGUE",
                "pp_religion"=>"PP RELIGION",
                "pp_manglik"=>"PP MANGLIK",
                "pp_income"=>"PP INCOME",
                "pp_employed_as"=>"PP EMPLOYED AS",
                "pp_body_type"=>"PP BODY TYPE",
                "pp_challenged"=>"PP CHALLENGED",
                "pp_marital_status"=>"PP MARITAL STATUS",
                "pp_country"=>"PP COUNTRY",
                "pp_state"=>"PP STATE",
                "pp_have_children"=>"PP HAVE CHILDREN",
                "pp_about_partner"=>"PP ABOUT PARTNER",
                "photo_url"=>"PHOTO URL","body_type"=>"BODY TYPE",
                "weight"=>"WEIGHT",
                "added_date"=>"ADDED DATE",
                "added_by"=>"ADDED BY",
                "house"=>"HOUSE",
                "address"=>"ADDRESS",
                "square_yards"=>"SQUARE YARDS",
                "hair_type"=>"HAIR TYPE",
                "looks"=>"LOOKS",
                "specs"=>"SPECS",
                "net_worth"=>"NET WORTH",
                "industry_type"=>"INDUSTRY TYPE",
                "company_name"=>"COMPANY NAME",
                "aadhar_verified"=>"AADHAR VERIFIED",
                "mobile_verified"=>"MOBILE VERIFIED",
                "emailid_verified"=>"EMAILID VERIFIED",
                "aadhar_proof"=>"AADHAR PROOF",
                "registration_fee"=>"REGISTRATION FEE",
                "meeting_fee"=>"MEETING FEE",
                "roka_charge"=>"ROKA CHARGE",
                "weekly_profile"=>"WEEKLY PROFILE",
                "duration"=>"DURATION",
                "package_type"=>"PACKAGE TYPE",
                "sold_by"=>"SOLD BY",
                "meeting_finalised_by"=>"MEETING FINALISED BY",
                "meeting_date"=>"MEETING DATE",
                "meeting_time"=>"MEETING TIME",
                "meeting_place"=>"MEETING PLACE",
                "meeting_lvm_id"=>"MEETING LVM ID",
                "client_type"=>"CLIENT TYPE",
                "residential_status"=>"Residential Status",
                "property_details"=>"Property Details",
                "vehicles"=>"Vehicles",
                "star"=>"Star",
                "rassi"=>"Rassi",
                "alternate_phone"=>"Alternate Phone",
                "whatsapp_number"=>"Whatsapp Number",
                "permanent_address"=>"Permanent Address",
                "instagram_id"=>"Instagram Id",
                "facebook_id"=>"Facebook Id",
                "linkedin_id"=>"Linkedin Id",
                "communication"=>"Communication",
                "pp_complexion"=>"PP Complexion",
                "pp_cant_get_married_to"=>"PP Cant Get Married To",
                "last_calling_date"=>"Last Calling Date",
                "calling_status"=>"Calling Status",
                "calling_comments"=>"Calling Comments",
                "profile_shortlisted_for"=>"Profile Shortlisted For",
                "response_shared_profile"=>"Response Shared Profile",
                "lead_date"=>"Lead Date",
                "lead_follow_up"=>"Lead Follow Up",
                "lead_follow_up_time"=>"Lead Follow Up Time",
                "lead_comment"=>"Lead Comment",
                "lead_shared_id"=>"Lead Shared Id",
                "lead_shortlisted_id"=>"Lead Shortlisted Id",
                "lead_biodata"=>"Lead Biodata",
                "lead_matrimony_picture"=>"Lead Matrimony Picture",
                "meeting_status"=>"Meeting Status",
                "rejection_reason"=>"Rejection Reason",
                "rejection_comments"=>"Rejection Comments",
                "payment_given"=>"Payment Given",
                "payment_remaining"=>"Payment Remaining",
                "next_payment_due_date"=>"Next Payment Due Date",
                "payment_comments"=>"Payment Comments"
                
            );
              function getValue($profile1,$database_col_name){
                  global $header;
                  if(array_key_exists($database_col_name,$header)){
                    $actual_col=$header[$database_col_name];
                    if(array_key_exists($actual_col,$profile1)){
                      return $profile1[$actual_col];
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
                    
                      <div class="form-group col-md-3">

                        <label>Data Taken From</label>
                        <input type="text" class="form-control" name="source" id="source" value="<?php echo getValue($profile,"source"); ?>" />                        
                      </div>
                      <div class="form-group col-md-3">
                        <label>Profile Id</label>                        
                        <input type="text" class="form-control" name="PID" value="<?php echo getValue($profile,"PID"); ?>"/>
                      </div>
                      <div class="form-group col-md-3">
                        <label>First Name</label>
                        <input type="text" class="form-control" name="first_name" value="<?php echo getValue($profile,"first_name"); ?>"/>
                      </div>
                      <div class="form-group col-md-3">
                        <label>Last Name</label>
                        <input type="text" class="form-control" name="last_name" value="<?php echo getValue($profile,"last_name"); ?>"/>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-md-3">
                        <label>Gender</label>
                        <input type="text" class="form-control" name="gender" id="gender" value="<?php echo getValue($profile,"gender"); ?>" />
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
                        
                        <select class="browser-control custom-select" name="height">
                          <option value="0"></option>
                          <option value="1.22">4 '0" (1.22mts)</option>
                          <option value="1.24">4 '1" (1.24mts)</option>
                          <option value="1.28">4 '2" (1.28mts)</option>
                          <option value="1.31">4 '3" (1.31mts)</option>
                          <option value="1.34">4 '4" (1.34mts)</option>
                          <option value="1.35">4 '5" (1.35mts)</option>
                          <option value="1.37">4 '6" (1.37mts)</option>
                          <option value="1.4">4 '7" (1.40mts)</option>
                          <option value="1.42">4 '8" (1.42mts)</option>
                          <option value="1.45">4 '9" (1.45mts)</option>
                          <option value="1.47">4 '10" (1.47mts)</option>
                          <option value="1.5">4 '11" (1.50mts)</option>
                          <option value="1.52">5 '0" (1.52mts)</option>
                          <option value="1.55">5 '1" (1.55mts)</option>
                          <option value="1.58">5 '2" (1.58mts)</option>
                          <option value="1.6">5 '3" (1.60mts)</option>
                          <option value="1.63">5 '4" (1.63mts)</option>
                          <option value="1.65">5 '5" (1.65mts)</option>
                          <option value="1.68">5 '6" (1.68mts)</option>
                          <option value="1.7">5 '7" (1.70mts)</option>
                          <option value="1.73">5 '8" (1.73mts)</option>
                          <option value="1.75">5 '9" (1.75mts)</option>
                          <option value="1.78">5 '10" (1.78mts)</option>
                          <option value="1.8">5 '11" (1.80mts)</option>
                          <option value="1.83">6 '0" (1.83mts)</option>
                          <option value="1.85">6 '1" (1.85mts)</option>
                          <option value="1.88">6 '2" (1.88mts)</option>
                          <option value="1.91">6 '3" (1.91mts)</option>
                          <option value="1.93">6 '4" (1.93mts)</option>
                          <option value="1.96">6 '5" (1.96mts)</option>
                          <option value="1.98">6 '6" (1.98mts)</option>
                          <option value="2.01">6 '7" (2.01mts)</option>
                          <option value="2.03">6 '8" (2.03mts)</option>
                          <option value="2.06">6 '9" (2.06mts)</option>
                          <option value="2.08">6 '10" (2.08mts)</option>
                          <option value="2.11">6 '11" (2.11mts)</option>
                          <option value="2.13">7 ' (2.13mts)plus</option>

                          
                        </select>
                      </div>
                  </div>

                  <div class="row">
                  <div class="form-group col-md-3">
                      <label>Occupation</label>
                      <input type="text" class="form-control" name="occupation" id="occupation" value="<?php echo getValue($profile,"occupation"); ?>" />                      
                    </div>
                    <div class="form-group col-md-6">
                      <label>Annual Income</label>
                      <input type="hidden" class="form-control" name="annual_income"/>
                      <div class="row">
                        <div class="col-md-6">
                          <select class="browser-default custom-select " id="income_start">
                            <option value="0">Rs. 0</option>
                            <option value="1">Rs.1 Lakh</option>
                            <option value="2">Rs.2 Lakh</option>
                            <option value="3">Rs.3 Lakh</option>
                            <option value="4">Rs.4 Lakh</option>
                            <option value="5">Rs.5 Lakh</option>
                            <option value="5">Rs.7.5 Lakh</option>
                            <option value="10">Rs.10 Lakh</option>
                            <option value="15">Rs.15 Lakh</option>
                            <option value="20">Rs.20 Lakh</option>
                            <option value="25">Rs.25 Lakh</option>
                            <option value="35">Rs.35 Lakh</option>
                            <option value="50">Rs.50 Lakh</option>
                            <option value="70">Rs.70 Lakh</option>
                            <option value="100">Rs.1 Crore</option>
                            <option value="500">Rs.5 Crore</option>
                            <option value="1000">Rs.10 Crore</option>
                            <option value="5000">Rs.50 Crore</option>
                            <option value="10000">Rs.100 Crore</option>
                            <option value="50000">Rs.500 Crore</option>
                            <option value="100000">Rs.1000 Crore</option>
                            <option value="900000">Rs.1000+ Crore</option>

                          </select>
                        </div>
                        <div class="col-md-6">
                          <select class="browser-default custom-select " id="income_end">
                            <option value="0">Rs. 0</option>
                            <option value="1">Rs.1 Lakh</option>
                            <option value="2">Rs.2 Lakh</option>
                            <option value="3">Rs.3 Lakh</option>
                            <option value="4">Rs.4 Lakh</option>
                            <option value="5">Rs.5 Lakh</option>
                            <option value="5">Rs.7.5 Lakh</option>
                            <option value="10">Rs.10 Lakh</option>
                            <option value="15">Rs.15 Lakh</option>
                            <option value="20">Rs.20 Lakh</option>
                            <option value="25">Rs.25 Lakh</option>
                            <option value="35">Rs.35 Lakh</option>
                            <option value="50">Rs.50 Lakh</option>
                            <option value="70">Rs.70 Lakh</option>
                            <option value="100">Rs.1 Crore</option>
                            <option value="500">Rs.5 Crore</option>
                            <option value="1000">Rs.10 Crore</option>
                            <option value="5000">Rs.50 Crore</option>
                            <option value="10000">Rs.100 Crore</option>
                            <option value="50000">Rs.500 Crore</option>
                            <option value="100000">Rs.1000 Crore</option>
                            <option value="900000">Rs.1000+ Crore</option>

                          </select>
                        </div>
                      </div>
                    </div>  
                    <div class="form-group col-md-3">
                      <label>Country of Residence</label>
                      <input type="text" class="form-control" name="country_of_residence" id="country_of_residence" value="<?php echo getValue($profile,"country_of_residence"); ?>" />                                              
                      
                    </div>
                  </div>  
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label>State of Residence</label>
                      <input type="text" class="form-control" name="state_of_residence" id="state_of_residence" value="<?php echo getValue($profile,"state_of_residence"); ?>" />                                                                    
                    </div>
                    <div class="form-group col-md-3">
                        <label>Religion</label>
                        <select class="browser-default custom-select" name="religion" id="religion">
                          <option>--Select--</option>
                          <option>Muslim</option>
                          <option>Hindu</option>
                          <option>Sikh</option>
                          <option>Buddhist</option>
                          <option>Christian</option>
                          <option>Jain</option>
                          <option>Other</option>
                          <option>Parsi</option>
                          <option>Jewish</option>
                          <option>Bahai</option>

                        </select>
                    </div>                    
                    <div class="form-group col-md-3">
                        <label>Caste</label>                        
                        <select class="browser-control custom-select" name="caste" id="caste">
                        </select>
                      </div>
                    <div class="form-group col-md-3">
                        <label>Sub-Caste</label>
                        <input type="text" class="form-control" name="sub_caste" value="<?php echo getValue($profile,"sub_caste"); ?>"/>
                    </div>
                  </div>                 
                  <div class="row">
                    <div class="form-group col-md-3">
                        <label>About Me</label>
                        <input type="text" class="form-control" name="about" value="<?php echo getValue($profile,"about"); ?>"/>
                    </div>
                      <div class="form-group col-md-3">
                      <label>CITY</label>
                      <input type="text" class="form-control" name="city" value="<?php echo getValue($profile,"city"); ?>"  />
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
                        <input type="text" class="form-control" name="criminal_record" value="<?php echo getValue($profile,"CRIMINAL RECORD"); ?>"/>
                      </div>
                  </div>
                </div>
              <div>
              <div id='education' class='collapse'>
                <div class="row">                  
                <div class="form-group col-md-6">
                  <label>UG Degree</label>
                  <select class="browser-control custom-select" name="ug">
                    <option></option>
                    <option>B.A</option>
                    <option>B.Arch</option>
                    <option>B.Com</option>
                    <option>B.Des</option>
                    <option>B.E/B.Tech</option>
                    <option>B.Ed</option>
                    <option>B.IT</option>
                    <option>B.Pharma</option>
                    <option>B.Sc</option>
                    <option>BAMS</option>
                    <option>BBA</option>
                    <option>BCA</option>
                    <option>BDS</option>
                    <option>BFA</option>
                    <option>BHM</option>
                    <option>BHMS</option>
                    <option>BJMC</option>
                    <option>BL/LLB</option>
                    <option>BPT</option>
                    <option>BVSc.</option>
                    <option>MBBS</option>
                    <option>other</option>
                  </select>
                </div>
                <div class="form-group col-md-6">
                  <label>PG Degree</label>
                  <select class="browser-control custom-select" name="pg">
                  <option></option>
                    <option>CA</option>
                    <option>M.A</option>
                    <option>M.Arch</option>
                    <option>M.Com</option>
                    <option>M.Des</option>
                    <option>M.E/M.Tech</option>
                    <option>M.Ed</option>
                    <option>M.Pharma</option>
                    <option>M.Phil</option>
                    <option>M.S (Medicine)</option>
                    <option>M.S Engineering</option>
                    <option>M.Sc</option>
                    <option>MBA/PGDM</option>
                    <option>MCA/PGDCA</option>
                    <option>MCh</option>
                    <option>MD</option>
                    <option>MDS</option>
                    <option>MFA</option>
                    <option>MJMC</option>
                    <option>ML/LLM</option>
                    <option>MPT</option>
                    <option>MSW</option>
                    <option>MVSc.</option>
                    <option>Ph.D</option>
                  </select>
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
                    <select class="browser-control custom-select" name="employed_in">
                      <option></option>
                      <option>Private Sector</option>
                      <option>Government/Public Sector</option>
                      <option>Civil Services</option>
                      <option>Defense</option>
                      <option>Business/Self Employed</option>
                      <option>Not working</option>
                    </select>
                  </div>
                  <div class="form-group col-md-6">
                    <label>Employed As</label>
                    <select class="browser-control custom-select" name="employed_as">
                      <option></option>
                      <option>Software Professional</option>
                      <option>Hotels / Hospitality Professional</option>
                      <option>Non – IT Engineer</option>
                      <option>Sales Professional</option>
                      <option>Banking Professional</option>
                      <option>Govt. - Product manager</option>
                      <option>Govt. - Doctor</option>
                      <option>Electronics Engineer</option>
                      <option>Chartered Accountant</option>
                      <option>Cyber / Network Security</option>
                      <option>Business - Lawyer & Legal Professional</option>
                      <option>Analyst</option>
                      <option>Sr. Manager /  Manager</option>
                      <option>Project Manager - IT</option>
                      <option>Project Lead - IT</option>
                      <option>Corporate Planning</option>
                      <option>Hardware / Telecom Engineer</option>
                      <option>Marketing Professional</option>
                      <option>Business - Business Owner /  Entrepreneur</option>
                      <option>Defence - Air Force</option>
                      <option>Subject Matter Expert</option>
                      <option>Business - Hotels / Hospitality Professional</option>
                      <option>Quality Assurance Engineer - IT</option>
                      <option>Others</option>
                      <option>Business - Others</option>
                      <option>Research Professional</option>
                      <option>Govt. - Security Professional</option>
                      <option>Project Manager - Non IT</option>
                      <option>Scientist</option>
                      <option>Operations Management</option>
                      <option>Govt. - Professor / Lecturer</option>
                      <option>Govt. - Operator / Technician</option>
                      <option>Accounting Professional</option>
                      <option>Consultant</option>
                      <option>Govt. - Software Professional</option>
                      <option>Medical /  Healthcare Professional</option>
                      <option>Business - Businessperson</option>
                      <option>Operator / Technician</option>
                      <option>Govt. - Airline Professional</option>
                      <option>Govt. - Law Enforcement Officer</option>
                      <option>Advertising Professional</option>
                      <option>Auditor</option>
                      <option>Architect</option>
                      <option>Doctor</option>
                      <option>Govt. - Research Professional</option>
                      <option>HR Professional</option>
                      <option>Quality Assurance Engineer</option>
                      <option>Govt. - Scientist</option>
                      <option>Govt. - Research Assistant</option>
                      <option>Education Professional</option>
                      <option>Research Assistant</option>
                      <option>Business - Interior Designer</option>
                      <option>Admin Professional</option>
                      <option>Govt. - Corporate Planning</option>
                      <option>Govt. - Education Professional</option>
                      <option>Student</option>
                      <option>Govt. - Non – IT Engineer</option>
                      <option>Business - Advertising Professional</option>
                      <option>Govt. - Project Manager - IT</option>
                      <option>UI / UX designer</option>
                      <option>Professor / Lecturer</option>
                      <option>Flight Attendant</option>
                      <option>Govt. - Consultant</option>
                      <option>Film /  Entertainment Professional</option>
                      <option>Lawyer & Legal Professional</option>
                      <option>Program Manager</option>
                      <option>Web / Graphic Designer</option>
                      <option>Finance Professional</option>
                      <option>Pilot</option>
                      <option>Govt. - Operations Management</option>
                      <option>Science Professional</option>
                      <option>Business - Broker</option>
                      <option>Product manager</option>
                      <option>Airline Professional</option>
                      <option>Security Professional</option>
                      <option>Media Professional</option>
                      <option>Pharmacist</option>
                      <option>Govt.</option>
                      <option>Business - CxO /  Chairman /  President /  Director</option>
                      <option>Govt. - Banking Professional</option>
                      <option>Customer Service</option>
                      <option>Business - Agriculture Professional</option>
                      <option>Not working</option>
                      <option>Govt. - Quality Assurance Engineer</option>
                      <option>CxO /  Chairman /  President /  Director</option>
                      <option>Govt. - Dentist</option>
                      <option>Govt. - Others</option>
                      <option>Business - Travel Professional</option>
                      <option>Business</option>
                      <option>Business - Social Services /  NGO /  Volunteer</option>
                      <option>Govt. - BPO / ITes Professional</option>
                      <option>Defence - Defence Services</option>
                      <option>Looking for job</option>
                      <option>VP /  AVP /  GM /  DGM</option>
                      <option>Govt. - Project Lead - IT</option>
                      <option>Nurse</option>
                      <option>Govt. - Analyst</option>
                      <option>Defence - Navy</option>
                      <option>Farming</option>
                      <option>Teacher</option>
                      <option>Govt. - Finance Professional</option>
                      <option>Govt. - Medical /  Healthcare Professional</option>
                      <option>BPO / ITes Professional</option>
                      <option>Physiotherapist</option>
                      <option>Govt. - Admin Professional</option>
                      <option>Agent</option>
                      <option>Govt. - Lawyer & Legal Professional</option>
                      <option>Govt. - Clerk</option>
                      <option>Business - Subject Matter Expert</option>
                      <option>Singer</option>
                      <option>Corporate Communication</option>
                      <option>Business - Media Professional</option>
                      <option>Govt. - Media Professional</option>
                      <option>Govt. - Accounting Professional</option>
                      <option>Business - Physiotherapist</option>
                      <option>Govt. - HR Professional</option>
                      <option>Merchant Naval Officer</option>
                      <option>Civil Services (IAS/ IPS/ IRS/ IES/ IFS)</option>
                      <option>Business - Education Professional</option>
                      <option>Defence - Law Enforcement Officer</option>
                      <option>Govt. - Hotels / Hospitality Professional</option>
                      <option>Interior Designer</option>
                      <option>Govt. - Sales Professional</option>
                      <option>Govt. - Physiotherapist</option>
                      <option>Govt. - Corporate Communication</option>
                      <option>Govt. - Customer Service</option>
                      <option>Business - Research Professional</option>
                      <option>Agriculture Professional</option>
                      <option>Paramedic</option>
                      <option>Actor / Model</option>
                      <option>Business - Doctor</option>
                      <option>Defence - Operator / Technician</option>
                      <option>Business - Educational Institution Owner</option>
                      <option>Clerk</option>
                      <option>Govt. - Hardware / Telecom Engineer</option>
                      <option>Govt. - Cyber / Network Security</option>
                      <option>Social Services /  NGO /  Volunteer</option>
                      <option>Govt. - Architect</option>
                      <option>Defence - Cyber / Network Security</option>
                      <option>Business - Chartered Accountant</option>
                      <option>Govt. - Nurse</option>
                      <option>Govt. - Surgeon</option>
                      <option>Travel Professional</option>
                      <option>Artist</option>
                      <option>Business - Architect</option>
                      <option>Govt. - Electronics Engineer</option>
                      <option>Govt. - Police</option>
                      <option>Business - Sportsperson</option>
                      <option>Dentist</option>
                      <option>Defence - Army</option>
                      <option>Govt. - Quality Assurance Engineer - IT</option>
                      <option>Business - Paramedic</option>
                      <option>Business - Nurse</option>
                      <option>Fashion Designer</option>
                      <option>Govt. - Agriculture Professional</option>
                      <option>Business - Actor / Model</option>
                      <option>Business - Farming</option>
                      <option>Mariner</option>
                      <option>Fitness Professional</option>
                      <option>Secretary / Front Office</option>
                      <option>Business - Writer</option>
                      <option>Defence - Quality Assurance Engineer</option>
                      <option>Govt. - Secretary / Front Office</option>
                      <option>Business - Artist</option>
                      <option>Business - Agent</option>
                      <option>Govt. - Science Professional</option>
                      <option>Journalist</option>
                      <option>Business - Teacher</option>
                      <option>Govt. - Sr. Manager /  Manager</option>
                      <option>PR Professional</option>
                      <option>Defence - Teacher</option>
                      <option>Business - Professor / Lecturer</option>
                      <option>Business - Film /  Entertainment Professional</option>
                      <option>Broker</option>
                      <option>Govt. - Marketing Professional</option>
                      <option>Govt. - Flight Attendant</option>
                      <option>Defence - Clerk</option>
                      <option>Retired</option>
                      <option>Animator</option>
                      <option>Govt. - Project Manager - Non IT</option>
                      <option>Educational Institution Owner</option>
                      <option>Govt. - Film /  Entertainment Professional</option>
                      <option>Defence - Electronics Engineer</option>
                      <option>Business - Surgeon</option>
                      <option>Beautician</option>
                      <option>Business - VP /  AVP /  GM /  DGM</option>
                      <option>Govt. - Auditor</option>
                      <option>Govt. - Program Manager</option>
                      <option>Govt. - Paramedic</option>
                      <option>Govt. - Teacher</option>
                      <option>Sportsperson</option>
                      <option>Writer</option>
                      <option>Govt. - PR Professional</option>
                      <option>Defence - Admin Professional</option>
                      <option>Govt. - Pharmacist</option>
                      <option>Defence - Paramedic</option>
                      <option>Surgeon</option>
                      <option>Business - Singer</option>
                      <option>Business - Medical /  Healthcare Professional</option>
                      <option>Govt. - Advertising Professional</option>
                      <option>Govt. - Mariner</option>
                      <option>Defence - Pilot</option>
                      <option>Defence - Mariner</option>
                      <option>Govt. - CxO /  Chairman /  President /  Director</option>
                      <option>Business - Dentist</option>
                      <option>Defence - Non – IT Engineer</option>
                      <option>Business - Beautician</option>
                      <option>Business - Psychologist</option>
                      <option>Govt. - VP /  AVP /  GM /  DGM</option>
                      <option>Librarian</option>
                      <option>Business - Science Professional</option>
                      <option>Govt. - Merchant Naval Officer</option>
                      <option>Govt. - Chartered Accountant</option>
                      <option>Govt. - Pilot</option>
                      <option>Business - Scientist</option>
                      <option>Psychologist</option>
                      <option>Defence - Doctor</option>
                      <option>Business - Research Assistant</option>
                      <option>Govt. - Animator</option>
                      <option>Business - Fashion Designer</option>
                      <option>Business - Pharmacist</option>
                      <option>Govt. - Politician</option>
                      <option>Business - Animator</option>
                      <option>Business - Fitness Professional</option>
                      <option>Businessperson</option>
                      <option>Business - Veterinary Doctor</option>
                      <option>Govt. - Veterinary Doctor</option>
                      <option>Govt. - Psychologist</option>
                      <option>Govt. - Interior Designer</option>
                      <option>Govt. - Subject Matter Expert</option>
                      <option>Defence - Software Professional</option>
                      <option>Govt. - Social Services /  NGO /  Volunteer</option>
                      <option>Defence - Scientist</option>

                    </select>
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
              </div>
              <div id='familydetails' class='collapse'>
                <div class="row">
                  
                    <div class="form-group col-md-3">
                      <label>Father Occupation</label>
                      <select class="browser-control custom-select" name="father_is">
                        <option></option>
                        <option>Service -Private</option>
                        <option>Service- Government /PSU</option>
                        <option>Civil Services</option>
                        <option>Army/Armed Forces</option>
                        <option>Business/Self Employed</option>
                        <option>Rretired</option>
                        <option>Expired</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label>Mother Occupation</label>
                      <select class="browser-control custom-select" name="mother_is">
                        <option></option>
                        <option>Service -Private</option>
                        <option>Service- Government /PSU</option>
                        <option>Civil Services</option>
                        <option>Army/Armed Forces</option>
                        <option>Business/Self Employed</option>
                        <option>Rretired</option>
                        <option>Expired</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label>Family Value</label>
                      <select class="browser-control custom-select" name="family_value">
                        <option></option>
                        <option>Liberal</option>
                        <option>Moderate</option>
                        <option>Orthodox</option>
                        <option>Conservative</option>
                        <option>Conservative</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label>Family Type</label>
                      <select class="browser-control custom-select" name="family_type">
                        <option></option>
                        <option>Joint Family</option>
                        <option>Nuclear family</option>
                        <option>Others</option>
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label>Affluence Level</label>
                      <select class="browser-control custom-select" name="affluence_level">
                        <option></option>
                        <option>Affluence Level</option>
                        <option>Upper Middle</option>
                        <option>Not filled in</option>
                        <option>Rich/Affluent</option>
                        <option>Middle Class</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label>Family Income</label>
                      <input type="hidden" name="family_income"/>
                      <div class="row">
                        <div class="col-md-6">
                          <select class="browser-default custom-select " id="family_income_start">
                            <option value="0">Rs. 0</option>
                            <option value="1">Rs.1 Lakh</option>
                            <option value="2">Rs.2 Lakh</option>
                            <option value="3">Rs.3 Lakh</option>
                            <option value="4">Rs.4 Lakh</option>
                            <option value="5">Rs.5 Lakh</option>
                            <option value="5">Rs.7.5 Lakh</option>
                            <option value="10">Rs.10 Lakh</option>
                            <option value="15">Rs.15 Lakh</option>
                            <option value="20">Rs.20 Lakh</option>
                            <option value="25">Rs.25 Lakh</option>
                            <option value="35">Rs.35 Lakh</option>
                            <option value="50">Rs.50 Lakh</option>
                            <option value="70">Rs.70 Lakh</option>
                            <option value="100">Rs.1 Crore</option>
                            <option value="500">Rs.5 Crore</option>
                            <option value="1000">Rs.10 Crore</option>
                            <option value="5000">Rs.50 Crore</option>
                            <option value="10000">Rs.100 Crore</option>
                            <option value="50000">Rs.500 Crore</option>
                            <option value="100000">Rs.1000 Crore</option>
                            <option value="900000">Rs.1000+ Crore</option>

                          </select>
                        </div>
                        <div class="col-md-6">
                          <select class="browser-default custom-select " id="family_income_end">
                            <option value="0">Rs. 0</option>
                            <option value="1">Rs.1 Lakh</option>
                            <option value="2">Rs.2 Lakh</option>
                            <option value="3">Rs.3 Lakh</option>
                            <option value="4">Rs.4 Lakh</option>
                            <option value="5">Rs.5 Lakh</option>
                            <option value="5">Rs.7.5 Lakh</option>
                            <option value="10">Rs.10 Lakh</option>
                            <option value="15">Rs.15 Lakh</option>
                            <option value="20">Rs.20 Lakh</option>
                            <option value="25">Rs.25 Lakh</option>
                            <option value="35">Rs.35 Lakh</option>
                            <option value="50">Rs.50 Lakh</option>
                            <option value="70">Rs.70 Lakh</option>
                            <option value="100">Rs.1 Crore</option>
                            <option value="500">Rs.5 Crore</option>
                            <option value="1000">Rs.10 Crore</option>
                            <option value="5000">Rs.50 Crore</option>
                            <option value="10000">Rs.100 Crore</option>
                            <option value="50000">Rs.500 Crore</option>
                            <option value="100000">Rs.1000 Crore</option>
                            <option value="900000">Rs.1000+ Crore</option>

                          </select>
                        </div>
                      </div>                      
                    </div>
                    <div class="form-group col-md-3">
                      <label>Net Worth</label>
                      <input type="text" class="form-control" name="net_worth" value="<?php echo getValue($profile,"net_worth"); ?>"/>
                    </div>
                    <div class="form-group col-md-3">
                      <label>About Family</label>
                      <input type="text" class="form-control" name="about_family" value="<?php echo getValue($profile,"about_family"); ?>"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label>Unmarried Sisters</label>
                      <select class="browser-control custom-select" name="unmarried_sisters">
                        <option>None</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>3+</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label>Married Sisters</label>
                      <select class="browser-control custom-select" name="married_sisters">
                        <option>None</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>3+</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label>Unmarried Brothers</label>
                      <select class="browser-control custom-select" name="unmarried_brothers">
                        <option>None</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>3+</option>
                      </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label>Married Brothers</label>
                      <select class="browser-control custom-select" name="married_brothers">
                        <option>None</option>
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>3+</option>
                      </select>
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
                      <select class="browser-default custom-select" name="industry_type" id="industry_type">
                      </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-3">
                      <label>Family Based out of</label>
                      
                      <select class="browser-default custom-select" name="family_based_out_of">
                          <option></option>
                          <option>Afghanistan</option>
                          <option>Albania</option>
                          <option>Algeria</option>
                          <option>American Samoa</option>
                          <option>Andorra</option>
                          <option>Angola</option>
                          <option>Anguilla</option>
                          <option>Antigua and Barbuda</option>
                          <option>Argentina</option>
                          <option>Armenia</option>
                          <option>Australia</option>
                          <option>Austria</option>
                          <option>Azerbaijan</option>
                          <option>Bahamas</option>
                          <option>Bahrain</option>
                          <option>Bangladesh</option>
                          <option>Barbados</option>
                          <option>Belarus</option>
                          <option>Belgium</option>
                          <option>Belize</option>
                          <option>Benin</option>
                          <option>Bermuda</option>
                          <option>Bhutan</option>
                          <option>Bolivia</option>
                          <option>Bosnia and Herzegovina</option>
                          <option>Botswana</option>
                          <option>Brazil</option>
                          <option>British Virgin Islands</option>
                          <option>Brunei</option>
                          <option>Bulgaria</option>
                          <option>Burkina Faso</option>
                          <option>Burundi</option>
                          <option>Cambodia</option>
                          <option>Cameroon</option>
                          <option>Canada</option>
                          <option>Canary Islands</option>
                          <option>Cape Verde</option>
                          <option>Cayman Islands</option>
                          <option>Central African Republic</option>
                          <option>Chad</option>
                          <option>Chile</option>
                          <option>China</option>
                          <option>Colombia</option>
                          <option>Comoros</option>
                          <option>Congo</option>
                          <option>Cook Islands</option>
                          <option>Costa Rica</option>
                          <option>Cote dIvoire</option>
                          <option>Croatia</option>
                          <option>Cuba</option>
                          <option>Cyprus</option>
                          <option>Czech Republic</option>
                          <option>Denmark</option>
                          <option>Dominica</option>
                          <option>Dominican Republic</option>
                          <option>East Timor</option>
                          <option>Ecuador</option>
                          <option>Egypt</option>
                          <option>El Salvador</option>
                          <option>Equatorial Guinea</option>
                          <option>Eritrea</option>
                          <option>Estonia</option>
                          <option>Ethiopia</option>
                          <option>Faeroe Islands</option>
                          <option>Falkland Islands (Islas Malvinas)</option>
                          <option>Fiji</option>
                          <option>Finland</option>
                          <option>France</option>
                          <option>French Guiana</option>
                          <option>French Polynesia</option>
                          <option>Gambia</option>
                          <option>Georgia</option>
                          <option>Germany</option>
                          <option>Ghana</option>
                          <option>Gibraltar</option>
                          <option>Greece</option>
                          <option>Greenland</option>
                          <option>Grenada</option>
                          <option>Guadeloupe</option>
                          <option>Guam</option>
                          <option>Guatemala</option>
                          <option>Guinea</option>
                          <option>Guinea-Bissau</option>
                          <option>Guyana</option>
                          <option>Haiti</option>
                          <option>Holland</option>
                          <option>Honduras</option>
                          <option>Hong Kong</option>
                          <option>Hungary</option>
                          <option>Iceland</option>
                          <option>India</option>
                          <option>Indonesia</option>
                          <option>Iran</option>
                          <option>Iraq</option>
                          <option>Ireland</option>
                          <option>Isle of Man</option>
                          <option>Israel</option>
                          <option>Italy</option>
                          <option>Jamaica</option>
                          <option>Japan</option>
                          <option>Jordan</option>
                          <option>Kazakhstan</option>
                          <option>Kenya</option>
                          <option>Kiribati</option>
                          <option>Kuwait</option>
                          <option>Kyrgyzstan</option>
                          <option>Laos</option>
                          <option>Latvia</option>
                          <option>Lebanon</option>
                          <option>Lesotho</option>
                          <option>Liberia</option>
                          <option>Libya</option>
                          <option>Liechtenstein</option>
                          <option>Lithuania</option>
                          <option>Luxembourg</option>
                          <option>Macau</option>
                          <option>Macedonia</option>
                          <option>Madagascar</option>
                          <option>Malawi</option>
                          <option>Malaysia</option>
                          <option>Maldives</option>
                          <option>Mali</option>
                          <option>Malta</option>
                          <option>Martinique</option>
                          <option>Mauritius</option>
                          <option>Mexico</option>
                          <option>Moldova</option>
                          <option>Monaco</option>
                          <option>Mongolia</option>
                          <option>Montenegro</option>
                          <option>Montserrat</option>
                          <option>Morocco</option>
                          <option>Mozambique</option>
                          <option>Myanmar</option>
                          <option>Namibia</option>
                          <option>Nepal</option>
                          <option>Netherlands</option>
                          <option>Netherlands Antilles</option>
                          <option>New Caledonia</option>
                          <option>New Zealand</option>
                          <option>Nicaragua</option>
                          <option>Niger</option>
                          <option>Nigeria</option>
                          <option>North Korea</option>
                          <option>Norway</option>
                          <option>Oman</option>
                          <option>Others</option>
                          <option>Pakistan</option>
                          <option>Panama</option>
                          <option>Papua New Guinea</option>
                          <option>Paraguay</option>
                          <option>Peru</option>
                          <option>Philippines</option>
                          <option>Poland</option>
                          <option>Portugal</option>
                          <option>Puerto Rico</option>
                          <option>Qatar</option>
                          <option>Reunion</option>
                          <option>Romania</option>
                          <option>Russia</option>
                          <option>Rwanda</option>
                          <option>Saint Kitts and Nevis</option>
                          <option>Saint Lucia</option>
                          <option>Saint Vincent and the Grenadines</option>
                          <option>San Marino</option>
                          <option>Sao Tome and Principe</option>
                          <option>Saudi Arabia</option>
                          <option>Senegal</option>
                          <option>Serbia</option>
                          <option>Seychelles</option>
                          <option>Sierra Leone</option>
                          <option>Singapore</option>
                          <option>Slovakia</option>
                          <option>Slovenia</option>
                          <option>Solomon Islands</option>
                          <option>Somalia</option>
                          <option>South Africa</option>
                          <option>South Korea</option>
                          <option>Spain</option>
                          <option>Sri Lanka</option>
                          <option>Sudan</option>
                          <option>Suriname</option>
                          <option>Swaziland</option>
                          <option>Sweden</option>
                          <option>Switzerland</option>
                          <option>Syrian Arab Republic</option>
                          <option>Tahiti</option>
                          <option>Taiwan</option>
                          <option>Tajikistan</option>
                          <option>Tanzania</option>
                          <option>Thailand</option>
                          <option>Togo</option>
                          <option>Trinidad and Tobago</option>
                          <option>Tunisia</option>
                          <option>Turkey</option>
                          <option>Turkmenistan</option>
                          <option>Turks and Caicos Islands</option>
                          <option>Uganda</option>
                          <option>Ukraine</option>
                          <option>United Arab Emirates</option>
                          <option>United Kingdom</option>
                          <option>United States</option>
                          <option>United States Virgin Islands</option>
                          <option>Uruguay</option>
                          <option>Uzbekistan</option>
                          <option>Vanuatu</option>
                          <option>Vatican City State</option>
                          <option>Venezuela</option>
                          <option>Vietnam</option>
                          <option>Wallis and Futuna</option>
                          <option>Yemen</option>
                          <option>Yugoslavia</option>
                          <option>Zambia</option>
                          <option>Zimbabwe</option>

                        </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label>Native Country</label>
                      
                      <select class="browser-default custom-select" name="native_country" id="native_country">
                          <option></option>
                          <option>Afghanistan</option>
                          <option>Albania</option>
                          <option>Algeria</option>
                          <option>American Samoa</option>
                          <option>Andorra</option>
                          <option>Angola</option>
                          <option>Anguilla</option>
                          <option>Antigua and Barbuda</option>
                          <option>Argentina</option>
                          <option>Armenia</option>
                          <option>Australia</option>
                          <option>Austria</option>
                          <option>Azerbaijan</option>
                          <option>Bahamas</option>
                          <option>Bahrain</option>
                          <option>Bangladesh</option>
                          <option>Barbados</option>
                          <option>Belarus</option>
                          <option>Belgium</option>
                          <option>Belize</option>
                          <option>Benin</option>
                          <option>Bermuda</option>
                          <option>Bhutan</option>
                          <option>Bolivia</option>
                          <option>Bosnia and Herzegovina</option>
                          <option>Botswana</option>
                          <option>Brazil</option>
                          <option>British Virgin Islands</option>
                          <option>Brunei</option>
                          <option>Bulgaria</option>
                          <option>Burkina Faso</option>
                          <option>Burundi</option>
                          <option>Cambodia</option>
                          <option>Cameroon</option>
                          <option>Canada</option>
                          <option>Canary Islands</option>
                          <option>Cape Verde</option>
                          <option>Cayman Islands</option>
                          <option>Central African Republic</option>
                          <option>Chad</option>
                          <option>Chile</option>
                          <option>China</option>
                          <option>Colombia</option>
                          <option>Comoros</option>
                          <option>Congo</option>
                          <option>Cook Islands</option>
                          <option>Costa Rica</option>
                          <option>Cote dIvoire</option>
                          <option>Croatia</option>
                          <option>Cuba</option>
                          <option>Cyprus</option>
                          <option>Czech Republic</option>
                          <option>Denmark</option>
                          <option>Dominica</option>
                          <option>Dominican Republic</option>
                          <option>East Timor</option>
                          <option>Ecuador</option>
                          <option>Egypt</option>
                          <option>El Salvador</option>
                          <option>Equatorial Guinea</option>
                          <option>Eritrea</option>
                          <option>Estonia</option>
                          <option>Ethiopia</option>
                          <option>Faeroe Islands</option>
                          <option>Falkland Islands (Islas Malvinas)</option>
                          <option>Fiji</option>
                          <option>Finland</option>
                          <option>France</option>
                          <option>French Guiana</option>
                          <option>French Polynesia</option>
                          <option>Gambia</option>
                          <option>Georgia</option>
                          <option>Germany</option>
                          <option>Ghana</option>
                          <option>Gibraltar</option>
                          <option>Greece</option>
                          <option>Greenland</option>
                          <option>Grenada</option>
                          <option>Guadeloupe</option>
                          <option>Guam</option>
                          <option>Guatemala</option>
                          <option>Guinea</option>
                          <option>Guinea-Bissau</option>
                          <option>Guyana</option>
                          <option>Haiti</option>
                          <option>Holland</option>
                          <option>Honduras</option>
                          <option>Hong Kong</option>
                          <option>Hungary</option>
                          <option>Iceland</option>
                          <option>India</option>
                          <option>Indonesia</option>
                          <option>Iran</option>
                          <option>Iraq</option>
                          <option>Ireland</option>
                          <option>Isle of Man</option>
                          <option>Israel</option>
                          <option>Italy</option>
                          <option>Jamaica</option>
                          <option>Japan</option>
                          <option>Jordan</option>
                          <option>Kazakhstan</option>
                          <option>Kenya</option>
                          <option>Kiribati</option>
                          <option>Kuwait</option>
                          <option>Kyrgyzstan</option>
                          <option>Laos</option>
                          <option>Latvia</option>
                          <option>Lebanon</option>
                          <option>Lesotho</option>
                          <option>Liberia</option>
                          <option>Libya</option>
                          <option>Liechtenstein</option>
                          <option>Lithuania</option>
                          <option>Luxembourg</option>
                          <option>Macau</option>
                          <option>Macedonia</option>
                          <option>Madagascar</option>
                          <option>Malawi</option>
                          <option>Malaysia</option>
                          <option>Maldives</option>
                          <option>Mali</option>
                          <option>Malta</option>
                          <option>Martinique</option>
                          <option>Mauritius</option>
                          <option>Mexico</option>
                          <option>Moldova</option>
                          <option>Monaco</option>
                          <option>Mongolia</option>
                          <option>Montenegro</option>
                          <option>Montserrat</option>
                          <option>Morocco</option>
                          <option>Mozambique</option>
                          <option>Myanmar</option>
                          <option>Namibia</option>
                          <option>Nepal</option>
                          <option>Netherlands</option>
                          <option>Netherlands Antilles</option>
                          <option>New Caledonia</option>
                          <option>New Zealand</option>
                          <option>Nicaragua</option>
                          <option>Niger</option>
                          <option>Nigeria</option>
                          <option>North Korea</option>
                          <option>Norway</option>
                          <option>Oman</option>
                          <option>Others</option>
                          <option>Pakistan</option>
                          <option>Panama</option>
                          <option>Papua New Guinea</option>
                          <option>Paraguay</option>
                          <option>Peru</option>
                          <option>Philippines</option>
                          <option>Poland</option>
                          <option>Portugal</option>
                          <option>Puerto Rico</option>
                          <option>Qatar</option>
                          <option>Reunion</option>
                          <option>Romania</option>
                          <option>Russia</option>
                          <option>Rwanda</option>
                          <option>Saint Kitts and Nevis</option>
                          <option>Saint Lucia</option>
                          <option>Saint Vincent and the Grenadines</option>
                          <option>San Marino</option>
                          <option>Sao Tome and Principe</option>
                          <option>Saudi Arabia</option>
                          <option>Senegal</option>
                          <option>Serbia</option>
                          <option>Seychelles</option>
                          <option>Sierra Leone</option>
                          <option>Singapore</option>
                          <option>Slovakia</option>
                          <option>Slovenia</option>
                          <option>Solomon Islands</option>
                          <option>Somalia</option>
                          <option>South Africa</option>
                          <option>South Korea</option>
                          <option>Spain</option>
                          <option>Sri Lanka</option>
                          <option>Sudan</option>
                          <option>Suriname</option>
                          <option>Swaziland</option>
                          <option>Sweden</option>
                          <option>Switzerland</option>
                          <option>Syrian Arab Republic</option>
                          <option>Tahiti</option>
                          <option>Taiwan</option>
                          <option>Tajikistan</option>
                          <option>Tanzania</option>
                          <option>Thailand</option>
                          <option>Togo</option>
                          <option>Trinidad and Tobago</option>
                          <option>Tunisia</option>
                          <option>Turkey</option>
                          <option>Turkmenistan</option>
                          <option>Turks and Caicos Islands</option>
                          <option>Uganda</option>
                          <option>Ukraine</option>
                          <option>United Arab Emirates</option>
                          <option>United Kingdom</option>
                          <option>United States</option>
                          <option>United States Virgin Islands</option>
                          <option>Uruguay</option>
                          <option>Uzbekistan</option>
                          <option>Vanuatu</option>
                          <option>Vatican City State</option>
                          <option>Venezuela</option>
                          <option>Vietnam</option>
                          <option>Wallis and Futuna</option>
                          <option>Yemen</option>
                          <option>Yugoslavia</option>
                          <option>Zambia</option>
                          <option>Zimbabwe</option>

                        </select>
                    </div>
                    <div class="form-group col-md-3">
                      <label>Native State</label>
                      
                      <select class="browser-control custom-select" name="native_state" id="native_state">
                      </select>
                    </div>
                </div>
              </div>
              <div id='horoscope' class='collapse'>
                <div class="row">
                  
                    <div class="form-group col-md-6">
                      <label>DOB</label>
                      <input type="date" class="form-control" name="dob"/>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Age</label>
                      <input type="text" class="form-control" disabled/>
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
                      <select class="browser-control custom-select" name="manglik">
                        <option></option>
                        <option>Manglik</option>
                        <option>Angshik</option>
                        <option>Non-manglik</option>
                        <option>Don’t know</option>

                      </select>
                    </div>
                    <div class="form-group col-md-6">
                      <label>Believes in Horoscope</label>
                      <select class="browser-control custom-select" name="believes_in_horoscope">
                        <option></option>
                        <option>Must</option>
                        <option>Not Necessary</option>

                      </select>
                    </div>
                  </div>
                  
                  <div class="row">
                    <div class="form-group col-md-6">
                      <label>Raasi</label>
                      <input type="text" class="form-control" name="rassi" value="<?php echo getValue($profile,"rassi"); ?>"/>
                    </div>
                  </div>
                  
                </div>  
              </div>
              <div id='identity' class='collapse'>
              <div class="row">
                  
                    
                    <div class="form-group col-md-4">
                      <label>Phone</label>
                      <input type="number" class="form-control" name="phone" value="<?php echo getValue($profile,"phone"); ?>"/>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Alternate Phone Number</label>
                      <input type="number" class="form-control" name="alternate_phone" value="<?php echo getValue($profile,"alternate_phone"); ?>"/>
                    </div>
                    <div class="form-group col-md-4">
                      <label>WhatsApp Number</label>
                      <input type="number" class="form-control" name="whatsapp_number" value="<?php echo getValue($profile,"whatsapp_number"); ?>"/>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-4">
                      <label>Phone Number Verified</label>
                      <select class="browser-control custom-select" name="mobile_verified">
                        <option></option>
                        <option>Yes</option>
                        <option>No</option>
                        <option>Not provided</option>
                      </select>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Email</label>
                      <input type="email" class="form-control" name="email" value="<?php echo getValue($profile,"email"); ?>"/>
                    </div>
                    <div class="form-group col-md-4">
                      <label>Email Id Verified</label>
                      <select class="browser-control custom-select" name="emailid_verified">
                        <option></option>
                        <option>Yes</option>
                        <option>No</option>
                        <option>Not provided</option>
                      </select>
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
                      <input type="number" class="form-control" name="pinconde" value="<?php echo getValue($profile,"pincode"); ?>"/>
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
                      <select class="browser-control custom-select" name="aadhar_verified">
                        <option></option>
                        <option>Yes</option>
                        <option>No</option>
                        <option>Not provided</option>
                      </select>
                    </div>
                    
                    
                    <div class="form-group col-md-4">
                      <label>Aadhar Proof</label>
                      <select class="browser-control custom-select" name="aadhar_proof">
                        <option></option>
                        <option>Given</option>
                        <option>Not Given</option>                        
                      </select>
                    </div>

                    <div class="form-group col-md-4">
                      <label>Company WebSite</label>
                      <input type="text" class="form-control" name="company_website" value="<?php echo getValue($profile,"company_website"); ?>"/>
                    </div>
                  
                </div>  
              </div>
              <div id='looks' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Body Type</label>
                      <select class="browser-control custom-select" name="body_type">
                        <option></option>
                        <option>Athletic</option>
                        <option>Slim</option>
                        <option>Average</option>
                        <option>Heavy</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Food Habits</label>
                      <select class="browser-control custom-select" name="food_habits">
                        <option></option>
                        <option>Eggetarian</option>
                        <option>Jain</option>
                        <option>Non Veg</option>
                        <option>Vegetarian</option>
                        <option>Fishetarian</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Drink</label>
                      <select class="browser-control custom-select" name="drink">
                        <option></option>
                        <option>Drinks occasionally</option>
                        <option>Doesn't drink</option>
                        <option>Drinks</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Smoke</label>
                      <select class="browser-control custom-select" name="smoke">
                        <option></option>
                        <option>Doesn't smoke</option>
                        <option>Smokes</option>
                        <option>Smokes occasionally</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Complexion</label>
                      <select class="browser-control custom-select" name="complexion">
                        <option></option>
                        <option>Fair</option>
                        <option>Wheatish</option>
                        <option>Dark</option>
                        <option>Very Fair</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Weight</label>
                      <input type="text" class="form-control" name="weight" value="<?php echo getValue($profile,"weight"); ?>"/>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Hair Type</label>
                      <select class="browser-control custom-select" name="hair_type">
                        <option></option>
                        <option>Bald</option>
                        <option>Semi- Bald</option>
                        <option>Normal Hair</option>
                        <option>Good Hair</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Looks</label>
                      <select class="browser-control custom-select" name="looks">
                        <option></option>
                        <option>Extraordinary</option>
                        <option>Classy</option>
                        <option>Average</option>
                        <option>Below Average</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label>Specs</label>
                      <select class="browser-control custom-select" name="specs">
                        <option></option>
                        <option>Wear Specs</option>
                        <option>Normal Eyesight</option>
                        <option>Wear Lenses</option>

                      </select>
                    </div>
                    <div class="form-group">
                      <label>Communication</label>
                      <select class="browser-control custom-select" name="communication">
                        <option></option>
                        <option>Classy</option>
                        <option>Good</option>
                        <option>Average</option>
                        <option>Normal</option>
                        <option>Bad</option>
                      </select>
                    </div>
                  </div>
                </div>  
              </div>
              <div id='partner' class='collapse'>
                <div class="row">
                  <div class="form-group col-md-3">
                        <label>From Age</label>
                        
                        <select class="browser-default custom-select" name="pp_fromage" id="pp_fromage">
                        </select>
                  </div>
                  <div class="form-group col-md-3">
                        <label>To Age</label>
                        
                        <select class="browser-default custom-select" name="pp_toage" id="pp_toage">
                        </select>
                  </div>
                  <div class="form-group col-md-3">
                        <label>Min Height</label>
                        
                        <select class="browser-control custom-select" name="pp_min_height">
                          <option value="0"></option>
                          <option value="1.22">4 '0" (1.22mts)</option>
                          <option value="1.24">4 '1" (1.24mts)</option>
                          <option value="1.28">4 '2" (1.28mts)</option>
                          <option value="1.31">4 '3" (1.31mts)</option>
                          <option value="1.34">4 '4" (1.34mts)</option>
                          <option value="1.35">4 '5" (1.35mts)</option>
                          <option value="1.37">4 '6" (1.37mts)</option>
                          <option value="1.4">4 '7" (1.40mts)</option>
                          <option value="1.42">4 '8" (1.42mts)</option>
                          <option value="1.45">4 '9" (1.45mts)</option>
                          <option value="1.47">4 '10" (1.47mts)</option>
                          <option value="1.5">4 '11" (1.50mts)</option>
                          <option value="1.52">5 '0" (1.52mts)</option>
                          <option value="1.55">5 '1" (1.55mts)</option>
                          <option value="1.58">5 '2" (1.58mts)</option>
                          <option value="1.6">5 '3" (1.60mts)</option>
                          <option value="1.63">5 '4" (1.63mts)</option>
                          <option value="1.65">5 '5" (1.65mts)</option>
                          <option value="1.68">5 '6" (1.68mts)</option>
                          <option value="1.7">5 '7" (1.70mts)</option>
                          <option value="1.73">5 '8" (1.73mts)</option>
                          <option value="1.75">5 '9" (1.75mts)</option>
                          <option value="1.78">5 '10" (1.78mts)</option>
                          <option value="1.8">5 '11" (1.80mts)</option>
                          <option value="1.83">6 '0" (1.83mts)</option>
                          <option value="1.85">6 '1" (1.85mts)</option>
                          <option value="1.88">6 '2" (1.88mts)</option>
                          <option value="1.91">6 '3" (1.91mts)</option>
                          <option value="1.93">6 '4" (1.93mts)</option>
                          <option value="1.96">6 '5" (1.96mts)</option>
                          <option value="1.98">6 '6" (1.98mts)</option>
                          <option value="2.01">6 '7" (2.01mts)</option>
                          <option value="2.03">6 '8" (2.03mts)</option>
                          <option value="2.06">6 '9" (2.06mts)</option>
                          <option value="2.08">6 '10" (2.08mts)</option>
                          <option value="2.11">6 '11" (2.11mts)</option>
                          <option value="2.13">7 ' (2.13mts)plus</option>

                          </select>
                  </div>
                  <div class="form-group col-md-3">
                        <label>Max Height</label>
                        
                        <select class="browser-control custom-select" name="pp_max_height">
                          <option value="0"></option>
                          <option value="1.22">4 '0" (1.22mts)</option>
                          <option value="1.24">4 '1" (1.24mts)</option>
                          <option value="1.28">4 '2" (1.28mts)</option>
                          <option value="1.31">4 '3" (1.31mts)</option>
                          <option value="1.34">4 '4" (1.34mts)</option>
                          <option value="1.35">4 '5" (1.35mts)</option>
                          <option value="1.37">4 '6" (1.37mts)</option>
                          <option value="1.4">4 '7" (1.40mts)</option>
                          <option value="1.42">4 '8" (1.42mts)</option>
                          <option value="1.45">4 '9" (1.45mts)</option>
                          <option value="1.47">4 '10" (1.47mts)</option>
                          <option value="1.5">4 '11" (1.50mts)</option>
                          <option value="1.52">5 '0" (1.52mts)</option>
                          <option value="1.55">5 '1" (1.55mts)</option>
                          <option value="1.58">5 '2" (1.58mts)</option>
                          <option value="1.6">5 '3" (1.60mts)</option>
                          <option value="1.63">5 '4" (1.63mts)</option>
                          <option value="1.65">5 '5" (1.65mts)</option>
                          <option value="1.68">5 '6" (1.68mts)</option>
                          <option value="1.7">5 '7" (1.70mts)</option>
                          <option value="1.73">5 '8" (1.73mts)</option>
                          <option value="1.75">5 '9" (1.75mts)</option>
                          <option value="1.78">5 '10" (1.78mts)</option>
                          <option value="1.8">5 '11" (1.80mts)</option>
                          <option value="1.83">6 '0" (1.83mts)</option>
                          <option value="1.85">6 '1" (1.85mts)</option>
                          <option value="1.88">6 '2" (1.88mts)</option>
                          <option value="1.91">6 '3" (1.91mts)</option>
                          <option value="1.93">6 '4" (1.93mts)</option>
                          <option value="1.96">6 '5" (1.96mts)</option>
                          <option value="1.98">6 '6" (1.98mts)</option>
                          <option value="2.01">6 '7" (2.01mts)</option>
                          <option value="2.03">6 '8" (2.03mts)</option>
                          <option value="2.06">6 '9" (2.06mts)</option>
                          <option value="2.08">6 '10" (2.08mts)</option>
                          <option value="2.11">6 '11" (2.11mts)</option>
                          <option value="2.13">7 ' (2.13mts)plus</option>

                          </select>
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
                        <select class="browser-default custom-select" name="pp_marital_status">
                          <option>Never Married</option>
                          <option>Divorced</option>
                          <option>Annulled</option>
                          <option>Widowed</option>
                          <option>Awaiting Divorce</option>
                          <option>Married</option>
                        </select>
                  </div>
                  <div class="form-group col-md-3">
                        <label>Income</label>
                        <input type="hidden" class="form-control" name="pp_income"/>
                        <div class="row">
                        <div class="col-md-6">
                          <select class="browser-default custom-select " id="pp_income_start">
                            <option value="0">Rs. 0</option>
                            <option value="1">Rs.1 Lakh</option>
                            <option value="2">Rs.2 Lakh</option>
                            <option value="3">Rs.3 Lakh</option>
                            <option value="4">Rs.4 Lakh</option>
                            <option value="5">Rs.5 Lakh</option>
                            <option value="5">Rs.7.5 Lakh</option>
                            <option value="10">Rs.10 Lakh</option>
                            <option value="15">Rs.15 Lakh</option>
                            <option value="20">Rs.20 Lakh</option>
                            <option value="25">Rs.25 Lakh</option>
                            <option value="35">Rs.35 Lakh</option>
                            <option value="50">Rs.50 Lakh</option>
                            <option value="70">Rs.70 Lakh</option>
                            <option value="100">Rs.1 Crore</option>
                            <option value="500">Rs.5 Crore</option>
                            <option value="1000">Rs.10 Crore</option>
                            <option value="5000">Rs.50 Crore</option>
                            <option value="10000">Rs.100 Crore</option>
                            <option value="50000">Rs.500 Crore</option>
                            <option value="100000">Rs.1000 Crore</option>
                            <option value="900000">Rs.1000+ Crore</option>

                          </select>
                        </div>
                        <div class="col-md-6">
                          <select class="browser-default custom-select " id="pp_income_end">
                            <option value="0">Rs. 0</option>
                            <option value="1">Rs.1 Lakh</option>
                            <option value="2">Rs.2 Lakh</option>
                            <option value="3">Rs.3 Lakh</option>
                            <option value="4">Rs.4 Lakh</option>
                            <option value="5">Rs.5 Lakh</option>
                            <option value="5">Rs.7.5 Lakh</option>
                            <option value="10">Rs.10 Lakh</option>
                            <option value="15">Rs.15 Lakh</option>
                            <option value="20">Rs.20 Lakh</option>
                            <option value="25">Rs.25 Lakh</option>
                            <option value="35">Rs.35 Lakh</option>
                            <option value="50">Rs.50 Lakh</option>
                            <option value="70">Rs.70 Lakh</option>
                            <option value="100">Rs.1 Crore</option>
                            <option value="500">Rs.5 Crore</option>
                            <option value="1000">Rs.10 Crore</option>
                            <option value="5000">Rs.50 Crore</option>
                            <option value="10000">Rs.100 Crore</option>
                            <option value="50000">Rs.500 Crore</option>
                            <option value="100000">Rs.1000 Crore</option>
                            <option value="900000">Rs.1000+ Crore</option>

                          </select>
                        </div>
                      </div>
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                    <label>Country</label>                        
                    <input type="text" class="form-control" name="pp_country" value="<?php echo getValue($profile,"country"); ?>"/>                        
                  </div>
                  <div class="form-group col-md-3">
                    <label>State</label>
                    <input type="text" class="form-control" name="pp_state" value="<?php echo getValue($profile,"pp_state"); ?>"/>
                    
                  </div>
                  <div class="form-group col-md-3">
                    <label>Education</label>
                    <input type="text" class="form-control" name="pp_education_qualification" value="<?php echo getValue($profile,"pp_education_qualification"); ?>"/>
                  </div>
                  <div class="form-group col-md-3">
                    <label>Employed as</label> 
                    <input type="text" class="form-control" name="pp_employed_as" value="<?php echo getValue($profile,"pp_employed_as"); ?>"/>                    
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                        <label>Smoker</label>
                        <input type="text" class="form-control" name="pp_smoker" value="<?php echo getValue($profile,"pp_smoker"); ?>">
                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Drinker</label>
                        <input type="text" class="form-control" name="pp_drinker" value="<?php echo getValue($profile,"pp_drinker"); ?>"/>                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Veg/Non Veg</label>
                        <input type="text" class="form-control" name="pp_veg/non_veg" value="<?php echo getValue($profile,"pp_veg/non_veg"); ?>"/>
                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Manglik</label>
                        <input type="text" class="form-control" name="pp_manglik" value="<?php echo getValue($profile,"pp_manglik"); ?>"/>                        
                  </div>
                </div>
                <div class="row">
                  
                  <div class="form-group col-md-3">
                        <label>Mother Tongue</label>
                        <input type="text" class="form-control" name="pp_mother_tongue" value="<?php echo getValue($profile,"pp_mother_tongue"); ?>"/>
                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Complexion</label>
                        <input type="text" class="form-control" name="pp_complexion" value="<?php echo getValue($profile,"pp_complexion"); ?>"/>                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Body Type</label>  
                        <input type="text"  class="form-control" name="pp_body_type" value="<?php echo getValue($profile,"pp_body_type"); ?>"/>                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>Have Children</label>
                        <input type="text" class="form-control" name="pp_have_children" value="<?php echo getValue($profile,"pp_have_children"); ?>"/>                        
                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-3">
                        <label>Challenged</label>
                        <input type="text" class="form-control" name="pp_challenged" value="<?php echo getValue($profile,"pp_challenged"); ?>"/>                        
                  </div>
                  <div class="form-group col-md-3">
                        <label>About Partner</label>
                        <input type="text" class="form-control" name="pp_about_partner" value="<?php echo getValue($profile,"pp_about_partner"); ?>"/>
                  </div>
                  
                </div>
                
              </div>
              <div id='calling' class='collapse'>
                <div class="row">                  
                  <div class="form-group col-md-4">
                    <label>Last Calling date</label>
                    <input type="date" class="form-control" name="last_calling_date"/>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Calling for</label>
                    <select class="browser-control custom-select" name="calling_for">
                      <option></option>
                      <option>Lead</option>
                      <option>Sample Profile Status</option>
                      <option>Profile Shared</option>
                      <option>Meeting Confirmation</option>
                      <option>Lead Payment</option>

                    </select>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Calling Status</label>
                    <select class="browser-control custom-select" name="calling_status">
                      <option></option>
                      <option>Pending</option>
                      <option>Follow Up</option>
                      <option>Profile Rejected</option>
                      <option>Don’T Call</option>
                      <option>Accepted</option>
                      <option>Wrong Number</option>
                      <option>Already Married</option>
                    </select>

                  </div>
                </div>
                <div class="row">
                  <div class="form-group col-md-4">
                    <label>Calling Comments</label>
                    <input type="text" class="form-control" name="calling_comments"/>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Profile Shortlisted for id</label>
                    <input type="text" class="form-control" name="profile_shortlisted_for"/>
                  </div>
                  <div class="form-group col-md-4">
                    <label>Response of shared Profile</label>
                    <input type="text" class="form-control" name="response_shared_profile"/>
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
                        <select class="browser-control custom-select" name="lead_status">
                          <option></option>
                          <option>Pending</option>
                          <option>Paid Client</option>
                          <option>Rejected</option>
                          <option>Follow Up</option>
                          <option>Post Sample Will Decide</option>
                          <option>Pay When You Marry</option>
                          <option>Pay On Meeting</option>

                        </select>
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
                        <select class="browser-control custom-select" name="lead_biodata">
                          <option></option>
                          <option>Yes</option>
                          <option>No</option>
                          <option>Would Share Soon</option>
                        </select>
                  </div>
                  <div class="form-group">
                        <label>Lead-Matrimony Picture</label>
                        <select class="browser-control custom-select" name="lead_matrimony_picture">
                          <option></option>
                          <option>Yes</option>
                          <option>No</option>
                          <option>Would Share Soon</option>
                        </select>
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
                        <select class="browser-control custom-select" name="meeting_type">
                          <option></option>
                          <option>Telephonic</option>
                          <option>Face To Face</option>
                          <option>Video Call</option>

                        </select>
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
                        <select class="browser-control custom-select" name="meeting_status">
                          <option></option>
                          <option>Done</option>
                          <option>Postponed</option>
                          <option>Rejected</option>
                          <option>Follow Up</option>

                        </select>
                  </div>
                  <div class="form-group">
                        <label>Rejection reason</label>
                        <select class="browser-control custom-select" name="rejection_reason">
                          <option></option>
                          <option>Looks</option>
                          <option>Personality</option>
                          <option>Financial</option>
                          <option>Family Type</option>
                          <option>Other Criteria</option>
                          <option>Religion And Caste</option>
                          <option>Family Values</option>

                        </select>
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
                        <select class="browser-control custom-select" name="client_type">
                          <option></option>
                          <option>Lead</option>
                          <option>Paid</option>
                          <option>Meeting</option>
                          <option>Post Meeting -Will Decide</option>
                          <option>Post Sample Will Decide</option>
                          <option>Rejected Completely</option>
                          <option>Pay At Roka</option>

                        </select>
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
                        <select class="browser-control custom-select" name="duration">
                          <option></option>
                          <option>1 Month</option>
                          <option>3 Month</option>
                          <option>6 Month</option>
                          <option>1 Year</option>
                          <option>Till You Marrry</option>

                        </select>
                  </div>
                  </div><div class="col-md-3">
                  <div class="form-group">
                        <label>PACKAGE TYPE</label>
                        <select class="browser-control custom-select" name="package_type">
                          <option></option>
                          <option>Luv 2 Register -3 Month</option>
                          <option>Luv 2 Register -6 Months</option>
                          <option>Till Your Roka</option>
                          <option>Luv 2 Meet</option>
                          <option>Pay At Your Roka</option>

                        </select>
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
      <?php include 'include/footer.php';?>
      <!-- End of Footer -->

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

 <?php include 'include/footer_main.php';?>
 
 
 <script src="scripts/js/registerprofile.js?ver=1.1125"></script>
 <script src="scripts/js/fm.tagator.jquery.js"></script>



</body>

</html>
