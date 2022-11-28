<?php

    $YourName = $_POST['your_name'];
    $Email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];


    /*
    $conn = new mysqli('localhost','root','','test1');
	if($conn->connect_error){
		echo "$conn->connect_error";
		die("Connection Failed : ". $conn->connect_error);
	} else {
		$stmt = $conn->prepare("insert into feedback(YourName, Email, subject, message) values(?, ?, ?, ?)");
		$stmt->bind_param("ssss", $YourName, $Email, $subject, $message);
		$execval = $stmt->execute();
		echo $execval;
		echo "Registration successfully...";
		$stmt->close();
		$conn->close();
	}
    */

    
    $conn = mysqli_connect('localhost','root','');
    mysqli_select_db($conn,'test1');
	 $q="insert into feedback values( '$YourName', '$Email', '$subject', '$message');";
    $r= mysqli_query($conn,$q);
     

?>


