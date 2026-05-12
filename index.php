<!DOCTYPE html>
<html>
<head>
    <title>Student Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Student Registration</h2>

<form action="save.php" method="POST">

    First Name:<br>
    <input type="text" name="firstname"><br><br>

    Middle Name:<br>
    <input type="text" name="middlename"><br><br>

    Last Name:<br>
    <input type="text" name="lastname"><br><br>

    Age:<br>
    <input type="number" name="age"><br><br>

    Address:<br>
    <textarea name="address"></textarea><br><br>

    <button type="submit">Submit</button>

</form>

</body>
</html>