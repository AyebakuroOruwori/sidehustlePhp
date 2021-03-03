<!DOCTYPE html>
<html>
<head>
<title>Registration</title>
<body>
<!--user id: SH-IT-03248-->
<h1>Register Here:</h1>
<p>Enter your full details.</p>
    <form action="RegForm.php" method="get">
        Name:<br><input type="text" name="name" placeholder="Full Name">
        <br>
        Email Address:<br><input type="text" name="email" placeholder="Email">
        <br>
        Age:<br><input type="number" name="age" placeholder="Age">
        <br>
        Phone Number:<br><input type="number" name="phoneno" placeholder="PhoneNo">
        <br>
        Password:<br><input type="text" name="password" placeholder="Password">
        <br>
              <input type= "Submit" value="Submit">
    </form>
    <br>
        Name:<?php echo $_GET["name"]?>
    <br>
        Email: <?php echo $_GET["email"]?>
    <br>
        Age: <?php echo $_GET["age"]?>
    <br>
        Phone No: <?php echo $_GET["phoneno"]?>
    <br>
        Password: <?php echo $_GET["password"]?>

    
 
<!--Program by Ayebakuro-->
</body>

</html>