<?php 
    session_start();
    if(isset($_SESSION["login"])){
        include("./connection.php");

        $count1 = "0";
        $count2 = "0";
        $count3 = "0";
        $count4 = "0"; 

        $query1 = "SELECT * FROM orders";
        $result1 = mysqli_query($link, $query1);

        while ($row1 = mysqli_fetch_assoc($result1)) {
            $count1++;
        }

        $query2 = "SELECT * FROM orders WHERE status='delivered';";
        $result2 = mysqli_query($link, $query2);

        while ($row2 = mysqli_fetch_assoc($result2)) {
            $count2++;
        }

        $query3 = "SELECT * FROM orders WHERE status='pending';";
        $result3 = mysqli_query($link, $query3);

        while ($row3 = mysqli_fetch_assoc($result3)) {
            $count3++;
        }

        $query4 = "SELECT * FROM orders WHERE status='canceled';";
        $result4 = mysqli_query($link, $query4);

        while ($row4 = mysqli_fetch_assoc($result4)) {
            $count4++;
        }

        $query = "SELECT company.name,company.email, company.phone,orders.id, orders.created_at, orders.quantity, orders.frontcard,orders.backcard, orders.other,orders.processed_by,orders.processed_at,orders.status,template.picture  FROM orders join company on orders.company_id=company.id join template on orders.card_id=template.id;";
        $result = mysqli_query($link, $query);

        include "header.php";
?>
        
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Dashboard</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item active">Dashboard</li>
                    </ol>
                    <div class="row">
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-primary text-white mb-4">
                                <div class="card-body">All Orders</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php echo $count1; ?>
                                    <div class="small text-white"><i class="fas "></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-success text-white mb-4">
                                <div class="card-body">Delivered Orders</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php echo $count2; ?>
                                    <div class="small text-white"><i class="fas"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-warning text-white mb-4">
                                <div class="card-body">Pending Orders</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php echo $count3; ?>
                                    <div class="small text-white"><i class="fas"></i></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-md-6">
                            <div class="card bg-danger text-white mb-4">
                                <div class="card-body">Canceled Orders</div>
                                <div class="card-footer d-flex align-items-center justify-content-between">
                                    <?php echo $count4; ?>
                                    <div class="small text-white"><i class="fas"></i></div>
                                </div>
                            </div>
                        </div>
                    </div>
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
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Date</th>
                                        <th>Quantity</th>
                                        <th>Template</th>
                                        <th>Front Card</th>
                                        <th>Back Card</th>
                                        <th>Other</th>
                                        <th>Processed By</th>
                                        <th>Processed At</th>
                                        <th>Status</th>
                                        <th>Update</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>Phone</th>
                                        <th>Date</th>
                                        <th>Quantity</th>
                                        <th>Template</th>
                                        <th>Front Card</th>
                                        <th>Back Card</th>
                                        <th>Other</th>
                                        <th>Processed By</th>
                                        <th>Processed At</th>
                                        <th>Status</th>
                                        <th>Update</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php 
                                        while ($row = mysqli_fetch_array($result)) {
                                    ?>
                                        <tr>
                                            <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['phone'] ?></td>
                                            <td><?php echo $row['created_at'] ?></td>
                                            <td><?php echo $row['quantity'] ?></td>
                                            <td><?php echo $row['picture'] ?></td>
                                            <td><?php echo $row['frontcard'] ?></td>
                                            <td><?php echo $row['backcard'] ?></td>
                                            <td><?php echo $row['other'] ?></td>
                                            <td><?php echo $row['processed_by'] ?></td>
                                            <td><?php echo $row['processed_at'] ?></td>
                                            <td><?php echo $row['status'] ?></td>
                                            <td><a href="update_order.php?id=<?php echo $row['id'];?>">Update</a></td>
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