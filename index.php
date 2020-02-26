<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" type="text/css" href="css/global.css">
	<link rel="stylesheet" type="text/css" href="css/registration.css">
</head>
<body>
	<div class="row">
		<div class="col-12">
			
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			<div class="registrationBox">
				<h1>Registration Form</h1>
				<form action="transaction/dataSend.php" method="post">
					<input type="text" name="firstname" placeholder="First Name" required><br>
					<input type="text" name="lastname" placeholder="Last Name" required><br>
					<input type="text" name="middlename" placeholder="Middle Name" required><br>
					<input type="text" name="address" placeholder="Address Name" required><br>
					<label>
						Date of Birth:<br>
						<input type="date" name="dateOfBirth" value="2020-01-01"><br>
					</label>
					<input type="text" name="placeOfBirth" placeholder="Place of Birth" required><br>
					<label>
						Gender: 
						<input type="radio" name="gender" value="male" checked>Male
						<input type="radio" name="gender" value="female">Female
					</label><br>
					<input type="text" name="guardian" placeholder="Guardian" required><br>
					<input type="text" name="contactNumber" placeholder="Contact No. +63" required value="+63"><br>
					<input type="text" name="civilStatus" placeholder="Civil Status"><br>
					<label>
						Year Level:
						<select name="yearLevel">
						    <option value="1st Year">1st Year</option>
						    <option value="2nd Year">2nd Year</option>
						    <option value="3rd Year">3rd Year</option>
						    <option value="4th Year">4th Year</option>
						</select>
					</label><br>
					<label>
						Course
						<select name="course">
						    <option value="BS-IT">BS-IT</option>
						    <option value="BS-TCM">BS-TCM</option>
						    <option value="BS-CpE">BS-CpE</option>
						</select>
					</label><br>
					<input type="text" name="schoolYear" placeholder="School Year" required><br>
					<button type="submit">Register</button>
				</form>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-12">
			
		</div>
	</div>
</body>
</html>
