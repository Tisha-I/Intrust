<?php 
	include "../admin/connection.php";

	if (isset($_POST['submit'])){
        
        $name = $_POST['name'];
        $personName = $_POST['personname'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $design = $_POST['design'];
        $quantity = $_POST['quantity'];
        $template =$design ==1? $_POST['template']: $_FILES['custom']['name'];
        $checkbox1=$_POST['finfo'];
        $front_other=$_POST['front_other'];  
		$front_card="";  
		foreach($checkbox1 as $chk1)  
   		{  
   		   $front_card .= $chk1.",";  
   		}
        $front_card .= $front_other;

        $back_other=$_POST['back_other'];
   		$checkbox2=$_POST['finfo'];  
		$back_card="";  
		foreach($checkbox1 as $chk1)  
   		{  
   		   $back_card .= $chk1.",";  
   		}
        $back_card .= $back_other;

        if ($design==2) {
            $img_name = $_FILES['custom']['name'];
            $img_size = $_FILES['custom']['size'];
            $tmp_name = $_FILES['custom']['tmp_name'];
            $error = $_FILES['custom']['error'];

            $img_ex = pathinfo($img_name, PATHINFO_EXTENSION);
            $img_ex_lc = strtolower($img_ex);

            $allowed_exs = array("jpg", "jpeg", "png", "svg"); 
            if (in_array($img_ex_lc, $allowed_exs)) {
                $new_img_name = uniqid("IMG-", true).'.'.$img_ex_lc;
                $img_upload_path = 'http://admin.intrust.ng/templates/uploads/'.$new_img_name;
                move_uploaded_file($tmp_name, $img_upload_path);
                $template = $new_img_name;
            }else {
                 $em = "You can't upload files of this type";
                 header("Location: idcardform.php?error=$em");
             }
        }

   		$query1 = "INSERT INTO `company`(`name`,`personname`, `email`, `phone`, `address`) VALUES ('$name','$personName','$email','$phone','$address')";
   		$result1 = mysqli_query($link, $query1);
        $company = mysqli_affected_rows($link);
   		$q1 = "select * from company where  id=(select max(id) from company)";
   		$r1 = mysqli_query($link, $q1);
   		$ro1 = mysqli_fetch_assoc($r1);

   		$date = date('d-m-y h:i:s');
   		$company_id = $ro1 ['id'];
   		
   		$query3 = "INSERT INTO `orders`(`company_id`, `created_at`,`frontcard`, `backcard`,`design`,`quantity` ) VALUES ('$company_id','$date','$front_card','$back_card','$template','$quantity')";
   		$result3 = mysqli_query($link, $query3);
        $orders = mysqli_affected_rows($link);

        
        if ($company and $orders){
            header("Location: thanksforordering.html");
        }else{
            echo "<div id='alert' class='alert alert-success' role='alert'> Message not sent, please resend!!!!</div>";

        }
    }
?>