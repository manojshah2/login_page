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

  <title>View Profile</title>

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
      <?php include 'include/footer.php';?>
      <!-- End of Footer -->

      

    </div>
    <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

 <?php include 'include/footer_main.php';?>

 <script src="vendor/datatables/jquery.dataTables.min.js"></script>
 <script src="vendor/datatables/dataTables.bootstrap4.min.js"></script>
 <script src="scripts/simpleDialog.min.js"></script>

 <script type="text/javascript">
        $(document).ready(function () {
            
            $("#downloadReport").on('click', function () {
                $(location).attr('href', '');
            });

            $.ajax({
                url: 'api/getprofileheaders.php',
                dataType: 'json',
                success: function (data) {
                    var qualitylist = $('#dataTable').dataTable({
                        "processing": true,
                        "serverSide": true,
                        "ajax": "api/getprofiles.php",
                        columns: data,
                        searching: false,
                        "autoWidth": false,
                        columnDefs: [
                            {
                                targets: 0,
                                render: function (data, type, row, meta)
                                {
                                    data = '<div class="row"><div class="col-6"><a href="profile.php?id='+ data+'">'+ data +'</a></div></div>';
                                    return data;
                                }
                            }]
                    });
                    $('#dataTable tbody').on('click', '#deleteRow', function () {
                        if(audited.value!=="null"){
                            return;
                        }
                        var recordid = $(this).attr("recordid");
                        $.simpleDialog({
                            title: "Confirm",
                            message: "Are you sure you want to Delete??",
                            confirmBtnText: "Delete",
                            closeBtnText: "Cancel",
                            backdrop: true,
                            onSuccess: function () {
                                deleteRow(recordid);
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
                url: "",
                method: 'POST',
                data: {recordid: rowid},
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