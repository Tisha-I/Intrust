<?php 
    session_start();
    if(isset($_SESSION["login"])){
        include("../connection.php");

        
        $query = "SELECT * FROM template WHERE status='active';";
        $result = mysqli_query($link, $query);

        include "./templateHeader.php";
?>
        
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Remove Template</h1>
                    
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-table me-1"></i>
                            Templates 
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
            <?php include '../footer.php'; ?>
        </div>
        <?php include '../javaScript.php'; ?>
    </body>
</html>
<?php 
    }else{
    echo"You must login" ;
    echo "<a href='./index.php'>login</a>";
    }
?>