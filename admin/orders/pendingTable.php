<?php
    include("../connection.php");
    session_start();
    if(isset($_SESSION["login"])){
        $query1 = "SELECT orders.id, orders.created_at,orders.quantity, orders.design, orders.frontcard, orders.backcard,orders.status, orders.processed_by, orders.processed_at, company.name,company.email, company.phone FROM orders join company on orders.company_id=company.id WHERE orders.status='pending';";
        $result1 = mysqli_query($link, $query1); 
        include "OrderHeader.php";
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
                <?php include '../footer.php'; ?>
        </div>
        <?php include "../javaScript.php"; ?>
    </body>
</html>
<?php 
    }else{
        echo"You must login" ;
        echo "<a href='./index.php'>login</a>";
    }
?>