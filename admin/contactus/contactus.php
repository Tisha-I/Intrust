<?php 
    session_start();
    if(isset($_SESSION["login"])){
        include("./../connection.php");

        
        $query = "SELECT * FROM contactus;";
        $result = mysqli_query($link, $query);

        include "./contactHeader.php";
?>
        
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Contact Us</h1>
                    
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Messages 
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th scope="col">Sender Name</th>
                                          <th scope="col">Sender Email</th>
                                          <th scope="col">Company Name</th>
                                          <th scope="col">Date</th>
                                          <th scope="col">Content</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Update</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th scope="col">Sender Name</th>
                                          <th scope="col">Sender Email</th>
                                          <th scope="col">Company Name</th>
                                          <th scope="col">Date</th>
                                          <th scope="col">Content</th>
                                          <th scope="col">Status</th>
                                          <th scope="col">Update</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php 
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['user_name'] ?></td>
                                            <td><?php echo $row['user_email'] ?></td>
                                            <td><?php echo $row['company_name'] ?></td>
                                            <td><?php echo $row['date'] ?></td>
                                            <td><?php echo $row['content'] ?></td>
                                            <td><?php echo $row['status'] ?></td>
                                            <td><a href="updateMessage.php?id=<?php echo $row['id'];?>">Update</a></td>
                                        </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </main>
            <?php include './../footer.php'; ?>
        </div>
        <?php include './../javaScript.php'; ?>
    </body>
</html>
<?php 
    }else{
    echo"You must login" ;
    echo "<a href='./../index.php'>login</a>";
    }
?>