<?php 
	include "../admin/connection.php";

	if (isset($_POST['submit'])){

        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $design = isset($_POST['design'])? $_POST['design']:"template";
        $quantity = $_POST['radio'];
        $template =$design ==1? $_POST['template']: $_FILES['custom']['name'];
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

        if ($design==2) {
            $img_name = $_FILES['custom']['name'];
            $img_size = $_FILES['custom']['size'];
            $tmp_name = $_FILES['custom']['tmp_name'];
            $error = $_FILES['custom']['error'];

            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png"); 
            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'uploadedTemplate/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);

                // Insert into Database
                $admin = $_SESSION['id'];
                $sql = "INSERT INTO template(picture, add_by) 
                        VALUES('$new_img_name', '$admin')";
                mysqli_query($link, $sql);
                header("Location: index.html");
            }else {
                $em = "You can't upload files of this type";
                header("Location: index.php?error=$em");
            }
        }
        $design = isset($new_img_name)? $new_img_name:"Null";
   		$query1 = "INSERT INTO `company`(`name`, `email`, `phone`, `address`) VALUES ('$name','$email','$phone','$address')";
   		$result1 = mysqli_query($link, $query1);
        $company = mysqli_affected_rows($link);
   		$q1 = "select * from company where  id=(select max(id) from company)";
   		$r1 = mysqli_query($link, $q1);
   		$ro1 = mysqli_fetch_assoc($r1);

   		// $query2 = "INSERT INTO `idcard`(`template`, `frontcard`, `backcard`, `quantity`) VALUES ('$template','$front_card','$back_card','$quantity')";
   		// $result2 = mysqli_query($link, $query2);
     //    $idcard = mysqli_affected_rows($link);
   		// $q2 = "select * from company where  id=(select max(id) from company)";
   		// $r2 = mysqli_query($link, $q2);
   		// $ro2 = mysqli_fetch_assoc($r2);

   		$date = date('d-m-y h:i:s');
   		$company_id = $ro1 ['id'];
   		
   		$query3 = "INSERT INTO `orders`(`company_id`, `created_at`,`frontcard`, `backcard`,`design`,`quantity` ) VALUES ('$company_id','$date','$front_card','$back_card','$template','$quantity')";
   		$result3 = mysqli_query($link, $query3);
        $orders = mysqli_affected_rows($link);

        
        if ($company and $orders){
            echo "<div id='alert' class='alert alert-success' role='alert'> Order sent!!</div>";
        }else{
            echo "<div id='alert' class='alert alert-success' role='alert'> Message not sent, please resend!!!!</div>";

        }
    }
?>