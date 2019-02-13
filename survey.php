<!--
Zachary Patterson
Assignment 2
2019-02-19
CSCI-311
-->

<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Survey: Which Game of Thrones Character are You?</title>
</head>

<body>
<?php
    // if there isn't an ID associated with the session
    // (accessed via URL rather than logging in), redirect to login page
    session_start();
    if ($_SESSION['user_ID'] == null)
        header("Location:login.php");
?>
    <!--Survey form-->
    <form action="response.php" method="post">
        Winter or summer?<br>
        <input type="radio" name="Q1" value=1> Winter<br>
        <input type="radio" name="Q1" value=2> Summer<br>

        <br><br>Which is your favorite animal?<br>
        <input type="radio" name="Q2" value=1> Wolf<br>
        <input type="radio" name="Q2" value=2> Dragon<br>
        <input type="radio" name="Q2" value=3> Lion<br>
        <input type="radio" name="Q2" value=4> Snake<br>

        <br><br>The king threatens your life - what do you do?<br>
        <input type="radio" name="Q3" value=1> Draw your sword and prepare to fight the Kingsguard.<br>
        <input type="radio" name="Q3" value=2> Get on your knees and plead for your life.<br>
        <input type="radio" name="Q3" value=3> Slap the wretched fool and call him a viscous idiot.<br>
        <input type="radio" name="Q3" value=4> Use your network of spies to <s>flee</s> assist in your escape.<br>

        <br><br>Honour or Gold?<br>
        <input type="radio" name="Q4" value="1"> Honour<br>
        <input type="radio" name="Q4" value="2"> Gold<br>

        <br><br>BONUS:<br>What must happen in season 8?<br>
        <input type="radio" name="Q5" value=1> Jon and Daenerys need <s>more boat sex</s> to be told that they're cousins.<br>
        <input type="radio" name="Q5" value=2> Tormund and Brienne of Tarth must become the power couple we've all been waiting for.<br>
        <input type="radio" name="Q5" value=3> The Night King needs to bring Ramsay back from the dead so he can be killed a second time.<br>
        <input type="radio" name="Q5" value=4> Bronn and Tyrion need to be reunited. Jamie can be invited too.<br>
        <input type="radio" name="Q5" value=5> All of the above<br>

        <br><br>Which character do we need to see more of?<br>
        <input type="radio" name="Q6" value=1> Ser Davos Seaworth - the Onion Knight.<br>
        <input type="radio" name="Q6" value=2> Tyrian Lannister - the imp.<br>
        <input type="radio" name="Q6" value=3> Arya Stark - no one.<br>
        <input type="radio" name="Q6" value=4> Bronn - the gold digger.<br>
        <input type="radio" name="Q6" value=5> All of the above.<br>
        <br><input type="submit">
    </form>

</body>
</html>
