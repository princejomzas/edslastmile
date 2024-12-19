<?
    session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>EDS Lastmile - Login</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet"> -->

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-primary">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-6 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">EDS Lastmile Customer</h1>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="inputAdminPassword" placeholder="Admin Password">
                                        </div>
                                        <a class="btn btn-primary btn-user btn-block" id="btn-admin">
                                            Admin Login
                                        </a>
                                        <hr>
                                        <a class="btn btn-success btn-user btn-block" id="btn-guest">
                                            Continue as Guest
                                        </a>
                                    </form>
                                    <hr>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Script for login -->
    <script src="js/jquery.min.js"></script>
    <script type="text/javascript">
        // Guest Login
        $('#btn-guest').click(function(){
            $.ajax({
                url: "process/process_login_guest.php",
                type: "POST",
                success:function(){
                    window.location.href = 'main_guest.php';
                }
            });
          });

        // Admin Login
          $('#btn-admin').click(function(){
            var password = $("#inputAdminPassword").val();
            var detail = {
              password : $("#inputAdminPassword").val()
            }
            $.ajax({
                url: "process/process_login_admin.php",
                type: "POST",
                data: { myData: detail },
                success:function(result){
                    if(result == '0')
                    {
                      alert('Username and Password Incorrect!');
                      location.reload();
                    }
                    else
                    {
                      window.location.href = 'main_admin.php';
                    }
                }
            });
          });
    </script>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>