
<?php 
session_start();
if(isset($_SESSION["login"])){
    include 'connection.php'; 
    include 'header.php';
?>

        <div id="layoutSidenav_content">
            <div class="container mt-2">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-header">
                            <h2>Contact Us Messages</h2>
                        </div>
                        <table class="table">
                            <thead>
                                <tr>
                                  <th scope="col">Sender Name</th>
                                  <th scope="col">Sender Email</th>
                                  <th scope="col">Company Name</th>
                                  <th scope="col">Date</th>
                                  <th scope="col">Content</th>
                                  <th scope="col">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                        
                                <?php 
                                    $query = "SELECT *  FROM contactus ORDER BY id DESC;";
                                    $result = mysqli_query($link, $query);

                                    while ($row = mysqli_fetch_array($result)) {
                                ?>
                                <tr>
                                    <td><?php echo $row['user_name'] ?></td>
                                    <td><?php echo $row['user_email'] ?></td>
                                    <td><?php echo $row['company_name'] ?></td>
                                    <td><?php echo $row['date'] ?></td>
                                    <td><?php echo $row['content'] ?></td>
                                    <td><?php echo $row['status'] ?></td>
                                </tr>
                                <?php 
                                    } 
                                    mysqli_free_result($result);
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>        
            </div>
            <?php include 'footer.php'; ?>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php 
    }else{
    echo"You must login" ;
    echo "<a href='./index.php'>login</a>";
    }
?>