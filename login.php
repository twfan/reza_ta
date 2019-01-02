<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">

    <title>Login Admin Pengaduan</title>
  </head>
  <body>
    
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            
            <!-- Panel Login -->
            <div class="col-md-4">
                <div class="panel panel-primary" style="margin-top:50px">
                  <div class="panel-heading">
                    <h3 class="panel-title">Login Administrator</h3>
                  </div>
                  <div class="panel-body">
                    <b>Username :
                        <input type="text" id="username" class="form-control" />
                        
                        <b>Password :
                        <input type="password" id="password" class="form-control" /><br />

                        <input type="hidden" id="url" value="<?php $url; ?>">
                        
                        <button name="button" type="submit" class="btn btn-primary" onclick="login()">Login</a></button>
                    
                    
                  </div>
                </div>
            </div>
            
            <div class="col-md-4">
                
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" integrity="sha384-a5N7Y/aK3qNeh15eJKGWxsqtnX/wWdSZSKp+81YjTmS15nvnvxKHuzaWwXHDli+4" crossorigin="anonymous"></script>

    <script type="text/javascript">

        function login(){
            
            var username = document.getElementById("username").value;
            var password = document.getElementById("password").value;

           if (username=="dpmptsp" && password=="dpmptsp") {
               
                window.location.href = "http://reza-pens.online/index.php";
            }
            
        }
        // var username = document.getElementById("username").value;
        // var password = document.getElementById("password").value;

        // if(username=="taufan" && password=="taufan"){
        //    alert("tes");
        // }


    </script>

  </body>
</html>