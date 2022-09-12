
<?php 
 error_reporting(0);
	session_start();
	if(isset($_SESSION["login"])){
		include("./connection.php");

		$id = $_GET['id'];
		$query = "SELECT * FROM `contactus` WHERE id = '$id';";

		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_assoc($result);

		if (array_key_exists("soumet", $_POST)) {
			$id = $_POST['id'];
			$status = $_POST['status'];
			//$admin = $_SESSION["id"];
			//$date = date('d-m-y h:i:s');

			$query = "UPDATE `contactus` SET `status`='$status' WHERE `id`='$id';";
			$result = mysqli_query($link, $query);
			if ($result) {
				header("Location: contactus.php");
				echo "<div id='alert' class='alert alert-success' role='alert'> Updated successfully </div>";

			}else{
				echo "Erreur survenu, s'il vous plait reentrer les informations!";
			}
		}
?>
 	
 <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

<style type="text/css">
	#container{
		height: 50%;
		margin: 10px 20px 70px;
		border: 2px solid black;
		padding: 12px;
	}
	
	.heading{
		font-weight: bold;
		font-size: 30px;
		text-decoration: underline;
	}

	#alert{padding-left: 46px;}
</style>

<div id="container">
	<form method="post">
		<span class="heading">Message Read</span>
		<table class="table table-striped table-dark">
			<tr>
				<th scope="col">id</th>
				<th scope="col">Sender Name</th>
                <th scope="col">Sender Email</th>
                <th scope="col">Company Name</th>
                <th scope="col">Date</th>
                <th scope="col">Status</th>	
			</tr>
			<tr>
				<td><input type="number" name="id" value="<?php echo $row['id']; ?>" class="form-control"></td>
				<td><input type="text" name="name" value="<?php echo $row['user_name']; ?>" class="form-control"></td>
				<td><input type="email" name="email" class="form-control" value="<?php echo $row['user_email']; ?>" ></td>
				<td><input type="text" name="company_name" class="form-control" value="<?php echo $row['company_name']; ?>" ></td>
				<td><input type="datetime" name="date" class="form-control" value="<?php echo $row['date']; ?>" ></td>
				<td> 
					<select name="status" class="demoInputBox">
						<option value="unread">unread</option>
						<option value="read">read</option>
					</select> 
				</td>
			</tr>
		</table>
				
		<div class="form-row">
			<div class="form-group col-md-4">
				<input style="margin-left: 138%;" class="btn btn-dark" type="submit" name="soumet" value="Submit"><br><br>
			</div>				
		</div>
	</form>
</div>

<?php 
    }else{
    	echo"You must login" ;
    	echo "<a href='./index.php'>login</a>";
	}
?>