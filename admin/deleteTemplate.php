<?php 
    session_start();
    if(isset($_SESSION["login"])){
        include("./connection.php");

        
        $query = "SELECT * FROM template WHERE status='active';";
        $result = mysqli_query($link, $query);

        include "header.php";
?>
        
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Data 
                        </div>
                        <div class="card-body">
                            <table id="datatablesSimple">
                                <thead>
                                    <tr>
                                        <th>Name</th> 
                                        <th>add_by</th> 
                                        <th>deleted_by</th>
                                        <th>status</th> 
                                        <th>Picture</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th> 
                                        <th>add_by</th> 
                                        <th>deleted_by</th>
                                        <th>status</th> 
                                        <th>Picture</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php 
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['picture'] ?></td>
                                            <td><?php echo $row['add_by'] ?></td>
                                            <td><?php echo $row['deleted_by'] ?></td>
                                            <td><?php echo $row['status'] ?></td>
                                            <td><img width="200" src="uploads/<?=$row['picture']?>"></td>
                                            <td><a href="deleteTemplateProcess.php?id=<?php echo $row['id'];?>">Delete</a></td>
                                            
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
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
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