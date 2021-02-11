<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Add Record Form</title>
<style>
    body{
        margin-top: 200px;
        margin-bottom: 200px;
        margin-left: 700px;
        margin-right: 700px;
        background:linear-gradient(to right,yellow,red,pink); 
    }
</style>
</head>

<body>

<form action="Booking_Information_Insert.php" method="post">
    <h1 style="background-color:goldenrod;font-size: 20px;padding-top: 5px;margin-right: 20px;text-align: center;">Booking Information Form</h1>
    <p>
        <label for="Booking_ID">Booking_ID:</label>
        <input type="text" name="Booking_ID" id="Booking_ID">
    </p>
    <p>
        <label for="Car_ID">Car_ID:</label>
        <input type="text" name="Car_ID" id="Car_ID">
    </p>
    <p>
        <label for="Customer_ID">Customer_ID:</label>
        <input type="text" name="Customer_ID" id="Customer_ID">
    </p>
	
    <p>
        <label for="Booking_Date">Booking_Date:</label>
        <input type="text" name="Booking_Date" id="Booking_Date">
    </p>
	
<input style="background-color: green;font-size: 20px;padding-top: 5px;" type="submit" value="Submit">

</form>

</body>
</html>