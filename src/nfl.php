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
  <script src="https://code.jquery.com/jquery-3.0.0.min.js"></script>

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
                 <a class="nav-link active" href="nfl.php">NFL</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="nba.php">NBA</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="subscribe.php">Subscribe</a>
             </li>

       </ul>
     </div>
  </div>
</nav>


<!--Slideshow-->

<section class="mainshowcase"  id="footballsection">
        <div class="row">
          <div class = "col-lg-12 pt-5">
              <div class = "d-flex justify-content-center ">
                  <img class="d-block img-fluid border border-danger " src="images/david.jpg"
                  alt="">
            </div>
          </div>
        </div>
</section>

  <!--social media-->


  <section id="newsletter" class="bg-dark text-white" >
              <div class="container">
                  <div class="row">
                    <div class=" media col-sm-6 d-flex justify-content-lg-start py-lg-5 ">
                          <h3 class= " lead d-block pr-3">Follow us on:</h3>

                              <div class= "d-inline pl-3">
                                  <a href="https://www.facebook.com/">
                                  <img class="icon"src="images/facebook.logo.png" alt=""></a>

                              </div>
                              <div class="d-inline px-3">
                                    <a href="https://www.facebook.com/">
                                    <img class="icon"src="images/Instagram.logo.png" alt=""></a>

                              </div class="d-inline px-3">
                              <div>
                                <a href="https://www.facebook.com/">
                                <img class="icon"src="images/youtube.logo.png" alt=""></a>

                              </div>
                      </div>
                  <div class="col-sm-6 d-flex ml-lg-auto py-lg-5">
  <?php


                  echo  "<form class=' ml-lg-auto  method='POST' action='subscribe.php'>

                           <button class= 'btn btn-danger ml-lg-2 p-2' id='button1' type='submit' >Subscribe</button>
                       </form>";
    ?>
                  </div>
                </div>
              </div>
  </section>
  <!--Main showcase-->

<section class="blog bg-light "id=showcase >
  <div class="container">
    <div class="row">
      <div class="col-lg-12 p-lg-5 p-sm-2">
        <h2 class="display-5  text-center page-title my-4 font-weight-bold">Rams Contract Deal With Todd Gurley 60 Millions USD</h1>

           <p class="dark pt-5">
                 We are no longer in the Era of the Quarterback. We are in the Era of the Running Back.
          The lush and risky four-year, $60 million contract extension the Rams signed Todd Gurley to
        Tuesday, according to a source, illustrates that. And there are more running back deals on
        the horizon that might be wealthier. While quarterback remains the most important position,
         the running back is re-emerging as the most dominant one. That may seem like a contradiction,
        but it's not. As a team source with the Rams explained, "Quarterbacks are the prize, but
        running backs are the warriors." Translation: Pass-throwers are still the key in a passing
         league, but runners like Gurley, on teams that don't have Tom Brady, Aaron Rodgers or Russell
        Wilson, are the players who actually win games.
            </p>
                 <div class="video d-flex justify-content-center">
                         <iframe class="videolink my-5" width="750" height="450"
                          src="https://www.youtube.com/embed/wyKPaUJ0IiM">
                        </iframe>
                  </div>
              <p class="dark pt-5"> Running backs have signed big-money deals before, but it's been decades since teams,
               frightened by the threat of injury at one of the more injury-prone positions, flushed
               them with large amounts of guaranteed cash.
                      It's also been a long time since we've seen runners outshine quarterbacks in
                      popularity and importance. But we are starting to see exactly that.
                      It's like the NFL has stepped into a time machine and traveled back to the 1990s,
                      when players like Barry Sanders, Emmitt Smith and Thurman Thomas ruled the Earth.
                      After Gurley, Pittsburgh's Le'Veon Bell likely will get an even bigger deal at
                      some point in the future, and he even tweeted about Gurley's deal Tuesday. And
                      there are already league rumblings that Arizona's David Johnson will get a
                       significant pay raise from his rookie deal by the time the season starts.
            </p>

            </div>
          </div>
        </div>
  </section>




        <!--<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>-->
        <footer class="bg-dark text-white mt-5">
          <div class="container">
            <div class="row">
                <div class="col-lg-12  d-flex justify-content-lg-end ">

           <p class=" py-5"> Conejo Sports, Copyright &copy; 2017</p>
              </div>
             </div>
          </div>
        </footer>


        <script src="js/jquery.min.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/global.js"></script>
</body>
</html>
