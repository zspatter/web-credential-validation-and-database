<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Survey Results</title>
</head>

<body>
<?php
    // if there isn't an ID associated with the session
    // (accessed via URL rather than logging in), redirect to login page
    session_start();
    if ($_SESSION['user_ID'] == null)
        header("Location:login.php");

    // results from survey form stored here
    $Q1 = $_POST["Q1"];
    $Q2 = $_POST["Q2"];
    $Q3 = $_POST["Q3"];
    $Q4 = $_POST["Q4"];
    $Q5 = $_POST["Q5"];
    $Q6 = $_POST["Q6"];

    // result of survey stored, then survey answers and result are
    // stored to db, then session ends
    $result = getResult($Q1, $Q2, $Q3, $Q4);
    save_data($Q1, $Q2, $Q3, $Q4, $Q5, $Q6, $result);
    session_destroy();

// Character result determined from from 4 questions
// (bonus ignored) and result is returned as a string
function getResult($Q1, $Q2, $Q3, $Q4)
{
    if ($Q1 == 1 && $Q2 == 1 && $Q3 == 1 && $Q4 == 1)
        return "Ned Stark";
    elseif ($Q1 == 2 && $Q2 == 3 && $Q4 == 2)
        return "Tywin Lannister";
    elseif ($Q3 == 2)
        return "Petyr Baelish";
    elseif ($Q3 == 3)
        return "Tyrion Lannister";
    elseif ($Q3 == 4)
        return "Lord Varys";
    elseif ($Q2 == 2)
        return "Daenerys Targaryen";
    elseif ($Q2 == 4)
        return "Oberyn Martell";
    elseif ($Q4 == 1)
        return "Jon Snow";
    elseif ($Q4 == 2)
        return "Bronn";
    else
        return "Ghost";
}

// SQL query saves survey answers and result to database
function save_data($Q1, $Q2, $Q3, $Q4, $Q5, $Q6, $result)
{
    $host = "localhost";
    $user = "root";
    $password = "mysql";
    $db = "demo";

    $con = mysqli_connect($host, $user, $password);
    mysqli_select_db($con, $db);


    $sql = "INSERT INTO Responses (`User_ID`, `Q1`, `Q2`, `Q3`, `Q4`, `Q5`, `Q6`, `Result`) VALUES ("
        .$_SESSION['user_ID']
        .", '".$Q1
        ."','".$Q2
        ."','".$Q3
        ."','".$Q4
        ."','".$Q5
        ."','".$Q6
        ."','".$result
        ."');";
    mysqli_query($con, $sql);
}


?>
<!--Result of survey displayed-->
Your result is:
<s><?php
    if ($result != "Tyrion Lannister")
        echo $result;
    ?></s>
Tyrion Lannister!

</body>
</html>
