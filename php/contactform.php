<?php

		$conn = mysqli_connect("localhost", "root", "", "contact_2");
		
		// Check connection
		if($conn === false){
			die("ERROR: Could not connect. "
				. mysqli_connect_error());
		}
		
		// Taking all 5 values from the form data(input)
		$f_name = $_REQUEST['f_name'];
		$l_name = $_REQUEST['l_name'];
		$country = $_REQUEST['country'];
		$email = $_REQUEST['email'];
		$subject = $_REQUEST['subject'];
		
		// Performing insert query execution
		// here our table name is college
		$sql = "INSERT INTO data VALUES ('$f_name',
			'$l_name','$country','$email','$subject')";
		
		if(mysqli_query($conn, $sql)){
			echo            "<h1>Thanks for your words!</h1>";

			
		} else{
			echo "ERROR: Hush! $sql. "
				. mysqli_error($conn);
		}
		
		// Close connection
		mysqli_close($conn);
		?>