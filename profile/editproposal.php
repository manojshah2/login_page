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

  <title>Proposal</title>

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
            <h1 class="h3 mb-0 text-gray-800">Proposal</h1>
            <div class="spinner-border spinner-border-sm d-none" id="profileSpinner" role="status">
                <span class="sr-only">Loading...</span>
            </div>            
            
          </div>

          <?php
              
              function getValue($profile1,$database_col_name){
                  global $proposalheader;
                  if(array_key_exists($database_col_name,$proposalheader)){
                    $actual_col=$proposalheader[$database_col_name];
                    if(array_key_exists($actual_col,$profile1)){
                      return htmlspecialchars($profile1[$actual_col],ENT_QUOTES,"UTF-8");
                    }else{
                      return "";
                    }
                  }else{
                    return "";
                  }
              }

              
              $id='';
              if(isset($_REQUEST['id']))
              {
                $id= addslashes($_REQUEST['id']);
                echo "<input type='hidden' name='uniqueId' id='uniqueId' value='".$id."'/>";
                $select_data1 = "select * from tblproposal where ID='".$id."'"; 
                $proposal_array = $mysqli->query($select_data1);
                $proposal = $proposal_array->fetch_array();
              }else{

                $proposal=[];
                
              }

              if(isset($_REQUEST['profile_id']) && strlen($id)<1){
                $profile_id=$_REQUEST['profile_id'];
                echo "<input type='hidden' name='profileId' id='profileId' value='".$profile_id."'/>";
              }

            ?>

          <!-- Content Row -->
          <form name="proposal_form" id="proposal_form" novalidate>
            <div class="row">
              <div class="form-group col-md-3">
                <label>Profile Proposed By</label>
                <input type="text" class="form-control" id="proposed_by" name="proposed_by" value="<?php echo getValue($proposal,"proposed_by"); ?>"/>
              </div>
              <div class="form-group col-md-3">
                <label>Unique Id</label>
                <input type="text" class="form-control" name="unique_id" id="unique_id" value="<?php echo getValue($proposal,"unique_id"); ?>" readonly/>
              </div>
              <div class="form-group col-md-3">
                <label>Profile Status</label>
                <input type="text" class="form-control" name="profile_status" id="profile_status" value="<?php echo getValue($proposal,"profile_status"); ?>"/>
              </div>
              <div class="form-group col-md-3">
                <label>Profile Shortlisted Id</label>
                <input type="text" class="form-control" name="profile_shortlisted_id" value="<?php echo getValue($proposal,"profile_shortlisted_id"); ?>"/>
              </div>
              <div class="form-group col-md-3">
                <label>Profile Shortlisted Status</label>
                <input type="text" class="form-control" name="profile_shortlisted_status" id="profile_shortlisted_status" value="<?php echo getValue($proposal,"profile_shortlisted_status"); ?>"/>
              </div>
              <div class="form-group col-md-3">
                <label>Rejection Reason</label>
                <input type="text" class="form-control" name="rejection_reason" id="rejection_reason" value="<?php echo getValue($proposal,"rejection_reason"); ?>"/>
              </div>
              <div class="form-group col-md-3">
                <label>Rejection Reason Comments</label>
                <input type="text" class="form-control" name="rejection_reason_comments" value="<?php echo getValue($proposal,"rejection_reason_comments"); ?>"/>
              </div>						
            </div>

            <!-- Content Row -->
            <div class="row d-none" id="meeting_div">
              <div class="form-group col-md-3">
                <label>Meeting Type</label>
                <input type="text" class="form-control" name="meeting_type" id="meeting_type" value="<?php echo getValue($proposal,"meeting_type"); ?>"/>
              </div>
              <div class="form-group col-md-3">
                <label>Meeting Date</label>
                <input type="date" class="form-control" name="meeting_date" value="<?php echo getValue($proposal,"meeting_date"); ?>"/>
              </div>
              <div class="form-group col-md-3">
                <label>Meeting Time</label>
                <input type="time" class="form-control" name="meeting_time" value="<?php echo getValue($proposal,"meeting_time"); ?>"/>
              </div>
              <div class="form-group col-md-3">
                <label>Meeting Place</label>
                <input type="text" class="form-control" name="meeting_place" value="<?php echo getValue($proposal,"meeting_place"); ?>"/>
              </div>
              <div class="form-group col-md-3">
                <label>Co-oridnator</label>
                <input type="text" class="form-control" name="coordinator" id="coordinator" value="<?php echo getValue($proposal,"coordinator"); ?>"/>
              </div>
              <div class="form-group col-md-3">
                <label>Meeting Status</label>
                <input type="text" class="form-control" name="meeting_status" id="meeting_status" value="<?php echo getValue($proposal,"meeting_status"); ?>"/>
              </div>
            </div>

            <div class="row d-none" id="copy_div">
              <div class="form-group col-md-6">
                <input type="checkbox" name="copy_profile" id="update_shortlisted"/>Update in Shortlisted profile
              </div>
            </div>
            
          </form>

          <div class="row">
              <div class="col-md-3">
                <button class="btn btn-primary" id="updateProposal">Update</button>
              </div>
          </div>

          <div class="row">
            <div id="profileMessage">
              
            </div>
           
          </div>

          <!-- Content Row -->          
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
 <script src="/scripts/js/variables.js?ver=1.1148"></script>
 <script src="/scripts/js/proposal.js?ver=1.130"></script>
 <script src="/scripts/js/fm.tagator.jquery.js?ver=1.00000002"></script>



</body>

</html>
