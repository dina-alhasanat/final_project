<?php    require('includes/connection.php'); ?>

<?php  

include('includes/header.php'); 

?>

    <!-- Normal Table area Start-->
    <div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Order Table</h2>
                           
                        </div>
                        <div class="bsc-tbl-cls">
                            <table class="table table-cl">
                                <thead>
                                    <tr>
                                        <th> ID</th>
                                        <th> Date</th>
                                        <th>Customer ID</th>
                                        <th>Product ID</th>
                                        <th>Status</th>
                                        <th>Total Price</th>
                                        <th>QTY</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                   <?php
                                                $query  = 'select * from order';
                                                $result = mysqli_query($conn , $query);
                                                while ($order = mysqli_fetch_assoc($result)) {
                                                    echo "<tr class='active' >";
                                                    echo "<td>{$order['order_id']}</td>";
                                                    echo "<td>{$order['order_date']}</td>";
                                                    echo "<td>{$order['customer_id']}</td>";
                                                    echo "<td>{$order['product_id']}</td>";
                                                    echo "<td>{$order['status']}</td>";
                                                    echo "<td>{$order['total_price']}</td>";
                                                    echo "<td>{$order['qty']}</td>";
                                                    

                                                    
                                                    //? id={$admin['admin_id']} >> get id in url
                                                    echo "<td><a href='edit_order.php ? id={$order['admin_id']}' class='btn btn-info'>Edit</a></td>";

                                                    echo "<td><a href='delete_order.php ? id={$order['admin_id']}' class='btn btn-danger'>Delete</td>";
                                                    echo "</tr>";
                                                }
                                            ?>
                                  
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Normal Table area End-->



<?php  include('includes/footer.php'); ?>