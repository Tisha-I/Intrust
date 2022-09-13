
<?php 
	session_start();
	if(isset($_SESSION["login"])){
		include("./../../connection.php");

		$id = $_GET['id'];
		$query = "SELECT * FROM `idcard_admin` WHERE id = '$id';";

		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_assoc($result);

		if (array_key_exists("soumet", $_POST)) {
			
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$username = $_POST['username'];
			$email = $_POST['email'];
			$status = $_POST['status'];
			$admin = $_SESSION["id"];

			$query = "UPDATE `idcard_admin` SET `fname`='$fname',`lname`='$lname',`username`='$username',`email`='$email',`registered_by`='$admin',`status`='$status' WHERE id='$id';";
			$result = mysqli_query($link, $query);
			if ($result) {
				header("Location: displayAdmin.php");
				echo "<div id='alert' class='alert alert-success' role='alert'> Updated successfully </div>";

			}else{
				echo "Error occurred, try again please!";
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
		<span class="heading">Edit Admin</span>
		<table class="table table-striped table-dark">
			<tr>
				<th>First Name</th>
                <th>Last Name</th> 
                <th>Username</th>
                <th>Email</th>
                <th>Tempered By</th>
                <th>Status</th>
			</tr>
			<tr>
				<td><input type="text" name="fname" value="<?php echo $row['fname']; ?>" class="form-control"></td>
				<td><input type="text" name="lname" value="<?php echo $row['lname']; ?>" class="form-control"></td>
				<td><input type="text" name="username" class="form-control" value="<?php echo $row['username']; ?>" ></td>
				<td><input type="text" name="email" class="form-control" value="<?php echo $row['email']; ?>" ></td>
				<td><input type="number" name="registered_by" class="form-control" value="<?php echo $row['registered_by']; ?>" ></td>
				<td>
					<select name="status"  class="form-control" class="demoInputBox">
						<option value="active">active</option>
						<option value="inactive">inactive</option>
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