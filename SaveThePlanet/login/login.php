<?php
$mysqli = new mysqli("localhost", "xshou", "el5Glyp!", "xshou");

/* check connection */
if ($mysqli->connect_errno) {
   printf("Connect failed: %s\n", $mysqli->connect_error);
   exit();
}
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // username and password sent from form 
   $username = $mysqli -> real_escape_string($_POST['username']);
   $password = $mysqli -> real_escape_string($_POST['password']);
   $commandText = "SELECT * FROM User WHERE username = '$username' and password = '$password'";
   echo $commandText;
   $result = $mysqli->query($commandText);

   if ($result) {
      $row = mysqli_fetch_array($result);
      if ($row) {
         $_SESSION['login_user'] = $username;
         echo $_SESSION['login_user'];
         header("Location: ../index.php");
      } else {
         $error = "Your Login Name or Password is invalid";
         echo $error;     
      }
   } else {
      $error = "Wrong Login Name or Password format";
      echo $error;
      echo $username;
      echo $password;
   }
}
?>
<html>
<head>
   <title>Login Page</title>

   <style type="text/css">
      body {
         font-family: Arial, Helvetica, sans-serif;
         font-size: 14px;
      }

      label {
         font-weight: bold;
         width: 100px;
         font-size: 14px;
      }

      .box {
         border: #666666 solid 1px;
      }
   </style>

</head>

<body background="#FFFFFF">

   <divs style="display: table-cell; height: 400px; text-align: center; width: 400px; vertical-align: middle;">
      <div style="width:300px; border: solid 1px #333333; ">
         <div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Login</b></div>

         <div style="margin:30px">

            <form action="" method="post">
               <label>UserName :</label><input type="text" name="username" class="box" /><br /><br />
               <label>Password :</label><input type="password" name="password" class="box" /><br /><br />
               <input type="submit" value=" Submit " /><br />
            </form>

            <div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

         </div>

      </div>

      </div>

</body>

</html>