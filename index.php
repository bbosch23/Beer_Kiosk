<!DOCTYPE html>
<html lang="en">
<head>
    <title>Beer Kiosk</title>
    <h1> Beer Kiosk </h1>
</head>
<body>
<?php
if(isset($_REQUEST["name"])){



}
?>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
    <label for="inputName">Name:</label>
    <input type="text" name="name" id="inputName">
    <input type="submit" value="Submit">
</form>
</body>
</html>
