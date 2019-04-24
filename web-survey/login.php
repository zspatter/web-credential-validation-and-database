<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Login</title>
</head>

<?php
    // if an invalid username or password is entered, an error message
    // is printed above the login form
    if (isset($_GET['error']))
    {
        echo 'You have entered an invalid username or password.<br>Please try again.<br><br>';
    }

    session_start();
    // database details for building sql connection
    // these strings can be changed in the event that the
    // host, user, or password for the db change
    $host = "localhost";
    $user = "root";
    $password = "mysql";
    $db = "demo";

    // connection built with above details, and database selected
    $con = mysqli_connect($host, $user, $password);
    mysqli_select_db($con, $db);

    if (isset($_POST['username']))
    {
        // store user/pass input from form here
        $username_input = $_POST['username'];
        $password_input = $_POST['password'];

        // sql query where User and Password fields match input from form
        $sql = "SELECT * FROM loginform WHERE User='".$username_input."' AND Password='".$password_input."';";
        $result = mysqli_query($con, $sql);

        // if there is a match from the query, store the ID (primary key)
        // as a session variable and redirect to the survey page
        if (mysqli_num_rows($result) == 1)
        {
            $row=mysqli_fetch_assoc($result);
            $_SESSION['user_ID'] = $row['ID'];
            header("Location:survey.php");
            exit();
        // else redirect to the login page with an error message
        } else
        {
            header("Location:login.php?error");
            exit();
        }
    }
?>

<body>

	<form action="#" method="POST">
    Username: <input type="text" name="username"/> <br/>
	Password:  <input type="password" name="password"/> <br/>
	<input type="submit" name="submit" value="Log in"/>
	</form>

</body>
</html>
