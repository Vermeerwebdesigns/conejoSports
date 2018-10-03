<?php
date_default_timezone_set('America/New_York');
include 'includes/dbh.inc.php';
include 'includes/comments.inc.php';


session_start();
?>﻿
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

    <nav class="navbar navbar-expand-sm  text-white bg-dark navbar-dark py-2 fixed-top">
      <div class="container">
            <a href="index.php"  class="navbar-brand">
            <img src="images/ConejoLogo.png" with= "100" height="100"alt="Conejo Sports">
            </a>
            <button class="navbar-toggler"data-toggle= "collapse" data-target= "#navbarnNav"><span class="navbar-toggler-icon"></span></button>

      <div class="collapse navbar-collapse pt-3" id="navbarnNav">
           <ul class="navbar-nav ml-auto">
             <li class="nav-item">
                 <a class="nav-link active" href="index.php">World Cup</a>
             </li>
             <li class="nav-item">
                 <a class="nav-link" href="nfl.php">NFL</a>
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

<section class="mainshowcase" id="wordcupsection">

        <div class="row">
          <div class = "col-lg-12 m-lg-auto">

          <div id="slider1" class="carousel slide mt-lg-5 border border-danger" data-ride="carousel">

              <ol class="carousel-indicators">
                <li class="active" data-target="#slider1" data-slide-to="0"></li>
                <li data-target="#slider1" data-slide-to="1"></li>
                <li data-target="#slider1" data-slide-to="2"></li>
              </ol>

          <div class="carousel-inner">

                <div class="carousel-item active">
                  <img class="d-block img-fluid"
                  src="images/neymarlol.jpg"
                  alt="first slide">
                </div>

                <div class="carousel-item">
                  <img class="d-block img-fluid"
                  src="images/girl.jpg"
                  alt="second slide">
                </div>

                <div class="carousel-item">
                  <img class="d-block img-fluid"
                  src="images/gol.jpg"
                  alt="third slide">
                </div>

            </div>

              <!--Controls-->
            <a href="#slider1" class="carousel-control-prev" data-slide="prev">
                <span class="carousel-control-prev-icon"></span>
              </a>

              <a href="#slider1" class="carousel-control-next" data-slide="next">
                <span class="carousel-control-next-icon"></span>
              </a>

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
        <h2 class="display-5  text-center page-title my-4 font-weight-bold">Top 5 Most Asked Questions About The 2018 World Cup</h2>

              <p class="dark pt-5">
              The 2018 world cup is over and many will say that this was one of the most exciting World
              Cups compared to previous cups, From the high unusual scoring to underdogs beating the
              established teams like Spain vs Russia & Japan vs Colombia. Croatia was one of the most
              surprising teams of the world cup that made it to the finals against France, Even though
              in the end France won the title of word champions, Croatia won the heart’s and respect of
              many. <br>
              <br>
              Russia hosted this years World Cup and did not only put together a well coordinated
               event but also delivered a good performance on the soccer field beating Saudi Arabia,
               Egypt, and Spain up until they lost against Uruguay. <br>
              <br>
              The US did not participate in the world cup and according to Bloomberg, viewership
               was the most impacted by this statistic . In fact, this year only half of the US
               viewership was accounted for when compared to the 2014 World Cup. Those who follow
               have high expectations to join  the 2022 World Cup in Qatar<br>
              <br>
              In the USA, Soccer is still a growing sport and many questions still linger about
               the World Cup. Conejo Sports has compiled a list of the Top 10 most controversial
               questions about Neymar & the 2018 World Cup.
              <br>
              <br>
              </p>

      <!--TOP 5 QUESTIONS-->

                  <h3 class="question" id="question">1. Why do soccer players dive so much?</h3>

                  <p >Most people would think of Neymar when discussing this question due to
                  his recent performance in this year's 2018 World Cup. Neymar has been
                  laughed at due to his humorous outbursts on the field and in spite of this,
                  internet meme’s have been created about him and his diving tactics.

                  But no matter how funny it is to see this, the reality of the sport is this, diving
                  is a crucial part of the sport and will never go away. It's a tactic based on
                   Cost/Benefit which includes where to fall rather then when to fall. Most player
                    would prefer to dive in side the goalie box in hope to fooling the referee hopefully
                   resulting in a penalty shot. Most people don't agree with this but even the
                  most “die hard” fans know that this is part of the game. </p>

                <h3 class="question pt-4">2. Why is the Qatar hosting the 2022 World Cup?</h3>

                  <p>  One of the reasons FIFA has mentioned  to support the bidding of the 2022 world
                  cup in Qatar was their desired to expand the sport in regions of the world where
                  the world cup has never been held previously.  However this decision was not without
                  controversy. Allegations of bribery and payouts have been mentioned and some people
                  accused FIFA of being corrupted for allegedly taking payment for their votes.  FIFA
                  has modified their voting process to avoid corruption but many think that there is
                  much more to do in order to clean up the voting process.  So far Qatar has decided
                  to move the game to winter time to avoid health issues to the players but winter
                  temperature in Qatar could be still pretty hot about 86 degrees. </p>

                <h3 class="question pt-4">3. Did France really win the World Cup?</h3>

                  <p>Of course, France won the world cup defeating a very talented Croatian team.
                  This was done fair and square, but the controversy arose after
                  their winning celebration to some people calling into question their player's
                  African heritage. Trevor Noah from the Daily Show practically threw
                  wood to the fire in his July 18th show.  The video  is below and we will let
                  it speak for itself.
                  </p>
              </div>
          </div>
        </div>
    </section>

<section id=showcase>
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
                 <div class="video d-flex justify-content-center">
                         <iframe class="videolink my-5" width="750" height="450"
                          src="https://www.youtube.com/embed/COD9hcTpGWQ">
                        </iframe>
                  </div>

      <h3 class="question pt-4 ">4. The VAR… a good innovation for soccer?</h3>
            <p>Video-Assisted Referee is a technology brought
            from other sports such as American Football to
             review referee decisions and retracted them if necessary.
              This technology is no new at all but to FIFA  and soccer
              fans that prefer a more traditional version of soccer were
              afraid that this would have killed the flair of the game.
              The 2018 world cup is the first cup ever integrating this
              technology and many believe it was a success in its implementation.
              Definitely a positive for the sport.
            </p>
      <h3 class="question pt-4">5. Messi, Ronaldo & Neymar miss opportunity?</h3>
              <p> Many “big name” players such as Messi, Ronaldo & Neymar Have
               to wait until the next world cup to have the opportunity of
                obtaining the only title they do not possess so far, proving
                the challenges of becoming a world champion.  For Messi and
                Ronaldo the pressure is mounting to deliver a winning world
               cup since they will be older in the next 4 years.  Messi is
                currently 31 years old, and Ronaldo is 34 and passed their
                football prime in relation to their ages.  Neymar is still young
                at 26 years old, he has time to achieve his goals.  Many believe
                that the fact of them not winning the world cup is a reflection
                of them spending more time in international soccer clubs where their
                skills and coordination with teams and the lack of familiarity with
                he style of their country teammates.
              </p><br>
            </div>
          </div>
        </div>
  </section>

                                              <!--FORM LOG IN---------->


  <section class=" register bg-light "id=comments >
        <div class="container">
          <div class="row">
             <div class="col-lg-12 mt-lg-5 ">


<?php
if(isset($_SESSION['id'])){

  echo
  "<h4 class ='lead pb-2'>Hello ".$_SESSION['id']."!</h4>
  <form class='logout-form' method = 'POST' action=' ".userLogout()."'>
  <button type='submit' name ='logoutSubmit' class='btn btn-light border border-danger mt-4 smr-1'>Log out</button>

</form>";
}else{

  echo
            "<h2 class='my-5 text-center'>Please sign up for comments</h2>
            <form method = 'POST' action=' ".getLogin($conn)."'>
                <div class='form-group' id='emailform'>
                 <label for='exampleInputEmail1'>User/Email</label>

         <input type='text' name ='uid' class='form-control mb-4' placeholder='User Name' autocomplete='off'>

                               <label for='exampleInputPassword1'>Password</label>

        <input type='text' name ='pwd' class='form-control' placeholder='Password' autocomplete='off' >

                  <button type='submit' id='login' name ='loginSubmit' class=' btn btn-danger mt-5 mt-lg-3 mr-1'>Log in</button>
                  <a href='subscribe.php'  id ='signup' class='mt-lg-3  btn btn-light border border-danger text-danger' role='button' >Sign Up</a>

               </div>
            </form>";
}


?>

            </div>
        </div>
       </div>
</section>

<!--textarea post comment section-->

  <section class="comment bg-light py-5" id=textarea >
      <div class="container">
          <div class="row">
              <div class="col-lg-12">


                <?php

                  if(isset($_SESSION['id'])){
              				get_total();
              				require_once 'includes\check_com.php';

      echo        "<form method ='POST' action='' class='form-group  my-5'>
                    <textarea name='comment' class='form-control' id='comment' rows='3' placeholder = 'Enter comment...'></textarea>
                      <br />
                      <input type='submit'  class='form-submit btn btn-danger my-3' name='new_comment' value='post'>
                   </form>";
                 }else{

                      }
                  	 get_comments();

                     ?>

<h1></h1>
              </div>
          </div>
      </div>
  </section>


        <!--<input type='hidden' name='date' value='".date('Y-m-d H:i:s')."'>-->
        <footer class="bg-dark text-white mt-5">
          <div class="container">
            <div class="row">
              <div class="col-lg-12  d-flex justify-content-lg-end ">

           <p class=" footer py-5"> Conejo Sports, Copyright &copy; 2017</p>
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
