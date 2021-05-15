<?php
$root = "./";  
include('config/config.inc.php');
include('buildsearch.php');
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
    .pagination {
      display: inline-block;
    }

    a.disabled {
      pointer-events: none;
      cursor: default;
    }



.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
}

.selected {
    background-color: blue;
    color: white !important;
}

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
          <div id="myalert">

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


          $sid=$_REQUEST['searchid'];
          $page=1;          
          $resultsperpage = 20;
          if (isset($_REQUEST['page'])){
            $page = $_REQUEST['page'];
          }

          $offset = (($page-1) * $resultsperpage);
          


            if(isset($_REQUEST['searchid'])){
              $search_condition=createSearch($_REQUEST["searchid"]);
              
              $search_condition = $search_condition." order by  case `client type` when 'Paid' THEN 1 else 2 end,`ADDED Date` desc";
              //print_r($search_condition);
              

              if (strlen($search_condition)>0) {
                
                $final_query="select * from tblprofiles where ".$search_condition." LIMIT ".$resultsperpage." OFFSET ".$offset;
                $count_query="select count(*) from tblprofiles where ".$search_condition;
                //print_r($final_query);
                $count_result = $mysqli->query($count_query);
                $count = $count_result->fetch_array()[0];                
                $result =$mysqli->query($final_query);
              }else{
                
                print_r("Please try adding search criteria");
                exit;
              }
              
             
              $totalPages = ceil($count / $resultsperpage);

            }
            

          ?>
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><?php echo $count; ?> Matches Found</h1>
            <span>
              <?php if(isAdmin()){ ?>
              <div>
                <a href="api/download_search.php?searchid=<?php echo $sid ?>"><i class="fa fa-download"></i>Download in Excel</a>
              </div>
              <?php } ?>
            </span>
            <div>
              <div>
                <div class="pagination">
                  <?php 
                    $pageGap = 5;
                    $curPage =(min( ceil($page / $pageGap),$page)-1) * $pageGap +1;                  
                    $pageGapend=min($curPage+$pageGap-1,$totalPages);
                  ?>
                  
                  <a href="results.php?searchid=<?php echo $sid ?>&page=<?php echo $page-1 ?>" class="<?php if($page<2) { echo "disabled";} ?>">&laquo;</a>  
                  
                  <?php while($curPage<=$pageGapend):  ?>
                    <a href="results.php?searchid=<?php echo $sid ?>&page=<?php echo $curPage ?>" class="<?php if($curPage==$page) { echo "selected";} ?>"><?php echo $curPage;?></a>
                    <?php $curPage++ ?>
                  <?php endwhile; ?>     
                  
                  <a href="#">..</a>
                  <a href="results.php?searchid=<?php echo $sid ?>&page=<?php echo $totalPages ?>"><?php echo $totalPages ?></a>

                  
                  <a href="results.php?searchid=<?php echo $sid ?>&page=<?php echo $page+1 ?>" class="<?php if($page>$totalPages-1) { echo "disabled";} ?>">&raquo;</a>
                  
                </div>
                <div class="row" style='display:none;'>                  
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
            <div id='results' style='display:block;width:80%;'>
              <?php while($profile=$result->fetch_array()): ?>
              
              <div class="row pt-3">
                <div id='profile' class="col-md-10">
                  <a target="_blank" href="profile/viewprofile.php?profilechecksum=<?php echo $profile['ID']; ?>" class="profile_link">
                    <div class="row profile">                
                      <div class="col-md-4">
                        <?php
                          $profile_images = $mysqli->query('select `IMG PATH` from tblimages where PID='.$profile['ID']);
                          $images=$profile_images->fetch_array();

                          if(count($images)==0){
                            $images[0]="images/nophoto.png";
                          };
                        ?>
                        
                        <img src="<?php echo $images[0]; ?>" height="220px" width="220px" class="img-fluid">
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
                            <div class="mb-0"><?php 

                                $dob_str=getValue($profile,"DOB");

                                if ((strlen($dob_str)>0 && strpos($dob_str,'000')===false)){         
                                    
                                    $dob=new DateTime($dob_str);
                                    $today=new DateTime('today');
                                    $age = $dob->diff($today)->y;
                                    $age = $age." Years , ";
                                }

                                $height = getValue($profile,'HEIGHT'); 
                                if(strlen($height)>0){
                                    $height_arr=explode('(',$height);
                                    $height_value = $height_arr[0];
                                }

                                echo $age.$height_value ;

                                ?></div>
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
                        <div class="row pt-4" style='float:right;'>
                            <div class="col-md-2">
                              <span class="badge badge-primary" alt="Source">
                                <?php echo $profile['Data Taken From'] ?>
                              </span>
                            </div>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
                <div class="col-md-2">
                  <div >
                    <div class="row pt-4 pl-2">                      
                        <a href="/profile/downloadPDF.php?profilechecksum=<?php echo $profile['ID']; ?>" title="Download PDF" class="btn btn-primary"><i class="fa fa-lg fa-file-pdf"></i></a>
                    </div>                 
                    <div class="row pt-4 pl-2">
                        <a href="#" class="btn btn-primary d-none deleteProfile"  data-id="<?php echo $profile["ID"]; ?>" title="Delete Profile" class="pt-4"><i class="fa fa-trash fa-lg"></i></a>
                    </div>
                  </div>  
                </div>
              </div>
              <?php endwhile; ?>
            </div>
          </div>

          <!-- Content Row -->

          <div class="row">
            <div class="col-md-7">
            </div>
            <div class="col-md-5 pt-4">
              <div>
                <div class="pagination">
                  <?php 
                    $pageGap = 5;
                    $curPage =(min( ceil($page / $pageGap),$page)-1) * $pageGap +1;                  
                    $pageGapend=min($curPage+$pageGap-1,$totalPages);
                  ?>
                  
                  <a href="results.php?searchid=<?php echo $sid ?>&page=<?php echo $page-1 ?>" class="<?php if($page<2) { echo "disabled";} ?>">&laquo;</a>  
                  
                  <?php while($curPage<=$pageGapend):  ?>
                    <a href="results.php?searchid=<?php echo $sid ?>&page=<?php echo $curPage ?>" class="<?php if($curPage==$page) { echo "selected";} ?>"><?php echo $curPage;?></a>
                    <?php $curPage++ ?>
                  <?php endwhile; ?>     
                  
                  <a href="#">..</a>
                  <a href="results.php?searchid=<?php echo $sid ?>&page=<?php echo $totalPages ?>"><?php echo $totalPages ?></a>

                  
                  <a href="results.php?searchid=<?php echo $sid ?>&page=<?php echo $page+1 ?>" class="<?php if($page>$totalPages-1) { echo "disabled";} ?>">&raquo;</a>
                  
                </div>
                <div class="row" style='display:none;'>                  
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
  <input type="hidden" name="loggedInUser" id="loggedInUser" value="<?php echo $_SESSION[PRE.'emp_id'];  ?>"/>
  <!-- End of Page Wrapper -->

 <?php include 'include/footer_main.php';?>
 <link href="vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">
 <script src="/scripts/simpleDialog.min.js"></script>
 <script type="text/javascript">
  $(document).ready(function () {

    var user = $("#loggedInUser").val();

    if(user === "admin"){
      $(".deleteProfile").removeClass("d-none");
    }

    function deleteRow1(rowid) {
        $.ajax({
            url: "/profile/delete.php",
            method: 'POST',
            data: {id: rowid},
            dataType: 'json',
            success: function (data, status, xhr) {
                var alertmessage = '<div class="alert alert-success alert-dismissible" role="alert" id="myalert">\
                          ' + data.message + '\
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">\
                            <span aria-hidden="true">&times;</span>\
                        </button>\
                    </div>';
                $("#myalert").html(alertmessage);
            }
        });        
    }

    $(".deleteProfile").on('click',function(e){
      var id=$(this).data("id");    
                        
      $.simpleDialog({
          title: "Confirm",
          message: "Are you sure you want to Delete??",
          confirmBtnText: "Delete",
          closeBtnText: "Cancel",
          backdrop: true,
          onSuccess: function () {
              deleteRow1(id);
          },
          onCancel: function () {

          }
      });
    });
  });
 </script>
</body>

</html>
