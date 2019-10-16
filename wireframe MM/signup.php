<!DOCTYPE html>
<html lang="en">
    <head>
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.css.map">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-grid.min.css.map">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css.map">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css.map">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.css.map">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.min.css">
        <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap-reboot.min.css.map">
        <link rel="stylesheet" type="text/css" href="ionicons-2.0.1/ionicons-2.0.1/css/ionicons.min.css">
     
    <title>signup:newspaper</title>
                <link rel="stylesheet" type="text/css" href="signup.css">

    </head>
    <body>
           <div class="container">
           <div class="row">
               <div class="col-sm-12 text-center heading"><h3>Create your NEWSPAPER Account</h3></div>
           </div>
           <div class="row  gfsingup">
               <div class="col-sm-6 col-6 text-right">
                   <a href="#"><img src="images/googlesignupnew.jpg" class="img-fluid"></a>
               </div>
               <div class="col-6 ">
                   <a href="#"><img src="images/fbsignupnew.png" class="img-fluid"></a>
               </div>
           </div>
            
           <div class="row">
               <div class="col-sm-12 text-center my-auto">
               <h6>or</h6>
               </div>
           </div>
           <div class="row">
               <div class="col-sm-12">
            <form action="includes/signup.inc.php" method="post">
                  <div class="row">
                   <div class="col-sm-4 col-4"></div>
                      <div class="col-sm-2 col-2">Name: </div>
                      <div class="col-sm-6 col-6 my-auto"><input type="text" name="name" placeholder="name"/></div>
                  </div>
                  <div class="row">
                    <div class="col-sm-4 col-4"></div>
                      <div class="col-sm-2 col-2">
                          Username: </div>
                      <div class="col-sm-6 col-6 my-auto"><input type="text" name="uname" placeholder="username"/></div>
                  </div>
                  <div class="row">
                      <div class="col-sm-4 col-4"></div>
                       <div class="col-sm-2 col-2">
                           Email: </div>
                      <div class="col-sm-6 col-6 my-auto"><input type=" email" name="email" placeholder="email"/></div>
                  </div>
                  <div class="row">
                      <div class="col-sm-4 col-4"></div>
                      <div class="col-sm-2 col-2">
                          Password: </div>
                      <div class="col-sm-6 col-6 my-auto"><input type="password" name="pwd" placeholder="password"/></div>
                  </div>
                  <div class="row">
                      <div class="col-sm-4 col-4"></div>
                      <div class="col-sm-2 col-2">
                          Conform password: </div>
                      <div class="col-sm-6 col-6 my-auto"><input type="password" name="cpwd" placeholder="password"/></div>
                  </div>
                  <div class="row">
                      <div class="col-sm-4 col-4"></div>
                      <div class="col-sm-2 col-2">
                          Recaptcha: </div>
                      <div class="col-sm-6 col-6 my-auto"><input type="text" name="recaptua"/></div>
                  </div>
                  <div class="row">
                      <div class="col-sm-6 col-6"></div>
                      <div class="col-sm-6 col-6 my-auto">
                          <div class="recaptua"><p><?php $re1=rand(1,9); $re2=rand(0,9); $re3=rand(0,9); $re4=rand(0,9); $re5=rand(0,9); $re6=rand(0,9);echo($re1); echo($re2); echo($re3); echo($re4); echo($re5); echo($re6); ?><p></div> 
                      </div>
                
                  </div>
                   <div class="row ">
                  <div class="col-sm-12 text-center"><p>By creating an account,you agree to the <a href="#">Terms of service</a> and acknowledge our <a href="#">privacy policy</a>. </p></div>
                </div>
                  <div class="row ">
                  <div class="col-sm-12 text-center my-auto"><button type="submit" name="submit">Create Account</button></div>  
                  </div>
                   <div class="row ">
                  <div class="col-sm-12 text-center"><p>Already have an account ? <a href="#">Login</a> </p></div>
                </div>
            </form>
            </div>
            </div>
                  <div class="row ">
                  <div class="col-sm-12 text-center"><p>This site is protected by reCAPTCHA and the Google <a href="#">privacy policy</a>and <a href="#">Terms of Service</a> apply. </p></div>
                </div>
            </div>
    </body>
</html>
