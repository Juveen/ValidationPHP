
<?php 
	include_once('../utilities/validation.php');

	$firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $middlename = $_POST['middlename'];
    $address = $_POST['address'];
    $dateOfBirth = $_POST['dateOfBirth'];
    $gender = $_POST['gender'];
    $guardian = $_POST['guardian'];
    $contactNumber = $_POST['contactNumber'];
    $civilStatus = $_POST['civilStatus'];
    $yearLevel = $_POST['yearLevel'];
    $course = $_POST['course'];
    $schoolYear = $_POST['schoolYear'];

    if (!isEmpty($middlename, $address, $guardian, $civilStatus, $schoolYear)) {
    	echo "Input field<br>";
    	echo '<a href="../index.php">Go Back</a>';
    }
    else if (!isNameValid($firstname, $lastname)) {
    	echo "Firstname and Lastname must be greater than 1<br>";  
    	echo '<a href="../index.php">Go Back</a>';
    }
    else if (!isNumberValid($contactNumber)) {
    	echo "Invalid Number<br>";
    	echo '<a href="../index.php">Go Back</a>';
    }
    else
        echo "Login Success<br><br>";
        echo "<br><b>DATA</b><br>";
        echo "Name: $lastname, $firstname $middlename <br>";
        echo "Address: $address <br>";
        echo "Date of Birth: $dateOfBirth<br>";
        echo "Gender: $gender<br>";
        echo "Guardian: $guardian<br>";
        echo "Contact No.: $contactNumber<br>";
        echo "Civil Status: $civilStatus<br>";
        echo "Year Level: $yearLevel<br>";
        echo "Course: $course<br>";
        echo "School Year: $schoolYear<br>";
 ?>