<?php 
    session_start();
    if(isset($_SESSION["login"])){
        include("./../../connection.php");

        
        $query = "SELECT * FROM idcard_admin;";
        $result = mysqli_query($link, $query);

        include "adminHeader.php";
?>
        
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Remove Admin</h1>
                    
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Admins 
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th> 
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Tempered By</th>
                                        <th>Status</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>First Name</th>
                                        <th>Last Name</th> 
                                        <th>Username</th>
                                        <th>Email</th>
                                        <th>Tempered By</th>
                                        <th>Status</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php 
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['fname'] ?></td>
                                            <td><?php echo $row['lname'] ?></td>
                                            <td><?php echo $row['username'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['registered_by'] ?></td>
                                            <td><?php echo $row['status'] ?></td>
                                            <td><a href="deleteAdminProcess.php?id=<?php echo $row['id'];?>">Delete</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <?php include 'footer.php'; ?>
        </div>
        <?php include 'javaScript.php'; ?>
    </body>
</html>
<?php 
    }else{
    echo"You must login" ;
    echo "<a href='./index.php'>login</a>";
    }
?>