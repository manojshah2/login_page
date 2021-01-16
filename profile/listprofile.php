<?php
$root = "../";  
include($root.'config/config.inc.php');
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

  <title>View Profile</title>

  <!-- Custom fonts for this template-->
  <link href="/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="/css/sb-admin-2.min.css" rel="stylesheet">

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
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>            
          </div>

          <!-- Content Row -->
          <div class="row">
						
          </div>

          <!-- Content Row -->

          <div class="row">

           
          </div>

          <!-- Content Row -->
          <div class="row">
          
					<div class="card-body">
            <div id="myalert">

            </div>
            <div class="table-responsive" id="tableDiv">
                <table class="table table-bordered table-striped" id="dataTable" width="100%" cellspacing="0">

                </table>
            </div>

            <a  id="downloadReport" href="#"><i class="fa fa-download"></i> Download in Excel</a>
          
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

    <!-- Logout Modal-->
  <div class="modal fade" id="downloadModal" tabindex="-1" role="dialog" aria-labelledby="downloadLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="downloadLabel">Download in Excel?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">
        Please Select Dates to download.
        <label>Start Date</label>
        <input type="date" class="form-control" id="start_date"/>
        <label>End Date</label>
        <input type="date" class="form-control" id="end_date"/>
        </div>
        <div class="modal-footer">
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
          <a class="btn btn-primary" href="#" id="downloadexcel">Download</a>
        </div>
      </div>
    </div>
  </div>

 <?php include $root.'include/footer_main.php';?>

 <script src="/vendor/datatables/jquery.dataTables.min.js"></script>
 <script src="/vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <script src="/scripts/simpleDialog.min.js"></script>

 <script type="text/javascript">
        $(document).ready(function () {

            $("#downloadexcel").on('click',function(){
              var start_date=$("#start_date").val();
              var end_date=$("#end_date").val();
              
              $(location).attr('href', 'downloadprofiles.php?start='+ start_date + '&end=' +end_date);
            });
            
            $("#downloadReport").on('click', function () {
                //$(location).attr('href', 'downloadprofiles.php');
                $('#downloadModal').modal('show');
            });

            $.ajax({
                url: '/api/getprofileheaders.php',
                dataType: 'json',
                success: function (data) {
                    var qualitylist = $('#dataTable').dataTable({
                        "processing": true,
                        "serverSide": true,
                        "ajax": "/api/getprofiles.php",
                        columns: data,
                        searching: false,
                        "autoWidth": false,
                        columnDefs: [
                            {
                                targets: 0,
                                render: function (data, type, row, meta)
                                {
                                    data = '<div class="row"><div class="col-4"><a href="editprofile.php?id='+ data+'">'+ data +'</a></div><div class="col-4"><a href="/profile/viewprofile.php?profilechecksum='+ data +'">View Profile</a></div><div class="col-4"><a href="/profile/downloadPDF.php?profilechecksum='+data+'">Download PDF</a></div></div>';
                                    return data;
                                }
                            }]
                    });
                    $('#dataTable tbody').on('click', '#deleteRow', function () {
                        var id=$(this).data("id");                        
                        $.simpleDialog({
                            title: "Confirm",
                            message: "Are you sure you want to Delete??",
                            confirmBtnText: "Delete",
                            closeBtnText: "Cancel",
                            backdrop: true,
                            onSuccess: function () {
                                deleteRow(id);
                            },
                            onCancel: function () {

                            }
                        });
                    });
                }
            });
            
        });

        function deleteRow(rowid) {
            $.ajax({
                url: "delete.php",
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
            $("#dataTable").DataTable().draw();
        }
  </script>
</body>

</html>