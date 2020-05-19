<?php

    require('includes/connection.php');
    if (isset($_POST['submit'])) {
        $name     = $_POST['cust_name'];
        $email    = $_POST['cust_email'];
        $password = $_POST['cust_pass'];
        $mobile   = $_POST['cust_mobile'];
        $address  = $_POST['cust_address'];

        $query = "insert into customer (customer_name , customer_email , customer_password , mobile , address)
                  values ('$name' , '$email' , '$password' , '$mobile' , '$address')";
        
        mysqli_query($conn , $query);

        header('location:manage_customer.php');
    }

?>

<?php  include('includes/header.php'); ?>
<!-- Form Examples area start-->
    <div class="form-example-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="form-example-wrap">
                    <form action="" method="post">
                        <div class="cmp-tb-hd">
                            <h2>Customer information</h2>

                        </div>
                        <div class="form-example-int">
                            <div class="form-group">
                                <label>Customer Name </label>
                                <div class="nk-int-st">
                                    <input name="cust_name" type="text" class="form-control input-sm" >
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Customer Email</label>
                                <div class="nk-int-st">
                                    <input name="cust_email" type="text" class="form-control input-sm" >
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Customer Password</label>
                                <div class="nk-int-st">
                                    <input name="cust_pass"  type="Password" class="form-control input-sm" >
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Customer Mobile</label>
                                <div class="nk-int-st">
                                    <input name="cust_mobile" type="number" class="form-control input-sm" >
                                </div>
                            </div>
                        </div>
                        <div class="form-example-int mg-t-15">
                            <div class="form-group">
                                <label>Customer Address</label>
                                <div class="nk-int-st">
                                    <input name="cust_address" type="text" class="form-control input-sm" >
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-example-int mg-t-15">
                            <button  class="btn btn-success notika-btn-success" type="submit" name="submit">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

   <!-- Normal Table area Start-->
    <div class="normal-table-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="normal-table-list mg-t-30">
                        <div class="basic-tb-hd">
                            <h2>Customer Table</h2>
                           
                        </div>
                        <div class="bsc-tbl-cls">
                            <table class="table table-cl">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Name</th>
                                        <th>Email</th>
                                        <th>mobile</th>
                                        <th>Aderss</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                                $query  = 'select * from customer';
                                                $result = mysqli_query($conn , $query);
                                                while ($customer = mysqli_fetch_assoc($result)) {
                                                    echo "<tr class='active'>";
                                                    echo "<td>{$customer['customer_id']}</td>";
                                                    echo "<td>{$customer['customer_name']}</td>";
                                                    echo "<td>{$customer['customer_email']}</td>";
                                                    echo "<td>{$customer['mobile']}</td>";
                                                    echo "<td>{$customer['address']}</td>";
                                                    echo "<td><a href = 'edit_cust.php ? id={$customer['customer_id']}' class = 'btn btn-info'>Edit</a></td>";
                                                    echo "<td><a href = 'delete_cust.php ? id={$customer['customer_id']}' class = 'btn btn-danger'>Delete</a></td>";
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