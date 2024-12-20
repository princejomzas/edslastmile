<?PHP
session_start();
date_default_timezone_set("Asia/Bangkok");
if (isset($_SESSION['is_login']) && $_SESSION['is_login'] == TRUE && $_SESSION['LVL'] == "2") {
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Add New Customer</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php include "includes/sidebar_upper.php";?>
        <!-- Nav Item - Dashboard -->
        <li class="nav-item">
            <a class="nav-link" href="main_guest.php">
                <i class="fas fa-fw fa-tachometer-alt"></i>
                <span>Dashboard</span></a>
        </li>

        <!-- Nav Item - Tables -->
        <li class="nav-item">
            <a class="nav-link" href="lmcustomer_guest.php">
                <i class="fas fa-fw fa-table"></i>
                <span>List Customer</span></a>
        </li>

        <?php include "includes/sidebar_lower.php";?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <?php include 'includes/topbar.php';?>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="col-lg-6">
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Customer Detail</h6>
                                <div class="font-weight-lighter" style="font-size:10px">Last Update</div>
                            </div>
                            <div class="card-body">
                                <form class="user">
                                    <div class="form-group">
                                        <input class="form-control form-control-user" id="displayProjectName" value="Project Name" readonly>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="displayCustomerName" value="Customer Name" readonly>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user" id="displayCustomerLat" value="Customer Latitude" readonly>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user" id="displayCustomerLong" value="Customer Longitude" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="displayIpran" value="IPRAN" readonly>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user"
                                                id="displayIpranThai" value="IPRAN Name Thai" readonly>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user"
                                                id="displayProvince" value="Province" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user"
                                                id="displayIpranLat" value="IPRAN Latitude" readonly>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user"
                                                id="displayIpranLong" value="IPRAN Longitude" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user"
                                                id="displayLM" value="Lastmile" readonly>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user"
                                                id="displayType" value="Type" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-sm-6 mb-3 mb-sm-0">
                                            <input type="text" class="form-control form-control-user"
                                                onfocus="(this.type='datetime-local')" onblur="(this.type='text')"
                                                id="inputPerforma" placeholder="Performa" readonly>
                                        </div>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control form-control-user"
                                                onfocus="(this.type='datetime-local')" onblur="(this.type='text')"
                                                id="inputPrepareCore" placeholder="Prepare Core" readonly>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="displayRemark"
                                            value="Remark" readonly>
                                    </div>
                                    <a href="lmcustomer_guest.php" class="btn btn-secondary btn-user btn-block">
                                        Back
                                    </a>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <?php include "includes/footer.php";?>
            <!-- <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Lastmile EDS 2024</span>
                    </div>
                </div>
            </footer> -->
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>
</html>
<?php }
else{
    session_destroy();
    header('Location: index.php');
}?>