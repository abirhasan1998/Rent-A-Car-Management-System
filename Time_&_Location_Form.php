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
<form action="Time_&_Location_Form.php" method="post">
<h1 style="background-color:goldenrod;font-size: 20px;padding-top: 5px;margin-right: 20px;text-align: center;">Time & Location Information Form</h1>
    <p>
        <label for="Booking_ID">Booking_ID:</label>
        <input type="text" name="Booking_ID" id="Booking_ID">
    </p>
    <p>
        <label for="Departure_Time">Departure_Time:</label>
        <input type="text" name="Departure_Time" id="Departure_Time">
    </p>
  
        <label for="Arrival_Time">Arrival_Time:</label>
        <input type="text" name="Arrival_Time" id="Arrival_Time">
    </p>
 <p>
        <label for="Departure_Location">Departure_Location:</label>
        <input type="text" name="Departure_Location" id="Departure_Location">
    </p>
 <p>
        <label for="Arrival_Location">Arrival_Location:</label>
        <input type="text" name="Arrival_Location" id="Arrival_Location">
    </p>
	<p>
        <label for="Rent_Deadline">Rent_Deadline:</label>
        <input type="text" name="Rent_Deadline" id="Rent_Deadline">
    </p>
    <input style="background-color: green;font-size: 20px;padding-top: 5px;" type="submit" value="Submit">
</form>
</body>
</html>