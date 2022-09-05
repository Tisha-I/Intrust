
<?php 
	session_start();
	if(isset($_SESSION["login"])){
		include("./connection.php");

		$id = $_GET['id'];
		$query = "SELECT * FROM `orders` WHERE id = '$id';";

		$result = mysqli_query($link, $query);
		$row = mysqli_fetch_assoc($result);

		if (array_key_exists("soumet", $_POST)) {
			$id = $_POST['id'];
			$status = $_POST['status'];
			$admin = $_SESSION["id"];
			$date = date('d-m-y h:i:s');

			$query = "UPDATE `orders` SET `processed_at`='$date',`processed_by`='$admin',`status`='$status' WHERE `id`='$id';";
			$result = mysqli_query($link, $query);
			if ($result) {
				header("Location: home.php");
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
		<span class="heading">Edit Order</span>
		<table class="table table-striped table-dark">
			<tr>
				<th scope="col">id</th>
				<th scope="col">Company id</th>
				<th scope="col">Card id</th>
				<th scope="col">Created at</th>						
				<th scope="col">Processed at</th>
				<th scope="col">Procesed by</th>
				<th scope="col">Status</th>	
			</tr>
			<tr>
				<td><input type="number" name="id" value="<?php echo $row['id']; ?>" class="form-control"></td>
				<td><input type="number" name="company_id" value="<?php echo $row['company_id']; ?>" class="form-control"></td>
				<td><input type="number" name="card_id" class="form-control" value="<?php echo $row['card_id']; ?>" ></td>
				<td><input type="datetime" name="created_at" class="form-control" value="<?php echo $row['created_at']; ?>" ></td>
				<td><input type="datetime" name="processed_at" class="form-control" value="<?php echo $row['processed_at']; ?>" ></td>
				<td><input type="datetime" name="processed_by" class="form-control" value="<?php echo $row['processed_by']; ?>" ></td>
				<td> 
					<select name="status" class="demoInputBox">
						<option value="delivered">delivered</option>
						<option value="pending">pending</option>
						<option value="canceled">canceled</option>
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