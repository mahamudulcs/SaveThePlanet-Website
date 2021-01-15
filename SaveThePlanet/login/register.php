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
    $username = $mysqli->real_escape_string($_POST['username']);
    $password = $mysqli->real_escape_string($_POST['password']);
    $confirmPassword = $mysqli->real_escape_string($_POST['confirmPassword']);

    // check usrname and password format 
    $count = 0;
    $alertText = '';
    if (strlen($username) < 1) {
        $alertText = $alertText . 'Username cannot be empty';
        $count = 1;
    }
    if (strlen($username) > 20) {
        $alertText = $alertText . 'Username cannot be more than 20 character';
        $count = 1;
    }
    if (strlen($password) < 8) {
        $alertText = $alertText . '\\n';
        $alertText = $alertText . 'Password cannot be less than 8 characters';
        $count = 1;
    }
    if (strlen($password) > 15) {
        $alertText = $alertText . '\\n';
        $alertText = $alertText . 'Password cannot be more than 15 characters';
        $count = 1;
    }
    if ($password != $confirmPassword) {
        $alertText = $alertText . '\\n';
        $alertText = $alertText . 'Passwords must be the same';
        $count = 1;
    }
    if ($count > 0) {
        echo "<script type='text/javascript'>alert('$alertText');</script>";
    }

    if ($count == 0) {
        // check if duplicate username
        $commandText = "SELECT * FROM User WHERE username = '$username'";
        echo $commandText;
        $result = $mysqli->query($commandText);

        if ($result) {
            $row = mysqli_fetch_array($result);
            if ($row) {
                //  check if duplicate username 
                echo "<script type='text/javascript'>alert('Username has already been used. Please choose another username');</script>";
            } else {
                // no duplicate
                $insertComment = "insert into User (username, password) VALUES ('$username', '$password')";
                $insertResult = $mysqli->query($insertComment);
                if ($insertResult) {
                    echo "insert successful";
                    echo "<script type='text/javascript'>window.location.href='../index.php'</script>";
                    echo "<script type='text/javascript'>alert('Successfully Registered');</script>";
                } else {
                    echo "insert unsuccesful";
                }
            }
        } else {
            $error = "There were some errors occured";
        }
    }
}
?>
<html>

<head>
    <title>Register Page</title>

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
            <div style="background-color:#333333; color:#FFFFFF; padding:3px;"><b>Register</b></div>

            <div style="margin:30px">

                <form action="" method="post">
                    <label>UserName (1-20 characters):</label><input type="text" name="username" class="box" /><br /><br />
                    <label>Password (8-15 characters):</label><input type="password" name="password" class="box" /><br /><br />
                    <label>Confirm Password:</label><input type="password" name="confirmPassword" class="box" /><br /><br />
                    <input type="submit" value=" Submit " /><br />
                </form>

                <div style="font-size:11px; color:#cc0000; margin-top:10px"><?php echo $error; ?></div>

            </div>

        </div>

        </div>

</body>

</html>