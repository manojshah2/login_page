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

  <title>Profile Search </title>

  <!-- Custom fonts for this template-->
  <link href="css/all.min.css" rel="stylesheet" type="text/css">
  <link href="css/fm.tagator.jquery.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin-2.min.css" rel="stylesheet">
  <style>
  .input-group-addon {
    padding: 6px 12px;
    font-size: 14px;
    font-weight: normal;
    line-height: 1;
    color: #555;
    text-align: center;
    background-color: #eee;
    border: 1px solid #ccc;
    border-radius: 4px;
}
.card-bg{
  background-color: #4e73df;
  color: white;
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
            <h1 class="h3 mb-0 text-gray-800">Search</h1>            
          </div>

          <!-- Content Row -->
          <div class="row">
						<div class="col-xl-10 col-md-6 mb-4">
            <div id="profileMessage">
              
            </div>
            <div class="spinner-border spinner-border-sm d-none" id="profileSpinner" role="status">
                <span class="sr-only">Loading...</span>
            </div>   
              <form action="#" method="post" id="searchForm">
                <div>                 
                  <div class="row">
                    <div class="form-group col-md-12">
                      <div class="input-group">
                        <div class="col-md-4 pt-2">
                          <label>First Name</label>
                        </div>
                        <input type="text" id="first_name" name="first_name" class="form-control" placeholder="First Name"/>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <div class="input-group">
                        <div class="col-md-4 pt-2">
                          <label>Last Name</label>
                        </div>
                        <input type="text" id="last_name" name="last_name" class="form-control" placeholder="Last Name"/>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <div class="input-group">
                        <div class="col-md-4 pt-2">
                          <label>Phone Number</label>
                        </div>
                        <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number"/>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <div class="input-group">
                        <div class="col-md-4 pt-2">
                          <label>Gender</label>
                        </div>
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-4">
                              <label class="radio-inline"><input type="radio" name="gender" value="" checked>All</label>
                            </div>
                            <div class="col-md-4">
                              <label class="radio-inline"><input type="radio" name="gender" value="male">Male</label>
                            </div>
                            <div class="col-md-4">
                              <label class="radio-inline"><input type="radio" name="gender" value="female">Female</label>
                            </div>                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <div class="input-group">
                        <div class="col-md-4 pt-2">
                          <label>Search Profile With</label>
                        </div>
                        <div class="col-md-8">
                          <div class="row">
                            <div class="col-md-4">
                              <label class="radio-inline"><input type="radio" name="search_with" value="mobile">Only Mobile</label>
                            </div>
                            <div class="col-md-4">
                              <label class="radio-inline"><input type="radio" name="search_with" value="email">Only Email</label>
                            </div>
                            <div class="col-md-4">
                              <label class="radio-inline"><input type="radio" name="search_with" value="email_mobile">Both Email or Mobile</label>
                            </div>                            
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <div class="input-group">
                        <div class="col-md-4 pt-2">
                          <label>Data Taken From</label>
                        </div>
                        <div class="col-md-8">
                          <div class="row">
                            
                              <input type="text" name="data_source" id="data_source" placeholder="Data Take From" class="form-control"/>
                            
                                                     
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <div class="input-group">
                        <div class="col-md-4 pt-2">
                          <label>PID</label>
                        </div>
                        <div class="col-md-8">
                          <div class="row">                            
                              <input type="text" name="profile_id" id="profile_id" placeholder="PID" class="form-control"/>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-12">                                                                
                      <div class="input-group">
                        <div class="col-md-4">
                          <label class="pt-2">Age</label>
                        </div>
                        
                        <input type="number" id="fromage" name="fromage" class="form-control" placeholder="From"/>                        
                        <input type="number" id="toage" name="toage" class="form-control" placeholder="To"/>
                      </div>
                    </div>
                    <div class="form-group col-md-12">                                                                
                      <div class="input-group">
                        <div class="col-md-4">
                          <label class="pt-2">Height</label>
                        </div>
                        <input type="text" id="fromheight" name="fromheight" class="form-control" placeholder="From"/>                        
                        <input type="text" id="toheight" name="toheight" class="form-control" placeholder="To"/>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <div class="input-group">
                        <div class="col-md-4 pt-2">
                          <label>Religion</label>
                        </div>
                        <input type="text" id="religion" name="religion" class="form-control" placeholder="Religion"/>
                      </div>
                    </div>
                    <div class="form-group col-md-12 d-none" id="caste_div">
                      <div class="input-group">
                        <div class="col-md-4 pt-2">
                          <label>Caste</label>
                        </div>
                        <input type="text" id="caste" name="caste" class="form-control" placeholder="Caste"/>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <div class="input-group">
                        <div class="col-md-4 pt-2">
                          <label>Country</label>
                        </div>
                        <input type="text" class="form-control" name="country" id="country" placeholder="Country"/>
                      </div>
                    </div>
                    <div class="form-group col-md-12">
                      <div class="input-group">
                        <div class="col-md-4 pt-2">
                          <label>City/State</label>
                        </div>
                        <input type="text" id="state" class="form-control" name="state" placeholder="City/State"/>
                      </div>
                    </div>
                    <div class="form-group col-md-12">                                                                
                      <div class="input-group">
                        <div class="col-md-4">
                          <label class="pt-2">Income</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" id="income_currency" name="income_currency" class="form-control" placeholder="Currency"/>
                        </div>
                        <div class="col-md-5">
                          <div class="row">
                            <div class="col-md-6">
                              <input type="text" id="annual_income1" name="annual_income1" class="form-control" placeholder="From"/>                        
                            </div>
                            <div class="col-md-6">
                              <input type="text" id="annual_income2" name="annual_income2" class="form-control" placeholder="To"/>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="form-group col-md-12">                                                                
                      <div class="input-group">
                        <div class="col-md-4">
                          <label class="pt-2">Wedding budget</label>
                        </div>
                        <div class="col-md-3">
                          <input type="text" id="wedding_currency" name="wedding_currency" class="form-control" placeholder="Currency"/>
                        </div>
                        <div class="col-md-5">
                          <div class="row">
                            <div class="col-md-6">
                            <input type="text" id="wedding_budget1" name="wedding_budget1" class="form-control" placeholder="From"/>  
                            </div>
                            <div class="col-md-6">
                            <input type="text" id="wedding_budget2" name="wedding_budget2" class="form-control" placeholder="To"/>
                            </div>
                          </div>
                        </div>
                                              
                        
                      </div>
                    </div>
                    <div class="form-group col-md-12">                                                                
                      <div class="input-group">
                        <div class="col-md-4">
                          <label class="pt-2">Open for divorcee profile</label>
                        </div>
                        <input type="text" id="open_for_divorcee" name="open_for_divorce" class="form-control"/>                        
                      </div>
                    </div>
                    <div class="form-group col-md-12">                                                                
                      <div class="input-group">
                        <div class="col-md-4">
                          <label class="pt-2">Open for outside India</label>
                        </div>
                        <input type="text" id="open_for_outside_india" name="open_for_outside_india" class="form-control"/>
                      </div>
                    </div>
                    <div class="form-group col-md-12">                                                                
                      <div class="input-group">
                        <div class="col-md-4">
                          <label class="pt-2">Marital Status</label>
                        </div>
                        <input type="text" id="marital_status" name="marital_status" class="form-control" placeholder="Marital Status"/>                        
                      </div>
                    </div>
                    <div class="form-group col-md-12">                                                                
                      <div class="input-group">
                        <div class="col-md-4">
                          <label class="pt-2">Photo</label>
                        </div>
                        <input type="text" class="form-control" name="photo" placeholder="Photo"/>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="form-group col-md-12">
                      <div class="card">
                        <div class="card-header card-bg collapsed" data-toggle="collapse" href="#card_horoscope">Horoscope Details</div>
                        <div class="card-body collapse" id="card_horoscope">
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">Manglik</label>
                              </div>
                              <input type="text" id="manglik" name="manglik" class="form-control" placeholder="Manglik"/>                                                      
                            </div>
                          </div>
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">Belives in horoscope</label>
                              </div>
                              <input type="text" id="believes_in_horoscope" name="believes_in_horoscope" class="form-control" placeholder="Belives in horoscope"/>                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <div class="card">
                        <div class="card-header card-bg collapsed" data-toggle="collapse" href="#card_education">Education Details</div>
                        <div class="card-body collapse" id="card_education">
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">Highest Education</label>
                              </div>
                              <input type="text" id="education_qualification" name="education_qualification" class="form-control" placeholder="Highest Education"/>                                                      
                            </div>
                          </div>
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">Occupation</label>
                              </div>
                              <input type="text" id="occupation" name="occupation" class="form-control" placeholder="Occupation"/>                              
                            </div>
                          </div>
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">From Premium Institute</label>
                              </div>
                              <input type="text" class="form-control" name="from_premium_institute" id="from_premium_institute" placeholder="From Premium Institute"/>                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-12">
                      <div class="card">
                        <div class="card-header card-bg collapsed" data-toggle="collapse" href="#card_familytype">Family Type</div>
                        <div class="card-body collapse" id="card_familytype">
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">Residential Type</label>
                              </div>
                              <input type="text" id="residential_type" name="residential_type" class="form-control" placeholder="Residential Type"/>                                                      
                            </div>
                          </div>
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">Affluence level</label>
                              </div>
                              <input type="text" id="affluence_level" name="affluence_level" class="form-control" placeholder="Affluence level"/>                              
                            </div>
                          </div>
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">Family Income</label>
                              </div>
                              <div class="col-md-3">
                                <input type="text" id="family_currency" name="family_currency" class="form-control" placeholder="Currency"/>
                              </div>
                              <div class="col-md-4">
                                <div class="row">
                                  <div class="col-md-6">
                                  <input type="text" id="family_income1" name="family_income1" class="form-control" placeholder="From"/> 
                                  </div>
                                  <div class="col-md-6">
                                  <input type="text" id="family_income2" name="family_income2" class="form-control" placeholder="To"/>                              
                                  </div>
                                </div>
                              </div>
                                                           
                              
                            </div>
                          </div>
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">Family Type</label>
                              </div>
                              <input type="text" id="family_type" name="family_type" class="form-control" placeholder="Family Type"/>                              
                            </div>
                          </div>
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label>Willing to Stay independently?</label>
                              </div>
                              <input type="text" id="willing_to_stay" name="willing_to_stay" class="form-control" placeholder="Willing to Stay independently?"/>                              
                            </div>
                          </div>
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">Net Worth</label>
                              </div>
                              <div class="col-md-3">
                                <input type="text" id="net_currency" name="net_currency" class="form-control" placeholder="Currency"/>
                              </div>
                              <div class="col-md-4">
                                <div class="row">
                                  <div class="col-md-6">
                                    <input type="text" id="net_worth1" name="net_worth1" class="form-control" placeholder="From"/>                              
                                  </div>
                                  <div class="col-md-6">
                                    <input type="text" id="net_worth2" name="net_worth2" class="form-control" placeholder="To"/>                                                           
                                  </div>
                                </div>
                              </div>
                              
                              
                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>                  
                  <div class="row">
                    <div class="form-group col-md-12">
                      <div class="card">
                        <div class="card-header card-bg collapsed" data-toggle="collapse" href="#card_lifestyle">Lifestyle</div>
                        <div class="card-body collapse" id="card_lifestyle">
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">Diet</label>
                              </div>
                              <input type="text" id="food_habits" name="food_habits" class="form-control" placeholder="Diet"/>                                                      
                            </div>
                          </div>
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">Drink</label>
                              </div>
                              <input type="text" id="drink" name="drink" class="form-control" placeholder="Drink"/>                              
                            </div>
                          </div>
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">Smoke</label>
                              </div>
                              <input type="text" id="smoke" name="smoke" class="form-control" placeholder="Smoke"/>                              
                            </div>
                          </div>
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">Looks</label>
                              </div>
                              <input type="text" id="looks" name="looks" class="form-control" placeholder="Looks"/>                              
                            </div>
                          </div>
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">Body Type</label>
                              </div>
                              <input type="text" id="body_type" name="body_type" class="form-control" placeholder="Body Type"/>                              
                            </div>
                          </div>
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">Communication</label>
                              </div>
                              <input type="text" id="communication" name="communication" class="form-control" placeholder="Communication"/>                              
                            </div>
                          </div>
                          <div class="form-group col-md-12">                                                                
                            <div class="input-group">
                              <div class="col-md-5">
                                <label class="pt-2">Complexion</label>
                              </div>
                              <input type="text" id="complexion" name="complexion" class="form-control" placeholder="Complexion"/>                              
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="form-group col-md-4"></div>
                    <div class="form-group col-md-6">
                      <button class="btn btn-primary" style='height:50px;width:300px;' id="searchprofile"">Search</button>
                    </div>
                    
                  </div>
                </div>
              </form>
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

 <script src="scripts/js/variables.js?ver=1.00002"></script>
 <script src="scripts/js/search.js?ver=1.0011"></script>
 <script src="scripts/js/fm.tagator.jquery.js?ver=1.00000002"></script>
</body>

</html>
