<html lang="en">
</html>
 <?php
session_start();
if (array_key_exists("uid", $_SESSION)) {
    unset($_SESSION);
    setcookie("uid", "", time() - 60 * 60);
    $_COOKIE['uid'] = "";
} elseif ((array_key_exists("uid", $_SESSION) and $_SESSION['uid']) or (array_key_exists("uid", $_COOKIE) and $_COOKIE['uid'])) {

    $q = mysqli_query(mysqli_connect("localhost", "root", "", "rail_connect"), "SELECT * FROM users");
    if ($q == true) {
        for ($i = 1; $row['uid'] != $_SESSION['uid']; $i++) {
            $row = mysqli_fetch_array($q);
        }

        $_SESSION['Admin'] = $row['Admin'];
        if ($row['Admin'] == '1') {
            header("Location:Admin/admin.php");
        } else {
            header("Location:dashboard/dashboard.php");
        }

    }}
if (array_key_exists("submit", $_POST)) {
    $db = mysqli_connect("localhost", "root", "", "rail_connect");
    if (mysqli_connect_error()) {
        die("Database Connection Error.");
    }
    $query = "SELECT uid FROM users WHERE username='" . mysqli_real_escape_string($db, $_POST['username']) . "' AND  password='" . mysqli_real_escape_string($db, $_POST['password']) . "' LIMIT 1";
    $result = mysqli_query($db, $query);
    $row = mysqli_fetch_array($result);
    if (isset($row)) {
        $_SESSION['uid'] = $row['uid'];
        if (isset($_POST['remember']) && ($_POST['remember'] == 'on' || $_POST['remember'] == '1')) { //always setting the cookie
            setcookie("uid", $row['uid'], time() + 60 * 60 * 24 * 365);
        }
        $q = mysqli_query($db, "SELECT * FROM users");
        if ($q == true) {
            for ($i = 1; $row['uid'] != $_SESSION['uid']; $i++) {
                $row = mysqli_fetch_array($q);
            }

            $_SESSION['Admin'] = $row['Admin'];
            if ($row['Admin'] == '1') {
                header("Location:Admin/admin.php");
            } else {
                header("Location:dashboard/dashboard.php");
            }
        }
    } else {
        echo "<strong style=\"color:white\">Could not Log in. Username/Password could not be found.Please try Again Later.</strong>";
    }
}
?>
  <head>
    <title>User Login</title>
  <link rel="shortcut icon" type="image/png" href="images/logo.jpg"/>
    <style type="text/css">
   body {font-family: Arial, Helvetica, sans-serif;
            background-color: #222;
        border:1px solid red;}
* {box-sizing: border-box;
}
    .cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}
input[type=email], input[type=password] {
    width:25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}
input[type="submit"].special,
        input[type="reset"].special,
        input[type="button"].special,
        .button.special {
            width:33%;
            background-color:#222;
            border:1px solid white;
            border-radius:1px;
            color: #ffffff !important;
        }

            input[type="submit"].special:hover,
            input[type="reset"].special:hover,
            input[type="button"].special:hover,
            .button.special:hover {
                background-color: #629DD1;
            }

            input[type="submit"].special:active,
            input[type="reset"].special:active,
            input[type="button"].special:active,
            .button.special:active {
                background-color: #629DD1;
            }

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 18px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: auto;
}

button:hover {
    opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}
/* Center the image and position the close button */
.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
    position: relative;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}
.animate {
    -webkit-animation: animatezoom 0.6s;
    animation: animatezoom 0.6s
}
@keyframes animatezoom {
    from {transform: scale(0)}
    to {transform: scale(1)}
}
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }}
    .container {
    padding: 16px;
    background-color: #222;
}
hr.someClass {
  background-color: purple;
  width: 100%;
  height: 7px;
  border-top: 1px solid white
}
</style></head>
<body>

  <form class="animate" method="post">
    <div class="container">
<!--        <h1 style="color:#f0f0f0">Login</h1>  -->
    <p style="color:#f0f0f0">Enter your login credentials here.</p>
    <hr class="someClass">
    <div class="imgcontainer">
<!--    <img src="img_avatar2.png" alt="Avatar" class="avatar" style="display: inline-block;vertical-align: top;">

                    <div style="display: inline-block;vertical-align:bottom; width:50%;"> -->
<!--                      <h3 style="vertical-align:top;font-size: 50px;color:#F3F4F7">Login</h3> -->
                      <br><br><br><br><br><br><br><br>
                      <label for="uname" style="color:#10EDD6"><b>Username</b></label>
                      <input type="email" id="uname" placeholder="Enter Email" name="username" required><br>

                      <label for="psw" style="color:#10EDD6"><b>Password</b></label>
                      <input type="password" id="psw" placeholder="Enter Password" name="password" required><br>
                      <label style="color:#f0f0f0">
                            <input type="checkbox" checked="checked" name="remember" value="1" style="margin-bottom:15px" style="color:#f0f0f0"> Hey!Remember Me.
                                </label><br>
                       <a href="index.php"><button type="button" class="cancelbtn">Cancel</button></a>
                       <button type="submit" name="submit">Login</button></div>
                       </div>
                       <br><br>
                       <hr class="someClass">
                       <div>
                         <span class="psw"><a href="#">Forgot password?</a></span>
                        <label><p style="color:#F30A2D">New User?</p>
      <a href="user_sign_up/user_sign_up.php"><button type="button" class="button special">Sign Up</button></a></label>

    </div>
    </div>

</form>
</body>
