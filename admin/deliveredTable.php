
<?php
session_start();
include("./connection.php");
if(isset($_SESSION["login"])){
    $query1 = "SELECT orders.id, company.name, company.email, company.phone, orders.created_at, idcard.quantity, idcard.template, orders.status  FROM orders join company on orders.company_id=company.id join idcard on orders.card_id=idcard.id WHERE orders.status='delivered';";
    $result1 = mysqli_query($link, $query1); 

  ?>
        <?php include "header.php"; ?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Delivered Orders</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                            <li class="breadcrumb-item active">Tables</li>
                        </ol>
                        <?php require_once "tables.php"; ?>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; <?php echo date("Y"); ?> Interra Networks Limited. All rights reserved.</div>
                            <div>
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
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