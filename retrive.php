<?php
//code to fetch all data
//query to search users data
if ($result = $mysqli->query($query)) {
	// Don't do anything if successful.
	while ($result_ar = mysqli_fetch_assoc($result)) {
		$pwd = $result_ar['Password1'];
		$email = $result_ar['Email'];
		$name = $result_ar['Name'];
        $class = $result_ar['Class'];
        $rollno = $result_ar['Rollno'];
        $nepali = $result_ar['Nepali'];
		$math = $result_ar['Math'];
		$english = $result_ar['English'];
		$hpe = $result_ar['HPE'];
        $social = $result_ar['Social'];
		$image = $result_ar['image'];
		$avg = $result_ar['Avg'];

}
}

?>