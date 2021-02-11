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
<form action="Customer_Information_Insert.php" method="post">
<h1 style="background-color:goldenrod;font-size: 20px;padding-top: 5px;margin-right: 20px;text-align: center;">Customer Information Form</h1>
    <p>
        <label for="aa">Customer_ID:</label>
        <input type="text" name="a" id="aa">
    </p>
    <p>
        <label for="bb">Customer_Name:</label>
        <input type="text" name="b" id="bb">
    </p>
    <p>
        <label for="cc">Sex:</label>
        <input type="text" name="c" id="cc">
    </p>
	</p>
    <p>
        <label for="dd">Cell:</label>
        <input type="text" name="d" id="dd">
    </p>
	</p>
    <p>
        <label for="ee">Email:</label>
        <input type="text" name="e" id="ee">
    </p>
	</p>
    <p>
        <label for="ff">Car_ID:</label>
        <input type="text" name="f" id="ff">
    </p>
	</p>
    
    <input style="background-color: green;font-size: 20px;padding-top: 5px;" type="submit" value="Submit">
</form>
</body>
</html>