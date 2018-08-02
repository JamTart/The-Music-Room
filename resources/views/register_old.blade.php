@extends('layouts.master')
@extends('layouts.footer')
@extends('layouts.header')


<head>
  <style>
  body {
        margin: 0;
        padding: 0;
        /*background-color: #17a2b8;*/
        background-color:blue;
        height: 100vh;
        }
        #register .container #register-row #register-column #register-box {
        margin-top: 120px;
        max-width: 600px;
        height: 600px;
        border: 1px solid #9C9C9C;
        background-color: #EAEAEA;
        }
        #register .container #register-row #register-column #register-box #register-form {
        padding: 20px;
        }
        #register .container #register-row #register-column #register-box #register-form #register-link {
        margin-top: -85px;
        }
  </style>

</head>
<body>
  <div id="register">
        <!-- <h3 class="text-center text-lightblue pt-5">register form</h3>-->
         <div class="container">
             <div id="register-row" class="row justify-content-center align-items-center">
                 <div id="register-column" class="col-md-6">
                     <div id="register-box" class="col-md-12">
                         <form id="register-form" class="form" action="" method="post">
                             <h3 class="text-center text-info">Create your account</h3>
                             <div class="form-group">
                                 <label for="first-name" class="text-info">First Name:</label><br>
                                 <input type="text" name="firstname" id="firstname" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label for="last-name" class="text-info">Last Name:</label><br>
                                 <input type="text" name="lastname" id="lastname" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label for="email" class="text-info">Email Address:</label><br>
                                 <input type="email" name="email" id="email" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label for="password1" class="text-info">Password:</label><br>
                                 <input type="password" name="password" id="password1" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label for="password2" class="text-info"> re-enter Password:</label><br>
                                 <input type="password" name="password2" id="password2" class="form-control">
                             </div>
                             <div class="form-group">
                                    <br>
                                 <input type="submit" name="submit" class="btn btn-info btn-md" value="register">
                             </div>
                             <div id="register-link" class="text-right">
                                 <a href="login" class="text-info">Already have an account?</a>

                             </div>
                         </form>
                     </div>
                 </div>
             </div>
         </div>
     </div>

</body>
