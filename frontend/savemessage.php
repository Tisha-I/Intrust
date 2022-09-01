<?php 
	include "../admin/connection.php";

	if (isset($_POST['submit'])){

        $fullname = $_POST['fullname'];
        $company = $_POST['companyname'];
        $email = $_POST['email'];
        $message = $_POST['message'];

   		$query1 = "INSERT INTO `contactus`(`user_name`, `user_email`, `company_name`, `content`) VALUES ('$fullname','$email','$company','$message')";
   		$result1 = mysqli_query($link, $query1);
        

        if (mysqli_affected_rows($link)){
            echo "<div id='alert' class='alert alert-success' role='alert'> Message sent!!</div>";
        }else{
            echo "<div id='alert' class='alert alert-success' role='alert'> Message not sent, please resend!!</div>";

        }
    }
?>