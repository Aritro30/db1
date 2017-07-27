<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="font-awesome/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="style.css">
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <title>Online Blood Bank </title>
</head>

<body>


                 <!--Navbar-->
  <nav class="navbar navbar-default">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">LOGO</a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="http://localhost/370web/">HOME <span class="sr-only">(current)</span></a></li>
                        <li><a href="#"> About Us</a></li>
                        <li><a href="search.php"> Blood List</a></li>
                        <li><a href="login.php"> Managers </a></li>



                    </ul>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>







                     <!--Form-->


    <section class="form-section" id="form">
        <div class="wrapper">
            <div class="form-content">
            <h1>Available Blood Groups</h1>
                <form action="brac_12/day_20/search.php" method="POST">
                    <input type="text" id="blood-group" name="search" placeholder="enter the blood-group or location">
                    <input type="submit" value=">>"  >
                </form>
            </div>
            <div class="form-box">
                <div class="registration-form pad">

                    <p>Register now</p>
                    <h1>Want to become a donor?</h1>

                    <form action="signup.php" method="POST"> 
                   		 
                        <input type="text" name="name" placeholder="full name">
                        <input type="text" name="email" placeholder="enter your e-mail">
                        <input type="text" name="phone" placeholder="enter your phone">
                        <input type="text" name="address" placeholder="address">
                        <input type="text" name="age" placeholder="enter your age">
                        <input type="text" name="gender" placeholder="enter your gender">
                        <input type="text" name="blood" placeholder="enter your blood group">
                        
                        

                        <input type="submit" value="register now"  >

                    </form>

                </div>
            </div>

        </div>

    </section> 

    

</body>

</html>