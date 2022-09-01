<?php 
	include "../admin/connection.php";

	if (isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $design = isset($_POST['design'])? $_POST['design']:"template";
        $quantity = $_POST['radio'];
        $template =$design =="template"? $_POST['template']: $_POST['custom'];
        $checkbox1=$_POST['finfo'];  
		$front_card="";  
		foreach($checkbox1 as $chk1)  
   		{  
   		   $front_card .= $chk1.",";  
   		}

   		$checkbox2=$_POST['finfo'];  
		$back_card="";  
		foreach($checkbox1 as $chk1)  
   		{  
   		   $back_card .= $chk1.",";  
   		}

   		$query1 = "INSERT INTO `company`(`name`, `email`, `phone`, `address`) VALUES ('$name','$email','$phone','$address')";
   		$result1 = mysqli_query($link, $query1);
        $company = mysqli_affected_rows($link);
   		$q1 = "select * from company where  id=(select max(id) from company)";
   		$r1 = mysqli_query($link, $q1);
   		$ro1 = mysqli_fetch_assoc($r1);

   		$query2 = "INSERT INTO `idcard`(`template`, `frontcard`, `backcard`, `quantity`) VALUES ('$template','$front_card','$back_card','$quantity')";
   		$result2 = mysqli_query($link, $query2);
        $idcard = mysqli_affected_rows($link);
   		$q2 = "select * from company where  id=(select max(id) from company)";
   		$r2 = mysqli_query($link, $q2);
   		$ro2 = mysqli_fetch_assoc($r2);

   		$date = date('d-m-y h:i:s');
   		$company_id = $ro1 ['id'];
   		$card_id = $ro2 ['id'];
   		$query3 = "INSERT INTO `orders`(`company_id`, `card_id`, `created_at`) VALUES ('$company_id','$card_id','$date')";
   		$result3 = mysqli_query($link, $query3);
        $orders = mysqli_affected_rows($link);

        if ($company and $idcard and $orders){
            echo "<div id='alert' class='alert alert-success' role='alert'> Order sent!!</div>";
        }else{
            echo "<div id='alert' class='alert alert-success' role='alert'> Message not sent, please resend!!!!</div>";

        }
    }
?>