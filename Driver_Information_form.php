<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
</head>
<style>
    body{
        margin-top: 200px;
        margin-bottom: 200px;
        margin-left: 700px;
        margin-right: 700px;
        background:linear-gradient(to right,yellow,red,pink); 
    }
</style>
<body>
<form action="Driver_Information_insert.php" method="post">
<h1 style="background-color:goldenrod;font-size: 20px;padding-top: 5px;margin-right: 20px;text-align: center;">Driver Information Form</h1>
<p>
        <label for="Car_ID">Car_ID:</label>
        <input type="text" name="Car_ID" id="Car_ID">
    </p>
    <p>
        <label for="Driver_ID">Driver_ID:</label>
        <input type="text" name="Driver_ID" id="Driver_ID">
    </p>
    <p>
        <label for="Driver_License_Number">Driver_License_Number:</label>
        <input type="text" name="Driver_License_Number" id="Driver_License_Number">
    </p>
  
        <label for="Driver_Name">Driver_Name:</label>
        <input type="text" name="Driver_Name" id="Driver_Name">
    </p>
 <p>
        <label for="Driver_cell">Driver_cell:</label>
        <input type="text" name="Driver_cell" id="Driver_cell">
    </p>
 <p>
        <label for="Driver_Email">Driver_Email:</label>
        <input type="text" name="Driver_Email" id="Driver_Email">
    </p>
    <input style="background-color: green;font-size: 20px;padding-top: 5px;" type="submit" value="Submit">
</form>
</body>
</html>