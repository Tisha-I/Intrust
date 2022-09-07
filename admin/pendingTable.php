<?php
    include("./connection.php");
    session_start();
    if(isset($_SESSION["login"])){
        $query1 = "SELECT * FROM orders join company on orders.company_id=company.id WHERE orders.status='pending';";
        $result1 = mysqli_query($link, $query1); 
        include "header.php";
  ?>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4">Pending Orders</h1>
                    <ol class="breadcrumb mb-4">
                        <li class="breadcrumb-item"><a href="home.php">Dashboard</a></li>
                        <li class="breadcrumb-item active">Tables</li>
                    </ol>
                    <?php require_once "tables.php"; ?>
                </div>
            </main>
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