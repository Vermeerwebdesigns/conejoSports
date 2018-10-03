<?php ob_start();

$_SESSION['id'] = 'Marlon';  //   how to make uid same as sign up uid

function get_total() {
  require 'dbh.inc.php';  //connect.php
  $result = mysqli_query($conn, "SELECT * FROM `parents` ORDER BY `p_date` DESC");
  $row_cnt = mysqli_num_rows($result);
  echo "<h1 class = 'lead text-center mb-1' >All Comments ( $row_cnt )</h1>";
}

function get_comments() {
  require 'dbh.inc.php'; //connect.php
  $result =  mysqli_query($conn, "SELECT * FROM `parents` ORDER BY `p_date` DESC");
  $row_cnt = mysqli_num_rows($result);

  foreach($result as $item) {
    $date = new dateTime($item['p_date']);
    $date = date_format($date, 'M j, Y | H:i:s');
    $user = $item['p_user'];
    $comment = $item['p_text'];
    $par_code = $item['pcode'];

    echo '<div class="comment" id="'.$par_code.'">'
        .'<p class="user">'.$user.'</p>&nbsp;'
        .'<p class="time">'.$date.'</p>'
        .'<p class="comment-text">'.$comment.'</p>'
        .'<a class="link-reply" id="reply" name="'.$par_code.'">Reply</a>';
      $chi_result = mysqli_query($conn, "SELECT * FROM `children` WHERE `ch_parcode`='$par_code' ORDER BY `ch_date` DESC");
      $chi_cnt = mysqli_num_rows($chi_result);

      if($chi_cnt == 0){
      } else {
        echo '<a class="link-reply" id="children" name="'.$par_code.'"><span id="tog_text">replies</span> ('.$chi_cnt.')</a>'
          .'<div class="child-comments" id="C-'.$par_code.'">';

        foreach($chi_result as $com) {
          $chi_date = new dateTime($com['ch_date']);
          $chi_date = date_format($chi_date, 'M j, Y | H:i:s');
          $chi_user = $com['ch_user'];
          $chi_com = $com['ch_text'];
          $chi_par = $com['ch_parcode'];

          echo '<div class="child" id="'.$par_code.'-C">'
              .'<p class="user">'.$chi_user.'</p>&nbsp;'
              .'<p class="time">'.$chi_date.'</p>'
              .'<p class="comment-text">'.$chi_com.'</p>'
            .'</div>';
        }
        echo '</div>';
      }
      echo '</div>';
  }
}

function generateRandomString($length = 6) {
  $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
  $characterLength = strlen($characters);
  $randomString = '';

  for($i = 0; $i < $length; $i++) {
    $randomString .= $characters[rand(0, $characterLength - 1)];
  }
  return $randomString;
}



//LOGIN



function getLogin($conn){
    if(isset($_POST['loginSubmit'])){
      $uid = mysqli_real_escape_string($conn, $_POST['uid']);
      $pwd = mysqli_real_escape_string($conn, $_POST['pwd']);
//AND user_pwd= '$pwd'

    if (empty($uid)|| empty($pwd)){
      header("Location: index.php?login=empty");
      exit();


}else{
      $sql = "SELECT * FROM login_users WHERE user_uid= '$uid' OR user_email = '$uid'";
        $result = mysqli_query($conn, $sql);
         $resultCheck = mysqli_num_rows($result);

      } if($resultCheck < 1){
       header("Location: index.php?login=error");
       exit();

    }if(mysqli_num_rows($result) > 0){
          if($row = mysqli_fetch_assoc($result))
          // De-hashing the Password
          $hashedPwdCheck = password_verify($pwd, $row['user_pwd']);
          if($hashedPwdCheck == false){
            header("Location: index.php?login=error");
            exit();

          }elseif($hashedPwdCheck == true)  {
            $_SESSION['id'] = $row['user_uid'];
              header("Location: index.php?loginsuccess");
              exit();

          }
        }else{

          header("Location: index.php?login=failed");
          exit();

        }


    }
  }

  function userLogout(){

      if(isset($_POST['logoutSubmit'])){
        session_start();
        session_destroy();
        header("Location: index.php");
         exit();
      }

  }
