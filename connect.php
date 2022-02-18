<?php
	$inputFirstName = $_POST[$inputFirstName]
		$inputLastName = $_POST[$inputLastName]
		$inputEMAdd = $_POST[$inputEMAdd]
		$inputTele = $_POST[$inputTele]
		$inputSecondAdd = $_POST[$inputSecondAdd]
		$inputCity = $_POST[$inputCity]
		$inputPostCode = $_POST[$inputPostCode]
		$inputPass = $_POST[$inputPass]
		$inputConPass = $_POST[$inputConPass]
		
		//DB connection
		$conn = new mysqli('localhost', 'root', 'test');
if($conn-> mysqli_connect_error()){
	die('Connection failed : ' .$conn-> mysqli_connect_error());
}
else{
	$stmt = $conn->prepare("insert into registration(inputFirstName, inputLastName,inputEMAdd,inputTele, inputSecondAdd, inputCity,inputPostCode , inputPass, inputConPass)
	values(?,?,?,?,?,?,?,?,?)");
	$stmt ->bind_param("sssississ", $inputFirstName,$inputLastName,$inputEMAdd, $inputTele, $inputSecondAdd,$inputCity,$inputPostCode,$inputPass,$inputConPass );
	$stmt->execute();
	echo "registration complete";
	$stmt-> close();
	$conn->close();
}
?>