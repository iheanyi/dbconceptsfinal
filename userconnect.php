<html>
<body>

<?php

  session_start();

  error_reporting(-1);

  $theuser = $_POST['user'];
  $thepwd = $_POST['pwd'];
  $conn = oci_connect($theuser, $thepwd)
     or die("<br>Couldn't connect");

  $query = "select user from dual";

  $stmt = oci_parse($conn, $query);
  oci_define_by_name($stmt, "USER", $u);
  oci_execute($stmt);
  oci_fetch($stmt);

  echo "Connected! The user is: $u";
  $_SESSION['user'] = $theuser;
  $_SESSION['loggedin'] = true;

  oci_close($conn);

  /*if(isset['cookie']) {

   // Remember me box checked? Then let's head to the mainpage!
   $expire = time() + 60 * 60 * 24 * 30;
   setcookie("user", $theuser, $expire);
   setcookie("pwd", $thepwd, $expire);	
  }

  else {
    setcookie("user", $theuser, false);
    setcookie("pwd", $thepwd, false);		
  } */



  header('Location: index.php');
?>

</body>
</html>

