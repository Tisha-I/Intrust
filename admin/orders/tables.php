<div class="card mb-4">
    <div class="card-header">
        <i class="fas fa-table me-1"></i>
        Orders
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
                                        <th>Design</th>
                                        <th>Front Card</th>
                                        <th>Back Card</th>
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
                                        <th>Design</th>
                                        <th>Front Card</th>
                                        <th>Back Card</th>
                                        <th>Processed By</th>
                                        <th>Processed At</th>
                                        <th>Status</th>
                                        <th>Update</th>
                </tr>
            </tfoot>
            <tbody>
                <?php                        
                    while ($row = mysqli_fetch_array($result1)) {
                ?>
                <tr>
                    <td><?php echo $row['name'] ?></td>
                                            <td><?php echo $row['email'] ?></td>
                                            <td><?php echo $row['phone'] ?></td>
                                            <td><?php echo $row['created_at'] ?></td>
                                            <td><?php echo $row['quantity'] ?></td>
                                            <td><img width="200" src="uploads/<?=$row['design']?>"></td>
                                            <td><?php echo $row['frontcard'] ?></td>
                                            <td><?php echo $row['backcard'] ?></td>
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