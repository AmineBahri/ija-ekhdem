<<<<<<< HEAD
<!DOCTYPE html>    
=======

<!DOCTYPE html>
<html lang="en">
    
>>>>>>> 73b81b4f36253ed21d6ba41ca065b4bec406bce8
<!-- Mirrored from thememinister.com/crm/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:10:02 GMT -->
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>CRM Admin panel</title>
        <!-- Favicon and touch icons -->
        <link rel="shortcut icon" href="{{asset('admin-assets/dist/img/ico/favicon.png')}}" type="image/x-icon">
        <!-- Bootstrap -->
        <link href="{{asset('admin-assets/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Bootstrap rtl -->
        <!--<link href="assets/bootstrap-rtl/bootstrap-rtl.min.css" rel="stylesheet" type="text/css"/>-->
         <!-- Pe-icon-7-stroke -->
        <link href="{{asset('admin-assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css')}}" rel="stylesheet" type="text/css"/>
        <!-- style css -->
        <link href="{{asset('admin-assets/dist/css/stylecrm.css')}}" rel="stylesheet" type="text/css"/>
        <!-- Theme style rtl -->
        <!--<link href="assets/dist/css/stylecrm-rtl.css" rel="stylesheet" type="text/css"/>-->
    </head>
    <body>
        <!-- Content Wrapper -->
        <div class="login-wrapper">
<<<<<<< HEAD
=======
            <div class="back-link">
                <a href="index.html" class="btn btn-add">Back to Dashboard</a>
            </div>
>>>>>>> 73b81b4f36253ed21d6ba41ca065b4bec406bce8
            <div class="container-center lg">
             <div class="login-area">
                <div class="panel panel-bd panel-custom">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Register</h3>
                                <small><strong>Please enter your data to register.</strong></small>
                            </div>
                        </div>
                    </div>
<<<<<<< HEAD
                    @if ($errors->any())
                          <div class="alert alert-danger">
                             <ul>
                               @foreach ($errors->all() as $error)
                                 <li>{{ $error }}</li>
                               @endforeach
                             </ul>
                          </div>
                        @endif
=======
>>>>>>> 73b81b4f36253ed21d6ba41ca065b4bec406bce8
                    <div class="panel-body">
<form action="{{url('signup')}}" method="post" enctype="multipart/form-data">
                @csrf

          <div class="row">
                                <div class="form-group col-lg-6">
                                    <label>Username</label>
<<<<<<< HEAD
                     <input type="text" name="name" id="name" class="form-control" >
=======
                     <input type="text" name="name" value="" id="name" class="form-control" >
>>>>>>> 73b81b4f36253ed21d6ba41ca065b4bec406bce8
                                    <span class="help-block small">Your unique username to app</span>
                                </div>
                                    <div class="form-group col-lg-6">
                                    <label>Email Address</label>
<<<<<<< HEAD
                          <input type="text"  name="email" id="email" class="form-control" >
=======
                          <input type="text"  name="email"value="" id="email" class="form-control" >
>>>>>>> 73b81b4f36253ed21d6ba41ca065b4bec406bce8
                                    <span class="help-block small">Your address email to contact</span>
                                </div>
                            
                                <div class="form-group col-lg-6">
                                    <label>Password</label>
<<<<<<< HEAD
                 <input type="password"  name="password" id="password" class="form-control" >
                                    <span class="help-block small">Your hard to guess password</span>
                                </div>
                                <div class="form-group col-lg-6">
                                    <label>Confirm Password</label>
                 <input type="password"  name="conf_password" id="password" class="form-control" >
                                    <span class="help-block small">Your hard to guess confirm password</span>
                                </div>
=======
                 <input type="password"  name="password" value="" id="password" class="form-control" >
                                    <span class="help-block small">Your hard to guess password</span>
                                </div>
>>>>>>> 73b81b4f36253ed21d6ba41ca065b4bec406bce8
                                </div>
                            
                            <div>
                                <button class="btn btn-warning">Register</button>
                                <a class="btn btn-add" href="{{url('/login-admin')}}">Login</a>
                            </div>
                        </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->
        <!-- jQuery -->
        <script src="{{asset('admin-assets/plugins/jQuery/jquery-1.12.4.min.js')}}" type="text/javascript"></script>
        <!-- bootstrap js -->
        <script src="{{asset('admin-assets/bootstrap/js/bootstrap.min.js')}}" type="text/javascript"></script>
    </body>

<!-- Mirrored from thememinister.com/crm/register.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 02 Jun 2019 11:10:02 GMT -->
</html>