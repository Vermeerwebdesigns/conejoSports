
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Conejo Sports</title>
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css?<?php echo time(); ?>">
  <link rel="shortcut icon"type="images/png" href="images/favicon2.png" sizes="64x64">
</head>
<body>

    <nav class="navbar navbar-expand-sm text-white bg-dark navbar-dark py-2 fixed-top">
      <div class="container">
            <a href="index.php"  class="navbar-brand">
            <img src="images/ConejoLogo.png" with= "100" height="100"alt="Conejo Sports">
            </a>
            <button class="navbar-toggler"data-toggle= "collapse" data-target= "#navbarnNav"><span class="navbar-toggler-icon"></span></button>

      <div class="collapse navbar-collapse pt-3" id="navbarnNav">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item">
                 <a class="nav-link" href="index.php">World Cup</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="nfl.php">NFL</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="nba.php">NBA</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link active" href="subscribe.php">Subscribe</a>
             </li>
       </ul>
     </div>
  </div>
</nav>

<!--Subscribe-->

                          <section class="mainshowcase mt-5" id="subscribe">
                          <div class="container">
                            <div class="col-md-8 order-md-1">
                              <h4 class=" lead-3 d-flex justify-content-center mt-5">Subscribe</h4>

            <form action="includes/signup.inc.php" method="POST" class="needs-validation pt-5" autocomplete="off" novalidate >
                                <div class="row">
                                  <div class="col-md-6 mb-3">
                                    <label for="firstName">First name</label>

    <!--FIRST-->  <input type="text" name='first' class="form-control " id="firstName" placeholder="FirstName" autocomplete="off" value="" required >
                                    <div class="invalid-feedback">
                                      Valid first name is required.
                                    </div>
                                  </div>
                                  <div class="col-md-6 mb-3">
                                    <label for="lastName">Last name</label>

      <!--LAST--> <input type="text" name='last' class="form-control " id="lastName" placeholder="LastName" autocomplete="off" value="" required>

                                    <div class="invalid-feedback">
                                      Valid last name is required.
                                    </div>
                                  </div>
                                </div>




                        <div class='mb-3'>
                                  <label for='email'>Email <span class='text-muted'>Required</span></label>
                    <input type='text' name='email' class='form-control' id='email' value= '' autocomplete='off' placeholder='you@example.com'>

                                </div>



                                <div class="mb-3">
                                  <label for="username">Username</label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                  </div>
      <!--USERNAME--> <input type="text" name='uid' class="form-control" id="username" autocomplete="off" placeholder="Username" required>
                                    <div class="invalid-feedback" style="width: 100%;">
                                      Your username is required.
                                    </div>
                                  </div>
                                </div>

                                <div class="mb-3">
                                  <label for="username">Password</label>
                                  <div class="input-group">
                                    <div class="input-group-prepend">
                                    </div>
    <!--PASWORD--> <input type="text" name='pwd' class="form-control" id="password" autocomplete="off" placeholder="Password" required>
                                    <div class="invalid-feedback" style="width: 100%;">
                                      Your username is required.
                                    </div>
                                  </div>
                                </div>

                                <hr class="mb-4">
      <button type="submit" name='submit'class="btn btn-danger btn-lg btn-block" type="submit" name='last'>Sign Up</button>
                              </form>


                          </div>
                          </section>







    <footer class="bg-dark text-white mt-5">
      <div class="container">
          <div class="row">
              <div class="col-lg-12  d-flex justify-content-end">
           <p class=" py-5"> Conejo Sports, Copyright &copy; 2017</p>
              </div>
             </div>
      </div>
  </footer>




<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
