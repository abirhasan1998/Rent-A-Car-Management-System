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
<form action="Payment_Information_Insert.php" method="post">
<h1 style="background-color:goldenrod;font-size: 20px;padding-top: 5px;margin-right: 20px;text-align: center;">payment Information Form</h1>
    <p>
        <label for="Booking_ID">Booking_ID:</label>
        <input type="text" name="Booking_ID" id="Booking_ID">
    </p>
    <p>
        <label for="Total_Payment">Total_Payment:</label>
        <input type="text" name="Total_Payment" id="Total_Payment">
    </p>
    <p>
        <label for="Paid">Paid:</label>
        <input type="text" name="Paid" id="Paid">
    </p>
	<p>
        <label for="Due">Due:</label>
        <input type="text" name="Due" id="Due">
    </p>
	<p>
        <label for="Fine">Fine:</label>
        <input type="text" name="Fine" id="Fine">
    </p>
		<p>
        <label for="Customer_ID">Customer_ID:</label>
        <input type="text" name="Customer_ID" id="Customer_ID">
    </p>
    <input style="background-color: green;font-size: 20px;padding-top: 5px;" type="submit" value="Submit">
</form>
</body>
</html>