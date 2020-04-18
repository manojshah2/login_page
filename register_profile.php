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

  <title>Register Profile</title>

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
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Register Profile</h1>            
          </div>

          <!-- Content Row -->
          <div class="row">
						
          </div>

          <!-- Content Row -->

          <div class="row">

           
          </div>

          <!-- Content Row -->
          <div class="row">
						<div class="col-md-3">
              <ul class="">
                <li class="nav-link"><a href="#aboutme" data-toggle="collapse">About Me</a></li>
                <li class="nav-link"><a href="#education" data-toggle='collapse'>Education & Career</a></li>
                <li class="nav-link"><a href="#familydetails" data-toggle='collapse'>Family Details</a></li>
                <li class="nav-link"><a href="#horoscope" data-toggle='collapse'>Horoscope Details</a></li>
                <li class="nav-link"><a href="#identity" data-toggle='collapse'>Identity & Contact Details</a></li>
                <li class="nav-link"><a href="#looks" data-toggle='collapse'>Looks & Lifestyle</a></li>
                <li class="nav-link"><a href="#partner" data-toggle='collapse'>Partner Preference</a></li>
                <li class="nav-link"><a href="#calling" data-toggle='collapse'>Calling Status</a></li>
                <li class="nav-link"><a href="#lead" data-toggle='collapse'>Lead Generation</a></li>
                <li class="nav-link"><a href="#meeting" data-toggle='collapse'>Meeting Details</a></li>
                <li class="nav-link"><a href="#subscription" data-toggle='collapse'>Subscription Status</a></li>
                <li class="nav-link"><a href="#miscellaneous" data-toggle='collapse'>Miscellaneous</a></li>
              </ul>
            </div>
            <div class="col-md-9">
                <div id='aboutme' class='collapse'>
                  <div class="row">
                    <div class="col-md-3">
                      <div class="form-group">
                        <label>Data Taken From</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Profile Id</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>First Name</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Gender</label>
                        <select class="browser-default custom-select">
                          <option>Female</option>
                          <option>Male</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label>Height</label>
                        <input type="text" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-md-3">
                      
                      <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Marital Status</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Occupation</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Annual Income</label>
                        <input type="text" class="form-control"/>
                      </div>  
                      <div class="form-group">
                        <label>Has Children</label>
                        <input type="text" class="form-control"/>
                      </div> 
                      <div class="form-group">
                        <label>Residential Status</label>
                        <input type="text" class="form-control"/>
                      </div>               
                    </div>
                    <div class="col-md-3">
                      
                      <div class="form-group">
                        <label>Country of Residence</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>State of Residence</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>CITY</label>
                        <input type="text" class="form-control"/>
                      </div>
                      
                      <div class="form-group">
                        <label>Pincode</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Mother Tongue</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Religion</label>
                        <input type="text" class="form-control"/>
                      </div>
                    </div>
                    <div class="col-md-3">
                    
                      
                      <div class="form-group">
                        <label>Caste</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Sub-Caste</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>About</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Criminal Record</label>
                        <input type="text" class="form-control"/>
                      </div>
                      <div class="form-group">
                        <label>Special Case</label>
                        <input type="text" class="form-control"/>
                      </div>
                    </div>
                  
                  </div>
                </div>
              <div>
              <div id='education' class='collapse'>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Education</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>College</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Employed As</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Employed With</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>School Name</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>UG</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>PG</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>UG College</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>PG College</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                </div>
              </div>
              <div id='familydetails' class='collapse'>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Father Occupation</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Mother is</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Family Value</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Affluence Level</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Native Country</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Native State</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Unmarried Sisters</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Married Sisters</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Unmarried Brothers</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Married Brothers</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Other Property Details</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Square Yards</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Vehicles</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Net Worth</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Industry Type</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Family Based out of</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Family Income</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Family Type</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>About Family</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                </div>
              </div>
              <div id='horoscope' class='collapse'>
                <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Birth Place</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Birth Time</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Manglik</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Believes in Horoscope</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Gotra</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Star</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Raasi</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                </div>  
              </div>
              <div id='identity' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Email</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Phone</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Alternate Phone Number</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>WhatsApp Number</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Residence Address</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Permanent Address</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Aadhar Verified</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Mobile Verified</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Email Id Verified</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Aadhar Proof</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Instagram Id</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Facebook Id</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Linkedin Id</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                </div>  
              </div>
              <div id='looks' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Body Type</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Food Habits</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Drink</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Smoke</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Complexion</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Weight</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Hair Type</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Looks</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Specs</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                </div>  
              </div>
              <div id='partner' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                        <label>SMOKER</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>DRINKER</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>VEG/NON VEG</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>FROMAGE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>TOAGE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>CASTE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div><div class="col-md-3">
                  <div class="form-group">
                        <label>EDUCATION QUALIFICATION</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MIN HEIGHT</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MAX HEIGHT</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MOTHER TONGUE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>RELIGION</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MANGLIK</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div><div class="col-md-3">
                  <div class="form-group">
                        <label>INCOME</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>BODY TYPE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Complexion</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>CHALLENGED</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MARITAL STATUS</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>COUNTRY</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div><div class="col-md-3">
                  <div class="form-group">
                        <label>STATE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>HAVE CHILDREN</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>EMPLOYED AS</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>About Partner</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Cant Get married to</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div>
                </div>  
              </div>
              <div id='calling' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                    <div class="form-group">
                      <label>Last Calling date</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Calling Status</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Calling Comments</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Profile Shortlisted for id</label>
                      <input type="text" class="form-control"/>
                    </div>
                    <div class="form-group">
                      <label>Response of shared Profile</label>
                      <input type="text" class="form-control"/>
                    </div>
                  </div>
                </div>  
              </div>
              <div id='lead' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                        <label>Lead-Date of calling</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Lead-Follow up date</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Lead Follow Up time </label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>lead-status</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>lead-comment</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div><div class="col-md-3">
                  <div class="form-group">
                        <label>Lead-shared profile ids</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>lead shortlisted profile ids</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Lead Biodata received</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div>
                </div>  
              </div>
              <div id='meeting' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                        <label>MEETING FINALISED BY</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Meeting Type</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MEETING DATE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MEETING TIME</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MEETING PLACE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div><div class="col-md-3">
                  <div class="form-group">
                        <label>MEETING LVM ID</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Meeting status</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Rejection reason</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div>
                </div>  
              </div>
              <div id='subscription' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                        <label>CLIENT TYPE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>REGISTRATION FEE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>MEETING FEE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>ROKA CHARGE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>DURATION</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div><div class="col-md-3">
                  <div class="form-group">
                        <label>PACKAGE TYPE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>SOLD BY</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>Subscription Type</label>
                        <input type="text" class="form-control"/>
                  </div>
                  </div>
                </div>  
              </div>
              <div id='miscellaneous' class='collapse'>
              <div class="row">
                  <div class="col-md-3">
                  <div class="form-group">
                        <label>PIDIndex</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>ADDED DATE</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>ADDED BY</label>
                        <input type="text" class="form-control"/>
                  </div>
                  <div class="form-group">
                        <label>WEEKLY PROFILE</label>
                        <input type="text" class="form-control"/>
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
 <script src="scripts/js/registerprofile.js"></script>


</body>

</html>
