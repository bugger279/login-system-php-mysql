
    <html>  
    <head lang="en">  
        <meta charset="UTF-8">  
        <link type="text/css" rel="stylesheet" href="bootstrap-3.2.0-dist\css\bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/bootstrap.min.js"></script>
        <title>Registration</title>  
    </head>  
    <style>  
        .login-panel {  
            margin-top: 150px;  
        }
    </style>  
    <body>  
      
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-success">  
                    <div class="panel-heading">  
                        <h3 class="panel-title">Registration</h3>  
                    </div>  
                    <div class="panel-body">  
                        <form role="form" method="post" action="registration.php">  
                            <fieldset>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Username" name="name" type="text" autofocus>  
                                </div>  
      
                                <div class="form-group">  
                                    <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>  
                                </div>  
                                <div class="form-group">  
                                    <input class="form-control" placeholder="Password" name="pass" type="password" value="">  
                                </div>  
      
      
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="register" name="register" >  
      
                            </fieldset>  
                        </form>  
                        <center><b>Already registered ?</b> <br></b><a href="login.php">Login here</a></center>
                    </div>  
                </div>  
            </div>  
        </div>  
    </div>  
      
    </body>  
      
    </html> 
